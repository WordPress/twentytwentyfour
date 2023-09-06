<?php
/**
 * Title: Centered Call to Action
 * Slug: twentytwentyfour/centered-call-to-action
 * Categories: call-to-action
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8vh","bottom":"8vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:8vh;padding-bottom:8vh"><!-- wp:group {"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"6vh","bottom":"6vh","left":"6vw","right":"6vw"}}},"backgroundColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="border-radius:16px;padding-top:6vh;padding-right:6vw;padding-bottom:6vh;padding-left:6vw"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Join 900+ subscribers','Sample heading text for call to action section','twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Stay in the loop with everything you need to know.','Sample content for call to action section','twentytwentyfour' );?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Sign Up','Button Text for call to action','twentytwentyfour' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->