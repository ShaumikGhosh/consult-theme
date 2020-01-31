<?php

function consult_theme_support(){

    register_nav_menus(array(
        'header_menu'=>'Header Menu',
        'footer_menu' => 'Footer Menu',
    ));

}

add_action('after_setup_theme', 'consult_theme_support');