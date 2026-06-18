<?php
/**
 * Title: Section Title 3
 * Slug: patterns-store-front/section-title-3
 * Categories: text, featured
 * Description: A layout featuring a title and content in left alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>


<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:0px;padding-left:0px">  <!-- wp:heading {"className":"has-x-large-font-size","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-x-large-font-size has-base-color has-text-color"
        style="font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'An award winning agency specialized in web design', 'patterns-store-front' ); ?></h2>
<!-- /wp:heading -->


<!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

</div>
<!-- /wp:group -->

