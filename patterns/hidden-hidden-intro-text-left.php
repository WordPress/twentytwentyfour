<?php
/**
 * Title: Heading on left
 * Slug: twentytwentyfour/hidden-intro-text-left
 * Categories: text
 * Inserter: no
 */

?>

<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large","fontFamily":"cardo"} -->
<p class="has-cardo-font-family has-xx-large-font-size" style="line-height:1.2">
	<?php
		echo sprintf(
			'%1$s<em>%2$s</em>%3$s',
			esc_html__( 'I’m ', 'twentytwentyfour' ),
			esc_html__( 'Leia Acosta', 'twentytwentyfour' ),
			esc_html__( ', a passionate photographer who finds inspiration in capturing the fleeting beauty of life.', 'twentytwentyfour' )
		);
		?>
</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
