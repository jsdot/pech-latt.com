<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SC ServiceType
 * @subpackage Services
 */
class SC extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named S001_Creation_Client
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S001_Creation_Client $parameters
     * @return \StructType\S001_Creation_Client_Result|bool
     */
    public function S001_Creation_Client(\StructType\S001_Creation_Client $parameters)
    {
        try {
            $this->setResult($resultS001_Creation_Client = $this->getSoapClient()->__soapCall('S001_Creation_Client', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS001_Creation_Client;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S005_Creation_CourtageContrat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S005_Creation_CourtageContrat $parameters
     * @return \StructType\S005_Creation_CourtageContrat_Result|bool
     */
    public function S005_Creation_CourtageContrat(\StructType\S005_Creation_CourtageContrat $parameters)
    {
        try {
            $this->setResult($resultS005_Creation_CourtageContrat = $this->getSoapClient()->__soapCall('S005_Creation_CourtageContrat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS005_Creation_CourtageContrat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S012_Creation_Commande
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S012_Creation_Commande $parameters
     * @return \StructType\S012_Creation_Commande_Result|bool
     */
    public function S012_Creation_Commande(\StructType\S012_Creation_Commande $parameters)
    {
        try {
            $this->setResult($resultS012_Creation_Commande = $this->getSoapClient()->__soapCall('S012_Creation_Commande', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS012_Creation_Commande;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            
            return false;
        }
    }
    /**
     * Method to call the operation originally named S015_Creation_Client_V2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S015_Creation_Client_V2 $parameters
     * @return \StructType\S015_Creation_Client_V2_Result|bool
     */
    public function S015_Creation_Client_V2(\StructType\S015_Creation_Client_V2 $parameters)
    {
        try {
            $this->setResult($resultS015_Creation_Client_V2 = $this->getSoapClient()->__soapCall('S015_Creation_Client_V2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS015_Creation_Client_V2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S023_Creation_Contact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S023_Creation_Contact $parameters
     * @return \StructType\S023_Creation_Contact_Result|bool
     */
    public function S023_Creation_Contact(\StructType\S023_Creation_Contact $parameters)
    {
        try {
            $this->setResult($resultS023_Creation_Contact = $this->getSoapClient()->__soapCall('S023_Creation_Contact', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS023_Creation_Contact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S024_Creation_FeuilleReglement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S024_Creation_FeuilleReglement $parameters
     * @return \StructType\S024_Creation_FeuilleReglement_Result|bool
     */
    public function S024_Creation_FeuilleReglement(\StructType\S024_Creation_FeuilleReglement $parameters)
    {
        try {
            $this->setResult($resultS024_Creation_FeuilleReglement = $this->getSoapClient()->__soapCall('S024_Creation_FeuilleReglement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS024_Creation_FeuilleReglement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S001_Creation_Client_Result|\StructType\S005_Creation_CourtageContrat_Result|\StructType\S012_Creation_Commande_Result|\StructType\S015_Creation_Client_V2_Result|\StructType\S023_Creation_Contact_Result|\StructType\S024_Creation_FeuilleReglement_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
