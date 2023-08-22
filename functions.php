<?php
/**
 * Twenty Twenty Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty Four
 * @since Twenty Twenty Four 1.0
 */


if ( ! function_exists( 'twenty_twenty_four_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty Four 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_four_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'twenty-twenty-four' );
	}

endif;

add_action( 'after_setup_theme', 'twenty_twenty_four_support' );

if ( ! function_exists( 'twenty_twenty_four_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty Four 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_four_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'twenty_twenty_four-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twenty_twenty_four-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twenty_twenty_four_styles' );
