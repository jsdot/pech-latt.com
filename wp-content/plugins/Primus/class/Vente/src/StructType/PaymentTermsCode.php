<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTermsCode StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class PaymentTermsCode extends AbstractStructBase
{
    /**
     * The PaymentTermsCodeVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PaymentTermsCodeVide = null;
    /**
     * Constructor method for PaymentTermsCode
     * @uses PaymentTermsCode::setPaymentTermsCodeVide()
     * @param string $paymentTermsCodeVide
     */
    public function __construct(?string $paymentTermsCodeVide = null)
    {
        $this
            ->setPaymentTermsCodeVide($paymentTermsCodeVide);
    }
    /**
     * Get PaymentTermsCodeVide value
     * @return string|null
     */
    public function getPaymentTermsCodeVide(): ?string
    {
        return $this->PaymentTermsCodeVide;
    }
    /**
     * Set PaymentTermsCodeVide value
     * @param string $paymentTermsCodeVide
     * @return \StructType\PaymentTermsCode
     */
    public function setPaymentTermsCodeVide(?string $paymentTermsCodeVide = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentTermsCodeVide) && !is_string($paymentTermsCodeVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentTermsCodeVide, true), gettype($paymentTermsCodeVide)), __LINE__);
        }
        $this->PaymentTermsCodeVide = $paymentTermsCodeVide;
        
        return $this;
    }
}
