<?php get_header(); ?>

    <div id="jumbo" class="jumbotron swiper-container">
      <div class="swiper-wrapper">
        <!-- <div class="swiper-slide home-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sliders/slider1-min.jpg" alt=""></div>
        <div class="swiper-slide home-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sliders/slider2-min.jpg" alt=""></div>
        <div class="swiper-slide home-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sliders/slider3-min.jpg" alt=""></div>
        <div class="swiper-slide home-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sliders/slider4-min.jpg" alt=""></div>
        <div class="swiper-slide home-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sliders/slider5-min.jpg" alt=""></div>
        <div class="swiper-slide home-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sliders/slider6-min.jpg" alt=""></div>
       -->
<?php
	$menu = wp_get_nav_menu_object ('homepage-slider-items');
 
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    
    foreach ($menu_items as $menu_item) {
        $menupost=get_post($menu_item->object_id);
        echo '<div class="swiper-slide home-slide">'. get_the_post_thumbnail($menu_item->object_id) .'</div>';
    }

?>

      </div>
            <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>

<div class="container">
	<main role="main">

	</main>

<?php get_footer(); ?>
