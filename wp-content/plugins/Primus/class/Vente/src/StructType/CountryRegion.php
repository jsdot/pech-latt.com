<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryRegion StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class CountryRegion extends AbstractStructBase
{
    /**
     * The CountryRegionVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CountryRegionVide = null;
    /**
     * Constructor method for CountryRegion
     * @uses CountryRegion::setCountryRegionVide()
     * @param string $countryRegionVide
     */
    public function __construct(?string $countryRegionVide = null)
    {
        $this
            ->setCountryRegionVide($countryRegionVide);
    }
    /**
     * Get CountryRegionVide value
     * @return string|null
     */
    public function getCountryRegionVide(): ?string
    {
        return $this->CountryRegionVide;
    }
    /**
     * Set CountryRegionVide value
     * @param string $countryRegionVide
     * @return \StructType\CountryRegion
     */
    public function setCountryRegionVide(?string $countryRegionVide = null): self
    {
        // validation for constraint: string
        if (!is_null($countryRegionVide) && !is_string($countryRegionVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryRegionVide, true), gettype($countryRegionVide)), __LINE__);
        }
        $this->CountryRegionVide = $countryRegionVide;
        
        return $this;
    }
}
