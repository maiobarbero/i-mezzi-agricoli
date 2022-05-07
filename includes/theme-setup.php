<?php 

/* ------------------------------------------------------------------- *
* Theme setup.
/* ------------------------------------------------------------------- */

if ( ! function_exists( 'patronus_setup' ) ) {

    function patronus_setup() {


        add_theme_support( "title-tag" );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'post-formats', array( 'image', 'video' ) );

        // Custom menu areas
        // register_nav_menus( array(
        //     'header' => esc_html__( 'Header', 'patronus' )
        // ) );

        // Load theme languages
        load_theme_textdomain( 'patronus', get_template_directory().'/languages' );

    }

}
add_action( 'after_setup_theme', 'patronus_setup' );

// TODO Rimuovo thumb predefinite

// function patronus_remove_default_image_sizes($sizes) {
//     unset( $sizes['medium']);
//     unset( $sizes['large']);
//     unset( $sizes['medium_large']);
//     return $sizes;
// }
// add_filter('intermediate_image_sizes_advanced', 'MRT_remove_default_image_sizes');

// TODO aggiungo thumb specifiche

// if ( function_exists( 'add_image_size' ) ) {
//     add_image_size( '800', 800, 999, false );
//     add_image_size( '1400x928', 1400, 928, false );  
// }



?>