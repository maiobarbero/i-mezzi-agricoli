<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- NAVBAR -->
    <nav class="navbar pr-100 pl-100">
        <div class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(  ) ?>/dist/assets/images/IMA_logo.svg" alt="">
        </div>
        <div class="menu__toggle">
        </div>
    </nav>
    <!-- NAVBAR -->
    <div class="scroll-container" data-scroll-container>
        <div id="swup" class="transition">