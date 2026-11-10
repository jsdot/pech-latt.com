<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Facture StructType
 * @subpackage Structs
 */
class Facture extends AbstractStructBase
{
    /**
     * The OrderNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $OrderNo;
    /**
     * The CustomerNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $CustomerNo;
    /**
     * The InvoiceNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $InvoiceNo;
    /**
     * The PostingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $PostingDate;
    /**
     * The NoDocExterne
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $NoDocExterne;
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $AmountPaid;
    /**
     * The StatutReglement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $StatutReglement;
    /**
     * The Line
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Line[]
     */
    protected array $Line;
    /**
     * The Echeance
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Echeance[]
     */
    protected ?array $Echeance = null;
    /**
     * Constructor method for Facture
     * @uses Facture::setOrderNo()
     * @uses Facture::setCustomerNo()
     * @uses Facture::setInvoiceNo()
     * @uses Facture::setPostingDate()
     * @uses Facture::setNoDocExterne()
     * @uses Facture::setAmountPaid()
     * @uses Facture::setStatutReglement()
     * @uses Facture::setLine()
     * @uses Facture::setEcheance()
     * @param string[] $orderNo
     * @param string[] $customerNo
     * @param string[] $invoiceNo
     * @param string[] $postingDate
     * @param string[] $noDocExterne
     * @param string[] $amountPaid
     * @param string[] $statutReglement
     * @param \StructType\Line[] $line
     * @param \StructType\Echeance[] $echeance
     */
    public function __construct(array $orderNo, array $customerNo, array $invoiceNo, array $postingDate, array $noDocExterne, array $amountPaid, array $statutReglement, array $line, ?array $echeance = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setCustomerNo($customerNo)
            ->setInvoiceNo($invoiceNo)
            ->setPostingDate($postingDate)
            ->setNoDocExterne($noDocExterne)
            ->setAmountPaid($amountPaid)
            ->setStatutReglement($statutReglement)
            ->setLine($line)
            ->setEcheance($echeance);
    }
    /**
     * Get OrderNo value
     * @return string[]
     */
    public function getOrderNo(): array
    {
        return $this->OrderNo;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderNoForArrayConstraintsFromSetOrderNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureOrderNoItem) {
            // validation for constraint: itemType
            if (!is_string($factureOrderNoItem)) {
                $invalidValues[] = is_object($factureOrderNoItem) ? get_class($factureOrderNoItem) : sprintf('%s(%s)', gettype($factureOrderNoItem), var_export($factureOrderNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrderNo value
     * @throws InvalidArgumentException
     * @param string[] $orderNo
     * @return \StructType\Facture
     */
    public function setOrderNo(array $orderNo): self
    {
        // validation for constraint: array
        if ('' !== ($orderNoArrayErrorMessage = self::validateOrderNoForArrayConstraintsFromSetOrderNo($orderNo))) {
            throw new InvalidArgumentException($orderNoArrayErrorMessage, __LINE__);
        }
        $this->OrderNo = $orderNo;
        
        return $this;
    }
    /**
     * Add item to OrderNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Facture
     */
    public function addToOrderNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OrderNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderNo[] = $item;
        
        return $this;
    }
    /**
     * Get CustomerNo value
     * @return string[]
     */
    public function getCustomerNo(): array
    {
        return $this->CustomerNo;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomerNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerNoForArrayConstraintsFromSetCustomerNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureCustomerNoItem) {
            // validation for constraint: itemType
            if (!is_string($factureCustomerNoItem)) {
                $invalidValues[] = is_object($factureCustomerNoItem) ? get_class($factureCustomerNoItem) : sprintf('%s(%s)', gettype($factureCustomerNoItem), var_export($factureCustomerNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomerNo value
     * @throws InvalidArgumentException
     * @param string[] $customerNo
     * @return \StructType\Facture
     */
    public function setCustomerNo(array $customerNo): self
    {
        // validation for constraint: array
        if ('' !== ($customerNoArrayErrorMessage = self::validateCustomerNoForArrayConstraintsFromSetCustomerNo($customerNo))) {
            throw new InvalidArgumentException($customerNoArrayErrorMessage, __LINE__);
        }
        $this->CustomerNo = $customerNo;
        
        return $this;
    }
    /**
     * Add item to CustomerNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Facture
     */
    public function addToCustomerNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CustomerNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomerNo[] = $item;
        
        return $this;
    }
    /**
     * Get InvoiceNo value
     * @return string[]
     */
    public function getInvoiceNo(): array
    {
        return $this->InvoiceNo;
    }
    /**
     * This method is responsible for validating the values passed to the setInvoiceNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceNoForArrayConstraintsFromSetInvoiceNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureInvoiceNoItem) {
            // validation for constraint: itemType
            if (!is_string($factureInvoiceNoItem)) {
                $invalidValues[] = is_object($factureInvoiceNoItem) ? get_class($factureInvoiceNoItem) : sprintf('%s(%s)', gettype($factureInvoiceNoItem), var_export($factureInvoiceNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InvoiceNo value
     * @throws InvalidArgumentException
     * @param string[] $invoiceNo
     * @return \StructType\Facture
     */
    public function setInvoiceNo(array $invoiceNo): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceNoArrayErrorMessage = self::validateInvoiceNoForArrayConstraintsFromSetInvoiceNo($invoiceNo))) {
            throw new InvalidArgumentException($invoiceNoArrayErrorMessage, __LINE__);
        }
        $this->InvoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Add item to InvoiceNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Facture
     */
    public function addToInvoiceNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The InvoiceNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->InvoiceNo[] = $item;
        
        return $this;
    }
    /**
     * Get PostingDate value
     * @return string[]
     */
    public function getPostingDate(): array
    {
        return $this->PostingDate;
    }
    /**
     * This method is responsible for validating the values passed to the setPostingDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostingDate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostingDateForArrayConstraintsFromSetPostingDate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $facturePostingDateItem) {
            // validation for constraint: itemType
            if (!is_string($facturePostingDateItem)) {
                $invalidValues[] = is_object($facturePostingDateItem) ? get_class($facturePostingDateItem) : sprintf('%s(%s)', gettype($facturePostingDateItem), var_export($facturePostingDateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PostingDate property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PostingDate value
     * @throws InvalidArgumentException
     * @param string[] $postingDate
     * @return \StructType\Facture
     */
    public function setPostingDate(array $postingDate): self
    {
        // validation for constraint: array
        if ('' !== ($postingDateArrayErrorMessage = self::validatePostingDateForArrayConstraintsFromSetPostingDate($postingDate))) {
            throw new InvalidArgumentException($postingDateArrayErrorMessage, __LINE__);
        }
        $this->PostingDate = $postingDate;
        
        return $this;
    }
    /**
     * Add item to PostingDate value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Facture
     */
    public function addToPostingDate(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The PostingDate property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PostingDate[] = $item;
        
        return $this;
    }
    /**
     * Get NoDocExterne value
     * @return string[]
     */
    public function getNoDocExterne(): array
    {
        return $this->NoDocExterne;
    }
    /**
     * This method is responsible for validating the values passed to the setNoDocExterne method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNoDocExterne method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNoDocExterneForArrayConstraintsFromSetNoDocExterne(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureNoDocExterneItem) {
            // validation for constraint: itemType
            if (!is_string($factureNoDocExterneItem)) {
                $invalidValues[] = is_object($factureNoDocExterneItem) ? get_class($factureNoDocExterneItem) : sprintf('%s(%s)', gettype($factureNoDocExterneItem), var_export($factureNoDocExterneItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NoDocExterne property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NoDocExterne value
     * @throws InvalidArgumentException
     * @param string[] $noDocExterne
     * @return \StructType\Facture
     */
    public function setNoDocExterne(array $noDocExterne): self
    {
        // validation for constraint: array
        if ('' !== ($noDocExterneArrayErrorMessage = self::validateNoDocExterneForArrayConstraintsFromSetNoDocExterne($noDocExterne))) {
            throw new InvalidArgumentException($noDocExterneArrayErrorMessage, __LINE__);
        }
        $this->NoDocExterne = $noDocExterne;
        
        return $this;
    }
    /**
     * Add item to NoDocExterne value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Facture
     */
    public function addToNoDocExterne(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The NoDocExterne property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NoDocExterne[] = $item;
        
        return $this;
    }
    /**
     * Get AmountPaid value
     * @return string[]
     */
    public function getAmountPaid(): array
    {
        return $this->AmountPaid;
    }
    /**
     * This method is responsible for validating the values passed to the setAmountPaid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmountPaid method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAmountPaidForArrayConstraintsFromSetAmountPaid(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureAmountPaidItem) {
            // validation for constraint: itemType
            if (!is_string($factureAmountPaidItem)) {
                $invalidValues[] = is_object($factureAmountPaidItem) ? get_class($factureAmountPaidItem) : sprintf('%s(%s)', gettype($factureAmountPaidItem), var_export($factureAmountPaidItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AmountPaid property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AmountPaid value
     * @throws InvalidArgumentException
     * @param string[] $amountPaid
     * @return \StructType\Facture
     */
    public function setAmountPaid(array $amountPaid): self
    {
        // validation for constraint: array
        if ('' !== ($amountPaidArrayErrorMessage = self::validateAmountPaidForArrayConstraintsFromSetAmountPaid($amountPaid))) {
            throw new InvalidArgumentException($amountPaidArrayErrorMessage, __LINE__);
        }
        $this->AmountPaid = $amountPaid;
        
        return $this;
    }
    /**
     * Add item to AmountPaid value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Facture
     */
    public function addToAmountPaid(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The AmountPaid property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AmountPaid[] = $item;
        
        return $this;
    }
    /**
     * Get StatutReglement value
     * @return string[]
     */
    public function getStatutReglement(): array
    {
        return $this->StatutReglement;
    }
    /**
     * This method is responsible for validating the values passed to the setStatutReglement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatutReglement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatutReglementForArrayConstraintsFromSetStatutReglement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureStatutReglementItem) {
            // validation for constraint: itemType
            if (!is_string($factureStatutReglementItem)) {
                $invalidValues[] = is_object($factureStatutReglementItem) ? get_class($factureStatutReglementItem) : sprintf('%s(%s)', gettype($factureStatutReglementItem), var_export($factureStatutReglementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StatutReglement property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set StatutReglement value
     * @throws InvalidArgumentException
     * @param string[] $statutReglement
     * @return \StructType\Facture
     */
    public function setStatutReglement(array $statutReglement): self
    {
        // validation for constraint: array
        if ('' !== ($statutReglementArrayErrorMessage = self::validateStatutReglementForArrayConstraintsFromSetStatutReglement($statutReglement))) {
            throw new InvalidArgumentException($statutReglementArrayErrorMessage, __LINE__);
        }
        $this->StatutReglement = $statutReglement;
        
        return $this;
    }
    /**
     * Add item to StatutReglement value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Facture
     */
    public function addToStatutReglement(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The StatutReglement property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StatutReglement[] = $item;
        
        return $this;
    }
    /**
     * Get Line value
     * @return \StructType\Line[]
     */
    public function getLine(): array
    {
        return $this->Line;
    }
    /**
     * This method is responsible for validating the values passed to the setLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineForArrayConstraintsFromSetLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureLineItem) {
            // validation for constraint: itemType
            if (!$factureLineItem instanceof \StructType\Line) {
                $invalidValues[] = is_object($factureLineItem) ? get_class($factureLineItem) : sprintf('%s(%s)', gettype($factureLineItem), var_export($factureLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Line property can only contain items of type \StructType\Line, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Line value
     * @throws InvalidArgumentException
     * @param \StructType\Line[] $line
     * @return \StructType\Facture
     */
    public function setLine(array $line): self
    {
        // validation for constraint: array
        if ('' !== ($lineArrayErrorMessage = self::validateLineForArrayConstraintsFromSetLine($line))) {
            throw new InvalidArgumentException($lineArrayErrorMessage, __LINE__);
        }
        $this->Line = $line;
        
        return $this;
    }
    /**
     * Add item to Line value
     * @throws InvalidArgumentException
     * @param \StructType\Line $item
     * @return \StructType\Facture
     */
    public function addToLine(\StructType\Line $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Line) {
            throw new InvalidArgumentException(sprintf('The Line property can only contain items of type \StructType\Line, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Line[] = $item;
        
        return $this;
    }
    /**
     * Get Echeance value
     * @return \StructType\Echeance[]
     */
    public function getEcheance(): ?array
    {
        return $this->Echeance;
    }
    /**
     * This method is responsible for validating the values passed to the setEcheance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEcheance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEcheanceForArrayConstraintsFromSetEcheance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $factureEcheanceItem) {
            // validation for constraint: itemType
            if (!$factureEcheanceItem instanceof \StructType\Echeance) {
                $invalidValues[] = is_object($factureEcheanceItem) ? get_class($factureEcheanceItem) : sprintf('%s(%s)', gettype($factureEcheanceItem), var_export($factureEcheanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Echeance property can only contain items of type \StructType\Echeance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Echeance value
     * @throws InvalidArgumentException
     * @param \StructType\Echeance[] $echeance
     * @return \StructType\Facture
     */
    public function setEcheance(?array $echeance = null): self
    {
        // validation for constraint: array
        if ('' !== ($echeanceArrayErrorMessage = self::validateEcheanceForArrayConstraintsFromSetEcheance($echeance))) {
            throw new InvalidArgumentException($echeanceArrayErrorMessage, __LINE__);
        }
        $this->Echeance = $echeance;
        
        return $this;
    }
    /**
     * Add item to Echeance value
     * @throws InvalidArgumentException
     * @param \StructType\Echeance $item
     * @return \StructType\Facture
     */
    public function addToEcheance(\StructType\Echeance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Echeance) {
            throw new InvalidArgumentException(sprintf('The Echeance property can only contain items of type \StructType\Echeance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Echeance[] = $item;
        
        return $this;
    }
}
