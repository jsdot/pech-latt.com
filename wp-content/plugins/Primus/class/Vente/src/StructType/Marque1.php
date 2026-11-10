<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Marque1 StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Marque1 extends AbstractStructBase
{
    /**
     * The Marque1Vide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Marque1Vide = null;
    /**
     * Constructor method for Marque1
     * @uses Marque1::setMarque1Vide()
     * @param string $marque1Vide
     */
    public function __construct(?string $marque1Vide = null)
    {
        $this
            ->setMarque1Vide($marque1Vide);
    }
    /**
     * Get Marque1Vide value
     * @return string|null
     */
    public function getMarque1Vide(): ?string
    {
        return $this->Marque1Vide;
    }
    /**
     * Set Marque1Vide value
     * @param string $marque1Vide
     * @return \StructType\Marque1
     */
    public function setMarque1Vide(?string $marque1Vide = null): self
    {
        // validation for constraint: string
        if (!is_null($marque1Vide) && !is_string($marque1Vide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marque1Vide, true), gettype($marque1Vide)), __LINE__);
        }
        $this->Marque1Vide = $marque1Vide;
        
        return $this;
    }
}
