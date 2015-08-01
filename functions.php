<?php
/**
 * Theme name
 */
define('XB_THEME_NAME', 'xb-wp-theme');

/**
 * Enqueue scripts and styles.
 */
function xbTheme_scripts() {
	wp_enqueue_style(XB_THEME_NAME.'-style', get_stylesheet_uri());
	
	wp_enqueue_script(XB_THEME_NAME.'-script-aN', get_template_directory_uri().'/js/components/animateNavbar.js', array('jquery'));
	wp_enqueue_script(XB_THEME_NAME.'-script-sT', get_template_directory_uri().'/js/components/scrollTo.js', array('jquery'));
	wp_enqueue_script(XB_THEME_NAME.'-script-fB', get_template_directory_uri().'/js/components/fullscreenBackground.js', array('jquery'));
	wp_enqueue_script(XB_THEME_NAME.'-script', get_template_directory_uri().'/js/main.js', array('jquery'));	
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
endif; // mtTheme_setup
add_action('after_setup_theme', 'xbTheme_setup');