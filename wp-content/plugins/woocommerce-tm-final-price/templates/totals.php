<?php
/**
 * Totals box template
 *
 * This template is responsible for displaying the totals box on the product
 *
 * @package Final Price/Templates
 * @version 1.5
 */

// Direct access security
if ( ! defined( 'THEMECOMPLETE_FP_PLUGIN_SECURITY' ) ) {
	die();
}
?>
<div id="tc-final-price-total" class="tc-final-price-total" 
data-is-sold-individually="<?php echo esc_attr($is_sold_individually); ?>" 
data-type="<?php echo esc_attr($type); ?>" 
data-price="<?php echo esc_attr($price); ?>" 
data-product-price-rules="<?php echo esc_attr($product_price_rules); ?>" 
data-taxable="<?php echo esc_attr($taxable); ?>" 
data-tax-rate="<?php echo esc_attr($tax_rate); ?>" 
data-tax-string="<?php echo esc_attr($tax_string); ?>" 
data-tax-display-mode="<?php echo esc_attr($tax_display_mode); ?>" 
data-prices-include-tax="<?php echo esc_attr($prices_include_tax); ?>" <?php
if ( class_exists( 'RP_WCDPD' ) ) {
	global $product;
	$attributes_to_id = array();
	if ( $product && themecomplete_get_product_type( $product ) == 'variable' ) {

		$attributes_ids = $product->get_attributes();

		$pid = themecomplete_get_id( $product );

		foreach ( $attributes_ids as $attkey => $attvalue ) {

			$terms = wp_get_post_terms( $pid, $attkey, array( 'fields' => 'all' ) );
			if ( ! is_wp_error( $terms ) ) {
				foreach ( $terms as $term ) {
					if ( $term ) {
						$attributes_to_id[ 'attribute_' . $attkey ][ $term->slug ] = $term->term_id;
					}
				}
			}

		}
	}
	echo 'data-tm-epo-dpd-attributes-to-id="' . esc_attr( json_encode( (array) $attributes_to_id ) ) . '" ';
}
?> data-variations="<?php echo esc_attr($variations); ?>"></div>