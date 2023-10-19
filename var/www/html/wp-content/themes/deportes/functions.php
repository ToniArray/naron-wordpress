<?php
// function theme_styles() {
//     add_editor_style('style.css');
// }

// add_action('after_setup_theme', 'theme_styles');

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
