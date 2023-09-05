<?php
/**
 * Title: Centered Statement
 * Slug: twentytwentyfour/centered-statement
 * Categories: text
 */

?>

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"12rem","bottom":"12rem","right":"13rem","left":"13rem"}}},"backgroundColor":"base","textColor":"contrast","fontSize":"large","fontFamily":"cardo"} -->
<p class="has-text-align-center has-contrast-color has-base-background-color has-text-color has-background has-cardo-font-family has-large-font-size" style="padding-top:12rem;padding-right:13rem;padding-bottom:12rem;padding-left:13rem;font-style:normal;font-weight:400;line-height:1.3">
	<?php
		echo sprintf(
			'%1$s<em>%2$s</em>%3$s',
			esc_html__( 'These photographs not only captured the physical beauty of the ', 'twentytwentyfour' ),
			esc_html__( 'Piva Arts &amp; Crafts Hotel', 'twentytwentyfour' ),
			esc_html__( ', but also conveyed the emotions and feelings the hotel evokes in its guests', 'twentytwentyfour' ),
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
