<?php

add_filter('acf/settings/load_json', 'parent_theme_field_groups');
function parent_theme_field_groups($paths) {
  $path = get_template_directory().'/acf-json';
  $paths[] = $path;
  return $paths;
}

function tkmulti_child_add_stylesheet() {
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme-style.css', false, '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'tkmulti_child_add_stylesheet', 999 );

/* ---------------------------------------------------------------------------
 * Theme Fonts URL
 * --------------------------------------------------------------------------- */
function tkmulti_theme_fonts_url() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Assistant:400,600,700,800&display=swap&subset=hebrew', false ); 
}
 add_action( 'wp_enqueue_scripts', 'tkmulti_theme_fonts_url' );