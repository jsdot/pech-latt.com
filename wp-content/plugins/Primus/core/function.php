<?php

/**
 * 
 * Function Générale
 *  
 */

function dump($var){

    echo '<pre>';
    var_dump($var);
    echo '</pre>';


}



require(DIR_PATH.'Primus/core/db_query.php');
require(DIR_PATH.'Primus/core/sql_table.php');
require(DIR_PATH.'Primus/admin/index.php');

require(DIR_PATH.'Primus/inc/after_paiement.php');

require(DIR_PATH.'Primus/inc/Invoice.php');