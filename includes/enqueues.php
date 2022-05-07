<?php 


/* ------------------------------------------------------------------- *
* Enqueue scripts.
/* ------------------------------------------------------------------- */

if ( ! function_exists( 'patronus_scripts' ) ) {
    function patronus_scripts() {

    
        wp_enqueue_script( 'patronus-script', get_template_directory_uri() . '/dist/assets/js/main.js', array( 'jquery' ),'', true );
     
        if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }

        wp_enqueue_style('flickity', get_template_directory_uri() .'/dist/assets/css/flickity.min.css', false);
        wp_enqueue_style('locomotive', get_template_directory_uri() .'/dist/assets/css/locomotive.css', false);
        wp_enqueue_style( 'patronus-style', get_template_directory_uri() . '/style.css');

       
    }
}
add_action( 'wp_enqueue_scripts', 'patronus_scripts' );


?>