<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSStockOUT StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSStockOUT
 * @subpackage Structs
 */
class RootWSStockOUT extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Item[]
     */
    protected ?array $Item = null;
    /**
     * Constructor method for RootWSStockOUT
     * @uses RootWSStockOUT::setItem()
     * @param \StructType\Item[] $item
     */
    public function __construct(?array $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\Item[]
     */
    public function getItem(): ?array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSStockOUTItemItem) {
            // validation for constraint: itemType
            if (!$rootWSStockOUTItemItem instanceof \StructType\Item) {
                $invalidValues[] = is_object($rootWSStockOUTItemItem) ? get_class($rootWSStockOUTItemItem) : sprintf('%s(%s)', gettype($rootWSStockOUTItemItem), var_export($rootWSStockOUTItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \StructType\Item, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \StructType\Item[] $item
     * @return \StructType\RootWSStockOUT
     */
    public function setItem(?array $item = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Add item to Item value
     * @throws InvalidArgumentException
     * @param \StructType\Item $item
     * @return \StructType\RootWSStockOUT
     */
    public function addToItem(\StructType\Item $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Item) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \StructType\Item, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Item[] = $item;
        
        return $this;
    }
}
