<?php
/**
 * Title: Portfolio Project Overview
 * Slug: twentytwentyfour/portfolio-project-overview
 * Categories: about
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:pattern {"slug":"twentytwentyfour/project-description"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/project-details"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-overview.webp","hasParallax":true,"dimRatio":0,"overlayColor":"base","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"8vh","bottom":"8vh","right":"6vw","left":"6vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:8vh;padding-right:6vw;padding-bottom:8vh;padding-left:6vw;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-0 has-background-dim"></span><div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-overview.webp)"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:pattern {"slug":"twentytwentyfour/centered-statement"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/project-layout"} /-->
