<?php

function kayak_enqueue_style(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

    wp_enqueue_script( 'jQuery', get_template_directory_uri(  ) .  '/js/jquery.min.js', array( ), 'null',  true );
    wp_enqueue_script( 'easing', get_template_directory_uri(  ) .  '/js/jquery.easing.1.3.js', array( ), 'null', true );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri(  ) .  '/js/bootstrap.min.js', array( ), 'null', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri(  ) .  '/js/jquery.waypoints.min.js', array( ), 'null', true );
    wp_enqueue_script( 'flexslider', get_template_directory_uri(  ) .  '/js/jquery.flexslider-min.js', array( ), 'null', true );
    wp_enqueue_script( 'main-jq', get_template_directory_uri(  ) .  '/js/main.js', array( ), 'null', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri(  ).'/js/modernizr-2.6.2.min.js', array( ), 'null', false);
    
}

add_action( 'wp_enqueue_scripts', 'kayak_enqueue_style' );

// sidebars
add_action( 'widgets_init', 'kayak_sidebars');