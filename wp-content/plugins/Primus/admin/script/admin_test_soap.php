<?php

//include DIR_PATH.'Primus/class/PrimusClient.php';

ini_set('display_errors', 1);

$client = new PrimusClient();

/**************************CLIENT*********************/
/*$liste = $client->listing();
echo "<pre>";
var_dump($liste);
echo "</pre>";*/

$client->create(rand(), "Factory Test", "Factory Name", "Rue de la bastide", "Résidence vino", "13008", "Marseille", "France", "FR", "marc.test@testing.fr", "0202020220", "0706060655","COMPTOIR","CLI00118");
//$client->existNo("CLI0093");
//die();
/**************************STOCK*********************/
/*include DIR_PATH.'Primus/class/PrimusStock.php';
$stock = new PrimusStock();
echo $stock->dataStock("PFNSG193198B50C12N00").' ';
echo $stock->dataStock("PFMIA230720B75C06C10").' ';
echo $stock->dataStock("PFMIA229719B75C06N10").' ';*/

/**************************ORDER*********************/
//include DIR_PATH.'Primus/class/PrimusOrder.php';
/*$order = new PrimusOrder();

$items[0]['line_LineNo'] = 5555;
$items[0]['line_Type'] = "Article";
$items[0]['line_No'] = "PFMIA494719B75C06C10";
$items[0]['line_Location'] = "ZWMS";
$items[0]['line_Qty'] = 1;
$items[0]['line_QtyGratuite'] = 0;
$items[0]['line_NatureGratuite'] = "";
$items[0]['line_OutstandingQty'] = 0;
$items[0]['line_QtyShipped'] = 0;
$items[0]['line_QtyInvoiced'] = 0;
$items[0]['line_UnitPrice'] = 10;
$items[0]['line_VATPercent'] = 0;
$items[0]['line_Operation'] = "";
$items[0]['line_SousOperation'] = "";
$items[0]['invoiceLine'] = 0;
$items[0]['amountLine'] =0;
$items[0]['amountTTC'] =0;

$items[1]['line_LineNo'] = 5556;
$items[1]['line_Type'] = "Article";
$items[1]['line_No'] = "PFMIA216720B75C06C10";
$items[1]['line_Location'] = "ZWMS";
$items[1]['line_Qty'] = 1;
$items[1]['line_QtyGratuite'] = 0;
$items[1]['line_NatureGratuite'] = "";
$items[1]['line_OutstandingQty'] = 0;
$items[1]['line_QtyShipped'] = 0;
$items[1]['line_QtyInvoiced'] = 0;
$items[1]['line_UnitPrice'] = 30;
$items[1]['line_VATPercent'] = 0;
$items[1]['line_Operation'] = "";
$items[1]['line_SousOperation'] = "";
$items[1]['invoiceLine'] = 0;
$items[1]['amountLine'] =0;
$items[1]['amountTTC'] =0;

$services[0]['service_Cle'] = "";
$services[0]['service_Libelle'] = "TVA";
$services[0]['service_Type'] = array("Autres");
$services[0]['service_Sens'] = array("");
$services[0]['service_Rang'] = 0;
$services[0]['service_OrdreCalcul'] =0;
$services[0]['service_Valeur'] = 0;
$services[0]['service_ModeCalcul'] = "";
$services[0]['service_BaseCalcul'] = "";
$services[0]['service_Montant'] = 10;
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
$services[1]['service_Montant'] = 50;
$services[1]['service_SurFacture'] = false;
$services[1]['service_Ventilation'] = "";

$numOrder = rand();
$idClientPrimus = "CLI00331";*/

/*$test = $order->create($items,$services,$numOrder,$idClientPrimus);
echo "<pre>";
var_dump($test);
echo "</pre>";*/