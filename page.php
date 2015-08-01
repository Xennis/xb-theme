<?php
get_header();

while (have_posts()) : the_post(); ?>

	<section class="light">
		<article>
			<h1><?php the_title() ?></h1>
			<?php the_content(); ?>
		</article>
	</section>

<?php endwhile;

get_footer();