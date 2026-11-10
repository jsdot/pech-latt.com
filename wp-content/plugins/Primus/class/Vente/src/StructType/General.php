<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for General StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class General extends AbstractStructBase
{
    /**
     * The RefExterne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $RefExterne;
    /**
     * The DateHeure
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public array $DateHeure;
    /**
     * The Societe
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public array $Societe;
    /**
     * The No
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $No = null;
    /**
     * The Nom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Nom|null
     */
    public ?\StructType\Nom $Nom = null;
    /**
     * The NomRecherche
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NomRecherche|null
     */
    public ?\StructType\NomRecherche $NomRecherche = null;
    /**
     * The Nom2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Nom2|null
     */
    public ?\StructType\Nom2 $Nom2 = null;
    /**
     * The Marque1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Marque1|null
     */
    public ?\StructType\Marque1 $Marque1 = null;
    /**
     * The Marque2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Marque2|null
     */
    public ?\StructType\Marque2 $Marque2 = null;
    /**
     * The Adresse1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Adresse1|null
     */
    public ?\StructType\Adresse1 $Adresse1 = null;
    /**
     * The Adresse2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Adresse2|null
     */
    public ?\StructType\Adresse2 $Adresse2 = null;
    /**
     * The CodePostal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CodePostal|null
     */
    public ?\StructType\CodePostal $CodePostal = null;
    /**
     * The Ville
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Ville|null
     */
    public ?\StructType\Ville $Ville = null;
    /**
     * The County
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\County|null
     */
    public ?\StructType\County $County = null;
    /**
     * The CountryRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CountryRegion|null
     */
    public ?\StructType\CountryRegion $CountryRegion = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CurrencyCode|null
     */
    public ?\StructType\CurrencyCode $CurrencyCode = null;
    /**
     * The CreditLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CreditLimit|null
     */
    public ?\StructType\CreditLimit $CreditLimit = null;
    /**
     * The Blocked
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Blocked|null
     */
    public ?\StructType\Blocked $Blocked = null;
    /**
     * The PaymentMethodCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PaymentMethodCode|null
     */
    public ?\StructType\PaymentMethodCode $PaymentMethodCode = null;
    /**
     * The CustDiscGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CustDiscGroup|null
     */
    public ?\StructType\CustDiscGroup $CustDiscGroup = null;
    /**
     * The SalespersonCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SalespersonCode|null
     */
    public ?\StructType\SalespersonCode $SalespersonCode = null;
    /**
     * The EquipeAgentCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EquipeAgentCode|null
     */
    public ?\StructType\EquipeAgentCode $EquipeAgentCode = null;
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LocationCode|null
     */
    public ?\StructType\LocationCode $LocationCode = null;
    /**
     * The NoContrat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $NoContrat = null;
    /**
     * The TypeOrdre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $TypeOrdre = null;
    /**
     * The NoVendeur
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $NoVendeur = null;
    /**
     * The NoUnion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $NoUnion = null;
    /**
     * The NoAcheteur
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $NoAcheteur = null;
    /**
     * The Cloture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Cloture = null;
    /**
     * The TypeContrat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $TypeContrat = null;
    /**
     * The VolumeHL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $VolumeHL = null;
    /**
     * The PoidsKg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $PoidsKg = null;
    /**
     * The Millesime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Millesime = null;
    /**
     * The NoArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $NoArticle = null;
    /**
     * The CodeModeReglement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CodeModeReglement = null;
    /**
     * The CodeConditionReglement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CodeConditionReglement = null;
    /**
     * The PrixUnitaire
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $PrixUnitaire = null;
    /**
     * The STATUT_TRANSFERT_PRIMUS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $STATUT_TRANSFERT_PRIMUS = null;
    /**
     * The CustomerReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CustomerReference = null;
    /**
     * The Degre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Degre = null;
    /**
     * The Lot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Lot = null;
    /**
     * The Cuve
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Cuve = null;
    /**
     * The CommissionVente
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CommissionVente = null;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Customer[]
     */
    public ?array $Customer = null;
    /**
     * The CustPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustPrice[]
     */
    public ?array $CustPrice = null;
    /**
     * Constructor method for General
     * @uses General::setRefExterne()
     * @uses General::setDateHeure()
     * @uses General::setSociete()
     * @uses General::setNo()
     * @uses General::setNom()
     * @uses General::setNomRecherche()
     * @uses General::setNom2()
     * @uses General::setMarque1()
     * @uses General::setMarque2()
     * @uses General::setAdresse1()
     * @uses General::setAdresse2()
     * @uses General::setCodePostal()
     * @uses General::setVille()
     * @uses General::setCounty()
     * @uses General::setCountryRegion()
     * @uses General::setCurrencyCode()
     * @uses General::setCreditLimit()
     * @uses General::setBlocked()
     * @uses General::setPaymentMethodCode()
     * @uses General::setCustDiscGroup()
     * @uses General::setSalespersonCode()
     * @uses General::setEquipeAgentCode()
     * @uses General::setLocationCode()
     * @uses General::setNoContrat()
     * @uses General::setTypeOrdre()
     * @uses General::setNoVendeur()
     * @uses General::setNoUnion()
     * @uses General::setNoAcheteur()
     * @uses General::setCloture()
     * @uses General::setTypeContrat()
     * @uses General::setVolumeHL()
     * @uses General::setPoidsKg()
     * @uses General::setMillesime()
     * @uses General::setNoArticle()
     * @uses General::setCodeModeReglement()
     * @uses General::setCodeConditionReglement()
     * @uses General::setPrixUnitaire()
     * @uses General::setSTATUT_TRANSFERT_PRIMUS()
     * @uses General::setCustomerReference()
     * @uses General::setDegre()
     * @uses General::setLot()
     * @uses General::setCuve()
     * @uses General::setCommissionVente()
     * @uses General::setCustomer()
     * @uses General::setCustPrice()
     * @param string $refExterne
     * @param string[] $dateHeure
     * @param string[] $societe
     * @param string $no
     * @param \StructType\Nom $nom
     * @param \StructType\NomRecherche $nomRecherche
     * @param \StructType\Nom2 $nom2
     * @param \StructType\Marque1 $marque1
     * @param \StructType\Marque2 $marque2
     * @param \StructType\Adresse1 $adresse1
     * @param \StructType\Adresse2 $adresse2
     * @param \StructType\CodePostal $codePostal
     * @param \StructType\Ville $ville
     * @param \StructType\County $county
     * @param \StructType\CountryRegion $countryRegion
     * @param \StructType\CurrencyCode $currencyCode
     * @param \StructType\CreditLimit $creditLimit
     * @param \StructType\Blocked $blocked
     * @param \StructType\PaymentMethodCode $paymentMethodCode
     * @param \StructType\CustDiscGroup $custDiscGroup
     * @param \StructType\SalespersonCode $salespersonCode
     * @param \StructType\EquipeAgentCode $equipeAgentCode
     * @param \StructType\LocationCode $locationCode
     * @param string $noContrat
     * @param string $typeOrdre
     * @param string $noVendeur
     * @param string $noUnion
     * @param string $noAcheteur
     * @param string $cloture
     * @param string $typeContrat
     * @param string $volumeHL
     * @param string $poidsKg
     * @param string $millesime
     * @param string $noArticle
     * @param string $codeModeReglement
     * @param string $codeConditionReglement
     * @param string $prixUnitaire
     * @param string $sTATUT_TRANSFERT_PRIMUS
     * @param string $customerReference
     * @param string $degre
     * @param string $lot
     * @param string $cuve
     * @param string $commissionVente
     * @param \StructType\Customer[] $customer
     * @param \StructType\CustPrice[] $custPrice
     */
    public function __construct()
    {
        /*$this
            ->setRefExterne($refExterne)
            ->setDateHeure($dateHeure)
            ->setSociete($societe)
            ->setNo($no)
            ->setNom($nom)
            ->setNomRecherche($nomRecherche)
            ->setNom2($nom2)
            ->setMarque1($marque1)
            ->setMarque2($marque2)
            ->setAdresse1($adresse1)
            ->setAdresse2($adresse2)
            ->setCodePostal($codePostal)
            ->setVille($ville)
            ->setCounty($county)
            ->setCountryRegion($countryRegion)
            ->setCurrencyCode($currencyCode)
            ->setCreditLimit($creditLimit)
            ->setBlocked($blocked)
            ->setPaymentMethodCode($paymentMethodCode)
            ->setCustDiscGroup($custDiscGroup)
            ->setSalespersonCode($salespersonCode)
            ->setEquipeAgentCode($equipeAgentCode)
            ->setLocationCode($locationCode)
            ->setNoContrat($noContrat)
            ->setTypeOrdre($typeOrdre)
            ->setNoVendeur($noVendeur)
            ->setNoUnion($noUnion)
            ->setNoAcheteur($noAcheteur)
            ->setCloture($cloture)
            ->setTypeContrat($typeContrat)
            ->setVolumeHL($volumeHL)
            ->setPoidsKg($poidsKg)
            ->setMillesime($millesime)
            ->setNoArticle($noArticle)
            ->setCodeModeReglement($codeModeReglement)
            ->setCodeConditionReglement($codeConditionReglement)
            ->setPrixUnitaire($prixUnitaire)
            ->setSTATUT_TRANSFERT_PRIMUS($sTATUT_TRANSFERT_PRIMUS)
            ->setCustomerReference($customerReference)
            ->setDegre($degre)
            ->setLot($lot)
            ->setCuve($cuve)
            ->setCommissionVente($commissionVente)
            ->setCustomer($customer)
            ->setCustPrice($custPrice);*/
    }

    public function constructForWSClients(?string $refExterne = null, ?array $dateHeure = array(), ?array $societe = array() , ?string $no = null, ?\StructType\Nom $nom = null, ?\StructType\NomRecherche $nomRecherche = null, ?\StructType\Nom2 $nom2 = null, ?\StructType\Marque1 $marque1 = null, ?\StructType\Marque2 $marque2 = null, ?\StructType\Adresse1 $adresse1 = null, ?\StructType\Adresse2 $adresse2 = null, ?\StructType\CodePostal $codePostal = null, ?\StructType\Ville $ville = null, ?\StructType\County $county = null, ?\StructType\CountryRegion $countryRegion = null, ?\StructType\CurrencyCode $currencyCode = null, ?\StructType\CreditLimit $creditLimit = null, ?\StructType\Blocked $blocked = null, ?\StructType\PaymentMethodCode $paymentMethodCode = null, ?\StructType\CustDiscGroup $custDiscGroup = null, ?\StructType\SalespersonCode $salespersonCode = null, ?\StructType\EquipeAgentCode $equipeAgentCode = null, ?\StructType\LocationCode $locationCode = null, ?string $noContrat = null, ?string $typeOrdre = null, ?string $noVendeur = null, ?string $noUnion = null, ?string $noAcheteur = null, ?string $cloture = null, ?string $typeContrat = null, ?string $volumeHL = null, ?string $poidsKg = null, ?string $millesime = null, ?string $noArticle = null, ?string $codeModeReglement = null, ?string $codeConditionReglement = null, ?string $prixUnitaire = null, ?string $sTATUT_TRANSFERT_PRIMUS = null, ?string $customerReference = null, ?string $degre = null, ?string $lot = null, ?string $cuve = null, ?string $commissionVente = null, ?array $customer = null, ?array $custPrice = null):self
    {
       return $this;
    }

    public function constructForClient(?string $refExterne = '', ?array $dateHeure = array(), ?array $societe = array() , ?string $no = null, ?\StructType\Nom $nom = null, ?\StructType\NomRecherche $nomRecherche = null, ?\StructType\Nom2 $nom2 = null, ?\StructType\Marque1 $marque1 = null, ?\StructType\Marque2 $marque2 = null, ?\StructType\Adresse1 $adresse1 = null, ?\StructType\Adresse2 $adresse2 = null, ?\StructType\CodePostal $codePostal = null, ?\StructType\Ville $ville = null, ?\StructType\County $county = null, ?\StructType\CountryRegion $countryRegion = null, ?\StructType\CurrencyCode $currencyCode = null, ?\StructType\CreditLimit $creditLimit = null, ?\StructType\Blocked $blocked = null, ?\StructType\PaymentMethodCode $paymentMethodCode = null, ?\StructType\CustDiscGroup $custDiscGroup = null, ?\StructType\SalespersonCode $salespersonCode = null, ?\StructType\EquipeAgentCode $equipeAgentCode = null, ?\StructType\LocationCode $locationCode = null) : self
    {
        /*$this->setNo($no);
        $this->setRefExterne($refExterne);
        $this->setDateHeure($dateHeure);
        $this->setSociete($societe);
        $this->setNom($nom);
        $this->setNomRecherche($nom);
        $this->setNom2($nom2);
        $this->setMarque1($marque1);
        $this->setMarque2($marque2);
        $this->setAdresse1($adresse1);
        $this->setAdresse2($adresse2);
        $this->setCodePostal($codePostal);
        $this->setVille($ville);
        $this->setCounty($county);
        $this->setCountryRegion($countryRegion);
        $this->setCurrencyCode($currencyCode);
        $this->setCreditLimit($creditLimit);
        $this->setBlocked($blocked);
        $this->setPaymentMethodCode($paymentMethodCode);
        $this->setCustDiscGroup($custDiscGroup);
        $this->setSalespersonCode($salespersonCode);
        $this->setEquipeAgentCode($equipeAgentCode);
        $this->setLocationCode($locationCode);*/

        return $this;
    }

    /*public static function constructWithCustomers(array $customer): self{
        $this->setCustomer($customer);

        return $this;

    }*/

    /**
     * Get RefExterne value
     * @return string
     */
    public function getRefExterne(): string
    {
        return $this->RefExterne;
    }
    /**
     * Set RefExterne value
     * @param string $refExterne
     * @return \StructType\General
     */
    public function setRefExterne(string $refExterne = null): self
    {
        // validation for constraint: string
        /*if (!is_null($refExterne) && !is_string($refExterne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExterne, true), gettype($refExterne)), __LINE__);
        }*/
        $this->RefExterne = $refExterne;
        
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
        foreach ($values as $generalDateHeureItem) {
            // validation for constraint: itemType
            if (!is_string($generalDateHeureItem)) {
                $invalidValues[] = is_object($generalDateHeureItem) ? get_class($generalDateHeureItem) : sprintf('%s(%s)', gettype($generalDateHeureItem), var_export($generalDateHeureItem, true));
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
     * @return \StructType\General
     */
    public function setDateHeure(array $dateHeure = array()): self
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
     * @return \StructType\General
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
        foreach ($values as $generalSocieteItem) {
            // validation for constraint: itemType
            if (!is_string($generalSocieteItem)) {
                $invalidValues[] = is_object($generalSocieteItem) ? get_class($generalSocieteItem) : sprintf('%s(%s)', gettype($generalSocieteItem), var_export($generalSocieteItem, true));
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
     * @return \StructType\General
     */
    public function setSociete(array $societe = array()): self
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
     * @return \StructType\General
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
     * Get No value
     * @return string|null
     */
    public function getNo(): ?string
    {
        return $this->No;
    }
    /**
     * Set No value
     * @param string $no
     * @return \StructType\General
     */
    public function setNo(?string $no = null): self
    {
        // validation for constraint: string
        if (!is_null($no) && !is_string($no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($no, true), gettype($no)), __LINE__);
        }
        $this->No = $no;
        
        return $this;
    }
    /**
     * Get Nom value
     * @return \StructType\Nom|null
     */
    public function getNom(): ?\StructType\Nom
    {
        return $this->Nom;
    }
    /**
     * Set Nom value
     * @param \StructType\Nom $nom
     * @return \StructType\General
     */
    public function setNom(?\StructType\Nom $nom = null): self
    {
        $this->Nom = $nom;
        
        return $this;
    }
    /**
     * Get NomRecherche value
     * @return \StructType\NomRecherche|null
     */
    public function getNomRecherche(): ?\StructType\NomRecherche
    {
        return $this->NomRecherche;
    }
    /**
     * Set NomRecherche value
     * @param \StructType\NomRecherche $nomRecherche
     * @return \StructType\General
     */
    public function setNomRecherche(?\StructType\NomRecherche $nomRecherche = null): self
    {
        $this->NomRecherche = $nomRecherche;
        
        return $this;
    }
    /**
     * Get Nom2 value
     * @return \StructType\Nom2|null
     */
    public function getNom2(): ?\StructType\Nom2
    {
        return $this->Nom2;
    }
    /**
     * Set Nom2 value
     * @param \StructType\Nom2 $nom2
     * @return \StructType\General
     */
    public function setNom2(?\StructType\Nom2 $nom2 = null): self
    {
        $this->Nom2 = $nom2;
        
        return $this;
    }
    /**
     * Get Marque1 value
     * @return \StructType\Marque1|null
     */
    public function getMarque1(): ?\StructType\Marque1
    {
        return $this->Marque1;
    }
    /**
     * Set Marque1 value
     * @param \StructType\Marque1 $marque1
     * @return \StructType\General
     */
    public function setMarque1(?\StructType\Marque1 $marque1 = null): self
    {
        $this->Marque1 = $marque1;
        
        return $this;
    }
    /**
     * Get Marque2 value
     * @return \StructType\Marque2|null
     */
    public function getMarque2(): ?\StructType\Marque2
    {
        return $this->Marque2;
    }
    /**
     * Set Marque2 value
     * @param \StructType\Marque2 $marque2
     * @return \StructType\General
     */
    public function setMarque2(?\StructType\Marque2 $marque2 = null): self
    {
        $this->Marque2 = $marque2;
        
        return $this;
    }
    /**
     * Get Adresse1 value
     * @return \StructType\Adresse1|null
     */
    public function getAdresse1(): ?\StructType\Adresse1
    {
        return $this->Adresse1;
    }
    /**
     * Set Adresse1 value
     * @param \StructType\Adresse1 $adresse1
     * @return \StructType\General
     */
    public function setAdresse1(?\StructType\Adresse1 $adresse1 = null): self
    {
        $this->Adresse1 = $adresse1;
        
        return $this;
    }
    /**
     * Get Adresse2 value
     * @return \StructType\Adresse2|null
     */
    public function getAdresse2(): ?\StructType\Adresse2
    {
        return $this->Adresse2;
    }
    /**
     * Set Adresse2 value
     * @param \StructType\Adresse2 $adresse2
     * @return \StructType\General
     */
    public function setAdresse2(?\StructType\Adresse2 $adresse2 = null): self
    {
        $this->Adresse2 = $adresse2;
        
        return $this;
    }
    /**
     * Get CodePostal value
     * @return \StructType\CodePostal|null
     */
    public function getCodePostal(): ?\StructType\CodePostal
    {
        return $this->CodePostal;
    }
    /**
     * Set CodePostal value
     * @param \StructType\CodePostal $codePostal
     * @return \StructType\General
     */
    public function setCodePostal(?\StructType\CodePostal $codePostal = null): self
    {
        $this->CodePostal = $codePostal;
        
        return $this;
    }
    /**
     * Get Ville value
     * @return \StructType\Ville|null
     */
    public function getVille(): ?\StructType\Ville
    {
        return $this->Ville;
    }
    /**
     * Set Ville value
     * @param \StructType\Ville $ville
     * @return \StructType\General
     */
    public function setVille(?\StructType\Ville $ville = null): self
    {
        $this->Ville = $ville;
        
        return $this;
    }
    /**
     * Get County value
     * @return \StructType\County|null
     */
    public function getCounty(): ?\StructType\County
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param \StructType\County $county
     * @return \StructType\General
     */
    public function setCounty(?\StructType\County $county = null): self
    {
        $this->County = $county;
        
        return $this;
    }
    /**
     * Get CountryRegion value
     * @return \StructType\CountryRegion|null
     */
    public function getCountryRegion(): ?\StructType\CountryRegion
    {
        return $this->CountryRegion;
    }
    /**
     * Set CountryRegion value
     * @param \StructType\CountryRegion $countryRegion
     * @return \StructType\General
     */
    public function setCountryRegion(?\StructType\CountryRegion $countryRegion = null): self
    {
        $this->CountryRegion = $countryRegion;
        
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return \StructType\CurrencyCode|null
     */
    public function getCurrencyCode(): ?\StructType\CurrencyCode
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param \StructType\CurrencyCode $currencyCode
     * @return \StructType\General
     */
    public function setCurrencyCode(?\StructType\CurrencyCode $currencyCode = null): self
    {
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
    /**
     * Get CreditLimit value
     * @return \StructType\CreditLimit|null
     */
    public function getCreditLimit(): ?\StructType\CreditLimit
    {
        return $this->CreditLimit;
    }
    /**
     * Set CreditLimit value
     * @param \StructType\CreditLimit $creditLimit
     * @return \StructType\General
     */
    public function setCreditLimit(?\StructType\CreditLimit $creditLimit = null): self
    {
        $this->CreditLimit = $creditLimit;
        
        return $this;
    }
    /**
     * Get Blocked value
     * @return \StructType\Blocked|null
     */
    public function getBlocked(): ?\StructType\Blocked
    {
        return $this->Blocked;
    }
    /**
     * Set Blocked value
     * @param \StructType\Blocked $blocked
     * @return \StructType\General
     */
    public function setBlocked(?\StructType\Blocked $blocked = null): self
    {
        $this->Blocked = $blocked;
        
        return $this;
    }
    /**
     * Get PaymentMethodCode value
     * @return \StructType\PaymentMethodCode|null
     */
    public function getPaymentMethodCode(): ?\StructType\PaymentMethodCode
    {
        return $this->PaymentMethodCode;
    }
    /**
     * Set PaymentMethodCode value
     * @param \StructType\PaymentMethodCode $paymentMethodCode
     * @return \StructType\General
     */
    public function setPaymentMethodCode(?\StructType\PaymentMethodCode $paymentMethodCode = null): self
    {
        $this->PaymentMethodCode = $paymentMethodCode;
        
        return $this;
    }
    /**
     * Get CustDiscGroup value
     * @return \StructType\CustDiscGroup|null
     */
    public function getCustDiscGroup(): ?\StructType\CustDiscGroup
    {
        return $this->CustDiscGroup;
    }
    /**
     * Set CustDiscGroup value
     * @param \StructType\CustDiscGroup $custDiscGroup
     * @return \StructType\General
     */
    public function setCustDiscGroup(?\StructType\CustDiscGroup $custDiscGroup = null): self
    {
        $this->CustDiscGroup = $custDiscGroup;
        
        return $this;
    }
    /**
     * Get SalespersonCode value
     * @return \StructType\SalespersonCode|null
     */
    public function getSalespersonCode(): ?\StructType\SalespersonCode
    {
        return $this->SalespersonCode;
    }
    /**
     * Set SalespersonCode value
     * @param \StructType\SalespersonCode $salespersonCode
     * @return \StructType\General
     */
    public function setSalespersonCode(?\StructType\SalespersonCode $salespersonCode = null): self
    {
        $this->SalespersonCode = $salespersonCode;
        
        return $this;
    }
    /**
     * Get EquipeAgentCode value
     * @return \StructType\EquipeAgentCode|null
     */
    public function getEquipeAgentCode(): ?\StructType\EquipeAgentCode
    {
        return $this->EquipeAgentCode;
    }
    /**
     * Set EquipeAgentCode value
     * @param \StructType\EquipeAgentCode $equipeAgentCode
     * @return \StructType\General
     */
    public function setEquipeAgentCode(?\StructType\EquipeAgentCode $equipeAgentCode = null): self
    {
        $this->EquipeAgentCode = $equipeAgentCode;
        
        return $this;
    }
    /**
     * Get LocationCode value
     * @return \StructType\LocationCode|null
     */
    public function getLocationCode(): ?\StructType\LocationCode
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param \StructType\LocationCode $locationCode
     * @return \StructType\General
     */
    public function setLocationCode(?\StructType\LocationCode $locationCode = null): self
    {
        $this->LocationCode = $locationCode;
        
        return $this;
    }
    /**
     * Get NoContrat value
     * @return string|null
     */
    public function getNoContrat(): ?string
    {
        return $this->NoContrat;
    }
    /**
     * Set NoContrat value
     * @param string $noContrat
     * @return \StructType\General
     */
    public function setNoContrat(?string $noContrat = null): self
    {
        // validation for constraint: string
        if (!is_null($noContrat) && !is_string($noContrat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noContrat, true), gettype($noContrat)), __LINE__);
        }
        $this->NoContrat = $noContrat;
        
        return $this;
    }
    /**
     * Get TypeOrdre value
     * @return string|null
     */
    public function getTypeOrdre(): ?string
    {
        return $this->TypeOrdre;
    }
    /**
     * Set TypeOrdre value
     * @param string $typeOrdre
     * @return \StructType\General
     */
    public function setTypeOrdre(?string $typeOrdre = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOrdre) && !is_string($typeOrdre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOrdre, true), gettype($typeOrdre)), __LINE__);
        }
        $this->TypeOrdre = $typeOrdre;
        
        return $this;
    }
    /**
     * Get NoVendeur value
     * @return string|null
     */
    public function getNoVendeur(): ?string
    {
        return $this->NoVendeur;
    }
    /**
     * Set NoVendeur value
     * @param string $noVendeur
     * @return \StructType\General
     */
    public function setNoVendeur(?string $noVendeur = null): self
    {
        // validation for constraint: string
        if (!is_null($noVendeur) && !is_string($noVendeur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noVendeur, true), gettype($noVendeur)), __LINE__);
        }
        $this->NoVendeur = $noVendeur;
        
        return $this;
    }
    /**
     * Get NoUnion value
     * @return string|null
     */
    public function getNoUnion(): ?string
    {
        return $this->NoUnion;
    }
    /**
     * Set NoUnion value
     * @param string $noUnion
     * @return \StructType\General
     */
    public function setNoUnion(?string $noUnion = null): self
    {
        // validation for constraint: string
        if (!is_null($noUnion) && !is_string($noUnion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noUnion, true), gettype($noUnion)), __LINE__);
        }
        $this->NoUnion = $noUnion;
        
        return $this;
    }
    /**
     * Get NoAcheteur value
     * @return string|null
     */
    public function getNoAcheteur(): ?string
    {
        return $this->NoAcheteur;
    }
    /**
     * Set NoAcheteur value
     * @param string $noAcheteur
     * @return \StructType\General
     */
    public function setNoAcheteur(?string $noAcheteur = null): self
    {
        // validation for constraint: string
        if (!is_null($noAcheteur) && !is_string($noAcheteur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noAcheteur, true), gettype($noAcheteur)), __LINE__);
        }
        $this->NoAcheteur = $noAcheteur;
        
        return $this;
    }
    /**
     * Get Cloture value
     * @return string|null
     */
    public function getCloture(): ?string
    {
        return $this->Cloture;
    }
    /**
     * Set Cloture value
     * @param string $cloture
     * @return \StructType\General
     */
    public function setCloture(?string $cloture = null): self
    {
        // validation for constraint: string
        if (!is_null($cloture) && !is_string($cloture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cloture, true), gettype($cloture)), __LINE__);
        }
        $this->Cloture = $cloture;
        
        return $this;
    }
    /**
     * Get TypeContrat value
     * @return string|null
     */
    public function getTypeContrat(): ?string
    {
        return $this->TypeContrat;
    }
    /**
     * Set TypeContrat value
     * @param string $typeContrat
     * @return \StructType\General
     */
    public function setTypeContrat(?string $typeContrat = null): self
    {
        // validation for constraint: string
        if (!is_null($typeContrat) && !is_string($typeContrat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeContrat, true), gettype($typeContrat)), __LINE__);
        }
        $this->TypeContrat = $typeContrat;
        
        return $this;
    }
    /**
     * Get VolumeHL value
     * @return string|null
     */
    public function getVolumeHL(): ?string
    {
        return $this->VolumeHL;
    }
    /**
     * Set VolumeHL value
     * @param string $volumeHL
     * @return \StructType\General
     */
    public function setVolumeHL(?string $volumeHL = null): self
    {
        // validation for constraint: string
        if (!is_null($volumeHL) && !is_string($volumeHL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($volumeHL, true), gettype($volumeHL)), __LINE__);
        }
        $this->VolumeHL = $volumeHL;
        
        return $this;
    }
    /**
     * Get PoidsKg value
     * @return string|null
     */
    public function getPoidsKg(): ?string
    {
        return $this->PoidsKg;
    }
    /**
     * Set PoidsKg value
     * @param string $poidsKg
     * @return \StructType\General
     */
    public function setPoidsKg(?string $poidsKg = null): self
    {
        // validation for constraint: string
        if (!is_null($poidsKg) && !is_string($poidsKg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($poidsKg, true), gettype($poidsKg)), __LINE__);
        }
        $this->PoidsKg = $poidsKg;
        
        return $this;
    }
    /**
     * Get Millesime value
     * @return string|null
     */
    public function getMillesime(): ?string
    {
        return $this->Millesime;
    }
    /**
     * Set Millesime value
     * @param string $millesime
     * @return \StructType\General
     */
    public function setMillesime(?string $millesime = null): self
    {
        // validation for constraint: string
        if (!is_null($millesime) && !is_string($millesime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($millesime, true), gettype($millesime)), __LINE__);
        }
        $this->Millesime = $millesime;
        
        return $this;
    }
    /**
     * Get NoArticle value
     * @return string|null
     */
    public function getNoArticle(): ?string
    {
        return $this->NoArticle;
    }
    /**
     * Set NoArticle value
     * @param string $noArticle
     * @return \StructType\General
     */
    public function setNoArticle(?string $noArticle = null): self
    {
        // validation for constraint: string
        if (!is_null($noArticle) && !is_string($noArticle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noArticle, true), gettype($noArticle)), __LINE__);
        }
        $this->NoArticle = $noArticle;
        
        return $this;
    }
    /**
     * Get CodeModeReglement value
     * @return string|null
     */
    public function getCodeModeReglement(): ?string
    {
        return $this->CodeModeReglement;
    }
    /**
     * Set CodeModeReglement value
     * @param string $codeModeReglement
     * @return \StructType\General
     */
    public function setCodeModeReglement(?string $codeModeReglement = null): self
    {
        // validation for constraint: string
        if (!is_null($codeModeReglement) && !is_string($codeModeReglement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeModeReglement, true), gettype($codeModeReglement)), __LINE__);
        }
        $this->CodeModeReglement = $codeModeReglement;
        
        return $this;
    }
    /**
     * Get CodeConditionReglement value
     * @return string|null
     */
    public function getCodeConditionReglement(): ?string
    {
        return $this->CodeConditionReglement;
    }
    /**
     * Set CodeConditionReglement value
     * @param string $codeConditionReglement
     * @return \StructType\General
     */
    public function setCodeConditionReglement(?string $codeConditionReglement = null): self
    {
        // validation for constraint: string
        if (!is_null($codeConditionReglement) && !is_string($codeConditionReglement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeConditionReglement, true), gettype($codeConditionReglement)), __LINE__);
        }
        $this->CodeConditionReglement = $codeConditionReglement;
        
        return $this;
    }
    /**
     * Get PrixUnitaire value
     * @return string|null
     */
    public function getPrixUnitaire(): ?string
    {
        return $this->PrixUnitaire;
    }
    /**
     * Set PrixUnitaire value
     * @param string $prixUnitaire
     * @return \StructType\General
     */
    public function setPrixUnitaire(?string $prixUnitaire = null): self
    {
        // validation for constraint: string
        if (!is_null($prixUnitaire) && !is_string($prixUnitaire)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prixUnitaire, true), gettype($prixUnitaire)), __LINE__);
        }
        $this->PrixUnitaire = $prixUnitaire;
        
        return $this;
    }
    /**
     * Get STATUT_TRANSFERT_PRIMUS value
     * @return string|null
     */
    public function getSTATUT_TRANSFERT_PRIMUS(): ?string
    {
        return $this->STATUT_TRANSFERT_PRIMUS;
    }
    /**
     * Set STATUT_TRANSFERT_PRIMUS value
     * @param string $sTATUT_TRANSFERT_PRIMUS
     * @return \StructType\General
     */
    public function setSTATUT_TRANSFERT_PRIMUS(?string $sTATUT_TRANSFERT_PRIMUS = null): self
    {
        // validation for constraint: string
        if (!is_null($sTATUT_TRANSFERT_PRIMUS) && !is_string($sTATUT_TRANSFERT_PRIMUS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTATUT_TRANSFERT_PRIMUS, true), gettype($sTATUT_TRANSFERT_PRIMUS)), __LINE__);
        }
        $this->STATUT_TRANSFERT_PRIMUS = $sTATUT_TRANSFERT_PRIMUS;
        
        return $this;
    }
    /**
     * Get CustomerReference value
     * @return string|null
     */
    public function getCustomerReference(): ?string
    {
        return $this->CustomerReference;
    }
    /**
     * Set CustomerReference value
     * @param string $customerReference
     * @return \StructType\General
     */
    public function setCustomerReference(?string $customerReference = null): self
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReference, true), gettype($customerReference)), __LINE__);
        }
        $this->CustomerReference = $customerReference;
        
        return $this;
    }
    /**
     * Get Degre value
     * @return string|null
     */
    public function getDegre(): ?string
    {
        return $this->Degre;
    }
    /**
     * Set Degre value
     * @param string $degre
     * @return \StructType\General
     */
    public function setDegre(?string $degre = null): self
    {
        // validation for constraint: string
        if (!is_null($degre) && !is_string($degre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($degre, true), gettype($degre)), __LINE__);
        }
        $this->Degre = $degre;
        
        return $this;
    }
    /**
     * Get Lot value
     * @return string|null
     */
    public function getLot(): ?string
    {
        return $this->Lot;
    }
    /**
     * Set Lot value
     * @param string $lot
     * @return \StructType\General
     */
    public function setLot(?string $lot = null): self
    {
        // validation for constraint: string
        if (!is_null($lot) && !is_string($lot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lot, true), gettype($lot)), __LINE__);
        }
        $this->Lot = $lot;
        
        return $this;
    }
    /**
     * Get Cuve value
     * @return string|null
     */
    public function getCuve(): ?string
    {
        return $this->Cuve;
    }
    /**
     * Set Cuve value
     * @param string $cuve
     * @return \StructType\General
     */
    public function setCuve(?string $cuve = null): self
    {
        // validation for constraint: string
        if (!is_null($cuve) && !is_string($cuve)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuve, true), gettype($cuve)), __LINE__);
        }
        $this->Cuve = $cuve;
        
        return $this;
    }
    /**
     * Get CommissionVente value
     * @return string|null
     */
    public function getCommissionVente(): ?string
    {
        return $this->CommissionVente;
    }
    /**
     * Set CommissionVente value
     * @param string $commissionVente
     * @return \StructType\General
     */
    public function setCommissionVente(?string $commissionVente = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionVente) && !is_string($commissionVente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionVente, true), gettype($commissionVente)), __LINE__);
        }
        $this->CommissionVente = $commissionVente;
        
        return $this;
    }
    /**
     * Get Customer value
     * @return \StructType\Customer[]
     */
    public function getCustomer(): ?array
    {
        return $this->Customer;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintsFromSetCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $generalCustomerItem) {
            // validation for constraint: itemType
            if (!$generalCustomerItem instanceof \StructType\Customer) {
                $invalidValues[] = is_object($generalCustomerItem) ? get_class($generalCustomerItem) : sprintf('%s(%s)', gettype($generalCustomerItem), var_export($generalCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer property can only contain items of type \StructType\Customer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer value
     * @throws InvalidArgumentException
     * @param \StructType\Customer[] $customer
     * @return \StructType\General
     */
    public function setCustomer(?array $customer = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintsFromSetCustomer($customer))) {
            throw new InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }
        $this->Customer = $customer;
        
        return $this;
    }
    /**
     * Add item to Customer value
     * @throws InvalidArgumentException
     * @param \StructType\Customer $item
     * @return \StructType\General
     */
    public function addToCustomer(\StructType\Customer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Customer) {
            throw new InvalidArgumentException(sprintf('The Customer property can only contain items of type \StructType\Customer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer[] = $item;
        
        return $this;
    }
    /**
     * Get CustPrice value
     * @return \StructType\CustPrice[]
     */
    public function getCustPrice(): ?array
    {
        return $this->CustPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setCustPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustPriceForArrayConstraintsFromSetCustPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $generalCustPriceItem) {
            // validation for constraint: itemType
            if (!$generalCustPriceItem instanceof \StructType\CustPrice) {
                $invalidValues[] = is_object($generalCustPriceItem) ? get_class($generalCustPriceItem) : sprintf('%s(%s)', gettype($generalCustPriceItem), var_export($generalCustPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustPrice property can only contain items of type \StructType\CustPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustPrice value
     * @throws InvalidArgumentException
     * @param \StructType\CustPrice[] $custPrice
     * @return \StructType\General
     */
    public function setCustPrice(?array $custPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($custPriceArrayErrorMessage = self::validateCustPriceForArrayConstraintsFromSetCustPrice($custPrice))) {
            throw new InvalidArgumentException($custPriceArrayErrorMessage, __LINE__);
        }
        $this->CustPrice = $custPrice;
        
        return $this;
    }
    /**
     * Add item to CustPrice value
     * @throws InvalidArgumentException
     * @param \StructType\CustPrice $item
     * @return \StructType\General
     */
    public function addToCustPrice(\StructType\CustPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustPrice) {
            throw new InvalidArgumentException(sprintf('The CustPrice property can only contain items of type \StructType\CustPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustPrice[] = $item;
        
        return $this;
    }
}
