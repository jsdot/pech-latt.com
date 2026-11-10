<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Information StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Information extends AbstractStructBase
{
    /**
     * The EntryNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EntryNo;
    /**
     * The GUID_Traitement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GUID_Traitement = null;
    /**
     * The NomUtilisateur
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NomUtilisateur = null;
    /**
     * Constructor method for Information
     * @uses Information::setEntryNo()
     * @uses Information::setGUID_Traitement()
     * @uses Information::setNomUtilisateur()
     * @param string $entryNo
     * @param string $gUID_Traitement
     * @param string $nomUtilisateur
     */
    public function __construct(string $entryNo, ?string $gUID_Traitement = null, ?string $nomUtilisateur = null)
    {
        $this
            ->setEntryNo($entryNo)
            ->setGUID_Traitement($gUID_Traitement)
            ->setNomUtilisateur($nomUtilisateur);
    }
    /**
     * Get EntryNo value
     * @return string
     */
    public function getEntryNo(): string
    {
        return $this->EntryNo;
    }
    /**
     * Set EntryNo value
     * @param string $entryNo
     * @return \StructType\Information
     */
    public function setEntryNo(string $entryNo): self
    {
        // validation for constraint: string
        if (!is_null($entryNo) && !is_string($entryNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryNo, true), gettype($entryNo)), __LINE__);
        }
        $this->EntryNo = $entryNo;
        
        return $this;
    }
    /**
     * Get GUID_Traitement value
     * @return string|null
     */
    public function getGUID_Traitement(): ?string
    {
        return $this->GUID_Traitement;
    }
    /**
     * Set GUID_Traitement value
     * @param string $gUID_Traitement
     * @return \StructType\Information
     */
    public function setGUID_Traitement(?string $gUID_Traitement = null): self
    {
        // validation for constraint: string
        if (!is_null($gUID_Traitement) && !is_string($gUID_Traitement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gUID_Traitement, true), gettype($gUID_Traitement)), __LINE__);
        }
        $this->GUID_Traitement = $gUID_Traitement;
        
        return $this;
    }
    /**
     * Get NomUtilisateur value
     * @return string|null
     */
    public function getNomUtilisateur(): ?string
    {
        return $this->NomUtilisateur;
    }
    /**
     * Set NomUtilisateur value
     * @param string $nomUtilisateur
     * @return \StructType\Information
     */
    public function setNomUtilisateur(?string $nomUtilisateur = null): self
    {
        // validation for constraint: string
        if (!is_null($nomUtilisateur) && !is_string($nomUtilisateur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomUtilisateur, true), gettype($nomUtilisateur)), __LINE__);
        }
        $this->NomUtilisateur = $nomUtilisateur;
        
        return $this;
    }
}
