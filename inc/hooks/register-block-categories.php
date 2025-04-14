<?php
/**
 * Register custom block category(ies).
 *
 * @package fse_starter
 */

namespace twopalmscreative\fse_starter;

/**
 * Register_wds_category
 *
 * @param array $categories block categories.
 * @return array $categories block categories.
 * @author twopalmscreative
 */
function register_wds_category( $categories ) {
	$custom_block_category = [
		'slug'  => __( 'wds-blocks-category', 'verve' ),
		'title' => __( 'WDS Blocks', 'verve' ),
	];

	$categories_sorted    = [];
	$categories_sorted[0] = $custom_block_category;

	foreach ( $categories as $category ) {
		$categories_sorted[] = $category;
	}

	return $categories_sorted;
}

add_filter( 'block_categories_all', __NAMESPACE__ . '\register_wds_category', 10, 1 );
