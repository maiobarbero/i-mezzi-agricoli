<?php 

/**
 * @package Patronus
 * -- Image Post Format
 */

?>

<article class="post-format-image">

    <?php

if (has_post_thumbnail() ): 

    $featuredImage = get_the_post_thumbnail_url( get_the_ID( ),'full' );
?>
    <figure class="post-format-image__cover">
        <img src="<?php echo $featuredImage; ?>" alt="<?php the_title(); ?>">
        <figcaption></figcaption>
    </figure>

    <?php endif; ?>

</article>