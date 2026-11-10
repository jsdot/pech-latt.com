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
     * Method to call the operation originally named S004_Lecture_Client
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S004_Lecture_Client $parameters
     * @return \StructType\S004_Lecture_Client_Result|bool
     */
    public function S004_Lecture_Client(\StructType\S004_Lecture_Client $parameters)
    {
        try {
            $this->setResult($resultS004_Lecture_Client = $this->getSoapClient()->__soapCall('S004_Lecture_Client', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS004_Lecture_Client;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S008_Lecture_CourtageContrat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S008_Lecture_CourtageContrat $parameters
     * @return \StructType\S008_Lecture_CourtageContrat_Result|bool
     */
    public function S008_Lecture_CourtageContrat(\StructType\S008_Lecture_CourtageContrat $parameters)
    {
        try {
            $this->setResult($resultS008_Lecture_CourtageContrat = $this->getSoapClient()->__soapCall('S008_Lecture_CourtageContrat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS008_Lecture_CourtageContrat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S010_Lecture_EnCours_Client
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S010_Lecture_EnCours_Client $parameters
     * @return \StructType\S010_Lecture_EnCours_Client_Result|bool
     */
    public function S010_Lecture_EnCours_Client(\StructType\S010_Lecture_EnCours_Client $parameters)
    {
        try {
            $this->setResult($resultS010_Lecture_EnCours_Client = $this->getSoapClient()->__soapCall('S010_Lecture_EnCours_Client', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS010_Lecture_EnCours_Client;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S016_Lecture_MajContacts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S016_Lecture_MajContacts $parameters
     * @return \StructType\S016_Lecture_MajContacts_Result|bool
     */
    public function S016_Lecture_MajContacts(\StructType\S016_Lecture_MajContacts $parameters)
    {
        try {
            $this->setResult($resultS016_Lecture_MajContacts = $this->getSoapClient()->__soapCall('S016_Lecture_MajContacts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS016_Lecture_MajContacts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S017_Lecture_MajVendeurs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S017_Lecture_MajVendeurs $parameters
     * @return \StructType\S017_Lecture_MajVendeurs_Result|bool
     */
    public function S017_Lecture_MajVendeurs(\StructType\S017_Lecture_MajVendeurs $parameters)
    {
        try {
            $this->setResult($resultS017_Lecture_MajVendeurs = $this->getSoapClient()->__soapCall('S017_Lecture_MajVendeurs', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS017_Lecture_MajVendeurs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S018_Lecture_Factures
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S018_Lecture_Factures $parameters
     * @return \StructType\S018_Lecture_Factures_Result|bool
     */
    public function S018_Lecture_Factures(\StructType\S018_Lecture_Factures $parameters)
    {
        try {
            $this->setResult($resultS018_Lecture_Factures = $this->getSoapClient()->__soapCall('S018_Lecture_Factures', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS018_Lecture_Factures;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S019_Lecture_Avoirs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S019_Lecture_Avoirs $parameters
     * @return \StructType\S019_Lecture_Avoirs_Result|bool
     */
    public function S019_Lecture_Avoirs(\StructType\S019_Lecture_Avoirs $parameters)
    {
        try {
            $this->setResult($resultS019_Lecture_Avoirs = $this->getSoapClient()->__soapCall('S019_Lecture_Avoirs', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS019_Lecture_Avoirs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S020_Lecture_Commandes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S020_Lecture_Commandes $parameters
     * @return \StructType\S020_Lecture_Commandes_Result|bool
     */
    public function S020_Lecture_Commandes(\StructType\S020_Lecture_Commandes $parameters)
    {
        try {
            $this->setResult($resultS020_Lecture_Commandes = $this->getSoapClient()->__soapCall('S020_Lecture_Commandes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS020_Lecture_Commandes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S021_Lecture_Avoirs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S021_Lecture_Avoirs $parameters
     * @return \StructType\S021_Lecture_Avoirs_Result|bool
     */
    public function S021_Lecture_Avoirs(\StructType\S021_Lecture_Avoirs $parameters)
    {
        try {
            $this->setResult($resultS021_Lecture_Avoirs = $this->getSoapClient()->__soapCall('S021_Lecture_Avoirs', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS021_Lecture_Avoirs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S022_LectureEquipesAgents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S022_LectureEquipesAgents $parameters
     * @return \StructType\S022_LectureEquipesAgents_Result|bool
     */
    public function S022_LectureEquipesAgents(\StructType\S022_LectureEquipesAgents $parameters)
    {
        try {
            $this->setResult($resultS022_LectureEquipesAgents = $this->getSoapClient()->__soapCall('S022_LectureEquipesAgents', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS022_LectureEquipesAgents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named S025_Lecture_Client_V2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\S025_Lecture_Client_V2 $parameters
     * @return \StructType\S025_Lecture_Client_V2_Result|bool
     */
    public function S025_Lecture_Client_V2(\StructType\S025_Lecture_Client_V2 $parameters)
    {
        try {
            $this->setResult($resultS025_Lecture_Client_V2 = $this->getSoapClient()->__soapCall('S025_Lecture_Client_V2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultS025_Lecture_Client_V2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\S004_Lecture_Client_Result|\StructType\S008_Lecture_CourtageContrat_Result|\StructType\S010_Lecture_EnCours_Client_Result|\StructType\S016_Lecture_MajContacts_Result|\StructType\S017_Lecture_MajVendeurs_Result|\StructType\S018_Lecture_Factures_Result|\StructType\S019_Lecture_Avoirs_Result|\StructType\S020_Lecture_Commandes_Result|\StructType\S021_Lecture_Avoirs_Result|\StructType\S022_LectureEquipesAgents_Result|\StructType\S025_Lecture_Client_V2_Result
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
