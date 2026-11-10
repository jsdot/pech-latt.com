<?php
trigger_error("Test d'erreur PHP pour vérification des logs", E_USER_WARNING);


echo 'Le fichier log des erreurs PHP est : ' . ini_get('error_log');
phpinfo();

//ini_set('display_errors',1);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Vente/src/ClassMap.php';

/*$options = array(
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => "https://45.81.209.16:7063/PRIMUS_WS_EXTERNE/WS/DOMAINE%20MIA/Codeunit/WS_IN_Vente",
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => "WS_EXTERNE",
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => "WS_Fact0ry2022",
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create($this->headers),
);

$general = new StructType\General();

$general->setRefExterne("");
$general->setNo($idClient);

$client = new StructType\Client();
$client->setGeneral($general);
$client->setTousLesChampsClient("");

$clients= array($client);

$ST = new ServiceType\ST($options);

$checkIdClient = $ST->S002_Test_Existence_Client_No(new \StructType\S002_Test_Existence_Client_No(
    new StructType\RootWSReturnError(
        new \StructType\Header("","","","","",array(),"","","","","","","","","","","",array(),"",0,0,"",array(),array(),"","","","","","","","","","","","","","","","","","","","",0,0,"","",array(),"","","","",0,0,0,0,0,0,0),null),
    new \StructType\RootWSVenteParametres (array( new \StructType\Vente (array("FACTORY")))),
    new StructType\RootWSVenteClient(
        $clients
    )));

if(is_bool($checkIdClient->getReturn_value())===true){
    $result = $checkIdClient->getReturn_value();
}else{
    $result = "Erreur lors de l'appel du WS";
}*/


/**
 * Minimal options
 */

//https://45.81.209.16:7063/PRIMUS_WS_EXTERNE/WS/NSG%20VINS/Codeunit/WS_IN_Vente
//https://45.81.209.16:7302/PRIMUS_WS_EXTERNE/WS/DOMAINE%20MIA/Codeunit/WS_IN_Vente
//https://46.218.46.141:7063/PRIMUS_WS_EXTERNE/WS/CHATEAU%20PECH%20LATT/Codeunit/WS_IN_Vente

//OK ==> curl -u WS_EXTERNE:WS_Fact0ry2022 -kv https://45.81.209.16:7302/I_PRIMUS_WINE_RECETTE_WS/WS/SITEC/Codeunit/WS_IN_Vente

$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://46.218.46.141:7063/PRIMUS_WS_EXTERNE/WS/CHATEAU%20PECH%20LATT/Codeunit/WS_IN_Vente',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'WS_EXTERNE',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'WS_Fact0ry2022',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create($headers = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ]])
];


//http://SRVERP.louis-max.local:7047/PRIMUS/WS/DOMAINE%20MIA/Codeunit/WS_IN_Vente


/*$contextOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
];
$context = stream_context_create($contextOptions);

$options = [
    'stream_context' => $context,
    'trace' => 1,  // Activer pour pouvoir voir les requêtes et réponses brutes si nécessaire
];
*/
//$client = new SoapClient('https://45.81.209.16:7302/PRIMUS_WS_EXTERNE/WS/DOMAINE%20MIA/Codeunit/WS_IN_Vente', $options);


$sL = new \ServiceType\SL($options);

$lectureV2 = $sL->S025_Lecture_Client_V2(new \StructType\S025_Lecture_Client_V2(
    new StructType\RootWSReturnError(
        new \StructType\Header("","","","","",array(),"","","","","","","","","","","",array(),"",0,0,"",array(),array(),"","","","","","","","","","","","","","","","","","","","",0,0,"","",array(),"","","","",0,0,0,0,0,0,0),null),
    new \StructType\RootWSVenteParametres (array( new \StructType\Vente (array("FACTORY")))),
    new StructType\RootWSDonneesParametres(new \StructType\Donnees("",null,null,null,null)),
    new StructType\RootWSClients(
        new \StructType\General ()
    )
));

//DEBUG
var_dump($sL->getSoapClient());

$result = $lectureV2->getWSClients()->getGeneral()->getCustomer();

die();

echo "<pre>";
var_dump($result);
//var_dump($result[3]->getCustomer_No());
echo "</pre>";

die();

/*
require 'vendor/autoload.php';

include 'config.php';

use WsdlToPhp\PackageBase\SoapClientInterface;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

include 'VenteProduction/src/ClassMap.php';
include 'VenteProduction/src/ServiceType/SL.php';
foreach (glob("VenteProduction/src/StructType/*.php") as $filename)
{
    include $filename;
}

ini_set('display_errors',1);

$headers = [
    'ssl' => [
        'verify_peer'       => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true
    ]];

$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://45.81.209.16:7302/I_PRIMUS_WINE_RECETTE_WS/WS/SITEC/Codeunit/WS_IN_Vente',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'WS',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'primus',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create($headers),
);

$SL = new ServiceType\SL($options);

$lectureV2 = $SL->S025_Lecture_Client_V2(new \StructType\S025_Lecture_Client_V2(
    new StructType\RootWSReturnError(
        new \StructType\Header("","","","","",array(),"","","","","","","","","","","",array(),"",0,0,"",array(),array(),"","","","","","","","","","","","","","","","","","","","",0,0,"","",array(),"","","","",0,0,0,0,0,0,0),null),
    new \StructType\RootWSVenteParametres (array( new \StructType\Vente (array("PRIMUS")))),
    new StructType\RootWSDonneesParametres(new \StructType\Donnees("",null,null,null,null)),
    new StructType\RootWSClients(new \StructType\General ("", array(), array(), "", new \StructType\Nom(""),new \StructType\NomRecherche(""),new \StructType\Nom2(""),new \StructType\Marque1(""),new \StructType\Marque2(""),new \StructType\Adresse1(""),
        new \StructType\Adresse2(""),new \StructType\CodePostal(""),new \StructType\Ville(""),new \StructType\County(""),new \StructType\CountryRegion(""),new \StructType\CurrencyCode(""),new \StructType\CreditLimit(""),
        new \StructType\Blocked(""),new \StructType\PaymentMethodCode(""),new \StructType\CustDiscGroup(""),new \StructType\SalespersonCode(""),new \StructType\EquipeAgentCode(""),new \StructType\LocationCode(""),
        "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", array(), array()))))->getWSClients();


$lectureV2 = $SL->S025_Lecture_Client_V2(new \StructType\S025_Lecture_Client_V2(
    new StructType\RootWSReturnError(
        new \StructType\Header("","","","","",array(),"","","","","","","","","","","",array(),"",0,0,"",array(),array(),"","","","","","","","","","","","","","","","","","","","",0,0,"","",array(),"","","","",0,0,0,0,0,0,0),null),
    new \StructType\RootWSVenteParametres (array( new \StructType\Vente (array("PRIMUS")))),
    new StructType\RootWSDonneesParametres(new \StructType\Donnees("",null,null,null,null)),
    new StructType\RootWSClients(
        new \StructType\General ()
    )
))->getWSClients();


$result = $lectureV2->getGeneral()->getCustomer();

echo "<pre>";
var_dump($result);
//var_dump($result[3]->getCustomer_No());
echo "</pre>";

die();*/