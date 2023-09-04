<?php

/**
 * Title: Testimonial
 * Slug: twentytwentyfour/testimonial
 * Categories: testimonials
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"8.75rem","bottom":"8.75rem","left":"5.625rem","right":"5.625rem"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:8.75rem;padding-right:5.625rem;padding-bottom:8.75rem;padding-left:5.625rem"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"2rem"}},"typography":{"lineHeight":"1.2"}},"textColor":"base","fontSize":"x-large","fontFamily":"cardo"} -->
  <p class="has-text-align-center has-base-color has-text-color has-cardo-font-family has-x-large-font-size" style="margin-bottom:2rem;line-height:1.2"><em><?php echo esc_html__('“Études has saved us thousands of hours of work and has unlocked insights we never thought possible.”', 'twentytwentyfour'); ?></em></p>
  <!-- /wp:paragraph -->

  <!-- wp:image {"align":"center","width":64,"height":64,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"999px"}},"className":"is-style-rounded"} -->
  <figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/tt4_testimonial_avatar.jpg" alt="" class="" style="border-radius:999px;object-fit:cover;width:64px;height:64px" width="64" height="64" /></figure>
  <!-- /wp:image -->

  <!-- wp:paragraph {"align":"center","fontFamily":"inter"} -->
  <p class="has-text-align-center has-inter-font-family"><strong><?php echo esc_html__('Annie Steiner', 'twentytwentyfour'); ?></strong></p>
  <!-- /wp:paragraph -->

  <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0.25rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontFamily":"inter"} -->
  <p class="has-text-align-center has-inter-font-family" style="margin-top:0.25rem;font-style:normal;font-weight:300"><?php echo esc_html__('CEO, Greenprint', 'twentytwentyfour'); ?></p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->