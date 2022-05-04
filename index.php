<?php 

$context          = Timber::context();
$context['posts'] = new Timber\PostQuery();
$templates        = array( 'index.twig' );

$context['logo'] = new Timber\Image('/dist/assets/images/IMA_logo.svg');

if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render( $templates, $context );

?>