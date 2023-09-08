<?php
/**
 * Title: Left Aligned Call to Action with Image
 * Slug: twentytwentyfour/left-aligned-cta-image
 * Categories: call-to-action
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","wideSize":"","contentSize":"1280px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:642px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Enhance your architectural journey with the Études Architect App', 'sample heading for call to action', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
<p style="line-height:1.8"><?php echo wp_kses_post( _x( '✓ Collaborate with fellow architects<br>✓ Showcase your projects<br>✓ Experience the world of architecture like never before', 'sample content for call to action', 'twentytwentyfour' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Learn More', 'sample content for call to action button', 'twentytwentyfour' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Get Started', 'sample content for call to action button', 'twentytwentyfour' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"574px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:574px"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/left-aligned-cta.webp" alt="<?php echo esc_attr( 'An abstract Pattern Image', 'twentytwentyfour' ); ?>" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
