<?php



function db_creat_log($status,$message)
{
    global $wpdb;

        $data = [
            'status' => $status,
            'message' => $message,
            'creat_ad' =>  date('Y-m-d H:i:s'),
        ];

    $wpdb->insert($wpdb->prefix.'primus_logs', $data);

}


function db_all_logs(){
    global $wpdb;


    $logs = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}primus_logs", OBJECT);

    return $logs ;
}

function db_del_logs($id){
    global $wpdb;

    $wpdb->delete( "{$wpdb->prefix}primus_logs", array( 'id' => $id ) );
    return true ;
}





function db_creat_invoices($order,$status,$message)
{
    global $wpdb;
    $invoice = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}primus_invoices  WHERE order_id = $order LIMIT 1", OBJECT);

    $data = [
        'order_id' => $order,
        'status' => $status,
        'message' => $message,
        'creat_ad' =>  date('Y-m-d H:i:s'),
    ];

    if (!empty($invoice[0]->id)){

        $wpdb->update(
            "{$wpdb->prefix}primus_invoices",
            array(
                'status' => $status,
                'creat_ad' =>  date('Y-m-d H:i:s')  // string
            ),
            array( 'order_id' => $order ),
           null,null
        );

    }else{

        $wpdb->insert("{$wpdb->prefix}primus_invoices", $data);

    }






}

function db_all_invoices(){
    global $wpdb;


    $invoice = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}primus_invoices", OBJECT);

    return $invoice ;
}

function db_update_invoices_status($id,$status){
    global $wpdb;

    $wpdb->update(
        "{$wpdb->prefix}primus_invoices",
        array(
            'status' => $status,   // string
        ),
        array( 'id' => $id ),
        array(
            '%s',   // value1
        ),
        null
    );

    return true ;
}


function db_del_invoices($id){
    global $wpdb;

    $wpdb->delete( "{$wpdb->prefix}primus_invoices", array( 'id' => $id ) );
    return true ;
}


function db_all_stock(){


}




function check_customer_primus($email){

    global $wpdb;
    $client_woo = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}primus_by_user  WHERE  email = '$email' ", OBJECT);



    if (!empty($client_woo[0]->email)){
        return $client_woo[0];

    }else{
        return false;
    }

}


function db_customer_by_email($email)
{
    global $wpdb;
    $customer = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wc_customer_lookup  WHERE  email = '$email' ", OBJECT);

    if (!empty($customer[0]->email)){
        return $customer[0];

    }else{
        return false;
    }


}


function db_create_cli_woo_pri($woo,$primus)
{
    global $wpdb;

    $data = [
        'email' => $woo,
        'primus_cl' => $primus,
        'creat_ad' =>  date('Y-m-d H:i:s'),
    ];

    $wpdb->insert($wpdb->prefix.'primus_by_user', $data);

}

function db_all_clients(){

    global $wpdb;


    $clients = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}primus_by_user", OBJECT);

    return $clients ;

}

function db_all_products(){

    global $wpdb;


    $products = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wc_product_meta_lookup", OBJECT);

    return $products ;


}

function db_product_id($id){
    global $wpdb;
    $product = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}wc_product_meta_lookup  WHERE product_id = $id LIMIT 1", OBJECT);

    if (!empty($product[0])){
        return $product[0];

    }else {
        return false;
    }

}