<?php
/**
 * Final Price Class
 *
 * This class is responsible for displaying the Final Price on the frontend.
 *
 * @package Final Price/Classes
 * @version 1.5
 */

// Direct access security
if ( ! defined( 'THEMECOMPLETE_FP_PLUGIN_SECURITY' ) ) {
	die();
}

final class THEMECOMPLETE_FINAL_PRICE {

	public $version = THEMECOMPLETE_FP_VERSION;
	private $_namespace = 'tc-final-price/';

	/**
	 * The single instance of the class
	 *
	 * @since 1.5
	 */
	protected static $_instance = NULL;

	/**
	 * Class Constructor
	 *
	 * @since 1.0
	 */
	public function __construct() {
		// Load scripts and styles
		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_scripts' ) );

		// Display in frontend
		add_action( 'woocommerce_before_add_to_cart_button', array( $this, 'frontend_display' ), 50 );
	}


	/**
	 * Main Final Price Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.5
	 * @static
	 * @see   THEMECOMPLETE_FINAL_PRICE()
	 * @return Final Price - Main instance
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Dummy function
	 *
	 * Used to initialize the plugin
	 *
	 * @since 1.5
	 */
	public function init() {
		return;
	}

	/**
	 * Get missing quantity range
	 *
	 * @access public
	 *
	 * @param int $from
	 * @param int $to
	 *
	 * @return array
	 */
	public static function get_missing_range( $from, $to ) {
		return array(
			'from'             => $from,
			'to'               => $to,
			'pricing_method'   => 'discount__amount',
			'pricing_value'    => 0,
			'is_missing_range' => TRUE,
		);
	}

	/**
	 * Add missing quantity ranges (gaps in continuity)
	 *
	 * @access public
	 *
	 * @param array  $quantity_ranges
	 * @param object $product
	 *
	 * @return array
	 */
	public static function add_missing_ranges( $quantity_ranges, $product ) {
		$fixed = array();

		// Check if product uses decimal quantities
		$decimal_quantities = RP_WCDPD_Settings::get( 'decimal_quantities' ) && RightPress_Helper::wc_product_uses_decimal_quantities( $product );

		// Get quantity step
		$quantity_step = $decimal_quantities ? RightPress_Helper::get_wc_product_quantity_step( $product ) : 1;

		$last_from = NULL;
		$last_to   = NULL;

		$count = count( $quantity_ranges );
		$i     = 1;

		foreach ( $quantity_ranges as $quantity_range ) {

			// Get from and to
			$from = $quantity_range['from'];
			$to   = $quantity_range['to'];

			// Maybe add first range
			if ( $last_from === NULL && $from > $quantity_step ) {
				$fixed[] = self::get_missing_range( $quantity_step, ( $from - $quantity_step ) );
			}

			// Gap between last to and current from
			if ( $last_to !== NULL && ( $from - $last_to ) > $quantity_step ) {
				$fixed[] = self::get_missing_range( ( $last_to + $quantity_step ), ( $from - $quantity_step ) );
			}

			// Add current range
			$fixed[] = $quantity_range;

			// Set last from and to
			$last_from = $from;
			$last_to   = $to;

			$i ++;
		}

		// Add closing range
		if ( $last_to !== NULL ) {
			$fixed[] = self::get_missing_range( ( $last_to + $quantity_step ), NULL );
		}

		return $fixed;
	}
	
