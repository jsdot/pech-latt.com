<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Entrées_Multisociété StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Entrées_Multisociété extends AbstractStructBase
{
    /**
     * The MarchesRecoltants_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $MarchesRecoltants_Multi;
    /**
     * The FabricationEnEntree_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $FabricationEnEntree_Multi;
    /**
     * The RetoursVente_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $RetoursVente_Multi;
    /**
     * The OptionAchat_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $OptionAchat_Multi;
    /**
     * The ReceptionTransfert_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $ReceptionTransfert_Multi;
    /**
     * The AchatsEnCours_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AchatsEnCours_Multi = null;
    /**
     * The MarchesAchats_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MarchesAchats_Multi = null;
    /**
     * The MarchesNegociants_Multi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MarchesNegociants_Multi = null;
    /**
     * Constructor method for Entrées_Multisociété
     * @uses Entrées_Multisociété::setMarchesRecoltants_Multi()
     * @uses Entrées_Multisociété::setFabricationEnEntree_Multi()
     * @uses Entrées_Multisociété::setRetoursVente_Multi()
     * @uses Entrées_Multisociété::setOptionAchat_Multi()
     * @uses Entrées_Multisociété::setReceptionTransfert_Multi()
     * @uses Entrées_Multisociété::setAchatsEnCours_Multi()
     * @uses Entrées_Multisociété::setMarchesAchats_Multi()
     * @uses Entrées_Multisociété::setMarchesNegociants_Multi()
     * @param string[] $marchesRecoltants_Multi
     * @param string[] $fabricationEnEntree_Multi
     * @param string[] $retoursVente_Multi
     * @param string[] $optionAchat_Multi
     * @param string[] $receptionTransfert_Multi
     * @param string $achatsEnCours_Multi
     * @param string $marchesAchats_Multi
     * @param string $marchesNegociants_Multi
     */
    public function __construct(array $marchesRecoltants_Multi, array $fabricationEnEntree_Multi, array $retoursVente_Multi, array $optionAchat_Multi, array $receptionTransfert_Multi, ?string $achatsEnCours_Multi = null, ?string $marchesAchats_Multi = null, ?string $marchesNegociants_Multi = null)
    {
        $this
            ->setMarchesRecoltants_Multi($marchesRecoltants_Multi)
            ->setFabricationEnEntree_Multi($fabricationEnEntree_Multi)
            ->setRetoursVente_Multi($retoursVente_Multi)
            ->setOptionAchat_Multi($optionAchat_Multi)
            ->setReceptionTransfert_Multi($receptionTransfert_Multi)
            ->setAchatsEnCours_Multi($achatsEnCours_Multi)
            ->setMarchesAchats_Multi($marchesAchats_Multi)
            ->setMarchesNegociants_Multi($marchesNegociants_Multi);
    }
    /**
     * Get MarchesRecoltants_Multi value
     * @return string[]
     */
    public function getMarchesRecoltants_Multi(): array
    {
        return $this->MarchesRecoltants_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setMarchesRecoltants_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarchesRecoltants_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarchesRecoltants_MultiForArrayConstraintsFromSetMarchesRecoltants_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MultisociétéMarchesRecoltants_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MultisociétéMarchesRecoltants_MultiItem)) {
                $invalidValues[] = is_object($entrées_MultisociétéMarchesRecoltants_MultiItem) ? get_class($entrées_MultisociétéMarchesRecoltants_MultiItem) : sprintf('%s(%s)', gettype($entrées_MultisociétéMarchesRecoltants_MultiItem), var_export($entrées_MultisociétéMarchesRecoltants_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MarchesRecoltants_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MarchesRecoltants_Multi value
     * @throws InvalidArgumentException
     * @param string[] $marchesRecoltants_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setMarchesRecoltants_Multi(array $marchesRecoltants_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($marchesRecoltants_MultiArrayErrorMessage = self::validateMarchesRecoltants_MultiForArrayConstraintsFromSetMarchesRecoltants_Multi($marchesRecoltants_Multi))) {
            throw new InvalidArgumentException($marchesRecoltants_MultiArrayErrorMessage, __LINE__);
        }
        $this->MarchesRecoltants_Multi = $marchesRecoltants_Multi;
        
        return $this;
    }
    /**
     * Add item to MarchesRecoltants_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Multisociété
     */
    public function addToMarchesRecoltants_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MarchesRecoltants_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MarchesRecoltants_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get FabricationEnEntree_Multi value
     * @return string[]
     */
    public function getFabricationEnEntree_Multi(): array
    {
        return $this->FabricationEnEntree_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setFabricationEnEntree_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFabricationEnEntree_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFabricationEnEntree_MultiForArrayConstraintsFromSetFabricationEnEntree_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MultisociétéFabricationEnEntree_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MultisociétéFabricationEnEntree_MultiItem)) {
                $invalidValues[] = is_object($entrées_MultisociétéFabricationEnEntree_MultiItem) ? get_class($entrées_MultisociétéFabricationEnEntree_MultiItem) : sprintf('%s(%s)', gettype($entrées_MultisociétéFabricationEnEntree_MultiItem), var_export($entrées_MultisociétéFabricationEnEntree_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FabricationEnEntree_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FabricationEnEntree_Multi value
     * @throws InvalidArgumentException
     * @param string[] $fabricationEnEntree_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setFabricationEnEntree_Multi(array $fabricationEnEntree_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($fabricationEnEntree_MultiArrayErrorMessage = self::validateFabricationEnEntree_MultiForArrayConstraintsFromSetFabricationEnEntree_Multi($fabricationEnEntree_Multi))) {
            throw new InvalidArgumentException($fabricationEnEntree_MultiArrayErrorMessage, __LINE__);
        }
        $this->FabricationEnEntree_Multi = $fabricationEnEntree_Multi;
        
        return $this;
    }
    /**
     * Add item to FabricationEnEntree_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Multisociété
     */
    public function addToFabricationEnEntree_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The FabricationEnEntree_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FabricationEnEntree_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get RetoursVente_Multi value
     * @return string[]
     */
    public function getRetoursVente_Multi(): array
    {
        return $this->RetoursVente_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setRetoursVente_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetoursVente_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetoursVente_MultiForArrayConstraintsFromSetRetoursVente_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MultisociétéRetoursVente_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MultisociétéRetoursVente_MultiItem)) {
                $invalidValues[] = is_object($entrées_MultisociétéRetoursVente_MultiItem) ? get_class($entrées_MultisociétéRetoursVente_MultiItem) : sprintf('%s(%s)', gettype($entrées_MultisociétéRetoursVente_MultiItem), var_export($entrées_MultisociétéRetoursVente_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RetoursVente_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RetoursVente_Multi value
     * @throws InvalidArgumentException
     * @param string[] $retoursVente_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setRetoursVente_Multi(array $retoursVente_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($retoursVente_MultiArrayErrorMessage = self::validateRetoursVente_MultiForArrayConstraintsFromSetRetoursVente_Multi($retoursVente_Multi))) {
            throw new InvalidArgumentException($retoursVente_MultiArrayErrorMessage, __LINE__);
        }
        $this->RetoursVente_Multi = $retoursVente_Multi;
        
        return $this;
    }
    /**
     * Add item to RetoursVente_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Multisociété
     */
    public function addToRetoursVente_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The RetoursVente_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RetoursVente_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get OptionAchat_Multi value
     * @return string[]
     */
    public function getOptionAchat_Multi(): array
    {
        return $this->OptionAchat_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionAchat_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionAchat_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionAchat_MultiForArrayConstraintsFromSetOptionAchat_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MultisociétéOptionAchat_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MultisociétéOptionAchat_MultiItem)) {
                $invalidValues[] = is_object($entrées_MultisociétéOptionAchat_MultiItem) ? get_class($entrées_MultisociétéOptionAchat_MultiItem) : sprintf('%s(%s)', gettype($entrées_MultisociétéOptionAchat_MultiItem), var_export($entrées_MultisociétéOptionAchat_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionAchat_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionAchat_Multi value
     * @throws InvalidArgumentException
     * @param string[] $optionAchat_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setOptionAchat_Multi(array $optionAchat_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($optionAchat_MultiArrayErrorMessage = self::validateOptionAchat_MultiForArrayConstraintsFromSetOptionAchat_Multi($optionAchat_Multi))) {
            throw new InvalidArgumentException($optionAchat_MultiArrayErrorMessage, __LINE__);
        }
        $this->OptionAchat_Multi = $optionAchat_Multi;
        
        return $this;
    }
    /**
     * Add item to OptionAchat_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Multisociété
     */
    public function addToOptionAchat_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OptionAchat_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OptionAchat_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get ReceptionTransfert_Multi value
     * @return string[]
     */
    public function getReceptionTransfert_Multi(): array
    {
        return $this->ReceptionTransfert_Multi;
    }
    /**
     * This method is responsible for validating the values passed to the setReceptionTransfert_Multi method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReceptionTransfert_Multi method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReceptionTransfert_MultiForArrayConstraintsFromSetReceptionTransfert_Multi(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MultisociétéReceptionTransfert_MultiItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MultisociétéReceptionTransfert_MultiItem)) {
                $invalidValues[] = is_object($entrées_MultisociétéReceptionTransfert_MultiItem) ? get_class($entrées_MultisociétéReceptionTransfert_MultiItem) : sprintf('%s(%s)', gettype($entrées_MultisociétéReceptionTransfert_MultiItem), var_export($entrées_MultisociétéReceptionTransfert_MultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReceptionTransfert_Multi property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReceptionTransfert_Multi value
     * @throws InvalidArgumentException
     * @param string[] $receptionTransfert_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setReceptionTransfert_Multi(array $receptionTransfert_Multi): self
    {
        // validation for constraint: array
        if ('' !== ($receptionTransfert_MultiArrayErrorMessage = self::validateReceptionTransfert_MultiForArrayConstraintsFromSetReceptionTransfert_Multi($receptionTransfert_Multi))) {
            throw new InvalidArgumentException($receptionTransfert_MultiArrayErrorMessage, __LINE__);
        }
        $this->ReceptionTransfert_Multi = $receptionTransfert_Multi;
        
        return $this;
    }
    /**
     * Add item to ReceptionTransfert_Multi value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Multisociété
     */
    public function addToReceptionTransfert_Multi(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ReceptionTransfert_Multi property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReceptionTransfert_Multi[] = $item;
        
        return $this;
    }
    /**
     * Get AchatsEnCours_Multi value
     * @return string|null
     */
    public function getAchatsEnCours_Multi(): ?string
    {
        return $this->AchatsEnCours_Multi;
    }
    /**
     * Set AchatsEnCours_Multi value
     * @param string $achatsEnCours_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setAchatsEnCours_Multi(?string $achatsEnCours_Multi = null): self
    {
        // validation for constraint: string
        if (!is_null($achatsEnCours_Multi) && !is_string($achatsEnCours_Multi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($achatsEnCours_Multi, true), gettype($achatsEnCours_Multi)), __LINE__);
        }
        $this->AchatsEnCours_Multi = $achatsEnCours_Multi;
        
        return $this;
    }
    /**
     * Get MarchesAchats_Multi value
     * @return string|null
     */
    public function getMarchesAchats_Multi(): ?string
    {
        return $this->MarchesAchats_Multi;
    }
    /**
     * Set MarchesAchats_Multi value
     * @param string $marchesAchats_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setMarchesAchats_Multi(?string $marchesAchats_Multi = null): self
    {
        // validation for constraint: string
        if (!is_null($marchesAchats_Multi) && !is_string($marchesAchats_Multi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marchesAchats_Multi, true), gettype($marchesAchats_Multi)), __LINE__);
        }
        $this->MarchesAchats_Multi = $marchesAchats_Multi;
        
        return $this;
    }
    /**
     * Get MarchesNegociants_Multi value
     * @return string|null
     */
    public function getMarchesNegociants_Multi(): ?string
    {
        return $this->MarchesNegociants_Multi;
    }
    /**
     * Set MarchesNegociants_Multi value
     * @param string $marchesNegociants_Multi
     * @return \StructType\Entrées_Multisociété
     */
    public function setMarchesNegociants_Multi(?string $marchesNegociants_Multi = null): self
    {
        // validation for constraint: string
        if (!is_null($marchesNegociants_Multi) && !is_string($marchesNegociants_Multi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marchesNegociants_Multi, true), gettype($marchesNegociants_Multi)), __LINE__);
        }
        $this->MarchesNegociants_Multi = $marchesNegociants_Multi;
        
        return $this;
    }
}
