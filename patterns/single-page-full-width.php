<?php
/**
 * Title: Page Full Width
 * Slug: patterns-store-front/single-page-full-width
 * Template Types: singular, page
 * Description: A full-width layout template for displaying a page without sidebars.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"single-header", "align":"full"} /-->
	<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
	<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->    
	<!-- wp:post-content {"align":"wide","className":"pwp-child-reset ","layout":{"type":"constrained"}} /-->
	<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
	<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->    
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
