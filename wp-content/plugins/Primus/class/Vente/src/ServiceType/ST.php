<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for ST ServiceType
 * @subpackage Services
 */
class ST extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named S002_Test_Existence_Client_No
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S002_Test_Existence_Client_No $parameters
     * @return \StructType\S002_Test_Existence_Client_No_Result|bool
     */
    public function S002_Test_Existence_Client_No(\StructType\S002_Test_Existence_Client_No $parameters)
    {
        try {
            $this->setResult($resultS002_Test_Existence_Client_No = $this->getSoapClient()->__soapCall('S002_Test_Existence_Client_No', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS002_Test_Existence_Client_No;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            echo "<pre>";
            var_dump($soapFault);
            echo "</pre>";

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * S002_Test_Existence_Client_RefExterne
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S002_Test_Existence_Client_RefExterne $parameters
     * @return \StructType\S002_Test_Existence_Client_RefExterne_Result|bool
     */
    public function S002_Test_Existence_Client_RefExterne(\StructType\S002_Test_Existence_Client_RefExterne $parameters)
    {
        try {
            $this->setResult($resultS002_Test_Existence_Client_RefExterne = $this->getSoapClient()->__soapCall('S002_Test_Existence_Client_RefExterne', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS002_Test_Existence_Client_RefExterne;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * S007_Test_Existence_CourtageContrat_NoContrat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S007_Test_Existence_CourtageContrat_NoContrat $parameters
     * @return \StructType\S007_Test_Existence_CourtageContrat_NoContrat_Result|bool
     */
    public function S007_Test_Existence_CourtageContrat_NoContrat(\StructType\S007_Test_Existence_CourtageContrat_NoContrat $parameters)
    {
        try {
            $this->setResult($resultS007_Test_Existence_CourtageContrat_NoContrat = $this->getSoapClient()->__soapCall('S007_Test_Existence_CourtageContrat_NoContrat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS007_Test_Existence_CourtageContrat_NoContrat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * S007_Test_Existence_CourtageContrat_RefExterne
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S007_Test_Existence_CourtageContrat_RefExterne $parameters
     * @return \StructType\S007_Test_Existence_CourtageContrat_RefExterne_Result|bool
     */
    public function S007_Test_Existence_CourtageContrat_RefExterne(\StructType\S007_Test_Existence_CourtageContrat_RefExterne $parameters)
    {
        try {
            $this->setResult($resultS007_Test_Existence_CourtageContrat_RefExterne = $this->getSoapClient()->__soapCall('S007_Test_Existence_CourtageContrat_RefExterne', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS007_Test_Existence_CourtageContrat_RefExterne;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S011_TarifsOUT
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S011_TarifsOUT $parameters
     * @return \StructType\S011_TarifsOUT_Result|bool
     */
    public function S011_TarifsOUT(\StructType\S011_TarifsOUT $parameters)
    {
        try {
            $this->setResult($resultS011_TarifsOUT = $this->getSoapClient()->__soapCall('S011_TarifsOUT', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS011_TarifsOUT;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S002_Test_Existence_Client_No_Result|\StructType\S002_Test_Existence_Client_RefExterne_Result|\StructType\S007_Test_Existence_CourtageContrat_NoContrat_Result|\StructType\S007_Test_Existence_CourtageContrat_RefExterne_Result|\StructType\S011_TarifsOUT_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
