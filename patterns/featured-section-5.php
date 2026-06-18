<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-store-front/featured-section-5
 * Categories: services, columns, text, featured
 * Description: A layout with an image and two columns of text on the left side, and accordions on the right side.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"gradient":"secondary-fade-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-fade-1-gradient-background has-background" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0px"}}} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:5px;">
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"},"shadow":"var:preset|shadow|deep"}} -->
	<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/featured-img-2.jpg" style="border-radius:5px;box-shadow:var(--wp--preset--shadow--deep)"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
	<!-- wp:pattern {"slug":"patterns-store-front/card-4"} /-->
	</div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large"} -->
<p class="has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( '16k+', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Contrary to popular', 'patterns-store-front' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);flex-basis:60%">
		<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
	<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->    

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-right:0px;padding-left:0px">  <!-- wp:heading {"className":"has-x-large-font-size","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size has-base-color has-text-color"
			style="font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'We Are Dedicated to Shape Perfect Solutions', 'patterns-store-front' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"accent","fontSize":"small"} -->
	<p class="has-accent-color has-text-color has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', 'patterns-store-front' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->  

	</div>
	<!-- /wp:group -->

	
	<!-- wp:pattern {"slug":"patterns-store-front/details-1"} /-->
	
	<!-- wp:details {"summary":"Global search engine optimization","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"default","textColor":"base","className":"at-accordion at-bdr-rad","fontSize":"medium"} -->
	<details class="wp-block-details at-accordion at-bdr-rad has-base-color has-default-background-color has-text-color has-background  has-medium-font-size" style="margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30);font-style:normal;font-weight:600"><summary><?php esc_html_e( 'Global search engine optimization', 'patterns-store-front' ); ?></summary><!-- wp:separator {"backgroundColor":"accent","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"accent","fontSize":"small"} -->
	<p class="has-accent-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', 'patterns-store-front' ); ?> </p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
