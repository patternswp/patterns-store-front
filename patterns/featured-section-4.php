<?php
/**
 * Title: Featured Section 4
 * Slug: patterns-store-front/featured-section-4
 * Categories: services, columns, featured
 * Description: A layout with a title and content in the header section, and columns in the body section featuring an icon, title, content, and button for each service.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:pattern {"slug":"patterns-store-front/section-title-6"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:pattern {"slug":"patterns-store-front/card-3"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0px"},"border":{"radius":"5px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group  has-secondary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-share.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"bottom":"15px"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color " style="margin-bottom:15px;font-size:22px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Digital Marketing', 'patterns-store-front' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatu', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="pwp-txt-dec-non has-link-color has-x-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Continue Reading', 'patterns-store-front' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized" ><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-arrow-right.png" style="width:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0px"},"border":{"radius":"5px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group  has-secondary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-phone.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"bottom":"15px"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color " style="margin-bottom:15px;font-size:22px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Mobile Application', 'patterns-store-front' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatu', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="pwp-txt-dec-non has-link-color has-x-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e( 'Continue Reading', 'patterns-store-front' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized" ><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-arrow-right.png" style="width:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:pattern {"slug":"patterns-store-front/card-3"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:pattern {"slug":"patterns-store-front/card-3"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:pattern {"slug":"patterns-store-front/card-3"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
