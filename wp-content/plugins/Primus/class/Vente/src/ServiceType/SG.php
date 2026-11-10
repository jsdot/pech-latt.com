<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SG ServiceType
 * @subpackage Services
 */
class SG extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named S013_Get_Statut_Commande
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S013_Get_Statut_Commande $parameters
     * @return \StructType\S013_Get_Statut_Commande_Result|bool
     */
    public function S013_Get_Statut_Commande(\StructType\S013_Get_Statut_Commande $parameters)
    {
        try {
            $this->setResult($resultS013_Get_Statut_Commande = $this->getSoapClient()->__soapCall('S013_Get_Statut_Commande', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS013_Get_Statut_Commande;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S014_Get_Statut_Reglement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S014_Get_Statut_Reglement $parameters
     * @return \StructType\S014_Get_Statut_Reglement_Result|bool
     */
    public function S014_Get_Statut_Reglement(\StructType\S014_Get_Statut_Reglement $parameters)
    {
        try {
            $this->setResult($resultS014_Get_Statut_Reglement = $this->getSoapClient()->__soapCall('S014_Get_Statut_Reglement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS014_Get_Statut_Reglement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S013_Get_Statut_Commande_Result|\StructType\S014_Get_Statut_Reglement_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
