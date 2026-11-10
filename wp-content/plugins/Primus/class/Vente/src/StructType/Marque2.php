<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Marque2 StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Marque2 extends AbstractStructBase
{
    /**
     * The Marque2Vide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Marque2Vide = null;
    /**
     * Constructor method for Marque2
     * @uses Marque2::setMarque2Vide()
     * @param string $marque2Vide
     */
    public function __construct(?string $marque2Vide = null)
    {
        $this
            ->setMarque2Vide($marque2Vide);
    }
    /**
     * Get Marque2Vide value
     * @return string|null
     */
    public function getMarque2Vide(): ?string
    {
        return $this->Marque2Vide;
    }
    /**
     * Set Marque2Vide value
     * @param string $marque2Vide
     * @return \StructType\Marque2
     */
    public function setMarque2Vide(?string $marque2Vide = null): self
    {
        // validation for constraint: string
        if (!is_null($marque2Vide) && !is_string($marque2Vide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marque2Vide, true), gettype($marque2Vide)), __LINE__);
        }
        $this->Marque2Vide = $marque2Vide;
        
        return $this;
    }
}
