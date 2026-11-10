<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Services StructType
 * @subpackage Structs
 */
class Services extends AbstractStructBase
{
    /**
     * The Service_Cle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Service_Cle;
    /**
     * The Service_Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Service_Libelle;
    /**
     * The Service_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Service_Type;
    /**
     * The Service_Sens
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Service_Sens;
    /**
     * The Service_Rang
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Service_Rang;
    /**
     * The Service_OrdreCalcul
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Service_OrdreCalcul;
    /**
     * The Service_Valeur
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Service_Valeur;
    /**
     * The Service_ModeCalcul
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Service_ModeCalcul;
    /**
     * The Service_BaseCalcul
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Service_BaseCalcul;
    /**
     * The Service_Montant
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Service_Montant;
    /**
     * The Service_SurFacture
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $Service_SurFacture;
    /**
     * The Service_Ventilation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Service_Ventilation;
    /**
     * Constructor method for Services
     * @uses Services::setService_Cle()
     * @uses Services::setService_Libelle()
     * @uses Services::setService_Type()
     * @uses Services::setService_Sens()
     * @uses Services::setService_Rang()
     * @uses Services::setService_OrdreCalcul()
     * @uses Services::setService_Valeur()
     * @uses Services::setService_ModeCalcul()
     * @uses Services::setService_BaseCalcul()
     * @uses Services::setService_Montant()
     * @uses Services::setService_SurFacture()
     * @uses Services::setService_Ventilation()
     * @param string $service_Cle
     * @param string $service_Libelle
     * @param string[] $service_Type
     * @param string[] $service_Sens
     * @param int $service_Rang
     * @param int $service_OrdreCalcul
     * @param float $service_Valeur
     * @param string $service_ModeCalcul
     * @param string $service_BaseCalcul
     * @param float $service_Montant
     * @param bool $service_SurFacture
     * @param string $service_Ventilation
     */
    public function __construct(string $service_Cle, string $service_Libelle, array $service_Type, array $service_Sens, int $service_Rang, int $service_OrdreCalcul, float $service_Valeur, string $service_ModeCalcul, string $service_BaseCalcul, float $service_Montant, bool $service_SurFacture, string $service_Ventilation)
    {
        $this
            ->setService_Cle($service_Cle)
            ->setService_Libelle($service_Libelle)
            ->setService_Type($service_Type)
            ->setService_Sens($service_Sens)
            ->setService_Rang($service_Rang)
            ->setService_OrdreCalcul($service_OrdreCalcul)
            ->setService_Valeur($service_Valeur)
            ->setService_ModeCalcul($service_ModeCalcul)
            ->setService_BaseCalcul($service_BaseCalcul)
            ->setService_Montant($service_Montant)
            ->setService_SurFacture($service_SurFacture)
            ->setService_Ventilation($service_Ventilation);
    }
    /**
     * Get Service_Cle value
     * @return string
     */
    public function getService_Cle(): string
    {
        return $this->Service_Cle;
    }
    /**
     * Set Service_Cle value
     * @param string $service_Cle
     * @return \StructType\Services
     */
    public function setService_Cle(string $service_Cle): self
    {
        // validation for constraint: string
        if (!is_null($service_Cle) && !is_string($service_Cle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_Cle, true), gettype($service_Cle)), __LINE__);
        }
        $this->Service_Cle = $service_Cle;
        
        return $this;
    }
    /**
     * Get Service_Libelle value
     * @return string
     */
    public function getService_Libelle(): string
    {
        return $this->Service_Libelle;
    }
    /**
     * Set Service_Libelle value
     * @param string $service_Libelle
     * @return \StructType\Services
     */
    public function setService_Libelle(string $service_Libelle): self
    {
        // validation for constraint: string
        if (!is_null($service_Libelle) && !is_string($service_Libelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_Libelle, true), gettype($service_Libelle)), __LINE__);
        }
        $this->Service_Libelle = $service_Libelle;
        
        return $this;
    }
    /**
     * Get Service_Type value
     * @return string[]
     */
    public function getService_Type(): array
    {
        return $this->Service_Type;
    }
    /**
     * This method is responsible for validating the values passed to the setService_Type method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService_Type method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateService_TypeForArrayConstraintsFromSetService_Type(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $servicesService_TypeItem) {
            // validation for constraint: itemType
            if (!is_string($servicesService_TypeItem)) {
                $invalidValues[] = is_object($servicesService_TypeItem) ? get_class($servicesService_TypeItem) : sprintf('%s(%s)', gettype($servicesService_TypeItem), var_export($servicesService_TypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service_Type property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Service_Type value
     * @throws InvalidArgumentException
     * @param string[] $service_Type
     * @return \StructType\Services
     */
    public function setService_Type(array $service_Type): self
    {
        // validation for constraint: array
        if ('' !== ($service_TypeArrayErrorMessage = self::validateService_TypeForArrayConstraintsFromSetService_Type($service_Type))) {
            throw new InvalidArgumentException($service_TypeArrayErrorMessage, __LINE__);
        }
        $this->Service_Type = $service_Type;
        
        return $this;
    }
    /**
     * Add item to Service_Type value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Services
     */
    public function addToService_Type(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Service_Type property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service_Type[] = $item;
        
        return $this;
    }
    /**
     * Get Service_Sens value
     * @return string[]
     */
    public function getService_Sens(): array
    {
        return $this->Service_Sens;
    }
    /**
     * This method is responsible for validating the values passed to the setService_Sens method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService_Sens method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateService_SensForArrayConstraintsFromSetService_Sens(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $servicesService_SensItem) {
            // validation for constraint: itemType
            if (!is_string($servicesService_SensItem)) {
                $invalidValues[] = is_object($servicesService_SensItem) ? get_class($servicesService_SensItem) : sprintf('%s(%s)', gettype($servicesService_SensItem), var_export($servicesService_SensItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service_Sens property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Service_Sens value
     * @throws InvalidArgumentException
     * @param string[] $service_Sens
     * @return \StructType\Services
     */
    public function setService_Sens(array $service_Sens): self
    {
        // validation for constraint: array
        if ('' !== ($service_SensArrayErrorMessage = self::validateService_SensForArrayConstraintsFromSetService_Sens($service_Sens))) {
            throw new InvalidArgumentException($service_SensArrayErrorMessage, __LINE__);
        }
        $this->Service_Sens = $service_Sens;
        
        return $this;
    }
    /**
     * Add item to Service_Sens value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Services
     */
    public function addToService_Sens(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Service_Sens property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service_Sens[] = $item;
        
        return $this;
    }
    /**
     * Get Service_Rang value
     * @return int
     */
    public function getService_Rang(): int
    {
        return $this->Service_Rang;
    }
    /**
     * Set Service_Rang value
     * @param int $service_Rang
     * @return \StructType\Services
     */
    public function setService_Rang(int $service_Rang): self
    {
        // validation for constraint: int
        if (!is_null($service_Rang) && !(is_int($service_Rang) || ctype_digit($service_Rang))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($service_Rang, true), gettype($service_Rang)), __LINE__);
        }
        $this->Service_Rang = $service_Rang;
        
        return $this;
    }
    /**
     * Get Service_OrdreCalcul value
     * @return int
     */
    public function getService_OrdreCalcul(): int
    {
        return $this->Service_OrdreCalcul;
    }
    /**
     * Set Service_OrdreCalcul value
     * @param int $service_OrdreCalcul
     * @return \StructType\Services
     */
    public function setService_OrdreCalcul(int $service_OrdreCalcul): self
    {
        // validation for constraint: int
        if (!is_null($service_OrdreCalcul) && !(is_int($service_OrdreCalcul) || ctype_digit($service_OrdreCalcul))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($service_OrdreCalcul, true), gettype($service_OrdreCalcul)), __LINE__);
        }
        $this->Service_OrdreCalcul = $service_OrdreCalcul;
        
        return $this;
    }
    /**
     * Get Service_Valeur value
     * @return float
     */
    public function getService_Valeur(): float
    {
        return $this->Service_Valeur;
    }
    /**
     * Set Service_Valeur value
     * @param float $service_Valeur
     * @return \StructType\Services
     */
    public function setService_Valeur(float $service_Valeur): self
    {
        // validation for constraint: float
        if (!is_null($service_Valeur) && !(is_float($service_Valeur) || is_numeric($service_Valeur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($service_Valeur, true), gettype($service_Valeur)), __LINE__);
        }
        $this->Service_Valeur = $service_Valeur;
        
        return $this;
    }
    /**
     * Get Service_ModeCalcul value
     * @return string
     */
    public function getService_ModeCalcul(): string
    {
        return $this->Service_ModeCalcul;
    }
    /**
     * Set Service_ModeCalcul value
     * @param string $service_ModeCalcul
     * @return \StructType\Services
     */
    public function setService_ModeCalcul(string $service_ModeCalcul): self
    {
        // validation for constraint: string
        if (!is_null($service_ModeCalcul) && !is_string($service_ModeCalcul)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_ModeCalcul, true), gettype($service_ModeCalcul)), __LINE__);
        }
        $this->Service_ModeCalcul = $service_ModeCalcul;
        
        return $this;
    }
    /**
     * Get Service_BaseCalcul value
     * @return string
     */
    public function getService_BaseCalcul(): string
    {
        return $this->Service_BaseCalcul;
    }
    /**
     * Set Service_BaseCalcul value
     * @param string $service_BaseCalcul
     * @return \StructType\Services
     */
    public function setService_BaseCalcul(string $service_BaseCalcul): self
    {
        // validation for constraint: string
        if (!is_null($service_BaseCalcul) && !is_string($service_BaseCalcul)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_BaseCalcul, true), gettype($service_BaseCalcul)), __LINE__);
        }
        $this->Service_BaseCalcul = $service_BaseCalcul;
        
        return $this;
    }
    /**
     * Get Service_Montant value
     * @return float
     */
    public function getService_Montant(): float
    {
        return $this->Service_Montant;
    }
    /**
     * Set Service_Montant value
     * @param float $service_Montant
     * @return \StructType\Services
     */
    public function setService_Montant(float $service_Montant): self
    {
        // validation for constraint: float
        if (!is_null($service_Montant) && !(is_float($service_Montant) || is_numeric($service_Montant))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($service_Montant, true), gettype($service_Montant)), __LINE__);
        }
        $this->Service_Montant = $service_Montant;
        
        return $this;
    }
    /**
     * Get Service_SurFacture value
     * @return bool
     */
    public function getService_SurFacture(): bool
    {
        return $this->Service_SurFacture;
    }
    /**
     * Set Service_SurFacture value
     * @param bool $service_SurFacture
     * @return \StructType\Services
     */
    public function setService_SurFacture(bool $service_SurFacture): self
    {
        // validation for constraint: boolean
        if (!is_null($service_SurFacture) && !is_bool($service_SurFacture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($service_SurFacture, true), gettype($service_SurFacture)), __LINE__);
        }
        $this->Service_SurFacture = $service_SurFacture;
        
        return $this;
    }
    /**
     * Get Service_Ventilation value
     * @return string
     */
    public function getService_Ventilation(): string
    {
        return $this->Service_Ventilation;
    }
    /**
     * Set Service_Ventilation value
     * @param string $service_Ventilation
     * @return \StructType\Services
     */
    public function setService_Ventilation(string $service_Ventilation): self
    {
        // validation for constraint: string
        if (!is_null($service_Ventilation) && !is_string($service_Ventilation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_Ventilation, true), gettype($service_Ventilation)), __LINE__);
        }
        $this->Service_Ventilation = $service_Ventilation;
        
        return $this;
    }
}
