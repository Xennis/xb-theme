<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header();

if ( have_posts() ) : ?>
	<section class="light">
		<article>			
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category: %s', XB_THEME_NAME ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
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