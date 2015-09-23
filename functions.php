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
	
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 604, 270, true );
}
endif; // xbTheme_setup
add_action('after_setup_theme', 'xbTheme_setup');

/**
 * Register widget areas.
 */
function xbTheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', XB_THEME_NAME ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', XB_THEME_NAME ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'xbTheme_widgets_init');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/src/php/template-tags.php';