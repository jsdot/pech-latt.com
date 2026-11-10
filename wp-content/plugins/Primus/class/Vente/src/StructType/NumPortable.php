<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumPortable StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NumPortable extends AbstractStructBase
{
    /**
     * The NumPortableVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NumPortableVide = null;
    /**
     * Constructor method for NumPortable
     * @uses NumPortable::setNumPortableVide()
     * @param string $numPortableVide
     */
    public function __construct(?string $numPortableVide = null)
    {
        $this
            ->setNumPortableVide($numPortableVide);
    }
    /**
     * Get NumPortableVide value
     * @return string|null
     */
    public function getNumPortableVide(): ?string
    {
        return $this->NumPortableVide;
    }
    /**
     * Set NumPortableVide value
     * @param string $numPortableVide
     * @return \StructType\NumPortable
     */
    public function setNumPortableVide(?string $numPortableVide = null): self
    {
        // validation for constraint: string
        if (!is_null($numPortableVide) && !is_string($numPortableVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numPortableVide, true), gettype($numPortableVide)), __LINE__);
        }
        $this->NumPortableVide = $numPortableVide;
        
        return $this;
    }
}
