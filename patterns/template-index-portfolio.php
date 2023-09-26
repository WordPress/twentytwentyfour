<?php
/**
 * Title: Portfolio Index Template
 * Slug: twentytwentyfour/template-index-portfolio
 * Template Types: index
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:template-part {"slug":"header","theme":"twentytwentyfour"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
	<h1 class="wp-block-heading alignwide" style="padding-top:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Posts', 'twentytwentyfour' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:pattern {"slug":"twentytwentyfour/offset-grid-image-posts"} /-->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer","theme":"twentytwentyfour"} /-->
