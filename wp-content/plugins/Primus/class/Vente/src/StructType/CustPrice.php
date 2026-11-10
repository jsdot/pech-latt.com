<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustPrice StructType
 * @subpackage Structs
 */
class CustPrice extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Code;
    /**
     * The Lignes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Lignes[]
     */
    protected ?array $Lignes = null;
    /**
     * Constructor method for CustPrice
     * @uses CustPrice::setCode()
     * @uses CustPrice::setLignes()
     * @param string $code
     * @param \StructType\Lignes[] $lignes
     */
    public function __construct(string $code, ?array $lignes = null)
    {
        $this
            ->setCode($code)
            ->setLignes($lignes);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\CustPrice
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Lignes value
     * @return \StructType\Lignes[]
     */
    public function getLignes(): ?array
    {
        return $this->Lignes;
    }
    /**
     * This method is responsible for validating the values passed to the setLignes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLignes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLignesForArrayConstraintsFromSetLignes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custPriceLignesItem) {
            // validation for constraint: itemType
            if (!$custPriceLignesItem instanceof \StructType\Lignes) {
                $invalidValues[] = is_object($custPriceLignesItem) ? get_class($custPriceLignesItem) : sprintf('%s(%s)', gettype($custPriceLignesItem), var_export($custPriceLignesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Lignes property can only contain items of type \StructType\Lignes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Lignes value
     * @throws InvalidArgumentException
     * @param \StructType\Lignes[] $lignes
     * @return \StructType\CustPrice
     */
    public function setLignes(?array $lignes = null): self
    {
        // validation for constraint: array
        if ('' !== ($lignesArrayErrorMessage = self::validateLignesForArrayConstraintsFromSetLignes($lignes))) {
            throw new InvalidArgumentException($lignesArrayErrorMessage, __LINE__);
        }
        $this->Lignes = $lignes;
        
        return $this;
    }
    /**
     * Add item to Lignes value
     * @throws InvalidArgumentException
     * @param \StructType\Lignes $item
     * @return \StructType\CustPrice
     */
    public function addToLignes(\StructType\Lignes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Lignes) {
            throw new InvalidArgumentException(sprintf('The Lignes property can only contain items of type \StructType\Lignes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Lignes[] = $item;
        
        return $this;
    }
}
