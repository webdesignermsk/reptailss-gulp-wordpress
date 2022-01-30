<?php

add_action('wp_enqueue_scripts', 'theme_add_scripts');
function theme_add_scripts()
{
    // подключаем файл стилей темы
    wp_enqueue_style('style-name', get_stylesheet_uri());

    wp_enqueue_style( 'main',get_template_directory_uri() . '/assets/css/style.min.css');

    // подключаем js файл темы
    wp_enqueue_script('script-name', get_template_directory_uri() . '/assets/js/main.min.js', array(), '1.0', true);
}

add_theme_support( 'post-thumbnails' );
add_theme_support('custom-logo');
add_theme_support('menus');


add_filter('nav_menu_link_attributes','filter_nav_menu_link_attributes', 10 , 3 );

function filter_nav_menu_link_attributes($atts, $item, $args){
    if($args->menu === 'main'){
        $atts['class'] = 'portfolio-menu__link';

        if($item->current){
            $atts['class'] .= ' active';
        }
    };

    return $atts;
}
?>