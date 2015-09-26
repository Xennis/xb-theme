<?php
/**
 * The template for displaying all single posts and attachments
 */
get_header();

	while (have_posts()) : the_post();  ?>
	<section class="light">
		<div class="site-main-content">
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			?>
		</div><!-- .site-main-content -->
	</section><!-- .light-->
	<section class="dark">
		<div class="site-main-meta">
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div><!-- .site-main-meta -->
	</section><!-- .dark -->
	<?php
	endwhile;

get_footer(); ?>