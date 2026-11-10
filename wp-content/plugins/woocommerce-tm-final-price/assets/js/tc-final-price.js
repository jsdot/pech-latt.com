/*
 * Formatting functions
 *
 * Code modifiled from accounting.js
 * http://openexchangerates.github.io/accounting.js/
 */

( function( $ ) {
	'use strict';

	/**
     * Check and normalise the value of precision (must be positive integer)
     */
	function checkPrecision( val, base ) {
		val = Math.round( Math.abs( val ) );
		return isNaN( val ) ? base : val;
	}

	/**
     * Takes a string/array of strings, removes all formatting/cruft and returns the raw float value
     */
	function unformat( value, decimal ) {
		var regex;
		var unformatted;

		// Recursively unformat arrays:
		if ( Array.isArray( value ) ) {
			return value.map( value, function( val ) {
				return unformat( val, decimal );
			} );
		}

		// Fails silently (need decent errors):
		value = value || 0;

		// Return the value as-is if it's already a number:
		if ( typeof value === 'number' ) {
			return value;
		}

		// Default decimal point comes from settings, but could be set to eg. "," in opts:
		decimal = decimal || '.';

		// Build regex to strip out everything except digits, decimal point and minus sign:
		regex = new RegExp( '[^0-9-' + decimal + ']', [ 'g' ] );
		unformatted = parseFloat(
			( '' + value )
				.replace( /\((?=\d+)(.*)\)/, '-$1' ) // replace bracketed values with negatives
				.replace( regex, '' ) // strip out any cruft
				.replace( decimal, '.' ) // make sure decimal point is standard
		);

		// This will fail silently which may cause trouble, let's wait and see:
		return ! isNaN( unformatted ) ? unformatted : 0;
	}

	/**
     * Implementation of toFixed() that treats floats more like decimals
     *
     * Fixes binary rounding issues (eg. (0.615).toFixed(2) === "0.61") that present
     * problems for accounting- and finance-related software.
     */
	function toFixed( value, precision ) {
		var exponentialForm;
		var rounded;
		var finalResult;

		precision = checkPrecision( precision, 2 );

		exponentialForm = Number( unformat( value ) + 'e' + precision );
		rounded = Math.round( exponentialForm );
		finalResult = Number( rounded + 'e-' + precision ).toFixed( precision );
		return finalResult;
	}

	/**
     * Format into currency or a number, with comma-separated thousands and custom precision/decimal places
     *
     * opts = {
     *     symbol: "$",    // currency symbol is '$'
     *     format: "%s%v", // controls output: %s = symbol, %v = value (can be object, see docs)
     *     decimal: ".",   // decimal point separator
     *     thousand: ",",  // thousands separator
     *     precision: 2,   // decimal places
     * }
     *
     */
	function format( number, opts ) {
		var formats;
		var useFormat;
		var negative;
		var base;
		var mod;

		// Resursively format arrays:
		if ( Array.isArray( number ) ) {
			return number.map( number, function( val ) {
				return format( val, opts );
			} );
		}

		// Clean up number:
		number = unformat( number );

		// Do not format if opts are not correct or missing
		if ( ! opts ) {
			return number;
		}

		// Clean up precision
		opts.precision = checkPrecision( opts.precision );

		// Format currency
		if ( opts.format && opts.symbol ) {
			// Check format (returns object with pos, neg and zero):
			formats = {
				pos: opts.format,
				neg: opts.format.replace( '-', '' ).replace( '%v', '-%v' ),
				zero: opts.format
			};

			// Choose which format to use for this value:
			useFormat = number > 0 ? formats.pos : number < 0 ? formats.neg : formats.zero;

			// Return with currency symbol added:
			opts.opts = {
				precision: opts.precision,
				thousand: opts.thousand,
				decimal: opts.decimal
			};
			number = useFormat.replace( '%s', opts.symbol ).replace( '%v', format( Math.abs( number ), opts.opts ) );

			// Format number
		} else {
			// Do some calc:
			negative = number < 0 ? '-' : '';
			base = parseInt( toFixed( Math.abs( number || 0 ), opts.precision ), 10 ) + '';
			mod = base.length > 3 ? base.length % 3 : 0;

			// Format the number:
			number = negative + ( mod ? base.substr( 0, mod ) + opts.thousand : '' ) + base.substr( mod ).replace( /(\d{3})(?=\d)/g, '$1' + opts.thousand ) + ( opts.precision ? opts.decimal + toFixed( Math.abs( number ), opts.precision ).split( '.' )[ 1 ] : '' );
		}

		return number;
	}

	$.fpAPI = {
		math: {
			unformat: unformat,
			format: format
		}
	};
}( window.jQuery ) );

