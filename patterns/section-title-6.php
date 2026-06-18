<?php
/**
 * Title: Section Title 6
 * Slug: patterns-store-front/section-title-6
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in dark feature areas.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Explore More Features', 'patterns-store-front' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
