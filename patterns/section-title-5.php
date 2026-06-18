<?php
/**
 * Title: Section Title 5
 * Slug: patterns-store-front/section-title-5
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in dark feature areas.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:0;padding-left:0">
<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"default","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-default-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'Largest Library of Pre-Built Templates', 'patterns-store-front' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"default","fontSize":"small"} -->
<p class="has-default-color has-text-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-background-color has-background wp-element-button"><?php esc_html_e( 'View All Demos', 'patterns-store-front' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->


