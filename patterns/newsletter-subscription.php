<?php
/**
 * Title: Newsletter Subscription
 * Slug: twentytwentyfour/newsletter-subscription
 * Categories: buttons
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"15rem","bottom":"15rem","right":"10rem","left":"10rem"},"blockGap":"2.5rem"}},"backgroundColor":"custom-brick","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-custom-brick-background-color has-background" style="padding-top:15rem;padding-right:10rem;padding-bottom:15rem;padding-left:10rem"><!-- wp:image {"align":"center","id":22,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/message_icon.png" alt="" class="wp-image-22"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast","fontSize":"x-large","fontFamily":"cardo"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-cardo-font-family has-x-large-font-size" style="font-style:normal;font-weight:400;line-height:1.2">
    <?php
        echo esc_html__( 'Subscribe to the newsletter and stay connected with our community.', 'twentytwentyfour' );
    ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"tertiary","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size">
    <a class="wp-block-button__link has-tertiary-color has-text-color wp-element-button" href="#">
        <?php
            echo esc_html__( 'Subscribe', 'twentytwentyfour' );
        ?>
    </a>
</div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->