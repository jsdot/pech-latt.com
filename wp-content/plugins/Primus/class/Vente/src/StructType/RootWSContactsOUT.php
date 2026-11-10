<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSContactsOUT StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSContactsOUT
 * @subpackage Structs
 */
class RootWSContactsOUT extends AbstractStructBase
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
     * - minOccurs: 0 | 1
     * @var string[]
     */
    protected array $DateHeure;
    /**
     * The Vendeur
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Vendeur[]
     */
    protected array $Vendeur;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Contact[]
     */
    protected ?array $Contact = null;
    /**
     * Constructor method for RootWSContactsOUT
     * @uses RootWSContactsOUT::setSociete()
     * @uses RootWSContactsOUT::setDateHeure()
     * @uses RootWSContactsOUT::setVendeur()
     * @uses RootWSContactsOUT::setContact()
     * @param string[] $societe
     * @param string[] $dateHeure
     * @param \StructType\Vendeur[] $vendeur
     * @param \StructType\Contact[] $contact
     */
    public function __construct(array $societe, array $dateHeure, array $vendeur, ?array $contact = null)
    {
        $this
            ->setSociete($societe)
            ->setDateHeure($dateHeure)
            ->setVendeur($vendeur)
            ->setContact($contact);
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
        foreach ($values as $rootWSContactsOUTSocieteItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSContactsOUTSocieteItem)) {
                $invalidValues[] = is_object($rootWSContactsOUTSocieteItem) ? get_class($rootWSContactsOUTSocieteItem) : sprintf('%s(%s)', gettype($rootWSContactsOUTSocieteItem), var_export($rootWSContactsOUTSocieteItem, true));
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
     * @return \StructType\RootWSContactsOUT
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
     * @return \StructType\RootWSContactsOUT
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
        foreach ($values as $rootWSContactsOUTDateHeureItem) {
            // validation for constraint: itemType
            if (!is_string($rootWSContactsOUTDateHeureItem)) {
                $invalidValues[] = is_object($rootWSContactsOUTDateHeureItem) ? get_class($rootWSContactsOUTDateHeureItem) : sprintf('%s(%s)', gettype($rootWSContactsOUTDateHeureItem), var_export($rootWSContactsOUTDateHeureItem, true));
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
     * @return \StructType\RootWSContactsOUT
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
     * @return \StructType\RootWSContactsOUT
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
     * Get Vendeur value
     * @return \StructType\Vendeur[]
     */
    public function getVendeur(): array
    {
        return $this->Vendeur;
    }
    /**
     * This method is responsible for validating the values passed to the setVendeur method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendeur method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendeurForArrayConstraintsFromSetVendeur(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSContactsOUTVendeurItem) {
            // validation for constraint: itemType
            if (!$rootWSContactsOUTVendeurItem instanceof \StructType\Vendeur) {
                $invalidValues[] = is_object($rootWSContactsOUTVendeurItem) ? get_class($rootWSContactsOUTVendeurItem) : sprintf('%s(%s)', gettype($rootWSContactsOUTVendeurItem), var_export($rootWSContactsOUTVendeurItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Vendeur property can only contain items of type \StructType\Vendeur, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Vendeur value
     * @throws InvalidArgumentException
     * @param \StructType\Vendeur[] $vendeur
     * @return \StructType\RootWSContactsOUT
     */
    public function setVendeur(array $vendeur): self
    {
        // validation for constraint: array
        if ('' !== ($vendeurArrayErrorMessage = self::validateVendeurForArrayConstraintsFromSetVendeur($vendeur))) {
            throw new InvalidArgumentException($vendeurArrayErrorMessage, __LINE__);
        }
        $this->Vendeur = $vendeur;
        
        return $this;
    }
    /**
     * Add item to Vendeur value
     * @throws InvalidArgumentException
     * @param \StructType\Vendeur $item
     * @return \StructType\RootWSContactsOUT
     */
    public function addToVendeur(\StructType\Vendeur $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Vendeur) {
            throw new InvalidArgumentException(sprintf('The Vendeur property can only contain items of type \StructType\Vendeur, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Vendeur[] = $item;
        
        return $this;
    }
    /**
     * Get Contact value
     * @return \StructType\Contact[]
     */
    public function getContact(): ?array
    {
        return $this->Contact;
    }
    /**
     * This method is responsible for validating the values passed to the setContact method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactForArrayConstraintsFromSetContact(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSContactsOUTContactItem) {
            // validation for constraint: itemType
            if (!$rootWSContactsOUTContactItem instanceof \StructType\Contact) {
                $invalidValues[] = is_object($rootWSContactsOUTContactItem) ? get_class($rootWSContactsOUTContactItem) : sprintf('%s(%s)', gettype($rootWSContactsOUTContactItem), var_export($rootWSContactsOUTContactItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact property can only contain items of type \StructType\Contact, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact value
     * @throws InvalidArgumentException
     * @param \StructType\Contact[] $contact
     * @return \StructType\RootWSContactsOUT
     */
    public function setContact(?array $contact = null): self
    {
        // validation for constraint: array
        if ('' !== ($contactArrayErrorMessage = self::validateContactForArrayConstraintsFromSetContact($contact))) {
            throw new InvalidArgumentException($contactArrayErrorMessage, __LINE__);
        }
        $this->Contact = $contact;
        
        return $this;
    }
    /**
     * Add item to Contact value
     * @throws InvalidArgumentException
     * @param \StructType\Contact $item
     * @return \StructType\RootWSContactsOUT
     */
    public function addToContact(\StructType\Contact $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Contact) {
            throw new InvalidArgumentException(sprintf('The Contact property can only contain items of type \StructType\Contact, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact[] = $item;
        
        return $this;
    }
}
