<?php
/**
 * Title: About
 * Slug: twentytwentyfour/about
 * Categories: about
 */

?>

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"1.3"},"spacing":{"padding":{"top":"6.25rem","bottom":"6.25rem"}}},"backgroundColor":"base","fontSize":"large","fontFamily":"cardo"} -->
<p class="has-text-align-center has-base-background-color has-background has-cardo-font-family has-large-font-size" style="padding-top:6.25rem;padding-bottom:6.25rem;font-style:italic;font-weight:400;line-height:1.3">
	<?php
		/* Translators: About link placeholder */
		$about_link = '<a href="#" rel="nofollow">' . esc_html_x( 'Money Studies', 'About link placeholder', 'twentytwentyfour' ) . '</a>';
		echo sprintf(
			/* Translators: About text placeholder */
			esc_html_x( 'I write about finance, management and economy, my book “%1$s” is out now.', 'About text placeholder', 'twentytwentyfour' ),
			$about_link
		);
		?>
</p>
<!-- /wp:paragraph -->
