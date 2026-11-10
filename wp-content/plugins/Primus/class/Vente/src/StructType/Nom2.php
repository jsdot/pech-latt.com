<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nom2 StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Nom2 extends AbstractStructBase
{
    /**
     * The Nom2Vide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Nom2Vide = null;
    /**
     * Constructor method for Nom2
     * @uses Nom2::setNom2Vide()
     * @param string $nom2Vide
     */
    public function __construct(?string $nom2Vide = null)
    {
        $this
            ->setNom2Vide($nom2Vide);
    }
    /**
     * Get Nom2Vide value
     * @return string|null
     */
    public function getNom2Vide(): ?string
    {
        return $this->Nom2Vide;
    }
    /**
     * Set Nom2Vide value
     * @param string $nom2Vide
     * @return \StructType\Nom2
     */
    public function setNom2Vide(?string $nom2Vide = null): self
    {
        // validation for constraint: string
        if (!is_null($nom2Vide) && !is_string($nom2Vide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nom2Vide, true), gettype($nom2Vide)), __LINE__);
        }
        $this->Nom2Vide = $nom2Vide;
        
        return $this;
    }
}
