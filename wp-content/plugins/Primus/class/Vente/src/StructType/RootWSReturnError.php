<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSReturnError StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSReturnError
 * @subpackage Structs
 */
class RootWSReturnError extends AbstractStructBase
{
    /**
     * The Header
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Header
     */
    protected \StructType\Header $Header;
    /**
     * The Line
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Line[]
     */
    protected ?array $Line = null;
    /**
     * Constructor method for RootWSReturnError
     * @uses RootWSReturnError::setHeader()
     * @uses RootWSReturnError::setLine()
     * @param \StructType\Header $header
     * @param \StructType\Line[] $line
     */
    public function __construct(\StructType\Header $header, ?array $line = null)
    {
        $this
            ->setHeader($header)
            ->setLine($line);
    }
    /**
     * Get Header value
     * @return \StructType\Header
     */
    public function getHeader(): \StructType\Header
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @param \StructType\Header $header
     * @return \StructType\RootWSReturnError
     */
    public function setHeader(\StructType\Header $header): self
    {
        $this->Header = $header;
        
        return $this;
    }
    /**
     * Get Line value
     * @return \StructType\Line[]
     */
    public function getLine(): ?array
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
        foreach ($values as $rootWSReturnErrorLineItem) {
            // validation for constraint: itemType
            if (!$rootWSReturnErrorLineItem instanceof \StructType\Line) {
                $invalidValues[] = is_object($rootWSReturnErrorLineItem) ? get_class($rootWSReturnErrorLineItem) : sprintf('%s(%s)', gettype($rootWSReturnErrorLineItem), var_export($rootWSReturnErrorLineItem, true));
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
     * @return \StructType\RootWSReturnError
     */
    public function setLine(?array $line = null): self
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
     * @return \StructType\RootWSReturnError
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
}
