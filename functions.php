<?php
/**
 * Functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 */

/**
 * Theme name
 */
define('XB_THEME_NAME', 'xb-wp-theme');

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 850;
}

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
	
	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 604, 270, true );

	// Register navigation menus
	register_nav_menus(array(
		'primary' => __('Primary menu', XB_THEME_NAME)
	));
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	// MORE ...................
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	//add_editor_style( array( 'css/editor-style.css', xbTheme_fonts_url() ) );	
}
endif; // xbTheme_setup
add_action( 'after_setup_theme', 'xbTheme_setup' );

/**
 * Register widget areas.
 * 
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
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
add_action( 'widgets_init', 'xbTheme_widgets_init' );

/**
 * Register Google fonts.
 * 
 * @return string Google fonts URL for the theme.
 */
function xbTheme_fonts_url() {
	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Raleway' );
	return $font_url;
}

/**
 * Enqueue scripts and styles.
 */
function xbTheme_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( XB_THEME_NAME.'-fonts', xbTheme_fonts_url() );
	
	// Load main stylesheet.
	wp_enqueue_style(XB_THEME_NAME.'-style', get_template_directory_uri().'/dist/'.XB_THEME_NAME.'.min.css');
	
	// Load main script.
	wp_enqueue_script(XB_THEME_NAME.'-script', get_template_directory_uri().'/dist/'.XB_THEME_NAME.'.js', array( 'jquery' ));	
}
add_action('wp_enqueue_scripts', 'xbTheme_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/src/php/template-tags.php';