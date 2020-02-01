<?php

function consult_theme_support(){

    register_nav_menus(array(
        'header_menu'=>'Header Menu',
        'footer_menu' => 'Footer Menu',
    ));

    add_theme_support('post-thumbnails');
    add_image_size('blog-image-size', 700, 500, true);
    add_image_size('single-blog-image-size', 800, 700, true);
}

add_action('after_setup_theme', 'consult_theme_support');