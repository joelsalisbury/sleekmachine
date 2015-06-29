<?php get_header(); ?>

<div id="allwrap" class="container">
<main role="main">
<div class="row">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

 <?php if (!has_tag('logoonly')){ ?>
<div class=" col-md-4">

<?php $clients = wp_get_post_terms(get_the_ID(), "clients" ); ?> 
<?php $client = $clients[0];?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php 
		   if( class_exists('Dynamic_Featured_Image') ) {
		       global $dynamic_featured_image;
		       $featured_images = $dynamic_featured_image->get_featured_images( );
		       $head = wp_get_attachment_image_src( $featured_images[0]['attachment_id'], "work-featured");
		       $head = $head[0];
		      ?>

				<img src='<?php echo $head;?>'/>
			
		      
		<?php   } ?>


			<!-- post title -->
			<h3>
				<strong> <?php echo $client->name;?> </strong><?php the_title(); ?>
			</h3>
			<!-- /post title -->

</a>
	</article>
	<!-- /article -->
</div>
<?php } ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_template_part('pagination'); ?>

</main>


<?php get_footer(); ?>
