<?php 

$context          = Timber::context();
$context['posts'] = new Timber\PostQuery();
$templates        = array( 'index.twig' );




if ( is_home() ) {
	$context['cover'] = new Timber\Image('wp-content/themes/i-mezzi-agricoli/dist/assets/images/ima_hero.jpg');
	$context['divider'] = new Timber\Image('wp-content/themes/i-mezzi-agricoli/dist/assets/images/divisore.png');
	$context['logo_tagliato'] = new Timber\Image('wp-content/themes/i-mezzi-agricoli/dist/assets/images/logo_tagliato.png');
	array_unshift( $templates, 'home.twig' );
}
Timber::render( $templates, $context );

?>