	/**
	 * Display in frontend
	 *
	 * @since 1.0
	 */
	public function frontend_display() {

		global $product;

		// WooCommerce Dynamic Pricing & Discounts
		if ( class_exists( 'RP_WCDPD' ) ) {
			$check_price = $this->get_RP_WCDPD( NULL, $product );
			$price       = array();
			if ( $check_price ) {
				$price['product'] = array();
				if ( $check_price['is_multiprice'] ) {
					foreach ( $check_price['rules'] as $variation_id => $variation_rule ) {
						foreach ( $variation_rule as $rulekey => $pricerule ) {
							$price['product'][ $variation_id ][] = array(
								"min"        => $pricerule["min"],
								"max"        => $pricerule["max"],
								"value"      => ( $pricerule["type"] != "percentage" ) ? apply_filters( 'wc_tc_final_price_price', $pricerule["value"], "" ) : $pricerule["value"],
								"type"       => $pricerule["type"],
								'conditions' => isset( $pricerule["conditions"] ) ? $pricerule["conditions"] : array(),
							);
						}
					}
				} else {
					foreach ( $check_price['rules'] as $rulekey => $pricerule ) {
						$price['product'][0][] = array(
							"min"        => $pricerule["min"],
							"max"        => $pricerule["max"],
							"value"      => ( $pricerule["type"] != "percentage" ) ? apply_filters( 'wc_tc_final_price_price', $pricerule["value"], "" ) : $pricerule["value"],
							"type"       => $pricerule["type"],
							'conditions' => isset( $pricerule["conditions"] ) ? $pricerule["conditions"] : array(),
						);
					}
				}
			} else {

				$price['product'] = array();
			}

			$price['price'] = apply_filters( 'wc_tc_final_price_price', $product->get_price(), "" );

		} else {

			if ( class_exists( 'WC_Dynamic_Pricing' ) ) {
				$id = isset( $product->variation_id ) ? $product->variation_id : $product->id;
				$dp = WC_Dynamic_Pricing::instance();
				if ( $dp &&
				     is_object( $dp ) && property_exists( $dp, "discounted_products" )
				     && isset( $dp->discounted_products[ $id ] ) ) {
					$_price = $dp->discounted_products[ $id ];
				} else {
					$_price = $product->get_price();
				}

			} else {
				$_price = $product->get_price();
			}
			$price            = array();
			$price['product'] = array();
			$price['price']   = apply_filters( 'wc_tc_final_price_price', $_price, "" );
		}

		$variations = array();

		foreach ( $product->get_children() as $child_id ) {

			$variation = wc_get_product( $child_id );

			if ( ! $variation->exists() ) {
				continue;
			}

			$variations[ $child_id ] = $variation->get_price();

		}

		global $woocommerce;
		$cart     = $woocommerce->cart;
		$_tax     = new WC_Tax();
		$taxrates = $_tax->get_rates( $product->get_tax_class() );
		unset( $_tax );
		$tax_rate = 0;
		foreach ( $taxrates as $key => $value ) {
			$tax_rate = $tax_rate + floatval( $value['rate'] );
		}
		$taxable          = $product->is_taxable();
		$tax_display_mode = get_option( 'woocommerce_tax_display_shop' );
		$tax_string       = "";
		if ( $taxable ) {

			if ( $tax_display_mode == 'excl' ) {

				if ( $cart->tax_total > 0 && $cart->prices_include_tax ) {
					$tax_string = ' <small>' . WC()->countries->ex_tax_or_vat() . '</small>';
				}

			} else {

				if ( $cart->tax_total > 0 && ! $cart->prices_include_tax ) {
					$tax_string = ' <small>' . WC()->countries->inc_tax_or_vat() . '</small>';
				}

			}

		}

		wc_get_template(
			'totals.php',
			array(
				'variations'           => json_encode( (array) $variations ),
				'is_sold_individually' => $product->is_sold_individually(),
				'type'                 => themecomplete_get_product_type( $product ),
				'price'                => ( is_object( $product ) ? apply_filters( 'wc_tc_final_price', $price['price'], $product ) : '' ),
				'taxable'              => $taxable,
				'tax_display_mode'     => $tax_display_mode,
				'prices_include_tax'   => $cart->prices_include_tax,
				'tax_rate'             => $tax_rate,
				'tax_string'           => $tax_string,
				'product_price_rules'  => json_encode( (array) $price['product'] ),
			),
			$this->_namespace,
			THEMECOMPLETE_FP_TEMPLATE_PATH
		);

	}

