<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMethodCode StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class PaymentMethodCode extends AbstractStructBase
{
    /**
     * The PaymentMethodCodeVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PaymentMethodCodeVide = null;
    /**
     * Constructor method for PaymentMethodCode
     * @uses PaymentMethodCode::setPaymentMethodCodeVide()
     * @param string $paymentMethodCodeVide
     */
    public function __construct(?string $paymentMethodCodeVide = null)
    {
        $this
            ->setPaymentMethodCodeVide($paymentMethodCodeVide);
    }
    /**
     * Get PaymentMethodCodeVide value
     * @return string|null
     */
    public function getPaymentMethodCodeVide(): ?string
    {
        return $this->PaymentMethodCodeVide;
    }
    /**
     * Set PaymentMethodCodeVide value
     * @param string $paymentMethodCodeVide
     * @return \StructType\PaymentMethodCode
     */
    public function setPaymentMethodCodeVide(?string $paymentMethodCodeVide = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethodCodeVide) && !is_string($paymentMethodCodeVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethodCodeVide, true), gettype($paymentMethodCodeVide)), __LINE__);
        }
        $this->PaymentMethodCodeVide = $paymentMethodCodeVide;
        
        return $this;
    }
}
