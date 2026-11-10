<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumSIRET StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NumSIRET extends AbstractStructBase
{
    /**
     * The NumSIRETVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NumSIRETVide = null;
    /**
     * Constructor method for NumSIRET
     * @uses NumSIRET::setNumSIRETVide()
     * @param string $numSIRETVide
     */
    public function __construct(?string $numSIRETVide = null)
    {
        $this
            ->setNumSIRETVide($numSIRETVide);
    }
    /**
     * Get NumSIRETVide value
     * @return string|null
     */
    public function getNumSIRETVide(): ?string
    {
        return $this->NumSIRETVide;
    }
    /**
     * Set NumSIRETVide value
     * @param string $numSIRETVide
     * @return \StructType\NumSIRET
     */
    public function setNumSIRETVide(?string $numSIRETVide = null): self
    {
        // validation for constraint: string
        if (!is_null($numSIRETVide) && !is_string($numSIRETVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numSIRETVide, true), gettype($numSIRETVide)), __LINE__);
        }
        $this->NumSIRETVide = $numSIRETVide;
        
        return $this;
    }
}
