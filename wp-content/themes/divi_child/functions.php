<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',array() , $theme->parent()->get('Version'));
    wp_enqueue_style( 'child-style', get_stylesheet_uri().'',array( $parenthandle ) ,$theme->get('Version'));
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri(). '/css/slick.css');
    wp_enqueue_style( 'slick_theme', get_stylesheet_directory_uri(). '/css/slick-theme.css');
    // wp_enqueue_style( 'font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");


    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri().'/js/slick.min.js');
    wp_enqueue_script('child-script', get_stylesheet_directory_uri().'/js/script.js?v=1', 
    ['jquery', 'slick-js']);

    wp_enqueue_script('font-awesome', "https://kit.fontawesome.com/c007291ff9.js");

}