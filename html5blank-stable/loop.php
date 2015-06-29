<?php if (have_posts()): while (have_posts()) : the_post(); ?>

 <?php if (!has_tag('logoonly')){ ?>
<div class="row entry">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-md-12 entry-header" style="">
		<?php 
		   if( class_exists('Dynamic_Featured_Image') ) {
		       global $dynamic_featured_image;
		       $featured_images = $dynamic_featured_image->get_featured_images( );
		       $head = wp_get_attachment_image_src( $featured_images[0]['attachment_id'], "news-featured");
		       $head = $head[0];
		      ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img src='<?php echo $head;?>'/>
			</a>
		      
		<?php   } ?>

	</div>
	<div class="interior-page-content col-md-6 col-md-push-3">
	<div class="entry-lede">
		<!-- post title -->
		<h1>
			<?php the_title(); ?>
		</h1>
		<!-- /post title -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>
		<a class="readmore" href="<?php the_permalink(); ?>">Read More &raquo;</a>
		</div>
	</article>
	<!-- /article -->
</div>
<?php } ?>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
