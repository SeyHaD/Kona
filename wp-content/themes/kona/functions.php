<?php

if ( ! function_exists( 'kona_setup' ) ) :
    
// setup the theme
function kona_setup() {
    
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kona' ),
		'footer' => __( 'Footer Menu', 'kona' ),
	) );
}
add_action( 'after_setup_theme', 'kona_setup' );
    
endif;