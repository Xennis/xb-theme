<?php
/**
 * Custom template tags
 */

/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
function xbTheme_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( !is_singular() ) : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
		<?php
			the_post_thumbnail( array(180,180), array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}

