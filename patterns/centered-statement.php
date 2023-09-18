<?php
/**
 * Title: Centered Statement
 * Slug: twentytwentyfour/centered-statement
 * Categories: text, about, featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large","fontFamily":"heading"} -->
<p class="has-text-align-center has-heading-font-family has-x-large-font-size" style="font-style:normal;font-weight:400;line-height:1.2">
<?php
		echo sprintf(
			'%1$s<em>%2$s</em>%3$s',
			esc_html__( 'Queste fotografie non solo hanno catturato la bellezza fisica del ', 'twentytwentyfour' ),
			esc_html__( 'Piva Arts &amp; Crafts Hotel', 'twentytwentyfour' ),
			esc_html__( ", ma hanno anche trasmesso le emozioni e le sensazioni che l'hotel evoca nei suoi ospiti", 'twentytwentyfour' )
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
