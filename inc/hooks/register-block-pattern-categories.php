<?php
/**
 * Registers custom block pattern categories for the WDS BT theme.
 *
 * @package verve
 */

namespace twopalmscreative\verve;

/**
 * Registers custom block pattern categories for the WDS BT theme.
 */
function register_custom_block_pattern_categories() {

	register_block_pattern_category(
		'content',
		array(
			'label'       => __( 'Content', 'verve' ),
			'description' => __( 'A collection of content patterns designed for WDS BT.', 'verve' ),
		)
	);
	register_block_pattern_category(
		'hero',
		array(
			'label'       => __( 'Hero', 'verve' ),
			'description' => __( 'A collection of hero patterns designed for WDS BT.', 'verve' ),
		)
	);
	register_block_pattern_category(
		'page',
		array(
			'label'       => __( 'Pages', 'verve' ),
			'description' => __( 'A collection of page patterns designed for WDS BT.', 'verve' ),
		)
	);
	register_block_pattern_category(
		'template',
		array(
			'label'       => __( 'Templates', 'verve' ),
			'description' => __( 'A collection of template patterns designed for WDS BT.', 'verve' ),
		)
	);

	// Remove default patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'init', __NAMESPACE__ . '\register_custom_block_pattern_categories', 9 );
