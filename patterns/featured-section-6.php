<?php
/**
 * Title: Featured Section 6
 * Slug: patterns-store-front/featured-section-6
 * Categories: services, columns, text, featured
 * Description: A layout with a title and content in the header section, and columns in the body section featuring an icon, title and content.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Why our marketplace?', 'patterns-store-front' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%">
	<!-- wp:pattern {"slug":"patterns-store-front/card-5"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%">
<!-- wp:group {"className":"at-box-sdw","style":{"border":{"radius":"5px"},"spacing":{"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group at-box-sdw has-default-background-color has-background" style="border-radius:5px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-ui-check-grid.png" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '24/7 Customer Support', 'patterns-store-front' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"at-box-sdw","style":{"border":{"radius":"5px"},"spacing":{"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group at-box-sdw has-default-background-color has-background" style="border-radius:5px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-ui-check-grid.png" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Easy Buy & Sell', 'patterns-store-front' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
