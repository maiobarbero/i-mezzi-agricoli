<?php 

$context          = Timber::context();

$context['cover'] = new Timber\Image('wp-content/themes/i-mezzi-agricoli/dist/assets/images/ima_hero.jpg');
$context['divider'] = new Timber\Image('wp-content/themes/i-mezzi-agricoli/dist/assets/images/divisore.png');
$context['logo_tagliato'] = new Timber\Image('wp-content/themes/i-mezzi-agricoli/dist/assets/images/logo_tagliato.png');

$args = array('posts_per_page' => 4);

$context['posts'] = new Timber\PostQuery($args);

$edicolaArgs = array(
    'post_type' => 'riviste',
    'posts_per_page' => 5,

);
$context['edicola'] = new Timber\PostQuery($edicolaArgs);

Timber::render( 'home.twig', $context );