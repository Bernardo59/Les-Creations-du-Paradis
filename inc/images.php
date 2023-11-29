<?php
defined('ABSPATH') or die();

add_action('after_setup_theme', function () {

    add_image_size('post-thumbnail', 450, 450, true);
});