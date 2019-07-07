<?php

add_filter('acf/settings/load_json', 'parent_theme_field_groups');
function parent_theme_field_groups($paths) {
  $path = get_template_directory().'/acf-json';
  $paths[] = $path;
  return $paths;
}

function tkmulti_child_add_stylesheet() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css', false, '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'tkmulti_child_add_stylesheet', 999 );

function tkmulti_child_google_fonts() { 
	wp_enqueue_style('tkmulti_fonts_Assistant', 'https://fonts.googleapis.com/css?family=Heebo:400,500,700&display=swap&subset=hebrew'); 
}
add_action( 'wp_enqueue_scripts', 'tkmulti_child_google_fonts' ); 

// TGM ------------------------------------------------------------------
if( is_admin() ){
	include_once get_stylesheet_directory_uri() .'/inc/class-mfn-tgmpa.php';
}