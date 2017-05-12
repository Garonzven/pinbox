<?php

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('social-menu',__( 'Social Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'colorbox-css', get_template_directory_uri() . '/css/colorbox.css' );
	wp_enqueue_style( 'jpages-css', get_template_directory_uri() . '/css/jPages.css' );
	wp_enqueue_style( 'jpages-animate-css', get_template_directory_uri() . '/css/jPages.animate.css' );
	wp_enqueue_style( 'jpages-style-css', get_template_directory_uri() . '/css/jPages.style.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/custom.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'colorbox-js', get_template_directory_uri() . '/js/jquery.colorbox.js', array('jquery'), '1.6.4', true );
	wp_enqueue_script( 'jpages-js', get_template_directory_uri() . '/js/jPages.js', array('jquery'), '0.7', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

if ( function_exists( 'add_theme_support' ) )
{
  add_theme_support( 'post-thumbnails' );
}
