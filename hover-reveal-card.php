<?php
/**
* Plugin Name: Hover Reveal Card
* Description: Extends the Cover block for an animating card effect.
* Requires at least: 6.6
* Requires PHP: 8.0
* Version: 1.0.0
* Author: Damon Cook
* License: GPL-2.0-or-later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: hr-card
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Enqueues the block styles for the plugin.
 */
function hr_card_enqueue_block_styles() {
	wp_enqueue_block_style(
		'core/cover',
		array(
			'handle' => 'hr-card-cover-card--interactive',
			'src'    => plugin_dir_url( __FILE__ ) . 'assets/styles/core-blocks/cover-card--interactive.css',
			'path'   => plugin_dir_path( __FILE__ ) . 'assets/styles/core-blocks/cover-card--interactive.css',
		)
	);
}
add_action( 'init', 'hr_card_enqueue_block_styles' );

/**
 * Registers a block pattern for the plugin.
 */
function hr_card_register_block_pattern() {
	$pattern_file = plugin_dir_path( __FILE__ ) . '/patterns/cover-cards-hover-effect.php';

	if ( ! file_exists( $pattern_file ) ) {
		return;
	}

	register_block_pattern(
		'hr-card/cover-cards-hover-effect',
		require $pattern_file
	);
}
add_action( 'init', 'hr_card_register_block_pattern' );

/**
 * Registers the custom styles for the Cover block.
 */
function hr_card_register_block_styles() {
	register_block_style(
		'core/cover',
		array(
			'name'         => 'card--interactive',
			'label'        => __( 'Card (Interactive)', 'cards' ),
			'style_handle' => 'hr-card-cover-card--interactive',
		)
	);
}
add_action( 'init', 'hr_card_register_block_styles' );
