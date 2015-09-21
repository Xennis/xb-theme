<?php
/**
 * The template for displaying all single posts
 */
$category = 'Blog';
get_header();
while (have_posts()) : the_post(); ?>

	<section class="light">
		<?php get_template_part( 'content' ); ?>
	</section>
	<section class="dark">
		<article>
			<ol class="commentlist">
				<?php comments_template(); ?>
			</ol>			
		</article>
	</section>

<?php endwhile;
get_footer();