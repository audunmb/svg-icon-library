<?php 
/*
Plugin Name: SVG Icon library
Plugin URI: 
Description: adds custom SVG icons to the Icon block
Author: audun
Version: 0.1
Author URI: 
License: GPL3
*/

function example_register_custom_icons() {
	wp_enqueue_script(		'example-register-custom-icons',
		plugins_url( 'register-custom-icons.js', __FILE__ ),
		array( 'wp-i18n', 'wp-hooks', 'wp-dom' ), '1.0',
		true // Very important, otherwise the filter is called too early.
	);
}
add_action( 'enqueue_block_editor_assets', 'example_register_custom_icons' );