( function( window, document, $ ) {
	'use strict';

	var TCFINALPRICEJS = window.TCFINALPRICEJS || null;

	if ( ! TCFINALPRICEJS ) {
		return;
	}

	/**
     * Return a formatted currency value
     *
     * @since  1.0
     * @return String
     */
	function setPrice( value ) {
		return $.fpAPI.math.format( value, {
			symbol: TCFINALPRICEJS.currency_format_symbol,
			decimal: TCFINALPRICEJS.currency_format_decimal_sep,
			thousand: TCFINALPRICEJS.currency_format_thousand_sep,
			precision: TCFINALPRICEJS.currency_format_num_decimals,
			format: TCFINALPRICEJS.currency_format
		} );
	}

	/**
     * Rounds a number
     * modified from http://locutus.io/php/math/round/
     *
     * @since  1.0
     * @return String
     */
	function tc_round( value, precision, mode ) {
		var m;
		var f;
		var isHalf;
		var n;
		var sgn; // helper variables
		// making sure precision is integer
		precision = parseInt( precision, 10 );
		if ( ! Number.isFinite( precision ) ) {
			precision = 0;
		}
		m = Math.pow( 10, precision );
		value = value * m;
		// sign of the number
		if ( typeof value === 'number' ) {
			if ( value ) {
				if ( value < 0 ) {
					sgn = -1;
				} else {
					sgn = 1;
				}
			} else {
				sgn = 0;
			}
		} else {
			sgn = 0;
		}
		isHalf = value % 1 === 0.5 * sgn;
		f = Math.floor( value );

		if ( isHalf ) {
			switch ( mode ) {
				case 'PHP_ROUND_HALF_DOWN':
					// rounds .5 toward zero
					if ( sgn < 0 ) {
						n = 1;
					} else {
						n = 0;
					}
					value = f + n;
					break;
				case 'PHP_ROUND_HALF_EVEN':
					// rouds .5 towards the next even integer
					value = f + ( f % 2 * sgn );
					break;
				case 'PHP_ROUND_HALF_ODD':
					// rounds .5 towards the next odd integer
					n = f % 2;
					if ( n ) {
						n = 0;
					} else {
						n = 1;
					}
					value = f + n;
					break;
				default:
					// rounds .5 away from zero
					if ( sgn > 0 ) {
						n = 1;
					} else {
						n = 0;
					}
					value = f + n;
			}
		}

		if ( ! isHalf ) {
			value = Math.round( value );
		}

		return value / m;
	}

	function multFloats( a, b ) {
		var atens = Math.pow( 10, String( a ).length - String( a ).indexOf( '.' ) - 1 );
		var btens = Math.pow( 10, String( b ).length - String( b ).indexOf( '.' ) - 1 );
		return ( a * atens ) * ( b * btens ) / ( atens * btens );
	}

	function getChosenAttributes( form ) {
		var attributeFields = form.find( '.variations select' );
		var data = {};
		var count = 0;
		var chosen = 0;

		attributeFields.each( function() {
			var field = $( this );
			var attribute_name = field.data( 'attribute_name' ) || field.attr( 'name' );
			var value = field.val() || '';

			if ( value.length > 0 ) {
				chosen = chosen + 1;
			}

			count = count + 1;
			data[ attribute_name ] = value;
		} );

		return {
			count: count,
			chosenCount: chosen,
			data: data
		};
	}

	function getDiscountObj( totalsHolder, mainCart, rules, current_variation, cv, qty, force ) {
		var discount = [ false, false ];
		$( rules[ current_variation ] ).each( function( id, rule ) {
			var min = parseFloat( rule.min );
			var max = parseFloat( rule.max );
			var type = rule.type;
			var value = parseFloat( rule.value );
			var found = true;
			var att_ids;
			var chosen_atts;
			var c;
			var product_attributes;

			if ( id !== undefined && rule.conditions ) {
				$( rule.conditions ).each( function( cid, condition ) {
					if ( cid !== undefined && condition.type === 'product__attributes' ) {
						att_ids = totalsHolder.data( 'tm-epo-dpd-attributes-to-id' );
						chosen_atts = getChosenAttributes( mainCart );
						c = [];
						product_attributes = condition.product_attributes;

						Object.keys( chosen_atts.data ).forEach( function( item ) {
							if ( item ) {
								c[ c.length ] = att_ids[ item ][ chosen_atts.data[ item ] ].toString();
							}
						} );

						product_attributes = product_attributes.map( function( item ) {
							return item.toString();
						} );
						c = c.map( function( item ) {
							return item.toString();
						} );

						if ( condition.method_option === 'at_least_one' ) {
							found = product_attributes.some( function( item ) {
								return $.inArray( item.toString(), c ) !== -1;
							} );
						} else if ( condition.method_option === 'all' ) {
							found = product_attributes.every( function( item ) {
								return $.inArray( item.toString(), c ) !== -1;
							} );
						} else if ( condition.method_option === 'only' ) {
							found = product_attributes.every( function( item ) {
								return $.inArray( item.toString(), c ) !== -1;
							} ) && c.every( function( item ) {
								return $.inArray( item.toString(), product_attributes ) !== -1;
							} );
						} else if ( condition.method_option === 'none' ) {
							found = ! product_attributes.some( function( item ) {
								return $.inArray( item.toString(), c ) !== -1;
							} );
						}
					}
					if ( condition.type === 'product__variation' ) {
						if ( condition.method_option === 'in_list' ) {
							if ( $.inArray( cv.toString(), condition.product_variations ) !== -1 ) {
								found = true;
							} else {
								found = false;
							}
						} else if ( $.inArray( cv.toString(), condition.product_variations ) === -1 ) {
							found = true;
						} else {
							found = false;
						}
					}
				} );
			}
			if ( ! found ) {
				return true;
			}
			if ( force || ( ! Number.isFinite( max ) && min <= qty ) || ( Number.isFinite( max ) && min <= qty && qty <= max ) ) {
				discount = [ value, type ];
				/**
                 * we disable the next line to take into account the "All
                 * applicable rules" functionality note: find a better way to
                 * do this as it produces more loops
                 * return false;
                 */
			}
		} );

		return discount;
	}

	/**
     * Calculate the product price
     *
     * @since  1.0
     * @return String
     */
	function calculateProductPrice( price, totalsHolder, mainCart ) {
		var rules = totalsHolder.data( 'product-price-rules' );
		var variation_id_selector = "input[name^='variation_id']";
		var current_variation;
		var cv;
		var qty_element;
		var qty;
		var discount;
		var value;
		var type;
		var _dc;

		if ( mainCart.find( 'input.variation_id' ).length > 0 ) {
			variation_id_selector = 'input.variation_id';
		}
		variation_id_selector = mainCart.find( variation_id_selector );
		current_variation = parseFloat( variation_id_selector.val() );
		cv = current_variation;

		if ( variation_id_selector.length > 0 && ( ! current_variation || current_variation === 0 ) ) {
			return false;
		}
		if ( ! current_variation ) {
			current_variation = 0;
		}
		if ( rules && ! rules[ current_variation ] ) {
			current_variation = 0;
		}

		if ( ! ( ! rules || ! mainCart || $.isEmptyObject( rules ) || $.isEmptyObject( mainCart ) ) ) {
			qty_element = mainCart.find( '.qty' );
			qty = parseFloat( qty_element.val() );

			if ( ! Number.isFinite( qty ) ) {
				if ( totalsHolder.attr( 'data-is-sold-individually' ) || qty_element.length === 0 ) {
					qty = 1;
				}
			}
			if ( ( rules[ current_variation ] && current_variation !== 0 ) || rules[ 0 ] ) {
				if ( ! rules[ current_variation ] ) {
					current_variation = 0;
				}

				discount = getDiscountObj( totalsHolder, mainCart, rules, current_variation, cv, qty );
				value = discount[ 0 ];
				type = discount[ 1 ];
				_dc = parseInt( TCFINALPRICEJS.currency_format_num_decimals, 10 );

				switch ( type ) {
					case 'percentage':
					case 'discount__percentage':
						price = price - ( Math.ceil( ( multFloats( price, ( value / 100 ) ) * Math.pow( 10, _dc ) ) - 0.5 ) * Math.pow( 10, -_dc ) );
						price = tc_round( price, _dc );
						if ( price < 0 ) {
							price = 0;
						}
						break;

					case 'price':
					case 'discount__amount':
						price = price - value;
						if ( price < 0 ) {
							price = 0;
						}
						break;

					case 'fixed':
					case 'fixed__price':
						price = value;
						if ( price < 0 ) {
							price = 0;
						}
						break;
				}
			}
		}
		return price;
	}

	/**
     * Calculate price with tax
     *
     * @since  1.0
     * @return Float
     */
	function setTaxPrice( value, totalsHolder ) {
		var taxable;
		var taxRate;
		var taxDisplayMode;
		var pricesIncludeTax;
		if ( totalsHolder ) {
			taxable = totalsHolder.attr( 'data-taxable' );
			taxRate = totalsHolder.attr( 'data-tax-rate' );
			taxDisplayMode = totalsHolder.attr( 'data-tax-display-mode' );
			pricesIncludeTax = totalsHolder.attr( 'data-prices-include-tax' );

			if ( taxable ) {
				// Display without taxes
				if ( taxDisplayMode === 'excl' ) {
					if ( pricesIncludeTax === '1' ) {
						value = parseFloat( value ) / ( 1 + ( taxRate / 100 ) );
					}
					// Display without taxes
				} else if ( pricesIncludeTax !== '1' ) {
					value = parseFloat( value ) * ( 1 + ( taxRate / 100 ) );
				}
			}
		}
		return value;
	}

	/**
     * Set event handlers
     *
     * @since  1.0
     */
	function initEventHandlers( form, mainCart, totalsHolder, variationsForm ) {
		form.find( '.total_price' ).on( 'wc-measurement-price-calculator-total-price-change', function() {
			mainCart.trigger( 'tcFinalPriceUpdate' );
		} );
		form.find( '.product_price' ).on( 'wc-measurement-price-calculator-product-price-change', function( e, d, v ) {
			if ( e && d ) {
				totalsHolder.data( 'price', v );
			} else {
				totalsHolder.data( 'price', '' );
			}
			mainCart.trigger( 'tcFinalPriceUpdate' );
		} );

		if ( $( '.amount_needed:input' ).length > 0 ) {
			$( '.amount_needed:input' ).trigger( 'mpc-change' );
		}

		// trigger global custom update event when variation or quantity changes
		mainCart.on( 'change', 'input[name=variation_id], .qty', function() {
			mainCart.trigger( 'tcFinalPriceUpdate' );
		} );

		// global custom update event
		mainCart.on( 'tcFinalPriceUpdate', function() {
			var $EPO_check = $( '.tc-epo-totals' );
			var thisCart;
			var product_price;
			var qty_element;
			var qty;
			var product_type;
			var formatted_final_total;
			var product_total_price;
			var extra_fee = 0;
			var html;

			if ( $EPO_check.length > 0 ) {
				totalsHolder.hide();
				return;
			}

			thisCart = $( this );
			product_price = calculateProductPrice( parseFloat( totalsHolder.data( 'price' ) ), totalsHolder, mainCart );

			if ( product_price === false ) {
				totalsHolder.removeClass( 'active' ).empty();
				return;
			}

			qty_element = thisCart.find( '.qty' );
			qty = parseFloat( qty_element.val() );
			product_type = totalsHolder.data( 'type' );

			if ( qty_element.prop( 'type' ) === 'hidden' ) {
				totalsHolder.hide();
				return;
			}

			if ( product_type === 'variable' ) {
				thisCart.find( '.variations_button' ).before( totalsHolder );
			}

			if ( ! Number.isFinite( qty ) ) {
				if ( totalsHolder.attr( 'data-is-sold-individually' ) || qty_element.length === 0 ) {
					qty = 1;
				}
			}

			if ( qty > 0 ) {
				if ( product_price ) {
					product_price = setTaxPrice( product_price, totalsHolder );
					product_total_price = parseFloat( product_price * qty );
					if ( TCFINALPRICEJS.extra_fee ) {
						extra_fee = parseFloat( TCFINALPRICEJS.extra_fee );
						if ( ! Number.isFinite( extra_fee ) ) {
							extra_fee = 0;
						}
					}
					formatted_final_total = setPrice( product_total_price + extra_fee );
				}
				html = '<dl class="tc-final-price-totals">';
				if ( formatted_final_total ) {
					html = html + '<dt>' + TCFINALPRICEJS.i18n_final_total + '</dt><dd><span class="amount final">' + formatted_final_total + '</span></dd>';
				}
				html = html + '</dl>';
				totalsHolder.addClass( 'active' ).html( html );
			} else {
				totalsHolder.removeClass( 'active' ).empty();
			}
		} );

		// update prices when a variation is found
		variationsForm.on( 'found_variation.tmfp', function( event, variation ) {
			var thisForm = $( event.currentTarget );
			var variations = totalsHolder.data( 'variations' );
			var product_price;
			if ( variations && variation.variation_id && variations[ variation.variation_id ] ) {
				product_price = variations[ variation.variation_id ];
				totalsHolder.data( 'price', product_price );
			} else if ( $( variation.price_html ).find( '.amount:last' ).size() ) {
				product_price = $( variation.price_html ).find( '.amount:last' ).text();
				product_price = product_price.replace( TCFINALPRICEJS.currency_format_thousand_sep, '' );
				product_price = product_price.replace( TCFINALPRICEJS.currency_format_decimal_sep, '.' );
				product_price = product_price.replace( /[^0-9.]/g, '' );
				product_price = parseFloat( product_price );
				totalsHolder.data( 'price', product_price );
			}
			thisForm.trigger( 'tcFinalPriceUpdate' );
		} );

		variationsForm.find( '.variations select' ).on( 'blur.tmfp', function() {
			variationsForm.trigger( 'tcFinalPriceUpdate' );
		} );
	}

	// document ready
	$( function() {
		var formCarts = $( 'form.cart' );

		if ( formCarts.length ) {
			formCarts.toArray().forEach( function( cart ) {
				var formCart = $( cart );
				var mainCart = formCart.last();
				var form = mainCart.parent();
				var totalsHolder = formCart.find( '#tc-final-price-total' );
				var variationsForm = formCart.is( '.variations_form' );

				if ( variationsForm && ! formCart.data( 'tc-final-price-init' ) ) {
					formCart.on( 'wc_variation_form', function() {
						if ( formCart.data( 'tc-final-price-init' ) ) {
							return;
						}

						initEventHandlers( form, mainCart, totalsHolder, formCart );
						setTimeout( function() {
							formCart.trigger( 'tcFinalPriceUpdate' );
						}, 10 );
						formCart.find( '.variations select' ).trigger( 'change' );
						formCart.data( 'tc-final-price-init', 1 );
					} );
				} else {
					setTimeout( function() {
						initEventHandlers( form, mainCart, totalsHolder, formCart );
						formCart.trigger( 'tcFinalPriceUpdate' );
					}, 20 );
				}
			} );
		}
	} );
}( window, document, window.jQuery ) );
