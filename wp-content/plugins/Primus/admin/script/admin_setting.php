<?php

add_action('init','primus_setting_invoice' );
function primus_setting_invoice()
{
    if (!empty($_POST['invoices'])){
        if(wp_verify_nonce( $_POST['invoices'], 'primus_setting' )) {


            if (!empty(get_option('primus_invoice_setting')['email'])  || !empty(get_option('primus_invoice_setting')['message_succes']) || !empty(get_option('primus_invoice_setting')['message_erreur'])){
                update_option('primus_invoice_setting', [

                    'email' => (!empty($_POST['email']))?$_POST['email']: ' ',
                    'message_succes' => (!empty($_POST['message_succes']))?$_POST['message_succes']: ' ',
                    'message_erreur' =>  (!empty($_POST['message_erreur']))?$_POST['message_erreur']: ' ',
                ]);

            }else{

                add_option('primus_invoice_setting', [

                        'email' => (!empty($_POST['email']))?$_POST['email']: ' ',
                        'message_succes' =>  $_POST['message_succes'],
                        'message_erreur' =>  $_POST['message_erreur'],
                    ]);

            }



        }
    }



}


add_action('init','primus_setting_cron' );
function primus_setting_cron()
{
    if (!empty($_POST['cron'])){
        if(wp_verify_nonce( $_POST['cron'], 'primus_setting' )) {


            if (!empty(get_option('primus_cron')['status'])){
                update_option('primus_cron', [

                    'status' => (!empty($_POST['status']))?$_POST['status']: ' ',
                    'sequence' => (!empty($_POST['sequence']))?$_POST['sequence']: ' ',
                    'heure' =>  (!empty($_POST['heure']))?date('H:i', strtotime($_POST['heure'])): ' ',
                ]);

            }else{

                add_option('primus_cron', [
                        'status' => (!empty($_POST['status']))?$_POST['status']: ' ',
                        'sequence' => (!empty($_POST['sequence']))?$_POST['sequence']: ' ',
                        'heure' =>  (!empty($_POST['heure']))?date('H:i', strtotime($_POST['heure'])): ' ',
                ]);

            }

        }
    }

}


add_action('init','primus_setting_wsdl' );
function primus_setting_wsdl()
{
    if (!empty($_POST['wsdl'])){
        if(wp_verify_nonce( $_POST['wsdl'], 'primus_setting' )) {

            if (!empty(get_option('primus_wsdl_setting')['code_logiciel'])  || !empty(get_option('primus_wsdl_setting')['wsdl_login']) || !empty(get_option('primus_wsdl_setting')['wsdl_pass'])){
                update_option('primus_wsdl_setting', [

                    'code_logiciel' => (!empty($_POST['code_logiciel']))?$_POST['code_logiciel']: ' ',
                    'wsdl_login' => (!empty($_POST['wsdl_login']))?$_POST['wsdl_login']: ' ',
                    'wsdl_pass' =>  (!empty($_POST['wsdl_pass']))?$_POST['wsdl_pass']: ' ',
                ]);

            }else{

                add_option('primus_wsdl_setting', [

                        'code_logiciel' => (!empty($_POST['code_logiciel']))?$_POST['code_logiciel']: ' ',
                        'wsdl_login' => (!empty($_POST['wsdl_login']))?$_POST['wsdl_login']: ' ',
                        'wsdl_pass' =>  (!empty($_POST['wsdl_pass']))?$_POST['wsdl_pass']: ' ',
                        ]
                );

            }



        }
    }

}


add_action('init','primus_setting_url' );
function primus_setting_url()
{
    if (!empty($_POST['url'])){
        if(wp_verify_nonce( $_POST['url'], 'primus_setting' )) {


            if (!empty(get_option('primus_url')) ){
                update_option('primus_url', [

                    'stock' => (!empty($_POST['url_stock']))?$_POST['url_stock']: ' ',
                    'client' => (!empty($_POST['url_client']))?$_POST['url_client']: ' ',
                    'order' =>  (!empty($_POST['url_order']))?$_POST['url_order']: ' ',
                ]);

            }else{

                add_option('primus_url', [
                    'stock' => (!empty($_POST['url_stock']))?$_POST['url_stock']: ' ',
                    'client' => (!empty($_POST['url_client']))?$_POST['url_client']: ' ',
                    'order' =>  (!empty($_POST['url_order']))?$_POST['url_order']: ' ',
                ]);

            }

        }
    }

}