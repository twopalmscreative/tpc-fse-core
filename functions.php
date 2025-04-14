<?php
/**
 * FSE Starter functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fse_starter
 * @author  twopalmscreative
 * @license GNU General Public License v3
 */

namespace twopalmscreative\fse_starter;

// Define a global path and url.
define( 'twopalmscreative\fse_starter\ROOT_PATH', trailingslashit( get_template_directory() ) );
define( 'twopalmscreative\fse_starter\ROOT_URL', trailingslashit( get_template_directory_uri() ) );

/**
 * Get all the include files for the theme.
 *
 * @author twopalmscreative
 */
function include_inc_files() {
	$files = [
		'inc/functions/', // Custom functions that act independently of the theme templates.
		'inc/hooks/', // Load custom filters and hooks.
		'inc/setup/', // Theme setup.
	];

	foreach ( $files as $include ) {
		$include = trailingslashit( get_template_directory() ) . $include;

		// Allows inclusion of individual files or all .php files in a directory.
		if ( is_dir( $include ) ) {
			foreach ( glob( $include . '*.php' ) as $file ) {
				require $file;
			}
		} else {
			require $include;
		}
	}
}

include_inc_files();
