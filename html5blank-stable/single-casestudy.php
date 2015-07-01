<?php get_header(); ?>
<?php
$color = get_post_meta( get_the_ID(), "color", true );
$menu = get_post_meta(get_the_ID(),"menu-slug",true);
?>
<?php $clients = wp_get_post_terms(get_the_ID(), "clients" ); ?> 
<?php $client = $clients[0];?>

    <div id="interior-jumbo" class="jumbotron <?php echo $color;?> clearfix">
    <div class="col-md-8 col-md-push-2 swiper-container" style="padding-left:0px; padding-right:0px;">
      <div class="swiper-wrapper">
		<?php
			$menu = wp_get_nav_menu_object ($menu);
		 
		    $menu_items = wp_get_nav_menu_items($menu->term_id);
		    
		    foreach ($menu_items as $menu_item) {
		        $menupost=get_post($menu_item->object_id);

				   if( class_exists('Dynamic_Featured_Image') ) {
				       global $dynamic_featured_image;
				       $featured_images = $dynamic_featured_image->get_featured_images( $menu_item->object_id );
				       $head = wp_get_attachment_image_src( $featured_images[0]['attachment_id'], "full");
				       $head = $head[0];
		        	echo '<div class="swiper-slide"><img src="'. $head .'"></div>';
		    	
		    		}
			}

		?>

      </div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev swiper-button-white"></div>
		<div class="swiper-button-next swiper-button-white"></div>
      </div>
    </div>

<div id="allwrap" class="container">
	<main role="main">
		<!-- section -->
		<section>
      <div class="row">
        <div class="interior-page-content col-md-8 col-md-push-2">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>



		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post details -->
			<h3>
				<strong> <?php echo $client->name;?> </strong><?php the_title(); ?>
			</h3>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
		</div>
		</div>
	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
