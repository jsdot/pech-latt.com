<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSCommandeIN StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSCommandeIN
 * @subpackage Structs
 */
class RootWSCommandeIN extends AbstractStructBase
{
    /**
     * The Header
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Header[]
     */
    protected array $Header;
    /**
     * Constructor method for RootWSCommandeIN
     * @uses RootWSCommandeIN::setHeader()
     * @param \StructType\Header[] $header
     */
    public function __construct(array $header)
    {
        $this
            ->setHeader($header);
    }
    /**
     * Get Header value
     * @return \StructType\Header[]
     */
    public function getHeader(): array
    {
        return $this->Header;
    }
    /**
     * This method is responsible for validating the values passed to the setHeader method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHeader method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHeaderForArrayConstraintsFromSetHeader(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSCommandeINHeaderItem) {
            // validation for constraint: itemType
            if (!$rootWSCommandeINHeaderItem instanceof \StructType\Header) {
                $invalidValues[] = is_object($rootWSCommandeINHeaderItem) ? get_class($rootWSCommandeINHeaderItem) : sprintf('%s(%s)', gettype($rootWSCommandeINHeaderItem), var_export($rootWSCommandeINHeaderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Header property can only contain items of type \StructType\Header, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Header value
     * @throws InvalidArgumentException
     * @param \StructType\Header[] $header
     * @return \StructType\RootWSCommandeIN
     */
    public function setHeader(array $header): self
    {
        // validation for constraint: array
        if ('' !== ($headerArrayErrorMessage = self::validateHeaderForArrayConstraintsFromSetHeader($header))) {
            throw new InvalidArgumentException($headerArrayErrorMessage, __LINE__);
        }
        $this->Header = $header;
        
        return $this;
    }
    /**
     * Add item to Header value
     * @throws InvalidArgumentException
     * @param \StructType\Header $item
     * @return \StructType\RootWSCommandeIN
     */
    public function addToHeader(\StructType\Header $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Header) {
            throw new InvalidArgumentException(sprintf('The Header property can only contain items of type \StructType\Header, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Header[] = $item;
        
        return $this;
    }
}
