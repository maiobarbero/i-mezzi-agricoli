<?php

/**
 * Patronus
 * 
 * @package Patronus
 * @version 1.0.0
 */

/* ------------------------------------------------------------------- *
* Login logo.
/* ------------------------------------------------------------------- */

function patronus_login_logo() {
        echo '<style type="text/css">
        .login h1 a { background-image: url(https://maiowebdesign.it/wp-content/themes/MWD_starter_theme-master/img/logo.png) !important; width: 230px !important; height: 200px !important;}
        .login h1 a { background-size: 230px 200px !important;}
        #login {padding: 54px 0 0 !important;}
        </style>';
    }
add_action('login_head', 'patronus_login_logo');

/* ------------------------------------------------------------------- *
* Include Files.
/* ------------------------------------------------------------------- */

require_once ('includes/head-cleaner.php');

/* ------------------------------------------------------------------- *
* Content Width
/* ------------------------------------------------------------------- */

if ( ! isset( $content_width ) ) $content_width = 1200;

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

        // Custom menu areas
        register_nav_menus( array(
            'header' => esc_html__( 'Header', 'patronus' )
        ) );

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


/* ------------------------------------------------------------------- *
* Enqueue scripts.
/* ------------------------------------------------------------------- */

if ( ! function_exists( 'patronus_scripts' ) ) {
    function patronus_scripts() {

    
        wp_enqueue_script( 'patronus-script', get_template_directory_uri() . '/dist/assets/js/main.js', array( 'jquery' ),'', true );
     
        if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }

        wp_enqueue_style('flickity', get_template_directory_uri() .'dist/assets/css/flickity.min.css', false);
        wp_enqueue_style('locomotive', get_template_directory_uri() .'dist/assets/css/locomotive.css', false);
        wp_enqueue_style( 'patronus-style', get_template_directory_uri() . '/style.css');

       
    }
}
add_action( 'wp_enqueue_scripts', 'patronus_scripts' );