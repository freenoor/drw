<?php

/**
* drw functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package drw
*/

if ( ! function_exists( 'drw_setup' ) ) :

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/

    function drw_setup() {

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
			'menu-1' => esc_html__( 'Primary', 'drw' ),
			'menu-2' => esc_html__( 'Secondary', 'drw' ),
		));}

endif;

add_action( 'after_setup_theme', 'drw_setup' );

/**
* Enqueue scripts and styles.
*/

function drw_scripts() {
	wp_enqueue_style( 'drw-style', get_stylesheet_uri() );
    wp_enqueue_style( 'drw-main-style', get_template_directory_uri() . '/src/scss/main.css', array(), null );
	wp_enqueue_style( 'drw-swiper-style', get_template_directory_uri() . '/src/scss/swiper.css', array(), null );
	wp_enqueue_script( 'drw-jquery-js', get_template_directory_uri() . '/src/js/jquery.js', array(), null, true );
	wp_enqueue_script( 'drw-swiper-js', get_template_directory_uri() . '/src/js/swiper.js', array(), null, true );
	wp_enqueue_script( 'drw-main-js', get_template_directory_uri() . '/src/js/main.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'drw_scripts' );
function add_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'add_mime_types');
define('ALLOW_UNFILTERED_UPLOADS', true); 

function drw_widgets_init() {
	register_sidebar(
		array('name'          => esc_html__( 'Logo', 'drw' ),
			'id'            => 'logo',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Header Button', 'drw' ),
			'id'            => 'getintouch',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Services Footer', 'drw' ),
			'id'            => 'services',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Technologies Footer', 'drw' ),
			'id'            => 'technologies',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Menu Footer', 'drw' ),
			'id'            => 'menus',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Jetzt Kontakt Button', 'drw' ),
			'id'            => 'jetztbuttons',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'ePassGo Button', 'drw' ),
			'id'            => 'button-overimg',)
	);
}
add_action( 'widgets_init', 'drw_widgets_init' );