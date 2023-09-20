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
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_template_directory_uri() . '/assets/css/button-outline.css',
			)
		);

		/**
		 * Add the `path` data to our stylesheet.
		 *
		 * This will let WordPress determine the best loading strategy for the stylesheet:
		 * Small stylesheets will get inlined, while larger stylesheets will be loaded separately.
		 *
		 * See https://make.wordpress.org/core/2021/07/01/block-styles-loading-enhancements-in-wordpress-5-8/#inlining-small-assets for more info.
		 */
		wp_style_add_data( 'twentytwentyfour-button-style-outline', 'path', get_theme_file_path( 'assets/css/button-outline.css' ) );

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
