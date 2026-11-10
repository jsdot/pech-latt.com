<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service StructType
 * @subpackage Structs
 */
class Service extends AbstractStructBase
{
    /**
     * The Service_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Service_Type;
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
     * The Service_Cle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Service_Cle;
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
     * The Service_OrdreCalcul
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Service_OrdreCalcul;
    /**
     * The Service_Montant
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Service_Montant = null;
    /**
     * Constructor method for Service
     * @uses Service::setService_Type()
     * @uses Service::setService_Rang()
     * @uses Service::setService_Cle()
     * @uses Service::setService_Valeur()
     * @uses Service::setService_OrdreCalcul()
     * @uses Service::setService_Montant()
     * @param string $service_Type
     * @param int $service_Rang
     * @param string $service_Cle
     * @param float $service_Valeur
     * @param int $service_OrdreCalcul
     * @param string $service_Montant
     */
    public function __construct(string $service_Type, int $service_Rang, string $service_Cle, float $service_Valeur, int $service_OrdreCalcul, ?string $service_Montant = null)
    {
        $this
            ->setService_Type($service_Type)
            ->setService_Rang($service_Rang)
            ->setService_Cle($service_Cle)
            ->setService_Valeur($service_Valeur)
            ->setService_OrdreCalcul($service_OrdreCalcul)
            ->setService_Montant($service_Montant);
    }
    /**
     * Get Service_Type value
     * @return string
     */
    public function getService_Type(): string
    {
        return $this->Service_Type;
    }
    /**
     * Set Service_Type value
     * @param string $service_Type
     * @return \StructType\Service
     */
    public function setService_Type(string $service_Type): self
    {
        // validation for constraint: string
        if (!is_null($service_Type) && !is_string($service_Type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_Type, true), gettype($service_Type)), __LINE__);
        }
        $this->Service_Type = $service_Type;
        
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
     * @return \StructType\Service
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
     * @return \StructType\Service
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
     * @return \StructType\Service
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
     * @return \StructType\Service
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
     * Get Service_Montant value
     * @return string|null
     */
    public function getService_Montant(): ?string
    {
        return $this->Service_Montant;
    }
    /**
     * Set Service_Montant value
     * @param string $service_Montant
     * @return \StructType\Service
     */
    public function setService_Montant(?string $service_Montant = null): self
    {
        // validation for constraint: string
        if (!is_null($service_Montant) && !is_string($service_Montant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_Montant, true), gettype($service_Montant)), __LINE__);
        }
        $this->Service_Montant = $service_Montant;
        
        return $this;
    }
}
