<?php
/**
 * The template for displaying all single posts and attachments
 */
get_header(); ?>

		<?php
		// Start the loop.
		while (have_posts()) : the_post();

			get_template_part( 'content', get_post_format() ); ?>
			<section class="dark">
				<div class="article-footer-area">
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="screen-reader-text">' . __( 'Next post:', XB_THEME_NAME ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous post:', XB_THEME_NAME ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
			?>
				</div><!-- .article-footer-area -->
			</section><!-- .dark -->
			<?php
		// End the loop.
		endwhile;
		?>

<?php get_footer(); ?>