<?php

include DIR_PATH . 'Primus/class/Stock/src/ClassMap.php';
include DIR_PATH . 'Primus/class/Stock/src/ServiceType/SN.php';
foreach (glob(DIR_PATH . 'Primus/class/Stock/src/StructType/*.php') as $filename)
{
    include $filename;
}

/*include 'Stock/src/ClassMap.php';
include 'Stock/src/ServiceType/SN.php';
foreach (glob("Stock/src/StructType/*.php") as $filename)
{
    include $filename;
}*/

class PrimusStock
{

    public function __construct()
    {
        $wsdl = get_option('primus_url');
        $setting = get_option('primus_wsdl_setting');

        $this->wsdl_url = $wsdl['stock'];
        $this->wsdl_login =  $setting['wsdl_login'];
        $this->wsdl_pass =  $setting['wsdl_pass'];
        $this->wsdl_logiciel =  $setting['code_logiciel'];

    }


    public function dataStock($reference){
        
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
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CONNECTION_TIMEOUT => 360000,
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create($headers),
        );

        $SN = new ServiceType\SN($options);

        $lecture = $SN->S008_New_LectureStock(new \StructType\S008_New_LectureStock(
            new StructType\RootWSReturnError(
                new StructType\Header("","","","","",array(),"","","","","","","","","","","",array(),"",0,0,"",array(),array(),"","","","","","","","","","","","","","","","","","","","",0,0,"","",array(),"","","","",0,0,0,0,0,0,0),null),
            new StructType\RootWSStockParametres (new \StructType\Stock ($this->wsdl_logiciel,"",$reference,"")),
            new StructType\RootWSDonneesParametres(new \StructType\Donnees("",null,null,null,null)),
            new StructType\RootWSStockOUT (null)));

        
        $all_stock = $lecture->getWSStockOUT()->getItem()[0]->getR_DetailsPostesStocks();
        
        $qte=0;

        foreach($all_stock as $stock){
            if($stock->getMagasin_Code()=="ZWMS"){
                $qte = $stock->getStockPhysique();     
            }
        }

        return $qte;

    }

}