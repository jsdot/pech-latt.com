<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Entrées_Monosociété StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Entrées_Monosociété extends AbstractStructBase
{
    /**
     * The MarchesRecoltants
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $MarchesRecoltants;
    /**
     * The FabricationEnEntree
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FabricationEnEntree;
    /**
     * The ReceptionTransfert
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $ReceptionTransfert;
    /**
     * The OptionAchat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $OptionAchat;
    /**
     * The RetoursVente
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $RetoursVente;
    /**
     * The AchatsEnCours
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AchatsEnCours = null;
    /**
     * The MarchesAchats
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MarchesAchats = null;
    /**
     * The MarchesNegociants
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MarchesNegociants = null;
    /**
     * Constructor method for Entrées_Monosociété
     * @uses Entrées_Monosociété::setMarchesRecoltants()
     * @uses Entrées_Monosociété::setFabricationEnEntree()
     * @uses Entrées_Monosociété::setReceptionTransfert()
     * @uses Entrées_Monosociété::setOptionAchat()
     * @uses Entrées_Monosociété::setRetoursVente()
     * @uses Entrées_Monosociété::setAchatsEnCours()
     * @uses Entrées_Monosociété::setMarchesAchats()
     * @uses Entrées_Monosociété::setMarchesNegociants()
     * @param string[] $marchesRecoltants
     * @param string $fabricationEnEntree
     * @param string[] $receptionTransfert
     * @param string[] $optionAchat
     * @param string[] $retoursVente
     * @param string $achatsEnCours
     * @param string $marchesAchats
     * @param string $marchesNegociants
     */
    public function __construct(array $marchesRecoltants, string $fabricationEnEntree, array $receptionTransfert, array $optionAchat, array $retoursVente, ?string $achatsEnCours = null, ?string $marchesAchats = null, ?string $marchesNegociants = null)
    {
        $this
            ->setMarchesRecoltants($marchesRecoltants)
            ->setFabricationEnEntree($fabricationEnEntree)
            ->setReceptionTransfert($receptionTransfert)
            ->setOptionAchat($optionAchat)
            ->setRetoursVente($retoursVente)
            ->setAchatsEnCours($achatsEnCours)
            ->setMarchesAchats($marchesAchats)
            ->setMarchesNegociants($marchesNegociants);
    }
    /**
     * Get MarchesRecoltants value
     * @return string[]
     */
    public function getMarchesRecoltants(): array
    {
        return $this->MarchesRecoltants;
    }
    /**
     * This method is responsible for validating the values passed to the setMarchesRecoltants method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarchesRecoltants method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarchesRecoltantsForArrayConstraintsFromSetMarchesRecoltants(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MonosociétéMarchesRecoltantsItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MonosociétéMarchesRecoltantsItem)) {
                $invalidValues[] = is_object($entrées_MonosociétéMarchesRecoltantsItem) ? get_class($entrées_MonosociétéMarchesRecoltantsItem) : sprintf('%s(%s)', gettype($entrées_MonosociétéMarchesRecoltantsItem), var_export($entrées_MonosociétéMarchesRecoltantsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MarchesRecoltants property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MarchesRecoltants value
     * @throws InvalidArgumentException
     * @param string[] $marchesRecoltants
     * @return \StructType\Entrées_Monosociété
     */
    public function setMarchesRecoltants(array $marchesRecoltants): self
    {
        // validation for constraint: array
        if ('' !== ($marchesRecoltantsArrayErrorMessage = self::validateMarchesRecoltantsForArrayConstraintsFromSetMarchesRecoltants($marchesRecoltants))) {
            throw new InvalidArgumentException($marchesRecoltantsArrayErrorMessage, __LINE__);
        }
        $this->MarchesRecoltants = $marchesRecoltants;
        
        return $this;
    }
    /**
     * Add item to MarchesRecoltants value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Monosociété
     */
    public function addToMarchesRecoltants(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MarchesRecoltants property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MarchesRecoltants[] = $item;
        
        return $this;
    }
    /**
     * Get FabricationEnEntree value
     * @return string
     */
    public function getFabricationEnEntree(): string
    {
        return $this->FabricationEnEntree;
    }
    /**
     * Set FabricationEnEntree value
     * @param string $fabricationEnEntree
     * @return \StructType\Entrées_Monosociété
     */
    public function setFabricationEnEntree(string $fabricationEnEntree): self
    {
        // validation for constraint: string
        if (!is_null($fabricationEnEntree) && !is_string($fabricationEnEntree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fabricationEnEntree, true), gettype($fabricationEnEntree)), __LINE__);
        }
        $this->FabricationEnEntree = $fabricationEnEntree;
        
        return $this;
    }
    /**
     * Get ReceptionTransfert value
     * @return string[]
     */
    public function getReceptionTransfert(): array
    {
        return $this->ReceptionTransfert;
    }
    /**
     * This method is responsible for validating the values passed to the setReceptionTransfert method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReceptionTransfert method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReceptionTransfertForArrayConstraintsFromSetReceptionTransfert(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MonosociétéReceptionTransfertItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MonosociétéReceptionTransfertItem)) {
                $invalidValues[] = is_object($entrées_MonosociétéReceptionTransfertItem) ? get_class($entrées_MonosociétéReceptionTransfertItem) : sprintf('%s(%s)', gettype($entrées_MonosociétéReceptionTransfertItem), var_export($entrées_MonosociétéReceptionTransfertItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReceptionTransfert property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReceptionTransfert value
     * @throws InvalidArgumentException
     * @param string[] $receptionTransfert
     * @return \StructType\Entrées_Monosociété
     */
    public function setReceptionTransfert(array $receptionTransfert): self
    {
        // validation for constraint: array
        if ('' !== ($receptionTransfertArrayErrorMessage = self::validateReceptionTransfertForArrayConstraintsFromSetReceptionTransfert($receptionTransfert))) {
            throw new InvalidArgumentException($receptionTransfertArrayErrorMessage, __LINE__);
        }
        $this->ReceptionTransfert = $receptionTransfert;
        
        return $this;
    }
    /**
     * Add item to ReceptionTransfert value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Monosociété
     */
    public function addToReceptionTransfert(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ReceptionTransfert property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReceptionTransfert[] = $item;
        
        return $this;
    }
    /**
     * Get OptionAchat value
     * @return string[]
     */
    public function getOptionAchat(): array
    {
        return $this->OptionAchat;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionAchat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionAchat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionAchatForArrayConstraintsFromSetOptionAchat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MonosociétéOptionAchatItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MonosociétéOptionAchatItem)) {
                $invalidValues[] = is_object($entrées_MonosociétéOptionAchatItem) ? get_class($entrées_MonosociétéOptionAchatItem) : sprintf('%s(%s)', gettype($entrées_MonosociétéOptionAchatItem), var_export($entrées_MonosociétéOptionAchatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionAchat property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionAchat value
     * @throws InvalidArgumentException
     * @param string[] $optionAchat
     * @return \StructType\Entrées_Monosociété
     */
    public function setOptionAchat(array $optionAchat): self
    {
        // validation for constraint: array
        if ('' !== ($optionAchatArrayErrorMessage = self::validateOptionAchatForArrayConstraintsFromSetOptionAchat($optionAchat))) {
            throw new InvalidArgumentException($optionAchatArrayErrorMessage, __LINE__);
        }
        $this->OptionAchat = $optionAchat;
        
        return $this;
    }
    /**
     * Add item to OptionAchat value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Monosociété
     */
    public function addToOptionAchat(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OptionAchat property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OptionAchat[] = $item;
        
        return $this;
    }
    /**
     * Get RetoursVente value
     * @return string[]
     */
    public function getRetoursVente(): array
    {
        return $this->RetoursVente;
    }
    /**
     * This method is responsible for validating the values passed to the setRetoursVente method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetoursVente method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetoursVenteForArrayConstraintsFromSetRetoursVente(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $entrées_MonosociétéRetoursVenteItem) {
            // validation for constraint: itemType
            if (!is_string($entrées_MonosociétéRetoursVenteItem)) {
                $invalidValues[] = is_object($entrées_MonosociétéRetoursVenteItem) ? get_class($entrées_MonosociétéRetoursVenteItem) : sprintf('%s(%s)', gettype($entrées_MonosociétéRetoursVenteItem), var_export($entrées_MonosociétéRetoursVenteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RetoursVente property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RetoursVente value
     * @throws InvalidArgumentException
     * @param string[] $retoursVente
     * @return \StructType\Entrées_Monosociété
     */
    public function setRetoursVente(array $retoursVente): self
    {
        // validation for constraint: array
        if ('' !== ($retoursVenteArrayErrorMessage = self::validateRetoursVenteForArrayConstraintsFromSetRetoursVente($retoursVente))) {
            throw new InvalidArgumentException($retoursVenteArrayErrorMessage, __LINE__);
        }
        $this->RetoursVente = $retoursVente;
        
        return $this;
    }
    /**
     * Add item to RetoursVente value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Entrées_Monosociété
     */
    public function addToRetoursVente(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The RetoursVente property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RetoursVente[] = $item;
        
        return $this;
    }
    /**
     * Get AchatsEnCours value
     * @return string|null
     */
    public function getAchatsEnCours(): ?string
    {
        return $this->AchatsEnCours;
    }
    /**
     * Set AchatsEnCours value
     * @param string $achatsEnCours
     * @return \StructType\Entrées_Monosociété
     */
    public function setAchatsEnCours(?string $achatsEnCours = null): self
    {
        // validation for constraint: string
        if (!is_null($achatsEnCours) && !is_string($achatsEnCours)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($achatsEnCours, true), gettype($achatsEnCours)), __LINE__);
        }
        $this->AchatsEnCours = $achatsEnCours;
        
        return $this;
    }
    /**
     * Get MarchesAchats value
     * @return string|null
     */
    public function getMarchesAchats(): ?string
    {
        return $this->MarchesAchats;
    }
    /**
     * Set MarchesAchats value
     * @param string $marchesAchats
     * @return \StructType\Entrées_Monosociété
     */
    public function setMarchesAchats(?string $marchesAchats = null): self
    {
        // validation for constraint: string
        if (!is_null($marchesAchats) && !is_string($marchesAchats)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marchesAchats, true), gettype($marchesAchats)), __LINE__);
        }
        $this->MarchesAchats = $marchesAchats;
        
        return $this;
    }
    /**
     * Get MarchesNegociants value
     * @return string|null
     */
    public function getMarchesNegociants(): ?string
    {
        return $this->MarchesNegociants;
    }
    /**
     * Set MarchesNegociants value
     * @param string $marchesNegociants
     * @return \StructType\Entrées_Monosociété
     */
    public function setMarchesNegociants(?string $marchesNegociants = null): self
    {
        // validation for constraint: string
        if (!is_null($marchesNegociants) && !is_string($marchesNegociants)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marchesNegociants, true), gettype($marchesNegociants)), __LINE__);
        }
        $this->MarchesNegociants = $marchesNegociants;
        
        return $this;
    }
}
