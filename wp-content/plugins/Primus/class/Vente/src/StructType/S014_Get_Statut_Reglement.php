<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S014_Get_Statut_Reglement StructType
 * @subpackage Structs
 */
class S014_Get_Statut_Reglement extends AbstractStructBase
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
     * The wSVenteParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteParametres
     */
    protected \StructType\RootWSVenteParametres $wSVenteParametres;
    /**
     * The wSReglementOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSReglementOUT
     */
    protected \StructType\RootWSReglementOUT $wSReglementOUT;
    /**
     * Constructor method for S014_Get_Statut_Reglement
     * @uses S014_Get_Statut_Reglement::setWSReturnError()
     * @uses S014_Get_Statut_Reglement::setWSVenteParametres()
     * @uses S014_Get_Statut_Reglement::setWSReglementOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSReglementOUT $wSReglementOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSReglementOUT $wSReglementOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametres($wSVenteParametres)
            ->setWSReglementOUT($wSReglementOUT);
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
     * @return \StructType\S014_Get_Statut_Reglement
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVenteParametres value
     * @return \StructType\RootWSVenteParametres
     */
    public function getWSVenteParametres(): \StructType\RootWSVenteParametres
    {
        return $this->wSVenteParametres;
    }
    /**
     * Set wSVenteParametres value
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @return \StructType\S014_Get_Statut_Reglement
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
        return $this;
    }
    /**
     * Get wSReglementOUT value
     * @return \StructType\RootWSReglementOUT
     */
    public function getWSReglementOUT(): \StructType\RootWSReglementOUT
    {
        return $this->wSReglementOUT;
    }
    /**
     * Set wSReglementOUT value
     * @param \StructType\RootWSReglementOUT $wSReglementOUT
     * @return \StructType\S014_Get_Statut_Reglement
     */
    public function setWSReglementOUT(\StructType\RootWSReglementOUT $wSReglementOUT): self
    {
        $this->wSReglementOUT = $wSReglementOUT;
        
        return $this;
    }
}
