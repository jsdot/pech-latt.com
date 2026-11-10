<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Customer StructType
 * @subpackage Structs
 */
class Customer extends AbstractStructBase
{
    /**
     * The Customer_TypeAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_TypeAction = null;
    /**
     * The Customer_ReferenceExterne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_ReferenceExterne = null;
    /**
     * The Customer_No
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Customer_No = null;
    /**
     * The Customer_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Customer_Name = null;
    /**
     * The Customer_SearchName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Customer_SearchName = null;
    /**
     * The Customer_Name2
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Name2 = null;
    /**
     * The Customer_Marque1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Marque1 = null;
    /**
     * The Customer_Marque2
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Marque2 = null;
    /**
     * The Customer_Adress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Adress = null;
    /**
     * The Customer_Adres2
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Adres2 = null;
    /**
     * The Customer_City
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_City = null;
    /**
     * The Customer_PostCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_PostCode = null;
    /**
     * The Customer_County
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_County = null;
    /**
     * The Customer_CountryRegionCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_CountryRegionCode = null;
    /**
     * The Customer_CurrencyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_CurrencyCode = null;
    /**
     * The Customer_CreditLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_CreditLimit = null;
    /**
     * The Customer_Blocked
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Blocked = null;
    /**
     * The Customer_PaymentMethodCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_PaymentMethodCode = null;
    /**
     * The Customer_CustDiscGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_CustDiscGroup = null;
    /**
     * The Customer_SalespersonCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_SalespersonCode = null;
    /**
     * The Customer_SalespersonNom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_SalespersonNom = null;
    /**
     * The Customer_NumSIREN
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_NumSIREN = null;
    /**
     * The Customer_ComplementSIREN
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_ComplementSIREN = null;
    /**
     * The Customer_Email
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Email = null;
    /**
     * The Customer_Phone
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Phone = null;
    /**
     * The Customer_Portable
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Portable = null;
    /**
     * The Customer_Telex
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_Telex = null;
    /**
     * The Customer_HomePage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_HomePage = null;
    /**
     * The Customer_APE
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_APE = null;
    /**
     * The Customer_ADG
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_ADG = null;
    /**
     * The Customer_CustPriceGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_CustPriceGroup = null;
    /**
     * The Customer_NumCVI
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_NumCVI = null;
    /**
     * The Customer_NumTVA
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_NumTVA = null;
    /**
     * The Customer_NumAccise
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_NumAccise = null;
    /**
     * The Customer_PaymentTermsCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_PaymentTermsCode = null;
    /**
     * The Customer_EncoursDS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_EncoursDS = null;
    /**
     * The Customer_EncoursDSHorsPrimeurs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_EncoursDSHorsPrimeurs = null;
    /**
     * The Customer_EncoursDSPrimeurs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_EncoursDSPrimeurs = null;
    /**
     * The Customer_Internet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_Internet = null;
    /**
     * The Customer_Statut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_Statut = null;
    /**
     * The Customer_ClientReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_ClientReference = null;
    /**
     * The Customer_ZoneGeo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_ZoneGeo = null;
    /**
     * The Customer_ZoneGeoLibelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_ZoneGeoLibelle = null;
    /**
     * The Customer_Activite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_Activite = null;
    /**
     * The Customer_ActiviteLibelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_ActiviteLibelle = null;
    /**
     * The Customer_Taille
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_Taille = null;
    /**
     * The Customer_TailleLibelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_TailleLibelle = null;
    /**
     * The Customer_Origine
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_Origine = null;
    /**
     * The Customer_OrigineLibelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_OrigineLibelle = null;
    /**
     * The Customer_HierarchieStat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_HierarchieStat = null;
    /**
     * The Customer_HierarchieStatLibelle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_HierarchieStatLibelle = null;
    /**
     * The Customer_FamilleBudget
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleBudget = null;
    /**
     * The Customer_FamilleBudgetLibelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleBudgetLibelle = null;
    /**
     * The Customer_SoldeDu
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_SoldeDu = null;
    /**
     * The Customer_LimitCredit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_LimitCredit = null;
    /**
     * The Customer_EquipeAgent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Customer_EquipeAgent = null;
    /**
     * The Customer_EquipeAgentNom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_EquipeAgentNom = null;
    /**
     * The Customer_FamilleStat1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat1 = null;
    /**
     * The Customer_FamilleStat1Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat1Libelle = null;
    /**
     * The Customer_FamilleStat2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat2 = null;
    /**
     * The Customer_FamilleStat2Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat2Libelle = null;
    /**
     * The Customer_FamilleStat3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat3 = null;
    /**
     * The Customer_FamilleStat3Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat3Libelle = null;
    /**
     * The Customer_FamilleStat4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat4 = null;
    /**
     * The Customer_FamilleStat4Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat4Libelle = null;
    /**
     * The Customer_FamilleStat5
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat5 = null;
    /**
     * The Customer_FamilleStat5Libelle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Customer_FamilleStat5Libelle = null;
	
    protected ?string $Customer_Verification = null;

    /**
     * Constructor method for Customer
     * @uses Customer::setCustomer_TypeAction()
     * @uses Customer::setCustomer_ReferenceExterne()
     * @uses Customer::setCustomer_No()
     * @uses Customer::setCustomer_Name()
     * @uses Customer::setCustomer_SearchName()
     * @uses Customer::setCustomer_Name2()
     * @uses Customer::setCustomer_Marque1()
     * @uses Customer::setCustomer_Marque2()
     * @uses Customer::setCustomer_Adress()
     * @uses Customer::setCustomer_Adres2()
     * @uses Customer::setCustomer_City()
     * @uses Customer::setCustomer_PostCode()
     * @uses Customer::setCustomer_County()
     * @uses Customer::setCustomer_CountryRegionCode()
     * @uses Customer::setCustomer_CurrencyCode()
     * @uses Customer::setCustomer_CreditLimit()
     * @uses Customer::setCustomer_Blocked()
     * @uses Customer::setCustomer_PaymentMethodCode()
     * @uses Customer::setCustomer_CustDiscGroup()
     * @uses Customer::setCustomer_SalespersonCode()
     * @uses Customer::setCustomer_SalespersonNom()
     * @uses Customer::setCustomer_NumSIREN()
     * @uses Customer::setCustomer_ComplementSIREN()
     * @uses Customer::setCustomer_Email()
     * @uses Customer::setCustomer_Phone()
     * @uses Customer::setCustomer_Portable()
     * @uses Customer::setCustomer_Telex()
     * @uses Customer::setCustomer_HomePage()
     * @uses Customer::setCustomer_APE()
     * @uses Customer::setCustomer_ADG()
     * @uses Customer::setCustomer_CustPriceGroup()
     * @uses Customer::setCustomer_NumCVI()
     * @uses Customer::setCustomer_NumTVA()
     * @uses Customer::setCustomer_NumAccise()
     * @uses Customer::setCustomer_PaymentTermsCode()
     * @uses Customer::setCustomer_EncoursDS()
     * @uses Customer::setCustomer_EncoursDSHorsPrimeurs()
     * @uses Customer::setCustomer_EncoursDSPrimeurs()
     * @uses Customer::setCustomer_Internet()
     * @uses Customer::setCustomer_Statut()
     * @uses Customer::setCustomer_ClientReference()
     * @uses Customer::setCustomer_ZoneGeo()
     * @uses Customer::setCustomer_ZoneGeoLibelle()
     * @uses Customer::setCustomer_Activite()
     * @uses Customer::setCustomer_ActiviteLibelle()
     * @uses Customer::setCustomer_Taille()
     * @uses Customer::setCustomer_TailleLibelle()
     * @uses Customer::setCustomer_Origine()
     * @uses Customer::setCustomer_OrigineLibelle()
     * @uses Customer::setCustomer_HierarchieStat()
     * @uses Customer::setCustomer_HierarchieStatLibelle()
     * @uses Customer::setCustomer_FamilleBudget()
     * @uses Customer::setCustomer_FamilleBudgetLibelle()
     * @uses Customer::setCustomer_SoldeDu()
     * @uses Customer::setCustomer_LimitCredit()
     * @uses Customer::setCustomer_EquipeAgent()
     * @uses Customer::setCustomer_EquipeAgentNom()
     * @uses Customer::setCustomer_FamilleStat1()
     * @uses Customer::setCustomer_FamilleStat1Libelle()
     * @uses Customer::setCustomer_FamilleStat2()
     * @uses Customer::setCustomer_FamilleStat2Libelle()
     * @uses Customer::setCustomer_FamilleStat3()
     * @uses Customer::setCustomer_FamilleStat3Libelle()
     * @uses Customer::setCustomer_FamilleStat4()
     * @uses Customer::setCustomer_FamilleStat4Libelle()
     * @uses Customer::setCustomer_FamilleStat5()
     * @uses Customer::setCustomer_FamilleStat5Libelle()
     * @param string $customer_TypeAction
     * @param string $customer_ReferenceExterne
     * @param string[] $customer_No
     * @param string[] $customer_Name
     * @param string[] $customer_SearchName
     * @param string[] $customer_Name2
     * @param string[] $customer_Marque1
     * @param string[] $customer_Marque2
     * @param string[] $customer_Adress
     * @param string[] $customer_Adres2
     * @param string[] $customer_City
     * @param string[] $customer_PostCode
     * @param string[] $customer_County
     * @param string[] $customer_CountryRegionCode
     * @param string[] $customer_CurrencyCode
     * @param string[] $customer_CreditLimit
     * @param string[] $customer_Blocked
     * @param string[] $customer_PaymentMethodCode
     * @param string[] $customer_CustDiscGroup
     * @param string[] $customer_SalespersonCode
     * @param string $customer_SalespersonNom
     * @param string[] $customer_NumSIREN
     * @param string[] $customer_ComplementSIREN
     * @param string[] $customer_Email
     * @param string[] $customer_Phone
     * @param string[] $customer_Portable
     * @param string[] $customer_Telex
     * @param string[] $customer_HomePage
     * @param string[] $customer_APE
     * @param string[] $customer_ADG
     * @param string[] $customer_CustPriceGroup
     * @param string[] $customer_NumCVI
     * @param string[] $customer_NumTVA
     * @param string[] $customer_NumAccise
     * @param string[] $customer_PaymentTermsCode
     * @param string $customer_EncoursDS
     * @param string $customer_EncoursDSHorsPrimeurs
     * @param string $customer_EncoursDSPrimeurs
     * @param string $customer_Internet
     * @param string $customer_Statut
     * @param string $customer_ClientReference
     * @param string $customer_ZoneGeo
     * @param string $customer_ZoneGeoLibelle
     * @param string $customer_Activite
     * @param string $customer_ActiviteLibelle
     * @param string $customer_Taille
     * @param string $customer_TailleLibelle
     * @param string $customer_Origine
     * @param string $customer_OrigineLibelle
     * @param string $customer_HierarchieStat
     * @param string[] $customer_HierarchieStatLibelle
     * @param string $customer_FamilleBudget
     * @param string $customer_FamilleBudgetLibelle
     * @param string $customer_SoldeDu
     * @param string[] $customer_LimitCredit
     * @param string[] $customer_EquipeAgent
     * @param string $customer_EquipeAgentNom
     * @param string $customer_FamilleStat1
     * @param string $customer_FamilleStat1Libelle
     * @param string $customer_FamilleStat2
     * @param string $customer_FamilleStat2Libelle
     * @param string $customer_FamilleStat3
     * @param string $customer_FamilleStat3Libelle
     * @param string $customer_FamilleStat4
     * @param string $customer_FamilleStat4Libelle
     * @param string $customer_FamilleStat5
     * @param string $customer_FamilleStat5Libelle
     */
    public function __construct(?string $customer_TypeAction = null, ?string $customer_ReferenceExterne = null, ?array $customer_No = null, ?array $customer_Name = null, ?array $customer_SearchName = null, ?array $customer_Name2 = null, ?array $customer_Marque1 = null, ?array $customer_Marque2 = null, ?array $customer_Adress = null, ?array $customer_Adres2 = null, ?array $customer_City = null, ?array $customer_PostCode = null, ?array $customer_County = null, ?array $customer_CountryRegionCode = null, ?array $customer_CurrencyCode = null, ?array $customer_CreditLimit = null, ?array $customer_Blocked = null, ?array $customer_PaymentMethodCode = null, ?array $customer_CustDiscGroup = null, ?array $customer_SalespersonCode = null, ?string $customer_SalespersonNom = null, ?array $customer_NumSIREN = null, ?array $customer_ComplementSIREN = null, ?array $customer_Email = null, ?array $customer_Phone = null, ?array $customer_Portable = null, ?array $customer_Telex = null, ?array $customer_HomePage = null, ?array $customer_APE = null, ?array $customer_ADG = null, ?array $customer_CustPriceGroup = null, ?array $customer_NumCVI = null, ?array $customer_NumTVA = null, ?array $customer_NumAccise = null, ?array $customer_PaymentTermsCode = null, ?string $customer_EncoursDS = null, ?string $customer_EncoursDSHorsPrimeurs = null, ?string $customer_EncoursDSPrimeurs = null, ?string $customer_Internet = null, ?string $customer_Statut = null, ?string $customer_ClientReference = null, ?string $customer_ZoneGeo = null, ?string $customer_ZoneGeoLibelle = null, ?string $customer_Activite = null, ?string $customer_ActiviteLibelle = null, ?string $customer_Taille = null, ?string $customer_TailleLibelle = null, ?string $customer_Origine = null, ?string $customer_OrigineLibelle = null, ?string $customer_HierarchieStat = null, ?array $customer_HierarchieStatLibelle = null, ?string $customer_FamilleBudget = null, ?string $customer_FamilleBudgetLibelle = null, ?string $customer_SoldeDu = null, ?array $customer_LimitCredit = null, ?array $customer_EquipeAgent = null, ?string $customer_EquipeAgentNom = null, ?string $customer_FamilleStat1 = null, ?string $customer_FamilleStat1Libelle = null, ?string $customer_FamilleStat2 = null, ?string $customer_FamilleStat2Libelle = null, ?string $customer_FamilleStat3 = null, ?string $customer_FamilleStat3Libelle = null, ?string $customer_FamilleStat4 = null, ?string $customer_FamilleStat4Libelle = null, ?string $customer_FamilleStat5 = null, ?string $customer_FamilleStat5Libelle = null, ?string $customer_Verification = null )
    {
        $this
            ->setCustomer_TypeAction($customer_TypeAction)
            ->setCustomer_ReferenceExterne($customer_ReferenceExterne)
            ->setCustomer_No($customer_No)
            ->setCustomer_Name($customer_Name)
            ->setCustomer_SearchName($customer_SearchName)
            ->setCustomer_Name2($customer_Name2)
            ->setCustomer_Marque1($customer_Marque1)
            ->setCustomer_Marque2($customer_Marque2)
            ->setCustomer_Adress($customer_Adress)
            ->setCustomer_Adres2($customer_Adres2)
            ->setCustomer_City($customer_City)
            ->setCustomer_PostCode($customer_PostCode)
            ->setCustomer_County($customer_County)
            ->setCustomer_CountryRegionCode($customer_CountryRegionCode)
            ->setCustomer_CurrencyCode($customer_CurrencyCode)
            ->setCustomer_CreditLimit($customer_CreditLimit)
            ->setCustomer_Blocked($customer_Blocked)
            ->setCustomer_PaymentMethodCode($customer_PaymentMethodCode)
            ->setCustomer_CustDiscGroup($customer_CustDiscGroup)
            ->setCustomer_SalespersonCode($customer_SalespersonCode)
            ->setCustomer_SalespersonNom($customer_SalespersonNom)
            ->setCustomer_NumSIREN($customer_NumSIREN)
            ->setCustomer_ComplementSIREN($customer_ComplementSIREN)
            ->setCustomer_Email($customer_Email)
            ->setCustomer_Phone($customer_Phone)
            ->setCustomer_Portable($customer_Portable)
            ->setCustomer_Telex($customer_Telex)
            ->setCustomer_HomePage($customer_HomePage)
            ->setCustomer_APE($customer_APE)
            ->setCustomer_ADG($customer_ADG)
            ->setCustomer_CustPriceGroup($customer_CustPriceGroup)
            ->setCustomer_NumCVI($customer_NumCVI)
            ->setCustomer_NumTVA($customer_NumTVA)
            ->setCustomer_NumAccise($customer_NumAccise)
            ->setCustomer_PaymentTermsCode($customer_PaymentTermsCode)
            ->setCustomer_EncoursDS($customer_EncoursDS)
            ->setCustomer_EncoursDSHorsPrimeurs($customer_EncoursDSHorsPrimeurs)
            ->setCustomer_EncoursDSPrimeurs($customer_EncoursDSPrimeurs)
            ->setCustomer_Internet($customer_Internet)
            ->setCustomer_Statut($customer_Statut)
            ->setCustomer_ClientReference($customer_ClientReference)
            ->setCustomer_ZoneGeo($customer_ZoneGeo)
            ->setCustomer_ZoneGeoLibelle($customer_ZoneGeoLibelle)
            ->setCustomer_Activite($customer_Activite)
            ->setCustomer_ActiviteLibelle($customer_ActiviteLibelle)
            ->setCustomer_Taille($customer_Taille)
            ->setCustomer_TailleLibelle($customer_TailleLibelle)
            ->setCustomer_Origine($customer_Origine)
            ->setCustomer_OrigineLibelle($customer_OrigineLibelle)
            ->setCustomer_HierarchieStat($customer_HierarchieStat)
            ->setCustomer_HierarchieStatLibelle($customer_HierarchieStatLibelle)
            ->setCustomer_FamilleBudget($customer_FamilleBudget)
            ->setCustomer_FamilleBudgetLibelle($customer_FamilleBudgetLibelle)
            ->setCustomer_SoldeDu($customer_SoldeDu)
            ->setCustomer_LimitCredit($customer_LimitCredit)
            ->setCustomer_EquipeAgent($customer_EquipeAgent)
            ->setCustomer_EquipeAgentNom($customer_EquipeAgentNom)
            ->setCustomer_FamilleStat1($customer_FamilleStat1)
            ->setCustomer_FamilleStat1Libelle($customer_FamilleStat1Libelle)
            ->setCustomer_FamilleStat2($customer_FamilleStat2)
            ->setCustomer_FamilleStat2Libelle($customer_FamilleStat2Libelle)
            ->setCustomer_FamilleStat3($customer_FamilleStat3)
            ->setCustomer_FamilleStat3Libelle($customer_FamilleStat3Libelle)
            ->setCustomer_FamilleStat4($customer_FamilleStat4)
            ->setCustomer_FamilleStat4Libelle($customer_FamilleStat4Libelle)
            ->setCustomer_FamilleStat5($customer_FamilleStat5)
            ->setCustomer_FamilleStat5Libelle($customer_FamilleStat5Libelle)
			->setCustomer_Verification($customer_Verification);
    }
	