	/**
	 * Load scripts and styles
	 *
	 * @since 1.0
	 */
	public function frontend_scripts() {

		// Enqueue styles
		wp_enqueue_style( 'themecomplete-final-price', THEMECOMPLETE_FP_PLUGIN_URL . '/assets/css/tc-final-price.css' );

		// Enqueue scripts
		wp_enqueue_script( 'themecomplete-final-price', THEMECOMPLETE_FP_PLUGIN_URL . '/assets/js/tc-final-price.js', array( 'jquery' ), $this->version, TRUE );

		$extra_fee = 0;
		$args      = array(
			'extra_fee'                    => apply_filters( 'wc_tc_final_price_extra_fee', esc_attr( $extra_fee ) ),
			'i18n_final_total'             => apply_filters( 'wc_tc_final_price_total_text', esc_html__( 'Total :', 'woocommerce-tm-final-price' ) ),
			'currency_format_num_decimals' => esc_attr( absint( get_option( 'woocommerce_price_num_decimals' ) ) ),
			'currency_format_symbol'       => esc_attr( get_woocommerce_currency_symbol() ),
			'currency_format_decimal_sep'  => esc_attr( stripslashes( get_option( 'woocommerce_price_decimal_sep' ) ) ),
			'currency_format_thousand_sep' => esc_attr( stripslashes( get_option( 'woocommerce_price_thousand_sep' ) ) ),
			'currency_format'              => esc_attr( str_replace( array( '%1$s', '%2$s' ), array(
				'%s',
				'%v'
			), get_woocommerce_price_format() ) )
		);

		wp_localize_script( 'themecomplete-final-price', 'TCFINALPRICEJS', $args );

	}

	/**
	 * Get WooCommerce Dynamic Pricing & Discounts price for options
	 * (modified from get version from Pricing class)
	 *
	 * @since 1.0
	 */
	private function get_RP_WCDPD_single( $field_price, $cart_item_key, $pricing = NULL, $force = FALSE ) {

		if ( ! $force ) {
			return $field_price;
		}

		$price          = $field_price;
		$original_price = $price;

		if ( ! $pricing ) {
			// This runs on versions >=2
			$product_pricing = RP_WCDPD_Settings::get( 'product_pricing' );
			$cart_item       = WC()->cart->cart_contents[ $cart_item_key ];

			if ( ! isset( $cart_item['rp_wcdpd_data'] ) ) {
				if (class_exists('RightPress_Product_Price_Cart') && method_exists('RightPress_Product_Price_Cart', 'get_cart_item_price_changes')){
					$price_changes = RightPress_Product_Price_Cart::get_cart_item_price_changes($cart_item_key);
					$initial_product_price = $price_changes['original_price'];
				} else {
					return $field_price;	
				}
			} else {
				$initial_product_price = $cart_item['rp_wcdpd_data']['initial_price'];
			}

			if ( (float) $initial_product_price > 0 ) {

				$product_price = $initial_product_price;
				if ( class_exists('RP_WCDPD_WC_Cart') and method_exists('RP_WCDPD_WC_Cart', 'get_cart_item_price_for_display')){
					$product_price = RP_WCDPD_WC_Cart::get_cart_item_price_for_display( $cart_item );	
				}
				else if ( class_exists('RightPress_Product_Price_Display') and method_exists('RightPress_Product_Price_Display', 'prepare_product_price_for_display')){
					$product_price = (float) RightPress_Product_Price_Display::prepare_product_price_for_display($cart_item['data'], NULL, TRUE);
				}

				$price         = ( $product_price / $initial_product_price ) * $price;
			}
		} else {
			if ( ! isset( $pricing->items[ $cart_item_key ] ) ) {
				return $field_price;
			}

			if ( in_array( $pricing->pricing_settings['apply_multiple'], array( 'all', 'first' ) ) ) {

				foreach ( $pricing->apply['global'] as $rule_key => $apply ) {
					if ( $deduction = $pricing->apply_rule_to_item( $rule_key, $apply, $cart_item_key, $pricing->items[ $cart_item_key ], FALSE, $price ) ) {

						if ( $apply['if_matched'] == 'other' && isset( $pricing->applied ) && isset( $pricing->applied['global'] ) ) {
							if ( count( $pricing->applied['global'] ) > 1 || ! isset( $pricing->applied['global'][ $rule_key ] ) ) {
								continue;
							}
						}

						$pricing->applied['global'][ $rule_key ] = 1;
						$price                                   = $price - $deduction;
					}
				}

			} elseif ( $pricing->pricing_settings['apply_multiple'] == 'biggest' ) {

				$price_deductions = array();

				foreach ( $pricing->apply['global'] as $rule_key => $apply ) {

					if ( $apply['if_matched'] == 'other' && isset( $pricing->applied ) && isset( $pricing->applied['global'] ) ) {
						if ( count( $pricing->applied['global'] ) > 1 || ! isset( $pricing->applied['global'][ $rule_key ] ) ) {
							continue;
						}
					}

					if ( $deduction = $pricing->apply_rule_to_item( $rule_key, $apply, $cart_item_key, $pricing->items[ $cart_item_key ], FALSE ) ) {
						$price_deductions[ $rule_key ] = $deduction;
					}
				}

				if ( ! empty( $price_deductions ) ) {
					$max_deduction                           = max( $price_deductions );
					$rule_key                                = array_search( $max_deduction, $price_deductions );
					$pricing->applied['global'][ $rule_key ] = 1;
					$price                                   = $price - $max_deduction;
				}

			}
		}

		// Make sure price is not negative
		// $price = ($price < 0) ? 0 : $price;

		if ( $price != $original_price ) {
			return $price;
		} else {
			return $field_price;
		}
	}

