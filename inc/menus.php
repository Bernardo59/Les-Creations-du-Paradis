<?php

defined('ABSPATH') or die();

add_action('after_setup_theme', function() {
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('products', 'Liste des produits');
});
