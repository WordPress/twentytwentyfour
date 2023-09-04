<?php
/**
 * Title: A 404 page
 * Slug: twentytwentyfour/404
 * Inserter: no
 */
?>

<!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color has-x-large-font-size" id="page-not-found"><?php echo esc_html_x( 'Page Not Found', 'Heading for a webpage that is not found', 'twentytwentyfour' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color"><?php echo esc_html_x( 'The page you are looking for doesn’t exist, or it has been moved. Please try searching using the form below.', 'Message to convey that a webpage could not be found', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"width":620,"widthUnit":"px","buttonText":"<?php echo esc_attr_x( 'Search', 'Search button label', 'twentytwentyfour' ); ?>","style":{"border":{"radius":"6px"}}} /-->
