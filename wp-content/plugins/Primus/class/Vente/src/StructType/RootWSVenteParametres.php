<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSVenteParametres StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSVenteParametres
 * @subpackage Structs
 */
class RootWSVenteParametres extends AbstractStructBase
{
    /**
     * The Vente
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Vente[]
     */
    protected array $Vente;
    /**
     * Constructor method for RootWSVenteParametres
     * @uses RootWSVenteParametres::setVente()
     * @param \StructType\Vente[] $vente
     */
    public function __construct(array $vente)
    {
        $this
            ->setVente($vente);
    }
    /**
     * Get Vente value
     * @return \StructType\Vente[]
     */
    public function getVente(): array
    {
        return $this->Vente;
    }
    /**
     * This method is responsible for validating the values passed to the setVente method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVente method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVenteForArrayConstraintsFromSetVente(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSVenteParametresVenteItem) {
            // validation for constraint: itemType
            if (!$rootWSVenteParametresVenteItem instanceof \StructType\Vente) {
                $invalidValues[] = is_object($rootWSVenteParametresVenteItem) ? get_class($rootWSVenteParametresVenteItem) : sprintf('%s(%s)', gettype($rootWSVenteParametresVenteItem), var_export($rootWSVenteParametresVenteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Vente property can only contain items of type \StructType\Vente, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Vente value
     * @throws InvalidArgumentException
     * @param \StructType\Vente[] $vente
     * @return \StructType\RootWSVenteParametres
     */
    public function setVente(array $vente): self
    {
        // validation for constraint: array
        if ('' !== ($venteArrayErrorMessage = self::validateVenteForArrayConstraintsFromSetVente($vente))) {
            throw new InvalidArgumentException($venteArrayErrorMessage, __LINE__);
        }
        $this->Vente = $vente;
        
        return $this;
    }
    /**
     * Add item to Vente value
     * @throws InvalidArgumentException
     * @param \StructType\Vente $item
     * @return \StructType\RootWSVenteParametres
     */
    public function addToVente(\StructType\Vente $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Vente) {
            throw new InvalidArgumentException(sprintf('The Vente property can only contain items of type \StructType\Vente, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Vente[] = $item;
        
        return $this;
    }
}
