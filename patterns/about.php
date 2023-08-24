<?php
/**
 * Title: About
 * Slug: twentytwentyfour/about
 * Categories: about
 */

?>

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"1.3"}},"fontSize":"large","fontFamily":"cardo"} -->
<p class="has-text-align-center has-cardo-font-family has-large-font-size" style="font-style:italic;font-weight:400;line-height:1.3">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentyfour' ) ) . '" rel="nofollow">' . esc_html__( 'Money Studies', 'twentytwentyfour' ) . '</a>';
        echo sprintf(
            esc_html__( 'I write about finance, management and economy, my book “%1$s” is out now.', 'twentytwentyfour' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph -->
