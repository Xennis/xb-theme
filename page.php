<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 */
get_header(); ?>

	<?php
	// Start the loop.
	while (have_posts()) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'page' ); ?>
		<section class="dark">
			<div class="article-footer-area">
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div><!-- .article-footer-area -->
		</section><!-- .dark -->
		<?php
	endwhile;
	?>

<?php get_footer(); ?>