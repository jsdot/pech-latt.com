<?php

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

/**
 * Auto Complete all WooCommerce orders.
 */
add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
//add_action( 'woocommerce_payment_complete', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) {
    try {
		$order = wc_get_order( $order_id );

		if (!$order) {
			throw new Exception('Commande non trouvée pour l\'ID : ' . $order_id);
		}

		//1- Tester si cl1ient existe
		//Vérifier dans la table des relations si pour cet id_client_wc, il y a un id_client_primus correspondant
		$client_woo_prim = check_customer_primus($order->get_billing_email());

		//dump(strlen($client_woo_prim->primus_cl) == '0' );die();
		//Si n'existe pas  :
		if ($client_woo_prim == false ){
			try {
				$pri_client = new PrimusClient();

				$clientCreate = $pri_client->create(
					uniqid(),
					($order->get_billing_company() != "") ? $order->get_billing_company() : $order->get_billing_first_name() . ' ' . $order->get_billing_last_name(),
					($order->get_billing_company() != "") ? $order->get_billing_company() : $order->get_billing_first_name() . ' ' . $order->get_billing_last_name(),
					$order->get_billing_address_1(), $order->get_billing_address_2(), $order->get_billing_postcode(), $order->get_billing_city(),
					$order->get_billing_country(),  $order->get_billing_country(), $order->get_billing_email(), $order->get_billing_phone(),
					$order->get_billing_phone(), "DIVERS", "CLI00306"
				);

				// Stockage dans la table de relation			
				try {
					db_create_cli_woo_pri($order->get_billing_email(), $clientCreate);
					logger('Nouveau client créé');
				} catch (Exception $e) {
					logger('Erreur lors de l’enregistrement dans la base de données : ' . $e->getMessage());
				}
			
			} catch (Exception $e) {
				// Gérer l'exception ici, par exemple en loggant l'erreur
				logger('Erreur lors de la création du client Primus : ' . $e->getMessage());
				// Vous pourriez vouloir renvoyer une réponse ou arrêter l'exécution
			}

			// affectation des nouvelle entrées
			$client_woo_prim = check_customer_primus($order->get_billing_email());

		} else {
			logger('Le client existe déjà pour l\'email : ' . $order->get_billing_email());
		}

		$items = [];
		foreach ( $order->get_items() as $key => $product ) {
			try {
                $product_id = $product->get_product_id();
                $article = wc_get_product($product_id);
				$data = $article->get_data();
				/*$qty = $product->get_quantity();

				$variation_id = $product->get_variation_id();
				$variation = wc_get_product($variation_id);

				$sku = $variation->get_sku();
				$price = $variation->get_price();

                // Utiliser une valeur par défaut si le SKU est toujours vide
                if (empty($sku)) {
                    $sku = 'SKU_NON_TROUVE';
                }*/

				$product_id = $product->get_product_id(); // ID du produit ou de la variation parente
				$article = wc_get_product($product_id); // Récupère l'objet du produit
				$qty = $product->get_quantity(); // Quantité commandée

				$variation_id = $product->get_variation_id();
				if ($variation_id) {
					// C'est une variation de produit
					$variation = wc_get_product($variation_id); // Récupère l'objet variation
					$sku = $variation->get_sku(); // SKU de la variation
					$price = $variation->get_price(); // Prix de la variation
				} else {
					// C'est un produit simple
					$sku = $article->get_sku(); // SKU du produit simple
					$price = $article->get_price(); // Prix du produit simple
				}

				if (empty($sku)) {
					$sku = 'SKU_NON_TROUVE';
					logger('ERREUR PAS DE SKU sur l\'article : ' . $product_id);
				}

				logger('Référence du produit : ' . $sku);

				//$article =  wc_get_product($product->get_product_id());
				$item['line_LineNo'] = rand();
				$item['line_Type'] =  "Article";
				$item['line_No'] = $sku;
				$item['line_Location'] = "ZWMS";
				$item['line_Qty'] = $qty;
				$item['line_QtyGratuite'] = 0;
				$item['line_NatureGratuite'] = "";
				$item['line_OutstandingQty'] = 0;
				$item['line_QtyShipped'] = 0;
				$item['line_QtyInvoiced'] = 0;
				$item['line_UnitPrice'] = $price;
				$item['line_VATPercent'] = 0;
				$item['line_Operation'] = "";
				$item['line_SousOperation'] = "";
				$item['invoiceLine'] =0;
				$item['amountLine'] =0;
				$item['amountTTC'] =0;
				array_push($items,$item);
			} catch (Exception $e) {
				logger('Erreur de traitement de l\'article : ' . $e->getMessage());
			}
		}

		//2- Enregistrement de la commande
		$commande = new PrimusOrder();

		$services[0]['service_Cle'] = "";
		$services[0]['service_Libelle'] = "TVA";
		$services[0]['service_Type'] = array("Autres");
		$services[0]['service_Sens'] = array("");
		$services[0]['service_Rang'] = 0;
		$services[0]['service_OrdreCalcul'] =0;
		$services[0]['service_Valeur'] = 0;
		$services[0]['service_ModeCalcul'] = "";
		$services[0]['service_BaseCalcul'] = "";
		$services[0]['service_Montant'] = $order->get_total_tax();
		$services[0]['service_SurFacture'] = false;
		$services[0]['service_Ventilation'] = "";

		$services[1]['service_Cle'] = "";
		$services[1]['service_Libelle'] = "Frais de port";
		$services[1]['service_Type'] = array("Autres");
		$services[1]['service_Sens'] = array("");
		$services[1]['service_Rang'] = 0;
		$services[1]['service_OrdreCalcul'] =0;
		$services[1]['service_Valeur'] = 0;
		$services[1]['service_ModeCalcul'] = "";
		$services[1]['service_BaseCalcul'] = "";
		$services[1]['service_Montant'] = $order->get_shipping_total();
		$services[1]['service_SurFacture'] = false;
		$services[1]['service_Ventilation'] = "";

		$numOrder = $order->get_id();

		$created = $commande->create($items,$services,$numOrder,$client_woo_prim->primus_cl);

		$order->update_status( 'completed' );
	} catch (Exception $e) {
		logger('Erreur lors de l\'exécution de la commande WooCommerce : ' . $e->getMessage());
	}
}