	public function setCustomer_Verification(?string $customer_Verification = null): self
	{	
		$this->Customer_Verification = $customer_Verification;
		
		return $this;
	}
	
    /**
     * Get Customer_TypeAction value
     * @return string|null
     */
    public function getCustomer_TypeAction(): ?string
    {
        return $this->Customer_TypeAction;
    }
    /**
     * Set Customer_TypeAction value
     * @param string $customer_TypeAction
     * @return \StructType\Customer
     */
    public function setCustomer_TypeAction(?string $customer_TypeAction = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_TypeAction) && !is_string($customer_TypeAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_TypeAction, true), gettype($customer_TypeAction)), __LINE__);
        }
        $this->Customer_TypeAction = $customer_TypeAction;
        
        return $this;
    }
    /**
     * Get Customer_ReferenceExterne value
     * @return string|null
     */
    public function getCustomer_ReferenceExterne(): ?string
    {
        return $this->Customer_ReferenceExterne;
    }
    /**
     * Set Customer_ReferenceExterne value
     * @param string $customer_ReferenceExterne
     * @return \StructType\Customer
     */
    public function setCustomer_ReferenceExterne(?string $customer_ReferenceExterne = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_ReferenceExterne) && !is_string($customer_ReferenceExterne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_ReferenceExterne, true), gettype($customer_ReferenceExterne)), __LINE__);
        }
        $this->Customer_ReferenceExterne = $customer_ReferenceExterne;
        
        return $this;
    }
    /**
     * Get Customer_No value
     * @return string[]
     */
    public function getCustomer_No(): ?array
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
        foreach ($values as $customerCustomer_NoItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_NoItem)) {
                $invalidValues[] = is_object($customerCustomer_NoItem) ? get_class($customerCustomer_NoItem) : sprintf('%s(%s)', gettype($customerCustomer_NoItem), var_export($customerCustomer_NoItem, true));
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
     * @return \StructType\Customer
     */
    public function setCustomer_No(?array $customer_No = null): self
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
     * @return \StructType\Customer
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
    public function getCustomer_Name(): ?array
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
        foreach ($values as $customerCustomer_NameItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_NameItem)) {
                $invalidValues[] = is_object($customerCustomer_NameItem) ? get_class($customerCustomer_NameItem) : sprintf('%s(%s)', gettype($customerCustomer_NameItem), var_export($customerCustomer_NameItem, true));
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
     * @return \StructType\Customer
     */
    public function setCustomer_Name(?array $customer_Name = null): self
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
     * @return \StructType\Customer
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
     * Get Customer_SearchName value
     * @return string[]
     */
    public function getCustomer_SearchName(): ?array
    {
        return $this->Customer_SearchName;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_SearchName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_SearchName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_SearchNameForArrayConstraintsFromSetCustomer_SearchName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_SearchNameItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_SearchNameItem)) {
                $invalidValues[] = is_object($customerCustomer_SearchNameItem) ? get_class($customerCustomer_SearchNameItem) : sprintf('%s(%s)', gettype($customerCustomer_SearchNameItem), var_export($customerCustomer_SearchNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_SearchName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_SearchName value
     * @throws InvalidArgumentException
     * @param string[] $customer_SearchName
     * @return \StructType\Customer
     */
    public function setCustomer_SearchName(?array $customer_SearchName = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_SearchNameArrayErrorMessage = self::validateCustomer_SearchNameForArrayConstraintsFromSetCustomer_SearchName($customer_SearchName))) {
            throw new InvalidArgumentException($customer_SearchNameArrayErrorMessage, __LINE__);
        }
        $this->Customer_SearchName = $customer_SearchName;
        
        return $this;
    }
    /**
     * Add item to Customer_SearchName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_SearchName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_SearchName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_SearchName[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Name2 value
     * @return string[]
     */
    public function getCustomer_Name2(): ?array
    {
        return $this->Customer_Name2;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Name2 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Name2 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_Name2ForArrayConstraintsFromSetCustomer_Name2(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_Name2Item) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_Name2Item)) {
                $invalidValues[] = is_object($customerCustomer_Name2Item) ? get_class($customerCustomer_Name2Item) : sprintf('%s(%s)', gettype($customerCustomer_Name2Item), var_export($customerCustomer_Name2Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Name2 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Name2 value
     * @throws InvalidArgumentException
     * @param string[] $customer_Name2
     * @return \StructType\Customer
     */
    public function setCustomer_Name2(?array $customer_Name2 = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_Name2ArrayErrorMessage = self::validateCustomer_Name2ForArrayConstraintsFromSetCustomer_Name2($customer_Name2))) {
            throw new InvalidArgumentException($customer_Name2ArrayErrorMessage, __LINE__);
        }
        $this->Customer_Name2 = $customer_Name2;
        
        return $this;
    }
    /**
     * Add item to Customer_Name2 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Name2(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Name2 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Name2[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Marque1 value
     * @return string[]
     */
    public function getCustomer_Marque1(): ?array
    {
        return $this->Customer_Marque1;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Marque1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Marque1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_Marque1ForArrayConstraintsFromSetCustomer_Marque1(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_Marque1Item) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_Marque1Item)) {
                $invalidValues[] = is_object($customerCustomer_Marque1Item) ? get_class($customerCustomer_Marque1Item) : sprintf('%s(%s)', gettype($customerCustomer_Marque1Item), var_export($customerCustomer_Marque1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Marque1 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Marque1 value
     * @throws InvalidArgumentException
     * @param string[] $customer_Marque1
     * @return \StructType\Customer
     */
    public function setCustomer_Marque1(?array $customer_Marque1 = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_Marque1ArrayErrorMessage = self::validateCustomer_Marque1ForArrayConstraintsFromSetCustomer_Marque1($customer_Marque1))) {
            throw new InvalidArgumentException($customer_Marque1ArrayErrorMessage, __LINE__);
        }
        $this->Customer_Marque1 = $customer_Marque1;
        
        return $this;
    }
    /**
     * Add item to Customer_Marque1 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Marque1(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Marque1 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Marque1[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Marque2 value
     * @return string[]
     */
    public function getCustomer_Marque2(): ?array
    {
        return $this->Customer_Marque2;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Marque2 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Marque2 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_Marque2ForArrayConstraintsFromSetCustomer_Marque2(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_Marque2Item) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_Marque2Item)) {
                $invalidValues[] = is_object($customerCustomer_Marque2Item) ? get_class($customerCustomer_Marque2Item) : sprintf('%s(%s)', gettype($customerCustomer_Marque2Item), var_export($customerCustomer_Marque2Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Marque2 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Marque2 value
     * @throws InvalidArgumentException
     * @param string[] $customer_Marque2
     * @return \StructType\Customer
     */
    public function setCustomer_Marque2(?array $customer_Marque2 = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_Marque2ArrayErrorMessage = self::validateCustomer_Marque2ForArrayConstraintsFromSetCustomer_Marque2($customer_Marque2))) {
            throw new InvalidArgumentException($customer_Marque2ArrayErrorMessage, __LINE__);
        }
        $this->Customer_Marque2 = $customer_Marque2;
        
        return $this;
    }
    /**
     * Add item to Customer_Marque2 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Marque2(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Marque2 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Marque2[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Adress value
     * @return string[]
     */
    public function getCustomer_Adress(): ?array
    {
        return $this->Customer_Adress;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Adress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Adress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_AdressForArrayConstraintsFromSetCustomer_Adress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_AdressItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_AdressItem)) {
                $invalidValues[] = is_object($customerCustomer_AdressItem) ? get_class($customerCustomer_AdressItem) : sprintf('%s(%s)', gettype($customerCustomer_AdressItem), var_export($customerCustomer_AdressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Adress property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Adress value
     * @throws InvalidArgumentException
     * @param string[] $customer_Adress
     * @return \StructType\Customer
     */
    public function setCustomer_Adress(?array $customer_Adress = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_AdressArrayErrorMessage = self::validateCustomer_AdressForArrayConstraintsFromSetCustomer_Adress($customer_Adress))) {
            throw new InvalidArgumentException($customer_AdressArrayErrorMessage, __LINE__);
        }
        $this->Customer_Adress = $customer_Adress;
        
        return $this;
    }
    /**
     * Add item to Customer_Adress value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Adress(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Adress property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Adress[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Adres2 value
     * @return string[]
     */
    public function getCustomer_Adres2(): ?array
    {
        return $this->Customer_Adres2;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Adres2 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Adres2 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_Adres2ForArrayConstraintsFromSetCustomer_Adres2(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_Adres2Item) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_Adres2Item)) {
                $invalidValues[] = is_object($customerCustomer_Adres2Item) ? get_class($customerCustomer_Adres2Item) : sprintf('%s(%s)', gettype($customerCustomer_Adres2Item), var_export($customerCustomer_Adres2Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Adres2 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Adres2 value
     * @throws InvalidArgumentException
     * @param string[] $customer_Adres2
     * @return \StructType\Customer
     */
    public function setCustomer_Adres2(?array $customer_Adres2 = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_Adres2ArrayErrorMessage = self::validateCustomer_Adres2ForArrayConstraintsFromSetCustomer_Adres2($customer_Adres2))) {
            throw new InvalidArgumentException($customer_Adres2ArrayErrorMessage, __LINE__);
        }
        $this->Customer_Adres2 = $customer_Adres2;
        
        return $this;
    }
    /**
     * Add item to Customer_Adres2 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Adres2(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Adres2 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Adres2[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_City value
     * @return string[]
     */
    public function getCustomer_City(): ?array
    {
        return $this->Customer_City;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_City method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_City method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_CityForArrayConstraintsFromSetCustomer_City(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_CityItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_CityItem)) {
                $invalidValues[] = is_object($customerCustomer_CityItem) ? get_class($customerCustomer_CityItem) : sprintf('%s(%s)', gettype($customerCustomer_CityItem), var_export($customerCustomer_CityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_City property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_City value
     * @throws InvalidArgumentException
     * @param string[] $customer_City
     * @return \StructType\Customer
     */
    public function setCustomer_City(?array $customer_City = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_CityArrayErrorMessage = self::validateCustomer_CityForArrayConstraintsFromSetCustomer_City($customer_City))) {
            throw new InvalidArgumentException($customer_CityArrayErrorMessage, __LINE__);
        }
        $this->Customer_City = $customer_City;
        
        return $this;
    }
    /**
     * Add item to Customer_City value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_City(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_City property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_City[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_PostCode value
     * @return string[]
     */
    public function getCustomer_PostCode(): ?array
    {
        return $this->Customer_PostCode;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_PostCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_PostCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_PostCodeForArrayConstraintsFromSetCustomer_PostCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_PostCodeItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_PostCodeItem)) {
                $invalidValues[] = is_object($customerCustomer_PostCodeItem) ? get_class($customerCustomer_PostCodeItem) : sprintf('%s(%s)', gettype($customerCustomer_PostCodeItem), var_export($customerCustomer_PostCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_PostCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_PostCode value
     * @throws InvalidArgumentException
     * @param string[] $customer_PostCode
     * @return \StructType\Customer
     */
    public function setCustomer_PostCode(?array $customer_PostCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_PostCodeArrayErrorMessage = self::validateCustomer_PostCodeForArrayConstraintsFromSetCustomer_PostCode($customer_PostCode))) {
            throw new InvalidArgumentException($customer_PostCodeArrayErrorMessage, __LINE__);
        }
        $this->Customer_PostCode = $customer_PostCode;
        
        return $this;
    }
    /**
     * Add item to Customer_PostCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_PostCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_PostCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_PostCode[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_County value
     * @return string[]
     */
    public function getCustomer_County(): ?array
    {
        return $this->Customer_County;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_County method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_County method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_CountyForArrayConstraintsFromSetCustomer_County(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_CountyItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_CountyItem)) {
                $invalidValues[] = is_object($customerCustomer_CountyItem) ? get_class($customerCustomer_CountyItem) : sprintf('%s(%s)', gettype($customerCustomer_CountyItem), var_export($customerCustomer_CountyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_County property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_County value
     * @throws InvalidArgumentException
     * @param string[] $customer_County
     * @return \StructType\Customer
     */
    public function setCustomer_County(?array $customer_County = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_CountyArrayErrorMessage = self::validateCustomer_CountyForArrayConstraintsFromSetCustomer_County($customer_County))) {
            throw new InvalidArgumentException($customer_CountyArrayErrorMessage, __LINE__);
        }
        $this->Customer_County = $customer_County;
        
        return $this;
    }
    /**
     * Add item to Customer_County value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_County(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_County property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_County[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_CountryRegionCode value
     * @return string[]
     */
    public function getCustomer_CountryRegionCode(): ?array
    {
        return $this->Customer_CountryRegionCode;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_CountryRegionCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_CountryRegionCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_CountryRegionCodeForArrayConstraintsFromSetCustomer_CountryRegionCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_CountryRegionCodeItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_CountryRegionCodeItem)) {
                $invalidValues[] = is_object($customerCustomer_CountryRegionCodeItem) ? get_class($customerCustomer_CountryRegionCodeItem) : sprintf('%s(%s)', gettype($customerCustomer_CountryRegionCodeItem), var_export($customerCustomer_CountryRegionCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_CountryRegionCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_CountryRegionCode value
     * @throws InvalidArgumentException
     * @param string[] $customer_CountryRegionCode
     * @return \StructType\Customer
     */
    public function setCustomer_CountryRegionCode(?array $customer_CountryRegionCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_CountryRegionCodeArrayErrorMessage = self::validateCustomer_CountryRegionCodeForArrayConstraintsFromSetCustomer_CountryRegionCode($customer_CountryRegionCode))) {
            throw new InvalidArgumentException($customer_CountryRegionCodeArrayErrorMessage, __LINE__);
        }
        $this->Customer_CountryRegionCode = $customer_CountryRegionCode;
        
        return $this;
    }
    /**
     * Add item to Customer_CountryRegionCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_CountryRegionCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_CountryRegionCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_CountryRegionCode[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_CurrencyCode value
     * @return string[]
     */
    public function getCustomer_CurrencyCode(): ?array
    {
        return $this->Customer_CurrencyCode;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_CurrencyCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_CurrencyCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_CurrencyCodeForArrayConstraintsFromSetCustomer_CurrencyCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_CurrencyCodeItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_CurrencyCodeItem)) {
                $invalidValues[] = is_object($customerCustomer_CurrencyCodeItem) ? get_class($customerCustomer_CurrencyCodeItem) : sprintf('%s(%s)', gettype($customerCustomer_CurrencyCodeItem), var_export($customerCustomer_CurrencyCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_CurrencyCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_CurrencyCode value
     * @throws InvalidArgumentException
     * @param string[] $customer_CurrencyCode
     * @return \StructType\Customer
     */
    public function setCustomer_CurrencyCode(?array $customer_CurrencyCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_CurrencyCodeArrayErrorMessage = self::validateCustomer_CurrencyCodeForArrayConstraintsFromSetCustomer_CurrencyCode($customer_CurrencyCode))) {
            throw new InvalidArgumentException($customer_CurrencyCodeArrayErrorMessage, __LINE__);
        }
        $this->Customer_CurrencyCode = $customer_CurrencyCode;
        
        return $this;
    }
    /**
     * Add item to Customer_CurrencyCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_CurrencyCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_CurrencyCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_CurrencyCode[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_CreditLimit value
     * @return string[]
     */
    public function getCustomer_CreditLimit(): ?array
    {
        return $this->Customer_CreditLimit;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_CreditLimit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_CreditLimit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_CreditLimitForArrayConstraintsFromSetCustomer_CreditLimit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_CreditLimitItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_CreditLimitItem)) {
                $invalidValues[] = is_object($customerCustomer_CreditLimitItem) ? get_class($customerCustomer_CreditLimitItem) : sprintf('%s(%s)', gettype($customerCustomer_CreditLimitItem), var_export($customerCustomer_CreditLimitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_CreditLimit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_CreditLimit value
     * @throws InvalidArgumentException
     * @param string[] $customer_CreditLimit
     * @return \StructType\Customer
     */
    public function setCustomer_CreditLimit(?array $customer_CreditLimit = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_CreditLimitArrayErrorMessage = self::validateCustomer_CreditLimitForArrayConstraintsFromSetCustomer_CreditLimit($customer_CreditLimit))) {
            throw new InvalidArgumentException($customer_CreditLimitArrayErrorMessage, __LINE__);
        }
        $this->Customer_CreditLimit = $customer_CreditLimit;
        
        return $this;
    }
    /**
     * Add item to Customer_CreditLimit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_CreditLimit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_CreditLimit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_CreditLimit[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Blocked value
     * @return string[]
     */
    public function getCustomer_Blocked(): ?array
    {
        return $this->Customer_Blocked;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Blocked method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Blocked method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_BlockedForArrayConstraintsFromSetCustomer_Blocked(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_BlockedItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_BlockedItem)) {
                $invalidValues[] = is_object($customerCustomer_BlockedItem) ? get_class($customerCustomer_BlockedItem) : sprintf('%s(%s)', gettype($customerCustomer_BlockedItem), var_export($customerCustomer_BlockedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Blocked property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Blocked value
     * @throws InvalidArgumentException
     * @param string[] $customer_Blocked
     * @return \StructType\Customer
     */
    public function setCustomer_Blocked(?array $customer_Blocked = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_BlockedArrayErrorMessage = self::validateCustomer_BlockedForArrayConstraintsFromSetCustomer_Blocked($customer_Blocked))) {
            throw new InvalidArgumentException($customer_BlockedArrayErrorMessage, __LINE__);
        }
        $this->Customer_Blocked = $customer_Blocked;
        
        return $this;
    }
    /**
     * Add item to Customer_Blocked value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Blocked(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Blocked property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Blocked[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_PaymentMethodCode value
     * @return string[]
     */
    public function getCustomer_PaymentMethodCode(): ?array
    {
        return $this->Customer_PaymentMethodCode;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_PaymentMethodCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_PaymentMethodCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_PaymentMethodCodeForArrayConstraintsFromSetCustomer_PaymentMethodCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_PaymentMethodCodeItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_PaymentMethodCodeItem)) {
                $invalidValues[] = is_object($customerCustomer_PaymentMethodCodeItem) ? get_class($customerCustomer_PaymentMethodCodeItem) : sprintf('%s(%s)', gettype($customerCustomer_PaymentMethodCodeItem), var_export($customerCustomer_PaymentMethodCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_PaymentMethodCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_PaymentMethodCode value
     * @throws InvalidArgumentException
     * @param string[] $customer_PaymentMethodCode
     * @return \StructType\Customer
     */
    public function setCustomer_PaymentMethodCode(?array $customer_PaymentMethodCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_PaymentMethodCodeArrayErrorMessage = self::validateCustomer_PaymentMethodCodeForArrayConstraintsFromSetCustomer_PaymentMethodCode($customer_PaymentMethodCode))) {
            throw new InvalidArgumentException($customer_PaymentMethodCodeArrayErrorMessage, __LINE__);
        }
        $this->Customer_PaymentMethodCode = $customer_PaymentMethodCode;
        
        return $this;
    }
    /**
     * Add item to Customer_PaymentMethodCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_PaymentMethodCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_PaymentMethodCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_PaymentMethodCode[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_CustDiscGroup value
     * @return string[]
     */
    public function getCustomer_CustDiscGroup(): ?array
    {
        return $this->Customer_CustDiscGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_CustDiscGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_CustDiscGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_CustDiscGroupForArrayConstraintsFromSetCustomer_CustDiscGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_CustDiscGroupItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_CustDiscGroupItem)) {
                $invalidValues[] = is_object($customerCustomer_CustDiscGroupItem) ? get_class($customerCustomer_CustDiscGroupItem) : sprintf('%s(%s)', gettype($customerCustomer_CustDiscGroupItem), var_export($customerCustomer_CustDiscGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_CustDiscGroup property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_CustDiscGroup value
     * @throws InvalidArgumentException
     * @param string[] $customer_CustDiscGroup
     * @return \StructType\Customer
     */
    public function setCustomer_CustDiscGroup(?array $customer_CustDiscGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_CustDiscGroupArrayErrorMessage = self::validateCustomer_CustDiscGroupForArrayConstraintsFromSetCustomer_CustDiscGroup($customer_CustDiscGroup))) {
            throw new InvalidArgumentException($customer_CustDiscGroupArrayErrorMessage, __LINE__);
        }
        $this->Customer_CustDiscGroup = $customer_CustDiscGroup;
        
        return $this;
    }
    /**
     * Add item to Customer_CustDiscGroup value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_CustDiscGroup(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_CustDiscGroup property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_CustDiscGroup[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_SalespersonCode value
     * @return string[]
     */
    public function getCustomer_SalespersonCode(): ?array
    {
        return $this->Customer_SalespersonCode;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_SalespersonCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_SalespersonCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_SalespersonCodeForArrayConstraintsFromSetCustomer_SalespersonCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_SalespersonCodeItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_SalespersonCodeItem)) {
                $invalidValues[] = is_object($customerCustomer_SalespersonCodeItem) ? get_class($customerCustomer_SalespersonCodeItem) : sprintf('%s(%s)', gettype($customerCustomer_SalespersonCodeItem), var_export($customerCustomer_SalespersonCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_SalespersonCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_SalespersonCode value
     * @throws InvalidArgumentException
     * @param string[] $customer_SalespersonCode
     * @return \StructType\Customer
     */
    public function setCustomer_SalespersonCode(?array $customer_SalespersonCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_SalespersonCodeArrayErrorMessage = self::validateCustomer_SalespersonCodeForArrayConstraintsFromSetCustomer_SalespersonCode($customer_SalespersonCode))) {
            throw new InvalidArgumentException($customer_SalespersonCodeArrayErrorMessage, __LINE__);
        }
        $this->Customer_SalespersonCode = $customer_SalespersonCode;
        
        return $this;
    }
    /**
     * Add item to Customer_SalespersonCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_SalespersonCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_SalespersonCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_SalespersonCode[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_SalespersonNom value
     * @return string|null
     */
    public function getCustomer_SalespersonNom(): ?string
    {
        return $this->Customer_SalespersonNom;
    }
    /**
     * Set Customer_SalespersonNom value
     * @param string $customer_SalespersonNom
     * @return \StructType\Customer
     */
    public function setCustomer_SalespersonNom(?string $customer_SalespersonNom = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_SalespersonNom) && !is_string($customer_SalespersonNom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_SalespersonNom, true), gettype($customer_SalespersonNom)), __LINE__);
        }
        $this->Customer_SalespersonNom = $customer_SalespersonNom;
        
        return $this;
    }
    /**
     * Get Customer_NumSIREN value
     * @return string[]
     */
    public function getCustomer_NumSIREN(): ?array
    {
        return $this->Customer_NumSIREN;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_NumSIREN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_NumSIREN method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_NumSIRENForArrayConstraintsFromSetCustomer_NumSIREN(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_NumSIRENItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_NumSIRENItem)) {
                $invalidValues[] = is_object($customerCustomer_NumSIRENItem) ? get_class($customerCustomer_NumSIRENItem) : sprintf('%s(%s)', gettype($customerCustomer_NumSIRENItem), var_export($customerCustomer_NumSIRENItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_NumSIREN property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_NumSIREN value
     * @throws InvalidArgumentException
     * @param string[] $customer_NumSIREN
     * @return \StructType\Customer
     */
    public function setCustomer_NumSIREN(?array $customer_NumSIREN = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_NumSIRENArrayErrorMessage = self::validateCustomer_NumSIRENForArrayConstraintsFromSetCustomer_NumSIREN($customer_NumSIREN))) {
            throw new InvalidArgumentException($customer_NumSIRENArrayErrorMessage, __LINE__);
        }
        $this->Customer_NumSIREN = $customer_NumSIREN;
        
        return $this;
    }
    /**
     * Add item to Customer_NumSIREN value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_NumSIREN(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_NumSIREN property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_NumSIREN[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_ComplementSIREN value
     * @return string[]
     */
    public function getCustomer_ComplementSIREN(): ?array
    {
        return $this->Customer_ComplementSIREN;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_ComplementSIREN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_ComplementSIREN method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_ComplementSIRENForArrayConstraintsFromSetCustomer_ComplementSIREN(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_ComplementSIRENItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_ComplementSIRENItem)) {
                $invalidValues[] = is_object($customerCustomer_ComplementSIRENItem) ? get_class($customerCustomer_ComplementSIRENItem) : sprintf('%s(%s)', gettype($customerCustomer_ComplementSIRENItem), var_export($customerCustomer_ComplementSIRENItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_ComplementSIREN property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_ComplementSIREN value
     * @throws InvalidArgumentException
     * @param string[] $customer_ComplementSIREN
     * @return \StructType\Customer
     */
    public function setCustomer_ComplementSIREN(?array $customer_ComplementSIREN = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_ComplementSIRENArrayErrorMessage = self::validateCustomer_ComplementSIRENForArrayConstraintsFromSetCustomer_ComplementSIREN($customer_ComplementSIREN))) {
            throw new InvalidArgumentException($customer_ComplementSIRENArrayErrorMessage, __LINE__);
        }
        $this->Customer_ComplementSIREN = $customer_ComplementSIREN;
        
        return $this;
    }
    /**
     * Add item to Customer_ComplementSIREN value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_ComplementSIREN(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_ComplementSIREN property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_ComplementSIREN[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Email value
     * @return string[]
     */
    public function getCustomer_Email(): ?array
    {
        return $this->Customer_Email;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Email method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Email method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_EmailForArrayConstraintsFromSetCustomer_Email(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_EmailItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_EmailItem)) {
                $invalidValues[] = is_object($customerCustomer_EmailItem) ? get_class($customerCustomer_EmailItem) : sprintf('%s(%s)', gettype($customerCustomer_EmailItem), var_export($customerCustomer_EmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Email property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Email value
     * @throws InvalidArgumentException
     * @param string[] $customer_Email
     * @return \StructType\Customer
     */
    public function setCustomer_Email(?array $customer_Email = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_EmailArrayErrorMessage = self::validateCustomer_EmailForArrayConstraintsFromSetCustomer_Email($customer_Email))) {
            throw new InvalidArgumentException($customer_EmailArrayErrorMessage, __LINE__);
        }
        $this->Customer_Email = $customer_Email;
        
        return $this;
    }
    /**
     * Add item to Customer_Email value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Email(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Email property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Email[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Phone value
     * @return string[]
     */
    public function getCustomer_Phone(): ?array
    {
        return $this->Customer_Phone;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Phone method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Phone method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_PhoneForArrayConstraintsFromSetCustomer_Phone(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_PhoneItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_PhoneItem)) {
                $invalidValues[] = is_object($customerCustomer_PhoneItem) ? get_class($customerCustomer_PhoneItem) : sprintf('%s(%s)', gettype($customerCustomer_PhoneItem), var_export($customerCustomer_PhoneItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Phone property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Phone value
     * @throws InvalidArgumentException
     * @param string[] $customer_Phone
     * @return \StructType\Customer
     */
    public function setCustomer_Phone(?array $customer_Phone = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_PhoneArrayErrorMessage = self::validateCustomer_PhoneForArrayConstraintsFromSetCustomer_Phone($customer_Phone))) {
            throw new InvalidArgumentException($customer_PhoneArrayErrorMessage, __LINE__);
        }
        $this->Customer_Phone = $customer_Phone;
        
        return $this;
    }
    /**
     * Add item to Customer_Phone value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Phone(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Phone property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Phone[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Portable value
     * @return string[]
     */
    public function getCustomer_Portable(): ?array
    {
        return $this->Customer_Portable;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Portable method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Portable method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_PortableForArrayConstraintsFromSetCustomer_Portable(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_PortableItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_PortableItem)) {
                $invalidValues[] = is_object($customerCustomer_PortableItem) ? get_class($customerCustomer_PortableItem) : sprintf('%s(%s)', gettype($customerCustomer_PortableItem), var_export($customerCustomer_PortableItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Portable property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Portable value
     * @throws InvalidArgumentException
     * @param string[] $customer_Portable
     * @return \StructType\Customer
     */
    public function setCustomer_Portable(?array $customer_Portable = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_PortableArrayErrorMessage = self::validateCustomer_PortableForArrayConstraintsFromSetCustomer_Portable($customer_Portable))) {
            throw new InvalidArgumentException($customer_PortableArrayErrorMessage, __LINE__);
        }
        $this->Customer_Portable = $customer_Portable;
        
        return $this;
    }
    /**
     * Add item to Customer_Portable value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Portable(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Portable property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Portable[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_Telex value
     * @return string[]
     */
    public function getCustomer_Telex(): ?array
    {
        return $this->Customer_Telex;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_Telex method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_Telex method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_TelexForArrayConstraintsFromSetCustomer_Telex(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_TelexItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_TelexItem)) {
                $invalidValues[] = is_object($customerCustomer_TelexItem) ? get_class($customerCustomer_TelexItem) : sprintf('%s(%s)', gettype($customerCustomer_TelexItem), var_export($customerCustomer_TelexItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_Telex property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_Telex value
     * @throws InvalidArgumentException
     * @param string[] $customer_Telex
     * @return \StructType\Customer
     */
    public function setCustomer_Telex(?array $customer_Telex = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_TelexArrayErrorMessage = self::validateCustomer_TelexForArrayConstraintsFromSetCustomer_Telex($customer_Telex))) {
            throw new InvalidArgumentException($customer_TelexArrayErrorMessage, __LINE__);
        }
        $this->Customer_Telex = $customer_Telex;
        
        return $this;
    }
    /**
     * Add item to Customer_Telex value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_Telex(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_Telex property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_Telex[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_HomePage value
     * @return string[]
     */
    public function getCustomer_HomePage(): ?array
    {
        return $this->Customer_HomePage;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_HomePage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_HomePage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_HomePageForArrayConstraintsFromSetCustomer_HomePage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_HomePageItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_HomePageItem)) {
                $invalidValues[] = is_object($customerCustomer_HomePageItem) ? get_class($customerCustomer_HomePageItem) : sprintf('%s(%s)', gettype($customerCustomer_HomePageItem), var_export($customerCustomer_HomePageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_HomePage property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_HomePage value
     * @throws InvalidArgumentException
     * @param string[] $customer_HomePage
     * @return \StructType\Customer
     */
    public function setCustomer_HomePage(?array $customer_HomePage = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_HomePageArrayErrorMessage = self::validateCustomer_HomePageForArrayConstraintsFromSetCustomer_HomePage($customer_HomePage))) {
            throw new InvalidArgumentException($customer_HomePageArrayErrorMessage, __LINE__);
        }
        $this->Customer_HomePage = $customer_HomePage;
        
        return $this;
    }
    /**
     * Add item to Customer_HomePage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_HomePage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_HomePage property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_HomePage[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_APE value
     * @return string[]
     */
    public function getCustomer_APE(): ?array
    {
        return $this->Customer_APE;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_APE method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_APE method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_APEForArrayConstraintsFromSetCustomer_APE(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_APEItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_APEItem)) {
                $invalidValues[] = is_object($customerCustomer_APEItem) ? get_class($customerCustomer_APEItem) : sprintf('%s(%s)', gettype($customerCustomer_APEItem), var_export($customerCustomer_APEItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_APE property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_APE value
     * @throws InvalidArgumentException
     * @param string[] $customer_APE
     * @return \StructType\Customer
     */
    public function setCustomer_APE(?array $customer_APE = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_APEArrayErrorMessage = self::validateCustomer_APEForArrayConstraintsFromSetCustomer_APE($customer_APE))) {
            throw new InvalidArgumentException($customer_APEArrayErrorMessage, __LINE__);
        }
        $this->Customer_APE = $customer_APE;
        
        return $this;
    }
    /**
     * Add item to Customer_APE value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_APE(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_APE property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_APE[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_ADG value
     * @return string[]
     */
    public function getCustomer_ADG(): ?array
    {
        return $this->Customer_ADG;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_ADG method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_ADG method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_ADGForArrayConstraintsFromSetCustomer_ADG(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_ADGItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_ADGItem)) {
                $invalidValues[] = is_object($customerCustomer_ADGItem) ? get_class($customerCustomer_ADGItem) : sprintf('%s(%s)', gettype($customerCustomer_ADGItem), var_export($customerCustomer_ADGItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_ADG property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_ADG value
     * @throws InvalidArgumentException
     * @param string[] $customer_ADG
     * @return \StructType\Customer
     */
    public function setCustomer_ADG(?array $customer_ADG = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_ADGArrayErrorMessage = self::validateCustomer_ADGForArrayConstraintsFromSetCustomer_ADG($customer_ADG))) {
            throw new InvalidArgumentException($customer_ADGArrayErrorMessage, __LINE__);
        }
        $this->Customer_ADG = $customer_ADG;
        
        return $this;
    }
    /**
     * Add item to Customer_ADG value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_ADG(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_ADG property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_ADG[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_CustPriceGroup value
     * @return string[]
     */
    public function getCustomer_CustPriceGroup(): ?array
    {
        return $this->Customer_CustPriceGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_CustPriceGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_CustPriceGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_CustPriceGroupForArrayConstraintsFromSetCustomer_CustPriceGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_CustPriceGroupItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_CustPriceGroupItem)) {
                $invalidValues[] = is_object($customerCustomer_CustPriceGroupItem) ? get_class($customerCustomer_CustPriceGroupItem) : sprintf('%s(%s)', gettype($customerCustomer_CustPriceGroupItem), var_export($customerCustomer_CustPriceGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_CustPriceGroup property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_CustPriceGroup value
     * @throws InvalidArgumentException
     * @param string[] $customer_CustPriceGroup
     * @return \StructType\Customer
     */
    public function setCustomer_CustPriceGroup(?array $customer_CustPriceGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_CustPriceGroupArrayErrorMessage = self::validateCustomer_CustPriceGroupForArrayConstraintsFromSetCustomer_CustPriceGroup($customer_CustPriceGroup))) {
            throw new InvalidArgumentException($customer_CustPriceGroupArrayErrorMessage, __LINE__);
        }
        $this->Customer_CustPriceGroup = $customer_CustPriceGroup;
        
        return $this;
    }
    /**
     * Add item to Customer_CustPriceGroup value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_CustPriceGroup(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_CustPriceGroup property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_CustPriceGroup[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_NumCVI value
     * @return string[]
     */
    public function getCustomer_NumCVI(): ?array
    {
        return $this->Customer_NumCVI;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_NumCVI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_NumCVI method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_NumCVIForArrayConstraintsFromSetCustomer_NumCVI(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_NumCVIItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_NumCVIItem)) {
                $invalidValues[] = is_object($customerCustomer_NumCVIItem) ? get_class($customerCustomer_NumCVIItem) : sprintf('%s(%s)', gettype($customerCustomer_NumCVIItem), var_export($customerCustomer_NumCVIItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_NumCVI property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_NumCVI value
     * @throws InvalidArgumentException
     * @param string[] $customer_NumCVI
     * @return \StructType\Customer
     */
    public function setCustomer_NumCVI(?array $customer_NumCVI = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_NumCVIArrayErrorMessage = self::validateCustomer_NumCVIForArrayConstraintsFromSetCustomer_NumCVI($customer_NumCVI))) {
            throw new InvalidArgumentException($customer_NumCVIArrayErrorMessage, __LINE__);
        }
        $this->Customer_NumCVI = $customer_NumCVI;
        
        return $this;
    }
    /**
     * Add item to Customer_NumCVI value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_NumCVI(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_NumCVI property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_NumCVI[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_NumTVA value
     * @return string[]
     */
    public function getCustomer_NumTVA(): ?array
    {
        return $this->Customer_NumTVA;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_NumTVA method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_NumTVA method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_NumTVAForArrayConstraintsFromSetCustomer_NumTVA(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_NumTVAItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_NumTVAItem)) {
                $invalidValues[] = is_object($customerCustomer_NumTVAItem) ? get_class($customerCustomer_NumTVAItem) : sprintf('%s(%s)', gettype($customerCustomer_NumTVAItem), var_export($customerCustomer_NumTVAItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_NumTVA property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_NumTVA value
     * @throws InvalidArgumentException
     * @param string[] $customer_NumTVA
     * @return \StructType\Customer
     */
    public function setCustomer_NumTVA(?array $customer_NumTVA = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_NumTVAArrayErrorMessage = self::validateCustomer_NumTVAForArrayConstraintsFromSetCustomer_NumTVA($customer_NumTVA))) {
            throw new InvalidArgumentException($customer_NumTVAArrayErrorMessage, __LINE__);
        }
        $this->Customer_NumTVA = $customer_NumTVA;
        
        return $this;
    }
    /**
     * Add item to Customer_NumTVA value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_NumTVA(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_NumTVA property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_NumTVA[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_NumAccise value
     * @return string[]
     */
    public function getCustomer_NumAccise(): ?array
    {
        return $this->Customer_NumAccise;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_NumAccise method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_NumAccise method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_NumAcciseForArrayConstraintsFromSetCustomer_NumAccise(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_NumAcciseItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_NumAcciseItem)) {
                $invalidValues[] = is_object($customerCustomer_NumAcciseItem) ? get_class($customerCustomer_NumAcciseItem) : sprintf('%s(%s)', gettype($customerCustomer_NumAcciseItem), var_export($customerCustomer_NumAcciseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_NumAccise property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_NumAccise value
     * @throws InvalidArgumentException
     * @param string[] $customer_NumAccise
     * @return \StructType\Customer
     */
    public function setCustomer_NumAccise(?array $customer_NumAccise = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_NumAcciseArrayErrorMessage = self::validateCustomer_NumAcciseForArrayConstraintsFromSetCustomer_NumAccise($customer_NumAccise))) {
            throw new InvalidArgumentException($customer_NumAcciseArrayErrorMessage, __LINE__);
        }
        $this->Customer_NumAccise = $customer_NumAccise;
        
        return $this;
    }
    /**
     * Add item to Customer_NumAccise value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_NumAccise(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_NumAccise property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_NumAccise[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_PaymentTermsCode value
     * @return string[]
     */
    public function getCustomer_PaymentTermsCode(): ?array
    {
        return $this->Customer_PaymentTermsCode;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_PaymentTermsCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_PaymentTermsCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_PaymentTermsCodeForArrayConstraintsFromSetCustomer_PaymentTermsCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_PaymentTermsCodeItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_PaymentTermsCodeItem)) {
                $invalidValues[] = is_object($customerCustomer_PaymentTermsCodeItem) ? get_class($customerCustomer_PaymentTermsCodeItem) : sprintf('%s(%s)', gettype($customerCustomer_PaymentTermsCodeItem), var_export($customerCustomer_PaymentTermsCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_PaymentTermsCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_PaymentTermsCode value
     * @throws InvalidArgumentException
     * @param string[] $customer_PaymentTermsCode
     * @return \StructType\Customer
     */
    public function setCustomer_PaymentTermsCode(?array $customer_PaymentTermsCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_PaymentTermsCodeArrayErrorMessage = self::validateCustomer_PaymentTermsCodeForArrayConstraintsFromSetCustomer_PaymentTermsCode($customer_PaymentTermsCode))) {
            throw new InvalidArgumentException($customer_PaymentTermsCodeArrayErrorMessage, __LINE__);
        }
        $this->Customer_PaymentTermsCode = $customer_PaymentTermsCode;
        
        return $this;
    }
    /**
     * Add item to Customer_PaymentTermsCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_PaymentTermsCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_PaymentTermsCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_PaymentTermsCode[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_EncoursDS value
     * @return string|null
     */
    public function getCustomer_EncoursDS(): ?string
    {
        return $this->Customer_EncoursDS;
    }
    /**
     * Set Customer_EncoursDS value
     * @param string $customer_EncoursDS
     * @return \StructType\Customer
     */
    public function setCustomer_EncoursDS(?string $customer_EncoursDS = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_EncoursDS) && !is_string($customer_EncoursDS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_EncoursDS, true), gettype($customer_EncoursDS)), __LINE__);
        }
        $this->Customer_EncoursDS = $customer_EncoursDS;
        
        return $this;
    }
    /**
     * Get Customer_EncoursDSHorsPrimeurs value
     * @return string|null
     */
    public function getCustomer_EncoursDSHorsPrimeurs(): ?string
    {
        return $this->Customer_EncoursDSHorsPrimeurs;
    }
    /**
     * Set Customer_EncoursDSHorsPrimeurs value
     * @param string $customer_EncoursDSHorsPrimeurs
     * @return \StructType\Customer
     */
    public function setCustomer_EncoursDSHorsPrimeurs(?string $customer_EncoursDSHorsPrimeurs = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_EncoursDSHorsPrimeurs) && !is_string($customer_EncoursDSHorsPrimeurs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_EncoursDSHorsPrimeurs, true), gettype($customer_EncoursDSHorsPrimeurs)), __LINE__);
        }
        $this->Customer_EncoursDSHorsPrimeurs = $customer_EncoursDSHorsPrimeurs;
        
        return $this;
    }
    /**
     * Get Customer_EncoursDSPrimeurs value
     * @return string|null
     */
    public function getCustomer_EncoursDSPrimeurs(): ?string
    {
        return $this->Customer_EncoursDSPrimeurs;
    }
    /**
     * Set Customer_EncoursDSPrimeurs value
     * @param string $customer_EncoursDSPrimeurs
     * @return \StructType\Customer
     */
    public function setCustomer_EncoursDSPrimeurs(?string $customer_EncoursDSPrimeurs = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_EncoursDSPrimeurs) && !is_string($customer_EncoursDSPrimeurs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_EncoursDSPrimeurs, true), gettype($customer_EncoursDSPrimeurs)), __LINE__);
        }
        $this->Customer_EncoursDSPrimeurs = $customer_EncoursDSPrimeurs;
        
        return $this;
    }
    /**
     * Get Customer_Internet value
     * @return string|null
     */
    public function getCustomer_Internet(): ?string
    {
        return $this->Customer_Internet;
    }
    /**
     * Set Customer_Internet value
     * @param string $customer_Internet
     * @return \StructType\Customer
     */
    public function setCustomer_Internet(?string $customer_Internet = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_Internet) && !is_string($customer_Internet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_Internet, true), gettype($customer_Internet)), __LINE__);
        }
        $this->Customer_Internet = $customer_Internet;
        
        return $this;
    }
    /**
     * Get Customer_Statut value
     * @return string|null
     */
    public function getCustomer_Statut(): ?string
    {
        return $this->Customer_Statut;
    }
    /**
     * Set Customer_Statut value
     * @param string $customer_Statut
     * @return \StructType\Customer
     */
    public function setCustomer_Statut(?string $customer_Statut = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_Statut) && !is_string($customer_Statut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_Statut, true), gettype($customer_Statut)), __LINE__);
        }
        $this->Customer_Statut = $customer_Statut;
        
        return $this;
    }
    /**
     * Get Customer_ClientReference value
     * @return string|null
     */
    public function getCustomer_ClientReference(): ?string
    {
        return $this->Customer_ClientReference;
    }
    /**
     * Set Customer_ClientReference value
     * @param string $customer_ClientReference
     * @return \StructType\Customer
     */
    public function setCustomer_ClientReference(?string $customer_ClientReference = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_ClientReference) && !is_string($customer_ClientReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_ClientReference, true), gettype($customer_ClientReference)), __LINE__);
        }
        $this->Customer_ClientReference = $customer_ClientReference;
        
        return $this;
    }
    /**
     * Get Customer_ZoneGeo value
     * @return string|null
     */
    public function getCustomer_ZoneGeo(): ?string
    {
        return $this->Customer_ZoneGeo;
    }
    /**
     * Set Customer_ZoneGeo value
     * @param string $customer_ZoneGeo
     * @return \StructType\Customer
     */
    public function setCustomer_ZoneGeo(?string $customer_ZoneGeo = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_ZoneGeo) && !is_string($customer_ZoneGeo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_ZoneGeo, true), gettype($customer_ZoneGeo)), __LINE__);
        }
        $this->Customer_ZoneGeo = $customer_ZoneGeo;
        
        return $this;
    }
    /**
     * Get Customer_ZoneGeoLibelle value
     * @return string|null
     */
    public function getCustomer_ZoneGeoLibelle(): ?string
    {
        return $this->Customer_ZoneGeoLibelle;
    }
    /**
     * Set Customer_ZoneGeoLibelle value
     * @param string $customer_ZoneGeoLibelle
     * @return \StructType\Customer
     */
    public function setCustomer_ZoneGeoLibelle(?string $customer_ZoneGeoLibelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_ZoneGeoLibelle) && !is_string($customer_ZoneGeoLibelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_ZoneGeoLibelle, true), gettype($customer_ZoneGeoLibelle)), __LINE__);
        }
        $this->Customer_ZoneGeoLibelle = $customer_ZoneGeoLibelle;
        
        return $this;
    }
    /**
     * Get Customer_Activite value
     * @return string|null
     */
    public function getCustomer_Activite(): ?string
    {
        return $this->Customer_Activite;
    }
    /**
     * Set Customer_Activite value
     * @param string $customer_Activite
     * @return \StructType\Customer
     */
    public function setCustomer_Activite(?string $customer_Activite = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_Activite) && !is_string($customer_Activite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_Activite, true), gettype($customer_Activite)), __LINE__);
        }
        $this->Customer_Activite = $customer_Activite;
        
        return $this;
    }
    /**
     * Get Customer_ActiviteLibelle value
     * @return string|null
     */
    public function getCustomer_ActiviteLibelle(): ?string
    {
        return $this->Customer_ActiviteLibelle;
    }
    /**
     * Set Customer_ActiviteLibelle value
     * @param string $customer_ActiviteLibelle
     * @return \StructType\Customer
     */
    public function setCustomer_ActiviteLibelle(?string $customer_ActiviteLibelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_ActiviteLibelle) && !is_string($customer_ActiviteLibelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_ActiviteLibelle, true), gettype($customer_ActiviteLibelle)), __LINE__);
        }
        $this->Customer_ActiviteLibelle = $customer_ActiviteLibelle;
        
        return $this;
    }
    /**
     * Get Customer_Taille value
     * @return string|null
     */
    public function getCustomer_Taille(): ?string
    {
        return $this->Customer_Taille;
    }
    /**
     * Set Customer_Taille value
     * @param string $customer_Taille
     * @return \StructType\Customer
     */
    public function setCustomer_Taille(?string $customer_Taille = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_Taille) && !is_string($customer_Taille)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_Taille, true), gettype($customer_Taille)), __LINE__);
        }
        $this->Customer_Taille = $customer_Taille;
        
        return $this;
    }
    /**
     * Get Customer_TailleLibelle value
     * @return string|null
     */
    public function getCustomer_TailleLibelle(): ?string
    {
        return $this->Customer_TailleLibelle;
    }
    /**
     * Set Customer_TailleLibelle value
     * @param string $customer_TailleLibelle
     * @return \StructType\Customer
     */
    public function setCustomer_TailleLibelle(?string $customer_TailleLibelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_TailleLibelle) && !is_string($customer_TailleLibelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_TailleLibelle, true), gettype($customer_TailleLibelle)), __LINE__);
        }
        $this->Customer_TailleLibelle = $customer_TailleLibelle;
        
        return $this;
    }
    /**
     * Get Customer_Origine value
     * @return string|null
     */
    public function getCustomer_Origine(): ?string
    {
        return $this->Customer_Origine;
    }
    /**
     * Set Customer_Origine value
     * @param string $customer_Origine
     * @return \StructType\Customer
     */
    public function setCustomer_Origine(?string $customer_Origine = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_Origine) && !is_string($customer_Origine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_Origine, true), gettype($customer_Origine)), __LINE__);
        }
        $this->Customer_Origine = $customer_Origine;
        
        return $this;
    }
    /**
     * Get Customer_OrigineLibelle value
     * @return string|null
     */
    public function getCustomer_OrigineLibelle(): ?string
    {
        return $this->Customer_OrigineLibelle;
    }
    /**
     * Set Customer_OrigineLibelle value
     * @param string $customer_OrigineLibelle
     * @return \StructType\Customer
     */
    public function setCustomer_OrigineLibelle(?string $customer_OrigineLibelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_OrigineLibelle) && !is_string($customer_OrigineLibelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_OrigineLibelle, true), gettype($customer_OrigineLibelle)), __LINE__);
        }
        $this->Customer_OrigineLibelle = $customer_OrigineLibelle;
        
        return $this;
    }
    /**
     * Get Customer_HierarchieStat value
     * @return string|null
     */
    public function getCustomer_HierarchieStat(): ?string
    {
        return $this->Customer_HierarchieStat;
    }
    /**
     * Set Customer_HierarchieStat value
     * @param string $customer_HierarchieStat
     * @return \StructType\Customer
     */
    public function setCustomer_HierarchieStat(?string $customer_HierarchieStat = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_HierarchieStat) && !is_string($customer_HierarchieStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_HierarchieStat, true), gettype($customer_HierarchieStat)), __LINE__);
        }
        $this->Customer_HierarchieStat = $customer_HierarchieStat;
        
        return $this;
    }
    /**
     * Get Customer_HierarchieStatLibelle value
     * @return string[]
     */
    public function getCustomer_HierarchieStatLibelle(): ?array
    {
        return $this->Customer_HierarchieStatLibelle;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_HierarchieStatLibelle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_HierarchieStatLibelle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_HierarchieStatLibelleForArrayConstraintsFromSetCustomer_HierarchieStatLibelle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_HierarchieStatLibelleItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_HierarchieStatLibelleItem)) {
                $invalidValues[] = is_object($customerCustomer_HierarchieStatLibelleItem) ? get_class($customerCustomer_HierarchieStatLibelleItem) : sprintf('%s(%s)', gettype($customerCustomer_HierarchieStatLibelleItem), var_export($customerCustomer_HierarchieStatLibelleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_HierarchieStatLibelle property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_HierarchieStatLibelle value
     * @throws InvalidArgumentException
     * @param string[] $customer_HierarchieStatLibelle
     * @return \StructType\Customer
     */
    public function setCustomer_HierarchieStatLibelle(?array $customer_HierarchieStatLibelle = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_HierarchieStatLibelleArrayErrorMessage = self::validateCustomer_HierarchieStatLibelleForArrayConstraintsFromSetCustomer_HierarchieStatLibelle($customer_HierarchieStatLibelle))) {
            throw new InvalidArgumentException($customer_HierarchieStatLibelleArrayErrorMessage, __LINE__);
        }
        $this->Customer_HierarchieStatLibelle = $customer_HierarchieStatLibelle;
        
        return $this;
    }
    /**
     * Add item to Customer_HierarchieStatLibelle value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_HierarchieStatLibelle(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_HierarchieStatLibelle property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_HierarchieStatLibelle[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_FamilleBudget value
     * @return string|null
     */
    public function getCustomer_FamilleBudget(): ?string
    {
        return $this->Customer_FamilleBudget;
    }
    /**
     * Set Customer_FamilleBudget value
     * @param string $customer_FamilleBudget
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleBudget(?string $customer_FamilleBudget = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleBudget) && !is_string($customer_FamilleBudget)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleBudget, true), gettype($customer_FamilleBudget)), __LINE__);
        }
        $this->Customer_FamilleBudget = $customer_FamilleBudget;
        
        return $this;
    }
    /**
     * Get Customer_FamilleBudgetLibelle value
     * @return string|null
     */
    public function getCustomer_FamilleBudgetLibelle(): ?string
    {
        return $this->Customer_FamilleBudgetLibelle;
    }
    /**
     * Set Customer_FamilleBudgetLibelle value
     * @param string $customer_FamilleBudgetLibelle
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleBudgetLibelle(?string $customer_FamilleBudgetLibelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleBudgetLibelle) && !is_string($customer_FamilleBudgetLibelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleBudgetLibelle, true), gettype($customer_FamilleBudgetLibelle)), __LINE__);
        }
        $this->Customer_FamilleBudgetLibelle = $customer_FamilleBudgetLibelle;
        
        return $this;
    }
    /**
     * Get Customer_SoldeDu value
     * @return string|null
     */
    public function getCustomer_SoldeDu(): ?string
    {
        return $this->Customer_SoldeDu;
    }
    /**
     * Set Customer_SoldeDu value
     * @param string $customer_SoldeDu
     * @return \StructType\Customer
     */
    public function setCustomer_SoldeDu(?string $customer_SoldeDu = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_SoldeDu) && !is_string($customer_SoldeDu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_SoldeDu, true), gettype($customer_SoldeDu)), __LINE__);
        }
        $this->Customer_SoldeDu = $customer_SoldeDu;
        
        return $this;
    }
    /**
     * Get Customer_LimitCredit value
     * @return string[]
     */
    public function getCustomer_LimitCredit(): ?array
    {
        return $this->Customer_LimitCredit;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_LimitCredit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_LimitCredit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_LimitCreditForArrayConstraintsFromSetCustomer_LimitCredit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_LimitCreditItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_LimitCreditItem)) {
                $invalidValues[] = is_object($customerCustomer_LimitCreditItem) ? get_class($customerCustomer_LimitCreditItem) : sprintf('%s(%s)', gettype($customerCustomer_LimitCreditItem), var_export($customerCustomer_LimitCreditItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_LimitCredit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_LimitCredit value
     * @throws InvalidArgumentException
     * @param string[] $customer_LimitCredit
     * @return \StructType\Customer
     */
    public function setCustomer_LimitCredit(?array $customer_LimitCredit = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_LimitCreditArrayErrorMessage = self::validateCustomer_LimitCreditForArrayConstraintsFromSetCustomer_LimitCredit($customer_LimitCredit))) {
            throw new InvalidArgumentException($customer_LimitCreditArrayErrorMessage, __LINE__);
        }
        $this->Customer_LimitCredit = $customer_LimitCredit;
        
        return $this;
    }
    /**
     * Add item to Customer_LimitCredit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_LimitCredit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_LimitCredit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_LimitCredit[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_EquipeAgent value
     * @return string[]
     */
    public function getCustomer_EquipeAgent(): ?array
    {
        return $this->Customer_EquipeAgent;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer_EquipeAgent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer_EquipeAgent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomer_EquipeAgentForArrayConstraintsFromSetCustomer_EquipeAgent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCustomer_EquipeAgentItem) {
            // validation for constraint: itemType
            if (!is_string($customerCustomer_EquipeAgentItem)) {
                $invalidValues[] = is_object($customerCustomer_EquipeAgentItem) ? get_class($customerCustomer_EquipeAgentItem) : sprintf('%s(%s)', gettype($customerCustomer_EquipeAgentItem), var_export($customerCustomer_EquipeAgentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer_EquipeAgent property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer_EquipeAgent value
     * @throws InvalidArgumentException
     * @param string[] $customer_EquipeAgent
     * @return \StructType\Customer
     */
    public function setCustomer_EquipeAgent(?array $customer_EquipeAgent = null): self
    {
        // validation for constraint: array
        if ('' !== ($customer_EquipeAgentArrayErrorMessage = self::validateCustomer_EquipeAgentForArrayConstraintsFromSetCustomer_EquipeAgent($customer_EquipeAgent))) {
            throw new InvalidArgumentException($customer_EquipeAgentArrayErrorMessage, __LINE__);
        }
        $this->Customer_EquipeAgent = $customer_EquipeAgent;
        
        return $this;
    }
    /**
     * Add item to Customer_EquipeAgent value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Customer
     */
    public function addToCustomer_EquipeAgent(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Customer_EquipeAgent property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer_EquipeAgent[] = $item;
        
        return $this;
    }
    /**
     * Get Customer_EquipeAgentNom value
     * @return string|null
     */
    public function getCustomer_EquipeAgentNom(): ?string
    {
        return $this->Customer_EquipeAgentNom;
    }
    /**
     * Set Customer_EquipeAgentNom value
     * @param string $customer_EquipeAgentNom
     * @return \StructType\Customer
     */
    public function setCustomer_EquipeAgentNom(?string $customer_EquipeAgentNom = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_EquipeAgentNom) && !is_string($customer_EquipeAgentNom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_EquipeAgentNom, true), gettype($customer_EquipeAgentNom)), __LINE__);
        }
        $this->Customer_EquipeAgentNom = $customer_EquipeAgentNom;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat1 value
     * @return string|null
     */
    public function getCustomer_FamilleStat1(): ?string
    {
        return $this->Customer_FamilleStat1;
    }
    /**
     * Set Customer_FamilleStat1 value
     * @param string $customer_FamilleStat1
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat1(?string $customer_FamilleStat1 = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat1) && !is_string($customer_FamilleStat1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat1, true), gettype($customer_FamilleStat1)), __LINE__);
        }
        $this->Customer_FamilleStat1 = $customer_FamilleStat1;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat1Libelle value
     * @return string|null
     */
    public function getCustomer_FamilleStat1Libelle(): ?string
    {
        return $this->Customer_FamilleStat1Libelle;
    }
    /**
     * Set Customer_FamilleStat1Libelle value
     * @param string $customer_FamilleStat1Libelle
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat1Libelle(?string $customer_FamilleStat1Libelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat1Libelle) && !is_string($customer_FamilleStat1Libelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat1Libelle, true), gettype($customer_FamilleStat1Libelle)), __LINE__);
        }
        $this->Customer_FamilleStat1Libelle = $customer_FamilleStat1Libelle;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat2 value
     * @return string|null
     */
    public function getCustomer_FamilleStat2(): ?string
    {
        return $this->Customer_FamilleStat2;
    }
    /**
     * Set Customer_FamilleStat2 value
     * @param string $customer_FamilleStat2
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat2(?string $customer_FamilleStat2 = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat2) && !is_string($customer_FamilleStat2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat2, true), gettype($customer_FamilleStat2)), __LINE__);
        }
        $this->Customer_FamilleStat2 = $customer_FamilleStat2;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat2Libelle value
     * @return string|null
     */
    public function getCustomer_FamilleStat2Libelle(): ?string
    {
        return $this->Customer_FamilleStat2Libelle;
    }
    /**
     * Set Customer_FamilleStat2Libelle value
     * @param string $customer_FamilleStat2Libelle
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat2Libelle(?string $customer_FamilleStat2Libelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat2Libelle) && !is_string($customer_FamilleStat2Libelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat2Libelle, true), gettype($customer_FamilleStat2Libelle)), __LINE__);
        }
        $this->Customer_FamilleStat2Libelle = $customer_FamilleStat2Libelle;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat3 value
     * @return string|null
     */
    public function getCustomer_FamilleStat3(): ?string
    {
        return $this->Customer_FamilleStat3;
    }
    /**
     * Set Customer_FamilleStat3 value
     * @param string $customer_FamilleStat3
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat3(?string $customer_FamilleStat3 = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat3) && !is_string($customer_FamilleStat3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat3, true), gettype($customer_FamilleStat3)), __LINE__);
        }
        $this->Customer_FamilleStat3 = $customer_FamilleStat3;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat3Libelle value
     * @return string|null
     */
    public function getCustomer_FamilleStat3Libelle(): ?string
    {
        return $this->Customer_FamilleStat3Libelle;
    }
    /**
     * Set Customer_FamilleStat3Libelle value
     * @param string $customer_FamilleStat3Libelle
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat3Libelle(?string $customer_FamilleStat3Libelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat3Libelle) && !is_string($customer_FamilleStat3Libelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat3Libelle, true), gettype($customer_FamilleStat3Libelle)), __LINE__);
        }
        $this->Customer_FamilleStat3Libelle = $customer_FamilleStat3Libelle;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat4 value
     * @return string|null
     */
    public function getCustomer_FamilleStat4(): ?string
    {
        return $this->Customer_FamilleStat4;
    }
    /**
     * Set Customer_FamilleStat4 value
     * @param string $customer_FamilleStat4
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat4(?string $customer_FamilleStat4 = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat4) && !is_string($customer_FamilleStat4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat4, true), gettype($customer_FamilleStat4)), __LINE__);
        }
        $this->Customer_FamilleStat4 = $customer_FamilleStat4;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat4Libelle value
     * @return string|null
     */
    public function getCustomer_FamilleStat4Libelle(): ?string
    {
        return $this->Customer_FamilleStat4Libelle;
    }
    /**
     * Set Customer_FamilleStat4Libelle value
     * @param string $customer_FamilleStat4Libelle
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat4Libelle(?string $customer_FamilleStat4Libelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat4Libelle) && !is_string($customer_FamilleStat4Libelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat4Libelle, true), gettype($customer_FamilleStat4Libelle)), __LINE__);
        }
        $this->Customer_FamilleStat4Libelle = $customer_FamilleStat4Libelle;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat5 value
     * @return string|null
     */
    public function getCustomer_FamilleStat5(): ?string
    {
        return $this->Customer_FamilleStat5;
    }
    /**
     * Set Customer_FamilleStat5 value
     * @param string $customer_FamilleStat5
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat5(?string $customer_FamilleStat5 = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat5) && !is_string($customer_FamilleStat5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat5, true), gettype($customer_FamilleStat5)), __LINE__);
        }
        $this->Customer_FamilleStat5 = $customer_FamilleStat5;
        
        return $this;
    }
    /**
     * Get Customer_FamilleStat5Libelle value
     * @return string|null
     */
    public function getCustomer_FamilleStat5Libelle(): ?string
    {
        return $this->Customer_FamilleStat5Libelle;
    }
    /**
     * Set Customer_FamilleStat5Libelle value
     * @param string $customer_FamilleStat5Libelle
     * @return \StructType\Customer
     */
    public function setCustomer_FamilleStat5Libelle(?string $customer_FamilleStat5Libelle = null): self
    {
        // validation for constraint: string
        if (!is_null($customer_FamilleStat5Libelle) && !is_string($customer_FamilleStat5Libelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_FamilleStat5Libelle, true), gettype($customer_FamilleStat5Libelle)), __LINE__);
        }
        $this->Customer_FamilleStat5Libelle = $customer_FamilleStat5Libelle;
        
        return $this;
    }
}
