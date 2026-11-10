<?php

require 'vendor/autoload.php';

/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/

class PrimusOrder
{

    public function __construct()
    {
        $wsdl = get_option('primus_url');
        $setting = get_option('primus_wsdl_setting');
        logger("Options primus_url et primus_wsdl_setting récupérées.");

        $this->wsdl_url = $wsdl['order'];
        $this->wsdl_login =  $setting['wsdl_login'];
        $this->wsdl_pass =  $setting['wsdl_pass'];
        $this->wsdl_logiciel =  $setting['code_logiciel'];
        logger("Paramètres WSDL configurés : URL={$this->wsdl_url}, LOGIN={$this->wsdl_login}");
    }


    public function create($items,$services,$numOrder,$idClientPrimus){
        logger("Fonction create appelée avec numOrder={$numOrder} et idClientPrimus={$idClientPrimus}");
        $headers = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]];

        $options = array(
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => $this->wsdl_url,
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => $this->wsdl_login,
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => $this->wsdl_pass,
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create($headers),
        );
        logger("Options SOAP configurées.");


        $SC = new ServiceType\SC($options);
        logger("Client SOAP initialisé.");

        /*$items[0]['line_LineNo'] = 1333;
        $items[0]['line_Type'] = "Article";
        $items[0]['line_No'] = "PFMIA216720B75C06C10";
        $items[0]['line_Location'] = "ZWMS";
        $items[0]['line_Qty'] = 12;
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

        $items[1]['line_LineNo'] = 1332;
        $items[1]['line_Type'] = "Article";
        $items[1]['line_No'] = "PFMIA216719B75C06C00";
        $items[1]['line_Location'] = "ZWMS";
        $items[1]['line_Qty'] = 12;
        $items[1]['line_QtyGratuite'] = 0;
        $items[1]['line_NatureGratuite'] = "";
        $items[1]['line_OutstandingQty'] = 0;
        $items[1]['line_QtyShipped'] = 0;
        $items[1]['line_QtyInvoiced'] = 0;
        $items[1]['line_UnitPrice'] = 0.2917;
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
        $services[1]['service_Ventilation'] = "";*/

        $success = "";
        $header_TypeOrdre = "CWEBFR";
        $header_DocType= "Order" ;
        $header_Primeur= false;
        $header_CampagnePrimeur = "";
        $header_EquipeAgent = array("");
        $header_SellToNo = $idClientPrimus;
        $header_BillToNo = $idClientPrimus;
        $header_BillToCity = "";
        $header_BillToPostCode = "";
        $header_BillToCountryRegion = "";
        $header_ShipToName = "";
        $header_ShipToAddress = "";
        $header_ShipToAddress2 = "";
        $header_ShipToCity = "";
        $header_ShipToPostCode = "";
        $header_ShipToCountryRegion = "";
        $header_ShipToNo =  array("");
        $header_RequestedDeliveryDate = "0001-01-01";
        $header_PromisedDeliveryDate = "0001-01-01";
        $header_Acompte = 0;
        $header_YourReference = $numOrder;
        $header_No  ="";
        $header_DocumentDate  ="";
        $header_PostingDate  ="";
        $header_SellToCustomerNo  ="";
        $header_SellToCustomerName  ="";
        $header_SellToCustomerAddress  ="";
        $header_SellToCustomerAddress2  ="";
        $header_SellToCustomerCity  ="";
        $header_SelltoCustomerPostCode  ="";
        $header_SellToCustomerCountryRegion  ="";
        $header_BillTono = "";
        $header_billToName  ="";
        $header_BillToAddress  ="";
        $header_BillToAddress2  ="";
        $header_PaymentMethodCode  ="";
        $header_PaymentTermsCode  ="";
        $header_PriceIncludingVAT = false;
        $header_ShipmentMethodCode = "";
        $header_ShippingAgentCode = "";
        $header_ExternalDocumentNo = $numOrder;
        $header_MontantHT = 0;
        $header_MontantTTC = 0;
        $header_CodeOperation = "";
        $header_CodeSousOperation = "";

        $line = array();

        foreach ($items as $item) {
            $obj = new StructType\Line(
                $item['line_LineNo'],
                $item['line_Type'],
                $item['line_No'],
                $item['line_Location'],
                $item['line_Qty'],
                $item['line_QtyGratuite'],
                $item['line_NatureGratuite'],
                $item['line_OutstandingQty'],
                $item['line_QtyShipped'],
                $item['line_QtyInvoiced'],
                $item['line_UnitPrice'],
                $item['line_VATPercent'],
                $item['line_Operation'],
                $item['line_SousOperation'],
                $item['invoiceLine'],
                $item['amountLine'],
                $item['amountTTC']
            );
            array_push($line,$obj);
            logger("Ligne ajoutée : " . json_encode($item));
        }

        $service = array();
        foreach ($services as $one){
            $objS = new \StructType\Services (
                $one['service_Cle'],
                $one['service_Libelle'],
                $one['service_Type'],
                $one['service_Sens'],
                $one['service_Rang'],
                $one['service_OrdreCalcul'],
                $one['service_Valeur'],
                $one['service_ModeCalcul'],
                $one['service_BaseCalcul'],
                $one['service_Montant'],
                $one['service_SurFacture'],
                $one['service_Ventilation']
            );
            array_push($service,$objS);
            logger("Service ajouté : " . json_encode($one));
        }

        $header = new \StructType\Header(
            $success,
            $header_TypeOrdre,
            $header_DocType,
            $header_Primeur,
            $header_CampagnePrimeur,
            $header_EquipeAgent,
            $header_SellToNo,
            $header_BillToNo,
            $header_BillToCity,
            $header_BillToPostCode,
            $header_BillToCountryRegion,
            $header_ShipToName,
            $header_ShipToAddress,
            $header_ShipToAddress2,
            $header_ShipToCity,
            $header_ShipToPostCode,
            $header_ShipToCountryRegion,
            $header_ShipToNo,
            $header_RequestedDeliveryDate,
            $header_PromisedDeliveryDate,
            $header_Acompte,
            $header_YourReference,
            array(),
            $line,
            $header_No,
            $header_DocumentDate,
            $header_PostingDate,
            $header_SellToCustomerNo,
            $header_SellToCustomerName,
            $header_SellToCustomerAddress,
            $header_SellToCustomerAddress2,
            $header_SellToCustomerCity,
            $header_SelltoCustomerPostCode,
            $header_SellToCustomerCountryRegion,
            $header_BillTono,
            $header_billToName,
            $header_BillToAddress,
            $header_BillToAddress2,
            $header_PaymentMethodCode,
            $header_PaymentTermsCode,
            $header_PriceIncludingVAT,
            $header_ShipmentMethodCode,
            $header_ShippingAgentCode,
            $header_ExternalDocumentNo,
            $header_MontantHT,
            $header_MontantTTC,
            $header_CodeOperation,
            $header_CodeSousOperation,
            array(new StructType\Lignes (
                $article= "",
                $startingDate = "",
                $endingDate = "",
                $minQty =0,
                $unitPrice=0,
                $ligne_No=0,
                $ligne_Type = array(""),
                $ligne_ItemNo="",
                $ligne_LocationCode="",
                $ligne_Description="",
                $ligne_UnitOfMeasure="",
                $ligne_Quantity = 0,
                $ligne_UnitPrice = 0,
                $ligne_MontantBrut = 0,
                $ligne_MontantHT = 0,
                $ligne_MontantNet = 0,
                $ligne_MontantNetNet = 0,
                $ligne_Discount = 0,
                $ligne_DiscountAmount = 0,
                $ligne_GrossWeight = 0,
                $ligne_NetWeight = 0,
                $ligne_CustomerPriceGroup = "",
                $ligne_NatureGratuite = "",
                $ligne_QuantiteGratuite = 0,
                $ligne_Operation = "",
                $ligne_SousOperation = "",
                $service,
                $line_LineNo = 0,
                $line_Type = array(""),
                $line_ItemNo = "",
                $line_LocationCode="",
                $line_Description="",
                $line_Description2="",
                $line_UnitOfMeasure="",
                $line_Quantity=0,
                $line_UnitPrice=0,
                $line_LineDiscountAmount=0,
                $line_MontantBrut=0,
                $line_MontantHT=0,
                $line_MontantNet=0,
                $line_MontantNetNet=0,
                $line_CodeOperation="",
                $line_CodeSousOperation=""
            )),
            $header_ExternalDocNo=$numOrder,
            $header_ShipmentDate="",
            $header_billToNo="",
            $header_ShipToCode="",
            $header_ShipToCountry="",
            $header_SousOperation="",
            $key="",
            $noCommande="",
            $dateCreation="",
            $header_SellToName="",
            $header_SellToAdress="",
            $header_SellToAdress2="",
            $header_SellToCity="",
            $header_SellToPostCode="",
            $header_SellToCountryRegion="",
            $header_BillToDestinataire="",
            $header_BillToName="",
            $header_BillToAdress="",
            $header_BillToAdress2="",
            $header_PaymentMethod="",
            $header_PaymentTerms="",
            $header_PricesIncludingVAT=false,
            $codePromotion="",
            $header_ShipmentMethod = array(""),
            $header_ShipAgent="",
            $header_ShipTime="",
            $idWebClient="",
            $header_ExternalDoc=$numOrder,
            $montantHT="",
            $montantTTC="",
            $codeOperation="",
            $codeSousOperation="",
        );

        $createOrder = $SC->S012_Creation_Commande(new \StructType\S012_Creation_Commande(
            new \StructType\RootWSReturnError(
                new \StructType\Header("","","","","",array(),"","","","","","","","","","","",array(),"",0,0,"",array(),array(),"","","","","","","","","","","","","","","","","","","","",0,0,"","",array(),"","","","",0,0,0,0,0,0,0),array()),
            new \StructType\RootWSVenteParametres (array( new \StructType\Vente (array($this->wsdl_logiciel)))),
            new \StructType\RootWSCommandeIN(
                array($header))
            ));
        logger("Commande créée avec succès.");

        return $createOrder->getWSReturnError()->getHeader()->getSuccess();
        // Vérifie si la commande a été créée avec succès
        /*if ($createOrder && $createOrder->getWSReturnError()->getHeader()->getSuccess()) {
            logger("Commande créée avec succès.");
        } else {
            // Logique de gestion des erreurs
            $errorMsg = "Échec de la création de la commande sur l'ERP.";
            logger($errorMsg); // Log de l'erreur
        }*/
    }
}