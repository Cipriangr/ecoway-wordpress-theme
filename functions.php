<?php
/**
 * Ecoway functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ecoway
 */

if ( ! defined( 'ECOWAY_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ECOWAY_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ecoway_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ecoway_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Ecoway, use a find and replace
		 * to change 'ecoway' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ecoway', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ecoway' ),
				'menu-2' => esc_html__( 'Secondary', 'ecoway' ),
			)
		);

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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ecoway_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ecoway_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecoway_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ecoway_content_width', 640 );
}
add_action( 'after_setup_theme', 'ecoway_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecoway_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ecoway' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ecoway' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ecoway_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ecoway_scripts() {
	wp_enqueue_style( 'ecoway-style', get_stylesheet_uri(), array(), ECOWAY_VERSION );
	wp_style_add_data( 'ecoway-style', 'rtl', 'replace' );

	wp_deregister_script( 'jquery' );
	$jquery_cdn = 'https://code.jquery.com/jquery-3.5.1.min.js';
	wp_enqueue_script( 'jquery', $jquery_cdn, array(), '3.5.1', true );

	wp_enqueue_script( 'ecoway-foundation', get_template_directory_uri() . '/js/foundation.min.js', array(), '6.6.3', true );
	wp_enqueue_script( 'ecoway-app', get_template_directory_uri() . '/js/app.js', array(), time(), true );
	wp_enqueue_script( 'ecoway-fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', array(), time(), true );
	wp_enqueue_script( 'ecoway-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1.8.1', true );
	wp_enqueue_script( 'ecoway-navigation', get_template_directory_uri() . '/js/navigation.js', array(), ECOWAY_VERSION, true );

	//Google Map
	wp_enqueue_script( 'googlemaps', '', false );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ecoway_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/** Custom Blocks */
require_once( 'inc/blocks.php' );

//Block ALignement
add_theme_support( 'align-wide', 'align-full' );

/** Custom Shortcodes */
require_once( 'inc/shortcodes.php' );
add_filter('wp_nav_menu_items', 'do_shortcode');

// Google map
function my_acf_init() {
	acf_update_setting('google_api_key', '');
}
add_action('acf/init', 'my_acf_init');

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');


add_image_size( 'service-size', 380, 300 ); 
add_image_size( 'gallery-size', 750, 650 ); 


