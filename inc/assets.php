<?php

defined('ABSPATH') or die();

add_action('wp_enqueue_scripts', function (){
    wp_register_style('paradis_css', get_template_directory_uri() . '/assets/css/index.7034f0cc.css');
/*     wp_enqueue_style('fix', get_stylesheet_uri()); */
    wp_enqueue_style('paradis_css');
    wp_register_script('paradis_js', get_template_directory_uri() . '/assets/js/index.a1081080.js');
    wp_enqueue_script('paradis_js','','','',[
            'in_footer' => true,
        ]);
});

// Modifier le logo sur la page de connexion à l'administration

add_action( 'login_enqueue_scripts', function () {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?= get_stylesheet_directory_uri() . '/assets/img/logo_paradis_small_black.png'?>);
            height: 100px;
        }
        #login {
            width: 400px!important;
        }
        .login h1 a {
            background-size: auto!important;
            width: auto!important;
        }

    </style>
    <?php
}); 