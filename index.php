<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

	<section id="blog" class="light">
		<div class="site-main-content">
			<h1>Blog</h1>

		<?php if (have_posts()) :
			//dynamic_sidebar( 'sidebar-1' );
			while (have_posts()) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
	
		else:
			get_template_part( 'content', 'none' );
		endif;
		?>

		</div><!-- .site-main-content" -->
	</section>

<?php
$page = get_page('14');
echo apply_filters( 'the_content', $page->post_content );

get_footer(); ?>