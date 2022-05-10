<?php 

function patronus_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widget 1',
		'id'            => 'footer_widget_1',
		'before_widget' => '<div class="col-33 footer__col">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 2',
		'id'            => 'footer_widget_2',
		'before_widget' => '<div class="col-33 footer__col">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 3',
		'id'            => 'footer_widget_3',
		'before_widget' => '<div class="col-33 footer__col">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'patronus_widgets_init' );
?>