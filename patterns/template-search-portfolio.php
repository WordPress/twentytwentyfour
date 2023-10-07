<?php
/**
 * Title: Portfolio Search Template
 * Slug: twentytwentyfour/template-search-portfolio
 * Template Types: search
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header"} /-->


<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:query-title {"type":"search","align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|10"}}}} /-->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:pattern {"slug":"twentytwentyfour/search"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:spacer {"height":"0"} -->
			<div style="height:0" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:pattern {"slug":"twentytwentyfour/posts-three-columns-images"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
