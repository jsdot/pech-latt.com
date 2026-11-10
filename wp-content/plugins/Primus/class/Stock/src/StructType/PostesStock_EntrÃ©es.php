<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostesStock_Entrées StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class PostesStock_Entrées extends AbstractStructBase
{
    /**
     * The Entrées_Monosociété
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Entrées_Monosociété[]
     */
    protected array $Entrées_Monosociété;
    /**
     * The Entrées_Multisociété
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Entrées_Multisociété[]
     */
    protected array $Entrées_Multisociété;
    /**
     * Constructor method for PostesStock_Entrées
     * @uses PostesStock_Entrées::setEntrées_Monosociété()
     * @uses PostesStock_Entrées::setEntrées_Multisociété()
     * @param \StructType\Entrées_Monosociété[] $entrées_Monosociété
     * @param \StructType\Entrées_Multisociété[] $entrées_Multisociété
     */
    public function __construct(array $entrées_Monosociété, array $entrées_Multisociété)
    {
        $this
            ->setEntrées_Monosociété($entrées_Monosociété)
            ->setEntrées_Multisociété($entrées_Multisociété);
    }
    /**
     * Get Entrées_Monosociété value
     * @return \StructType\Entrées_Monosociété[]
     */
    public function getEntrées_Monosociété(): array
    {
        return $this->Entrées_Monosociété;
    }
    /**
     * This method is responsible for validating the values passed to the setEntrées_Monosociété method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntrées_Monosociété method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntrées_MonosociétéForArrayConstraintsFromSetEntrées_Monosociété(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $postesStock_EntréesEntrées_MonosociétéItem) {
            // validation for constraint: itemType
            if (!$postesStock_EntréesEntrées_MonosociétéItem instanceof \StructType\Entrées_Monosociété) {
                $invalidValues[] = is_object($postesStock_EntréesEntrées_MonosociétéItem) ? get_class($postesStock_EntréesEntrées_MonosociétéItem) : sprintf('%s(%s)', gettype($postesStock_EntréesEntrées_MonosociétéItem), var_export($postesStock_EntréesEntrées_MonosociétéItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Entrées_Monosociété property can only contain items of type \StructType\Entrées_Monosociété, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Entrées_Monosociété value
     * @throws InvalidArgumentException
     * @param \StructType\Entrées_Monosociété[] $entrées_Monosociété
     * @return \StructType\PostesStock_Entrées
     */
    public function setEntrées_Monosociété(array $entrées_Monosociété): self
    {
        // validation for constraint: array
        if ('' !== ($entrées_MonosociétéArrayErrorMessage = self::validateEntrées_MonosociétéForArrayConstraintsFromSetEntrées_Monosociété($entrées_Monosociété))) {
            throw new InvalidArgumentException($entrées_MonosociétéArrayErrorMessage, __LINE__);
        }
        $this->Entrées_Monosociété = $entrées_Monosociété;
        
        return $this;
    }
    /**
     * Add item to Entrées_Monosociété value
     * @throws InvalidArgumentException
     * @param \StructType\Entrées_Monosociété $item
     * @return \StructType\PostesStock_Entrées
     */
    public function addToEntrées_Monosociété(\StructType\Entrées_Monosociété $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Entrées_Monosociété) {
            throw new InvalidArgumentException(sprintf('The Entrées_Monosociété property can only contain items of type \StructType\Entrées_Monosociété, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Entrées_Monosociété[] = $item;
        
        return $this;
    }
    /**
     * Get Entrées_Multisociété value
     * @return \StructType\Entrées_Multisociété[]
     */
    public function getEntrées_Multisociété(): array
    {
        return $this->Entrées_Multisociété;
    }
    /**
     * This method is responsible for validating the values passed to the setEntrées_Multisociété method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntrées_Multisociété method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntrées_MultisociétéForArrayConstraintsFromSetEntrées_Multisociété(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $postesStock_EntréesEntrées_MultisociétéItem) {
            // validation for constraint: itemType
            if (!$postesStock_EntréesEntrées_MultisociétéItem instanceof \StructType\Entrées_Multisociété) {
                $invalidValues[] = is_object($postesStock_EntréesEntrées_MultisociétéItem) ? get_class($postesStock_EntréesEntrées_MultisociétéItem) : sprintf('%s(%s)', gettype($postesStock_EntréesEntrées_MultisociétéItem), var_export($postesStock_EntréesEntrées_MultisociétéItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Entrées_Multisociété property can only contain items of type \StructType\Entrées_Multisociété, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Entrées_Multisociété value
     * @throws InvalidArgumentException
     * @param \StructType\Entrées_Multisociété[] $entrées_Multisociété
     * @return \StructType\PostesStock_Entrées
     */
    public function setEntrées_Multisociété(array $entrées_Multisociété): self
    {
        // validation for constraint: array
        if ('' !== ($entrées_MultisociétéArrayErrorMessage = self::validateEntrées_MultisociétéForArrayConstraintsFromSetEntrées_Multisociété($entrées_Multisociété))) {
            throw new InvalidArgumentException($entrées_MultisociétéArrayErrorMessage, __LINE__);
        }
        $this->Entrées_Multisociété = $entrées_Multisociété;
        
        return $this;
    }
    /**
     * Add item to Entrées_Multisociété value
     * @throws InvalidArgumentException
     * @param \StructType\Entrées_Multisociété $item
     * @return \StructType\PostesStock_Entrées
     */
    public function addToEntrées_Multisociété(\StructType\Entrées_Multisociété $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Entrées_Multisociété) {
            throw new InvalidArgumentException(sprintf('The Entrées_Multisociété property can only contain items of type \StructType\Entrées_Multisociété, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Entrées_Multisociété[] = $item;
        
        return $this;
    }
}
