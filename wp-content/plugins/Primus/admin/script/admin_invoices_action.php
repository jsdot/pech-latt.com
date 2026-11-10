<?php


add_action( 'wp_ajax_primus_status_invoice', 'primus_status_invoice' );
function primus_status_invoice()
{
        if(!empty($_POST['status']) ){
            db_update_invoices_status($_POST['id'],$_POST['status']);
        }
    return true;
}


add_action( 'wp_ajax_primus_del_invoice', 'primus_del_invoice' );
function primus_del_invoice()
{
    if(!empty($_POST['id']) ){
        db_del_invoices($_POST['id']);
    }
    return true;
}
