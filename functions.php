<?php
/**
 * Twenty Twenty Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty Four
 * @since Twenty Twenty Four 1.0
 */


if ( ! function_exists( 'twentytwentyfour_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 * @since Twenty Twenty Four 1.0
	 *
	 */
	function twentytwentyfour_support() {
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'twentytwentyfour_support' );

if ( ! function_exists( 'twentytwentyfour_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 * @since Twenty Twenty Four 1.0
	 *
	 */
	function twentytwentyfour_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'twentytwentyfour-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentyfour-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentyfour_styles' );

/**
 * Register block Styles
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @return void
	 * @since Twenty Twenty-Four 1.0
	 *
	 */
	function twentytwentyfour_block_styles() {
		register_block_style(
			'core/details',
			array(
				'name'  => 'arrow-icon-details',
				'label' => __( 'Arrow icon', 'twentytwentyfour' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'pill',
				'label' => __( 'Pill', 'twentytwentyfour' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'checkmark-list',
				'label' => __( 'Checkmark', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );
