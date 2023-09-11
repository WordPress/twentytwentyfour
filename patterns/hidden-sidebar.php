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
<div class="wp-block-group"><!-- wp:image {"id":22,"width":80,"height":80,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-member-3.webp" alt="" class="wp-image-22" style="object-fit:cover;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.4rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.4rem"><?php echo esc_html__( 'About the author', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:post-author-biography {"style":{"typography":{"fontSize":"0.9rem"}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"base-3"} -->
<hr class="wp-block-separator has-text-color has-base-3-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php echo esc_html__( 'Latest Posts', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.22em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y", {"isLink":true}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:0.8rem"><?php echo esc_html__( '—', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-terms {"term":"category","prefix":"in "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:separator {"backgroundColor":"base-3"} -->
<hr class="wp-block-separator has-text-color has-base-3-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php echo esc_html__( 'Links', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"small","fontFamily":"system-font"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
