<?php
/**
 * Title: Left Aligned Call to Action with Image
 * Slug: twentytwentyfour/left-aligned-cta-image
 * Categories: call-to-action
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"","contentSize":"1280px"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"642px","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
<div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:642px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Enhance your architectural journey with the Études Architect App', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-checkmark-list"} -->
<ul class="is-style-checkmark-list" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--10)"><!-- wp:list-item -->
<li>Collaborate with fellow architects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Showcase your projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Experience the world of architecture like never before</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', 'twentytwentyfour' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'twentytwentyfour' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"574px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:574px"><!-- wp:image {"id":19,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"16px"}},"className":"is-resized is-style-rounded"} -->
<figure class="wp-block-image size-large has-custom-border is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tt4_left-aligned-cta-image.jpeg" alt="" class="wp-image-19" style="border-radius:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
