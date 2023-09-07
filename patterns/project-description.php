<?php
/**
 * Title: Project description
 * Slug: twentytwentyfour/project-description
 * Categories: featured, banner, about
 * Viewport width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
<p><?php echo esc_html__( 'Art Gallery — Overview', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'This transformative project seeks to enhance the gallery\'s infrastructure, accessibility, and exhibition spaces while preserving its rich heritage.', 'Overview of the Project', 'twentytwentyfour' ); ?> </h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"wide","id":64,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image alignwide size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tt4_projectoverview.jpg" alt="Project Overview" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
