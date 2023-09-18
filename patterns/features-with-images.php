<?php
/**
 * Title: Features with Images
 * Slug: twentytwentyfour/features-with-images
 * Categories: featured
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|custom-borders"}}}},"textColor":"base-3","fontSize":"large"} -->
<p class="has-text-align-center has-base-3-color has-text-color has-link-color has-large-font-size">✳︎</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'An array of resources', 'Sample content for heading of the section.', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="padding-right:0;padding-left:0"><?php echo esc_html_x( 'Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.', 'Sample content for the subheading for this pattern.', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|custom-borders"}}}},"textColor":"base-3","fontSize":"large"} -->
<p class="has-text-align-left has-base-3-color has-text-color has-link-color has-large-font-size">✳︎</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Études Architect App', 'A heading for the list.', 'twentytwentyfour' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
<ul class="is-style-checkmark-list" style="line-height:1.75">
	<!-- wp:list-item -->
	<li><?php echo esc_html_x( 'Collaborate with fellow architects', 'A general list item.', 'twentytwentyfour' ); ?></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><?php echo esc_html_x( 'Showcase your projects', 'A general list item.', 'twentytwentyfour' ); ?></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><?php echo esc_html_x( 'Experience the world of architecture like never before', 'A general list item.', 'twentytwentyfour' ); ?></li>
	<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/business-app.webp" alt="<?php echo esc_attr__( 'Woman taking picture of a building.', 'twentytwentyfour' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home.webp" alt="<?php echo esc_attr__( 'Windows of a building.', 'twentytwentyfour' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|custom-borders"}}}},"textColor":"base-3","fontSize":"large"} -->
<p class="has-text-align-left has-base-3-color has-text-color has-link-color has-large-font-size">✳︎</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Études Newsletter', 'A heading for the list.', 'twentytwentyfour' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
<ul class="is-style-checkmark-list" style="line-height:1.75">
	<!-- wp:list-item -->
	<li><?php echo esc_html_x( 'Dive into a world of thought-provoking articles', 'A general list item.', 'twentytwentyfour' ); ?></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><?php echo esc_html_x( 'Read case studies that celebrate the artistry of architecture', 'A general list item.', 'twentytwentyfour' ); ?></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><?php echo esc_html_x( 'Gain exclusive access to design insights', 'A general list item.', 'twentytwentyfour' ); ?></li>
	<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
