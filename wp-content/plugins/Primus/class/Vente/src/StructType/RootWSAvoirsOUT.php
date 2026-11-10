<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSAvoirsOUT StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSAvoirsOUT
 * @subpackage Structs
 */
class RootWSAvoirsOUT extends AbstractStructBase
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
     * The Header
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Header[]
     */
    protected array $Header;
    /**
     * Constructor method for RootWSAvoirsOUT
     * @uses RootWSAvoirsOUT::setSociete()
     * @uses RootWSAvoirsOUT::setDateHeure()
     * @uses RootWSAvoirsOUT::setHeader()
     * @param string[] $societe
     * @param string[] $dateHeure
     * @param \StructType\Header[] $header
     */
    public function __construct(array $societe, array $dateHeure, array $header)
    {
        $this
            ->setSociete($societe)
            ->setDateHeure($dateHeure)
            ->setHeader($header);
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
        foreach ($values as $rootWSAvoirsOUTSocieteItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSAvoirsOUTSocieteItem)) {
                $invalidValues[] = is_object($rootWSAvoirsOUTSocieteItem) ? get_class($rootWSAvoirsOUTSocieteItem) : sprintf('%s(%s)', gettype($rootWSAvoirsOUTSocieteItem), var_export($rootWSAvoirsOUTSocieteItem, true));
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
     * @return \StructType\RootWSAvoirsOUT
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
     * @return \StructType\RootWSAvoirsOUT
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
        foreach ($values as $rootWSAvoirsOUTDateHeureItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSAvoirsOUTDateHeureItem)) {
                $invalidValues[] = is_object($rootWSAvoirsOUTDateHeureItem) ? get_class($rootWSAvoirsOUTDateHeureItem) : sprintf('%s(%s)', gettype($rootWSAvoirsOUTDateHeureItem), var_export($rootWSAvoirsOUTDateHeureItem, true));
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
     * @return \StructType\RootWSAvoirsOUT
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
     * @return \StructType\RootWSAvoirsOUT
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
     * Get Header value
     * @return \StructType\Header[]
     */
    public function getHeader(): array
    {
        return $this->Header;
    }
    /**
     * This method is responsible for validating the values passed to the setHeader method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHeader method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHeaderForArrayConstraintsFromSetHeader(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSAvoirsOUTHeaderItem) {
            // validation for constraint: itemType
            if (!$rootWSAvoirsOUTHeaderItem instanceof \StructType\Header) {
                $invalidValues[] = is_object($rootWSAvoirsOUTHeaderItem) ? get_class($rootWSAvoirsOUTHeaderItem) : sprintf('%s(%s)', gettype($rootWSAvoirsOUTHeaderItem), var_export($rootWSAvoirsOUTHeaderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Header property can only contain items of type \StructType\Header, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Header value
     * @throws InvalidArgumentException
     * @param \StructType\Header[] $header
     * @return \StructType\RootWSAvoirsOUT
     */
    public function setHeader(array $header): self
    {
        // validation for constraint: array
        if ('' !== ($headerArrayErrorMessage = self::validateHeaderForArrayConstraintsFromSetHeader($header))) {
            throw new InvalidArgumentException($headerArrayErrorMessage, __LINE__);
        }
        $this->Header = $header;
        
        return $this;
    }
    /**
     * Add item to Header value
     * @throws InvalidArgumentException
     * @param \StructType\Header $item
     * @return \StructType\RootWSAvoirsOUT
     */
    public function addToHeader(\StructType\Header $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Header) {
            throw new InvalidArgumentException(sprintf('The Header property can only contain items of type \StructType\Header, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Header[] = $item;
        
        return $this;
    }
}
