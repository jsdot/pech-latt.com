<?php

if(is_plugin_active( 'woocommerce/woocommerce.php' )){

    if(get_option('primus_activ') == true){


        require(DIR_PATH.'Primus/core/function.php');
        require(DIR_PATH.'Primus/inc/funcion_soap_primus.php');      

    }else{

        add_option('primus_activ' , true);
        function sample_admin_notice__success() {
      
            $status='success';
            $message = "Plugin installer avec succés ! ";
    
            include(DIR_PATH.'primus/view/partials/alerte.php');
            
          
        }
        add_action( 'admin_notices', 'sample_admin_notice__success' );
    
    }


}else{

   

    function sample_admin_notice__error() {
        deactivate_plugins( '/primus/primus.php' ,true);  

        $status='error';
        $message = 'Désolé ! Pour que Primus Win functionne, vous devez au préalable télécharger est installler Woocommerce.';

        include(DIR_PATH.'Primus/view/partials/alerte.php');

        
    }
    add_action( 'admin_notices', 'sample_admin_notice__error' );
    





}

