<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumAccise StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NumAccise extends AbstractStructBase
{
    /**
     * The NumAcciseVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NumAcciseVide = null;
    /**
     * Constructor method for NumAccise
     * @uses NumAccise::setNumAcciseVide()
     * @param string $numAcciseVide
     */
    public function __construct(?string $numAcciseVide = null)
    {
        $this
            ->setNumAcciseVide($numAcciseVide);
    }
    /**
     * Get NumAcciseVide value
     * @return string|null
     */
    public function getNumAcciseVide(): ?string
    {
        return $this->NumAcciseVide;
    }
    /**
     * Set NumAcciseVide value
     * @param string $numAcciseVide
     * @return \StructType\NumAccise
     */
    public function setNumAcciseVide(?string $numAcciseVide = null): self
    {
        // validation for constraint: string
        if (!is_null($numAcciseVide) && !is_string($numAcciseVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numAcciseVide, true), gettype($numAcciseVide)), __LINE__);
        }
        $this->NumAcciseVide = $numAcciseVide;
        
        return $this;
    }
}
