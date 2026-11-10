<?php
/**
 * Plugin Name: WooCommerce Final Price
 * Plugin URI: https://finalprice.themecomplete.com/
 * Description: A WooCommerce plugin to display Final price x quantity on product page
 * Author: themeComplete
 * Author URI: https://themecomplete.com/
 *
 * Version: 1.8.5
 *
 * Requires at least: 3.0
 * Tested up to: 6.0
 *
 * WC requires at least: 2.2
 * WC tested up to: 6.0
 *
 * @package  WooCommerce Final Price
 * @category Core
 * @author   themecomplete
 */

// Prevents direct file access
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'THEMECOMPLETE_FP_PLUGIN_SECURITY', 1 );
define( 'THEMECOMPLETE_FP_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'THEMECOMPLETE_FP_TEMPLATE_PATH', THEMECOMPLETE_FP_PLUGIN_PATH . '/templates/' );
define( 'THEMECOMPLETE_FP_PLUGIN_URL', untrailingslashit( plugins_url( '/', __FILE__ ) ) );
define( 'THEMECOMPLETE_FP_VERSION', "1.8.2" );

require_once( 'woocommerce-tc-final-price-functions.php' );

// Register autoloader
spl_autoload_register( 'themecomplete_fp_autoload' );

// Load textdomain
add_action( 'plugins_loaded', 'themecomplete_fp_load_textdomain' );

// Load main plugin interface
add_action( 'plugins_loaded', 'themecomplete_fp_init' );
