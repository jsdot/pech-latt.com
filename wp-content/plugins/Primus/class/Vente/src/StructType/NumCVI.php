<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumCVI StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NumCVI extends AbstractStructBase
{
    /**
     * The NumCVIVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NumCVIVide = null;
    /**
     * Constructor method for NumCVI
     * @uses NumCVI::setNumCVIVide()
     * @param string $numCVIVide
     */
    public function __construct(?string $numCVIVide = null)
    {
        $this
            ->setNumCVIVide($numCVIVide);
    }
    /**
     * Get NumCVIVide value
     * @return string|null
     */
    public function getNumCVIVide(): ?string
    {
        return $this->NumCVIVide;
    }
    /**
     * Set NumCVIVide value
     * @param string $numCVIVide
     * @return \StructType\NumCVI
     */
    public function setNumCVIVide(?string $numCVIVide = null): self
    {
        // validation for constraint: string
        if (!is_null($numCVIVide) && !is_string($numCVIVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numCVIVide, true), gettype($numCVIVide)), __LINE__);
        }
        $this->NumCVIVide = $numCVIVide;
        
        return $this;
    }
}
