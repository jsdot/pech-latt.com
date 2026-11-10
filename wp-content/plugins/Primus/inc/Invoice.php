<?php

// Add button invoice in order
function add_my_account_my_orders_custom_action( $actions, $order ) {
    $action_slug = 'order_invoice';

    $actions[$action_slug] = array(
        'url'  => home_url('/mon-compte/orders/invoices/'.$order->get_order_number()),
        'name' => 'Facture',
      
    );
    return $actions;
}
add_filter( 'woocommerce_my_account_my_orders_actions', 'add_my_account_my_orders_custom_action', 10, 2 );


// script action click btn invoice 
function action_after_account_orders_js() {
    $action_slug = 'order_invoice';

    require DIR_PATH.'Primus/view/compte/js_invoice.php';

}
add_action( 'woocommerce_after_account_orders', 'action_after_account_orders_js');


// script send email invoice 
add_action( 'wp_ajax_request_invoice', 'request_invoice' );
function request_invoice() {
    $set_invoices= get_option('primus_invoice_setting');

	global $wpdb;
    $order = wc_get_order( $_POST['order'] );

    ob_start();
        include(DIR_PATH.'Primus/view/compte/email_invoice_tpl.php');
    $content = ob_get_clean();

    $body = $content;

        $from = $set_invoices['email'];
        $to = $set_invoices['email'];
        $subject = 'Demande Facture E-commerce';
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
    
    if(wp_mail( $to, $subject, $body, $headers )){

        db_creat_log('success', 'succes Demande de facture  commande = '.$order->get_id());
        db_creat_invoices($order->get_id(),'demande','Demande facture');
        echo json_encode(['message' => $set_invoices['message_succes']]);

    }else{
        db_creat_log('error', 'error Demande de facture  commande = '.$order->get_id());
        echo json_encode(['message' => $set_invoices['message_erreur']]);

    }



	wp_die();
}


// Template Email 
function invoice_mail_tpl($order){


    $tpl =  '<p>Votre Client  <?= $order->get_billing_first_name();?> <?= $order->get_billing_last_name(); ?>,</p>';
    $tpl .=  ' <p>Adresse De Facturation : </p>';
    $tpl .=  '<p> Societe : <?= $order->get_billing_company(); ?></p>';
    $tpl .=  '<p> Adresse : <?= $order->get_billing_address_1(); ?></p>';
    $tpl .=  '<p> complément : <?= $order->get_billing_address_2(); ?></p>';
    $tpl .=  '<p> Ville : <?= $order->get_billing_city(); ?></p>';
    $tpl .=  '<p> Pays : <?= $order->get_billing_state(); ?></p>';
    $tpl .=  '<p> code postal : <?= $order->get_billing_postcode(); ?></p>';
    $tpl .=  '<p> Ville : <?= $order->get_billing_country(); ?></p>';
    $tpl .=  '<p> Email : <?= $order->get_billing_email(); ?></p>';
    $tpl .=  '<p> Téléphone : <?= $order->get_billing_phone(); ?></p>';

    return $tpl;






}
