<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webbew
 * @since Webbew 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function webbew_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// Set post thumbnail size.
	set_post_thumbnail_size(1200, 9999);

	// Add custom image size used in Cover Template.
	add_image_size('webbew-fullscreen', 1980, 9999);

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if (get_theme_mod('retina_logo', false)) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	load_theme_textdomain('webbew');

	// Add support for full and wide align images.
	add_theme_support('align-wide');

	// Add support for responsive embeds.
	add_theme_support('responsive-embeds');

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}

add_action( 'after_setup_theme', 'webbew_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function webbew_register_styles() {

	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_style('webbew-fontawesome', get_template_directory_uri() . '/assets/css/all.css', array(), $theme_version);
	wp_enqueue_style('webbew-bootstrap', get_template_directory_uri() . '/assets/dist/css/bootstrap.css', array(), $theme_version);
	wp_enqueue_style('webbew-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), $theme_version);
	wp_enqueue_style('webbew-style', get_stylesheet_uri(), array(), $theme_version);
}

add_action('wp_enqueue_scripts', 'webbew_register_styles');

/**
 * Register and Enqueue Scripts.
 */
function webbew_register_scripts() {

	$theme_version = wp_get_theme()->get('Version');

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), $theme_version, true);

	wp_enqueue_script('webbew-slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), $theme_version, true);

	wp_enqueue_script('webbew-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), $theme_version, true);

	wp_script_add_data('webbew-script', 'async', 'async');
}

add_action('wp_enqueue_scripts', 'webbew_register_scripts');

add_filter( 'script_loader_tag', function ( $tag, $handle ) {

	if ( 'jquery' == $handle ) {
		return $tag;
	}

	return str_replace( ' src', ' defer src', $tag );

}, 10, 2 );

function webbew_menus() {

	$locations = array(
		'primary'  => __('Desktop Menu', 'webbew'),
		'mobile'   => __('Mobile Menu', 'webbew'),
		'footer'   => __('Footer Menu', 'webbew')
	);

	register_nav_menus($locations);
}

add_action('init', 'webbew_menus');

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webbew_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(

		array_merge(

			$shared_args,

			array(
				'name'        => __( 'Footer #1', 'webbew' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'webbew' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(

		array_merge(

			$shared_args,

			array(
				'name'        => __( 'Footer #2', 'webbew' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'webbew' ),
			)
		)
	);

}

add_action('widgets_init', 'webbew_sidebar_registration');

function webbew_service_post_type() {

	register_post_type('service',

		array(
			'labels' => array(
				'name' => __('Services', 'webbew'),
				'singular_name' => __('Service', 'webbew'),
			),

			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes')
		)
	);
}

add_action('init', 'webbew_service_post_type');