<?php
/**
 * Title: Pattern content header
 * Slug: patterns-store-front/pattern-content-header
 * Categories: post
 * Description: A template layout for displaying an pattern header with various filter options
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Single Pattern Header"},"style":{"color":{"background":"#f5f5f5"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="background-color:#f5f5f5;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"fontSize":"medium"} /-->

<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Relation', 'patterns-store-front' ); ?>","metadata":{"bindings":{"content":{"source":"patterns-store/pattern-data","args":{"key":"patterns_store_pattern_relation"}}}},"className":"pwp-txt-dec-non"} -->
<p class="pwp-txt-dec-non"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"tagName":"button","style":{"spacing":{"padding":{"left":"16px","right":"16px","top":"8px","bottom":"8px"}}},"patterns-store-pattern-button-type":"pattern-preview"} -->
<div class="wp-block-button"><button type="button" class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><?php esc_html_e( 'Live Preview', 'patterns-store-front' ); ?></button></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"spacing":{"padding":{"left":"16px","right":"16px","top":"8px","bottom":"8px"}}},"patterns-store-pattern-button-type":"parent-link"} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><?php esc_html_e( 'View Patterns Kits', 'patterns-store-front' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"tagName":"button","style":{"spacing":{"padding":{"left":"16px","right":"16px","top":"8px","bottom":"8px"}}},"patterns-store-pattern-button-type":"pattern-copy"} -->
<div class="wp-block-button"><button type="button" class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><?php esc_html_e( 'Copy', 'patterns-store-front' ); ?></button></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
