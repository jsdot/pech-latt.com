<?php

require_once __DIR__ . '/vendor/autoload.php';

/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/

class PrimusClient
{

    private $wsdl_url;
    private $wsdl_login;
    private $wsdl_pass;

    protected $headers = [
        'ssl' => [
        'verify_peer'       => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true
        ]
    ];

    public function __construct()
    {
        $wsdl = get_option('primus_url');
        $setting = get_option('primus_wsdl_setting');

        // Assurer que les clés nécessaires sont présentes et non vides
        if (empty($wsdl['client'])) {
            throw new Exception("L'URL WSDL est vide ou manquante dans la configuration.");
        }

        $this->wsdl_url = $wsdl['client'];
        $this->wsdl_login =  $setting['wsdl_login'];
        $this->wsdl_pass =  $setting['wsdl_pass'];
        $this->code_logiciel =  $setting['code_logiciel'];

    }


    /**
     * listing Client
     * @param -
     * @return array StructType/Customer
     */
    public function listing(){

        $options = [
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => $this->wsdl_url,
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => $this->wsdl_login,
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => $this->wsdl_pass,
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create($this->headers)
        ];

        $sL = new \ServiceType\SL($options);

        $lectureV2 = $sL->S025_Lecture_Client_V2(new \StructType\S025_Lecture_Client_V2(
            new StructType\RootWSReturnError(
                new \StructType\Header("","","","","",array(),"","","","","","","","","","","",array(),"",0,0,"",array(),array(),"","","","","","","","","","","","","","","","","","","","",0,0,"","",array(),"","","","",0,0,0,0,0,0,0),null),
            new \StructType\RootWSVenteParametres (array( new \StructType\Vente (array($this->code_logiciel)))),
            new StructType\RootWSDonneesParametres(new \StructType\Donnees("",null,null,null,null)),
            new StructType\RootWSClients(
                new \StructType\General ()
            )));

        if($lectureV2->getWSReturnError()->getHeader()->getSuccess()=="OUI"){
            $result = $lectureV2->getWSClients()->getGeneral()->getCustomer();



        }else{
            if ($lectureV2->getWSReturnError()->getHeader()->getSuccess()=="NON") {
                $result = "Erreur WS - Success = NON ";
            }else{
                $result = "Erreur lors de l'appel du WS";
            }
        }

        return $result;

    }


