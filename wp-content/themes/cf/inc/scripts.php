<?php
/**
 * Enqueue scripts and styles.
 */
function cf_scripts() {
	wp_enqueue_style( 'cf-font-awesome', get_template_directory_uri() . '/html/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'cf-slick', get_template_directory_uri() . '/html/assets/libs/slick/slick.css' );
	wp_enqueue_style( 'cf-style', get_template_directory_uri() . '/html/assets/css/style.css' );
	
	wp_enqueue_script( 'cf-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', [], null, true );
	wp_enqueue_script( 'cf-migrate', get_template_directory_uri() . '/html/assets/libs/jquery-migrate/jquery-migrate.min.js', ['cf-jquery'], null, true );
	wp_enqueue_script( 'cf-easy-scroll', get_template_directory_uri() . '/html/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['cf-jquery'], null, true );
	wp_enqueue_script( 'cf-slick', get_template_directory_uri() . '/html/assets/libs/slick/slick.min.js', ['cf-jquery'], null, true );
	wp_enqueue_script( 'cf-main', get_template_directory_uri() . '/html/assets/js/main.js', ['cf-jquery'], null, true );
	
}
add_action( 'wp_enqueue_scripts', 'cf_scripts' );


