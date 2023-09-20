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
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );
