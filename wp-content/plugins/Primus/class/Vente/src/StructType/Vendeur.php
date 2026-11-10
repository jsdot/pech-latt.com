<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vendeur StructType
 * @subpackage Structs
 */
class Vendeur extends AbstractStructBase
{
    /**
     * The Vendeur_Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Vendeur_Code;
    /**
     * The Vendeur_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Vendeur_Name;
    /**
     * The Vendeur_Fonction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Vendeur_Fonction;
    /**
     * The Vendeur_Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Vendeur_Email;
    /**
     * The Vendeur_PhoneNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Vendeur_PhoneNo;
    /**
     * The Vendeur_FaxNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Vendeur_FaxNo;
    /**
     * The Vendeur_PortableNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Vendeur_PortableNo;
    /**
     * The TypeAction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $TypeAction = null;
    /**
     * Constructor method for Vendeur
     * @uses Vendeur::setVendeur_Code()
     * @uses Vendeur::setVendeur_Name()
     * @uses Vendeur::setVendeur_Fonction()
     * @uses Vendeur::setVendeur_Email()
     * @uses Vendeur::setVendeur_PhoneNo()
     * @uses Vendeur::setVendeur_FaxNo()
     * @uses Vendeur::setVendeur_PortableNo()
     * @uses Vendeur::setTypeAction()
     * @param string $vendeur_Code
     * @param string $vendeur_Name
     * @param string $vendeur_Fonction
     * @param string $vendeur_Email
     * @param string $vendeur_PhoneNo
     * @param string $vendeur_FaxNo
     * @param string $vendeur_PortableNo
     * @param string[] $typeAction
     */
    public function __construct(string $vendeur_Code, string $vendeur_Name, string $vendeur_Fonction, string $vendeur_Email, string $vendeur_PhoneNo, string $vendeur_FaxNo, string $vendeur_PortableNo, ?array $typeAction = null)
    {
        $this
            ->setVendeur_Code($vendeur_Code)
            ->setVendeur_Name($vendeur_Name)
            ->setVendeur_Fonction($vendeur_Fonction)
            ->setVendeur_Email($vendeur_Email)
            ->setVendeur_PhoneNo($vendeur_PhoneNo)
            ->setVendeur_FaxNo($vendeur_FaxNo)
            ->setVendeur_PortableNo($vendeur_PortableNo)
            ->setTypeAction($typeAction);
    }
    /**
     * Get Vendeur_Code value
     * @return string
     */
    public function getVendeur_Code(): string
    {
        return $this->Vendeur_Code;
    }
    /**
     * Set Vendeur_Code value
     * @param string $vendeur_Code
     * @return \StructType\Vendeur
     */
    public function setVendeur_Code(string $vendeur_Code): self
    {
        // validation for constraint: string
        if (!is_null($vendeur_Code) && !is_string($vendeur_Code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendeur_Code, true), gettype($vendeur_Code)), __LINE__);
        }
        $this->Vendeur_Code = $vendeur_Code;
        
        return $this;
    }
    /**
     * Get Vendeur_Name value
     * @return string
     */
    public function getVendeur_Name(): string
    {
        return $this->Vendeur_Name;
    }
    /**
     * Set Vendeur_Name value
     * @param string $vendeur_Name
     * @return \StructType\Vendeur
     */
    public function setVendeur_Name(string $vendeur_Name): self
    {
        // validation for constraint: string
        if (!is_null($vendeur_Name) && !is_string($vendeur_Name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendeur_Name, true), gettype($vendeur_Name)), __LINE__);
        }
        $this->Vendeur_Name = $vendeur_Name;
        
        return $this;
    }
    /**
     * Get Vendeur_Fonction value
     * @return string
     */
    public function getVendeur_Fonction(): string
    {
        return $this->Vendeur_Fonction;
    }
    /**
     * Set Vendeur_Fonction value
     * @param string $vendeur_Fonction
     * @return \StructType\Vendeur
     */
    public function setVendeur_Fonction(string $vendeur_Fonction): self
    {
        // validation for constraint: string
        if (!is_null($vendeur_Fonction) && !is_string($vendeur_Fonction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendeur_Fonction, true), gettype($vendeur_Fonction)), __LINE__);
        }
        $this->Vendeur_Fonction = $vendeur_Fonction;
        
        return $this;
    }
    /**
     * Get Vendeur_Email value
     * @return string
     */
    public function getVendeur_Email(): string
    {
        return $this->Vendeur_Email;
    }
    /**
     * Set Vendeur_Email value
     * @param string $vendeur_Email
     * @return \StructType\Vendeur
     */
    public function setVendeur_Email(string $vendeur_Email): self
    {
        // validation for constraint: string
        if (!is_null($vendeur_Email) && !is_string($vendeur_Email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendeur_Email, true), gettype($vendeur_Email)), __LINE__);
        }
        $this->Vendeur_Email = $vendeur_Email;
        
        return $this;
    }
    /**
     * Get Vendeur_PhoneNo value
     * @return string
     */
    public function getVendeur_PhoneNo(): string
    {
        return $this->Vendeur_PhoneNo;
    }
    /**
     * Set Vendeur_PhoneNo value
     * @param string $vendeur_PhoneNo
     * @return \StructType\Vendeur
     */
    public function setVendeur_PhoneNo(string $vendeur_PhoneNo): self
    {
        // validation for constraint: string
        if (!is_null($vendeur_PhoneNo) && !is_string($vendeur_PhoneNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendeur_PhoneNo, true), gettype($vendeur_PhoneNo)), __LINE__);
        }
        $this->Vendeur_PhoneNo = $vendeur_PhoneNo;
        
        return $this;
    }
    /**
     * Get Vendeur_FaxNo value
     * @return string
     */
    public function getVendeur_FaxNo(): string
    {
        return $this->Vendeur_FaxNo;
    }
    /**
     * Set Vendeur_FaxNo value
     * @param string $vendeur_FaxNo
     * @return \StructType\Vendeur
     */
    public function setVendeur_FaxNo(string $vendeur_FaxNo): self
    {
        // validation for constraint: string
        if (!is_null($vendeur_FaxNo) && !is_string($vendeur_FaxNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendeur_FaxNo, true), gettype($vendeur_FaxNo)), __LINE__);
        }
        $this->Vendeur_FaxNo = $vendeur_FaxNo;
        
        return $this;
    }
    /**
     * Get Vendeur_PortableNo value
     * @return string
     */
    public function getVendeur_PortableNo(): string
    {
        return $this->Vendeur_PortableNo;
    }
    /**
     * Set Vendeur_PortableNo value
     * @param string $vendeur_PortableNo
     * @return \StructType\Vendeur
     */
    public function setVendeur_PortableNo(string $vendeur_PortableNo): self
    {
        // validation for constraint: string
        if (!is_null($vendeur_PortableNo) && !is_string($vendeur_PortableNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendeur_PortableNo, true), gettype($vendeur_PortableNo)), __LINE__);
        }
        $this->Vendeur_PortableNo = $vendeur_PortableNo;
        
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
        foreach ($values as $vendeurTypeActionItem) {
            // validation for constraint: itemType
            if (!is_string($vendeurTypeActionItem)) {
                $invalidValues[] = is_object($vendeurTypeActionItem) ? get_class($vendeurTypeActionItem) : sprintf('%s(%s)', gettype($vendeurTypeActionItem), var_export($vendeurTypeActionItem, true));
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
     * @return \StructType\Vendeur
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
     * @return \StructType\Vendeur
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
}
