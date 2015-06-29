<?php get_header(); ?>
<?php
$color = get_post_meta( get_the_ID(), "color", true );
?>

    <div id="interior-jumbo" class="jumbotron <?php echo $color;?>">
      <div class="header-wrap col-md-4 col-md-push-4">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>

<div id="allwrap" class="container">
	<main role="main">
		<!-- section -->
		<section>
      <div class="row">
        <div class="interior-page-content col-md-6 col-md-push-3">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
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