    /**
     * Create Client
     * @param :
     * $refexterne 789
     * $nom Domaine
     * $nomrecherche Domaine
     * $adresse1 Rue du test
     * $adresse2 Résidence du test
     * $codePostal 75002
     * $ville PAris
     * $country France
     * $countryRegion FR
     * $mail test@test.te
     * $phone 0202020202
     * $mobilephone 0606060606
     * $customer_CustPriceGroup STANDARD
     * $codeConditionReglement 15J -- -- -- SUPPRIMER
     * $codeModeReglement CB -- -- -- SUPPRIMER
     * $idModele CLI0087
     * @return string CodeClient primus
     */
    public function create($refexterne, $nom, $nomrecherche, $adresse1, $adresse2, $codePostal, $ville, $country, $countryRegion, $mail, $phone, $mobilephone,$customer_CustPriceGroup ,$idModele){
        try {

            // Validation des données en entrée
            if (empty($this->wsdl_url) || empty($this->wsdl_login) || empty($this->wsdl_pass)) {
                throw new Exception("Les informations de connexion WSDL sont incomplètes.");
            }

            $options = array(
                WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => $this->wsdl_url,
                \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
                WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => $this->wsdl_login,
                WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => $this->wsdl_pass,
                \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create($this->headers),
            );

            logger("Options de connexion SOAP initialisées.");

            //general
            $nom2 = "";
            $marque1 = "";
            $marque2 = "";
            $currencyCode = "EUR";
            $creditLimit = "";
            $blocked = "";
            $paymentMethodCode = "";
            $custDiscGroup = "";
            $salespersonCode = "";
            $SalespersonNom = "";
            $customer_NumSIREN = "";
            $customer_ComplementSIREN = "";
            $telex = "";
            $homepage = "";
            $customer_APE = "";
            $customer_ADG = "";
            $customer_NumCVI = "";
            $customer_NumTVA = "";
            $customer_NumAccise = "";
            $customer_PaymentTermsCode = "";
            $customer_HierarchieStatLibelle = "";
            $customer_LimitCredit = "";
            $customer_EquipeAgent = "";

            $general = new \StructType\General();
            $general->setCustomer(array(new \StructType\Customer (
                null,
                $refexterne,
                null,
                array($nom),
                array($nomrecherche),
                array($nom2),
                array($marque1),
                array($marque2),
                array($adresse1),
                array($adresse2),
                array($ville),
                array($codePostal),
                array($country),
                array($countryRegion),
                array($currencyCode),
                array($creditLimit),
                array($blocked),
                array($paymentMethodCode),
                array($custDiscGroup),
                array($salespersonCode),
                $SalespersonNom,
                array($customer_NumSIREN),
                array($customer_ComplementSIREN),
                array($mail),
                array($phone),
                array($mobilephone),
                array($telex),
                array($homepage),
                array($customer_APE),
                array($customer_ADG),
                array($customer_CustPriceGroup),
                array($customer_NumCVI),
                array($customer_NumTVA),
                array($customer_NumAccise),
                array($customer_PaymentTermsCode),
                $customer_EncoursDS = null,
                $customer_EncoursDSHorsPrimeurs = null,
                $customer_EncoursDSPrimeurs = null,
                $customer_Internet = null,
                $customer_Statut = null,
                $customer_ClientReference = null,
                $customer_ZoneGeo = null,
                $customer_ZoneGeoLibelle = null,
                $customer_Activite = null,
                $customer_ActiviteLibelle = null,
                $customer_Taille = null,
                $customer_TailleLibelle = null,
                $customer_Origine = null,
                $customer_OrigineLibelle = null,
                $customer_HierarchieStat = null,
                array($customer_HierarchieStatLibelle),
                $customer_FamilleBudget = null,
                $customer_FamilleBudgetLibelle = null,
                $customer_SoldeDu = null,
                array($customer_LimitCredit),
                array($customer_EquipeAgent),
                $customer_EquipeAgentNom = null,
                $customer_FamilleStat1 = null,
                $customer_FamilleStat1Libelle = null,
                $customer_FamilleStat2 = null,
                $customer_FamilleStat2Libelle = null,
                $customer_FamilleStat3 = null,
                $customer_FamilleStat3Libelle = null,
                $customer_FamilleStat4 = null,
                $customer_FamilleStat4Libelle = null,
                $customer_FamilleStat5 = null,
                $customer_FamilleStat5Libelle = null,
                $verif = "1"
            )));
            logger("Données client initialisées pour l'appel SOAP.");

            $client = new StructType\Client();
            $client->setCodeModele($idModele);

            $SC = new ServiceType\SC($options);
            logger("Service client initialisé.");

            $createClient = $SC->S015_Creation_Client_V2(new \StructType\S015_Creation_Client_V2(
                new \StructType\RootWSReturnError(
                    new \StructType\Header("", "", "", "", "", array(), "", "", "", "", "", "", "", "", "", "", "", array(), "", 0, 0, "", array(), array(), "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", 0, 0, "", "", array(), "", "", "", "", 0, 0, 0, 0, 0, 0, 0), null),
                new \StructType\RootWSVenteParametres (array(new \StructType\Vente (array($this->code_logiciel), $orderNo = null, $noDocExterne = null, $invoiceNo = null, $client))),
                new \StructType\RootWSClients(
                    $general
                )
            ));	

            logger("Appel du service client effectué.");

            if (!$createClient) {
                throw new Exception("Aucune réponse reçue du service web.");
            }

            // Vérification du résultat de la création du client
            if ($createClient->getWSReturnError()->getHeader()->getSuccess() === "OUI") { 
                //return $createClient->getWSClients()->getGeneral()->getCustomer()[0]->getCustomer_No();
                return $createClient->wSVenteClient->General->Customer[0]->Customer_No[0];
            } else {
                    throw new Exception("Erreur lors de l'appel du WS : " . $createClient->getWSReturnError()->getHeader()->getErrorMsg());
            }
        } catch (Exception $e) {
            logger('Erreur dans la création du client : ' . $e->getMessage());
            return null;  // Retourner null ou gérer l'erreur autrement selon vos besoins
    }

    }

    /**
     * existe Client numéro
     * @param :
     * $idClient CLI0087
     * @return bool
     */
    public function existNo($idClient){

        $options = array(
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => $this->wsdl_url,
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => $this->wsdl_login,
            WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => $this->wsdl_pass,
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
            new \StructType\RootWSVenteParametres (array( new \StructType\Vente (array($this->code_logiciel)))),
            new StructType\RootWSVenteClient(
                $clients
            )));

        if(is_bool($checkIdClient->getReturn_value())===true){
            $result = $checkIdClient->getReturn_value();
        }else{
            $result = "Erreur lors de l'appel du WS";
        }

        return $result;
    }

    /**
     * existe Client référence externe
     * @param :
     * $refExterne 789
     * @return bool
     */
    public function existRefExt($refExterne){

    }


}