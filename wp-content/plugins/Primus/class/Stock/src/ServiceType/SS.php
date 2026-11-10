<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SS ServiceType
 * @subpackage Services
 */
class SS extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named S003_Supprime_StockDetailPostes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S003_Supprime_StockDetailPostes $parameters
     * @return \StructType\S003_Supprime_StockDetailPostes_Result|bool
     */
    public function S003_Supprime_StockDetailPostes(\StructType\S003_Supprime_StockDetailPostes $parameters)
    {
        try {
            $this->setResult($resultS003_Supprime_StockDetailPostes = $this->getSoapClient()->__soapCall('S003_Supprime_StockDetailPostes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS003_Supprime_StockDetailPostes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S005_Supprime_StockDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S005_Supprime_StockDetail $parameters
     * @return \StructType\S005_Supprime_StockDetail_Result|bool
     */
    public function S005_Supprime_StockDetail(\StructType\S005_Supprime_StockDetail $parameters)
    {
        try {
            $this->setResult($resultS005_Supprime_StockDetail = $this->getSoapClient()->__soapCall('S005_Supprime_StockDetail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS005_Supprime_StockDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S007_Supprime_EtatRupturePFMS
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S007_Supprime_EtatRupturePFMS $parameters
     * @return \StructType\S007_Supprime_EtatRupturePFMS_Result|bool
     */
    public function S007_Supprime_EtatRupturePFMS(\StructType\S007_Supprime_EtatRupturePFMS $parameters)
    {
        try {
            $this->setResult($resultS007_Supprime_EtatRupturePFMS = $this->getSoapClient()->__soapCall('S007_Supprime_EtatRupturePFMS', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS007_Supprime_EtatRupturePFMS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S003_Supprime_StockDetailPostes_Result|\StructType\S005_Supprime_StockDetail_Result|\StructType\S007_Supprime_EtatRupturePFMS_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
