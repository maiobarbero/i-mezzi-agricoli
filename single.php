<?php 

$context          = Timber::context();
$timber_post     = Timber::get_post();
$context['post'] = $timber_post;
$context['divider'] = new Timber\Image('wp-content/themes/i-mezzi-agricoli/dist/assets/images/divisore.png');



$templates        = array( 'article.twig' );

Timber::render( $templates, $context );