<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditLimit StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class CreditLimit extends AbstractStructBase
{
    /**
     * The CreditLimitVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CreditLimitVide = null;
    /**
     * Constructor method for CreditLimit
     * @uses CreditLimit::setCreditLimitVide()
     * @param string $creditLimitVide
     */
    public function __construct(?string $creditLimitVide = null)
    {
        $this
            ->setCreditLimitVide($creditLimitVide);
    }
    /**
     * Get CreditLimitVide value
     * @return string|null
     */
    public function getCreditLimitVide(): ?string
    {
        return $this->CreditLimitVide;
    }
    /**
     * Set CreditLimitVide value
     * @param string $creditLimitVide
     * @return \StructType\CreditLimit
     */
    public function setCreditLimitVide(?string $creditLimitVide = null): self
    {
        // validation for constraint: string
        if (!is_null($creditLimitVide) && !is_string($creditLimitVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditLimitVide, true), gettype($creditLimitVide)), __LINE__);
        }
        $this->CreditLimitVide = $creditLimitVide;
        
        return $this;
    }
}
