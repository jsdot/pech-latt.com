<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostesStock_Sorties StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class PostesStock_Sorties extends AbstractStructBase
{
    /**
     * The Sorties_Monosociété
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Sorties_Monosociété
     */
    protected \StructType\Sorties_Monosociété $Sorties_Monosociété;
    /**
     * The Sorties_Multisociété
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Sorties_Multisociété[]
     */
    protected array $Sorties_Multisociété;
    /**
     * Constructor method for PostesStock_Sorties
     * @uses PostesStock_Sorties::setSorties_Monosociété()
     * @uses PostesStock_Sorties::setSorties_Multisociété()
     * @param \StructType\Sorties_Monosociété $sorties_Monosociété
     * @param \StructType\Sorties_Multisociété[] $sorties_Multisociété
     */
    public function __construct(\StructType\Sorties_Monosociété $sorties_Monosociété, array $sorties_Multisociété)
    {
        $this
            ->setSorties_Monosociété($sorties_Monosociété)
            ->setSorties_Multisociété($sorties_Multisociété);
    }
    /**
     * Get Sorties_Monosociété value
     * @return \StructType\Sorties_Monosociété
     */
    public function getSorties_Monosociété(): \StructType\Sorties_Monosociété
    {
        return $this->Sorties_Monosociété;
    }
    /**
     * Set Sorties_Monosociété value
     * @param \StructType\Sorties_Monosociété $sorties_Monosociété
     * @return \StructType\PostesStock_Sorties
     */
    public function setSorties_Monosociété(\StructType\Sorties_Monosociété $sorties_Monosociété): self
    {
        $this->Sorties_Monosociété = $sorties_Monosociété;
        
        return $this;
    }
    /**
     * Get Sorties_Multisociété value
     * @return \StructType\Sorties_Multisociété[]
     */
    public function getSorties_Multisociété(): array
    {
        return $this->Sorties_Multisociété;
    }
    /**
     * This method is responsible for validating the values passed to the setSorties_Multisociété method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSorties_Multisociété method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSorties_MultisociétéForArrayConstraintsFromSetSorties_Multisociété(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $postesStock_SortiesSorties_MultisociétéItem) {
            // validation for constraint: itemType
            if (!$postesStock_SortiesSorties_MultisociétéItem instanceof \StructType\Sorties_Multisociété) {
                $invalidValues[] = is_object($postesStock_SortiesSorties_MultisociétéItem) ? get_class($postesStock_SortiesSorties_MultisociétéItem) : sprintf('%s(%s)', gettype($postesStock_SortiesSorties_MultisociétéItem), var_export($postesStock_SortiesSorties_MultisociétéItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sorties_Multisociété property can only contain items of type \StructType\Sorties_Multisociété, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Sorties_Multisociété value
     * @throws InvalidArgumentException
     * @param \StructType\Sorties_Multisociété[] $sorties_Multisociété
     * @return \StructType\PostesStock_Sorties
     */
    public function setSorties_Multisociété(array $sorties_Multisociété): self
    {
        // validation for constraint: array
        if ('' !== ($sorties_MultisociétéArrayErrorMessage = self::validateSorties_MultisociétéForArrayConstraintsFromSetSorties_Multisociété($sorties_Multisociété))) {
            throw new InvalidArgumentException($sorties_MultisociétéArrayErrorMessage, __LINE__);
        }
        $this->Sorties_Multisociété = $sorties_Multisociété;
        
        return $this;
    }
    /**
     * Add item to Sorties_Multisociété value
     * @throws InvalidArgumentException
     * @param \StructType\Sorties_Multisociété $item
     * @return \StructType\PostesStock_Sorties
     */
    public function addToSorties_Multisociété(\StructType\Sorties_Multisociété $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Sorties_Multisociété) {
            throw new InvalidArgumentException(sprintf('The Sorties_Multisociété property can only contain items of type \StructType\Sorties_Multisociété, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sorties_Multisociété[] = $item;
        
        return $this;
    }
}
