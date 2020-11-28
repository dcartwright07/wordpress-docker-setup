<?php

/* #region Initializations */

// Turn theme support on for various features
// ====================================
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menus to use in the admin panel
function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);

}
add_action('init', 'register_theme_menus');

// Add SVG image support to available MIME types
function add_file_types_to_uploads($file_types) {

	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;

}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/* #endregion */

/* #region  Imports: CSS & Javascript */

// CSS file imports
function my_theme_style() {

	// wp_enqueue_style('main_css', get_template_directory_uri() . '/style.min.css?bid=' . time());
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.min.css');

}
add_action('wp_enqueue_scripts', 'my_theme_style');

// JavaScript file imports
function my_theme_js() {

	// wp_enqueue_script('custom_js', get_template_directory_uri() . '/assets/js/custom.js?bid=' . time(), array('jquery'), '',  true);
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '',  true);

}
add_action('wp_enqueue_scripts', 'my_theme_js');

/* #endregion */

?>