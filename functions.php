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
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Register a block variation for a query loop with only featured images.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 * @see https://developer.wordpress.org/news/2022/12/building-a-book-review-grid-with-a-query-loop-block-variation/
 * @return void
 * @since Twenty Twenty-Four 1.0
 *
 */
function twentytwentyfour_register_block_variation() {
	wp_enqueue_script(
		'twentytwentyfour-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'enqueue_block_assets', 'twentytwentyfour_register_block_variation' );

function twentytwentyfour_rest_filter_query( $args ) {
	// Only return posts with featured images.
	$args['meta_query'] = array(
		array(
			'key'     => '_thumbnail_id',
			'compare' => 'EXISTS',
		),
	);
	return $args;
}
add_filter( 'rest_post_query', 'twentytwentyfour_rest_filter_query', 10, 2 );

function twentytwentyfour_pre_render_block( $pre_render, $parsed_block ) {
	if (
		isset( $parsed_block['attrs']['namespace'] ) &&
		'twentytwentyfour/featured-image-query' === $parsed_block['attrs']['namespace']
	) {
		add_filter(
			'query_loop_block_query_vars',
			function( $query, $block ) use ( $parsed_block ) {
				// Only return posts with featured images.
				$query['meta_query'] = array(
					array(
						'key'     => '_thumbnail_id',
						'compare' => 'EXISTS',
					),
				);
				return $query;
			},
			10,
			2
		);
	}

	return $pre_render;
}
add_filter( 'pre_render_block', 'twentytwentyfour_pre_render_block', 10, 2 );