	/**
	 * Get WooCommerce Dynamic Pricing & Discounts price rules
	 *
	 * @since 1.0
	 */
	public function get_RP_WCDPD( $field_price = NULL, $product, $cart_item_key = NULL, $force = FALSE ) {
		$price = NULL;

		if ( class_exists( 'RP_WCDPD' ) && class_exists( 'RP_WCDPD_Pricing' ) ) {

			$tm_RP_WCDPD = RP_WCDPD::get_instance();

			$selected_rule = NULL;

			$dpd_version_compare  = version_compare( RP_WCDPD_VERSION, '1.0.13', '<' );
			$dpd_version_compare2 = version_compare( RP_WCDPD_VERSION, '2.0', '>=' );

			if ( $field_price !== NULL && $cart_item_key !== NULL ) {
				if ( $dpd_version_compare2 ) {
					return $this->get_RP_WCDPD_single( $field_price, $cart_item_key, NULL, $force );
				} else {
					return $this->get_RP_WCDPD_single( $field_price, $cart_item_key, $tm_RP_WCDPD->pricing, $force );
				}
			}

			// Iterate over pricing rules and use the first one that has this product in conditions (or does not have if condition "not in list")
			if ( ! $dpd_version_compare2 && isset( $tm_RP_WCDPD->opt['pricing']['sets'] )
			     && count( $tm_RP_WCDPD->opt['pricing']['sets'] )
			) {
				foreach ( $tm_RP_WCDPD->opt['pricing']['sets'] as $rule_key => $rule ) {
					if ( $rule['method'] == 'quantity' && $validated_rule = RP_WCDPD_Pricing::validate_rule( $rule ) ) {
						if ( $dpd_version_compare ) {
							if ( $validated_rule['selection_method'] == 'all' && $tm_RP_WCDPD->user_matches_rule( $validated_rule['user_method'], $validated_rule['roles'] ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'categories_include' && count( array_intersect( $tm_RP_WCDPD->get_product_categories( themecomplete_get_id( $product ) ), $validated_rule['categories'] ) ) > 0 && $tm_RP_WCDPD->user_matches_rule( $validated_rule['user_method'], $validated_rule['roles'] ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'categories_exclude' && count( array_intersect( $tm_RP_WCDPD->get_product_categories( themecomplete_get_id( $product ) ), $validated_rule['categories'] ) ) == 0 && $tm_RP_WCDPD->user_matches_rule( $validated_rule['user_method'], $validated_rule['roles'] ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'products_include' && in_array( themecomplete_get_id( $product ), $validated_rule['products'] ) && $tm_RP_WCDPD->user_matches_rule( $validated_rule['user_method'], $validated_rule['roles'] ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'products_exclude' && ! in_array( themecomplete_get_id( $product ), $validated_rule['products'] ) && $tm_RP_WCDPD->user_matches_rule( $validated_rule['user_method'], $validated_rule['roles'] ) ) {
								$selected_rule = $validated_rule;
								break;
							}
						} else {
							if ( $validated_rule['selection_method'] == 'all' && $tm_RP_WCDPD->user_matches_rule( $validated_rule ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'categories_include' && count( array_intersect( $tm_RP_WCDPD->get_product_categories( themecomplete_get_id( $product ) ), $validated_rule['categories'] ) ) > 0 && $tm_RP_WCDPD->user_matches_rule( $validated_rule ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'categories_exclude' && count( array_intersect( $tm_RP_WCDPD->get_product_categories( themecomplete_get_id( $product ) ), $validated_rule['categories'] ) ) == 0 && $tm_RP_WCDPD->user_matches_rule( $validated_rule ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'products_include' && in_array( themecomplete_get_id( $product ), $validated_rule['products'] ) && $tm_RP_WCDPD->user_matches_rule( $validated_rule ) ) {
								$selected_rule = $validated_rule;
								break;
							}
							if ( $validated_rule['selection_method'] == 'products_exclude' && ! in_array( themecomplete_get_id( $product ), $validated_rule['products'] ) && $tm_RP_WCDPD->user_matches_rule( $validated_rule ) ) {
								$selected_rule = $validated_rule;
								break;
							}
						}
					}
				}
			}

			if ( $dpd_version_compare2 ) {
				$price = array();

				$all_rules = array();
				if ( ! $product->is_type( 'variable' ) && ! $product->is_type( 'variation' ) ) {

					$price['is_multiprice'] = FALSE;

					$product_rules = RP_WCDPD_Product_Pricing::get_applicable_rules_for_product( $product, NULL, TRUE );

					if ( ! $product_rules ) {
						$product_rules = array();
					}
					$all_rules = array();
					foreach ( $product_rules as $k => $rule ) {
						$apply_this_rule = TRUE;
						if ( isset( $rule['group_products'] ) && is_array( $rule['group_products'] ) && isset( $rule['method'] ) && ( $rule['method'] == 'group_repeat' || $rule['method'] == 'group' ) ) {
							$this_product_id = themecomplete_get_id( $product );
							foreach ( $rule['group_products'] as $grouprule ) {
								if ( $grouprule['type'] == 'product__product' ) {
									$method_option = $grouprule['method_option'];
									$products      = $grouprule['products'];

									if ( $method_option == 'in_list' ) {
										if ( ! in_array( $this_product_id, $products ) ) {
											$apply_this_rule = FALSE;
											break;
										}
									}
								}
							}
						}
						if ( $apply_this_rule ) {
							$all_rules[] = array(
								'product' => $product,
								'rule'    => $rule,
							);
						}
					}

				} else {

					if ( $product->is_type( 'variation' ) ) {
						$product = RightPress_WC_Legacy::product_variation_get_parent( $product );
					}

					$variation_rules = array();
					foreach ( $product->get_available_variations() as $variation_data ) {
						$variation = wc_get_product( $variation_data['variation_id'] );

						$product_rules = RP_WCDPD_Product_Pricing::get_applicable_rules_for_product( $variation, NULL, TRUE );
						if ( ! $product_rules ) {
							$product_rules = array();
						}
						foreach ( $product_rules as $k => $rule ) {
							$variation_rules[ $variation_data['variation_id'] ][] = array(
								'product' => $variation,
								'rule'    => $rule,
							);
						}

					}

					$all_rules              = $variation_rules;
					$price['is_multiprice'] = TRUE;
				}
				$table_data = array();
				if ( ! $price['is_multiprice'] ) {
					foreach ( $all_rules as $single ) {
						$_product = $single['product'];
						$_rule    = $single['rule'];
						if ( ! $_rule ) {
							continue;
						}

						$original_price = $_product->get_price();
						if ( isset( $_rule['quantity_ranges'] ) ) {
							$quantity_ranges = $_rule['quantity_ranges'];
							if ( RP_WCDPD_Settings::get( 'promo_volume_pricing_table_missing_ranges' ) === 'display' ) {
								$quantity_ranges = $this->add_missing_ranges( $quantity_ranges, $_product );
							}

							foreach ( $quantity_ranges as $quantity_range ) {

								switch ( $quantity_range['pricing_method'] ) {
									case 'discount__percentage':
										$quantity_range['pricing_method'] = 'percentage';
										break;
									case 'discount__amount':
										$quantity_range['pricing_method'] = 'price';
										break;
									case 'fixed__price':
										$quantity_range['pricing_method'] = 'fixed';
										break;

									default:
										# code...
										break;
								}
								$table_data[] = array(
									'min'        => $quantity_range['from'],
									'max'        => $quantity_range['to'],
									'type'       => $quantity_range['pricing_method'],
									'value'      => $quantity_range['pricing_value'],
									'conditions' => isset( $_rule['conditions'] ) ? $_rule['conditions'] : array(),
								);

							}
						} else {
							if ( isset( $_rule['pricing_method'] ) && isset( $_rule['pricing_value'] ) ) {
								$table_data[] = array(
									'min'        => 1,
									'max'        => '',
									'type'       => $_rule['pricing_method'],
									'value'      => $_rule['pricing_value'],
									'conditions' => isset( $_rule['conditions'] ) ? $_rule['conditions'] : array(),
								);
							} elseif ( isset( $_rule['group_pricing_method'] ) && isset( $_rule['group_pricing_value'] ) ) {
								$table_data[] = array(
									'min'        => 1,
									'max'        => '',
									'type'       => $_rule['group_pricing_method'],
									'value'      => $_rule['group_pricing_value'],
									'conditions' => isset( $_rule['conditions'] ) ? $_rule['conditions'] : array(),
								);
							}

						}

					}
				} else {
					foreach ( $all_rules as $vid => $vidsingle ) {


						foreach ( $vidsingle as $single ) {

							$_product = $single['product'];
							$_rule    = $single['rule'];
							if ( ! $_rule ) {
								continue;
							}

							$original_price = $_product->get_price();
							if ( isset( $_rule['quantity_ranges'] ) ) {
								$quantity_ranges = $_rule['quantity_ranges'];
								if ( RP_WCDPD_Settings::get( 'promo_volume_pricing_table_missing_ranges' ) === 'display' ) {
									$quantity_ranges = $this->add_missing_ranges( $quantity_ranges, $_product );
								}

								foreach ( $quantity_ranges as $quantity_range ) {

									switch ( $quantity_range['pricing_method'] ) {
										case 'discount__percentage':
											$quantity_range['pricing_method'] = 'percentage';
											break;
										case 'discount__amount':
											$quantity_range['pricing_method'] = 'price';
											break;
										case 'fixed__price':
											$quantity_range['pricing_method'] = 'fixed';
											break;

										default:
											# code...
											break;
									}
									$table_data[ $vid ][] = array(
										'min'        => $quantity_range['from'],
										'max'        => $quantity_range['to'],
										'type'       => $quantity_range['pricing_method'],
										'value'      => $quantity_range['pricing_value'],
										'conditions' => isset( $_rule['conditions'] ) ? $_rule['conditions'] : array(),
									);

								}
							} else {
								if ( isset( $_rule['pricing_method'] ) && isset( $_rule['pricing_value'] ) ) {
									$table_data[ $vid ][] = array(
										'min'        => 1,
										'max'        => '',
										'type'       => $_rule['pricing_method'],
										'value'      => $_rule['pricing_value'],
										'conditions' => isset( $_rule['conditions'] ) ? $_rule['conditions'] : array(),
									);
								} elseif ( isset( $_rule['group_pricing_method'] ) && isset( $_rule['group_pricing_value'] ) ) {
									$table_data[ $vid ][] = array(
										'min'        => 1,
										'max'        => '',
										'type'       => $_rule['group_pricing_method'],
										'value'      => $_rule['group_pricing_value'],
										'conditions' => isset( $_rule['conditions'] ) ? $_rule['conditions'] : array(),
									);
								}

							}
						}

					}
				}

				$price['rules'] = $table_data;

			} elseif ( is_array( $selected_rule ) ) {

				// Quantity
				if ( $selected_rule['method'] == 'quantity' && isset( $selected_rule['pricing'] ) && in_array( $selected_rule['quantities_based_on'], array( 'exclusive_product', 'exclusive_variation', 'exclusive_configuration' ) ) ) {

					if ( themecomplete_get_product_type( $product ) == 'variable' || themecomplete_get_product_type( $product ) == 'variable-subscription' ) {
						$product_variations = $product->get_available_variations();
					}

					// For variable products only - check if prices differ for different variations
					$multiprice_variable_product = FALSE;

					if ( ( themecomplete_get_product_type( $product ) == 'variable' || themecomplete_get_product_type( $product ) == 'variable' ) && ! empty( $product_variations ) ) {
						$last_product_variation = array_slice( $product_variations, - 1 );
						if ( class_exists( 'RightPress_WC_Legacy' ) && class_exists( 'RightPress_Helper' ) ) {
							$last_product_variation_object = RightPress_Helper::wc_get_product( $last_product_variation[0]['variation_id'] );
						} else {
							$last_product_variation_object = new WC_Product_Variable( $last_product_variation[0]['variation_id'] );
						}
						$last_product_variation_price = $last_product_variation_object->get_price();

						foreach ( $product_variations as $variation ) {
							if ( class_exists( 'RightPress_WC_Legacy' ) && class_exists( 'RightPress_Helper' ) ) {
								$variation_object = RightPress_Helper::wc_get_product( $variation['variation_id'] );
							} else {
								$variation_object = new WC_Product_Variable( $variation['variation_id'] );
							}

							if ( $variation_object->get_price() != $last_product_variation_price ) {
								$multiprice_variable_product = TRUE;
								break;
							}
						}
					}

					if ( $multiprice_variable_product ) {
						$variation_table_data = array();

						foreach ( $product_variations as $variation ) {
							if ( class_exists( 'RightPress_WC_Legacy' ) && class_exists( 'RightPress_Helper' ) ) {
								$variation_product = RightPress_Helper::wc_get_product( $variation['variation_id'] );
							} else {
								$variation_product = new WC_Product_Variation( $variation['variation_id'] );
							}
							$variation_table_data[ $variation['variation_id'] ] = $tm_RP_WCDPD->pricing_table_calculate_adjusted_prices( $selected_rule['pricing'], $variation_product->get_price() );
						}
						$price                  = array();
						$price['is_multiprice'] = TRUE;
						$price['rules']         = $variation_table_data;
					} else {
						if ( themecomplete_get_product_type( $product ) == 'variable' && ! empty( $product_variations ) ) {
							if ( class_exists( 'RightPress_WC_Legacy' ) && class_exists( 'RightPress_Helper' ) ) {
								$variation_product = RightPress_Helper::wc_get_product( $last_product_variation[0]['variation_id'] );
							} else {
								$variation_product = new WC_Product_Variation( $last_product_variation[0]['variation_id'] );
							}
							$table_data = $tm_RP_WCDPD->pricing_table_calculate_adjusted_prices( $selected_rule['pricing'], $variation_product->get_price() );
						} else {
							$table_data = $tm_RP_WCDPD->pricing_table_calculate_adjusted_prices( $selected_rule['pricing'], $product->get_price() );
						}
						$price                  = array();
						$price['is_multiprice'] = FALSE;
						$price['rules']         = $table_data;
					}
				}

			}
		}
		if ( $field_price !== NULL ) {
			$price = $field_price;
		}

		return $price;
	}

}
