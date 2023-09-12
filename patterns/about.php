<?php
/**
 * Title: About
 * Slug: twentytwentyfour/about
 * Categories: about
 */

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"1.3"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","fontSize":"large","fontFamily":"cardo"} -->
<p class="has-text-align-center has-base-background-color has-background has-cardo-font-family has-large-font-size" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);font-style:italic;font-weight:400;line-height:1.3">
	<?php
		/* Translators: About link placeholder */
		$about_link = '<a href="#" rel="nofollow">' . esc_html__( 'Money Studies', 'twentytwentyfour' ) . '</a>';
		echo sprintf(
			/* Translators: About text placeholder */
			esc_html__( 'I write about finance, management and economy, my book “%1$s” is out now.', 'twentytwentyfour' ),
			$about_link
		);
		?>
</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
