<?php
/**
 * Bulk Print class.
 *
 * Adds a bulk action to the WooCommerce actions selectlist.
 *
 * @author      Bas Elbers
 * @category    Class
 * @package     BE_WooCommerce_PDF_Invoices/Class
 * @version     1.0.0
 */

/**
 * Class BEWPIP_Bulk_Export.
 */
class BEWPIP_Bulk_Print {
	/**
	 * Initialize hooks.
	 */
	public static function init_hooks() {
		add_action( 'admin_footer-edit.php', array( __CLASS__, 'register_bulk_actions' ), 11 );
		add_action( 'load-edit.php', array( __CLASS__, 'bulk_action_handler' ), 11 );
	}

	/**
	 * Adds bulk export actions to export PDF documents to zip file.
	 */
	public static function register_bulk_actions() {
		global $post_type;

		if ( 'shop_order' === $post_type ) {
			?>
			<script type="text/javascript">
				jQuery(document).ready(function ($) {
					$('<option>').val('bulk_print_pdf_invoices').text('<?php _e( 'Bulk Print PDF Invoices', 'woocommerce-pdf-invoices' )?>').appendTo("select[name='action'], select[name='action2']");

					<?php if ( false === (bool) WPI()->get_option( 'template', 'disable_packing_slips' ) ) { ?>
						$('<option>').val('bulk_print_pdf_packing_slips').text('<?php _e( 'Bulk Print PDF Packing Slips', 'woocommerce-pdf-invoices' )?>').appendTo("select[name='action'], select[name='action2']");
					<?php } ?>
				});
			</script>
			<?php
		}
	}

	/**
	 * Merge files.
	 *
	 * @param mPDF  $mpdf  Object.
	 * @param array $files File paths.
	 *
	 * @return mPDF
	 */
	private static function merge( $mpdf, $files ) {
		$mpdf->SetImportUse();

		foreach ( $files as $full_path ) {
			$page_count = $mpdf->setSourceFile( $full_path );
			for ( $i = 1; $i <= $page_count; $i ++ ) {
				$mpdf->AddPage( '', '', 1, '', '', '', '', '', '', '', '', '', '', '', '', - 1, 0, - 1, 0 );
				$template_id = $mpdf->importPage( $i );
				$mpdf->useTemplate( $template_id );
			}
		}

		return $mpdf;
	}

	/**
	 * Callback to bulk print selected pdf packing slips.
	 *
	 * @param array $post_ids Post IDs.
	 */
	public static function bulk_print_pdf_packing_slips( $post_ids ) {
		$files = array();
		foreach ( $post_ids as $post_id ) {
			$packing_slip = new BEWPI_Packing_Slip( $post_id );
			$files[]      = $packing_slip->generate();
		}

		$mpdf = new mPDF();
		$mpdf = self::merge( $mpdf, $files );

		$filename  = apply_filters( 'wpi_merged_pdf_packing_slips_filename', date_i18n( 'Y-m-d-His' ) . '.pdf' );
		$full_path = WPI_ATTACHMENTS_DIR . '/' . $filename;

		$mpdf->Output( $full_path, 'F' );

		BEWPI_Abstract_Document::view( $full_path );
	}

	/**
	 * Callback to bulk print selected pdf invoices.
	 *
	 * @param array $post_ids Post IDs.
	 */
	public static function bulk_print_pdf_invoices( $post_ids ) {
		$files         = array();
		$order_numbers = array();
		foreach ( $post_ids as $post_id ) {
			$full_path = BEWPI_Invoice::exists( $post_id );
			if ( false === $full_path ) {
				$order           = wc_get_order( $post_id );
				$order_numbers[] = $order->get_order_number();

				continue;
			}

			$files[] = $full_path;
		}

		if ( count( $order_numbers ) > 0 ) {
			wp_die( sprintf( __( 'Orders #%s do not contain an invoice.', 'woocommerce-pdf-invoices' ), join( ', #', $order_numbers ) ), '', array(
				'response'  => 200,
				'back_link' => true,
			) );
		}

		$mpdf = new mPDF();
		$mpdf = self::merge( $mpdf, $files );

		$filename  = apply_filters( 'wpi_merged_pdf_invoices_filename', date_i18n( 'Y-m-d-His' ) . '.pdf' );
		$full_path = WPI_ATTACHMENTS_DIR . '/' . $filename;

		$mpdf->Output( $full_path, 'F' );

		BEWPI_Abstract_Document::view( $full_path );
	}

	/**
	 * Callback to bulk print.
	 */
	public static function bulk_action_handler() {
		global $typenow;
		$post_type = $typenow;

		// Are we on order page?
		if ( 'shop_order' !== $post_type ) {
			return;
		}

		$wp_list_table = _get_list_table( 'WP_Posts_List_Table' );
		$action        = $wp_list_table->current_action();
		if ( false === in_array( $action, array( 'bulk_print_pdf_packing_slips', 'bulk_print_pdf_invoices' ), true ) ) {
			return;
		}

		// Security check.
		check_admin_referer( 'bulk-posts' );

		$post_ids = array();
		if ( isset( $_REQUEST['post'] ) ) {
			$post_ids = array_map( 'intval', $_REQUEST['post'] );
		}

		if ( count( $post_ids ) === 0 ) {
			wp_die( __( 'No order selected.', 'woocommerce-pdf-invoices' ), '', array( 'response'  => 200 ) );
		}

		sort( $post_ids );

		switch ( $action ) {
			case 'bulk_print_pdf_packing_slips':
				self::bulk_print_pdf_packing_slips( $post_ids );
				break;
			case 'bulk_print_pdf_invoices':
				self::bulk_print_pdf_invoices( $post_ids );
				break;
		}
	}
}
