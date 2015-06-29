<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php if (get_post_meta(get_the_ID(), "excerpt", true)){?>
	    <div id="interior-jumbo" class="jumbotron">
	      <div class="header-wrap col-md-4 col-md-push-4">
	      
	        <h1><?php echo get_post_meta(get_the_ID(), "excerpt", true);?></h1>

	      </div>
	    </div>
        <?php }?>
	<div id="allwrap" class="container">
	<main role="main">
		<!-- section -->
		<section>

<div class="row" id="work-feature">

		<?php
			$menu = wp_get_nav_menu_object ('featured-case-studies');
		 
		    $menu_items = wp_get_nav_menu_items($menu->term_id);
		    
		    foreach ($menu_items as $menu_item) {

		        $menupost=get_post($menu_item->object_id);
		        $color = get_post_meta( $menu_item->object_id, "color", true );
		        $size = $menu_item->classes[0] ? $menu_item->classes[0] : "col-md-3";
		        $size2 = $menu_item->classes[1] ? $menu_item->classes[1] : "";


		        echo '<div class="'.$size.' '.$size2. ' col-xs-6 tile '.$color.'">';
		       	if (!has_tag('logoonly',$menu_item->object_id)){
		        	echo '<a href="'.$menu_item->url.'">';
		    	}
		        echo get_the_post_thumbnail($menu_item->object_id).
		        	'<div class="blurb">'.
		        	$menupost->post_excerpt
		        	.'</div>';

		       	if (!has_tag('logoonly',$menu_item->object_id)){
		       		echo '</a>';
		    	}

		        echo '</div>';
		        
		    }

		?>
		

		<?php endwhile; ?>
		<?php endif; ?>

			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>





		