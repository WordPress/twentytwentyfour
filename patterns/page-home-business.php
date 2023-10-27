<?php
/**
 * Title: Business home
 * Slug: twentytwentyfour/page-home-business
 * Categories: page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
?>

<!-- wp:pattern {"slug":"twentytwentyfour/banner-hero"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/text-feature-grid-3-col"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/text-alternating-images"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/testimonial-centered"} /-->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0"}}},"fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size" style="margin-top:0;line-height:1"><?php esc_html_e( 'Watch, Read, Listen', 'twentytwentyfour' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:pattern {"slug":"twentytwentyfour/posts-3-col"} /-->
</div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"twentytwentyfour/cta-subscribe-centered"} /-->
