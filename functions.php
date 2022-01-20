<?php
/**
 * start_tmpl functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package start_tmpl
 */

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
function start_tmpl_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on start_tmpl, use a find and replace
		* to change 'start_tmpl' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'start_tmpl', get_template_directory() . '/languages' );

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
			'menu-main' => esc_html__( 'Primary', 'start_tmpl' ),
            'menu-mobile' => esc_html__( 'Mobile Navigation', 'start_tmpl' ),
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
			'start_tmpl_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'start_tmpl_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function start_tmpl_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'start_tmpl_content_width', 640 );
}
add_action( 'after_setup_theme', 'start_tmpl_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function start_tmpl_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'start_tmpl' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'start_tmpl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'start_tmpl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function start_tmpl_scripts() {
	wp_enqueue_style( 'start_tmpl-style', get_stylesheet_uri(), array(), _S_VERSION );

    wp_enqueue_style( 'start_tmp-slcss', get_template_directory_uri() . '/css/slick.css' , array(), _S_VERSION );

    wp_enqueue_style( 'start_tmp-slthcss', get_template_directory_uri() . '/css/slick-theme.css' , array(), _S_VERSION );

    wp_enqueue_style( 'start_tmp-maincss', get_template_directory_uri() . '/css/main.css' , array(), _S_VERSION );

    wp_enqueue_script( 'start_tmpl-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' , array(), _S_VERSION, true );

	wp_enqueue_script( 'start_tmpl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'start_tmpl-slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'start_tmpl-scripts', get_template_directory_uri() . '/js/scripts.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'start_tmpl_scripts' );

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

add_action('init', 'my_custom_init');
function my_custom_init(){
    register_post_type('benefits', array(
        'labels'             => array(
            'name'               => 'Benefits',
            'singular_name'      => 'Benefit',
            'add_new'            => 'Add benefit',
            'add_new_item'       => 'Add new benefit',
            'edit_item'          => 'Edit benefit',
            'new_item'           => 'New benefit',
            'view_item'          => 'Watch benefit',
            'search_items'       => 'Search benefit',
            'not_found'          => 'Nothing found',
            'not_found_in_trash' => 'Trash is empty',
            'parent_item_colon'  => '',
            'menu_name'          => 'Benefits'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail')
    ) );

    register_post_type('reviews', array(
        'labels'             => array(
            'name'               => 'Reviews',
            'singular_name'      => 'Review',
            'add_new'            => 'Add review',
            'add_new_item'       => 'Add new review',
            'edit_item'          => 'Edit review',
            'new_item'           => 'New review',
            'view_item'          => 'Watch review',
            'search_items'       => 'Search review',
            'not_found'          => 'Nothing found',
            'not_found_in_trash' => 'Trash is empty',
            'parent_item_colon'  => '',
            'menu_name'          => 'Reviews'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor')
    ) );
}