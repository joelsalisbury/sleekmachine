<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php if (get_post_meta(get_the_ID(), "excerpt", true)){?>
<!-- 	    <div id="interior-jumbo" class="jumbotron">
	      <div class="header-wrap col-md-4 col-md-push-4">
	      
	        <h1><?php echo get_post_meta(get_the_ID(), "excerpt", true);?></h1>

	      </div>
	    </div> -->
        <?php }?>
	<div id="allwrap" class="container">
	<main role="main">
		<!-- section -->
		<section>
      <div class="row">
        <div class="interior-page-content col-md-8 col-md-push-2">
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
			</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
