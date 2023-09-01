<?php
/**
 * Title: sidebar-writer
 * Slug: twentytwentyfour/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":60,"width":80,"height":80,"scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tt4_writer_avatar-1024x1024.jpg" alt="" class="wp-image-60" style="object-fit:cover;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.4rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.4rem"><?php echo esc_html__( 'Sur l\'auteur', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem"><?php echo esc_html_x( 'Je suis Adele Diouf, et je suis animée par une curiosité insatiable de dévoiler la tapisserie complexe de la finance et de l\'économie. Au cours de plus d\'une décennie, mon voyage à travers le labyrinthe des marchés mondiaux, des politiques monétaires et des tendances économiques a fourni aux lecteurs les outils nécessaires pour naviguer dans le paysage dynamique de la finance.', 'Description de l\'écrivain de la barre latérale', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"base-3"} -->
<hr class="wp-block-separator has-text-color has-base-3-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php echo esc_html__( 'Derniers articles', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.22em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:0.8rem"><?php echo esc_html__( '—', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /-->

<!-- wp:post-terms {"term":"category","prefix":"in "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:separator {"backgroundColor":"base-3"} -->
<hr class="wp-block-separator has-text-color has-base-3-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.6rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php echo esc_html__( 'Des connections utiles', 'twentytwentyfour' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem"><?php echo esc_html_x( 'Des choses que je trouve utiles et que je voulais partager avec vous.', 'Description de l\'écrivain de la barre latérale', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem"><a href="https://tt4writer.mystagingwebsite.com"><?php echo esc_html__( 'Dernier rapport sur l\'inflation', 'twentytwentyfour' ); ?></a><?php echo esc_html__( '↗', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem"><a href="https://tt4writer.mystagingwebsite.com"><?php echo esc_html__( 'Applications financières pour les familles', 'twentytwentyfour' ); ?></a><?php echo esc_html__( '↗', 'twentytwentyfour' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
