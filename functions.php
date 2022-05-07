<?php

/**
 * @package Patronus
 * @version 1.0.0
 */
/* ------------------------------------------------------------------- *
* Include Files.
/* ------------------------------------------------------------------- */

require_once ('includes/head-cleaner.php');
require_once ('includes/timber-setup.php');
require_once ('includes/theme-setup.php');
require_once ('includes/enqueues.php');
 
/* ------------------------------------------------------------------- *
* Login logo.
/* ------------------------------------------------------------------- */

function patronus_login_logo() {
        echo '<style type="text/css">
        .login h1 a { background-image: url(https://maiowebdesign.it/wp-content/themes/MWD_starter_theme-master/img/logo.png) !important; width: 230px !important; height: 200px !important;}
        .login h1 a { background-size: 230px 200px !important;}
        #login {padding: 54px 0 0 !important;}
        </style>';
    }
add_action('login_head', 'patronus_login_logo');



/* ------------------------------------------------------------------- *
* Content Width
/* ------------------------------------------------------------------- */

if ( ! isset( $content_width ) ) $content_width = 1200;