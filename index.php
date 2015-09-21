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
get_header();

$counter = 0;
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<section class="<?php echo ($counter++ % 2 == 0 ? 'light' : 'dark');?>">
		<?php get_template_part( 'content', get_post_format() ); ?>
	</section>

	<?php endwhile;
	
else:
	get_template_part( 'content', 'none' );
endif;

get_footer();