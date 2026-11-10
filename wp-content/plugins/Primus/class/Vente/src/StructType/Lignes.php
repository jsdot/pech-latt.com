<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Lignes StructType
 * @subpackage Structs
 */
class Lignes extends AbstractStructBase
{
    /**
     * The Article
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Article;
    /**
     * The StartingDate
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StartingDate;
    /**
     * The EndingDate
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EndingDate;
    /**
     * The MinQty
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $MinQty;
    /**
     * The UnitPrice
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $UnitPrice;
    /**
     * The Ligne_No
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Ligne_No;
    /**
     * The Ligne_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Ligne_Type;
    /**
     * The Ligne_ItemNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_ItemNo;
    /**
     * The Ligne_LocationCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_LocationCode;
    /**
     * The Ligne_Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_Description;
    /**
     * The Ligne_UnitOfMeasure
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_UnitOfMeasure;
    /**
     * The Ligne_Quantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_Quantity;
    /**
     * The Ligne_UnitPrice
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_UnitPrice;
    /**
     * The Ligne_MontantBrut
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_MontantBrut;
    /**
     * The Ligne_MontantHT
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_MontantHT;
    /**
     * The Ligne_MontantNet
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_MontantNet;
    /**
     * The Ligne_MontantNetNet
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_MontantNetNet;
    /**
     * The Ligne_Discount
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_Discount;
    /**
     * The Ligne_DiscountAmount
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_DiscountAmount;
    /**
     * The Ligne_GrossWeight
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_GrossWeight;
    /**
     * The Ligne_NetWeight
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_NetWeight;
    /**
     * The Ligne_CustomerPriceGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_CustomerPriceGroup;
    /**
     * The Ligne_NatureGratuite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_NatureGratuite;
    /**
     * The Ligne_QuantiteGratuite
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Ligne_QuantiteGratuite;
    /**
     * The Ligne_Operation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_Operation;
    /**
     * The Ligne_SousOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Ligne_SousOperation;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Services[]
     */
    protected array $Services;
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
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Line_Type;
    /**
     * The Line_ItemNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_ItemNo;
    /**
     * The Line_LocationCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_LocationCode;
    /**
     * The Line_Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_Description;
    /**
     * The Line_Description2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_Description2;
    /**
     * The Line_UnitOfMeasure
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_UnitOfMeasure;
    /**
     * The Line_Quantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_Quantity;
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
     * The Line_LineDiscountAmount
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_LineDiscountAmount;
    /**
     * The Line_MontantBrut
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_MontantBrut;
    /**
     * The Line_MontantHT
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_MontantHT;
    /**
     * The Line_MontantNet
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_MontantNet;
    /**
     * The Line_MontantNetNet
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Line_MontantNetNet;
    /**
     * The Line_CodeOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_CodeOperation;
    /**
     * The Line_CodeSousOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Line_CodeSousOperation;
    /**
     * Constructor method for Lignes
     * @uses Lignes::setArticle()
     * @uses Lignes::setStartingDate()
     * @uses Lignes::setEndingDate()
     * @uses Lignes::setMinQty()
     * @uses Lignes::setUnitPrice()
     * @uses Lignes::setLigne_No()
     * @uses Lignes::setLigne_Type()
     * @uses Lignes::setLigne_ItemNo()
     * @uses Lignes::setLigne_LocationCode()
     * @uses Lignes::setLigne_Description()
     * @uses Lignes::setLigne_UnitOfMeasure()
     * @uses Lignes::setLigne_Quantity()
     * @uses Lignes::setLigne_UnitPrice()
     * @uses Lignes::setLigne_MontantBrut()
     * @uses Lignes::setLigne_MontantHT()
     * @uses Lignes::setLigne_MontantNet()
     * @uses Lignes::setLigne_MontantNetNet()
     * @uses Lignes::setLigne_Discount()
     * @uses Lignes::setLigne_DiscountAmount()
     * @uses Lignes::setLigne_GrossWeight()
     * @uses Lignes::setLigne_NetWeight()
     * @uses Lignes::setLigne_CustomerPriceGroup()
     * @uses Lignes::setLigne_NatureGratuite()
     * @uses Lignes::setLigne_QuantiteGratuite()
     * @uses Lignes::setLigne_Operation()
     * @uses Lignes::setLigne_SousOperation()
     * @uses Lignes::setServices()
     * @uses Lignes::setLine_LineNo()
     * @uses Lignes::setLine_Type()
     * @uses Lignes::setLine_ItemNo()
     * @uses Lignes::setLine_LocationCode()
     * @uses Lignes::setLine_Description()
     * @uses Lignes::setLine_Description2()
     * @uses Lignes::setLine_UnitOfMeasure()
     * @uses Lignes::setLine_Quantity()
     * @uses Lignes::setLine_UnitPrice()
     * @uses Lignes::setLine_LineDiscountAmount()
     * @uses Lignes::setLine_MontantBrut()
     * @uses Lignes::setLine_MontantHT()
     * @uses Lignes::setLine_MontantNet()
     * @uses Lignes::setLine_MontantNetNet()
     * @uses Lignes::setLine_CodeOperation()
     * @uses Lignes::setLine_CodeSousOperation()
     * @param string $article
     * @param string $startingDate
     * @param string $endingDate
     * @param float $minQty
     * @param float $unitPrice
     * @param int $ligne_No
     * @param string[] $ligne_Type
     * @param string $ligne_ItemNo
     * @param string $ligne_LocationCode
     * @param string $ligne_Description
     * @param string $ligne_UnitOfMeasure
     * @param float $ligne_Quantity
     * @param float $ligne_UnitPrice
     * @param float $ligne_MontantBrut
     * @param float $ligne_MontantHT
     * @param float $ligne_MontantNet
     * @param float $ligne_MontantNetNet
     * @param float $ligne_Discount
     * @param float $ligne_DiscountAmount
     * @param float $ligne_GrossWeight
     * @param float $ligne_NetWeight
     * @param string $ligne_CustomerPriceGroup
     * @param string $ligne_NatureGratuite
     * @param float $ligne_QuantiteGratuite
     * @param string $ligne_Operation
     * @param string $ligne_SousOperation
     * @param \StructType\Services[] $services
     * @param int $line_LineNo
     * @param string[] $line_Type
     * @param string $line_ItemNo
     * @param string $line_LocationCode
     * @param string $line_Description
     * @param string $line_Description2
     * @param string $line_UnitOfMeasure
     * @param float $line_Quantity
     * @param float $line_UnitPrice
     * @param float $line_LineDiscountAmount
     * @param float $line_MontantBrut
     * @param float $line_MontantHT
     * @param float $line_MontantNet
     * @param float $line_MontantNetNet
     * @param string $line_CodeOperation
     * @param string $line_CodeSousOperation
     */
    public function __construct(string $article, string $startingDate, string $endingDate, float $minQty, float $unitPrice, int $ligne_No, array $ligne_Type, string $ligne_ItemNo, string $ligne_LocationCode, string $ligne_Description, string $ligne_UnitOfMeasure, float $ligne_Quantity, float $ligne_UnitPrice, float $ligne_MontantBrut, float $ligne_MontantHT, float $ligne_MontantNet, float $ligne_MontantNetNet, float $ligne_Discount, float $ligne_DiscountAmount, float $ligne_GrossWeight, float $ligne_NetWeight, string $ligne_CustomerPriceGroup, string $ligne_NatureGratuite, float $ligne_QuantiteGratuite, string $ligne_Operation, string $ligne_SousOperation, array $services, int $line_LineNo, array $line_Type, string $line_ItemNo, string $line_LocationCode, string $line_Description, string $line_Description2, string $line_UnitOfMeasure, float $line_Quantity, float $line_UnitPrice, float $line_LineDiscountAmount, float $line_MontantBrut, float $line_MontantHT, float $line_MontantNet, float $line_MontantNetNet, string $line_CodeOperation, string $line_CodeSousOperation)
    {
        $this
            ->setArticle($article)
            ->setStartingDate($startingDate)
            ->setEndingDate($endingDate)
            ->setMinQty($minQty)
            ->setUnitPrice($unitPrice)
            ->setLigne_No($ligne_No)
            ->setLigne_Type($ligne_Type)
            ->setLigne_ItemNo($ligne_ItemNo)
            ->setLigne_LocationCode($ligne_LocationCode)
            ->setLigne_Description($ligne_Description)
            ->setLigne_UnitOfMeasure($ligne_UnitOfMeasure)
            ->setLigne_Quantity($ligne_Quantity)
            ->setLigne_UnitPrice($ligne_UnitPrice)
            ->setLigne_MontantBrut($ligne_MontantBrut)
            ->setLigne_MontantHT($ligne_MontantHT)
            ->setLigne_MontantNet($ligne_MontantNet)
            ->setLigne_MontantNetNet($ligne_MontantNetNet)
            ->setLigne_Discount($ligne_Discount)
            ->setLigne_DiscountAmount($ligne_DiscountAmount)
            ->setLigne_GrossWeight($ligne_GrossWeight)
            ->setLigne_NetWeight($ligne_NetWeight)
            ->setLigne_CustomerPriceGroup($ligne_CustomerPriceGroup)
            ->setLigne_NatureGratuite($ligne_NatureGratuite)
            ->setLigne_QuantiteGratuite($ligne_QuantiteGratuite)
            ->setLigne_Operation($ligne_Operation)
            ->setLigne_SousOperation($ligne_SousOperation)
            ->setServices($services)
            ->setLine_LineNo($line_LineNo)
            ->setLine_Type($line_Type)
            ->setLine_ItemNo($line_ItemNo)
            ->setLine_LocationCode($line_LocationCode)
            ->setLine_Description($line_Description)
            ->setLine_Description2($line_Description2)
            ->setLine_UnitOfMeasure($line_UnitOfMeasure)
            ->setLine_Quantity($line_Quantity)
            ->setLine_UnitPrice($line_UnitPrice)
            ->setLine_LineDiscountAmount($line_LineDiscountAmount)
            ->setLine_MontantBrut($line_MontantBrut)
            ->setLine_MontantHT($line_MontantHT)
            ->setLine_MontantNet($line_MontantNet)
            ->setLine_MontantNetNet($line_MontantNetNet)
            ->setLine_CodeOperation($line_CodeOperation)
            ->setLine_CodeSousOperation($line_CodeSousOperation);
    }
    /**
     * Get Article value
     * @return string
     */
    public function getArticle(): string
    {
        return $this->Article;
    }
    /**
     * Set Article value
     * @param string $article
     * @return \StructType\Lignes
     */
    public function setArticle(string $article): self
    {
        // validation for constraint: string
        if (!is_null($article) && !is_string($article)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($article, true), gettype($article)), __LINE__);
        }
        $this->Article = $article;
        
        return $this;
    }
    /**
     * Get StartingDate value
     * @return string
     */
    public function getStartingDate(): string
    {
        return $this->StartingDate;
    }
    /**
     * Set StartingDate value
     * @param string $startingDate
     * @return \StructType\Lignes
     */
    public function setStartingDate(string $startingDate): self
    {
        // validation for constraint: string
        if (!is_null($startingDate) && !is_string($startingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startingDate, true), gettype($startingDate)), __LINE__);
        }
        $this->StartingDate = $startingDate;
        
        return $this;
    }
    /**
     * Get EndingDate value
     * @return string
     */
    public function getEndingDate(): string
    {
        return $this->EndingDate;
    }
    /**
     * Set EndingDate value
     * @param string $endingDate
     * @return \StructType\Lignes
     */
    public function setEndingDate(string $endingDate): self
    {
        // validation for constraint: string
        if (!is_null($endingDate) && !is_string($endingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endingDate, true), gettype($endingDate)), __LINE__);
        }
        $this->EndingDate = $endingDate;
        
        return $this;
    }
    /**
     * Get MinQty value
     * @return float
     */
    public function getMinQty(): float
    {
        return $this->MinQty;
    }
    /**
     * Set MinQty value
     * @param float $minQty
     * @return \StructType\Lignes
     */
    public function setMinQty(float $minQty): self
    {
        // validation for constraint: float
        if (!is_null($minQty) && !(is_float($minQty) || is_numeric($minQty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minQty, true), gettype($minQty)), __LINE__);
        }
        $this->MinQty = $minQty;
        
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param float $unitPrice
     * @return \StructType\Lignes
     */
    public function setUnitPrice(float $unitPrice): self
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        $this->UnitPrice = $unitPrice;
        
        return $this;
    }
    /**
     * Get Ligne_No value
     * @return int
     */
    public function getLigne_No(): int
    {
        return $this->Ligne_No;
    }
    /**
     * Set Ligne_No value
     * @param int $ligne_No
     * @return \StructType\Lignes
     */
    public function setLigne_No(int $ligne_No): self
    {
        // validation for constraint: int
        if (!is_null($ligne_No) && !(is_int($ligne_No) || ctype_digit($ligne_No))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ligne_No, true), gettype($ligne_No)), __LINE__);
        }
        $this->Ligne_No = $ligne_No;
        
        return $this;
    }
    /**
     * Get Ligne_Type value
     * @return string[]
     */
    public function getLigne_Type(): array
    {
        return $this->Ligne_Type;
    }
    /**
     * This method is responsible for validating the values passed to the setLigne_Type method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLigne_Type method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLigne_TypeForArrayConstraintsFromSetLigne_Type(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lignesLigne_TypeItem) {
            // validation for constraint: itemType
            if (!is_string($lignesLigne_TypeItem)) {
                $invalidValues[] = is_object($lignesLigne_TypeItem) ? get_class($lignesLigne_TypeItem) : sprintf('%s(%s)', gettype($lignesLigne_TypeItem), var_export($lignesLigne_TypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ligne_Type property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Ligne_Type value
     * @throws InvalidArgumentException
     * @param string[] $ligne_Type
     * @return \StructType\Lignes
     */
    public function setLigne_Type(array $ligne_Type): self
    {
        // validation for constraint: array
        if ('' !== ($ligne_TypeArrayErrorMessage = self::validateLigne_TypeForArrayConstraintsFromSetLigne_Type($ligne_Type))) {
            throw new InvalidArgumentException($ligne_TypeArrayErrorMessage, __LINE__);
        }
        $this->Ligne_Type = $ligne_Type;
        
        return $this;
    }
    /**
     * Add item to Ligne_Type value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Lignes
     */
    public function addToLigne_Type(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Ligne_Type property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ligne_Type[] = $item;
        
        return $this;
    }
    /**
     * Get Ligne_ItemNo value
     * @return string
     */
    public function getLigne_ItemNo(): string
    {
        return $this->Ligne_ItemNo;
    }
    /**
     * Set Ligne_ItemNo value
     * @param string $ligne_ItemNo
     * @return \StructType\Lignes
     */
    public function setLigne_ItemNo(string $ligne_ItemNo): self
    {
        // validation for constraint: string
        if (!is_null($ligne_ItemNo) && !is_string($ligne_ItemNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_ItemNo, true), gettype($ligne_ItemNo)), __LINE__);
        }
        $this->Ligne_ItemNo = $ligne_ItemNo;
        
        return $this;
    }
    /**
     * Get Ligne_LocationCode value
     * @return string
     */
    public function getLigne_LocationCode(): string
    {
        return $this->Ligne_LocationCode;
    }
    /**
     * Set Ligne_LocationCode value
     * @param string $ligne_LocationCode
     * @return \StructType\Lignes
     */
    public function setLigne_LocationCode(string $ligne_LocationCode): self
    {
        // validation for constraint: string
        if (!is_null($ligne_LocationCode) && !is_string($ligne_LocationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_LocationCode, true), gettype($ligne_LocationCode)), __LINE__);
        }
        $this->Ligne_LocationCode = $ligne_LocationCode;
        
        return $this;
    }
    /**
     * Get Ligne_Description value
     * @return string
     */
    public function getLigne_Description(): string
    {
        return $this->Ligne_Description;
    }
    /**
     * Set Ligne_Description value
     * @param string $ligne_Description
     * @return \StructType\Lignes
     */
    public function setLigne_Description(string $ligne_Description): self
    {
        // validation for constraint: string
        if (!is_null($ligne_Description) && !is_string($ligne_Description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_Description, true), gettype($ligne_Description)), __LINE__);
        }
        $this->Ligne_Description = $ligne_Description;
        
        return $this;
    }
    /**
     * Get Ligne_UnitOfMeasure value
     * @return string
     */
    public function getLigne_UnitOfMeasure(): string
    {
        return $this->Ligne_UnitOfMeasure;
    }
    /**
     * Set Ligne_UnitOfMeasure value
     * @param string $ligne_UnitOfMeasure
     * @return \StructType\Lignes
     */
    public function setLigne_UnitOfMeasure(string $ligne_UnitOfMeasure): self
    {
        // validation for constraint: string
        if (!is_null($ligne_UnitOfMeasure) && !is_string($ligne_UnitOfMeasure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_UnitOfMeasure, true), gettype($ligne_UnitOfMeasure)), __LINE__);
        }
        $this->Ligne_UnitOfMeasure = $ligne_UnitOfMeasure;
        
        return $this;
    }
    /**
     * Get Ligne_Quantity value
     * @return float
     */
    public function getLigne_Quantity(): float
    {
        return $this->Ligne_Quantity;
    }
    /**
     * Set Ligne_Quantity value
     * @param float $ligne_Quantity
     * @return \StructType\Lignes
     */
    public function setLigne_Quantity(float $ligne_Quantity): self
    {
        // validation for constraint: float
        if (!is_null($ligne_Quantity) && !(is_float($ligne_Quantity) || is_numeric($ligne_Quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_Quantity, true), gettype($ligne_Quantity)), __LINE__);
        }
        $this->Ligne_Quantity = $ligne_Quantity;
        
        return $this;
    }
    /**
     * Get Ligne_UnitPrice value
     * @return float
     */
    public function getLigne_UnitPrice(): float
    {
        return $this->Ligne_UnitPrice;
    }
    /**
     * Set Ligne_UnitPrice value
     * @param float $ligne_UnitPrice
     * @return \StructType\Lignes
     */
    public function setLigne_UnitPrice(float $ligne_UnitPrice): self
    {
        // validation for constraint: float
        if (!is_null($ligne_UnitPrice) && !(is_float($ligne_UnitPrice) || is_numeric($ligne_UnitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_UnitPrice, true), gettype($ligne_UnitPrice)), __LINE__);
        }
        $this->Ligne_UnitPrice = $ligne_UnitPrice;
        
        return $this;
    }
    /**
     * Get Ligne_MontantBrut value
     * @return float
     */
    public function getLigne_MontantBrut(): float
    {
        return $this->Ligne_MontantBrut;
    }
    /**
     * Set Ligne_MontantBrut value
     * @param float $ligne_MontantBrut
     * @return \StructType\Lignes
     */
    public function setLigne_MontantBrut(float $ligne_MontantBrut): self
    {
        // validation for constraint: float
        if (!is_null($ligne_MontantBrut) && !(is_float($ligne_MontantBrut) || is_numeric($ligne_MontantBrut))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_MontantBrut, true), gettype($ligne_MontantBrut)), __LINE__);
        }
        $this->Ligne_MontantBrut = $ligne_MontantBrut;
        
        return $this;
    }
    /**
     * Get Ligne_MontantHT value
     * @return float
     */
    public function getLigne_MontantHT(): float
    {
        return $this->Ligne_MontantHT;
    }
    /**
     * Set Ligne_MontantHT value
     * @param float $ligne_MontantHT
     * @return \StructType\Lignes
     */
    public function setLigne_MontantHT(float $ligne_MontantHT): self
    {
        // validation for constraint: float
        if (!is_null($ligne_MontantHT) && !(is_float($ligne_MontantHT) || is_numeric($ligne_MontantHT))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_MontantHT, true), gettype($ligne_MontantHT)), __LINE__);
        }
        $this->Ligne_MontantHT = $ligne_MontantHT;
        
        return $this;
    }
    /**
     * Get Ligne_MontantNet value
     * @return float
     */
    public function getLigne_MontantNet(): float
    {
        return $this->Ligne_MontantNet;
    }
    /**
     * Set Ligne_MontantNet value
     * @param float $ligne_MontantNet
     * @return \StructType\Lignes
     */
    public function setLigne_MontantNet(float $ligne_MontantNet): self
    {
        // validation for constraint: float
        if (!is_null($ligne_MontantNet) && !(is_float($ligne_MontantNet) || is_numeric($ligne_MontantNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_MontantNet, true), gettype($ligne_MontantNet)), __LINE__);
        }
        $this->Ligne_MontantNet = $ligne_MontantNet;
        
        return $this;
    }
    /**
     * Get Ligne_MontantNetNet value
     * @return float
     */
    public function getLigne_MontantNetNet(): float
    {
        return $this->Ligne_MontantNetNet;
    }
    /**
     * Set Ligne_MontantNetNet value
     * @param float $ligne_MontantNetNet
     * @return \StructType\Lignes
     */
    public function setLigne_MontantNetNet(float $ligne_MontantNetNet): self
    {
        // validation for constraint: float
        if (!is_null($ligne_MontantNetNet) && !(is_float($ligne_MontantNetNet) || is_numeric($ligne_MontantNetNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_MontantNetNet, true), gettype($ligne_MontantNetNet)), __LINE__);
        }
        $this->Ligne_MontantNetNet = $ligne_MontantNetNet;
        
        return $this;
    }
    /**
     * Get Ligne_Discount value
     * @return float
     */
    public function getLigne_Discount(): float
    {
        return $this->Ligne_Discount;
    }
    /**
     * Set Ligne_Discount value
     * @param float $ligne_Discount
     * @return \StructType\Lignes
     */
    public function setLigne_Discount(float $ligne_Discount): self
    {
        // validation for constraint: float
        if (!is_null($ligne_Discount) && !(is_float($ligne_Discount) || is_numeric($ligne_Discount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_Discount, true), gettype($ligne_Discount)), __LINE__);
        }
        $this->Ligne_Discount = $ligne_Discount;
        
        return $this;
    }
    /**
     * Get Ligne_DiscountAmount value
     * @return float
     */
    public function getLigne_DiscountAmount(): float
    {
        return $this->Ligne_DiscountAmount;
    }
    /**
     * Set Ligne_DiscountAmount value
     * @param float $ligne_DiscountAmount
     * @return \StructType\Lignes
     */
    public function setLigne_DiscountAmount(float $ligne_DiscountAmount): self
    {
        // validation for constraint: float
        if (!is_null($ligne_DiscountAmount) && !(is_float($ligne_DiscountAmount) || is_numeric($ligne_DiscountAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_DiscountAmount, true), gettype($ligne_DiscountAmount)), __LINE__);
        }
        $this->Ligne_DiscountAmount = $ligne_DiscountAmount;
        
        return $this;
    }
    /**
     * Get Ligne_GrossWeight value
     * @return float
     */
    public function getLigne_GrossWeight(): float
    {
        return $this->Ligne_GrossWeight;
    }
    /**
     * Set Ligne_GrossWeight value
     * @param float $ligne_GrossWeight
     * @return \StructType\Lignes
     */
    public function setLigne_GrossWeight(float $ligne_GrossWeight): self
    {
        // validation for constraint: float
        if (!is_null($ligne_GrossWeight) && !(is_float($ligne_GrossWeight) || is_numeric($ligne_GrossWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_GrossWeight, true), gettype($ligne_GrossWeight)), __LINE__);
        }
        $this->Ligne_GrossWeight = $ligne_GrossWeight;
        
        return $this;
    }
    /**
     * Get Ligne_NetWeight value
     * @return float
     */
    public function getLigne_NetWeight(): float
    {
        return $this->Ligne_NetWeight;
    }
    /**
     * Set Ligne_NetWeight value
     * @param float $ligne_NetWeight
     * @return \StructType\Lignes
     */
    public function setLigne_NetWeight(float $ligne_NetWeight): self
    {
        // validation for constraint: float
        if (!is_null($ligne_NetWeight) && !(is_float($ligne_NetWeight) || is_numeric($ligne_NetWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_NetWeight, true), gettype($ligne_NetWeight)), __LINE__);
        }
        $this->Ligne_NetWeight = $ligne_NetWeight;
        
        return $this;
    }
    /**
     * Get Ligne_CustomerPriceGroup value
     * @return string
     */
    public function getLigne_CustomerPriceGroup(): string
    {
        return $this->Ligne_CustomerPriceGroup;
    }
    /**
     * Set Ligne_CustomerPriceGroup value
     * @param string $ligne_CustomerPriceGroup
     * @return \StructType\Lignes
     */
    public function setLigne_CustomerPriceGroup(string $ligne_CustomerPriceGroup): self
    {
        // validation for constraint: string
        if (!is_null($ligne_CustomerPriceGroup) && !is_string($ligne_CustomerPriceGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_CustomerPriceGroup, true), gettype($ligne_CustomerPriceGroup)), __LINE__);
        }
        $this->Ligne_CustomerPriceGroup = $ligne_CustomerPriceGroup;
        
        return $this;
    }
    /**
     * Get Ligne_NatureGratuite value
     * @return string
     */
    public function getLigne_NatureGratuite(): string
    {
        return $this->Ligne_NatureGratuite;
    }
    /**
     * Set Ligne_NatureGratuite value
     * @param string $ligne_NatureGratuite
     * @return \StructType\Lignes
     */
    public function setLigne_NatureGratuite(string $ligne_NatureGratuite): self
    {
        // validation for constraint: string
        if (!is_null($ligne_NatureGratuite) && !is_string($ligne_NatureGratuite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_NatureGratuite, true), gettype($ligne_NatureGratuite)), __LINE__);
        }
        $this->Ligne_NatureGratuite = $ligne_NatureGratuite;
        
        return $this;
    }
    /**
     * Get Ligne_QuantiteGratuite value
     * @return float
     */
    public function getLigne_QuantiteGratuite(): float
    {
        return $this->Ligne_QuantiteGratuite;
    }
    /**
     * Set Ligne_QuantiteGratuite value
     * @param float $ligne_QuantiteGratuite
     * @return \StructType\Lignes
     */
    public function setLigne_QuantiteGratuite(float $ligne_QuantiteGratuite): self
    {
        // validation for constraint: float
        if (!is_null($ligne_QuantiteGratuite) && !(is_float($ligne_QuantiteGratuite) || is_numeric($ligne_QuantiteGratuite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ligne_QuantiteGratuite, true), gettype($ligne_QuantiteGratuite)), __LINE__);
        }
        $this->Ligne_QuantiteGratuite = $ligne_QuantiteGratuite;
        
        return $this;
    }
    /**
     * Get Ligne_Operation value
     * @return string
     */
    public function getLigne_Operation(): string
    {
        return $this->Ligne_Operation;
    }
    /**
     * Set Ligne_Operation value
     * @param string $ligne_Operation
     * @return \StructType\Lignes
     */
    public function setLigne_Operation(string $ligne_Operation): self
    {
        // validation for constraint: string
        if (!is_null($ligne_Operation) && !is_string($ligne_Operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_Operation, true), gettype($ligne_Operation)), __LINE__);
        }
        $this->Ligne_Operation = $ligne_Operation;
        
        return $this;
    }
    /**
     * Get Ligne_SousOperation value
     * @return string
     */
    public function getLigne_SousOperation(): string
    {
        return $this->Ligne_SousOperation;
    }
    /**
     * Set Ligne_SousOperation value
     * @param string $ligne_SousOperation
     * @return \StructType\Lignes
     */
    public function setLigne_SousOperation(string $ligne_SousOperation): self
    {
        // validation for constraint: string
        if (!is_null($ligne_SousOperation) && !is_string($ligne_SousOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ligne_SousOperation, true), gettype($ligne_SousOperation)), __LINE__);
        }
        $this->Ligne_SousOperation = $ligne_SousOperation;
        
        return $this;
    }
    /**
     * Get Services value
     * @return \StructType\Services[]
     */
    public function getServices(): array
    {
        return $this->Services;
    }
    /**
     * This method is responsible for validating the values passed to the setServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServices method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServicesForArrayConstraintsFromSetServices(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lignesServicesItem) {
            // validation for constraint: itemType
            if (!$lignesServicesItem instanceof \StructType\Services) {
                $invalidValues[] = is_object($lignesServicesItem) ? get_class($lignesServicesItem) : sprintf('%s(%s)', gettype($lignesServicesItem), var_export($lignesServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Services property can only contain items of type \StructType\Services, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Services value
     * @throws InvalidArgumentException
     * @param \StructType\Services[] $services
     * @return \StructType\Lignes
     */
    public function setServices(array $services): self
    {
        // validation for constraint: array
        if ('' !== ($servicesArrayErrorMessage = self::validateServicesForArrayConstraintsFromSetServices($services))) {
            throw new InvalidArgumentException($servicesArrayErrorMessage, __LINE__);
        }
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Add item to Services value
     * @throws InvalidArgumentException
     * @param \StructType\Services $item
     * @return \StructType\Lignes
     */
    public function addToServices(\StructType\Services $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Services) {
            throw new InvalidArgumentException(sprintf('The Services property can only contain items of type \StructType\Services, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Services[] = $item;
        
        return $this;
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
     * @return \StructType\Lignes
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
     * @return string[]
     */
    public function getLine_Type(): array
    {
        return $this->Line_Type;
    }
    /**
     * This method is responsible for validating the values passed to the setLine_Type method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLine_Type method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLine_TypeForArrayConstraintsFromSetLine_Type(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lignesLine_TypeItem) {
            // validation for constraint: itemType
            if (!is_string($lignesLine_TypeItem)) {
                $invalidValues[] = is_object($lignesLine_TypeItem) ? get_class($lignesLine_TypeItem) : sprintf('%s(%s)', gettype($lignesLine_TypeItem), var_export($lignesLine_TypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Line_Type property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Line_Type value
     * @throws InvalidArgumentException
     * @param string[] $line_Type
     * @return \StructType\Lignes
     */
    public function setLine_Type(array $line_Type): self
    {
        // validation for constraint: array
        if ('' !== ($line_TypeArrayErrorMessage = self::validateLine_TypeForArrayConstraintsFromSetLine_Type($line_Type))) {
            throw new InvalidArgumentException($line_TypeArrayErrorMessage, __LINE__);
        }
        $this->Line_Type = $line_Type;
        
        return $this;
    }
    /**
     * Add item to Line_Type value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Lignes
     */
    public function addToLine_Type(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Line_Type property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Line_Type[] = $item;
        
        return $this;
    }
    /**
     * Get Line_ItemNo value
     * @return string
     */
    public function getLine_ItemNo(): string
    {
        return $this->Line_ItemNo;
    }
    /**
     * Set Line_ItemNo value
     * @param string $line_ItemNo
     * @return \StructType\Lignes
     */
    public function setLine_ItemNo(string $line_ItemNo): self
    {
        // validation for constraint: string
        if (!is_null($line_ItemNo) && !is_string($line_ItemNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_ItemNo, true), gettype($line_ItemNo)), __LINE__);
        }
        $this->Line_ItemNo = $line_ItemNo;
        
        return $this;
    }
    /**
     * Get Line_LocationCode value
     * @return string
     */
    public function getLine_LocationCode(): string
    {
        return $this->Line_LocationCode;
    }
    /**
     * Set Line_LocationCode value
     * @param string $line_LocationCode
     * @return \StructType\Lignes
     */
    public function setLine_LocationCode(string $line_LocationCode): self
    {
        // validation for constraint: string
        if (!is_null($line_LocationCode) && !is_string($line_LocationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_LocationCode, true), gettype($line_LocationCode)), __LINE__);
        }
        $this->Line_LocationCode = $line_LocationCode;
        
        return $this;
    }
    /**
     * Get Line_Description value
     * @return string
     */
    public function getLine_Description(): string
    {
        return $this->Line_Description;
    }
    /**
     * Set Line_Description value
     * @param string $line_Description
     * @return \StructType\Lignes
     */
    public function setLine_Description(string $line_Description): self
    {
        // validation for constraint: string
        if (!is_null($line_Description) && !is_string($line_Description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_Description, true), gettype($line_Description)), __LINE__);
        }
        $this->Line_Description = $line_Description;
        
        return $this;
    }
    /**
     * Get Line_Description2 value
     * @return string
     */
    public function getLine_Description2(): string
    {
        return $this->Line_Description2;
    }
    /**
     * Set Line_Description2 value
     * @param string $line_Description2
     * @return \StructType\Lignes
     */
    public function setLine_Description2(string $line_Description2): self
    {
        // validation for constraint: string
        if (!is_null($line_Description2) && !is_string($line_Description2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_Description2, true), gettype($line_Description2)), __LINE__);
        }
        $this->Line_Description2 = $line_Description2;
        
        return $this;
    }
    /**
     * Get Line_UnitOfMeasure value
     * @return string
     */
    public function getLine_UnitOfMeasure(): string
    {
        return $this->Line_UnitOfMeasure;
    }
    /**
     * Set Line_UnitOfMeasure value
     * @param string $line_UnitOfMeasure
     * @return \StructType\Lignes
     */
    public function setLine_UnitOfMeasure(string $line_UnitOfMeasure): self
    {
        // validation for constraint: string
        if (!is_null($line_UnitOfMeasure) && !is_string($line_UnitOfMeasure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_UnitOfMeasure, true), gettype($line_UnitOfMeasure)), __LINE__);
        }
        $this->Line_UnitOfMeasure = $line_UnitOfMeasure;
        
        return $this;
    }
    /**
     * Get Line_Quantity value
     * @return float
     */
    public function getLine_Quantity(): float
    {
        return $this->Line_Quantity;
    }
    /**
     * Set Line_Quantity value
     * @param float $line_Quantity
     * @return \StructType\Lignes
     */
    public function setLine_Quantity(float $line_Quantity): self
    {
        // validation for constraint: float
        if (!is_null($line_Quantity) && !(is_float($line_Quantity) || is_numeric($line_Quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_Quantity, true), gettype($line_Quantity)), __LINE__);
        }
        $this->Line_Quantity = $line_Quantity;
        
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
     * @return \StructType\Lignes
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
     * Get Line_LineDiscountAmount value
     * @return float
     */
    public function getLine_LineDiscountAmount(): float
    {
        return $this->Line_LineDiscountAmount;
    }
    /**
     * Set Line_LineDiscountAmount value
     * @param float $line_LineDiscountAmount
     * @return \StructType\Lignes
     */
    public function setLine_LineDiscountAmount(float $line_LineDiscountAmount): self
    {
        // validation for constraint: float
        if (!is_null($line_LineDiscountAmount) && !(is_float($line_LineDiscountAmount) || is_numeric($line_LineDiscountAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_LineDiscountAmount, true), gettype($line_LineDiscountAmount)), __LINE__);
        }
        $this->Line_LineDiscountAmount = $line_LineDiscountAmount;
        
        return $this;
    }
    /**
     * Get Line_MontantBrut value
     * @return float
     */
    public function getLine_MontantBrut(): float
    {
        return $this->Line_MontantBrut;
    }
    /**
     * Set Line_MontantBrut value
     * @param float $line_MontantBrut
     * @return \StructType\Lignes
     */
    public function setLine_MontantBrut(float $line_MontantBrut): self
    {
        // validation for constraint: float
        if (!is_null($line_MontantBrut) && !(is_float($line_MontantBrut) || is_numeric($line_MontantBrut))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_MontantBrut, true), gettype($line_MontantBrut)), __LINE__);
        }
        $this->Line_MontantBrut = $line_MontantBrut;
        
        return $this;
    }
    /**
     * Get Line_MontantHT value
     * @return float
     */
    public function getLine_MontantHT(): float
    {
        return $this->Line_MontantHT;
    }
    /**
     * Set Line_MontantHT value
     * @param float $line_MontantHT
     * @return \StructType\Lignes
     */
    public function setLine_MontantHT(float $line_MontantHT): self
    {
        // validation for constraint: float
        if (!is_null($line_MontantHT) && !(is_float($line_MontantHT) || is_numeric($line_MontantHT))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_MontantHT, true), gettype($line_MontantHT)), __LINE__);
        }
        $this->Line_MontantHT = $line_MontantHT;
        
        return $this;
    }
    /**
     * Get Line_MontantNet value
     * @return float
     */
    public function getLine_MontantNet(): float
    {
        return $this->Line_MontantNet;
    }
    /**
     * Set Line_MontantNet value
     * @param float $line_MontantNet
     * @return \StructType\Lignes
     */
    public function setLine_MontantNet(float $line_MontantNet): self
    {
        // validation for constraint: float
        if (!is_null($line_MontantNet) && !(is_float($line_MontantNet) || is_numeric($line_MontantNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_MontantNet, true), gettype($line_MontantNet)), __LINE__);
        }
        $this->Line_MontantNet = $line_MontantNet;
        
        return $this;
    }
    /**
     * Get Line_MontantNetNet value
     * @return float
     */
    public function getLine_MontantNetNet(): float
    {
        return $this->Line_MontantNetNet;
    }
    /**
     * Set Line_MontantNetNet value
     * @param float $line_MontantNetNet
     * @return \StructType\Lignes
     */
    public function setLine_MontantNetNet(float $line_MontantNetNet): self
    {
        // validation for constraint: float
        if (!is_null($line_MontantNetNet) && !(is_float($line_MontantNetNet) || is_numeric($line_MontantNetNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line_MontantNetNet, true), gettype($line_MontantNetNet)), __LINE__);
        }
        $this->Line_MontantNetNet = $line_MontantNetNet;
        
        return $this;
    }
    /**
     * Get Line_CodeOperation value
     * @return string
     */
    public function getLine_CodeOperation(): string
    {
        return $this->Line_CodeOperation;
    }
    /**
     * Set Line_CodeOperation value
     * @param string $line_CodeOperation
     * @return \StructType\Lignes
     */
    public function setLine_CodeOperation(string $line_CodeOperation): self
    {
        // validation for constraint: string
        if (!is_null($line_CodeOperation) && !is_string($line_CodeOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_CodeOperation, true), gettype($line_CodeOperation)), __LINE__);
        }
        $this->Line_CodeOperation = $line_CodeOperation;
        
        return $this;
    }
    /**
     * Get Line_CodeSousOperation value
     * @return string
     */
    public function getLine_CodeSousOperation(): string
    {
        return $this->Line_CodeSousOperation;
    }
    /**
     * Set Line_CodeSousOperation value
     * @param string $line_CodeSousOperation
     * @return \StructType\Lignes
     */
    public function setLine_CodeSousOperation(string $line_CodeSousOperation): self
    {
        // validation for constraint: string
        if (!is_null($line_CodeSousOperation) && !is_string($line_CodeSousOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line_CodeSousOperation, true), gettype($line_CodeSousOperation)), __LINE__);
        }
        $this->Line_CodeSousOperation = $line_CodeSousOperation;
        
        return $this;
    }
}
