<?php
/**
 * Final Price Functions
 *
 * @package Final Price/Functions
 * @version 1.5
 */

// Direct access security
if ( ! defined( 'THEMECOMPLETE_FP_PLUGIN_SECURITY' ) ) {
	die();
}

/**
 * Auto-load classes on demand
 *
 * @since  1.4.5
 *
 * @param string $class Class name.
 */
function themecomplete_fp_autoload( $class ) {

	$path           = NULL;
	$original_class = $class;
	$class          = strtolower( $class );
	$class          = str_replace( 'themecomplete', 'tc', $class );
	$file           = 'class-' . str_replace( '_', '-', $class ) . '.php';

	if ( strpos( $class, 'tc_final_price' ) === 0 ) {
		$path = THEMECOMPLETE_FP_PLUGIN_PATH . '/';
	}

	$path = apply_filters( 'wc_final_price_autoload_path', $path, $original_class );
	$file = apply_filters( 'wc_final_price_autoload_file', $file, $original_class );


	if ( defined( 'RP_WCDPD_VERSION' ) && version_compare( RP_WCDPD_VERSION, '1.0.13', '<' ) && $original_class == "RP_WCDPD_Pricing" && defined( 'TM_EPO_INCLUDED' ) && defined( 'RP_WCDPD_PLUGIN_PATH' ) ) {
		$path = RP_WCDPD_PLUGIN_PATH . 'includes/classes/';
		$file = 'Pricing.php';
	}

	if ( $path && is_readable( $path . $file ) ) {
		include_once( $path . $file );

		return;
	}

}

/**
 * Load plugin textdomain
 *
 * @since  1.0
 */
function themecomplete_fp_load_textdomain() {
	load_plugin_textdomain( 'woocommerce-tm-final-price', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

/**
 * Main instance of Final Price.
 *
 * Returns the main instance of WC to prevent the need to use globals.
 *
 * @since  1.5
 * @return THEMECOMPLETE_FINAL_PRICE
 */
function THEMECOMPLETE_FINAL_PRICE() {
	return THEMECOMPLETE_FINAL_PRICE::instance();
}

/**
 * Init plugin
 *
 * @since  1.4.7
 */
function themecomplete_fp_init() {

	if ( themecomplete_woocommerce_check() ) {

		// Don't load the plugin if Extra Product Options is actve
		if ( ! class_exists( 'TM_Extra_Product_Options' ) && ! class_exists( 'TC_Extra_Product_Options' ) ) {
			THEMECOMPLETE_FINAL_PRICE()->init();
		}

	}

}

if ( ! function_exists( 'themecomplete_woocommerce_check' ) ) {

	/**
	 * Check if WooCommerce is active
	 *
	 * @since  1.4.6
	 * @return Bool
	 */

	function themecomplete_woocommerce_check() {
		$active_plugins = (array) get_option( 'active_plugins', array() );
		if ( is_multisite() ) {
			$active_plugins = array_merge( $active_plugins, get_site_option( 'active_sitewide_plugins', array() ) );
		}

		return in_array( 'woocommerce/woocommerce.php', $active_plugins ) || array_key_exists( 'woocommerce/woocommerce.php', $active_plugins );
	}
}

if ( ! function_exists( 'themecomplete_get_product_type' ) ) {
	/**
	 * Get product type
	 *
	 * @since  1.4.6
	 *
	 * @param null $product
	 *
	 * @return bool
	 */
	function themecomplete_get_product_type( $product = NULL ) {
		if ( is_object( $product ) ) {
			if ( is_callable( array( $product, 'get_type' ) ) ) {
				return $product->get_type();
			} else {
				return $product->product_type;
			}
		}

		return FALSE;
	}
}

if ( ! function_exists( 'themecomplete_get_id' ) ) {
	/**
	 * Get product id
	 *
	 * @since  1.4.6
	 *
	 * @param $product
	 *
	 * @return mixed
	 */
	function themecomplete_get_id( $product ) {
		if ( is_callable( array( $product, 'get_id' ) ) && is_callable( array( $product, 'get_parent_id' ) ) ) {
			if ( themecomplete_get_product_type( $product ) == "variation" ) {
				return $product->get_parent_id();
			}

			return $product->get_id();
		}
		if ( is_object( $product ) ) {
			return $product->id;
		}

		return 0;
	}
}
