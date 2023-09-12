<?php
/**
 * Title: Testimonial
 * Slug: twentytwentyfour/testimonial
 * Categories: testimonials
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"2rem"},"padding":{"right":"0","left":"0"}},"typography":{"lineHeight":"1.2","letterSpacing":"-0.02em"}},"textColor":"base","fontSize":"x-large","fontFamily":"cardo"} -->
<p class="has-text-align-center has-base-color has-text-color has-cardo-font-family has-x-large-font-size" style="margin-bottom:2rem;padding-right:0;padding-left:0;letter-spacing:-0.02em;line-height:1.2"><em><?php echo esc_html_x( '“Études has saved us thousands of hours of work and has unlocked insights we never thought possible.”', 'Testimonial Text or Review Text Got From the Person', 'twentytwentyfour' ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","width":64,"height":64,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"999px"}},"className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial-avatar.webp" alt="<?php echo esc_attr( 'Portrait of a woman looking down Side', 'twentytwentyfour' ); ?>" style="border-radius:999px;object-fit:cover;width:64px;height:64px" width="64" height="64"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong><?php echo esc_html_x( 'Annie Steiner', 'Name of Person Provided the Testimonial', 'twentytwentyfour' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0.25rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"contrast-3"} -->
<p class="has-text-align-center has-contrast-3-color has-text-color" style="margin-top:0.25rem;font-style:normal;font-weight:300"><?php echo esc_html_x( 'CEO, Greenprint', 'Designation of Person Provided Testimonial', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
