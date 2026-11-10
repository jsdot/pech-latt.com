<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SN ServiceType
 * @subpackage Services
 */
class SN extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named S008_New_LectureStock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S008_New_LectureStock $parameters
     * @return \StructType\S008_New_LectureStock_Result|bool
     */
    public function S008_New_LectureStock(\StructType\S008_New_LectureStock $parameters)
    {
        try {
            $this->setResult($resultS008_New_LectureStock = $this->getSoapClient()->__soapCall('S008_New_LectureStock', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS008_New_LectureStock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S008_New_LectureStock_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
