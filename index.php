<?php
$category = 'Blog';
get_header();

$counter = 0;
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<section class="<?php echo ($counter++ % 2 == 0 ? 'light' : 'dark');?>">
		<article>
			<h1><?php the_title() ?></h1>
			<?php the_content(); ?>
			<div class="post-info">
				<?php the_date('l, jS F Y'); ?>
				<?php
				if (get_the_date('c') != get_the_modified_date('c')) {
					echo '(updated: '.get_the_modified_date('j.n').')';
				}
				?>
				<div class="tags"><?php the_tags('Tags: ', ', ', ''); ?></div>
				<div class="category">Category: <?php the_category(' &gt; ', 'multiple'); ?></div>
			</div><!-- .post-info -->
		</article>
	</section>

	<?php endwhile;
	
else:
	get_template_part('content', 'none');

endif;

get_footer();