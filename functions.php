<?php

/*
* Child them to understrap for markelliottva.com
* Author: Mark Elliott ©2023, all rights reserved
*/


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');  // enqueue child theme using function below
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'markelliottva', get_stylesheet_uri(), array('understrap'),wp_get_theme()->get('Version'));
}

add_theme_support( 'title-tag' );  // add title and description from theme settings to title heading

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'style', get_stylesheet_uri() ); // use style.css from theme folder
});



