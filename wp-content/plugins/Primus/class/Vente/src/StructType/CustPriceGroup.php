<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustPriceGroup StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class CustPriceGroup extends AbstractStructBase
{
    /**
     * The CustPriceGroupVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CustPriceGroupVide = null;
    /**
     * Constructor method for CustPriceGroup
     * @uses CustPriceGroup::setCustPriceGroupVide()
     * @param string $custPriceGroupVide
     */
    public function __construct(?string $custPriceGroupVide = null)
    {
        $this
            ->setCustPriceGroupVide($custPriceGroupVide);
    }
    /**
     * Get CustPriceGroupVide value
     * @return string|null
     */
    public function getCustPriceGroupVide(): ?string
    {
        return $this->CustPriceGroupVide;
    }
    /**
     * Set CustPriceGroupVide value
     * @param string $custPriceGroupVide
     * @return \StructType\CustPriceGroup
     */
    public function setCustPriceGroupVide(?string $custPriceGroupVide = null): self
    {
        // validation for constraint: string
        if (!is_null($custPriceGroupVide) && !is_string($custPriceGroupVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custPriceGroupVide, true), gettype($custPriceGroupVide)), __LINE__);
        }
        $this->CustPriceGroupVide = $custPriceGroupVide;
        
        return $this;
    }
}
