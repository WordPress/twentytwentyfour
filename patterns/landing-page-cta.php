<?php
/**
 * Title: Landing Page - Call To Action
 * Slug: twentytwentyfour/landing-page-cta
 * Categories: call-to-action
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"300px","bottom":"300px","left":"80px","right":"80px"},"blockGap":"20px"}},"backgroundColor":"accent-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-accent-3-background-color has-background" style="padding-top:300px;padding-right:80px;padding-bottom:300px;padding-left:80px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","id":8,"width":45,"height":49,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/message_icon.png" alt="" class="wp-image-8" style="object-fit:cover;width:45px;height:49px" width="45" height="49"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"48px","lineHeight":"1.5"}},"fontFamily":"cardo"} -->
<h2 class="wp-block-heading has-text-align-center has-cardo-font-family" style="font-size:48px;font-style:normal;font-weight:500;line-height:1.5"><?php echo esc_html__( 'Subscribe to the newsletter and stay connected with our community.', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"17px","bottom":"17px"}},"border":{"radius":"6px"},"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"16px"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:16px;font-style:normal;font-weight:800"><a class="wp-block-button__link has-text-align-center wp-element-button" style="border-radius:6px;padding-top:17px;padding-right:28px;padding-bottom:17px;padding-left:28px"><?php echo esc_html__( 'Sign Up', 'twentytwentyfour' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
