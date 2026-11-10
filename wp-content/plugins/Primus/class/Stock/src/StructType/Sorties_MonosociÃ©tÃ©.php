<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sorties_Monosociété StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Sorties_Monosociété extends AbstractStructBase
{
    /**
     * The FabricationEnSortie
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $FabricationEnSortie;
    /**
     * The MarchesNonFactures
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $MarchesNonFactures;
    /**
     * The MarchesPlanTirage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $MarchesPlanTirage;
    /**
     * The VentesEnCours
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $VentesEnCours;
    /**
     * The ExpeditionTransfert
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $ExpeditionTransfert;
    /**
     * The RetoursAchat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $RetoursAchat;
    /**
     * The OptionVente
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $OptionVente;
    /**
     * Constructor method for Sorties_Monosociété
     * @uses Sorties_Monosociété::setFabricationEnSortie()
     * @uses Sorties_Monosociété::setMarchesNonFactures()
     * @uses Sorties_Monosociété::setMarchesPlanTirage()
     * @uses Sorties_Monosociété::setVentesEnCours()
     * @uses Sorties_Monosociété::setExpeditionTransfert()
     * @uses Sorties_Monosociété::setRetoursAchat()
     * @uses Sorties_Monosociété::setOptionVente()
     * @param string[] $fabricationEnSortie
     * @param string[] $marchesNonFactures
     * @param string[] $marchesPlanTirage
     * @param string $ventesEnCours
     * @param string[] $expeditionTransfert
     * @param string[] $retoursAchat
     * @param string[] $optionVente
     */
    public function __construct(array $fabricationEnSortie, array $marchesNonFactures, array $marchesPlanTirage, string $ventesEnCours, array $expeditionTransfert, array $retoursAchat, array $optionVente)
    {
        $this
            ->setFabricationEnSortie($fabricationEnSortie)
            ->setMarchesNonFactures($marchesNonFactures)
            ->setMarchesPlanTirage($marchesPlanTirage)
            ->setVentesEnCours($ventesEnCours)
            ->setExpeditionTransfert($expeditionTransfert)
            ->setRetoursAchat($retoursAchat)
            ->setOptionVente($optionVente);
    }
    /**
     * Get FabricationEnSortie value
     * @return string[]
     */
    public function getFabricationEnSortie(): array
    {
        return $this->FabricationEnSortie;
    }
    /**
     * This method is responsible for validating the values passed to the setFabricationEnSortie method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFabricationEnSortie method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFabricationEnSortieForArrayConstraintsFromSetFabricationEnSortie(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MonosociétéFabricationEnSortieItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MonosociétéFabricationEnSortieItem)) {
                $invalidValues[] = is_object($sorties_MonosociétéFabricationEnSortieItem) ? get_class($sorties_MonosociétéFabricationEnSortieItem) : sprintf('%s(%s)', gettype($sorties_MonosociétéFabricationEnSortieItem), var_export($sorties_MonosociétéFabricationEnSortieItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FabricationEnSortie property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FabricationEnSortie value
     * @throws InvalidArgumentException
     * @param string[] $fabricationEnSortie
     * @return \StructType\Sorties_Monosociété
     */
    public function setFabricationEnSortie(array $fabricationEnSortie): self
    {
        // validation for constraint: array
        if ('' !== ($fabricationEnSortieArrayErrorMessage = self::validateFabricationEnSortieForArrayConstraintsFromSetFabricationEnSortie($fabricationEnSortie))) {
            throw new InvalidArgumentException($fabricationEnSortieArrayErrorMessage, __LINE__);
        }
        $this->FabricationEnSortie = $fabricationEnSortie;
        
        return $this;
    }
    /**
     * Add item to FabricationEnSortie value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Monosociété
     */
    public function addToFabricationEnSortie(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The FabricationEnSortie property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FabricationEnSortie[] = $item;
        
        return $this;
    }
    /**
     * Get MarchesNonFactures value
     * @return string[]
     */
    public function getMarchesNonFactures(): array
    {
        return $this->MarchesNonFactures;
    }
    /**
     * This method is responsible for validating the values passed to the setMarchesNonFactures method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarchesNonFactures method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarchesNonFacturesForArrayConstraintsFromSetMarchesNonFactures(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MonosociétéMarchesNonFacturesItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MonosociétéMarchesNonFacturesItem)) {
                $invalidValues[] = is_object($sorties_MonosociétéMarchesNonFacturesItem) ? get_class($sorties_MonosociétéMarchesNonFacturesItem) : sprintf('%s(%s)', gettype($sorties_MonosociétéMarchesNonFacturesItem), var_export($sorties_MonosociétéMarchesNonFacturesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MarchesNonFactures property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MarchesNonFactures value
     * @throws InvalidArgumentException
     * @param string[] $marchesNonFactures
     * @return \StructType\Sorties_Monosociété
     */
    public function setMarchesNonFactures(array $marchesNonFactures): self
    {
        // validation for constraint: array
        if ('' !== ($marchesNonFacturesArrayErrorMessage = self::validateMarchesNonFacturesForArrayConstraintsFromSetMarchesNonFactures($marchesNonFactures))) {
            throw new InvalidArgumentException($marchesNonFacturesArrayErrorMessage, __LINE__);
        }
        $this->MarchesNonFactures = $marchesNonFactures;
        
        return $this;
    }
    /**
     * Add item to MarchesNonFactures value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Monosociété
     */
    public function addToMarchesNonFactures(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MarchesNonFactures property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MarchesNonFactures[] = $item;
        
        return $this;
    }
    /**
     * Get MarchesPlanTirage value
     * @return string[]
     */
    public function getMarchesPlanTirage(): array
    {
        return $this->MarchesPlanTirage;
    }
    /**
     * This method is responsible for validating the values passed to the setMarchesPlanTirage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarchesPlanTirage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarchesPlanTirageForArrayConstraintsFromSetMarchesPlanTirage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MonosociétéMarchesPlanTirageItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MonosociétéMarchesPlanTirageItem)) {
                $invalidValues[] = is_object($sorties_MonosociétéMarchesPlanTirageItem) ? get_class($sorties_MonosociétéMarchesPlanTirageItem) : sprintf('%s(%s)', gettype($sorties_MonosociétéMarchesPlanTirageItem), var_export($sorties_MonosociétéMarchesPlanTirageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MarchesPlanTirage property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MarchesPlanTirage value
     * @throws InvalidArgumentException
     * @param string[] $marchesPlanTirage
     * @return \StructType\Sorties_Monosociété
     */
    public function setMarchesPlanTirage(array $marchesPlanTirage): self
    {
        // validation for constraint: array
        if ('' !== ($marchesPlanTirageArrayErrorMessage = self::validateMarchesPlanTirageForArrayConstraintsFromSetMarchesPlanTirage($marchesPlanTirage))) {
            throw new InvalidArgumentException($marchesPlanTirageArrayErrorMessage, __LINE__);
        }
        $this->MarchesPlanTirage = $marchesPlanTirage;
        
        return $this;
    }
    /**
     * Add item to MarchesPlanTirage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Monosociété
     */
    public function addToMarchesPlanTirage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MarchesPlanTirage property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MarchesPlanTirage[] = $item;
        
        return $this;
    }
    /**
     * Get VentesEnCours value
     * @return string
     */
    public function getVentesEnCours(): string
    {
        return $this->VentesEnCours;
    }
    /**
     * Set VentesEnCours value
     * @param string $ventesEnCours
     * @return \StructType\Sorties_Monosociété
     */
    public function setVentesEnCours(string $ventesEnCours): self
    {
        // validation for constraint: string
        if (!is_null($ventesEnCours) && !is_string($ventesEnCours)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ventesEnCours, true), gettype($ventesEnCours)), __LINE__);
        }
        $this->VentesEnCours = $ventesEnCours;
        
        return $this;
    }
    /**
     * Get ExpeditionTransfert value
     * @return string[]
     */
    public function getExpeditionTransfert(): array
    {
        return $this->ExpeditionTransfert;
    }
    /**
     * This method is responsible for validating the values passed to the setExpeditionTransfert method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExpeditionTransfert method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExpeditionTransfertForArrayConstraintsFromSetExpeditionTransfert(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MonosociétéExpeditionTransfertItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MonosociétéExpeditionTransfertItem)) {
                $invalidValues[] = is_object($sorties_MonosociétéExpeditionTransfertItem) ? get_class($sorties_MonosociétéExpeditionTransfertItem) : sprintf('%s(%s)', gettype($sorties_MonosociétéExpeditionTransfertItem), var_export($sorties_MonosociétéExpeditionTransfertItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExpeditionTransfert property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExpeditionTransfert value
     * @throws InvalidArgumentException
     * @param string[] $expeditionTransfert
     * @return \StructType\Sorties_Monosociété
     */
    public function setExpeditionTransfert(array $expeditionTransfert): self
    {
        // validation for constraint: array
        if ('' !== ($expeditionTransfertArrayErrorMessage = self::validateExpeditionTransfertForArrayConstraintsFromSetExpeditionTransfert($expeditionTransfert))) {
            throw new InvalidArgumentException($expeditionTransfertArrayErrorMessage, __LINE__);
        }
        $this->ExpeditionTransfert = $expeditionTransfert;
        
        return $this;
    }
    /**
     * Add item to ExpeditionTransfert value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Monosociété
     */
    public function addToExpeditionTransfert(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ExpeditionTransfert property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExpeditionTransfert[] = $item;
        
        return $this;
    }
    /**
     * Get RetoursAchat value
     * @return string[]
     */
    public function getRetoursAchat(): array
    {
        return $this->RetoursAchat;
    }
    /**
     * This method is responsible for validating the values passed to the setRetoursAchat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetoursAchat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetoursAchatForArrayConstraintsFromSetRetoursAchat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MonosociétéRetoursAchatItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MonosociétéRetoursAchatItem)) {
                $invalidValues[] = is_object($sorties_MonosociétéRetoursAchatItem) ? get_class($sorties_MonosociétéRetoursAchatItem) : sprintf('%s(%s)', gettype($sorties_MonosociétéRetoursAchatItem), var_export($sorties_MonosociétéRetoursAchatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RetoursAchat property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RetoursAchat value
     * @throws InvalidArgumentException
     * @param string[] $retoursAchat
     * @return \StructType\Sorties_Monosociété
     */
    public function setRetoursAchat(array $retoursAchat): self
    {
        // validation for constraint: array
        if ('' !== ($retoursAchatArrayErrorMessage = self::validateRetoursAchatForArrayConstraintsFromSetRetoursAchat($retoursAchat))) {
            throw new InvalidArgumentException($retoursAchatArrayErrorMessage, __LINE__);
        }
        $this->RetoursAchat = $retoursAchat;
        
        return $this;
    }
    /**
     * Add item to RetoursAchat value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Monosociété
     */
    public function addToRetoursAchat(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The RetoursAchat property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RetoursAchat[] = $item;
        
        return $this;
    }
    /**
     * Get OptionVente value
     * @return string[]
     */
    public function getOptionVente(): array
    {
        return $this->OptionVente;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionVente method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionVente method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionVenteForArrayConstraintsFromSetOptionVente(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sorties_MonosociétéOptionVenteItem) {
            // validation for constraint: itemType
            if (!is_string($sorties_MonosociétéOptionVenteItem)) {
                $invalidValues[] = is_object($sorties_MonosociétéOptionVenteItem) ? get_class($sorties_MonosociétéOptionVenteItem) : sprintf('%s(%s)', gettype($sorties_MonosociétéOptionVenteItem), var_export($sorties_MonosociétéOptionVenteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionVente property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionVente value
     * @throws InvalidArgumentException
     * @param string[] $optionVente
     * @return \StructType\Sorties_Monosociété
     */
    public function setOptionVente(array $optionVente): self
    {
        // validation for constraint: array
        if ('' !== ($optionVenteArrayErrorMessage = self::validateOptionVenteForArrayConstraintsFromSetOptionVente($optionVente))) {
            throw new InvalidArgumentException($optionVenteArrayErrorMessage, __LINE__);
        }
        $this->OptionVente = $optionVente;
        
        return $this;
    }
    /**
     * Add item to OptionVente value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Sorties_Monosociété
     */
    public function addToOptionVente(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OptionVente property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OptionVente[] = $item;
        
        return $this;
    }
}
