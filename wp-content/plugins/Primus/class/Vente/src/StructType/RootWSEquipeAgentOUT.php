<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSEquipeAgentOUT StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSEquipeAgentOUT
 * @subpackage Structs
 */
class RootWSEquipeAgentOUT extends AbstractStructBase
{
    /**
     * The Societe
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Societe;
    /**
     * The DateHeure
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $DateHeure;
    /**
     * The Equipe
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Equipe[]
     */
    protected array $Equipe;
    /**
     * Constructor method for RootWSEquipeAgentOUT
     * @uses RootWSEquipeAgentOUT::setSociete()
     * @uses RootWSEquipeAgentOUT::setDateHeure()
     * @uses RootWSEquipeAgentOUT::setEquipe()
     * @param string[] $societe
     * @param string[] $dateHeure
     * @param \StructType\Equipe[] $equipe
     */
    public function __construct(array $societe, array $dateHeure, array $equipe)
    {
        $this
            ->setSociete($societe)
            ->setDateHeure($dateHeure)
            ->setEquipe($equipe);
    }
    /**
     * Get Societe value
     * @return string[]
     */
    public function getSociete(): array
    {
        return $this->Societe;
    }
    /**
     * This method is responsible for validating the values passed to the setSociete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSociete method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSocieteForArrayConstraintsFromSetSociete(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSEquipeAgentOUTSocieteItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSEquipeAgentOUTSocieteItem)) {
                $invalidValues[] = is_object($rootWSEquipeAgentOUTSocieteItem) ? get_class($rootWSEquipeAgentOUTSocieteItem) : sprintf('%s(%s)', gettype($rootWSEquipeAgentOUTSocieteItem), var_export($rootWSEquipeAgentOUTSocieteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Societe property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Societe value
     * @throws InvalidArgumentException
     * @param string[] $societe
     * @return \StructType\RootWSEquipeAgentOUT
     */
    public function setSociete(array $societe): self
    {
        // validation for constraint: array
        if ('' !== ($societeArrayErrorMessage = self::validateSocieteForArrayConstraintsFromSetSociete($societe))) {
            throw new InvalidArgumentException($societeArrayErrorMessage, __LINE__);
        }
        $this->Societe = $societe;
        
        return $this;
    }
    /**
     * Add item to Societe value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\RootWSEquipeAgentOUT
     */
    public function addToSociete(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Societe property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Societe[] = $item;
        
        return $this;
    }
    /**
     * Get DateHeure value
     * @return string[]
     */
    public function getDateHeure(): array
    {
        return $this->DateHeure;
    }
    /**
     * This method is responsible for validating the values passed to the setDateHeure method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDateHeure method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDateHeureForArrayConstraintsFromSetDateHeure(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSEquipeAgentOUTDateHeureItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSEquipeAgentOUTDateHeureItem)) {
                $invalidValues[] = is_object($rootWSEquipeAgentOUTDateHeureItem) ? get_class($rootWSEquipeAgentOUTDateHeureItem) : sprintf('%s(%s)', gettype($rootWSEquipeAgentOUTDateHeureItem), var_export($rootWSEquipeAgentOUTDateHeureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DateHeure property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DateHeure value
     * @throws InvalidArgumentException
     * @param string[] $dateHeure
     * @return \StructType\RootWSEquipeAgentOUT
     */
    public function setDateHeure(array $dateHeure): self
    {
        // validation for constraint: array
        if ('' !== ($dateHeureArrayErrorMessage = self::validateDateHeureForArrayConstraintsFromSetDateHeure($dateHeure))) {
            throw new InvalidArgumentException($dateHeureArrayErrorMessage, __LINE__);
        }
        $this->DateHeure = $dateHeure;
        
        return $this;
    }
    /**
     * Add item to DateHeure value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\RootWSEquipeAgentOUT
     */
    public function addToDateHeure(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The DateHeure property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DateHeure[] = $item;
        
        return $this;
    }
    /**
     * Get Equipe value
     * @return \StructType\Equipe[]
     */
    public function getEquipe(): array
    {
        return $this->Equipe;
    }
    /**
     * This method is responsible for validating the values passed to the setEquipe method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEquipe method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEquipeForArrayConstraintsFromSetEquipe(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSEquipeAgentOUTEquipeItem) {
            // validation for constraint: itemType
            if (!$rootWSEquipeAgentOUTEquipeItem instanceof \StructType\Equipe) {
                $invalidValues[] = is_object($rootWSEquipeAgentOUTEquipeItem) ? get_class($rootWSEquipeAgentOUTEquipeItem) : sprintf('%s(%s)', gettype($rootWSEquipeAgentOUTEquipeItem), var_export($rootWSEquipeAgentOUTEquipeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Equipe property can only contain items of type \StructType\Equipe, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Equipe value
     * @throws InvalidArgumentException
     * @param \StructType\Equipe[] $equipe
     * @return \StructType\RootWSEquipeAgentOUT
     */
    public function setEquipe(array $equipe): self
    {
        // validation for constraint: array
        if ('' !== ($equipeArrayErrorMessage = self::validateEquipeForArrayConstraintsFromSetEquipe($equipe))) {
            throw new InvalidArgumentException($equipeArrayErrorMessage, __LINE__);
        }
        $this->Equipe = $equipe;
        
        return $this;
    }
    /**
     * Add item to Equipe value
     * @throws InvalidArgumentException
     * @param \StructType\Equipe $item
     * @return \StructType\RootWSEquipeAgentOUT
     */
    public function addToEquipe(\StructType\Equipe $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Equipe) {
            throw new InvalidArgumentException(sprintf('The Equipe property can only contain items of type \StructType\Equipe, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Equipe[] = $item;
        
        return $this;
    }
}
