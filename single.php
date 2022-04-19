<?php  get_header();?>

<?php 

while ( have_posts() ) : the_post();
	get_template_part( 'dist/assets/template_parts/content', get_post_format() );
endwhile;


?>


<?php get_footer(); ?>