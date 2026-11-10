<?php



add_filter( 'cron_schedules', 'example_add_cron_interval' );
function example_add_cron_interval( $schedules ) {
    $schedules['five_seconds'] = array(
        'interval' => 5,
        'display'  => esc_html__( 'Every Five Seconds' ), );
    return $schedules;
}


register_deactivation_hook( __FILE__, 'bl_deactivate' );

function bl_deactivate() {
    $timestamp = wp_next_scheduled( 'bl_cron_hook' );
    wp_unschedule_event( $timestamp, 'bl_cron_hook' );
}





// create a scheduled event (if it does not exist already)
function cron_maj_poduct() {
    if( !wp_next_scheduled( 'mycronjob' ) ) {
        wp_schedule_event( time(), 'day', 'mycronjob' );
    }
}
// and make sure it's called whenever WordPress loads
add_action('wp', 'cron_maj_poduct');

// add custom interval
function cron_add_minute( $schedules ) {
    // Adds once every minute to the existing schedules.
    $schedules['everyminute'] = array(
        'interval' => 60,
        'display' => __( 'Maj stock' )
    );
    return $schedules;
}
add_filter( 'cron_schedules', 'cron_add_minute' );


function script_maj_stock()
{
    foreach (db_all_products() as $produits) {

		var_dump($produits);
		
        //sur chaque produit dataStock($reference)

        if (!is_null($produits->sku)) {
            include DIR_PATH.'Primus/class/PrimusStock.php';

            $stock = new PrimusStock();
            // $prim_stock = $stock->dataStock($woo_product->sku);

            $products = new WC_Product($produits->product_id);
			

           // $products->set_regular_price(399.00);
            $products->set_stock_quantity($stock->dataStock($woo_product->sku));

            $products->save();


        }

    }
    mail('danenoultd@gmail.com', "cron", "d");
}
add_action ('mycronjob', 'script_maj_stock');



/***********************************
 *  AJAX ADMIN STOCK
 */


add_action( 'wp_ajax_primus_maj_product', 'primus_maj_product' );
function primus_maj_product()
{
    if(!empty($_POST['id']) ){


        $woo_product = db_product_id($_POST['id']);

        if( !is_null($woo_product->sku) ){

            include DIR_PATH.'Primus/class/PrimusStock.php';

            $stock = new PrimusStock();
           // $prim_stock = $stock->dataStock($woo_product->sku);




            $products =new WC_Product($woo_product->product_id);
var_dump($stock->dataStock($woo_product->sku));
            //$products->set_regular_price( 399.00 );
            $products->set_stock_quantity((int) $stock->dataStock($woo_product->sku) );

            $products->save();
        }

    }
    return true;
}






