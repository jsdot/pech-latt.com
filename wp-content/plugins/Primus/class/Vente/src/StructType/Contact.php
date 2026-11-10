<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Contact extends AbstractStructBase
{
    /**
     * The Contact_No
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_No;
    /**
     * The Contact_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_Name;
    /**
     * The Contact_Email
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_Email;
    /**
     * The Contact_PhoneNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_PhoneNo;
    /**
     * The Contact_TelexNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_TelexNo;
    /**
     * The Contact_Homepage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_Homepage;
    /**
     * The Contact_PortableNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_PortableNo;
    /**
     * The Contact_Fonction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Contact_Fonction;
    /**
     * The Customer_No
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Customer_No;
    /**
     * The Customer_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Customer_Name;
    /**
     * The ContactVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ContactVide = null;
    /**
     * The TypeAction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $TypeAction = null;
    /**
     * The Contact_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Contact_Type = null;
    /**
     * The CodeRelationdAffaires
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeRelationdAffaires = null;
    /**
     * Constructor method for Contact
     * @uses Contact::setContact_No()
     * @uses Contact::setContact_Name()
     * @uses Contact::setContact_Email()
     * @uses Contact::setContact_PhoneNo()
     * @uses Contact::setContact_TelexNo()
     * @uses Contact::setContact_Homepage()
     * @uses Contact::setContact_PortableNo()
     * @uses Contact::setContact_Fonction()
     * @uses Contact::setCustomer_No()
     * @uses Contact::setCustomer_Name()
     * @uses Contact::setContactVide()
     * @uses Contact::setTypeAction()
     * @uses Contact::setContact_Type()
     * @uses Contact::setCodeRelationdAffaires()
     * @param string[] $contact_No
     * @param string[] $contact_Name
     * @param string[] $contact_Email
     * @param string[] $contact_PhoneNo
     * @param string[] $contact_TelexNo
     * @param string[] $contact_Homepage
     * @param string[] $contact_PortableNo
     * @param string[] $contact_Fonction
     * @param string[] $customer_No
     * @param string[] $customer_Name
     * @param string $contactVide
     * @param string[] $typeAction
     * @param string[] $contact_Type
     * @param string $codeRelationdAffaires
     */
    public function __construct(array $contact_No, array $contact_Name, array $contact_Email, array $contact_PhoneNo, array $contact_TelexNo, array $contact_Homepage, array $contact_PortableNo, array $contact_Fonction, array $customer_No, array $customer_Name, ?string $contactVide = null, ?array $typeAction = null, ?array $contact_Type = null, ?string $codeRelationdAffaires = null)
    {
        $this
            ->setContact_No($contact_No)
            ->setContact_Name($contact_Name)
            ->setContact_Email($contact_Email)
            ->setContact_PhoneNo($contact_PhoneNo)
            ->setContact_TelexNo($contact_TelexNo)
            ->setContact_Homepage($contact_Homepage)
            ->setContact_PortableNo($contact_PortableNo)
            ->setContact_Fonction($contact_Fonction)
            ->setCustomer_No($customer_No)
            ->setCustomer_Name($customer_Name)
            ->setContactVide($contactVide)
            ->setTypeAction($typeAction)
            ->setContact_Type($contact_Type)
            ->setCodeRelationdAffaires($codeRelationdAffaires);
    }
    /**
     * Get Contact_No value
     * @return string[]
     */
    public function getContact_No(): array
    {
        return $this->Contact_No;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_No method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_No method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_NoForArrayConstraintsFromSetContact_No(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_NoItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_NoItem)) {
                $invalidValues[] = is_object($contactContact_NoItem) ? get_class($contactContact_NoItem) : sprintf('%s(%s)', gettype($contactContact_NoItem), var_export($contactContact_NoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_No property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_No value
     * @throws InvalidArgumentException
     * @param string[] $contact_No
     * @return \StructType\Contact
     */
    public function setContact_No(array $contact_No): self
    {
        // validation for constraint: array
        if ('' !== ($contact_NoArrayErrorMessage = self::validateContact_NoForArrayConstraintsFromSetContact_No($contact_No))) {
            throw new InvalidArgumentException($contact_NoArrayErrorMessage, __LINE__);
        }
        $this->Contact_No = $contact_No;
        
        return $this;
    }
    /**
     * Add item to Contact_No value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_No(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_No property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_No[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_Name value
     * @return string[]
     */
    public function getContact_Name(): array
    {
        return $this->Contact_Name;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_Name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_Name method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_NameForArrayConstraintsFromSetContact_Name(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_NameItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_NameItem)) {
                $invalidValues[] = is_object($contactContact_NameItem) ? get_class($contactContact_NameItem) : sprintf('%s(%s)', gettype($contactContact_NameItem), var_export($contactContact_NameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_Name property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_Name value
     * @throws InvalidArgumentException
     * @param string[] $contact_Name
     * @return \StructType\Contact
     */
    public function setContact_Name(array $contact_Name): self
    {
        // validation for constraint: array
        if ('' !== ($contact_NameArrayErrorMessage = self::validateContact_NameForArrayConstraintsFromSetContact_Name($contact_Name))) {
            throw new InvalidArgumentException($contact_NameArrayErrorMessage, __LINE__);
        }
        $this->Contact_Name = $contact_Name;
        
        return $this;
    }
    /**
     * Add item to Contact_Name value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_Name(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_Name property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_Name[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_Email value
     * @return string[]
     */
    public function getContact_Email(): array
    {
        return $this->Contact_Email;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_Email method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_Email method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_EmailForArrayConstraintsFromSetContact_Email(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_EmailItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_EmailItem)) {
                $invalidValues[] = is_object($contactContact_EmailItem) ? get_class($contactContact_EmailItem) : sprintf('%s(%s)', gettype($contactContact_EmailItem), var_export($contactContact_EmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_Email property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_Email value
     * @throws InvalidArgumentException
     * @param string[] $contact_Email
     * @return \StructType\Contact
     */
    public function setContact_Email(array $contact_Email): self
    {
        // validation for constraint: array
        if ('' !== ($contact_EmailArrayErrorMessage = self::validateContact_EmailForArrayConstraintsFromSetContact_Email($contact_Email))) {
            throw new InvalidArgumentException($contact_EmailArrayErrorMessage, __LINE__);
        }
        $this->Contact_Email = $contact_Email;
        
        return $this;
    }
    /**
     * Add item to Contact_Email value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_Email(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_Email property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_Email[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_PhoneNo value
     * @return string[]
     */
    public function getContact_PhoneNo(): array
    {
        return $this->Contact_PhoneNo;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_PhoneNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_PhoneNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_PhoneNoForArrayConstraintsFromSetContact_PhoneNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_PhoneNoItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_PhoneNoItem)) {
                $invalidValues[] = is_object($contactContact_PhoneNoItem) ? get_class($contactContact_PhoneNoItem) : sprintf('%s(%s)', gettype($contactContact_PhoneNoItem), var_export($contactContact_PhoneNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_PhoneNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_PhoneNo value
     * @throws InvalidArgumentException
     * @param string[] $contact_PhoneNo
     * @return \StructType\Contact
     */
    public function setContact_PhoneNo(array $contact_PhoneNo): self
    {
        // validation for constraint: array
        if ('' !== ($contact_PhoneNoArrayErrorMessage = self::validateContact_PhoneNoForArrayConstraintsFromSetContact_PhoneNo($contact_PhoneNo))) {
            throw new InvalidArgumentException($contact_PhoneNoArrayErrorMessage, __LINE__);
        }
        $this->Contact_PhoneNo = $contact_PhoneNo;
        
        return $this;
    }
    /**
     * Add item to Contact_PhoneNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_PhoneNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_PhoneNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_PhoneNo[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_TelexNo value
     * @return string[]
     */
    public function getContact_TelexNo(): array
    {
        return $this->Contact_TelexNo;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_TelexNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_TelexNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_TelexNoForArrayConstraintsFromSetContact_TelexNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_TelexNoItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_TelexNoItem)) {
                $invalidValues[] = is_object($contactContact_TelexNoItem) ? get_class($contactContact_TelexNoItem) : sprintf('%s(%s)', gettype($contactContact_TelexNoItem), var_export($contactContact_TelexNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_TelexNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_TelexNo value
     * @throws InvalidArgumentException
     * @param string[] $contact_TelexNo
     * @return \StructType\Contact
     */
    public function setContact_TelexNo(array $contact_TelexNo): self
    {
        // validation for constraint: array
        if ('' !== ($contact_TelexNoArrayErrorMessage = self::validateContact_TelexNoForArrayConstraintsFromSetContact_TelexNo($contact_TelexNo))) {
            throw new InvalidArgumentException($contact_TelexNoArrayErrorMessage, __LINE__);
        }
        $this->Contact_TelexNo = $contact_TelexNo;
        
        return $this;
    }
    /**
     * Add item to Contact_TelexNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_TelexNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_TelexNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_TelexNo[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_Homepage value
     * @return string[]
     */
    public function getContact_Homepage(): array
    {
        return $this->Contact_Homepage;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_Homepage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_Homepage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_HomepageForArrayConstraintsFromSetContact_Homepage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_HomepageItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_HomepageItem)) {
                $invalidValues[] = is_object($contactContact_HomepageItem) ? get_class($contactContact_HomepageItem) : sprintf('%s(%s)', gettype($contactContact_HomepageItem), var_export($contactContact_HomepageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_Homepage property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_Homepage value
     * @throws InvalidArgumentException
     * @param string[] $contact_Homepage
     * @return \StructType\Contact
     */
    public function setContact_Homepage(array $contact_Homepage): self
    {
        // validation for constraint: array
        if ('' !== ($contact_HomepageArrayErrorMessage = self::validateContact_HomepageForArrayConstraintsFromSetContact_Homepage($contact_Homepage))) {
            throw new InvalidArgumentException($contact_HomepageArrayErrorMessage, __LINE__);
        }
        $this->Contact_Homepage = $contact_Homepage;
        
        return $this;
    }
    /**
     * Add item to Contact_Homepage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_Homepage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_Homepage property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_Homepage[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_PortableNo value
     * @return string[]
     */
    public function getContact_PortableNo(): array
    {
        return $this->Contact_PortableNo;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_PortableNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_PortableNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_PortableNoForArrayConstraintsFromSetContact_PortableNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_PortableNoItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_PortableNoItem)) {
                $invalidValues[] = is_object($contactContact_PortableNoItem) ? get_class($contactContact_PortableNoItem) : sprintf('%s(%s)', gettype($contactContact_PortableNoItem), var_export($contactContact_PortableNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_PortableNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_PortableNo value
     * @throws InvalidArgumentException
     * @param string[] $contact_PortableNo
     * @return \StructType\Contact
     */
    public function setContact_PortableNo(array $contact_PortableNo): self
    {
        // validation for constraint: array
        if ('' !== ($contact_PortableNoArrayErrorMessage = self::validateContact_PortableNoForArrayConstraintsFromSetContact_PortableNo($contact_PortableNo))) {
            throw new InvalidArgumentException($contact_PortableNoArrayErrorMessage, __LINE__);
        }
        $this->Contact_PortableNo = $contact_PortableNo;
        
        return $this;
    }
    /**
     * Add item to Contact_PortableNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_PortableNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_PortableNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_PortableNo[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_Fonction value
     * @return string[]
     */
    public function getContact_Fonction(): array
    {
        return $this->Contact_Fonction;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_Fonction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_Fonction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_FonctionForArrayConstraintsFromSetContact_Fonction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_FonctionItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_FonctionItem)) {
                $invalidValues[] = is_object($contactContact_FonctionItem) ? get_class($contactContact_FonctionItem) : sprintf('%s(%s)', gettype($contactContact_FonctionItem), var_export($contactContact_FonctionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_Fonction property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_Fonction value
     * @throws InvalidArgumentException
     * @param string[] $contact_Fonction
     * @return \StructType\Contact
     */
    public function setContact_Fonction(array $contact_Fonction): self
    {
        // validation for constraint: array
        if ('' !== ($contact_FonctionArrayErrorMessage = self::validateContact_FonctionForArrayConstraintsFromSetContact_Fonction($contact_Fonction))) {
            throw new InvalidArgumentException($contact_FonctionArrayErrorMessage, __LINE__);
        }
        $this->Contact_Fonction = $contact_Fonction;
        
        return $this;
    }
    /**
     * Add item to Contact_Fonction value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_Fonction(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_Fonction property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_Fonction[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_No value
     * @return string[]
     */
    public function getCustomer_No(): array
    {
        return $this->Customer_No;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_No method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_No method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_NoForArrayConstraintsFromSetCustomer_No(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactCustomer_NoItem) {
            // validation for constraint: itemType
            if (!is_string($contactCustomer_NoItem)) {
                $invalidValues[] = is_object($contactCustomer_NoItem) ? get_class($contactCustomer_NoItem) : sprintf('%s(%s)', gettype($contactCustomer_NoItem), var_export($contactCustomer_NoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_No property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_No value
     * @throws InvalidArgumentException
     * @param string[] $customer_No
     * @return \StructType\Contact
     */
    public function setCustomer_No(array $customer_No): self
    {
        // validation for constraint: array
        if ('' !== ($customer_NoArrayErrorMessage = self::validateCustomer_NoForArrayConstraintsFromSetCustomer_No($customer_No))) {
            throw new InvalidArgumentException($customer_NoArrayErrorMessage, __LINE__);
        }
        $this->Customer_No = $customer_No;
        
        return $this;
    }
    /**
     * Add item to Customer_No value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToCustomer_No(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_No property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_No[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Name value
     * @return string[]
     */
    public function getCustomer_Name(): array
    {
        return $this->Customer_Name;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Name method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_NameForArrayConstraintsFromSetCustomer_Name(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactCustomer_NameItem) {
            // validation for constraint: itemType
            if (!is_string($contactCustomer_NameItem)) {
                $invalidValues[] = is_object($contactCustomer_NameItem) ? get_class($contactCustomer_NameItem) : sprintf('%s(%s)', gettype($contactCustomer_NameItem), var_export($contactCustomer_NameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Name property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Name value
     * @throws InvalidArgumentException
     * @param string[] $customer_Name
     * @return \StructType\Contact
     */
    public function setCustomer_Name(array $customer_Name): self
    {
        // validation for constraint: array
        if ('' !== ($customer_NameArrayErrorMessage = self::validateCustomer_NameForArrayConstraintsFromSetCustomer_Name($customer_Name))) {
            throw new InvalidArgumentException($customer_NameArrayErrorMessage, __LINE__);
        }
        $this->Customer_Name = $customer_Name;
        
        return $this;
    }
    /**
     * Add item to Customer_Name value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToCustomer_Name(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Name property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Name[] = $item;
        
        return $this;
    }
    /**
     * Get ContactVide value
     * @return string|null
     */
    public function getContactVide(): ?string
    {
        return $this->ContactVide;
    }
    /**
     * Set ContactVide value
     * @param string $contactVide
     * @return \StructType\Contact
     */
    public function setContactVide(?string $contactVide = null): self
    {
        // validation for constraint: string
        if (!is_null($contactVide) && !is_string($contactVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactVide, true), gettype($contactVide)), __LINE__);
        }
        $this->ContactVide = $contactVide;
        
        return $this;
    }
    /**
     * Get TypeAction value
     * @return string[]
     */
    public function getTypeAction(): ?array
    {
        return $this->TypeAction;
    }
    /**
     * This method is responsible for validating the values passed to the setTypeAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTypeAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTypeActionForArrayConstraintsFromSetTypeAction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactTypeActionItem) {
            // validation for constraint: itemType
            if (!is_string($contactTypeActionItem)) {
                $invalidValues[] = is_object($contactTypeActionItem) ? get_class($contactTypeActionItem) : sprintf('%s(%s)', gettype($contactTypeActionItem), var_export($contactTypeActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TypeAction property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TypeAction value
     * @throws InvalidArgumentException
     * @param string[] $typeAction
     * @return \StructType\Contact
     */
    public function setTypeAction(?array $typeAction = null): self
    {
        // validation for constraint: array
        if ('' !== ($typeActionArrayErrorMessage = self::validateTypeActionForArrayConstraintsFromSetTypeAction($typeAction))) {
            throw new InvalidArgumentException($typeActionArrayErrorMessage, __LINE__);
        }
        $this->TypeAction = $typeAction;
        
        return $this;
    }
    /**
     * Add item to TypeAction value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToTypeAction(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The TypeAction property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TypeAction[] = $item;
        
        return $this;
    }
    /**
     * Get Contact_Type value
     * @return string[]
     */
    public function getContact_Type(): ?array
    {
        return $this->Contact_Type;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_Type method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_Type method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_TypeForArrayConstraintsFromSetContact_Type(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactContact_TypeItem) {
            // validation for constraint: itemType
            if (!is_string($contactContact_TypeItem)) {
                $invalidValues[] = is_object($contactContact_TypeItem) ? get_class($contactContact_TypeItem) : sprintf('%s(%s)', gettype($contactContact_TypeItem), var_export($contactContact_TypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_Type property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact_Type value
     * @throws InvalidArgumentException
     * @param string[] $contact_Type
     * @return \StructType\Contact
     */
    public function setContact_Type(?array $contact_Type = null): self
    {
        // validation for constraint: array
        if ('' !== ($contact_TypeArrayErrorMessage = self::validateContact_TypeForArrayConstraintsFromSetContact_Type($contact_Type))) {
            throw new InvalidArgumentException($contact_TypeArrayErrorMessage, __LINE__);
        }
        $this->Contact_Type = $contact_Type;
        
        return $this;
    }
    /**
     * Add item to Contact_Type value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Contact
     */
    public function addToContact_Type(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Contact_Type property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_Type[] = $item;
        
        return $this;
    }
    /**
     * Get CodeRelationdAffaires value
     * @return string|null
     */
    public function getCodeRelationdAffaires(): ?string
    {
        return $this->CodeRelationdAffaires;
    }
    /**
     * Set CodeRelationdAffaires value
     * @param string $codeRelationdAffaires
     * @return \StructType\Contact
     */
    public function setCodeRelationdAffaires(?string $codeRelationdAffaires = null): self
    {
        // validation for constraint: string
        if (!is_null($codeRelationdAffaires) && !is_string($codeRelationdAffaires)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeRelationdAffaires, true), gettype($codeRelationdAffaires)), __LINE__);
        }
        $this->CodeRelationdAffaires = $codeRelationdAffaires;
        
        return $this;
    }
}
