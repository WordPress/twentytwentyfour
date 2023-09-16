<?php
/**
 * Title: Writer Archive Template
 * Slug: twentytwentyfour/archive-writer
 * Template Types: archive
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:template-part {"slug":"header","theme":"twentytwentyfour"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:query-title {"type":"archive","style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"twentytwentyfour/posts-writer"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-writer","area":"footer","tagName":"footer","theme":"twentytwentyfour"} /-->
