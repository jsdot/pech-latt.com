<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SM ServiceType
 * @subpackage Services
 */
class SM extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named S003_Modification_Client
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S003_Modification_Client $parameters
     * @return \StructType\S003_Modification_Client_Result|bool
     */
    public function S003_Modification_Client(\StructType\S003_Modification_Client $parameters)
    {
        try {
            $this->setResult($resultS003_Modification_Client = $this->getSoapClient()->__soapCall('S003_Modification_Client', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS003_Modification_Client;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S006_Modification_CourtageContrat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S006_Modification_CourtageContrat $parameters
     * @return \StructType\S006_Modification_CourtageContrat_Result|bool
     */
    public function S006_Modification_CourtageContrat(\StructType\S006_Modification_CourtageContrat $parameters)
    {
        try {
            $this->setResult($resultS006_Modification_CourtageContrat = $this->getSoapClient()->__soapCall('S006_Modification_CourtageContrat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS006_Modification_CourtageContrat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S009_MajListeClients
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S009_MajListeClients $parameters
     * @return \StructType\S009_MajListeClients_Result|bool
     */
    public function S009_MajListeClients(\StructType\S009_MajListeClients $parameters)
    {
        try {
            $this->setResult($resultS009_MajListeClients = $this->getSoapClient()->__soapCall('S009_MajListeClients', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS009_MajListeClients;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S003_Modification_Client_Result|\StructType\S006_Modification_CourtageContrat_Result|\StructType\S009_MajListeClients_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
