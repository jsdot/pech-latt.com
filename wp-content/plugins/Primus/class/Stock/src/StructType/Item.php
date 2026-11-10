<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Item StructType
 * @subpackage Structs
 */
class Item extends AbstractStructBase
{
    /**
     * The DateHeure
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $DateHeure;
    /**
     * The NoArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $NoArticle;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Description;
    /**
     * The R_DetailsPostesStocks
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\R_DetailsPostesStocks[]
     */
    protected array $R_DetailsPostesStocks;
    /**
     * Constructor method for Item
     * @uses Item::setDateHeure()
     * @uses Item::setNoArticle()
     * @uses Item::setDescription()
     * @uses Item::setR_DetailsPostesStocks()
     * @param string[] $dateHeure
     * @param string $noArticle
     * @param string $description
     * @param \StructType\R_DetailsPostesStocks[] $r_DetailsPostesStocks
     */
    public function __construct(array $dateHeure, string $noArticle, string $description, array $r_DetailsPostesStocks)
    {
        $this
            ->setDateHeure($dateHeure)
            ->setNoArticle($noArticle)
            ->setDescription($description)
            ->setR_DetailsPostesStocks($r_DetailsPostesStocks);
    }
    /**
     * Get DateHeure value
     * @return string[]
     */
    public function getDateHeure(): array
    {
        return $this->DateHeure;
    }
    /**
     * This method is responsible for validating the values passed to the setDateHeure method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDateHeure method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDateHeureForArrayConstraintsFromSetDateHeure(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemDateHeureItem) {
            // validation for constraint: itemType
            if (!is_string($itemDateHeureItem)) {
                $invalidValues[] = is_object($itemDateHeureItem) ? get_class($itemDateHeureItem) : sprintf('%s(%s)', gettype($itemDateHeureItem), var_export($itemDateHeureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DateHeure property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DateHeure value
     * @throws InvalidArgumentException
     * @param string[] $dateHeure
     * @return \StructType\Item
     */
    public function setDateHeure(array $dateHeure): self
    {
        // validation for constraint: array
        if ('' !== ($dateHeureArrayErrorMessage = self::validateDateHeureForArrayConstraintsFromSetDateHeure($dateHeure))) {
            throw new InvalidArgumentException($dateHeureArrayErrorMessage, __LINE__);
        }
        $this->DateHeure = $dateHeure;
        
        return $this;
    }
    /**
     * Add item to DateHeure value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Item
     */
    public function addToDateHeure(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The DateHeure property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DateHeure[] = $item;
        
        return $this;
    }
    /**
     * Get NoArticle value
     * @return string
     */
    public function getNoArticle(): string
    {
        return $this->NoArticle;
    }
    /**
     * Set NoArticle value
     * @param string $noArticle
     * @return \StructType\Item
     */
    public function setNoArticle(string $noArticle): self
    {
        // validation for constraint: string
        if (!is_null($noArticle) && !is_string($noArticle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noArticle, true), gettype($noArticle)), __LINE__);
        }
        $this->NoArticle = $noArticle;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Item
     */
    public function setDescription(string $description): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get R_DetailsPostesStocks value
     * @return \StructType\R_DetailsPostesStocks[]
     */
    public function getR_DetailsPostesStocks(): array
    {
        return $this->R_DetailsPostesStocks;
    }
    /**
     * This method is responsible for validating the values passed to the setR_DetailsPostesStocks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setR_DetailsPostesStocks method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateR_DetailsPostesStocksForArrayConstraintsFromSetR_DetailsPostesStocks(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemR_DetailsPostesStocksItem) {
            // validation for constraint: itemType
            if (!$itemR_DetailsPostesStocksItem instanceof \StructType\R_DetailsPostesStocks) {
                $invalidValues[] = is_object($itemR_DetailsPostesStocksItem) ? get_class($itemR_DetailsPostesStocksItem) : sprintf('%s(%s)', gettype($itemR_DetailsPostesStocksItem), var_export($itemR_DetailsPostesStocksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The R_DetailsPostesStocks property can only contain items of type \StructType\R_DetailsPostesStocks, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set R_DetailsPostesStocks value
     * @throws InvalidArgumentException
     * @param \StructType\R_DetailsPostesStocks[] $r_DetailsPostesStocks
     * @return \StructType\Item
     */
    public function setR_DetailsPostesStocks(array $r_DetailsPostesStocks): self
    {
        // validation for constraint: array
        if ('' !== ($r_DetailsPostesStocksArrayErrorMessage = self::validateR_DetailsPostesStocksForArrayConstraintsFromSetR_DetailsPostesStocks($r_DetailsPostesStocks))) {
            throw new InvalidArgumentException($r_DetailsPostesStocksArrayErrorMessage, __LINE__);
        }
        $this->R_DetailsPostesStocks = $r_DetailsPostesStocks;
        
        return $this;
    }
    /**
     * Add item to R_DetailsPostesStocks value
     * @throws InvalidArgumentException
     * @param \StructType\R_DetailsPostesStocks $item
     * @return \StructType\Item
     */
    public function addToR_DetailsPostesStocks(\StructType\R_DetailsPostesStocks $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\R_DetailsPostesStocks) {
            throw new InvalidArgumentException(sprintf('The R_DetailsPostesStocks property can only contain items of type \StructType\R_DetailsPostesStocks, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->R_DetailsPostesStocks[] = $item;
        
        return $this;
    }
}
