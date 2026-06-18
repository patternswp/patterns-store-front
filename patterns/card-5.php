<?php
/**
 * Title: Card 5
 * Slug: patterns-store-front/card-5
 * Categories: featured
 * Description: A layout featuring an circular design text, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"className":"at-box-sdw","style":{"border":{"radius":"5px"},"spacing":{"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group at-box-sdw has-default-background-color has-background" style="border-radius:5px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-ui-check-grid.png" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Quality Gurantee', 'patterns-store-front' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
