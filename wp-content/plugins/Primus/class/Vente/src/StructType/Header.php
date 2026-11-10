<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Header StructType
 * @subpackage Structs
 */
class Header extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Success;
    /**
     * The Header_TypeOrdre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_TypeOrdre;
    /**
     * The Header_DocType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_DocType;
    /**
     * The Header_Primeur
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1 | 0
     * @var bool
     */
    protected bool $Header_Primeur;
    /**
     * The Header_CampagnePrimeur
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1 | 0
     * @var string
     */
    protected string $Header_CampagnePrimeur;
    /**
     * The Header_EquipeAgent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded | 1
     * - minOccurs: 1 | 0
     * @var string[]
     */
    protected array $Header_EquipeAgent;
    /**
     * The Header_SellToNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SellToNo;
    /**
     * The Header_BillToNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_BillToNo;
    /**
     * The Header_BillToCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_BillToCity;
    /**
     * The Header_BillToPostCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_BillToPostCode;
    /**
     * The Header_BillToCountryRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_BillToCountryRegion;
    /**
     * The Header_ShipToName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_ShipToName;
    /**
     * The Header_ShipToAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_ShipToAddress;
    /**
     * The Header_ShipToAddress2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_ShipToAddress2;
    /**
     * The Header_ShipToCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_ShipToCity;
    /**
     * The Header_ShipToPostCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_ShipToPostCode;
    /**
     * The Header_ShipToCountryRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_ShipToCountryRegion;
    /**
     * The Header_ShipToNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded | 1
     * - minOccurs: 0 | 1
     * @var string[]
     */
    protected array $Header_ShipToNo;
    /**
     * The Header_RequestedDeliveryDate
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_RequestedDeliveryDate;
    /**
     * The Header_PromisedDeliveryDate
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_PromisedDeliveryDate;
    /**
     * The Header_Acompte
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var float
     */
    protected float $Header_Acompte;
    /**
     * The Header_YourReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0 | 1
     * @var string
     */
    protected string $Header_YourReference;
    /**
     * The Commentaires
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0 | 1
     * @var \StructType\Commentaires[]
     */
    protected array $Commentaires;
    /**
     * The Line
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Line[]
     */
    protected array $Line;
    /**
     * The Header_No
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_No;
    /**
     * The Header_DocumentDate
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_DocumentDate;
    /**
     * The Header_PostingDate
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_PostingDate;
    /**
     * The Header_SellToCustomerNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SellToCustomerNo;
    /**
     * The Header_SellToCustomerName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SellToCustomerName;
    /**
     * The Header_SellToCustomerAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SellToCustomerAddress;
    /**
     * The Header_SellToCustomerAddress2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SellToCustomerAddress2;
    /**
     * The Header_SellToCustomerCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SellToCustomerCity;
    /**
     * The Header_SelltoCustomerPostCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SelltoCustomerPostCode;
    /**
     * The Header_SellToCustomerCountryRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SellToCustomerCountryRegion;
    /**
     * The Header_BillTono
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_BillTono;
    /**
     * The Header_billToName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_billToName;
    /**
     * The Header_BillToAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_BillToAddress;
    /**
     * The Header_BillToAddress2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_BillToAddress2;
    /**
     * The Header_PaymentMethodCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_PaymentMethodCode;
    /**
     * The Header_PaymentTermsCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_PaymentTermsCode;
    /**
     * The Header_PriceIncludingVAT
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $Header_PriceIncludingVAT;
    /**
     * The Header_ShipmentMethodCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_ShipmentMethodCode;
    /**
     * The Header_ShippingAgentCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_ShippingAgentCode;
    /**
     * The Header_ExternalDocumentNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_ExternalDocumentNo;
    /**
     * The Header_MontantHT
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Header_MontantHT;
    /**
     * The Header_MontantTTC
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Header_MontantTTC;
    /**
     * The Header_CodeOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_CodeOperation;
    /**
     * The Header_CodeSousOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_CodeSousOperation;
    /**
     * The Lignes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Lignes[]
     */
    protected array $Lignes;
    /**
     * The Header_ExternalDocNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_ExternalDocNo;
    /**
     * The Header_ShipmentDate
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_ShipmentDate;
    /**
     * The Header_billToNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_billToNo;
    /**
     * The Header_ShipToCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_ShipToCode;
    /**
     * The Header_ShipToCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_ShipToCountry;
    /**
     * The Header_SousOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Header_SousOperation;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The NoCommande
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoCommande = null;
    /**
     * The DateCreation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateCreation = null;
    /**
     * The Header_SellToName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_SellToName = null;
    /**
     * The Header_SellToAdress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_SellToAdress = null;
    /**
     * The Header_SellToAdress2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_SellToAdress2 = null;
    /**
     * The Header_SellToCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_SellToCity = null;
    /**
     * The Header_SellToPostCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_SellToPostCode = null;
    /**
     * The Header_SellToCountryRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_SellToCountryRegion = null;
    /**
     * The Header_BillToDestinataire
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_BillToDestinataire = null;
    /**
     * The Header_BillToName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_BillToName = null;
    /**
     * The Header_BillToAdress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_BillToAdress = null;
    /**
     * The Header_BillToAdress2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_BillToAdress2 = null;
    /**
     * The Header_PaymentMethod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_PaymentMethod = null;
    /**
     * The Header_PaymentTerms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_PaymentTerms = null;
    /**
     * The Header_PricesIncludingVAT
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Header_PricesIncludingVAT = null;
    /**
     * The CodePromotion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodePromotion = null;
    /**
     * The Header_ShipmentMethod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Header_ShipmentMethod = null;
    /**
     * The Header_ShipAgent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_ShipAgent = null;
    /**
     * The Header_ShipTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_ShipTime = null;
    /**
     * The IdWebClient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdWebClient = null;
    /**
     * The Header_ExternalDoc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Header_ExternalDoc = null;
    /**
     * The MontantHT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MontantHT = null;
    /**
     * The MontantTTC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MontantTTC = null;
    /**
     * The CodeOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeOperation = null;
    /**
     * The CodeSousOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeSousOperation = null;
    /**
     * Constructor method for Header
     * @uses Header::setSuccess()
     * @uses Header::setHeader_TypeOrdre()
     * @uses Header::setHeader_DocType()
     * @uses Header::setHeader_Primeur()
     * @uses Header::setHeader_CampagnePrimeur()
     * @uses Header::setHeader_EquipeAgent()
     * @uses Header::setHeader_SellToNo()
     * @uses Header::setHeader_BillToNo()
     * @uses Header::setHeader_BillToCity()
     * @uses Header::setHeader_BillToPostCode()
     * @uses Header::setHeader_BillToCountryRegion()
     * @uses Header::setHeader_ShipToName()
     * @uses Header::setHeader_ShipToAddress()
     * @uses Header::setHeader_ShipToAddress2()
     * @uses Header::setHeader_ShipToCity()
     * @uses Header::setHeader_ShipToPostCode()
     * @uses Header::setHeader_ShipToCountryRegion()
     * @uses Header::setHeader_ShipToNo()
     * @uses Header::setHeader_RequestedDeliveryDate()
     * @uses Header::setHeader_PromisedDeliveryDate()
     * @uses Header::setHeader_Acompte()
     * @uses Header::setHeader_YourReference()
     * @uses Header::setCommentaires()
     * @uses Header::setLine()
     * @uses Header::setHeader_No()
     * @uses Header::setHeader_DocumentDate()
     * @uses Header::setHeader_PostingDate()
     * @uses Header::setHeader_SellToCustomerNo()
     * @uses Header::setHeader_SellToCustomerName()
     * @uses Header::setHeader_SellToCustomerAddress()
     * @uses Header::setHeader_SellToCustomerAddress2()
     * @uses Header::setHeader_SellToCustomerCity()
     * @uses Header::setHeader_SelltoCustomerPostCode()
     * @uses Header::setHeader_SellToCustomerCountryRegion()
     * @uses Header::setHeader_BillTono_1()
     * @uses Header::setHeader_billToName()
     * @uses Header::setHeader_BillToAddress()
     * @uses Header::setHeader_BillToAddress2()
     * @uses Header::setHeader_PaymentMethodCode()
     * @uses Header::setHeader_PaymentTermsCode()
     * @uses Header::setHeader_PriceIncludingVAT()
     * @uses Header::setHeader_ShipmentMethodCode()
     * @uses Header::setHeader_ShippingAgentCode()
     * @uses Header::setHeader_ExternalDocumentNo()
     * @uses Header::setHeader_MontantHT()
     * @uses Header::setHeader_MontantTTC()
     * @uses Header::setHeader_CodeOperation()
     * @uses Header::setHeader_CodeSousOperation()
     * @uses Header::setLignes()
     * @uses Header::setHeader_ExternalDocNo()
     * @uses Header::setHeader_ShipmentDate()
     * @uses Header::setHeader_billToNo_2()
     * @uses Header::setHeader_ShipToCode()
     * @uses Header::setHeader_ShipToCountry()
     * @uses Header::setHeader_SousOperation()
     * @uses Header::setKey()
     * @uses Header::setNoCommande()
     * @uses Header::setDateCreation()
     * @uses Header::setHeader_SellToName()
     * @uses Header::setHeader_SellToAdress()
     * @uses Header::setHeader_SellToAdress2()
     * @uses Header::setHeader_SellToCity()
     * @uses Header::setHeader_SellToPostCode()
     * @uses Header::setHeader_SellToCountryRegion()
     * @uses Header::setHeader_BillToDestinataire()
     * @uses Header::setHeader_BillToName_1()
     * @uses Header::setHeader_BillToAdress()
     * @uses Header::setHeader_BillToAdress2()
     * @uses Header::setHeader_PaymentMethod()
     * @uses Header::setHeader_PaymentTerms()
     * @uses Header::setHeader_PricesIncludingVAT()
     * @uses Header::setCodePromotion()
     * @uses Header::setHeader_ShipmentMethod()
     * @uses Header::setHeader_ShipAgent()
     * @uses Header::setHeader_ShipTime()
     * @uses Header::setIdWebClient()
     * @uses Header::setHeader_ExternalDoc()
     * @uses Header::setMontantHT()
     * @uses Header::setMontantTTC()
     * @uses Header::setCodeOperation()
     * @uses Header::setCodeSousOperation()
     * @param string $success
     * @param string $header_TypeOrdre
     * @param string $header_DocType
     * @param bool $header_Primeur
     * @param string $header_CampagnePrimeur
     * @param string[] $header_EquipeAgent
     * @param string $header_SellToNo
     * @param string $header_BillToNo
     * @param string $header_BillToCity
     * @param string $header_BillToPostCode
     * @param string $header_BillToCountryRegion
     * @param string $header_ShipToName
     * @param string $header_ShipToAddress
     * @param string $header_ShipToAddress2
     * @param string $header_ShipToCity
     * @param string $header_ShipToPostCode
     * @param string $header_ShipToCountryRegion
     * @param string[] $header_ShipToNo
     * @param string $header_RequestedDeliveryDate
     * @param string $header_PromisedDeliveryDate
     * @param float $header_Acompte
     * @param string $header_YourReference
     * @param \StructType\Commentaires[] $commentaires
     * @param \StructType\Line[] $line
     * @param string $header_No
     * @param string $header_DocumentDate
     * @param string $header_PostingDate
     * @param string $header_SellToCustomerNo
     * @param string $header_SellToCustomerName
     * @param string $header_SellToCustomerAddress
     * @param string $header_SellToCustomerAddress2
     * @param string $header_SellToCustomerCity
     * @param string $header_SelltoCustomerPostCode
     * @param string $header_SellToCustomerCountryRegion
     * @param string $header_BillTono
     * @param string $header_billToName
     * @param string $header_BillToAddress
     * @param string $header_BillToAddress2
     * @param string $header_PaymentMethodCode
     * @param string $header_PaymentTermsCode
     * @param bool $header_PriceIncludingVAT
     * @param string $header_ShipmentMethodCode
     * @param string $header_ShippingAgentCode
     * @param string $header_ExternalDocumentNo
     * @param float $header_MontantHT
     * @param float $header_MontantTTC
     * @param string $header_CodeOperation
     * @param string $header_CodeSousOperation
     * @param \StructType\Lignes[] $lignes
     * @param string $header_ExternalDocNo
     * @param string $header_ShipmentDate
     * @param string $header_billToNo
     * @param string $header_ShipToCode
     * @param string $header_ShipToCountry
     * @param string $header_SousOperation
     * @param string $key
     * @param string $noCommande
     * @param string $dateCreation
     * @param string $header_SellToName
     * @param string $header_SellToAdress
     * @param string $header_SellToAdress2
     * @param string $header_SellToCity
     * @param string $header_SellToPostCode
     * @param string $header_SellToCountryRegion
     * @param string $header_BillToDestinataire
     * @param string $header_BillToName
     * @param string $header_BillToAdress
     * @param string $header_BillToAdress2
     * @param string $header_PaymentMethod
     * @param string $header_PaymentTerms
     * @param bool $header_PricesIncludingVAT
     * @param string $codePromotion
     * @param string[] $header_ShipmentMethod
     * @param string $header_ShipAgent
     * @param string $header_ShipTime
     * @param string $idWebClient
     * @param string $header_ExternalDoc
     * @param string $montantHT
     * @param string $montantTTC
     * @param string $codeOperation
     * @param string $codeSousOperation
     */
    public function __construct(string $success, string $header_TypeOrdre, string $header_DocType, bool $header_Primeur, string $header_CampagnePrimeur, array $header_EquipeAgent, string $header_SellToNo, string $header_BillToNo, string $header_BillToCity, string $header_BillToPostCode, string $header_BillToCountryRegion, string $header_ShipToName, string $header_ShipToAddress, string $header_ShipToAddress2, string $header_ShipToCity, string $header_ShipToPostCode, string $header_ShipToCountryRegion, array $header_ShipToNo, string $header_RequestedDeliveryDate, string $header_PromisedDeliveryDate, float $header_Acompte, string $header_YourReference, array $commentaires, array $line, string $header_No, string $header_DocumentDate, string $header_PostingDate, string $header_SellToCustomerNo, string $header_SellToCustomerName, string $header_SellToCustomerAddress, string $header_SellToCustomerAddress2, string $header_SellToCustomerCity, string $header_SelltoCustomerPostCode, string $header_SellToCustomerCountryRegion, string $header_BillTono_1, string $header_billToName, string $header_BillToAddress, string $header_BillToAddress2, string $header_PaymentMethodCode, string $header_PaymentTermsCode, bool $header_PriceIncludingVAT, string $header_ShipmentMethodCode, string $header_ShippingAgentCode, string $header_ExternalDocumentNo, float $header_MontantHT, float $header_MontantTTC, string $header_CodeOperation, string $header_CodeSousOperation, array $lignes, string $header_ExternalDocNo, string $header_ShipmentDate, string $header_billToNo_2, string $header_ShipToCode, string $header_ShipToCountry, string $header_SousOperation, ?string $key = null, ?string $noCommande = null, ?string $dateCreation = null, ?string $header_SellToName = null, ?string $header_SellToAdress = null, ?string $header_SellToAdress2 = null, ?string $header_SellToCity = null, ?string $header_SellToPostCode = null, ?string $header_SellToCountryRegion = null, ?string $header_BillToDestinataire = null, ?string $header_BillToName_1 = null, ?string $header_BillToAdress = null, ?string $header_BillToAdress2 = null, ?string $header_PaymentMethod = null, ?string $header_PaymentTerms = null, ?bool $header_PricesIncludingVAT = false, ?string $codePromotion = null, ?array $header_ShipmentMethod = null, ?string $header_ShipAgent = null, ?string $header_ShipTime = null, ?string $idWebClient = null, ?string $header_ExternalDoc = null, ?string $montantHT = null, ?string $montantTTC = null, ?string $codeOperation = null, ?string $codeSousOperation = null)
    {
        $this
            ->setSuccess($success)
            ->setHeader_TypeOrdre($header_TypeOrdre)
            ->setHeader_DocType($header_DocType)
            ->setHeader_Primeur($header_Primeur)
            ->setHeader_CampagnePrimeur($header_CampagnePrimeur)
            ->setHeader_EquipeAgent($header_EquipeAgent)
            ->setHeader_SellToNo($header_SellToNo)
            ->setHeader_BillToNo($header_BillToNo)
            ->setHeader_BillToCity($header_BillToCity)
            ->setHeader_BillToPostCode($header_BillToPostCode)
            ->setHeader_BillToCountryRegion($header_BillToCountryRegion)
            ->setHeader_ShipToName($header_ShipToName)
            ->setHeader_ShipToAddress($header_ShipToAddress)
            ->setHeader_ShipToAddress2($header_ShipToAddress2)
            ->setHeader_ShipToCity($header_ShipToCity)
            ->setHeader_ShipToPostCode($header_ShipToPostCode)
            ->setHeader_ShipToCountryRegion($header_ShipToCountryRegion)
            ->setHeader_ShipToNo($header_ShipToNo)
            ->setHeader_RequestedDeliveryDate($header_RequestedDeliveryDate)
            ->setHeader_PromisedDeliveryDate($header_PromisedDeliveryDate)
            ->setHeader_Acompte($header_Acompte)
            ->setHeader_YourReference($header_YourReference)
            ->setCommentaires($commentaires)
            ->setLine($line)
            ->setHeader_No($header_No)
            ->setHeader_DocumentDate($header_DocumentDate)
            ->setHeader_PostingDate($header_PostingDate)
            ->setHeader_SellToCustomerNo($header_SellToCustomerNo)
            ->setHeader_SellToCustomerName($header_SellToCustomerName)
            ->setHeader_SellToCustomerAddress($header_SellToCustomerAddress)
            ->setHeader_SellToCustomerAddress2($header_SellToCustomerAddress2)
            ->setHeader_SellToCustomerCity($header_SellToCustomerCity)
            ->setHeader_SelltoCustomerPostCode($header_SelltoCustomerPostCode)
            ->setHeader_SellToCustomerCountryRegion($header_SellToCustomerCountryRegion)
            ->setHeader_BillTono_1($header_BillTono_1)
            ->setHeader_billToName($header_billToName)
            ->setHeader_BillToAddress($header_BillToAddress)
            ->setHeader_BillToAddress2($header_BillToAddress2)
            ->setHeader_PaymentMethodCode($header_PaymentMethodCode)
            ->setHeader_PaymentTermsCode($header_PaymentTermsCode)
            ->setHeader_PriceIncludingVAT($header_PriceIncludingVAT)
            ->setHeader_ShipmentMethodCode($header_ShipmentMethodCode)
            ->setHeader_ShippingAgentCode($header_ShippingAgentCode)
            ->setHeader_ExternalDocumentNo($header_ExternalDocumentNo)
            ->setHeader_MontantHT($header_MontantHT)
            ->setHeader_MontantTTC($header_MontantTTC)
            ->setHeader_CodeOperation($header_CodeOperation)
            ->setHeader_CodeSousOperation($header_CodeSousOperation)
            ->setLignes($lignes)
            ->setHeader_ExternalDocNo($header_ExternalDocNo)
            ->setHeader_ShipmentDate($header_ShipmentDate)
            ->setHeader_billToNo_2($header_billToNo_2)
            ->setHeader_ShipToCode($header_ShipToCode)
            ->setHeader_ShipToCountry($header_ShipToCountry)
            ->setHeader_SousOperation($header_SousOperation)
            ->setKey($key)
            ->setNoCommande($noCommande)
            ->setDateCreation($dateCreation)
            ->setHeader_SellToName($header_SellToName)
            ->setHeader_SellToAdress($header_SellToAdress)
            ->setHeader_SellToAdress2($header_SellToAdress2)
            ->setHeader_SellToCity($header_SellToCity)
            ->setHeader_SellToPostCode($header_SellToPostCode)
            ->setHeader_SellToCountryRegion($header_SellToCountryRegion)
            ->setHeader_BillToDestinataire($header_BillToDestinataire)
            ->setHeader_BillToName_1($header_BillToName_1)
            ->setHeader_BillToAdress($header_BillToAdress)
            ->setHeader_BillToAdress2($header_BillToAdress2)
            ->setHeader_PaymentMethod($header_PaymentMethod)
            ->setHeader_PaymentTerms($header_PaymentTerms)
            ->setHeader_PricesIncludingVAT($header_PricesIncludingVAT)
            ->setCodePromotion($codePromotion)
            ->setHeader_ShipmentMethod($header_ShipmentMethod)
            ->setHeader_ShipAgent($header_ShipAgent)
            ->setHeader_ShipTime($header_ShipTime)
            ->setIdWebClient($idWebClient)
            ->setHeader_ExternalDoc($header_ExternalDoc)
            ->setMontantHT($montantHT)
            ->setMontantTTC($montantTTC)
            ->setCodeOperation($codeOperation)
            ->setCodeSousOperation($codeSousOperation);
    }
    /**
     * Get Success value
     * @return string
     */
    public function getSuccess(): string
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param string $success
     * @return \StructType\Header
     */
    public function setSuccess(string $success): self
    {
        // validation for constraint: string
        if (!is_null($success) && !is_string($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        
        return $this;
    }
    /**
     * Get Header_TypeOrdre value
     * @return string
     */
    public function getHeader_TypeOrdre(): string
    {
        return $this->Header_TypeOrdre;
    }
    /**
     * Set Header_TypeOrdre value
     * @param string $header_TypeOrdre
     * @return \StructType\Header
     */
    public function setHeader_TypeOrdre(string $header_TypeOrdre): self
    {
        // validation for constraint: string
        if (!is_null($header_TypeOrdre) && !is_string($header_TypeOrdre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_TypeOrdre, true), gettype($header_TypeOrdre)), __LINE__);
        }
        $this->Header_TypeOrdre = $header_TypeOrdre;
        
        return $this;
    }
    /**
     * Get Header_DocType value
     * @return string
     */
    public function getHeader_DocType(): string
    {
        return $this->Header_DocType;
    }
    /**
     * Set Header_DocType value
     * @param string $header_DocType
     * @return \StructType\Header
     */
    public function setHeader_DocType(string $header_DocType): self
    {
        // validation for constraint: string
        if (!is_null($header_DocType) && !is_string($header_DocType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_DocType, true), gettype($header_DocType)), __LINE__);
        }
        $this->Header_DocType = $header_DocType;
        
        return $this;
    }
    /**
     * Get Header_Primeur value
     * @return bool
     */
    public function getHeader_Primeur(): bool
    {
        return $this->Header_Primeur;
    }
    /**
     * Set Header_Primeur value
     * @param bool $header_Primeur
     * @return \StructType\Header
     */
    public function setHeader_Primeur(bool $header_Primeur): self
    {
        // validation for constraint: boolean
        if (!is_null($header_Primeur) && !is_bool($header_Primeur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($header_Primeur, true), gettype($header_Primeur)), __LINE__);
        }
        $this->Header_Primeur = $header_Primeur;
        
        return $this;
    }
    /**
     * Get Header_CampagnePrimeur value
     * @return string
     */
    public function getHeader_CampagnePrimeur(): string
    {
        return $this->Header_CampagnePrimeur;
    }
    /**
     * Set Header_CampagnePrimeur value
     * @param string $header_CampagnePrimeur
     * @return \StructType\Header
     */
    public function setHeader_CampagnePrimeur(string $header_CampagnePrimeur): self
    {
        // validation for constraint: string
        if (!is_null($header_CampagnePrimeur) && !is_string($header_CampagnePrimeur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_CampagnePrimeur, true), gettype($header_CampagnePrimeur)), __LINE__);
        }
        $this->Header_CampagnePrimeur = $header_CampagnePrimeur;
        
        return $this;
    }
    /**
     * Get Header_EquipeAgent value
     * @return string[]
     */
    public function getHeader_EquipeAgent(): array
    {
        return $this->Header_EquipeAgent;
    }
    /**
     * This method is responsible for validating the values passed to the setHeader_EquipeAgent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHeader_EquipeAgent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHeader_EquipeAgentForArrayConstraintsFromSetHeader_EquipeAgent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $headerHeader_EquipeAgentItem) {
            // validation for constraint: itemType
            if (!is_string($headerHeader_EquipeAgentItem)) {
                $invalidValues[] = is_object($headerHeader_EquipeAgentItem) ? get_class($headerHeader_EquipeAgentItem) : sprintf('%s(%s)', gettype($headerHeader_EquipeAgentItem), var_export($headerHeader_EquipeAgentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Header_EquipeAgent property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Header_EquipeAgent value
     * @throws InvalidArgumentException
     * @param string[] $header_EquipeAgent
     * @return \StructType\Header
     */
    public function setHeader_EquipeAgent(array $header_EquipeAgent): self
    {
        // validation for constraint: array
        if ('' !== ($header_EquipeAgentArrayErrorMessage = self::validateHeader_EquipeAgentForArrayConstraintsFromSetHeader_EquipeAgent($header_EquipeAgent))) {
            throw new InvalidArgumentException($header_EquipeAgentArrayErrorMessage, __LINE__);
        }
        $this->Header_EquipeAgent = $header_EquipeAgent;
        
        return $this;
    }
    /**
     * Add item to Header_EquipeAgent value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Header
     */
    public function addToHeader_EquipeAgent(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Header_EquipeAgent property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Header_EquipeAgent[] = $item;
        
        return $this;
    }
    /**
     * Get Header_SellToNo value
     * @return string
     */
    public function getHeader_SellToNo(): string
    {
        return $this->Header_SellToNo;
    }
    /**
     * Set Header_SellToNo value
     * @param string $header_SellToNo
     * @return \StructType\Header
     */
    public function setHeader_SellToNo(string $header_SellToNo): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToNo) && !is_string($header_SellToNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToNo, true), gettype($header_SellToNo)), __LINE__);
        }
        $this->Header_SellToNo = $header_SellToNo;
        
        return $this;
    }
    /**
     * Get Header_BillToNo value
     * @return string
     */
    public function getHeader_BillToNo(): string
    {
        return $this->Header_BillToNo;
    }
    /**
     * Set Header_BillToNo value
     * @param string $header_BillToNo
     * @return \StructType\Header
     */
    public function setHeader_BillToNo(string $header_BillToNo): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToNo) && !is_string($header_BillToNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToNo, true), gettype($header_BillToNo)), __LINE__);
        }
        $this->Header_BillToNo = $header_BillToNo;
        
        return $this;
    }
    /**
     * Get Header_BillToCity value
     * @return string
     */
    public function getHeader_BillToCity(): string
    {
        return $this->Header_BillToCity;
    }
    /**
     * Set Header_BillToCity value
     * @param string $header_BillToCity
     * @return \StructType\Header
     */
    public function setHeader_BillToCity(string $header_BillToCity): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToCity) && !is_string($header_BillToCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToCity, true), gettype($header_BillToCity)), __LINE__);
        }
        $this->Header_BillToCity = $header_BillToCity;
        
        return $this;
    }
    /**
     * Get Header_BillToPostCode value
     * @return string
     */
    public function getHeader_BillToPostCode(): string
    {
        return $this->Header_BillToPostCode;
    }
    /**
     * Set Header_BillToPostCode value
     * @param string $header_BillToPostCode
     * @return \StructType\Header
     */
    public function setHeader_BillToPostCode(string $header_BillToPostCode): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToPostCode) && !is_string($header_BillToPostCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToPostCode, true), gettype($header_BillToPostCode)), __LINE__);
        }
        $this->Header_BillToPostCode = $header_BillToPostCode;
        
        return $this;
    }
    /**
     * Get Header_BillToCountryRegion value
     * @return string
     */
    public function getHeader_BillToCountryRegion(): string
    {
        return $this->Header_BillToCountryRegion;
    }
    /**
     * Set Header_BillToCountryRegion value
     * @param string $header_BillToCountryRegion
     * @return \StructType\Header
     */
    public function setHeader_BillToCountryRegion(string $header_BillToCountryRegion): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToCountryRegion) && !is_string($header_BillToCountryRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToCountryRegion, true), gettype($header_BillToCountryRegion)), __LINE__);
        }
        $this->Header_BillToCountryRegion = $header_BillToCountryRegion;
        
        return $this;
    }
    /**
     * Get Header_ShipToName value
     * @return string
     */
    public function getHeader_ShipToName(): string
    {
        return $this->Header_ShipToName;
    }
    /**
     * Set Header_ShipToName value
     * @param string $header_ShipToName
     * @return \StructType\Header
     */
    public function setHeader_ShipToName(string $header_ShipToName): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToName) && !is_string($header_ShipToName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToName, true), gettype($header_ShipToName)), __LINE__);
        }
        $this->Header_ShipToName = $header_ShipToName;
        
        return $this;
    }
    /**
     * Get Header_ShipToAddress value
     * @return string
     */
    public function getHeader_ShipToAddress(): string
    {
        return $this->Header_ShipToAddress;
    }
    /**
     * Set Header_ShipToAddress value
     * @param string $header_ShipToAddress
     * @return \StructType\Header
     */
    public function setHeader_ShipToAddress(string $header_ShipToAddress): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToAddress) && !is_string($header_ShipToAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToAddress, true), gettype($header_ShipToAddress)), __LINE__);
        }
        $this->Header_ShipToAddress = $header_ShipToAddress;
        
        return $this;
    }
    /**
     * Get Header_ShipToAddress2 value
     * @return string
     */
    public function getHeader_ShipToAddress2(): string
    {
        return $this->Header_ShipToAddress2;
    }
    /**
     * Set Header_ShipToAddress2 value
     * @param string $header_ShipToAddress2
     * @return \StructType\Header
     */
    public function setHeader_ShipToAddress2(string $header_ShipToAddress2): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToAddress2) && !is_string($header_ShipToAddress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToAddress2, true), gettype($header_ShipToAddress2)), __LINE__);
        }
        $this->Header_ShipToAddress2 = $header_ShipToAddress2;
        
        return $this;
    }
    /**
     * Get Header_ShipToCity value
     * @return string
     */
    public function getHeader_ShipToCity(): string
    {
        return $this->Header_ShipToCity;
    }
    /**
     * Set Header_ShipToCity value
     * @param string $header_ShipToCity
     * @return \StructType\Header
     */
    public function setHeader_ShipToCity(string $header_ShipToCity): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToCity) && !is_string($header_ShipToCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToCity, true), gettype($header_ShipToCity)), __LINE__);
        }
        $this->Header_ShipToCity = $header_ShipToCity;
        
        return $this;
    }
    /**
     * Get Header_ShipToPostCode value
     * @return string
     */
    public function getHeader_ShipToPostCode(): string
    {
        return $this->Header_ShipToPostCode;
    }
    /**
     * Set Header_ShipToPostCode value
     * @param string $header_ShipToPostCode
     * @return \StructType\Header
     */
    public function setHeader_ShipToPostCode(string $header_ShipToPostCode): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToPostCode) && !is_string($header_ShipToPostCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToPostCode, true), gettype($header_ShipToPostCode)), __LINE__);
        }
        $this->Header_ShipToPostCode = $header_ShipToPostCode;
        
        return $this;
    }
    /**
     * Get Header_ShipToCountryRegion value
     * @return string
     */
    public function getHeader_ShipToCountryRegion(): string
    {
        return $this->Header_ShipToCountryRegion;
    }
    /**
     * Set Header_ShipToCountryRegion value
     * @param string $header_ShipToCountryRegion
     * @return \StructType\Header
     */
    public function setHeader_ShipToCountryRegion(string $header_ShipToCountryRegion): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToCountryRegion) && !is_string($header_ShipToCountryRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToCountryRegion, true), gettype($header_ShipToCountryRegion)), __LINE__);
        }
        $this->Header_ShipToCountryRegion = $header_ShipToCountryRegion;
        
        return $this;
    }
    /**
     * Get Header_ShipToNo value
     * @return string[]
     */
    public function getHeader_ShipToNo(): array
    {
        return $this->Header_ShipToNo;
    }
    /**
     * This method is responsible for validating the values passed to the setHeader_ShipToNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHeader_ShipToNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHeader_ShipToNoForArrayConstraintsFromSetHeader_ShipToNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $headerHeader_ShipToNoItem) {
            // validation for constraint: itemType
            if (!is_string($headerHeader_ShipToNoItem)) {
                $invalidValues[] = is_object($headerHeader_ShipToNoItem) ? get_class($headerHeader_ShipToNoItem) : sprintf('%s(%s)', gettype($headerHeader_ShipToNoItem), var_export($headerHeader_ShipToNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Header_ShipToNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Header_ShipToNo value
     * @throws InvalidArgumentException
     * @param string[] $header_ShipToNo
     * @return \StructType\Header
     */
    public function setHeader_ShipToNo(array $header_ShipToNo): self
    {
        // validation for constraint: array
        if ('' !== ($header_ShipToNoArrayErrorMessage = self::validateHeader_ShipToNoForArrayConstraintsFromSetHeader_ShipToNo($header_ShipToNo))) {
            throw new InvalidArgumentException($header_ShipToNoArrayErrorMessage, __LINE__);
        }
        $this->Header_ShipToNo = $header_ShipToNo;
        
        return $this;
    }
    /**
     * Add item to Header_ShipToNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Header
     */
    public function addToHeader_ShipToNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Header_ShipToNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Header_ShipToNo[] = $item;
        
        return $this;
    }
    /**
     * Get Header_RequestedDeliveryDate value
     * @return string
     */
    public function getHeader_RequestedDeliveryDate(): string
    {
        return $this->Header_RequestedDeliveryDate;
    }
    /**
     * Set Header_RequestedDeliveryDate value
     * @param string $header_RequestedDeliveryDate
     * @return \StructType\Header
     */
    public function setHeader_RequestedDeliveryDate(string $header_RequestedDeliveryDate): self
    {
        // validation for constraint: string
        if (!is_null($header_RequestedDeliveryDate) && !is_string($header_RequestedDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_RequestedDeliveryDate, true), gettype($header_RequestedDeliveryDate)), __LINE__);
        }
        $this->Header_RequestedDeliveryDate = $header_RequestedDeliveryDate;
        
        return $this;
    }
    /**
     * Get Header_PromisedDeliveryDate value
     * @return string
     */
    public function getHeader_PromisedDeliveryDate(): string
    {
        return $this->Header_PromisedDeliveryDate;
    }
    /**
     * Set Header_PromisedDeliveryDate value
     * @param string $header_PromisedDeliveryDate
     * @return \StructType\Header
     */
    public function setHeader_PromisedDeliveryDate(string $header_PromisedDeliveryDate): self
    {
        // validation for constraint: string
        if (!is_null($header_PromisedDeliveryDate) && !is_string($header_PromisedDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_PromisedDeliveryDate, true), gettype($header_PromisedDeliveryDate)), __LINE__);
        }
        $this->Header_PromisedDeliveryDate = $header_PromisedDeliveryDate;
        
        return $this;
    }
    /**
     * Get Header_Acompte value
     * @return float
     */
    public function getHeader_Acompte(): float
    {
        return $this->Header_Acompte;
    }
    /**
     * Set Header_Acompte value
     * @param float $header_Acompte
     * @return \StructType\Header
     */
    public function setHeader_Acompte(float $header_Acompte): self
    {
        // validation for constraint: float
        if (!is_null($header_Acompte) && !(is_float($header_Acompte) || is_numeric($header_Acompte))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($header_Acompte, true), gettype($header_Acompte)), __LINE__);
        }
        $this->Header_Acompte = $header_Acompte;
        
        return $this;
    }
    /**
     * Get Header_YourReference value
     * @return string
     */
    public function getHeader_YourReference(): string
    {
        return $this->Header_YourReference;
    }
    /**
     * Set Header_YourReference value
     * @param string $header_YourReference
     * @return \StructType\Header
     */
    public function setHeader_YourReference(string $header_YourReference): self
    {
        // validation for constraint: string
        if (!is_null($header_YourReference) && !is_string($header_YourReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_YourReference, true), gettype($header_YourReference)), __LINE__);
        }
        $this->Header_YourReference = $header_YourReference;
        
        return $this;
    }
    /**
     * Get Commentaires value
     * @return \StructType\Commentaires[]
     */
    public function getCommentaires(): array
    {
        return $this->Commentaires;
    }
    /**
     * This method is responsible for validating the values passed to the setCommentaires method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommentaires method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommentairesForArrayConstraintsFromSetCommentaires(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $headerCommentairesItem) {
            // validation for constraint: itemType
            if (!$headerCommentairesItem instanceof \StructType\Commentaires) {
                $invalidValues[] = is_object($headerCommentairesItem) ? get_class($headerCommentairesItem) : sprintf('%s(%s)', gettype($headerCommentairesItem), var_export($headerCommentairesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Commentaires property can only contain items of type \StructType\Commentaires, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Commentaires value
     * @throws InvalidArgumentException
     * @param \StructType\Commentaires[] $commentaires
     * @return \StructType\Header
     */
    public function setCommentaires(array $commentaires): self
    {
        // validation for constraint: array
        if ('' !== ($commentairesArrayErrorMessage = self::validateCommentairesForArrayConstraintsFromSetCommentaires($commentaires))) {
            throw new InvalidArgumentException($commentairesArrayErrorMessage, __LINE__);
        }
        $this->Commentaires = $commentaires;
        
        return $this;
    }
    /**
     * Add item to Commentaires value
     * @throws InvalidArgumentException
     * @param \StructType\Commentaires $item
     * @return \StructType\Header
     */
    public function addToCommentaires(\StructType\Commentaires $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Commentaires) {
            throw new InvalidArgumentException(sprintf('The Commentaires property can only contain items of type \StructType\Commentaires, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Commentaires[] = $item;
        
        return $this;
    }
    /**
     * Get Line value
     * @return \StructType\Line[]
     */
    public function getLine(): array
    {
        return $this->Line;
    }
    /**
     * This method is responsible for validating the values passed to the setLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineForArrayConstraintsFromSetLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $headerLineItem) {
            // validation for constraint: itemType
            if (!$headerLineItem instanceof \StructType\Line) {
                $invalidValues[] = is_object($headerLineItem) ? get_class($headerLineItem) : sprintf('%s(%s)', gettype($headerLineItem), var_export($headerLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Line property can only contain items of type \StructType\Line, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Line value
     * @throws InvalidArgumentException
     * @param \StructType\Line[] $line
     * @return \StructType\Header
     */
    public function setLine(array $line): self
    {
        // validation for constraint: array
        if ('' !== ($lineArrayErrorMessage = self::validateLineForArrayConstraintsFromSetLine($line))) {
            throw new InvalidArgumentException($lineArrayErrorMessage, __LINE__);
        }
        $this->Line = $line;
        
        return $this;
    }
    /**
     * Add item to Line value
     * @throws InvalidArgumentException
     * @param \StructType\Line $item
     * @return \StructType\Header
     */
    public function addToLine(\StructType\Line $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Line) {
            throw new InvalidArgumentException(sprintf('The Line property can only contain items of type \StructType\Line, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Line[] = $item;
        
        return $this;
    }
    /**
     * Get Header_No value
     * @return string
     */
    public function getHeader_No(): string
    {
        return $this->Header_No;
    }
    /**
     * Set Header_No value
     * @param string $header_No
     * @return \StructType\Header
     */
    public function setHeader_No(string $header_No): self
    {
        // validation for constraint: string
        if (!is_null($header_No) && !is_string($header_No)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_No, true), gettype($header_No)), __LINE__);
        }
        $this->Header_No = $header_No;
        
        return $this;
    }
    /**
     * Get Header_DocumentDate value
     * @return string
     */
    public function getHeader_DocumentDate(): string
    {
        return $this->Header_DocumentDate;
    }
    /**
     * Set Header_DocumentDate value
     * @param string $header_DocumentDate
     * @return \StructType\Header
     */
    public function setHeader_DocumentDate(string $header_DocumentDate): self
    {
        // validation for constraint: string
        if (!is_null($header_DocumentDate) && !is_string($header_DocumentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_DocumentDate, true), gettype($header_DocumentDate)), __LINE__);
        }
        $this->Header_DocumentDate = $header_DocumentDate;
        
        return $this;
    }
    /**
     * Get Header_PostingDate value
     * @return string
     */
    public function getHeader_PostingDate(): string
    {
        return $this->Header_PostingDate;
    }
    /**
     * Set Header_PostingDate value
     * @param string $header_PostingDate
     * @return \StructType\Header
     */
    public function setHeader_PostingDate(string $header_PostingDate): self
    {
        // validation for constraint: string
        if (!is_null($header_PostingDate) && !is_string($header_PostingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_PostingDate, true), gettype($header_PostingDate)), __LINE__);
        }
        $this->Header_PostingDate = $header_PostingDate;
        
        return $this;
    }
    /**
     * Get Header_SellToCustomerNo value
     * @return string
     */
    public function getHeader_SellToCustomerNo(): string
    {
        return $this->Header_SellToCustomerNo;
    }
    /**
     * Set Header_SellToCustomerNo value
     * @param string $header_SellToCustomerNo
     * @return \StructType\Header
     */
    public function setHeader_SellToCustomerNo(string $header_SellToCustomerNo): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCustomerNo) && !is_string($header_SellToCustomerNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCustomerNo, true), gettype($header_SellToCustomerNo)), __LINE__);
        }
        $this->Header_SellToCustomerNo = $header_SellToCustomerNo;
        
        return $this;
    }
    /**
     * Get Header_SellToCustomerName value
     * @return string
     */
    public function getHeader_SellToCustomerName(): string
    {
        return $this->Header_SellToCustomerName;
    }
    /**
     * Set Header_SellToCustomerName value
     * @param string $header_SellToCustomerName
     * @return \StructType\Header
     */
    public function setHeader_SellToCustomerName(string $header_SellToCustomerName): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCustomerName) && !is_string($header_SellToCustomerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCustomerName, true), gettype($header_SellToCustomerName)), __LINE__);
        }
        $this->Header_SellToCustomerName = $header_SellToCustomerName;
        
        return $this;
    }
    /**
     * Get Header_SellToCustomerAddress value
     * @return string
     */
    public function getHeader_SellToCustomerAddress(): string
    {
        return $this->Header_SellToCustomerAddress;
    }
    /**
     * Set Header_SellToCustomerAddress value
     * @param string $header_SellToCustomerAddress
     * @return \StructType\Header
     */
    public function setHeader_SellToCustomerAddress(string $header_SellToCustomerAddress): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCustomerAddress) && !is_string($header_SellToCustomerAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCustomerAddress, true), gettype($header_SellToCustomerAddress)), __LINE__);
        }
        $this->Header_SellToCustomerAddress = $header_SellToCustomerAddress;
        
        return $this;
    }
    /**
     * Get Header_SellToCustomerAddress2 value
     * @return string
     */
    public function getHeader_SellToCustomerAddress2(): string
    {
        return $this->Header_SellToCustomerAddress2;
    }
    /**
     * Set Header_SellToCustomerAddress2 value
     * @param string $header_SellToCustomerAddress2
     * @return \StructType\Header
     */
    public function setHeader_SellToCustomerAddress2(string $header_SellToCustomerAddress2): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCustomerAddress2) && !is_string($header_SellToCustomerAddress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCustomerAddress2, true), gettype($header_SellToCustomerAddress2)), __LINE__);
        }
        $this->Header_SellToCustomerAddress2 = $header_SellToCustomerAddress2;
        
        return $this;
    }
    /**
     * Get Header_SellToCustomerCity value
     * @return string
     */
    public function getHeader_SellToCustomerCity(): string
    {
        return $this->Header_SellToCustomerCity;
    }
    /**
     * Set Header_SellToCustomerCity value
     * @param string $header_SellToCustomerCity
     * @return \StructType\Header
     */
    public function setHeader_SellToCustomerCity(string $header_SellToCustomerCity): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCustomerCity) && !is_string($header_SellToCustomerCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCustomerCity, true), gettype($header_SellToCustomerCity)), __LINE__);
        }
        $this->Header_SellToCustomerCity = $header_SellToCustomerCity;
        
        return $this;
    }
    /**
     * Get Header_SelltoCustomerPostCode value
     * @return string
     */
    public function getHeader_SelltoCustomerPostCode(): string
    {
        return $this->Header_SelltoCustomerPostCode;
    }
    /**
     * Set Header_SelltoCustomerPostCode value
     * @param string $header_SelltoCustomerPostCode
     * @return \StructType\Header
     */
    public function setHeader_SelltoCustomerPostCode(string $header_SelltoCustomerPostCode): self
    {
        // validation for constraint: string
        if (!is_null($header_SelltoCustomerPostCode) && !is_string($header_SelltoCustomerPostCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SelltoCustomerPostCode, true), gettype($header_SelltoCustomerPostCode)), __LINE__);
        }
        $this->Header_SelltoCustomerPostCode = $header_SelltoCustomerPostCode;
        
        return $this;
    }
    /**
     * Get Header_SellToCustomerCountryRegion value
     * @return string
     */
    public function getHeader_SellToCustomerCountryRegion(): string
    {
        return $this->Header_SellToCustomerCountryRegion;
    }
    /**
     * Set Header_SellToCustomerCountryRegion value
     * @param string $header_SellToCustomerCountryRegion
     * @return \StructType\Header
     */
    public function setHeader_SellToCustomerCountryRegion(string $header_SellToCustomerCountryRegion): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCustomerCountryRegion) && !is_string($header_SellToCustomerCountryRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCustomerCountryRegion, true), gettype($header_SellToCustomerCountryRegion)), __LINE__);
        }
        $this->Header_SellToCustomerCountryRegion = $header_SellToCustomerCountryRegion;
        
        return $this;
    }
    /**
     * Get Header_BillTono value
     * @return string
     */
    public function getHeader_BillTono_1(): string
    {
        return $this->Header_BillTono;
    }
    /**
     * Set Header_BillTono value
     * @param string $header_BillTono
     * @return \StructType\Header
     */
    public function setHeader_BillTono_1(string $header_BillTono_1): self
    {
        // validation for constraint: string
        if (!is_null($header_BillTono_1) && !is_string($header_BillTono_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillTono_1, true), gettype($header_BillTono_1)), __LINE__);
        }
        $this->Header_BillTono = $header_BillTono_1;
        
        return $this;
    }
    /**
     * Get Header_billToName value
     * @return string
     */
    public function getHeader_billToName(): string
    {
        return $this->Header_billToName;
    }
    /**
     * Set Header_billToName value
     * @param string $header_billToName
     * @return \StructType\Header
     */
    public function setHeader_billToName(string $header_billToName): self
    {
        // validation for constraint: string
        if (!is_null($header_billToName) && !is_string($header_billToName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_billToName, true), gettype($header_billToName)), __LINE__);
        }
        $this->Header_billToName = $header_billToName;
        
        return $this;
    }
    /**
     * Get Header_BillToAddress value
     * @return string
     */
    public function getHeader_BillToAddress(): string
    {
        return $this->Header_BillToAddress;
    }
    /**
     * Set Header_BillToAddress value
     * @param string $header_BillToAddress
     * @return \StructType\Header
     */
    public function setHeader_BillToAddress(string $header_BillToAddress): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToAddress) && !is_string($header_BillToAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToAddress, true), gettype($header_BillToAddress)), __LINE__);
        }
        $this->Header_BillToAddress = $header_BillToAddress;
        
        return $this;
    }
    /**
     * Get Header_BillToAddress2 value
     * @return string
     */
    public function getHeader_BillToAddress2(): string
    {
        return $this->Header_BillToAddress2;
    }
    /**
     * Set Header_BillToAddress2 value
     * @param string $header_BillToAddress2
     * @return \StructType\Header
     */
    public function setHeader_BillToAddress2(string $header_BillToAddress2): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToAddress2) && !is_string($header_BillToAddress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToAddress2, true), gettype($header_BillToAddress2)), __LINE__);
        }
        $this->Header_BillToAddress2 = $header_BillToAddress2;
        
        return $this;
    }
    /**
     * Get Header_PaymentMethodCode value
     * @return string
     */
    public function getHeader_PaymentMethodCode(): string
    {
        return $this->Header_PaymentMethodCode;
    }
    /**
     * Set Header_PaymentMethodCode value
     * @param string $header_PaymentMethodCode
     * @return \StructType\Header
     */
    public function setHeader_PaymentMethodCode(string $header_PaymentMethodCode): self
    {
        // validation for constraint: string
        if (!is_null($header_PaymentMethodCode) && !is_string($header_PaymentMethodCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_PaymentMethodCode, true), gettype($header_PaymentMethodCode)), __LINE__);
        }
        $this->Header_PaymentMethodCode = $header_PaymentMethodCode;
        
        return $this;
    }
    /**
     * Get Header_PaymentTermsCode value
     * @return string
     */
    public function getHeader_PaymentTermsCode(): string
    {
        return $this->Header_PaymentTermsCode;
    }
    /**
     * Set Header_PaymentTermsCode value
     * @param string $header_PaymentTermsCode
     * @return \StructType\Header
     */
    public function setHeader_PaymentTermsCode(string $header_PaymentTermsCode): self
    {
        // validation for constraint: string
        if (!is_null($header_PaymentTermsCode) && !is_string($header_PaymentTermsCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_PaymentTermsCode, true), gettype($header_PaymentTermsCode)), __LINE__);
        }
        $this->Header_PaymentTermsCode = $header_PaymentTermsCode;
        
        return $this;
    }
    /**
     * Get Header_PriceIncludingVAT value
     * @return bool
     */
    public function getHeader_PriceIncludingVAT(): bool
    {
        return $this->Header_PriceIncludingVAT;
    }
    /**
     * Set Header_PriceIncludingVAT value
     * @param bool $header_PriceIncludingVAT
     * @return \StructType\Header
     */
    public function setHeader_PriceIncludingVAT(bool $header_PriceIncludingVAT): self
    {
        // validation for constraint: boolean
        if (!is_null($header_PriceIncludingVAT) && !is_bool($header_PriceIncludingVAT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($header_PriceIncludingVAT, true), gettype($header_PriceIncludingVAT)), __LINE__);
        }
        $this->Header_PriceIncludingVAT = $header_PriceIncludingVAT;
        
        return $this;
    }
    /**
     * Get Header_ShipmentMethodCode value
     * @return string
     */
    public function getHeader_ShipmentMethodCode(): string
    {
        return $this->Header_ShipmentMethodCode;
    }
    /**
     * Set Header_ShipmentMethodCode value
     * @param string $header_ShipmentMethodCode
     * @return \StructType\Header
     */
    public function setHeader_ShipmentMethodCode(string $header_ShipmentMethodCode): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipmentMethodCode) && !is_string($header_ShipmentMethodCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipmentMethodCode, true), gettype($header_ShipmentMethodCode)), __LINE__);
        }
        $this->Header_ShipmentMethodCode = $header_ShipmentMethodCode;
        
        return $this;
    }
    /**
     * Get Header_ShippingAgentCode value
     * @return string
     */
    public function getHeader_ShippingAgentCode(): string
    {
        return $this->Header_ShippingAgentCode;
    }
    /**
     * Set Header_ShippingAgentCode value
     * @param string $header_ShippingAgentCode
     * @return \StructType\Header
     */
    public function setHeader_ShippingAgentCode(string $header_ShippingAgentCode): self
    {
        // validation for constraint: string
        if (!is_null($header_ShippingAgentCode) && !is_string($header_ShippingAgentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShippingAgentCode, true), gettype($header_ShippingAgentCode)), __LINE__);
        }
        $this->Header_ShippingAgentCode = $header_ShippingAgentCode;
        
        return $this;
    }
    /**
     * Get Header_ExternalDocumentNo value
     * @return string
     */
    public function getHeader_ExternalDocumentNo(): string
    {
        return $this->Header_ExternalDocumentNo;
    }
    /**
     * Set Header_ExternalDocumentNo value
     * @param string $header_ExternalDocumentNo
     * @return \StructType\Header
     */
    public function setHeader_ExternalDocumentNo(string $header_ExternalDocumentNo): self
    {
        // validation for constraint: string
        if (!is_null($header_ExternalDocumentNo) && !is_string($header_ExternalDocumentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ExternalDocumentNo, true), gettype($header_ExternalDocumentNo)), __LINE__);
        }
        $this->Header_ExternalDocumentNo = $header_ExternalDocumentNo;
        
        return $this;
    }
    /**
     * Get Header_MontantHT value
     * @return float
     */
    public function getHeader_MontantHT(): float
    {
        return $this->Header_MontantHT;
    }
    /**
     * Set Header_MontantHT value
     * @param float $header_MontantHT
     * @return \StructType\Header
     */
    public function setHeader_MontantHT(float $header_MontantHT): self
    {
        // validation for constraint: float
        if (!is_null($header_MontantHT) && !(is_float($header_MontantHT) || is_numeric($header_MontantHT))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($header_MontantHT, true), gettype($header_MontantHT)), __LINE__);
        }
        $this->Header_MontantHT = $header_MontantHT;
        
        return $this;
    }
    /**
     * Get Header_MontantTTC value
     * @return float
     */
    public function getHeader_MontantTTC(): float
    {
        return $this->Header_MontantTTC;
    }
    /**
     * Set Header_MontantTTC value
     * @param float $header_MontantTTC
     * @return \StructType\Header
     */
    public function setHeader_MontantTTC(float $header_MontantTTC): self
    {
        // validation for constraint: float
        if (!is_null($header_MontantTTC) && !(is_float($header_MontantTTC) || is_numeric($header_MontantTTC))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($header_MontantTTC, true), gettype($header_MontantTTC)), __LINE__);
        }
        $this->Header_MontantTTC = $header_MontantTTC;
        
        return $this;
    }
    /**
     * Get Header_CodeOperation value
     * @return string
     */
    public function getHeader_CodeOperation(): string
    {
        return $this->Header_CodeOperation;
    }
    /**
     * Set Header_CodeOperation value
     * @param string $header_CodeOperation
     * @return \StructType\Header
     */
    public function setHeader_CodeOperation(string $header_CodeOperation): self
    {
        // validation for constraint: string
        if (!is_null($header_CodeOperation) && !is_string($header_CodeOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_CodeOperation, true), gettype($header_CodeOperation)), __LINE__);
        }
        $this->Header_CodeOperation = $header_CodeOperation;
        
        return $this;
    }
    /**
     * Get Header_CodeSousOperation value
     * @return string
     */
    public function getHeader_CodeSousOperation(): string
    {
        return $this->Header_CodeSousOperation;
    }
    /**
     * Set Header_CodeSousOperation value
     * @param string $header_CodeSousOperation
     * @return \StructType\Header
     */
    public function setHeader_CodeSousOperation(string $header_CodeSousOperation): self
    {
        // validation for constraint: string
        if (!is_null($header_CodeSousOperation) && !is_string($header_CodeSousOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_CodeSousOperation, true), gettype($header_CodeSousOperation)), __LINE__);
        }
        $this->Header_CodeSousOperation = $header_CodeSousOperation;
        
        return $this;
    }
    /**
     * Get Lignes value
     * @return \StructType\Lignes[]
     */
    public function getLignes(): array
    {
        return $this->Lignes;
    }
    /**
     * This method is responsible for validating the values passed to the setLignes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLignes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLignesForArrayConstraintsFromSetLignes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $headerLignesItem) {
            // validation for constraint: itemType
            if (!$headerLignesItem instanceof \StructType\Lignes) {
                $invalidValues[] = is_object($headerLignesItem) ? get_class($headerLignesItem) : sprintf('%s(%s)', gettype($headerLignesItem), var_export($headerLignesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Lignes property can only contain items of type \StructType\Lignes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Lignes value
     * @throws InvalidArgumentException
     * @param \StructType\Lignes[] $lignes
     * @return \StructType\Header
     */
    public function setLignes(array $lignes): self
    {
        // validation for constraint: array
        if ('' !== ($lignesArrayErrorMessage = self::validateLignesForArrayConstraintsFromSetLignes($lignes))) {
            throw new InvalidArgumentException($lignesArrayErrorMessage, __LINE__);
        }
        $this->Lignes = $lignes;
        
        return $this;
    }
    /**
     * Add item to Lignes value
     * @throws InvalidArgumentException
     * @param \StructType\Lignes $item
     * @return \StructType\Header
     */
    public function addToLignes(\StructType\Lignes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Lignes) {
            throw new InvalidArgumentException(sprintf('The Lignes property can only contain items of type \StructType\Lignes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Lignes[] = $item;
        
        return $this;
    }
    /**
     * Get Header_ExternalDocNo value
     * @return string
     */
    public function getHeader_ExternalDocNo(): string
    {
        return $this->Header_ExternalDocNo;
    }
    /**
     * Set Header_ExternalDocNo value
     * @param string $header_ExternalDocNo
     * @return \StructType\Header
     */
    public function setHeader_ExternalDocNo(string $header_ExternalDocNo): self
    {
        // validation for constraint: string
        if (!is_null($header_ExternalDocNo) && !is_string($header_ExternalDocNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ExternalDocNo, true), gettype($header_ExternalDocNo)), __LINE__);
        }
        $this->Header_ExternalDocNo = $header_ExternalDocNo;
        
        return $this;
    }
    /**
     * Get Header_ShipmentDate value
     * @return string
     */
    public function getHeader_ShipmentDate(): string
    {
        return $this->Header_ShipmentDate;
    }
    /**
     * Set Header_ShipmentDate value
     * @param string $header_ShipmentDate
     * @return \StructType\Header
     */
    public function setHeader_ShipmentDate(string $header_ShipmentDate): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipmentDate) && !is_string($header_ShipmentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipmentDate, true), gettype($header_ShipmentDate)), __LINE__);
        }
        $this->Header_ShipmentDate = $header_ShipmentDate;
        
        return $this;
    }
    /**
     * Get Header_billToNo value
     * @return string
     */
    public function getHeader_billToNo_2(): string
    {
        return $this->Header_billToNo;
    }
    /**
     * Set Header_billToNo value
     * @param string $header_billToNo
     * @return \StructType\Header
     */
    public function setHeader_billToNo_2(string $header_billToNo_2): self
    {
        // validation for constraint: string
        if (!is_null($header_billToNo_2) && !is_string($header_billToNo_2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_billToNo_2, true), gettype($header_billToNo_2)), __LINE__);
        }
        $this->Header_billToNo = $header_billToNo_2;
        
        return $this;
    }
    /**
     * Get Header_ShipToCode value
     * @return string
     */
    public function getHeader_ShipToCode(): string
    {
        return $this->Header_ShipToCode;
    }
    /**
     * Set Header_ShipToCode value
     * @param string $header_ShipToCode
     * @return \StructType\Header
     */
    public function setHeader_ShipToCode(string $header_ShipToCode): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToCode) && !is_string($header_ShipToCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToCode, true), gettype($header_ShipToCode)), __LINE__);
        }
        $this->Header_ShipToCode = $header_ShipToCode;
        
        return $this;
    }
    /**
     * Get Header_ShipToCountry value
     * @return string
     */
    public function getHeader_ShipToCountry(): string
    {
        return $this->Header_ShipToCountry;
    }
    /**
     * Set Header_ShipToCountry value
     * @param string $header_ShipToCountry
     * @return \StructType\Header
     */
    public function setHeader_ShipToCountry(string $header_ShipToCountry): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipToCountry) && !is_string($header_ShipToCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipToCountry, true), gettype($header_ShipToCountry)), __LINE__);
        }
        $this->Header_ShipToCountry = $header_ShipToCountry;
        
        return $this;
    }
    /**
     * Get Header_SousOperation value
     * @return string
     */
    public function getHeader_SousOperation(): string
    {
        return $this->Header_SousOperation;
    }
    /**
     * Set Header_SousOperation value
     * @param string $header_SousOperation
     * @return \StructType\Header
     */
    public function setHeader_SousOperation(string $header_SousOperation): self
    {
        // validation for constraint: string
        if (!is_null($header_SousOperation) && !is_string($header_SousOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SousOperation, true), gettype($header_SousOperation)), __LINE__);
        }
        $this->Header_SousOperation = $header_SousOperation;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\Header
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get NoCommande value
     * @return string|null
     */
    public function getNoCommande(): ?string
    {
        return $this->NoCommande;
    }
    /**
     * Set NoCommande value
     * @param string $noCommande
     * @return \StructType\Header
     */
    public function setNoCommande(?string $noCommande = null): self
    {
        // validation for constraint: string
        if (!is_null($noCommande) && !is_string($noCommande)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noCommande, true), gettype($noCommande)), __LINE__);
        }
        $this->NoCommande = $noCommande;
        
        return $this;
    }
    /**
     * Get DateCreation value
     * @return string|null
     */
    public function getDateCreation(): ?string
    {
        return $this->DateCreation;
    }
    /**
     * Set DateCreation value
     * @param string $dateCreation
     * @return \StructType\Header
     */
    public function setDateCreation(?string $dateCreation = null): self
    {
        // validation for constraint: string
        if (!is_null($dateCreation) && !is_string($dateCreation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreation, true), gettype($dateCreation)), __LINE__);
        }
        $this->DateCreation = $dateCreation;
        
        return $this;
    }
    /**
     * Get Header_SellToName value
     * @return string|null
     */
    public function getHeader_SellToName(): ?string
    {
        return $this->Header_SellToName;
    }
    /**
     * Set Header_SellToName value
     * @param string $header_SellToName
     * @return \StructType\Header
     */
    public function setHeader_SellToName(?string $header_SellToName = null): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToName) && !is_string($header_SellToName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToName, true), gettype($header_SellToName)), __LINE__);
        }
        $this->Header_SellToName = $header_SellToName;
        
        return $this;
    }
    /**
     * Get Header_SellToAdress value
     * @return string|null
     */
    public function getHeader_SellToAdress(): ?string
    {
        return $this->Header_SellToAdress;
    }
    /**
     * Set Header_SellToAdress value
     * @param string $header_SellToAdress
     * @return \StructType\Header
     */
    public function setHeader_SellToAdress(?string $header_SellToAdress = null): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToAdress) && !is_string($header_SellToAdress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToAdress, true), gettype($header_SellToAdress)), __LINE__);
        }
        $this->Header_SellToAdress = $header_SellToAdress;
        
        return $this;
    }
    /**
     * Get Header_SellToAdress2 value
     * @return string|null
     */
    public function getHeader_SellToAdress2(): ?string
    {
        return $this->Header_SellToAdress2;
    }
    /**
     * Set Header_SellToAdress2 value
     * @param string $header_SellToAdress2
     * @return \StructType\Header
     */
    public function setHeader_SellToAdress2(?string $header_SellToAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToAdress2) && !is_string($header_SellToAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToAdress2, true), gettype($header_SellToAdress2)), __LINE__);
        }
        $this->Header_SellToAdress2 = $header_SellToAdress2;
        
        return $this;
    }
    /**
     * Get Header_SellToCity value
     * @return string|null
     */
    public function getHeader_SellToCity(): ?string
    {
        return $this->Header_SellToCity;
    }
    /**
     * Set Header_SellToCity value
     * @param string $header_SellToCity
     * @return \StructType\Header
     */
    public function setHeader_SellToCity(?string $header_SellToCity = null): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCity) && !is_string($header_SellToCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCity, true), gettype($header_SellToCity)), __LINE__);
        }
        $this->Header_SellToCity = $header_SellToCity;
        
        return $this;
    }
    /**
     * Get Header_SellToPostCode value
     * @return string|null
     */
    public function getHeader_SellToPostCode(): ?string
    {
        return $this->Header_SellToPostCode;
    }
    /**
     * Set Header_SellToPostCode value
     * @param string $header_SellToPostCode
     * @return \StructType\Header
     */
    public function setHeader_SellToPostCode(?string $header_SellToPostCode = null): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToPostCode) && !is_string($header_SellToPostCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToPostCode, true), gettype($header_SellToPostCode)), __LINE__);
        }
        $this->Header_SellToPostCode = $header_SellToPostCode;
        
        return $this;
    }
    /**
     * Get Header_SellToCountryRegion value
     * @return string|null
     */
    public function getHeader_SellToCountryRegion(): ?string
    {
        return $this->Header_SellToCountryRegion;
    }
    /**
     * Set Header_SellToCountryRegion value
     * @param string $header_SellToCountryRegion
     * @return \StructType\Header
     */
    public function setHeader_SellToCountryRegion(?string $header_SellToCountryRegion = null): self
    {
        // validation for constraint: string
        if (!is_null($header_SellToCountryRegion) && !is_string($header_SellToCountryRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_SellToCountryRegion, true), gettype($header_SellToCountryRegion)), __LINE__);
        }
        $this->Header_SellToCountryRegion = $header_SellToCountryRegion;
        
        return $this;
    }
    /**
     * Get Header_BillToDestinataire value
     * @return string|null
     */
    public function getHeader_BillToDestinataire(): ?string
    {
        return $this->Header_BillToDestinataire;
    }
    /**
     * Set Header_BillToDestinataire value
     * @param string $header_BillToDestinataire
     * @return \StructType\Header
     */
    public function setHeader_BillToDestinataire(?string $header_BillToDestinataire = null): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToDestinataire) && !is_string($header_BillToDestinataire)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToDestinataire, true), gettype($header_BillToDestinataire)), __LINE__);
        }
        $this->Header_BillToDestinataire = $header_BillToDestinataire;
        
        return $this;
    }
    /**
     * Get Header_BillToName value
     * @return string|null
     */
    public function getHeader_BillToName_1(): ?string
    {
        return $this->Header_BillToName;
    }
    /**
     * Set Header_BillToName value
     * @param string $header_BillToName
     * @return \StructType\Header
     */
    public function setHeader_BillToName_1(?string $header_BillToName_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToName_1) && !is_string($header_BillToName_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToName_1, true), gettype($header_BillToName_1)), __LINE__);
        }
        $this->Header_BillToName = $header_BillToName_1;
        
        return $this;
    }
    /**
     * Get Header_BillToAdress value
     * @return string|null
     */
    public function getHeader_BillToAdress(): ?string
    {
        return $this->Header_BillToAdress;
    }
    /**
     * Set Header_BillToAdress value
     * @param string $header_BillToAdress
     * @return \StructType\Header
     */
    public function setHeader_BillToAdress(?string $header_BillToAdress = null): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToAdress) && !is_string($header_BillToAdress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToAdress, true), gettype($header_BillToAdress)), __LINE__);
        }
        $this->Header_BillToAdress = $header_BillToAdress;
        
        return $this;
    }
    /**
     * Get Header_BillToAdress2 value
     * @return string|null
     */
    public function getHeader_BillToAdress2(): ?string
    {
        return $this->Header_BillToAdress2;
    }
    /**
     * Set Header_BillToAdress2 value
     * @param string $header_BillToAdress2
     * @return \StructType\Header
     */
    public function setHeader_BillToAdress2(?string $header_BillToAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($header_BillToAdress2) && !is_string($header_BillToAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_BillToAdress2, true), gettype($header_BillToAdress2)), __LINE__);
        }
        $this->Header_BillToAdress2 = $header_BillToAdress2;
        
        return $this;
    }
    /**
     * Get Header_PaymentMethod value
     * @return string|null
     */
    public function getHeader_PaymentMethod(): ?string
    {
        return $this->Header_PaymentMethod;
    }
    /**
     * Set Header_PaymentMethod value
     * @param string $header_PaymentMethod
     * @return \StructType\Header
     */
    public function setHeader_PaymentMethod(?string $header_PaymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($header_PaymentMethod) && !is_string($header_PaymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_PaymentMethod, true), gettype($header_PaymentMethod)), __LINE__);
        }
        $this->Header_PaymentMethod = $header_PaymentMethod;
        
        return $this;
    }
    /**
     * Get Header_PaymentTerms value
     * @return string|null
     */
    public function getHeader_PaymentTerms(): ?string
    {
        return $this->Header_PaymentTerms;
    }
    /**
     * Set Header_PaymentTerms value
     * @param string $header_PaymentTerms
     * @return \StructType\Header
     */
    public function setHeader_PaymentTerms(?string $header_PaymentTerms = null): self
    {
        // validation for constraint: string
        if (!is_null($header_PaymentTerms) && !is_string($header_PaymentTerms)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_PaymentTerms, true), gettype($header_PaymentTerms)), __LINE__);
        }
        $this->Header_PaymentTerms = $header_PaymentTerms;
        
        return $this;
    }
    /**
     * Get Header_PricesIncludingVAT value
     * @return bool|null
     */
    public function getHeader_PricesIncludingVAT(): ?bool
    {
        return $this->Header_PricesIncludingVAT;
    }
    /**
     * Set Header_PricesIncludingVAT value
     * @param bool $header_PricesIncludingVAT
     * @return \StructType\Header
     */
    public function setHeader_PricesIncludingVAT(?bool $header_PricesIncludingVAT = false): self
    {
        // validation for constraint: boolean
        if (!is_null($header_PricesIncludingVAT) && !is_bool($header_PricesIncludingVAT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($header_PricesIncludingVAT, true), gettype($header_PricesIncludingVAT)), __LINE__);
        }
        $this->Header_PricesIncludingVAT = $header_PricesIncludingVAT;
        
        return $this;
    }
    /**
     * Get CodePromotion value
     * @return string|null
     */
    public function getCodePromotion(): ?string
    {
        return $this->CodePromotion;
    }
    /**
     * Set CodePromotion value
     * @param string $codePromotion
     * @return \StructType\Header
     */
    public function setCodePromotion(?string $codePromotion = null): self
    {
        // validation for constraint: string
        if (!is_null($codePromotion) && !is_string($codePromotion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePromotion, true), gettype($codePromotion)), __LINE__);
        }
        $this->CodePromotion = $codePromotion;
        
        return $this;
    }
    /**
     * Get Header_ShipmentMethod value
     * @return string[]
     */
    public function getHeader_ShipmentMethod(): ?array
    {
        return $this->Header_ShipmentMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setHeader_ShipmentMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHeader_ShipmentMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHeader_ShipmentMethodForArrayConstraintsFromSetHeader_ShipmentMethod(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $headerHeader_ShipmentMethodItem) {
            // validation for constraint: itemType
            if (!is_string($headerHeader_ShipmentMethodItem)) {
                $invalidValues[] = is_object($headerHeader_ShipmentMethodItem) ? get_class($headerHeader_ShipmentMethodItem) : sprintf('%s(%s)', gettype($headerHeader_ShipmentMethodItem), var_export($headerHeader_ShipmentMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Header_ShipmentMethod property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Header_ShipmentMethod value
     * @throws InvalidArgumentException
     * @param string[] $header_ShipmentMethod
     * @return \StructType\Header
     */
    public function setHeader_ShipmentMethod(?array $header_ShipmentMethod = null): self
    {
        // validation for constraint: array
        if ('' !== ($header_ShipmentMethodArrayErrorMessage = self::validateHeader_ShipmentMethodForArrayConstraintsFromSetHeader_ShipmentMethod($header_ShipmentMethod))) {
            throw new InvalidArgumentException($header_ShipmentMethodArrayErrorMessage, __LINE__);
        }
        $this->Header_ShipmentMethod = $header_ShipmentMethod;
        
        return $this;
    }
    /**
     * Add item to Header_ShipmentMethod value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Header
     */
    public function addToHeader_ShipmentMethod(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Header_ShipmentMethod property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Header_ShipmentMethod[] = $item;
        
        return $this;
    }
    /**
     * Get Header_ShipAgent value
     * @return string|null
     */
    public function getHeader_ShipAgent(): ?string
    {
        return $this->Header_ShipAgent;
    }
    /**
     * Set Header_ShipAgent value
     * @param string $header_ShipAgent
     * @return \StructType\Header
     */
    public function setHeader_ShipAgent(?string $header_ShipAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipAgent) && !is_string($header_ShipAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipAgent, true), gettype($header_ShipAgent)), __LINE__);
        }
        $this->Header_ShipAgent = $header_ShipAgent;
        
        return $this;
    }
    /**
     * Get Header_ShipTime value
     * @return string|null
     */
    public function getHeader_ShipTime(): ?string
    {
        return $this->Header_ShipTime;
    }
    /**
     * Set Header_ShipTime value
     * @param string $header_ShipTime
     * @return \StructType\Header
     */
    public function setHeader_ShipTime(?string $header_ShipTime = null): self
    {
        // validation for constraint: string
        if (!is_null($header_ShipTime) && !is_string($header_ShipTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ShipTime, true), gettype($header_ShipTime)), __LINE__);
        }
        $this->Header_ShipTime = $header_ShipTime;
        
        return $this;
    }
    /**
     * Get IdWebClient value
     * @return string|null
     */
    public function getIdWebClient(): ?string
    {
        return $this->IdWebClient;
    }
    /**
     * Set IdWebClient value
     * @param string $idWebClient
     * @return \StructType\Header
     */
    public function setIdWebClient(?string $idWebClient = null): self
    {
        // validation for constraint: string
        if (!is_null($idWebClient) && !is_string($idWebClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idWebClient, true), gettype($idWebClient)), __LINE__);
        }
        $this->IdWebClient = $idWebClient;
        
        return $this;
    }
    /**
     * Get Header_ExternalDoc value
     * @return string|null
     */
    public function getHeader_ExternalDoc(): ?string
    {
        return $this->Header_ExternalDoc;
    }
    /**
     * Set Header_ExternalDoc value
     * @param string $header_ExternalDoc
     * @return \StructType\Header
     */
    public function setHeader_ExternalDoc(?string $header_ExternalDoc = null): self
    {
        // validation for constraint: string
        if (!is_null($header_ExternalDoc) && !is_string($header_ExternalDoc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_ExternalDoc, true), gettype($header_ExternalDoc)), __LINE__);
        }
        $this->Header_ExternalDoc = $header_ExternalDoc;
        
        return $this;
    }
    /**
     * Get MontantHT value
     * @return string|null
     */
    public function getMontantHT(): ?string
    {
        return $this->MontantHT;
    }
    /**
     * Set MontantHT value
     * @param string $montantHT
     * @return \StructType\Header
     */
    public function setMontantHT(?string $montantHT = null): self
    {
        // validation for constraint: string
        if (!is_null($montantHT) && !is_string($montantHT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($montantHT, true), gettype($montantHT)), __LINE__);
        }
        $this->MontantHT = $montantHT;
        
        return $this;
    }
    /**
     * Get MontantTTC value
     * @return string|null
     */
    public function getMontantTTC(): ?string
    {
        return $this->MontantTTC;
    }
    /**
     * Set MontantTTC value
     * @param string $montantTTC
     * @return \StructType\Header
     */
    public function setMontantTTC(?string $montantTTC = null): self
    {
        // validation for constraint: string
        if (!is_null($montantTTC) && !is_string($montantTTC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($montantTTC, true), gettype($montantTTC)), __LINE__);
        }
        $this->MontantTTC = $montantTTC;
        
        return $this;
    }
    /**
     * Get CodeOperation value
     * @return string|null
     */
    public function getCodeOperation(): ?string
    {
        return $this->CodeOperation;
    }
    /**
     * Set CodeOperation value
     * @param string $codeOperation
     * @return \StructType\Header
     */
    public function setCodeOperation(?string $codeOperation = null): self
    {
        // validation for constraint: string
        if (!is_null($codeOperation) && !is_string($codeOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeOperation, true), gettype($codeOperation)), __LINE__);
        }
        $this->CodeOperation = $codeOperation;
        
        return $this;
    }
    /**
     * Get CodeSousOperation value
     * @return string|null
     */
    public function getCodeSousOperation(): ?string
    {
        return $this->CodeSousOperation;
    }
    /**
     * Set CodeSousOperation value
     * @param string $codeSousOperation
     * @return \StructType\Header
     */
    public function setCodeSousOperation(?string $codeSousOperation = null): self
    {
        // validation for constraint: string
        if (!is_null($codeSousOperation) && !is_string($codeSousOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeSousOperation, true), gettype($codeSousOperation)), __LINE__);
        }
        $this->CodeSousOperation = $codeSousOperation;
        
        return $this;
    }
}
