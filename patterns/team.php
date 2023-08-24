<?php
/**
 * Title: Team
 * Slug: twentytwentyfour/team
 * Categories: gallery
 */
?>

<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html_x('Meet our team', 'Header of team pattern','twentytwentyfour');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html_x('Our comprehensive suite of professionals caters to a diverse team, <br>ranging from seasoned architects to renowned engineers.','Subheader of team pattern','twentytwentyfour');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"3em"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","id":19,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php esc_url(get_template_directory_uri().'assets/team-member-1.jpg');?>" alt="" class="wp-image-19" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><strong>Francesca Piovani</strong><br>Founder, CEO &amp; Architect</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"align":"center","id":20,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php esc_url(get_template_directory_uri().'assets/team-member-2.jpg');?>" alt="" class="wp-image-20" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><strong>Rhye Moore</strong><br>Engineering Manager</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"align":"center","id":22,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php esc_url(get_template_directory_uri().'assets/team-member-3.jpg');?>" alt="" class="wp-image-22" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><strong>Helga Steiner</strong><br>Architect</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"align":"center","id":21,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-style-rounded"><img src="<?php esc_url(get_template_directory_uri().'assets/team-member-4.jpg');?>" alt="" class="wp-image-21" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><strong>Ivan Lawrence</strong><br>Project Manager</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
