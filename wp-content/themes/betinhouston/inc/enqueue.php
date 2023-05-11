<?php

/**

 * Enqueue scripts and styles.

 */



function betinhouston_scripts() {

	wp_enqueue_style( 'betinhouston-style', get_stylesheet_uri() );



	wp_enqueue_style( 'betinhouston-bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '1.0' );



	wp_enqueue_style( 'betinhouston-owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );



	wp_enqueue_style( 'betinhouston-style-css', get_theme_file_uri('/assets/css/style.css'), array(), '1.0' );



	wp_enqueue_style( 'betinhouston-responsive', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );



	wp_enqueue_style( 'betinhouston-font-all', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '1.0' );



	



    wp_enqueue_script( 'jquery-min', get_theme_file_uri('/assets/js/jquery-min.js'), array(), '1.0', true );



    wp_enqueue_script( 'bootstrap-bundle', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), '1.0', true );



    wp_enqueue_script( 'owl-carousel-min', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), '1.0', true );



    wp_enqueue_script( 'custom-js', get_theme_file_uri('/assets/js/custom.js'), array(), '1.0', true );

}



add_action( 'wp_enqueue_scripts', 'betinhouston_scripts' );



