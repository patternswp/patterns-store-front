<?php
/**
 * Title: Card 4
 * Slug: patterns-store-front/card-4
 * Categories: featured
 * Description: A layout featuring an circular design text, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large"} -->
<p class="has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( '10M+', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:1.5"><?php esc_html_e( 'Contrary to popular', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
