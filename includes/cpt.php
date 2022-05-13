<?php 

function patronus_custom_post_type() {
    register_post_type('riviste',
        array(
            'labels'      => array(
                'name'          => __('Riviste', 'patronus'),
                'singular_name' => __('Rivista', 'patronus'),
            ),
                'public'      => true,
                'has_archive' => true,
                'rewrite'     => array( 'slug' => 'edicola' ),
                'supports'    => array( 'title', 'thumbnail' )
        )
    );
}
add_action('init', 'patronus_custom_post_type');




?>