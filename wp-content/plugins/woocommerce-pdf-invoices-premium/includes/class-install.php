<?php
/**
 * Installation class that checks if correct versions are installed.
 *
 * @author      Bas Elbers
 * @category    Class
 * @package     BE_WooCommerce_PDF_Invoices_Premium/Class
 * @version     0.0.1
 */

/**
 * Class BEWPIP_Install.
 */
class BEWPIP_Install {
	/**
	 * Required plugin to install.
	 *
	 * @var string.
	 */
	private static $required_plugin_name;

	/**
	 * Check for active Invoices for WooCommerce plugin and correct version and add admin notices if needed.
	 *
	 * @return bool
	 */
	public static function plugin_activation() {
		if ( ! class_exists( 'WooCommerce' ) ) {

			if ( is_admin() ) {
				self::$required_plugin_name = 'WooCommerce';
				add_action( 'admin_notices', array( __CLASS__, 'admin_activate_notice' ) );
			}

			return false;
		}

		if ( ! class_exists( 'BE_WooCommerce_PDF_Invoices' ) ) {

			if ( is_admin() ) {
				self::$required_plugin_name = 'Invoices for WooCommerce';
				add_action( 'admin_notices', array( __CLASS__, 'admin_activate_notice' ) );
			}

			return false;
		}

		if ( ! self::check_version() ) {

			if ( is_admin() ) {
				add_action( 'admin_notices', array( __CLASS__, 'admin_version_notice' ) );
			}

			return false;
		}

		return true;
	}

	/**
	 * Plugin deactivation callback.
	 */
	public static function plugin_deactivation() {
		if ( version_compare( BEWPIP_VERSION, '1.6.0', '<' ) && wp_get_schedule( 'daily_invoice_event' ) ) {
			wp_clear_scheduled_hook( 'daily_invoice_event' );
		}

		if ( wp_get_schedule( 'wpi_scheduled_reminder' ) ) {
			wp_clear_scheduled_hook( 'wpi_scheduled_reminder' );
		}

		// Reset columns and totals.
		$options = get_option( 'bewpi_template_settings' );
		unset( $options['bewpi_columns'] );
		unset( $options['bewpi_totals'] );
		update_option( 'bewpi_template_settings', $options );
	}

	/**
	 * Check minimum required version of Invoices for WooCommerce with current installed version.
	 *
	 * @return bool
	 */
	private static function check_version() {
		return version_compare( WPI_VERSION, MINIMUM_REQUIRED_VERSION, '>=' );
	}

	/**
	 * Prints a notice when Invoices for WooCommerce is not installed/activated.
	 */
	public static function admin_activate_notice() {
		printf( '<div class="error"><p>' );
		printf( __( '%1$s requires %2$s to be activated. Install and activate it and you should be good to go! :)', 'woocommerce-pdf-invoices' ), '<strong>Invoices for WooCommerce Premium</strong>', '<strong>' . self::$required_plugin_name . '</strong>' );
		printf( '</p></div>' );
	}

	/**
	 * Prints a notice when Invoices for WooCommerce plugin needs to be updated.
	 */
	public static function admin_version_notice() {
		printf( '<div class="error"><p>' );
		printf( __( '%1$s requires at least %2$s. Update it and get the best out of both plugins. :)', 'woocommerce-pdf-invoices' ), '<strong>Invoices for WooCommerce Premium</strong>', '<strong>Invoices for WooCommerce</strong> ' . MINIMUM_REQUIRED_VERSION );
		printf( '</p></div>' );
	}
}
