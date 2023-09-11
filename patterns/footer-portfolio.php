<?php
/**
 * Title: Footer portfolio
 * Slug: twentytwentyfour/footer-portfolio
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"tagName":"footer","align":"wide","style":{"spacing":{"padding":{"top":"7vh","bottom":"7vh"}}}} -->
<footer class="wp-block-group alignwide" style="padding-top:7vh;padding-bottom:7vh"><!-- wp:image {"width":"40px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-message.webp" alt="" style="width:40px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2vh"}}}} -->
<div class="wp-block-columns" style="padding-top:2vh"><!-- wp:column {"width":"57%"} -->
<div class="wp-block-column" style="flex-basis:57%"><!-- wp:paragraph {"fontSize":"x-large","fontFamily":"cardo"} -->
<p class="has-cardo-font-family has-x-large-font-size">Resta al passo, contattaci.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Contattami</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">example@wordpress.org</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Seguimi</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Instagram</a> / <a href="#">Facebook</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"7vh"} -->
<div style="height:7vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© 2024 Twenty Twenty Four</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Designed with <a rel="nofollow" href="https://wordpress.org">WordPress</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
