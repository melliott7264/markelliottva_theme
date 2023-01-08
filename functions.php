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

/** 
 *  Register new menu
*/
// register_nav_menus( array(
//     'primary' => __( 'MarkElliott2', 'markelliottva' ),
// ) );

// if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
//     // File does not exist... return an error.
//     return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
// } else {
//     // File exists... require it.
//     require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }

/**
 * Register Custom Navigation Walker
 */
// function register_navwalker(){
// 	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );