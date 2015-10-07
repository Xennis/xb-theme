<?php
/**
 * The template for displaying search results pages.
 */
get_header(); ?>

	<section class="light">
		<div class="site-main-content">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', XB_THEME_NAME ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'content', '' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', XB_THEME_NAME ),
				'next_text'          => __( 'Next page', XB_THEME_NAME ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', XB_THEME_NAME ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</div><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
