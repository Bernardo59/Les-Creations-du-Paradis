<?php
defined('ABSPATH') or die();

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('html5', [
    'comment-list', 
    'comment-form', 
    'search-form']);
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_image_size('post-thumbnail', 450, 450, true);
});

add_filter( 'excerpt_length', function () {
    return 10;
}, 999 );