<?php
/**
 * Title: Pricing
 * Slug: twentytwentyfour/pricing
 * Categories: call-to-action
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'Our Services', 'Heading for pricing pattern', 'twentytwentyfour' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|50"}},"typography":{"fontSize":"1.125rem"}}} -->
		<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70);font-size:1.125rem"><?php echo esc_html_x( 'We offer flexible options, which you can adapt to the different needs of each project.', 'Short blurb for pricing pattern', 'twentytwentyfour' ); ?></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|custom-borders","width":"1px"}}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--custom-borders);border-top-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"1px"}}}} -->
			<h4 class="wp-block-heading has-text-align-center" style="padding-top:1px"><em><?php echo esc_html_x( 'Free', 'Title for Free pricing level', 'twentytwentyfour' ); ?></em></h4>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"fontSize":"x-large"} -->
			<h5 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--70)"><?php echo esc_html_x( '$0', 'Price for Free pricing level', 'twentytwentyfour' ); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Access to 5 exclusive <em>Études Articles</em> per month ✓', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"custom-borders"} -->
			<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"align":"center","textColor":"custom-borders"} -->
			<p class="has-text-align-center has-custom-borders-color has-text-color"><?php echo esc_html_x( 'The print edition, delivered weekly ✕', 'Feature for pricing level', 'twentytwentyfour' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"custom-borders"} -->
			<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"align":"center","textColor":"custom-borders"} -->
			<p class="has-text-align-center has-custom-borders-color has-text-color"><?php echo wp_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android ✕', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Subscribe', 'Call to action pricing level', 'twentytwentyfour' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"2px"},"right":{},"bottom":{},"left":{}},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:2px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":4} -->
			<h4 class="wp-block-heading has-text-align-center"><em><?php echo esc_html_x( 'Connoisseur', 'Title for Connoisseur pricing level', 'twentytwentyfour' ); ?></em></h4>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"fontSize":"x-large"} -->
			<h5 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--70)"><?php echo esc_html_x( '$12', 'Price for Connoisseur pricing level', 'twentytwentyfour' ); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Access to 20 exclusive <em>Études Articles</em> per month ✓', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"custom-borders"} -->
			<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html_x( 'The print edition, delivered weekly ✓', 'twentytwentyfour' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"custom-borders"} -->
			<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android ✓', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Subscribe', 'Call to action pricing level', 'twentytwentyfour' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|custom-borders","width":"1px"}}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--custom-borders);border-top-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"1px"}}}} -->
			<h4 class="wp-block-heading has-text-align-center" style="padding-top:1px"><em><?php echo esc_html_x( 'Expert', 'Title for Expert pricing level', 'twentytwentyfour' ); ?></em></h4>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"fontSize":"x-large"} -->
			<h5 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--70)"><?php echo esc_html_x( '$28', 'Price for Expert pricing level', 'twentytwentyfour' ); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Unlimited access to <em>Études Articles</em> ✓', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"custom-borders"} -->
			<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html_x( 'The print edition, delivered weekly ✓', 'Feature for pricing level', 'twentytwentyfour' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"custom-borders"} -->
			<hr class="wp-block-separator has-text-color has-custom-borders-color has-alpha-channel-opacity has-custom-borders-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android ✓', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Subscribe', 'Call to action pricing level', 'twentytwentyfour' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
