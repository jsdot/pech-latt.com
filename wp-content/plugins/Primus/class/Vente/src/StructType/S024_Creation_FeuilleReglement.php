<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S024_Creation_FeuilleReglement StructType
 * @subpackage Structs
 */
class S024_Creation_FeuilleReglement extends AbstractStructBase
{
    /**
     * The wSReturnError
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSReturnError
     */
    protected \StructType\RootWSReturnError $wSReturnError;
    /**
     * The wSVentesParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteParametres
     */
    protected \StructType\RootWSVenteParametres $wSVentesParametres;
    /**
     * The wSDonneesParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSDonneesParametres
     */
    protected \StructType\RootWSDonneesParametres $wSDonneesParametres;
    /**
     * The wSFeuilleReglement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSFeuilleReglement
     */
    protected \StructType\RootWSFeuilleReglement $wSFeuilleReglement;
    /**
     * Constructor method for S024_Creation_FeuilleReglement
     * @uses S024_Creation_FeuilleReglement::setWSReturnError()
     * @uses S024_Creation_FeuilleReglement::setWSVentesParametres()
     * @uses S024_Creation_FeuilleReglement::setWSDonneesParametres()
     * @uses S024_Creation_FeuilleReglement::setWSFeuilleReglement()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @param \StructType\RootWSFeuilleReglement $wSFeuilleReglement
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVentesParametres, \StructType\RootWSDonneesParametres $wSDonneesParametres, \StructType\RootWSFeuilleReglement $wSFeuilleReglement)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVentesParametres($wSVentesParametres)
            ->setWSDonneesParametres($wSDonneesParametres)
            ->setWSFeuilleReglement($wSFeuilleReglement);
    }
    /**
     * Get wSReturnError value
     * @return \StructType\RootWSReturnError
     */
    public function getWSReturnError(): \StructType\RootWSReturnError
    {
        return $this->wSReturnError;
    }
    /**
     * Set wSReturnError value
     * @param \StructType\RootWSReturnError $wSReturnError
     * @return \StructType\S024_Creation_FeuilleReglement
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVentesParametres value
     * @return \StructType\RootWSVenteParametres
     */
    public function getWSVentesParametres(): \StructType\RootWSVenteParametres
    {
        return $this->wSVentesParametres;
    }
    /**
     * Set wSVentesParametres value
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @return \StructType\S024_Creation_FeuilleReglement
     */
    public function setWSVentesParametres(\StructType\RootWSVenteParametres $wSVentesParametres): self
    {
        $this->wSVentesParametres = $wSVentesParametres;
        
        return $this;
    }
    /**
     * Get wSDonneesParametres value
     * @return \StructType\RootWSDonneesParametres
     */
    public function getWSDonneesParametres(): \StructType\RootWSDonneesParametres
    {
        return $this->wSDonneesParametres;
    }
    /**
     * Set wSDonneesParametres value
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @return \StructType\S024_Creation_FeuilleReglement
     */
    public function setWSDonneesParametres(\StructType\RootWSDonneesParametres $wSDonneesParametres): self
    {
        $this->wSDonneesParametres = $wSDonneesParametres;
        
        return $this;
    }
    /**
     * Get wSFeuilleReglement value
     * @return \StructType\RootWSFeuilleReglement
     */
    public function getWSFeuilleReglement(): \StructType\RootWSFeuilleReglement
    {
        return $this->wSFeuilleReglement;
    }
    /**
     * Set wSFeuilleReglement value
     * @param \StructType\RootWSFeuilleReglement $wSFeuilleReglement
     * @return \StructType\S024_Creation_FeuilleReglement
     */
    public function setWSFeuilleReglement(\StructType\RootWSFeuilleReglement $wSFeuilleReglement): self
    {
        $this->wSFeuilleReglement = $wSFeuilleReglement;
        
        return $this;
    }
}
