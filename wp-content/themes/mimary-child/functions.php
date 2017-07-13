<?php

add_action( 'wp_enqueue_scripts', 'themename_enqueue_parent_styles' ); 
	 
function themename_enqueue_parent_styles() { 
	 
	if (is_rtl()) { 
    	wp_enqueue_style( 'custom-child-ar-style', get_stylesheet_directory_uri(). '/css/customar.css' );
    	wp_enqueue_script( 'myscript-ar', get_stylesheet_directory_uri() . '/js/customar.js'); 
	} 
    	wp_enqueue_style( 'custom-child-style', get_stylesheet_directory_uri(). '/css/custom.css' ); 
    	wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/js/custom.js');  	 
}



function remove_version() {
  return '';
}
add_filter('the_generator', 'remove_version');

function wrong_login() {
  return 'Wrong username or password.';
}
add_filter('login_errors', 'wrong_login');
