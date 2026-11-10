<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumTelephone StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NumTelephone extends AbstractStructBase
{
    /**
     * The NumTelephoneVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NumTelephoneVide = null;
    /**
     * Constructor method for NumTelephone
     * @uses NumTelephone::setNumTelephoneVide()
     * @param string $numTelephoneVide
     */
    public function __construct(?string $numTelephoneVide = null)
    {
        $this
            ->setNumTelephoneVide($numTelephoneVide);
    }
    /**
     * Get NumTelephoneVide value
     * @return string|null
     */
    public function getNumTelephoneVide(): ?string
    {
        return $this->NumTelephoneVide;
    }
    /**
     * Set NumTelephoneVide value
     * @param string $numTelephoneVide
     * @return \StructType\NumTelephone
     */
    public function setNumTelephoneVide(?string $numTelephoneVide = null): self
    {
        // validation for constraint: string
        if (!is_null($numTelephoneVide) && !is_string($numTelephoneVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numTelephoneVide, true), gettype($numTelephoneVide)), __LINE__);
        }
        $this->NumTelephoneVide = $numTelephoneVide;
        
        return $this;
    }
}
