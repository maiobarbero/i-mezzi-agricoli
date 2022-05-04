<?php 

/* ------------------------------------------------------------------- *
* Optimization
/* ------------------------------------------------------------------- */
function mwd_remove_script_version( $src ){
    $parts = explode( '?ver', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', 'mwd_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'mwd_remove_script_version', 15, 1 );

function mwd_wp_head_cleanup(){

    remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );


    // REMOVE WP EMOJI
    remove_action( 'wp_print_styles', 'print_emoji_styles') ;
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'wp_resource_hints', 2 );
    remove_action( 'wp_head', 'wp_shortlink_wp_head()', 10, 0 );

    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );

    // Post relational links are why this stuff is displayed on various pages.
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'parent_posts_rel_link', 10, 0 );

    // Remove API
    remove_action( 'wp_head', 'rest_output_link_wp_head' );

}
if ( !is_admin_bar_showing()){
    add_action( 'after_setup_theme', 'mwd_wp_head_cleanup' );
}
function mwd_deregister_heartbeat() {
    global $pagenow;
    
    if ( 'post.php' != $pagenow && 'post-new.php' != $pagenow )
    wp_deregister_script('heartbeat');
}
add_action( 'init', 'mwd_deregister_heartbeat', 1 );

// Disable Gutenberg

function mwd_remove_gutenberg_styles(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wp-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
    wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
}

add_action( 'wp_enqueue_scripts', 'mwd_remove_gutenberg_styles', 100 );
?>