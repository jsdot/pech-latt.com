<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SL ServiceType
 * @subpackage Services
 */
class SL extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named S001_Lecture_Stock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S001_Lecture_Stock $parameters
     * @return \StructType\S001_Lecture_Stock_Result|bool
     */
    public function S001_Lecture_Stock(\StructType\S001_Lecture_Stock $parameters)
    {
        try {
            $this->setResult($resultS001_Lecture_Stock = $this->getSoapClient()->__soapCall('S001_Lecture_Stock', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS001_Lecture_Stock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S002_Lecture_StockDetailPostes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S002_Lecture_StockDetailPostes $parameters
     * @return \StructType\S002_Lecture_StockDetailPostes_Result|bool
     */
    public function S002_Lecture_StockDetailPostes(\StructType\S002_Lecture_StockDetailPostes $parameters)
    {
        try {
            $this->setResult($resultS002_Lecture_StockDetailPostes = $this->getSoapClient()->__soapCall('S002_Lecture_StockDetailPostes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS002_Lecture_StockDetailPostes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S004_Lecture_StockDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S004_Lecture_StockDetail $parameters
     * @return \StructType\S004_Lecture_StockDetail_Result|bool
     */
    public function S004_Lecture_StockDetail(\StructType\S004_Lecture_StockDetail $parameters)
    {
        try {
            $this->setResult($resultS004_Lecture_StockDetail = $this->getSoapClient()->__soapCall('S004_Lecture_StockDetail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS004_Lecture_StockDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S006_Lecture_EtatRupturePFMS
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S006_Lecture_EtatRupturePFMS $parameters
     * @return \StructType\S006_Lecture_EtatRupturePFMS_Result|bool
     */
    public function S006_Lecture_EtatRupturePFMS(\StructType\S006_Lecture_EtatRupturePFMS $parameters)
    {
        try {
            $this->setResult($resultS006_Lecture_EtatRupturePFMS = $this->getSoapClient()->__soapCall('S006_Lecture_EtatRupturePFMS', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS006_Lecture_EtatRupturePFMS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S001_Lecture_Stock_Result|\StructType\S002_Lecture_StockDetailPostes_Result|\StructType\S004_Lecture_StockDetail_Result|\StructType\S006_Lecture_EtatRupturePFMS_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
