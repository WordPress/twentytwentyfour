<?php
/**
 * Title: Hero
 * Slug: twentytwentyfour/hero
 * Categories: banner, call-to-action, featured
* Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'A commitment to innovation and sustainability', 'Heading of the hero section', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"1.25rem","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Études is a pioneering firm that seamlessly merges creativity and functionality to redefine architectural excellence.', 'Content of the hero section', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"1.25rem","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'About us', 'Button\'s label of the hero section', 'twentytwentyfour' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image alignwide size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/business-hero.webp" alt="<?php echo esc_attr__( 'A skyscraper building.', 'twentytwentyfour' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
