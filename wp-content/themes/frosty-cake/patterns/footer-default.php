<?php
/**
 * Footer Default
 * 
 * slug: frosty-cake/footer-default
 * title: Footer Default
 * categories: frosty-cake
 */
$theme_data = wp_get_theme();
$theme_uri = $theme_data->get( 'ThemeURI' );
$author_uri = $theme_data->get( 'AuthorURI' );
$wordpress_uri = '//wordpress.org/';
return array(
    'title'      =>__( 'Footer Default', 'frosty-cake' ),
    'categories' => array( 'frosty-cake' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}},"color":{"background":"var(--wp--preset--color--secaccent)"}},"textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background-color has-text-color has-background has-link-color" style="background-color:var(--wp--preset--color--secaccent)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"0px","left":"0px"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"alignwide wow fadeInUp"} -->
<div class="wp-block-columns alignwide wow fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box","fontFamily":"saira"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-saira-font-family" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"2px"}},"textColor":"background","fontSize":"content-heading","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-kaushan-script-font-family has-content-heading-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px"><strong>'. esc_html__('Helps','frosty-cake') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontSize":"medium","fontFamily":"inter"} -->
<!-- wp:navigation-link {"label":"Help","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Privacy Policy","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Terms And Conditions","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shipping details","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-box","style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column footer-box" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"fontSize":"content-heading","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading has-kaushan-script-font-family has-content-heading-font-size">'. esc_html__('About us','frosty-cake') .'</h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontSize":"medium","fontFamily":"inter"} -->
<!-- wp:navigation-link {"label":"Wishlist","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blogs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Orders","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Coupon Code","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Affiliate","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->


<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"2px"}},"textColor":"background","fontSize":"content-heading","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-kaushan-script-font-family has-content-heading-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px"><strong>'. esc_html__('Quick Links','frosty-cake') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"background","overlayMenu":"never","className":"is-head-menu","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"fontSize":"medium","fontFamily":"inter"} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Product","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Reservation","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"https://www.wpradiant.net/products/cake-wordpress-theme","kind":"custom","className":"getpro"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"kaushan-script"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size" style="font-style:normal;font-weight:700">'. esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-text-align-left has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size" style="font-style:normal;font-weight:700"><span class="dashicons dashicons-email-alt"></span>  '. esc_html__('support@example.com','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size" style="font-style:normal;font-weight:700"><span class="dashicons dashicons-phone"></span>   '. esc_html__('+123 456 7890','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size" style="font-style:normal;font-weight:700"><span class="dashicons dashicons-admin-home"></span>  '. esc_html__('123, Red Hills, Chicago,IL, USA','frosty-cake') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"var(--wp--preset--color--thirdaccent)"}},"className":"copyright-text","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group copyright-text has-background" style="background-color:var(--wp--preset--color--thirdaccent)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"wow fadeInUp","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-text-align-center wow fadeInUp has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size"><a href="' . $theme_uri . '"target="_blank">'. esc_html__('Cake WordPress Theme ','frosty-cake') .' </a> '. esc_html__(' By','frosty-cake') .' <a href="' . $author_uri . '"target="_blank">'. esc_html__('WP Radiant','frosty-cake') .'</a> | '. esc_html__('Proudly powered by','frosty-cake') .' <a href="' . $wordpress_uri . '"target="_blank">'. esc_html__('WordPress','frosty-cake') .'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"scroll-top-button"} -->
<div class="wp-block-button scroll-top-button"><a class="wp-block-button__link wp-element-button"><img class="wp-image-8" style="width: 20px; height: 20px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/arrow-up.svg" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->',
);