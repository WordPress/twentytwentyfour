<?php
/**
 * Title: Posts
 * Slug: twentytwentyfour/posts
 * Categories: posts
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php echo esc_html__( 'Watch, Read, Listen', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":16,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"1.25rem"}}} /-->

<!-- wp:post-excerpt {"fontSize":"small"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color" style="font-size:0.8rem">—</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->

<!-- wp:post-terms {"term":"category","prefix":"in ","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:query {"queryId":16,"query":{"perPage":2,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<!-- wp:post-featured-image /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.3"}}} /-->

<!-- wp:post-excerpt {"fontSize":"small"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color" style="font-size:0.8rem">—</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->

<!-- wp:post-terms {"term":"category","prefix":"in ","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
