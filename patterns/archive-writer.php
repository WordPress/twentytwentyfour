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
	<!-- wp:template-part {"slug":"header"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-query alignfull">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:query-title {"type":"archive","align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0"}}},"fontSize":"x-large"} /-->
			<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default","columnCount":3}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
				<!-- wp:spacer {"height":"var:preset|spacing|20","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"6px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
						<div class="wp-block-group has-contrast-2-color has-text-color has-link-color has-small-font-size">
							<!-- wp:post-date {"isLink":true} /-->
							<!-- wp:paragraph -->
							<p>—</p>
							<!-- /wp:paragraph -->
							<!-- wp:post-author-name {"isLink":true} /-->
							<!-- wp:paragraph -->
							<p>—</p>
							<!-- /wp:paragraph -->
							<!-- wp:post-terms {"term":"category"} /-->
						</div>
						<!-- /wp:group -->
						<!-- wp:post-excerpt {"fontSize":"small"} /-->
					</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
			<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
			<!-- wp:query-no-results -->
				<!-- wp:pattern {"slug":"twentytwentyfour/hidden-no-results-content"} /-->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
	</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-writer","area":"footer","tagName":"footer"} /-->
