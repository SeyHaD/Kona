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