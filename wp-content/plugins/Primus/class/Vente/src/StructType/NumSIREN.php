<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumSIREN StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NumSIREN extends AbstractStructBase
{
    /**
     * The NumSIRENVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NumSIRENVide = null;
    /**
     * Constructor method for NumSIREN
     * @uses NumSIREN::setNumSIRENVide()
     * @param string $numSIRENVide
     */
    public function __construct(?string $numSIRENVide = null)
    {
        $this
            ->setNumSIRENVide($numSIRENVide);
    }
    /**
     * Get NumSIRENVide value
     * @return string|null
     */
    public function getNumSIRENVide(): ?string
    {
        return $this->NumSIRENVide;
    }
    /**
     * Set NumSIRENVide value
     * @param string $numSIRENVide
     * @return \StructType\NumSIREN
     */
    public function setNumSIRENVide(?string $numSIRENVide = null): self
    {
        // validation for constraint: string
        if (!is_null($numSIRENVide) && !is_string($numSIRENVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numSIRENVide, true), gettype($numSIRENVide)), __LINE__);
        }
        $this->NumSIRENVide = $numSIRENVide;
        
        return $this;
    }
}
