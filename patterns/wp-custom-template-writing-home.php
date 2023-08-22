<?php
/**
 * Title: wp-custom-template-writing-home
 * Slug: twenty-twenty-four/wp-custom-template-writing-home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8vh","bottom":"8vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:8vh;padding-bottom:8vh"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><em>Adele writes about finance, management and economy, her book “Money Studies” is out now.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0vh","bottom":"0vh"},"padding":{"top":"6vh","bottom":"6vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0vh;margin-bottom:0vh;padding-top:6vh;padding-bottom:6vh"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.22em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:0.8rem">—</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /-->

<!-- wp:post-terms {"term":"category","prefix":"in "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","excerptLength":40} /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":22,"width":80} -->
<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/avatar_4.jpg" alt="" class="wp-image-22" style="width:80px" width="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem">About the author</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem">I'm a seasoned financial writer driven by an insatiable curiosity to unveil the intricate tapestry of finance and economics. Over the span of more than a decade, my journey through the labyrinth of global markets, monetary policies, and economic trends has equipped readers with the tools to navigate the dynamic landscape of finance.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"custom-borders"} -->
<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem">Latest Posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":39,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.22em"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:0.8rem">—</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /-->

<!-- wp:post-terms {"term":"category","prefix":"in "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"custom-borders"} -->
<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem">Links</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":43,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"fontSize":"small","fontFamily":"system-font"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"8vh","bottom":"8vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:8vh;padding-bottom:8vh"><!-- wp:group {"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"6vh","bottom":"6vh","left":"6vw","right":"6vw"}}},"backgroundColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="border-radius:16px;padding-top:6vh;padding-right:6vw;padding-bottom:6vh;padding-left:6vw"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Join 900+ subscribers</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Stay in the loop with everything you need to know.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Sign Up</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-writing","area":"uncategorized"} /-->