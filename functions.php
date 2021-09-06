<?php

// Enable SVG support
function add_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'add_mime_types');


// Register Nav Menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


// Add custom background support
// add_theme_support( 'custom-background' );



add_theme_support( 'post-thumbnails' );





?>