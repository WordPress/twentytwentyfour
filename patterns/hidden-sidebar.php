<?php
/**
 * Title: sidebar
 * Slug: twentytwentyfour/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":80,"style":{"border":{"radius":"16px"}}} /-->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.4rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.4rem"><?php echo esc_html__( 'About the author', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:post-author-biography {"fontSize":"small"} /-->
</div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"base-3","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-base-3-color has-alpha-channel-opacity has-base-3-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php echo esc_html__( 'Latest Posts', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:pattern {"slug":"twentytwentyfour/post-meta"} /-->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:separator {"backgroundColor":"base-3","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-base-3-color has-alpha-channel-opacity has-base-3-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php echo esc_html__( 'Useful links', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Things that I find useful and wanted to share with you.', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textDecoration":"underline"}},"fontSize":"small"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Latest inflation report', 'twentytwentyfour' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Financial apps for families', 'twentytwentyfour' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
