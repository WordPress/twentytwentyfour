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
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 * https://github.com/WordPress/twentytwentyfour/issues/46
				 */
				'inline_style' => '.is-style-arrow-icon-details{padding-top:var(--wp--preset--spacing--10);padding-bottom: var(--wp--preset--spacing--10);border-bottom: 1px solid rgba(255, 255, 255, 0.20);}.is-style-arrow-icon-details summary{list-style-type:"\2193\00a0\00a0\00a0";}.is-style-arrow-icon-details[open] > summary{list-style-type:"\2192\00a0\00a0\00a0";}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '.is-style-pill a,.is-style-pill span:not([class], [data-rich-text-placeholder]){display:inline-block;background-color: #f2f2f2;padding:6px 14px;border-radius:16px;margin:0 10px 10px 0;}.is-style-pill a:hover{background-color:#eee;}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'       => 'checkmark-list',
				'label'      => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_css' => 'ul.is-style-checkmark-list{list-style-type:"\2713";}ul.is-style-checkmark-list li{padding-inline-start:1ch;}',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'rounded',
				'label' => __( 'Rounded', 'twentytwentyfour' ),
				'inline_style' => '.is-style-rounded{border-radius:16px;background-color:var(--wp--preset--color--base-2);padding:var(--wp--preset--spacing--40);}',
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );
