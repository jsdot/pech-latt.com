<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Echeance StructType
 * @subpackage Structs
 */
class Echeance extends AbstractStructBase
{
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $DueDate;
    /**
     * The AmountDue
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $AmountDue;
    /**
     * The PaymentMethodCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $PaymentMethodCode;
    /**
     * Constructor method for Echeance
     * @uses Echeance::setDueDate()
     * @uses Echeance::setAmountDue()
     * @uses Echeance::setPaymentMethodCode()
     * @param string[] $dueDate
     * @param float $amountDue
     * @param string $paymentMethodCode
     */
    public function __construct(array $dueDate, float $amountDue, string $paymentMethodCode)
    {
        $this
            ->setDueDate($dueDate)
            ->setAmountDue($amountDue)
            ->setPaymentMethodCode($paymentMethodCode);
    }
    /**
     * Get DueDate value
     * @return string[]
     */
    public function getDueDate(): array
    {
        return $this->DueDate;
    }
    /**
     * This method is responsible for validating the values passed to the setDueDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDueDate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDueDateForArrayConstraintsFromSetDueDate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $echeanceDueDateItem) {
            // validation for constraint: itemType
            if (!is_string($echeanceDueDateItem)) {
                $invalidValues[] = is_object($echeanceDueDateItem) ? get_class($echeanceDueDateItem) : sprintf('%s(%s)', gettype($echeanceDueDateItem), var_export($echeanceDueDateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DueDate property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DueDate value
     * @throws InvalidArgumentException
     * @param string[] $dueDate
     * @return \StructType\Echeance
     */
    public function setDueDate(array $dueDate): self
    {
        // validation for constraint: array
        if ('' !== ($dueDateArrayErrorMessage = self::validateDueDateForArrayConstraintsFromSetDueDate($dueDate))) {
            throw new InvalidArgumentException($dueDateArrayErrorMessage, __LINE__);
        }
        $this->DueDate = $dueDate;
        
        return $this;
    }
    /**
     * Add item to DueDate value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Echeance
     */
    public function addToDueDate(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The DueDate property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DueDate[] = $item;
        
        return $this;
    }
    /**
     * Get AmountDue value
     * @return float
     */
    public function getAmountDue(): float
    {
        return $this->AmountDue;
    }
    /**
     * Set AmountDue value
     * @param float $amountDue
     * @return \StructType\Echeance
     */
    public function setAmountDue(float $amountDue): self
    {
        // validation for constraint: float
        if (!is_null($amountDue) && !(is_float($amountDue) || is_numeric($amountDue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountDue, true), gettype($amountDue)), __LINE__);
        }
        $this->AmountDue = $amountDue;
        
        return $this;
    }
    /**
     * Get PaymentMethodCode value
     * @return string
     */
    public function getPaymentMethodCode(): string
    {
        return $this->PaymentMethodCode;
    }
    /**
     * Set PaymentMethodCode value
     * @param string $paymentMethodCode
     * @return \StructType\Echeance
     */
    public function setPaymentMethodCode(string $paymentMethodCode): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethodCode) && !is_string($paymentMethodCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethodCode, true), gettype($paymentMethodCode)), __LINE__);
        }
        $this->PaymentMethodCode = $paymentMethodCode;
        
        return $this;
    }
}
