<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 */
get_header();

while (have_posts()) : the_post(); ?>

	<section class="light">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php endif; ?>
				
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
			
			<div class="entry-content">
				<?php the_content(); ?>
				<?php /*wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );*/ ?> 
			</div><!-- .entry-content -->

		</article><!-- #post -->
	</section>

	<?php comments_template();
endwhile;

get_footer();