<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for County StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class County extends AbstractStructBase
{
    /**
     * The CountyVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CountyVide = null;
    /**
     * Constructor method for County
     * @uses County::setCountyVide()
     * @param string $countyVide
     */
    public function __construct(?string $countyVide = null)
    {
        $this
            ->setCountyVide($countyVide);
    }
    /**
     * Get CountyVide value
     * @return string|null
     */
    public function getCountyVide(): ?string
    {
        return $this->CountyVide;
    }
    /**
     * Set CountyVide value
     * @param string $countyVide
     * @return \StructType\County
     */
    public function setCountyVide(?string $countyVide = null): self
    {
        // validation for constraint: string
        if (!is_null($countyVide) && !is_string($countyVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countyVide, true), gettype($countyVide)), __LINE__);
        }
        $this->CountyVide = $countyVide;
        
        return $this;
    }
}
