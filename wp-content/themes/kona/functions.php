<?php

if ( ! function_exists( 'kona_setup' ) ) :
    
// setup the theme
function kona_setup() {
    
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kona' ),
		'footer' => __( 'Footer Menu', 'kona' ),
	) );
	
	// add thumbnail support
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

}
add_action( 'after_setup_theme', 'kona_setup' );

endif;

/**
 * Enqueues scripts and styles.
 *
 */
function kona_scripts() {
	// libraries
	wp_enqueue_script( 'kona-script', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), '20151204', true );
	wp_enqueue_script( 'kona-script', get_template_directory_uri() . '/js/jquery.dropotron.min.js', array( 'jquery' ), '20151204', true );
	wp_enqueue_script( 'kona-script', get_template_directory_uri() . '/js/jquery.scrollgress.min.js', array( 'jquery' ), '20151204', true );
	wp_enqueue_script( 'kona-script', get_template_directory_uri() . '/js/skel.min.js', array( 'jquery' ), '20151204', true );
	wp_enqueue_script( 'kona-script', get_template_directory_uri() . '/js/util.js', array( 'jquery' ), '20151204', true );
	wp_enqueue_script( 'kona-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20151204', true );

	// main functions
	wp_enqueue_script( 'kona-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20151204', true );

	wp_localize_script( 'kona-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'kona' ),
		'collapse' => __( 'collapse child menu', 'kona' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'kona_scripts' );

