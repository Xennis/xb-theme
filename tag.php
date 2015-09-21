<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header();

if ( have_posts() ) : ?>
	<section class="light">
		<article>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Tag: %s', XB_THEME_NAME ), single_tag_title( '', false ) ); ?></h1>

				<?php if ( tag_description() ) : // Show an optional tag description ?>
				<div class="archive-meta"><?php echo tag_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		</article>
	</section>

<?php else :
	get_template_part( 'content', 'none' );
endif;

get_footer();
