<?php
/**
 * Starter point
 *
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function AstraChild_enqueue_child_styles() {
		// loading parent style
		wp_register_style(
			'parente2-style',
			get_template_directory_uri() . '/style.css'
		);

		wp_enqueue_style( 'parente2-style' );
		// loading child style
		wp_register_style(
			'childe2-style',
			get_stylesheet_directory_uri() . '/style.css'
		);
		wp_enqueue_style( 'childe2-style' );
	}
}
add_action( 'wp_enqueue_scripts', 'AstraChild_enqueue_child_styles' );

/**
 * Disable Gutenberg editor
 */
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );

/**
 * Define Constants
 */
if ( ! defined( 'MLAB_STUDIO_VERSION' ) ) {
	define( 'MLAB_STUDIO_VERSION', '1.0.0' );
}

if ( ! defined( 'MLAB_STUDIO_DIR' ) ) {
	define( 'MLAB_STUDIO_DIR', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'MLAB_STUDIO_URI' ) ) {
	define( 'MLAB_STUDIO_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
}

if ( ! defined( 'MLAB_STUDIO_DIRECTORY_URI' ) ) {
	define( 'MLAB_STUDIO_DIRECTORY_URI', trailingslashit( esc_url( get_stylesheet_directory_uri() ) ) );
}

/**
 * Include files
 */
include MLAB_STUDIO_DIR . 'src/Mls_Init.php';
include MLAB_STUDIO_DIR . 'src/mls_functions.php';
include MLAB_STUDIO_DIR . 'src/config/shortcodes/mls_list_categories.php';

add_image_size( 'single-ad-full', 600, 400 ); //300 pixels wide (and unlimited height)