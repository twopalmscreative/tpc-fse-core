<?php
/**
 * Registers custom block pattern categories for the FSE Starter theme.
 *
 * @package fse_starter
 */

namespace twopalmscreative\verve;

/**
 * Registers custom block pattern for the FSE Starter theme.
 */
function register_custom_block_pattern() {

		register_block_pattern(
			'verve/pattern-name',
			array(
				'title'         => __( 'Pattern Title', 'verve' ),
				'blockTypes'    => array( 'core/query' ),
				'templateTypes' => array( 'single-post' ),
				'postTypes'     => array( '' ),
				'description'   => _x( 'Block Pattern Name', 'Block pattern description', 'verve' ),
				'content'       => '',
			)
		);
}
add_action( 'init', __NAMESPACE__ . '\register_custom_block_pattern', 9 );
