<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalespersonCode StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class SalespersonCode extends AbstractStructBase
{
    /**
     * The SalespersonCodeVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SalespersonCodeVide = null;
    /**
     * Constructor method for SalespersonCode
     * @uses SalespersonCode::setSalespersonCodeVide()
     * @param string $salespersonCodeVide
     */
    public function __construct(?string $salespersonCodeVide = null)
    {
        $this
            ->setSalespersonCodeVide($salespersonCodeVide);
    }
    /**
     * Get SalespersonCodeVide value
     * @return string|null
     */
    public function getSalespersonCodeVide(): ?string
    {
        return $this->SalespersonCodeVide;
    }
    /**
     * Set SalespersonCodeVide value
     * @param string $salespersonCodeVide
     * @return \StructType\SalespersonCode
     */
    public function setSalespersonCodeVide(?string $salespersonCodeVide = null): self
    {
        // validation for constraint: string
        if (!is_null($salespersonCodeVide) && !is_string($salespersonCodeVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salespersonCodeVide, true), gettype($salespersonCodeVide)), __LINE__);
        }
        $this->SalespersonCodeVide = $salespersonCodeVide;
        
        return $this;
    }
}
