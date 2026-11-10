<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyCode StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class CurrencyCode extends AbstractStructBase
{
    /**
     * The CurrencyCodeVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CurrencyCodeVide = null;
    /**
     * Constructor method for CurrencyCode
     * @uses CurrencyCode::setCurrencyCodeVide()
     * @param string $currencyCodeVide
     */
    public function __construct(?string $currencyCodeVide = null)
    {
        $this
            ->setCurrencyCodeVide($currencyCodeVide);
    }
    /**
     * Get CurrencyCodeVide value
     * @return string|null
     */
    public function getCurrencyCodeVide(): ?string
    {
        return $this->CurrencyCodeVide;
    }
    /**
     * Set CurrencyCodeVide value
     * @param string $currencyCodeVide
     * @return \StructType\CurrencyCode
     */
    public function setCurrencyCodeVide(?string $currencyCodeVide = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCodeVide) && !is_string($currencyCodeVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCodeVide, true), gettype($currencyCodeVide)), __LINE__);
        }
        $this->CurrencyCodeVide = $currencyCodeVide;
        
        return $this;
    }
}
