<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sorties_Multisociété StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Sorties_Multisociété extends AbstractStructBase
{
    /**
     * The FabricationEnSortie_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $FabricationEnSortie_Multi;
    /**
     * The MarchesNonFactures_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $MarchesNonFactures_Multi;
    /**
     * The MarchesPlanTirage_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $MarchesPlanTirage_Multi;
    /**
     * The VentesEnCours_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $VentesEnCours_Multi;
    /**
     * The ExpeditionTransfert_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $ExpeditionTransfert_Multi;
    /**
     * The RetoursAchat_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $RetoursAchat_Multi;
    /**
     * The OptionVente_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $OptionVente_Multi;
    /**
     * Constructor method for Sorties_Multisociété
     * @uses Sorties_Multisociété::setFabricationEnSortie_Multi()
     * @uses Sorties_Multisociété::setMarchesNonFactures_Multi()
     * @uses Sorties_Multisociété::setMarchesPlanTirage_Multi()
     * @uses Sorties_Multisociété::setVentesEnCours_Multi()
     * @uses Sorties_Multisociété::setExpeditionTransfert_Multi()
     * @uses Sorties_Multisociété::setRetoursAchat_Multi()
     * @uses Sorties_Multisociété::setOptionVente_Multi()
     * @param string[] $fabricationEnSortie_Multi
     * @param string[] $marchesNonFactures_Multi
     * @param string[] $marchesPlanTirage_Multi
     * @param string[] $ventesEnCours_Multi
     * @param string[] $expeditionTransfert_Multi
     * @param string[] $retoursAchat_Multi
     * @param string[] $optionVente_Multi
     */
    public function __construct(array $fabricationEnSortie_Multi, array $marchesNonFactures_Multi, array $marchesPlanTirage_Multi, array $ventesEnCours_Multi, array $expeditionTransfert_Multi, array $retoursAchat_Multi, array $optionVente_Multi)
    {
        $this
            ->setFabricationEnSortie_Multi($fabricationEnSortie_Multi)
            ->setMarchesNonFactures_Multi($marchesNonFactures_Multi)
            ->setMarchesPlanTirage_Multi($marchesPlanTirage_Multi)
            ->setVentesEnCours_Multi($ventesEnCours_Multi)
            ->setExpeditionTransfert_Multi($expeditionTransfert_Multi)
            ->setRetoursAchat_Multi($retoursAchat_Multi)
            ->setOptionVente_Multi($optionVente_Multi);
    }
    /**
     * Get FabricationEnSortie_Multi value
     * @return string[]
     */
    public function getFabricationEnSortie_Multi(): array
    {
        return $this->FabricationEnSortie_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setFabricationEnSortie_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFabricationEnSortie_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFabricationEnSortie_MultiForArrayConstraintsFromSetFabricationEnSortie_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MultisociétéFabricationEnSortie_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MultisociétéFabricationEnSortie_MultiItem)) {
                $invalidValues[] = is_object($sorties_MultisociétéFabricationEnSortie_MultiItem) ? get_class($sorties_MultisociétéFabricationEnSortie_MultiItem) : sprintf('%s(%s)', gettype($sorties_MultisociétéFabricationEnSortie_MultiItem), var_export($sorties_MultisociétéFabricationEnSortie_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FabricationEnSortie_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FabricationEnSortie_Multi value
     * @throws InvalidArgumentException
     * @param string[] $fabricationEnSortie_Multi
     * @return \StructType\Sorties_Multisociété
     */
    public function setFabricationEnSortie_Multi(array $fabricationEnSortie_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($fabricationEnSortie_MultiArrayErrorMessage = self::validateFabricationEnSortie_MultiForArrayConstraintsFromSetFabricationEnSortie_Multi($fabricationEnSortie_Multi))) {
            throw new InvalidArgumentException($fabricationEnSortie_MultiArrayErrorMessage, __LINE__);
        }
        $this->FabricationEnSortie_Multi = $fabricationEnSortie_Multi;
        
        return $this;
    }
    /**
     * Add item to FabricationEnSortie_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Multisociété
     */
    public function addToFabricationEnSortie_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The FabricationEnSortie_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FabricationEnSortie_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get MarchesNonFactures_Multi value
     * @return string[]
     */
    public function getMarchesNonFactures_Multi(): array
    {
        return $this->MarchesNonFactures_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setMarchesNonFactures_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarchesNonFactures_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarchesNonFactures_MultiForArrayConstraintsFromSetMarchesNonFactures_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MultisociétéMarchesNonFactures_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MultisociétéMarchesNonFactures_MultiItem)) {
                $invalidValues[] = is_object($sorties_MultisociétéMarchesNonFactures_MultiItem) ? get_class($sorties_MultisociétéMarchesNonFactures_MultiItem) : sprintf('%s(%s)', gettype($sorties_MultisociétéMarchesNonFactures_MultiItem), var_export($sorties_MultisociétéMarchesNonFactures_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MarchesNonFactures_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MarchesNonFactures_Multi value
     * @throws InvalidArgumentException
     * @param string[] $marchesNonFactures_Multi
     * @return \StructType\Sorties_Multisociété
     */
    public function setMarchesNonFactures_Multi(array $marchesNonFactures_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($marchesNonFactures_MultiArrayErrorMessage = self::validateMarchesNonFactures_MultiForArrayConstraintsFromSetMarchesNonFactures_Multi($marchesNonFactures_Multi))) {
            throw new InvalidArgumentException($marchesNonFactures_MultiArrayErrorMessage, __LINE__);
        }
        $this->MarchesNonFactures_Multi = $marchesNonFactures_Multi;
        
        return $this;
    }
    /**
     * Add item to MarchesNonFactures_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Multisociété
     */
    public function addToMarchesNonFactures_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MarchesNonFactures_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MarchesNonFactures_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get MarchesPlanTirage_Multi value
     * @return string[]
     */
    public function getMarchesPlanTirage_Multi(): array
    {
        return $this->MarchesPlanTirage_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setMarchesPlanTirage_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarchesPlanTirage_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarchesPlanTirage_MultiForArrayConstraintsFromSetMarchesPlanTirage_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MultisociétéMarchesPlanTirage_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MultisociétéMarchesPlanTirage_MultiItem)) {
                $invalidValues[] = is_object($sorties_MultisociétéMarchesPlanTirage_MultiItem) ? get_class($sorties_MultisociétéMarchesPlanTirage_MultiItem) : sprintf('%s(%s)', gettype($sorties_MultisociétéMarchesPlanTirage_MultiItem), var_export($sorties_MultisociétéMarchesPlanTirage_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MarchesPlanTirage_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MarchesPlanTirage_Multi value
     * @throws InvalidArgumentException
     * @param string[] $marchesPlanTirage_Multi
     * @return \StructType\Sorties_Multisociété
     */
    public function setMarchesPlanTirage_Multi(array $marchesPlanTirage_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($marchesPlanTirage_MultiArrayErrorMessage = self::validateMarchesPlanTirage_MultiForArrayConstraintsFromSetMarchesPlanTirage_Multi($marchesPlanTirage_Multi))) {
            throw new InvalidArgumentException($marchesPlanTirage_MultiArrayErrorMessage, __LINE__);
        }
        $this->MarchesPlanTirage_Multi = $marchesPlanTirage_Multi;
        
        return $this;
    }
    /**
     * Add item to MarchesPlanTirage_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Multisociété
     */
    public function addToMarchesPlanTirage_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MarchesPlanTirage_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MarchesPlanTirage_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get VentesEnCours_Multi value
     * @return string[]
     */
    public function getVentesEnCours_Multi(): array
    {
        return $this->VentesEnCours_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setVentesEnCours_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVentesEnCours_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVentesEnCours_MultiForArrayConstraintsFromSetVentesEnCours_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MultisociétéVentesEnCours_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MultisociétéVentesEnCours_MultiItem)) {
                $invalidValues[] = is_object($sorties_MultisociétéVentesEnCours_MultiItem) ? get_class($sorties_MultisociétéVentesEnCours_MultiItem) : sprintf('%s(%s)', gettype($sorties_MultisociétéVentesEnCours_MultiItem), var_export($sorties_MultisociétéVentesEnCours_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VentesEnCours_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VentesEnCours_Multi value
     * @throws InvalidArgumentException
     * @param string[] $ventesEnCours_Multi
     * @return \StructType\Sorties_Multisociété
     */
    public function setVentesEnCours_Multi(array $ventesEnCours_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($ventesEnCours_MultiArrayErrorMessage = self::validateVentesEnCours_MultiForArrayConstraintsFromSetVentesEnCours_Multi($ventesEnCours_Multi))) {
            throw new InvalidArgumentException($ventesEnCours_MultiArrayErrorMessage, __LINE__);
        }
        $this->VentesEnCours_Multi = $ventesEnCours_Multi;
        
        return $this;
    }
    /**
     * Add item to VentesEnCours_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Multisociété
     */
    public function addToVentesEnCours_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The VentesEnCours_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VentesEnCours_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get ExpeditionTransfert_Multi value
     * @return string[]
     */
    public function getExpeditionTransfert_Multi(): array
    {
        return $this->ExpeditionTransfert_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setExpeditionTransfert_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExpeditionTransfert_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExpeditionTransfert_MultiForArrayConstraintsFromSetExpeditionTransfert_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MultisociétéExpeditionTransfert_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MultisociétéExpeditionTransfert_MultiItem)) {
                $invalidValues[] = is_object($sorties_MultisociétéExpeditionTransfert_MultiItem) ? get_class($sorties_MultisociétéExpeditionTransfert_MultiItem) : sprintf('%s(%s)', gettype($sorties_MultisociétéExpeditionTransfert_MultiItem), var_export($sorties_MultisociétéExpeditionTransfert_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExpeditionTransfert_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExpeditionTransfert_Multi value
     * @throws InvalidArgumentException
     * @param string[] $expeditionTransfert_Multi
     * @return \StructType\Sorties_Multisociété
     */
    public function setExpeditionTransfert_Multi(array $expeditionTransfert_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($expeditionTransfert_MultiArrayErrorMessage = self::validateExpeditionTransfert_MultiForArrayConstraintsFromSetExpeditionTransfert_Multi($expeditionTransfert_Multi))) {
            throw new InvalidArgumentException($expeditionTransfert_MultiArrayErrorMessage, __LINE__);
        }
        $this->ExpeditionTransfert_Multi = $expeditionTransfert_Multi;
        
        return $this;
    }
    /**
     * Add item to ExpeditionTransfert_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Multisociété
     */
    public function addToExpeditionTransfert_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ExpeditionTransfert_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExpeditionTransfert_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get RetoursAchat_Multi value
     * @return string[]
     */
    public function getRetoursAchat_Multi(): array
    {
        return $this->RetoursAchat_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setRetoursAchat_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetoursAchat_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetoursAchat_MultiForArrayConstraintsFromSetRetoursAchat_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MultisociétéRetoursAchat_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MultisociétéRetoursAchat_MultiItem)) {
                $invalidValues[] = is_object($sorties_MultisociétéRetoursAchat_MultiItem) ? get_class($sorties_MultisociétéRetoursAchat_MultiItem) : sprintf('%s(%s)', gettype($sorties_MultisociétéRetoursAchat_MultiItem), var_export($sorties_MultisociétéRetoursAchat_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RetoursAchat_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RetoursAchat_Multi value
     * @throws InvalidArgumentException
     * @param string[] $retoursAchat_Multi
     * @return \StructType\Sorties_Multisociété
     */
    public function setRetoursAchat_Multi(array $retoursAchat_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($retoursAchat_MultiArrayErrorMessage = self::validateRetoursAchat_MultiForArrayConstraintsFromSetRetoursAchat_Multi($retoursAchat_Multi))) {
            throw new InvalidArgumentException($retoursAchat_MultiArrayErrorMessage, __LINE__);
        }
        $this->RetoursAchat_Multi = $retoursAchat_Multi;
        
        return $this;
    }
    /**
     * Add item to RetoursAchat_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Multisociété
     */
    public function addToRetoursAchat_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The RetoursAchat_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RetoursAchat_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get OptionVente_Multi value
     * @return string[]
     */
    public function getOptionVente_Multi(): array
    {
        return $this->OptionVente_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionVente_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionVente_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionVente_MultiForArrayConstraintsFromSetOptionVente_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MultisociétéOptionVente_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MultisociétéOptionVente_MultiItem)) {
                $invalidValues[] = is_object($sorties_MultisociétéOptionVente_MultiItem) ? get_class($sorties_MultisociétéOptionVente_MultiItem) : sprintf('%s(%s)', gettype($sorties_MultisociétéOptionVente_MultiItem), var_export($sorties_MultisociétéOptionVente_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionVente_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionVente_Multi value
     * @throws InvalidArgumentException
     * @param string[] $optionVente_Multi
     * @return \StructType\Sorties_Multisociété
     */
    public function setOptionVente_Multi(array $optionVente_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($optionVente_MultiArrayErrorMessage = self::validateOptionVente_MultiForArrayConstraintsFromSetOptionVente_Multi($optionVente_Multi))) {
            throw new InvalidArgumentException($optionVente_MultiArrayErrorMessage, __LINE__);
        }
        $this->OptionVente_Multi = $optionVente_Multi;
        
        return $this;
    }
    /**
     * Add item to OptionVente_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Multisociété
     */
    public function addToOptionVente_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OptionVente_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OptionVente_Multi[] = $item;
        
        return $this;
    }
}
