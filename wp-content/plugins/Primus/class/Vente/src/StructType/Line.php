<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Line StructType
 * @subpackage Structs
 */
class Line extends AbstractStructBase
{
    /**
     * The Line_LineNo
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Line_LineNo;
    /**
     * The Line_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_Type;
    /**
     * The Line_No
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_No;
    /**
     * The Line_Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_Location;
    /**
     * The Line_Qty
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_Qty;
    /**
     * The Line_QtyGratuite
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_QtyGratuite;
    /**
     * The Line_NatureGratuite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_NatureGratuite;
    /**
     * The Line_OutstandingQty
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_OutstandingQty;
    /**
     * The Line_QtyShipped
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_QtyShipped;
    /**
     * The Line_QtyInvoiced
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_QtyInvoiced;
    /**
     * The Line_UnitPrice
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_UnitPrice;
    /**
     * The Line_VATPercent
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_VATPercent;
    /**
     * The Line_Operation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_Operation;
    /**
     * The Line_SousOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_SousOperation;
    /**
     * The InvoiceLine
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $InvoiceLine;
    /**
     * The AmountLine
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $AmountLine;
    /**
     * The AmountTTC
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $AmountTTC;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Code = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message = null;
    /**
     * The Message2
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message2 = null;
    /**
     * The Message3
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message3 = null;
    /**
     * The Message4
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message4 = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Tag = null;
    /**
     * The Namespace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Namespace = null;
    /**
     * The Service
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Service[]
     */
    protected ?array $Service = null;
    /**
     * Constructor method for Line
     * @uses Line::setLine_LineNo()
     * @uses Line::setLine_Type()
     * @uses Line::setLine_No()
     * @uses Line::setLine_Location()
     * @uses Line::setLine_Qty()
     * @uses Line::setLine_QtyGratuite()
     * @uses Line::setLine_NatureGratuite()
     * @uses Line::setLine_OutstandingQty()
     * @uses Line::setLine_QtyShipped()
     * @uses Line::setLine_QtyInvoiced()
     * @uses Line::setLine_UnitPrice()
     * @uses Line::setLine_VATPercent()
     * @uses Line::setLine_Operation()
     * @uses Line::setLine_SousOperation()
     * @uses Line::setInvoiceLine()
     * @uses Line::setAmountLine()
     * @uses Line::setAmountTTC()
     * @uses Line::setCode()
     * @uses Line::setMessage()
     * @uses Line::setMessage2()
     * @uses Line::setMessage3()
     * @uses Line::setMessage4()
     * @uses Line::setTag()
     * @uses Line::setNamespace()
     * @uses Line::setService()
     * @param int $line_LineNo
     * @param string $line_Type
     * @param string $line_No
     * @param string $line_Location
     * @param float $line_Qty
     * @param float $line_QtyGratuite
     * @param string $line_NatureGratuite
     * @param float $line_OutstandingQty
     * @param float $line_QtyShipped
     * @param float $line_QtyInvoiced
     * @param float $line_UnitPrice
     * @param float $line_VATPercent
     * @param string $line_Operation
     * @param string $line_SousOperation
     * @param int $invoiceLine
     * @param float $amountLine
     * @param float $amountTTC
     * @param string[] $code
     * @param string[] $message
     * @param string[] $message2
     * @param string[] $message3
     * @param string[] $message4
     * @param string[] $tag
     * @param string[] $namespace
     * @param \StructType\Service[] $service
     */
    public function __construct(int $line_LineNo, string $line_Type, string $line_No, string $line_Location, float $line_Qty, float $line_QtyGratuite, string $line_NatureGratuite, float $line_OutstandingQty, float $line_QtyShipped, float $line_QtyInvoiced, float $line_UnitPrice, float $line_VATPercent, string $line_Operation, string $line_SousOperation, int $invoiceLine, float $amountLine, float $amountTTC, ?array $code = null, ?array $message = null, ?array $message2 = null, ?array $message3 = null, ?array $message4 = null, ?array $tag = null, ?array $namespace = null, ?array $service = null)
    {
        $this
            ->setLine_LineNo($line_LineNo)
            ->setLine_Type($line_Type)
            ->setLine_No($line_No)
            ->setLine_Location($line_Location)
            ->setLine_Qty($line_Qty)
            ->setLine_QtyGratuite($line_QtyGratuite)
            ->setLine_NatureGratuite($line_NatureGratuite)
            ->setLine_OutstandingQty($line_OutstandingQty)
            ->setLine_QtyShipped($line_QtyShipped)
            ->setLine_QtyInvoiced($line_QtyInvoiced)
            ->setLine_UnitPrice($line_UnitPrice)
            ->setLine_VATPercent($line_VATPercent)
            ->setLine_Operation($line_Operation)
            ->setLine_SousOperation($line_SousOperation)
            ->setInvoiceLine($invoiceLine)
            ->setAmountLine($amountLine)
            ->setAmountTTC($amountTTC)
            ->setCode($code)
            ->setMessage($message)
            ->setMessage2($message2)
            ->setMessage3($message3)
            ->setMessage4($message4)
            ->setTag($tag)
            ->setNamespace($namespace)
            ->setService($service);
    }
    /**
     * Get Line_LineNo value
     * @return int
     */
    public function getLine_LineNo(): int
    {
        return $this->Line_LineNo;
    }
    /**
     * Set Line_LineNo value
     * @param int $line_LineNo
     * @return \StructType\Line
     */
    public function setLine_LineNo(int $line_LineNo): self
    {
        // validation for constraint: int
        if (!is_null($line_LineNo) && !(is_int($line_LineNo) || ctype_digit($line_LineNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($line_LineNo, true), gettype($line_LineNo)), __LINE__);
        }
        $this->Line_LineNo = $line_LineNo;
        
        return $this;
    }
    /**
     * Get Line_Type value
     * @return string
     */
    public function getLine_Type(): string
    {
        return $this->Line_Type;
    }
    /**
     * Set Line_Type value
     * @param string $line_Type
     * @return \StructType\Line
     */
    public function setLine_Type(string $line_Type): self
    {
        // validation for constraint: string
        if (!is_null($line_Type) && !is_string($line_Type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_Type, true), gettype($line_Type)), __LINE__);
        }
        $this->Line_Type = $line_Type;
        
        return $this;
    }
    /**
     * Get Line_No value
     * @return string
     */
    public function getLine_No(): string
    {
        return $this->Line_No;
    }
    /**
     * Set Line_No value
     * @param string $line_No
     * @return \StructType\Line
     */
    public function setLine_No(string $line_No): self
    {
        // validation for constraint: string
        if (!is_null($line_No) && !is_string($line_No)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_No, true), gettype($line_No)), __LINE__);
        }
        $this->Line_No = $line_No;
        
        return $this;
    }
    /**
     * Get Line_Location value
     * @return string
     */
    public function getLine_Location(): string
    {
        return $this->Line_Location;
    }
    /**
     * Set Line_Location value
     * @param string $line_Location
     * @return \StructType\Line
     */
    public function setLine_Location(string $line_Location): self
    {
        // validation for constraint: string
        if (!is_null($line_Location) && !is_string($line_Location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_Location, true), gettype($line_Location)), __LINE__);
        }
        $this->Line_Location = $line_Location;
        
        return $this;
    }
    /**
     * Get Line_Qty value
     * @return float
     */
    public function getLine_Qty(): float
    {
        return $this->Line_Qty;
    }
    /**
     * Set Line_Qty value
     * @param float $line_Qty
     * @return \StructType\Line
     */
    public function setLine_Qty(float $line_Qty): self
    {
        // validation for constraint: float
        if (!is_null($line_Qty) && !(is_float($line_Qty) || is_numeric($line_Qty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_Qty, true), gettype($line_Qty)), __LINE__);
        }
        $this->Line_Qty = $line_Qty;
        
        return $this;
    }
    /**
     * Get Line_QtyGratuite value
     * @return float
     */
    public function getLine_QtyGratuite(): float
    {
        return $this->Line_QtyGratuite;
    }
    /**
     * Set Line_QtyGratuite value
     * @param float $line_QtyGratuite
     * @return \StructType\Line
     */
    public function setLine_QtyGratuite(float $line_QtyGratuite): self
    {
        // validation for constraint: float
        if (!is_null($line_QtyGratuite) && !(is_float($line_QtyGratuite) || is_numeric($line_QtyGratuite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_QtyGratuite, true), gettype($line_QtyGratuite)), __LINE__);
        }
        $this->Line_QtyGratuite = $line_QtyGratuite;
        
        return $this;
    }
    /**
     * Get Line_NatureGratuite value
     * @return string
     */
    public function getLine_NatureGratuite(): string
    {
        return $this->Line_NatureGratuite;
    }
    /**
     * Set Line_NatureGratuite value
     * @param string $line_NatureGratuite
     * @return \StructType\Line
     */
    public function setLine_NatureGratuite(string $line_NatureGratuite): self
    {
        // validation for constraint: string
        if (!is_null($line_NatureGratuite) && !is_string($line_NatureGratuite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_NatureGratuite, true), gettype($line_NatureGratuite)), __LINE__);
        }
        $this->Line_NatureGratuite = $line_NatureGratuite;
        
        return $this;
    }
    /**
     * Get Line_OutstandingQty value
     * @return float
     */
    public function getLine_OutstandingQty(): float
    {
        return $this->Line_OutstandingQty;
    }
    /**
     * Set Line_OutstandingQty value
     * @param float $line_OutstandingQty
     * @return \StructType\Line
     */
    public function setLine_OutstandingQty(float $line_OutstandingQty): self
    {
        // validation for constraint: float
        if (!is_null($line_OutstandingQty) && !(is_float($line_OutstandingQty) || is_numeric($line_OutstandingQty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_OutstandingQty, true), gettype($line_OutstandingQty)), __LINE__);
        }
        $this->Line_OutstandingQty = $line_OutstandingQty;
        
        return $this;
    }
    /**
     * Get Line_QtyShipped value
     * @return float
     */
    public function getLine_QtyShipped(): float
    {
        return $this->Line_QtyShipped;
    }
    /**
     * Set Line_QtyShipped value
     * @param float $line_QtyShipped
     * @return \StructType\Line
     */
    public function setLine_QtyShipped(float $line_QtyShipped): self
    {
        // validation for constraint: float
        if (!is_null($line_QtyShipped) && !(is_float($line_QtyShipped) || is_numeric($line_QtyShipped))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_QtyShipped, true), gettype($line_QtyShipped)), __LINE__);
        }
        $this->Line_QtyShipped = $line_QtyShipped;
        
        return $this;
    }
    /**
     * Get Line_QtyInvoiced value
     * @return float
     */
    public function getLine_QtyInvoiced(): float
    {
        return $this->Line_QtyInvoiced;
    }
    /**
     * Set Line_QtyInvoiced value
     * @param float $line_QtyInvoiced
     * @return \StructType\Line
     */
    public function setLine_QtyInvoiced(float $line_QtyInvoiced): self
    {
        // validation for constraint: float
        if (!is_null($line_QtyInvoiced) && !(is_float($line_QtyInvoiced) || is_numeric($line_QtyInvoiced))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_QtyInvoiced, true), gettype($line_QtyInvoiced)), __LINE__);
        }
        $this->Line_QtyInvoiced = $line_QtyInvoiced;
        
        return $this;
    }
    /**
     * Get Line_UnitPrice value
     * @return float
     */
    public function getLine_UnitPrice(): float
    {
        return $this->Line_UnitPrice;
    }
    /**
     * Set Line_UnitPrice value
     * @param float $line_UnitPrice
     * @return \StructType\Line
     */
    public function setLine_UnitPrice(float $line_UnitPrice): self
    {
        // validation for constraint: float
        if (!is_null($line_UnitPrice) && !(is_float($line_UnitPrice) || is_numeric($line_UnitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_UnitPrice, true), gettype($line_UnitPrice)), __LINE__);
        }
        $this->Line_UnitPrice = $line_UnitPrice;
        
        return $this;
    }
    /**
     * Get Line_VATPercent value
     * @return float
     */
    public function getLine_VATPercent(): float
    {
        return $this->Line_VATPercent;
    }
    /**
     * Set Line_VATPercent value
     * @param float $line_VATPercent
     * @return \StructType\Line
     */
    public function setLine_VATPercent(float $line_VATPercent): self
    {
        // validation for constraint: float
        if (!is_null($line_VATPercent) && !(is_float($line_VATPercent) || is_numeric($line_VATPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_VATPercent, true), gettype($line_VATPercent)), __LINE__);
        }
        $this->Line_VATPercent = $line_VATPercent;
        
        return $this;
    }
    /**
     * Get Line_Operation value
     * @return string
     */
    public function getLine_Operation(): string
    {
        return $this->Line_Operation;
    }
    /**
     * Set Line_Operation value
     * @param string $line_Operation
     * @return \StructType\Line
     */
    public function setLine_Operation(string $line_Operation): self
    {
        // validation for constraint: string
        if (!is_null($line_Operation) && !is_string($line_Operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_Operation, true), gettype($line_Operation)), __LINE__);
        }
        $this->Line_Operation = $line_Operation;
        
        return $this;
    }
    /**
     * Get Line_SousOperation value
     * @return string
     */
    public function getLine_SousOperation(): string
    {
        return $this->Line_SousOperation;
    }
    /**
     * Set Line_SousOperation value
     * @param string $line_SousOperation
     * @return \StructType\Line
     */
    public function setLine_SousOperation(string $line_SousOperation): self
    {
        // validation for constraint: string
        if (!is_null($line_SousOperation) && !is_string($line_SousOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_SousOperation, true), gettype($line_SousOperation)), __LINE__);
        }
        $this->Line_SousOperation = $line_SousOperation;
        
        return $this;
    }
    /**
     * Get InvoiceLine value
     * @return int
     */
    public function getInvoiceLine(): int
    {
        return $this->InvoiceLine;
    }
    /**
     * Set InvoiceLine value
     * @param int $invoiceLine
     * @return \StructType\Line
     */
    public function setInvoiceLine(int $invoiceLine): self
    {
        // validation for constraint: int
        if (!is_null($invoiceLine) && !(is_int($invoiceLine) || ctype_digit($invoiceLine))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceLine, true), gettype($invoiceLine)), __LINE__);
        }
        $this->InvoiceLine = $invoiceLine;
        
        return $this;
    }
    /**
     * Get AmountLine value
     * @return float
     */
    public function getAmountLine(): float
    {
        return $this->AmountLine;
    }
    /**
     * Set AmountLine value
     * @param float $amountLine
     * @return \StructType\Line
     */
    public function setAmountLine(float $amountLine): self
    {
        // validation for constraint: float
        if (!is_null($amountLine) && !(is_float($amountLine) || is_numeric($amountLine))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountLine, true), gettype($amountLine)), __LINE__);
        }
        $this->AmountLine = $amountLine;
        
        return $this;
    }
    /**
     * Get AmountTTC value
     * @return float
     */
    public function getAmountTTC(): float
    {
        return $this->AmountTTC;
    }
    /**
     * Set AmountTTC value
     * @param float $amountTTC
     * @return \StructType\Line
     */
    public function setAmountTTC(float $amountTTC): self
    {
        // validation for constraint: float
        if (!is_null($amountTTC) && !(is_float($amountTTC) || is_numeric($amountTTC))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountTTC, true), gettype($amountTTC)), __LINE__);
        }
        $this->AmountTTC = $amountTTC;
        
        return $this;
    }
    /**
     * Get Code value
     * @return string[]
     */
    public function getCode(): ?array
    {
        return $this->Code;
    }
    /**
     * This method is responsible for validating the values passed to the setCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodeForArrayConstraintsFromSetCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineCodeItem) {
            // validation for constraint: itemType
            if (!is_string($lineCodeItem)) {
                $invalidValues[] = is_object($lineCodeItem) ? get_class($lineCodeItem) : sprintf('%s(%s)', gettype($lineCodeItem), var_export($lineCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Code property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Code value
     * @throws InvalidArgumentException
     * @param string[] $code
     * @return \StructType\Line
     */
    public function setCode(?array $code = null): self
    {
        // validation for constraint: array
        if ('' !== ($codeArrayErrorMessage = self::validateCodeForArrayConstraintsFromSetCode($code))) {
            throw new InvalidArgumentException($codeArrayErrorMessage, __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Add item to Code value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Code property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Code[] = $item;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string[]
     */
    public function getMessage(): ?array
    {
        return $this->Message;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageForArrayConstraintsFromSetMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessageItem) {
            // validation for constraint: itemType
            if (!is_string($lineMessageItem)) {
                $invalidValues[] = is_object($lineMessageItem) ? get_class($lineMessageItem) : sprintf('%s(%s)', gettype($lineMessageItem), var_export($lineMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message value
     * @throws InvalidArgumentException
     * @param string[] $message
     * @return \StructType\Line
     */
    public function setMessage(?array $message = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageArrayErrorMessage = self::validateMessageForArrayConstraintsFromSetMessage($message))) {
            throw new InvalidArgumentException($messageArrayErrorMessage, __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Add item to Message value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message[] = $item;
        
        return $this;
    }
    /**
     * Get Message2 value
     * @return string[]
     */
    public function getMessage2(): ?array
    {
        return $this->Message2;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage2 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage2 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessage2ForArrayConstraintsFromSetMessage2(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessage2Item) {
            // validation for constraint: itemType
            if (!is_string($lineMessage2Item)) {
                $invalidValues[] = is_object($lineMessage2Item) ? get_class($lineMessage2Item) : sprintf('%s(%s)', gettype($lineMessage2Item), var_export($lineMessage2Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message2 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message2 value
     * @throws InvalidArgumentException
     * @param string[] $message2
     * @return \StructType\Line
     */
    public function setMessage2(?array $message2 = null): self
    {
        // validation for constraint: array
        if ('' !== ($message2ArrayErrorMessage = self::validateMessage2ForArrayConstraintsFromSetMessage2($message2))) {
            throw new InvalidArgumentException($message2ArrayErrorMessage, __LINE__);
        }
        $this->Message2 = $message2;
        
        return $this;
    }
    /**
     * Add item to Message2 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage2(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message2 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message2[] = $item;
        
        return $this;
    }
    /**
     * Get Message3 value
     * @return string[]
     */
    public function getMessage3(): ?array
    {
        return $this->Message3;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage3 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage3 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessage3ForArrayConstraintsFromSetMessage3(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessage3Item) {
            // validation for constraint: itemType
            if (!is_string($lineMessage3Item)) {
                $invalidValues[] = is_object($lineMessage3Item) ? get_class($lineMessage3Item) : sprintf('%s(%s)', gettype($lineMessage3Item), var_export($lineMessage3Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message3 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message3 value
     * @throws InvalidArgumentException
     * @param string[] $message3
     * @return \StructType\Line
     */
    public function setMessage3(?array $message3 = null): self
    {
        // validation for constraint: array
        if ('' !== ($message3ArrayErrorMessage = self::validateMessage3ForArrayConstraintsFromSetMessage3($message3))) {
            throw new InvalidArgumentException($message3ArrayErrorMessage, __LINE__);
        }
        $this->Message3 = $message3;
        
        return $this;
    }
    /**
     * Add item to Message3 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage3(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message3 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message3[] = $item;
        
        return $this;
    }
    /**
     * Get Message4 value
     * @return string[]
     */
    public function getMessage4(): ?array
    {
        return $this->Message4;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage4 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage4 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessage4ForArrayConstraintsFromSetMessage4(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessage4Item) {
            // validation for constraint: itemType
            if (!is_string($lineMessage4Item)) {
                $invalidValues[] = is_object($lineMessage4Item) ? get_class($lineMessage4Item) : sprintf('%s(%s)', gettype($lineMessage4Item), var_export($lineMessage4Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message4 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message4 value
     * @throws InvalidArgumentException
     * @param string[] $message4
     * @return \StructType\Line
     */
    public function setMessage4(?array $message4 = null): self
    {
        // validation for constraint: array
        if ('' !== ($message4ArrayErrorMessage = self::validateMessage4ForArrayConstraintsFromSetMessage4($message4))) {
            throw new InvalidArgumentException($message4ArrayErrorMessage, __LINE__);
        }
        $this->Message4 = $message4;
        
        return $this;
    }
    /**
     * Add item to Message4 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage4(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message4 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message4[] = $item;
        
        return $this;
    }
    /**
     * Get Tag value
     * @return string[]
     */
    public function getTag(): ?array
    {
        return $this->Tag;
    }
    /**
     * This method is responsible for validating the values passed to the setTag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTag method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTagForArrayConstraintsFromSetTag(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineTagItem) {
            // validation for constraint: itemType
            if (!is_string($lineTagItem)) {
                $invalidValues[] = is_object($lineTagItem) ? get_class($lineTagItem) : sprintf('%s(%s)', gettype($lineTagItem), var_export($lineTagItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tag property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tag value
     * @throws InvalidArgumentException
     * @param string[] $tag
     * @return \StructType\Line
     */
    public function setTag(?array $tag = null): self
    {
        // validation for constraint: array
        if ('' !== ($tagArrayErrorMessage = self::validateTagForArrayConstraintsFromSetTag($tag))) {
            throw new InvalidArgumentException($tagArrayErrorMessage, __LINE__);
        }
        $this->Tag = $tag;
        
        return $this;
    }
    /**
     * Add item to Tag value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToTag(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Tag property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Tag[] = $item;
        
        return $this;
    }
    /**
     * Get Namespace value
     * @return string[]
     */
    public function getNamespace(): ?array
    {
        return $this->Namespace;
    }
    /**
     * This method is responsible for validating the values passed to the setNamespace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNamespace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNamespaceForArrayConstraintsFromSetNamespace(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineNamespaceItem) {
            // validation for constraint: itemType
            if (!is_string($lineNamespaceItem)) {
                $invalidValues[] = is_object($lineNamespaceItem) ? get_class($lineNamespaceItem) : sprintf('%s(%s)', gettype($lineNamespaceItem), var_export($lineNamespaceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Namespace property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Namespace value
     * @throws InvalidArgumentException
     * @param string[] $namespace
     * @return \StructType\Line
     */
    public function setNamespace(?array $namespace = null): self
    {
        // validation for constraint: array
        if ('' !== ($namespaceArrayErrorMessage = self::validateNamespaceForArrayConstraintsFromSetNamespace($namespace))) {
            throw new InvalidArgumentException($namespaceArrayErrorMessage, __LINE__);
        }
        $this->Namespace = $namespace;
        
        return $this;
    }
    /**
     * Add item to Namespace value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToNamespace(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Namespace property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Namespace[] = $item;
        
        return $this;
    }
    /**
     * Get Service value
     * @return \StructType\Service[]
     */
    public function getService(): ?array
    {
        return $this->Service;
    }
    /**
     * This method is responsible for validating the values passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintsFromSetService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineServiceItem) {
            // validation for constraint: itemType
            if (!$lineServiceItem instanceof \StructType\Service) {
                $invalidValues[] = is_object($lineServiceItem) ? get_class($lineServiceItem) : sprintf('%s(%s)', gettype($lineServiceItem), var_export($lineServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service property can only contain items of type \StructType\Service, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Service value
     * @throws InvalidArgumentException
     * @param \StructType\Service[] $service
     * @return \StructType\Line
     */
    public function setService(?array $service = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintsFromSetService($service))) {
            throw new InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
        }
        $this->Service = $service;
        
        return $this;
    }
    /**
     * Add item to Service value
     * @throws InvalidArgumentException
     * @param \StructType\Service $item
     * @return \StructType\Line
     */
    public function addToService(\StructType\Service $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Service) {
            throw new InvalidArgumentException(sprintf('The Service property can only contain items of type \StructType\Service, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service[] = $item;
        
        return $this;
    }
}
