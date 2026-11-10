<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSReglementOUT StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSReglementOUT
 * @subpackage Structs
 */
class RootWSReglementOUT extends AbstractStructBase
{
    /**
     * The Societe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Societe;
    /**
     * The Facture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Facture|null
     */
    protected ?\StructType\Facture $Facture = null;
    /**
     * Constructor method for RootWSReglementOUT
     * @uses RootWSReglementOUT::setSociete()
     * @uses RootWSReglementOUT::setFacture()
     * @param string $societe
     * @param \StructType\Facture $facture
     */
    public function __construct(string $societe, ?\StructType\Facture $facture = null)
    {
        $this
            ->setSociete($societe)
            ->setFacture($facture);
    }
    /**
     * Get Societe value
     * @return string
     */
    public function getSociete(): string
    {
        return $this->Societe;
    }
    /**
     * Set Societe value
     * @param string $societe
     * @return \StructType\RootWSReglementOUT
     */
    public function setSociete(string $societe): self
    {
        // validation for constraint: string
        if (!is_null($societe) && !is_string($societe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($societe, true), gettype($societe)), __LINE__);
        }
        $this->Societe = $societe;
        
        return $this;
    }
    /**
     * Get Facture value
     * @return \StructType\Facture|null
     */
    public function getFacture(): ?\StructType\Facture
    {
        return $this->Facture;
    }
    /**
     * Set Facture value
     * @param \StructType\Facture $facture
     * @return \StructType\RootWSReglementOUT
     */
    public function setFacture(?\StructType\Facture $facture = null): self
    {
        $this->Facture = $facture;
        
        return $this;
    }
}
