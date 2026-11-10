<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationCode StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class LocationCode extends AbstractStructBase
{
    /**
     * The LocationCodeVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $LocationCodeVide = null;
    /**
     * Constructor method for LocationCode
     * @uses LocationCode::setLocationCodeVide()
     * @param string $locationCodeVide
     */
    public function __construct(?string $locationCodeVide = null)
    {
        $this
            ->setLocationCodeVide($locationCodeVide);
    }
    /**
     * Get LocationCodeVide value
     * @return string|null
     */
    public function getLocationCodeVide(): ?string
    {
        return $this->LocationCodeVide;
    }
    /**
     * Set LocationCodeVide value
     * @param string $locationCodeVide
     * @return \StructType\LocationCode
     */
    public function setLocationCodeVide(?string $locationCodeVide = null): self
    {
        // validation for constraint: string
        if (!is_null($locationCodeVide) && !is_string($locationCodeVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCodeVide, true), gettype($locationCodeVide)), __LINE__);
        }
        $this->LocationCodeVide = $locationCodeVide;
        
        return $this;
    }
}
