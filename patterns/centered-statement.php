<?php
/**
 * Title: Centered Statement
 * Slug: twentytwentyfour/centered-statement
 * Categories: text
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"base","textColor":"contrast","fontSize":"x-large","fontFamily":"cardo"} -->
<p class="has-text-align-center has-contrast-color has-base-background-color has-text-color has-background has-cardo-font-family has-x-large-font-size" style="font-style:normal;font-weight:400;line-height:1.3">
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
<!-- /wp:group -->
