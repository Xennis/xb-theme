<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 */
get_header();

	while (have_posts()) : the_post(); ?>
	<section class="light">
		<div class="site-main-content">
			<?php get_template_part( 'content', 'page' ); ?>
		</div><!-- .site-main-content -->
	</section><!-- .light-->
	<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
	?>
			<section class="dark">
				<div class="site-main-meta">
					<?php comments_template(); ?>
				</div><!-- .site-main-meta -->
			</section><!-- .dark -->
	<?php
		endif;
	endwhile;

get_footer(); ?>