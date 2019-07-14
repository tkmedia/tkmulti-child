<?php

add_filter('acf/settings/load_json', 'parent_theme_field_groups');
function parent_theme_field_groups($paths) {
  $path = get_template_directory().'/acf-json';
  $paths[] = $path;
  return $paths;
}

function tkmulti_child_add_stylesheet() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css', false, '1.0', 'all' );
	// Google Fonts ----------------------------------------------------------
	wp_enqueue_style( 'tkmulti-fonts', tkmulti_theme_fonts_url() );
}
add_action( 'wp_enqueue_scripts', 'tkmulti_child_add_stylesheet', 999 );

/* ---------------------------------------------------------------------------
 * Theme Fonts URL
 * --------------------------------------------------------------------------- */
function tkmulti_theme_fonts_url() {
	$font_families = apply_filters( 'tkmulti_theme_fonts', array( 'Montserrat:300,400,500,600,700,800&display=swap' ) );
	//$font_families = apply_filters( 'tkmulti_theme_fonts', array( 'Assistant:200,400,600,700' ) );
	//$font_families = apply_filters( 'tkmulti_theme_fonts', array( 'Raleway:300,400,600,700,800&display=swap&subset=latin-ext' ) );
	$query_args = array(
		'family' => implode( '|', $font_families ),
		'subset' => 'hebrew,latin',
	);
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	return esc_url_raw( $fonts_url );
}