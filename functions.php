<?php
/**
 * Theme name
 */
define('XB_THEME_NAME', 'xb-wp-theme');

/**
 * Enqueue scripts and styles.
 */
function xbTheme_scripts() {
	wp_enqueue_style(XB_THEME_NAME.'-style', get_template_directory_uri().'/dist/'.XB_THEME_NAME.'.min.css');
	wp_enqueue_script(XB_THEME_NAME.'-script', get_template_directory_uri().'/dist/'.XB_THEME_NAME.'.js', array('jquery'));	
}
add_action('wp_enqueue_scripts', 'xbTheme_scripts');

if (!function_exists('xbTheme_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */	
function xbTheme_setup() {
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	//load_theme_textdomain(XB_THEME_NAME, get_template_directory() . '/languages');

	// Register navigation menus
	register_nav_menus(array(
		'primary' => __('Primary menu', XB_THEME_NAME)
	));

	add_theme_support('title-tag');
}
endif; // xbTheme_setup
add_action('after_setup_theme', 'xbTheme_setup');

add_shortcode('xbTheme_recent_post', 'xbTheme_add_shortcode_recent_post');
function xbTheme_add_shortcode_recent_post() {
	$args = array(
		'numberposts' => '5'
	);
	$recent_posts = wp_get_recent_posts($args);
	$returnString = '';
	foreach( $recent_posts as $recent ){
		$returnString .= '<h4>'.$recent['post_title'].'</h4>';
		$returnString .= '<p><a href="'.get_permalink($recent['ID']).'">'.wp_trim_words($recent['post_content'], 60, ' ... read more!').'</a>';
		$date = date_create($recent['post_date']);
		$returnString .= '<div class="postDate">'.date_format($date, 'l, jS F Y');
		if ($recent['post_modified'] != $recent['post_date']) {
			$date = date_create($recent['post_modified']);
			$returnString .= ' (updated: '.date_format($date, 'j.n').')'; 
		}
		$returnString .= '</div><!-- .postDate --></p>';
	}	
	return $returnString;
}