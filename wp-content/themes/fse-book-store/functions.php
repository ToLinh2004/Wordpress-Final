<?php
/**
 * FSE Book Store functions and definitions
 *
 * @package fse_book_store
 * @since 1.0
 */

if ( ! function_exists( 'fse_book_store_support' ) ) :
	function fse_book_store_support() {

		load_theme_textdomain( 'fse-book-store', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'fse_book_store_support' );

if ( ! function_exists( 'fse_book_store_styles' ) ) :
	function fse_book_store_styles() {
		// Register theme stylesheet.
		$fse_book_store_theme_version = wp_get_theme()->get( 'Version' );

		$fse_book_store_version_string = is_string( $fse_book_store_theme_version ) ? $fse_book_store_theme_version : false;
		wp_enqueue_style(
			'fse-book-store-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_book_store_version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_book_store_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM plugin
require get_template_directory() . '/inc/tgm-plugin/plugin-activation.php';