<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSFeuilleReglement StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSFeuilleReglement
 * @subpackage Structs
 */
class RootWSFeuilleReglement extends AbstractStructBase
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
     * The PW_GenJournalLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\PW_GenJournalLine[]
     */
    protected array $PW_GenJournalLine;
    /**
     * Constructor method for RootWSFeuilleReglement
     * @uses RootWSFeuilleReglement::setSociete()
     * @uses RootWSFeuilleReglement::setDateHeure()
     * @uses RootWSFeuilleReglement::setPW_GenJournalLine()
     * @param string[] $societe
     * @param string[] $dateHeure
     * @param \StructType\PW_GenJournalLine[] $pW_GenJournalLine
     */
    public function __construct(array $societe, array $dateHeure, array $pW_GenJournalLine)
    {
        $this
            ->setSociete($societe)
            ->setDateHeure($dateHeure)
            ->setPW_GenJournalLine($pW_GenJournalLine);
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
        foreach ($values as $rootWSFeuilleReglementSocieteItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSFeuilleReglementSocieteItem)) {
                $invalidValues[] = is_object($rootWSFeuilleReglementSocieteItem) ? get_class($rootWSFeuilleReglementSocieteItem) : sprintf('%s(%s)', gettype($rootWSFeuilleReglementSocieteItem), var_export($rootWSFeuilleReglementSocieteItem, true));
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
     * @return \StructType\RootWSFeuilleReglement
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
     * @return \StructType\RootWSFeuilleReglement
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
        foreach ($values as $rootWSFeuilleReglementDateHeureItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSFeuilleReglementDateHeureItem)) {
                $invalidValues[] = is_object($rootWSFeuilleReglementDateHeureItem) ? get_class($rootWSFeuilleReglementDateHeureItem) : sprintf('%s(%s)', gettype($rootWSFeuilleReglementDateHeureItem), var_export($rootWSFeuilleReglementDateHeureItem, true));
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
     * @return \StructType\RootWSFeuilleReglement
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
     * @return \StructType\RootWSFeuilleReglement
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
     * Get PW_GenJournalLine value
     * @return \StructType\PW_GenJournalLine[]
     */
    public function getPW_GenJournalLine(): array
    {
        return $this->PW_GenJournalLine;
    }
    /**
     * This method is responsible for validating the values passed to the setPW_GenJournalLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPW_GenJournalLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePW_GenJournalLineForArrayConstraintsFromSetPW_GenJournalLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSFeuilleReglementPW_GenJournalLineItem) {
            // validation for constraint: itemType
            if (!$rootWSFeuilleReglementPW_GenJournalLineItem instanceof \StructType\PW_GenJournalLine) {
                $invalidValues[] = is_object($rootWSFeuilleReglementPW_GenJournalLineItem) ? get_class($rootWSFeuilleReglementPW_GenJournalLineItem) : sprintf('%s(%s)', gettype($rootWSFeuilleReglementPW_GenJournalLineItem), var_export($rootWSFeuilleReglementPW_GenJournalLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PW_GenJournalLine property can only contain items of type \StructType\PW_GenJournalLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PW_GenJournalLine value
     * @throws InvalidArgumentException
     * @param \StructType\PW_GenJournalLine[] $pW_GenJournalLine
     * @return \StructType\RootWSFeuilleReglement
     */
    public function setPW_GenJournalLine(array $pW_GenJournalLine): self
    {
        // validation for constraint: array
        if ('' !== ($pW_GenJournalLineArrayErrorMessage = self::validatePW_GenJournalLineForArrayConstraintsFromSetPW_GenJournalLine($pW_GenJournalLine))) {
            throw new InvalidArgumentException($pW_GenJournalLineArrayErrorMessage, __LINE__);
        }
        $this->PW_GenJournalLine = $pW_GenJournalLine;
        
        return $this;
    }
    /**
     * Add item to PW_GenJournalLine value
     * @throws InvalidArgumentException
     * @param \StructType\PW_GenJournalLine $item
     * @return \StructType\RootWSFeuilleReglement
     */
    public function addToPW_GenJournalLine(\StructType\PW_GenJournalLine $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PW_GenJournalLine) {
            throw new InvalidArgumentException(sprintf('The PW_GenJournalLine property can only contain items of type \StructType\PW_GenJournalLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PW_GenJournalLine[] = $item;
        
        return $this;
    }
}
