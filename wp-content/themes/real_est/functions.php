<?php
/**
 * real_est functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package real_est
 */

function real_est_enqueue_style() {  // real_est поставити на початку назву теми зі style.css
	// http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800', array(), '1.0.1', 'all' ); 
    wp_enqueue_style( 'real_est-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.1', 'all' ); 
	// назва real_est поставити в дужках назву теми зі style.css і через - назву css файлу
	// і до стилів вказати повний шлях функ get_template_directory_uri()
	wp_enqueue_style( 'real_est-font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-fontello', get_template_directory_uri() . '/assets/css/fontello.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-fonts/pe-icon-7-stroke', get_template_directory_uri() . '/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-fonts/helper', get_template_directory_uri() . '/assets/fonts/icon-7-stroke/css/helper.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-bootstrap-select.min', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-bootstrap.min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-icheck.min_all', get_template_directory_uri() . '/assets/css/icheck.min_all.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-price-range', get_template_directory_uri() . '/assets/css/price-range.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-owl.theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-owl.transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all' ); 
	wp_enqueue_style( 'real_est-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.1', 'all' ); 

}

function real_est_enqueue_script() {
    wp_enqueue_script( 'modernizr-2.6.2', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), '1.0.1', 'all' );

	wp_enqueue_script( 'jquery-1.10.2', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js', array('modernizr-2.6.2'), '1.0.1', 'all' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery-1.10.2', 'modernizr-2.6.2'), '1.0.1', 'all' );
	wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array('jquery-1.10.2', 'bootstrap'), '1.0.1', 'all' );
	wp_enqueue_script( 'bootstrap-hover', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select'), '1.0.1', 'all' );

	wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/assets/js/easypiechart.min.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover'), '1.0.1', 'all' );
	wp_enqueue_script( 'jquery.easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover', 'easypiechart'), '1.0.1', 'all' );

	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover', 'easypiechart', 'jquery.easypiechart'), '1.0.1', 'all' );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover', 'easypiechart', 'jquery.easypiechart', 'owl.carousel'), '1.0.1', 'all' );

	wp_enqueue_script( 'icheck', get_template_directory_uri() . '/assets/js/icheck.min.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover', 'easypiechart', 'jquery.easypiechart', 'owl.carousel', 'wow'), '1.0.1', 'all' );
	wp_enqueue_script( 'price-range', get_template_directory_uri() . '/assets/js/price-range.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover', 'easypiechart', 'jquery.easypiechart', 'owl.carousel', 'wow', 'icheck'), '1.0.1', 'all' );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover', 'easypiechart', 'jquery.easypiechart', 'owl.carousel', 'wow', 'icheck', 'price-range'), '1.0.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'real_est_enqueue_style' );  // друге значення назва функції щоб її отримати
add_action( 'wp_enqueue_scripts', 'real_est_enqueue_script' ); // друге значення назва функції щоб її отримати


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function real_est_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on real_est, use a find and replace
		* to change 'real_est' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'real_est', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'real_est' ),
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
			'real_est_custom_background_args',
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
add_action( 'after_setup_theme', 'real_est_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function real_est_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'real_est_content_width', 640 );
}
add_action( 'after_setup_theme', 'real_est_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function real_est_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'real_est' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'real_est' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'real_est_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function real_est_scripts() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'real_est_scripts' );

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

