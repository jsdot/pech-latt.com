<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumTVA StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NumTVA extends AbstractStructBase
{
    /**
     * The NumTVAVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NumTVAVide = null;
    /**
     * Constructor method for NumTVA
     * @uses NumTVA::setNumTVAVide()
     * @param string $numTVAVide
     */
    public function __construct(?string $numTVAVide = null)
    {
        $this
            ->setNumTVAVide($numTVAVide);
    }
    /**
     * Get NumTVAVide value
     * @return string|null
     */
    public function getNumTVAVide(): ?string
    {
        return $this->NumTVAVide;
    }
    /**
     * Set NumTVAVide value
     * @param string $numTVAVide
     * @return \StructType\NumTVA
     */
    public function setNumTVAVide(?string $numTVAVide = null): self
    {
        // validation for constraint: string
        if (!is_null($numTVAVide) && !is_string($numTVAVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numTVAVide, true), gettype($numTVAVide)), __LINE__);
        }
        $this->NumTVAVide = $numTVAVide;
        
        return $this;
    }
}
