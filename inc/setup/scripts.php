<?php
/**
 * Enqueue scripts and styles.
 *
 * @package fse_starter
 */

namespace twopalmscreative\fse_starter;

/**
 * Enqueue scripts and styles.
 *
 * @author twopalmscreative
 */
function scripts() {
	$asset_file_path = get_template_directory() . '/build/js/index.asset.php';
	$asset_version   = wp_get_theme()->get( 'Version' );

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => '0.1.0',
			'dependencies' => array( 'wp-polyfill' ),
		);
	}

	// Register styles & scripts.
	wp_enqueue_style( 'verve-styles', get_stylesheet_directory_uri() . '/build/css/style.css', array(), $asset_version );
	wp_enqueue_script( 'verve-scripts', get_stylesheet_directory_uri() . '/build/js/index.js', $asset_file['dependencies'], $asset_version, true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );
