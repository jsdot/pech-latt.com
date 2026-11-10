<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailPostesStock StructType
 * @subpackage Structs
 */
class DetailPostesStock extends AbstractStructBase
{
    /**
     * The DetailPostesStock_TypeOrdre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_TypeOrdre;
    /**
     * The DetailPostesStock_TypeDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_TypeDocument;
    /**
     * The DetailPostesStock_NumDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumDocument;
    /**
     * The DetailPostesStock_NumDonneurDOrdre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumDonneurDOrdre;
    /**
     * The DetailPostesStock_NomDonneurDOrdre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NomDonneurDOrdre;
    /**
     * The DetailPostesStock_ReferenceExterne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_ReferenceExterne;
    /**
     * The DetailPostesStock_VotreReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_VotreReference;
    /**
     * The DetailPostesStock_NumLigne
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $DetailPostesStock_NumLigne;
    /**
     * The DetailPostesStock_TypeArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_TypeArticle;
    /**
     * The DetailPostesStock_NumArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumArticle;
    /**
     * The DetailPostesStock_DescriptionArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DescriptionArticle;
    /**
     * The DetailPostesStock_Description2Article
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Description2Article;
    /**
     * The DetailPostesStock_MontantTTC
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_MontantTTC;
    /**
     * The DetailPostesStock_CodeMagasin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeMagasin;
    /**
     * The DetailPostesStock_CodeUnite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeUnite;
    /**
     * The DetailPostesStock_Conditionnement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Conditionnement;
    /**
     * The DetailPostesStock_Reserve
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Reserve;
    /**
     * The DetailPostesStock_Quantite
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_Quantite;
    /**
     * The DetailPostesStock_QuantiteRestante
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantiteRestante;
    /**
     * The DetailPostesStock_QteExpediee
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QteExpediee;
    /**
     * The DetailPostesStock_QteAExpedier
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QteAExpedier;
    /**
     * The DetailPostesStock_DateLivraisonDemandee
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateLivraisonDemandee;
    /**
     * The DetailPostesStock_DateLivraisonConfirmee
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateLivraisonConfirmee;
    /**
     * The DetailPostesStock_QuantiteReserveeBase
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantiteReserveeBase;
    /**
     * The DetailPostesStock_MontantLigne
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_MontantLigne;
    /**
     * The DetailPostesStock_CodeRaccourciAxe1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe1;
    /**
     * The DetailPostesStock_CodeRaccourciAxe2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe2;
    /**
     * The DetailPostesStock_CodeRaccourciAxe3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe3;
    /**
     * The DetailPostesStock_CodeRaccourciAxe4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe4;
    /**
     * The DetailPostesStock_CodeRaccourciAxe5
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe5;
    /**
     * The DetailPostesStock_CodeRaccourciAxe6
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe6;
    /**
     * The DetailPostesStock_CodeRaccourciAxe7
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe7;
    /**
     * The DetailPostesStock_CodeRaccourciAxe8
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeRaccourciAxe8;
    /**
     * The DetailPostesStock_DatePreparation
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DatePreparation;
    /**
     * The DetailPostesStock_VolumeUniteVrac
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_VolumeUniteVrac;
    /**
     * The DetailPostesStock_NumFournisseur
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumFournisseur;
    /**
     * The DetailPostesStock_CoutUnitaireDirect
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_CoutUnitaireDirect;
    /**
     * The DetailPostesStock_CoutUnitaireDS
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_CoutUnitaireDS;
    /**
     * The DetailPostesStock_PrixUnitaireDS
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_PrixUnitaireDS;
    /**
     * The DetailPostesStock_DateReceptionPrevue
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateReceptionPrevue;
    /**
     * The DetailPostesStock_MontantEnCommandeDS
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_MontantEnCommandeDS;
    /**
     * The DetailPostesStock_MontantRecuNonFactDS
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_MontantRecuNonFactDS;
    /**
     * The DetailPostesStock_NumReserve
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumReserve;
    /**
     * The DetailPostesStock_ReserveOrigine
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $DetailPostesStock_ReserveOrigine;
    /**
     * The DetailPostesStock_DateCommande
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateCommande;
    /**
     * The DetailPostesStock_DateExpiration
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateExpiration;
    /**
     * The DetailPostesStock_PrixUnitaire
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_PrixUnitaire;
    /**
     * The DetailPostesStock_Statut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Statut;
    /**
     * The DetailPostesStock_DateDerniereModif
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateDerniereModif;
    /**
     * The DetailPostesStock_PosteStock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_PosteStock;
    /**
     * The DetailPostesStock_Millesime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Millesime;
    /**
     * The DetailPostesStock_QuantiteATraiter
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantiteATraiter;
    /**
     * The DetailPostesStock_QuantiteSurCommandesEnCours
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantiteSurCommandesEnCours;
    /**
     * The DetailPostesStock_NumOrdreFabrication
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumOrdreFabrication;
    /**
     * The DetailPostesStock_UniteExpedition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_UniteExpedition;
    /**
     * The DetailPostesStock_NumGamme
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumGamme;
    /**
     * The DetailPostesStock_QuantiteRealisee
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantiteRealisee;
    /**
     * The DetailPostesStock_PourcentPerte
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_PourcentPerte;
    /**
     * The DetailPostesStock_Delai
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Delai;
    /**
     * The DetailPostesStock_DateDebut
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateDebut;
    /**
     * The DetailPostesStock_HeureDebut
     * Meta information extracted from the WSDL
     * - default: 00:00:00
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_HeureDebut;
    /**
     * The DetailPostesStock_DateFin
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateFin;
    /**
     * The DetailPostesStock_HeureFin
     * Meta information extracted from the WSDL
     * - default: 00:00:00
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_HeureFin;
    /**
     * The DetailPostesStock_NumNomenclatureProduc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_NumNomenclatureProduc;
    /**
     * The DetailPostesStock_CoutUnitaire
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_CoutUnitaire;
    /**
     * The DetailPostesStock_CoutTotal
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_CoutTotal;
    /**
     * The DetailPostesStock_NumLigneOF
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $DetailPostesStock_NumLigneOF;
    /**
     * The DetailPostesStock_QuantitePar
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantitePar;
    /**
     * The DetailPostesStock_QuantitePrevue
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantitePrevue;
    /**
     * The DetailPostesStock_Position
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Position;
    /**
     * The DetailPostesStock_Position2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Position2;
    /**
     * The DetailPostesStock_Position3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_Position3;
    /**
     * The DetailPostesStock_DélaiDecalage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DélaiDecalage;
    /**
     * The DetailPostesStock_DateExpedition
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateExpedition;
    /**
     * The DetailPostesStock_QuantiteEnTransit
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $DetailPostesStock_QuantiteEnTransit;
    /**
     * The DetailPostesStock_DateReception
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateReception;
    /**
     * The DetailPostesStock_DateEnlevement
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_DateEnlevement;
    /**
     * The DetailPostesStock_Enlevement
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $DetailPostesStock_Enlevement;
    /**
     * The DetailPostesStock_CodeOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodeOperation;
    /**
     * The DetailPostesStock_CodSouseOperation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DetailPostesStock_CodSouseOperation;
    /**
     * The EtatRupturePFMS_GUID_Traitement
     * Meta information extracted from the WSDL
     * - default: {00000000-0000-0000-0000-000000000000}
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_GUID_Traitement;
    /**
     * The EtatRupturePFMS_Traitement_Ligne
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $EtatRupturePFMS_Traitement_Ligne;
    /**
     * The EtatRupturePFMS_CompanyName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_CompanyName;
    /**
     * The EtatRupturePFMS_EntryNo
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $EtatRupturePFMS_EntryNo;
    /**
     * The EtatRupturePFMS_ItemNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_ItemNo;
    /**
     * The EtatRupturePFMS_Date
     * Meta information extracted from the WSDL
     * - default: 0001-01-01
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_Date;
    /**
     * The EtatRupturePFMS_LocationCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_LocationCode;
    /**
     * The EtatRupturePFMS_SourceNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_SourceNo;
    /**
     * The EtatRupturePFMS_Event
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_Event;
    /**
     * The EtatRupturePFMS_Designation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_Designation;
    /**
     * The EtatRupturePFMS_InventoryStock
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_InventoryStock;
    /**
     * The EtatRupturePFMS_AvailableStock
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_AvailableStock;
    /**
     * The EtatRupturePFMS_SafetyStockQuantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_SafetyStockQuantity;
    /**
     * The EtatRupturePFMS_ReorderPoint
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_ReorderPoint;
    /**
     * The EtatRupturePFMS_SalesQuantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_SalesQuantity;
    /**
     * The EtatRupturePFMS_PurchaseQuantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_PurchaseQuantity;
    /**
     * The EtatRupturePFMS_ProductionOrderQuantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_ProductionOrderQuantity;
    /**
     * The EtatRupturePFMS_User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_User;
    /**
     * The EtatRupturePFMS_EntryType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_EntryType;
    /**
     * The EtatRupturePFMS_InitialStock
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_InitialStock;
    /**
     * The EtatRupturePFMS_RemainingStock
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_RemainingStock;
    /**
     * The EtatRupturePFMS_MissingStock
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_MissingStock;
    /**
     * The EtatRupturePFMS_BinCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_BinCode;
    /**
     * The EtatRupturePFMS_BudgetQuantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_BudgetQuantity;
    /**
     * The EtatRupturePFMS_RoutingNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_RoutingNo;
    /**
     * The EtatRupturePFMS_SalesOrderNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_SalesOrderNo;
    /**
     * The EtatRupturePFMS_Sens
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_Sens;
    /**
     * The EtatRupturePFMS_LineNo
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $EtatRupturePFMS_LineNo;
    /**
     * The EtatRupturePFMS_Status
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $EtatRupturePFMS_Status;
    /**
     * The EtatRupturePFMS_TransferredQuantity
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_TransferredQuantity;
    /**
     * The EtatRupturePFMS_SourceLineNo
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $EtatRupturePFMS_SourceLineNo;
    /**
     * The EtatRupturePFMS_FinishedQtyOnProdOrder
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $EtatRupturePFMS_FinishedQtyOnProdOrder;
    /**
     * The EtatRupturePFMS_ReplacementItemNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_ReplacementItemNo;
    /**
     * The EtatRupturePFMS_ItemEndOfLife
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EtatRupturePFMS_ItemEndOfLife;
    /**
     * Constructor method for DetailPostesStock
     * @uses DetailPostesStock::setDetailPostesStock_TypeOrdre()
     * @uses DetailPostesStock::setDetailPostesStock_TypeDocument()
     * @uses DetailPostesStock::setDetailPostesStock_NumDocument()
     * @uses DetailPostesStock::setDetailPostesStock_NumDonneurDOrdre()
     * @uses DetailPostesStock::setDetailPostesStock_NomDonneurDOrdre()
     * @uses DetailPostesStock::setDetailPostesStock_ReferenceExterne()
     * @uses DetailPostesStock::setDetailPostesStock_VotreReference()
     * @uses DetailPostesStock::setDetailPostesStock_NumLigne()
     * @uses DetailPostesStock::setDetailPostesStock_TypeArticle()
     * @uses DetailPostesStock::setDetailPostesStock_NumArticle()
     * @uses DetailPostesStock::setDetailPostesStock_DescriptionArticle()
     * @uses DetailPostesStock::setDetailPostesStock_Description2Article()
     * @uses DetailPostesStock::setDetailPostesStock_MontantTTC()
     * @uses DetailPostesStock::setDetailPostesStock_CodeMagasin()
     * @uses DetailPostesStock::setDetailPostesStock_CodeUnite()
     * @uses DetailPostesStock::setDetailPostesStock_Conditionnement()
     * @uses DetailPostesStock::setDetailPostesStock_Reserve()
     * @uses DetailPostesStock::setDetailPostesStock_Quantite()
     * @uses DetailPostesStock::setDetailPostesStock_QuantiteRestante()
     * @uses DetailPostesStock::setDetailPostesStock_QteExpediee()
     * @uses DetailPostesStock::setDetailPostesStock_QteAExpedier()
     * @uses DetailPostesStock::setDetailPostesStock_DateLivraisonDemandee()
     * @uses DetailPostesStock::setDetailPostesStock_DateLivraisonConfirmee()
     * @uses DetailPostesStock::setDetailPostesStock_QuantiteReserveeBase()
     * @uses DetailPostesStock::setDetailPostesStock_MontantLigne()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe1()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe2()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe3()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe4()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe5()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe6()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe7()
     * @uses DetailPostesStock::setDetailPostesStock_CodeRaccourciAxe8()
     * @uses DetailPostesStock::setDetailPostesStock_DatePreparation()
     * @uses DetailPostesStock::setDetailPostesStock_VolumeUniteVrac()
     * @uses DetailPostesStock::setDetailPostesStock_NumFournisseur()
     * @uses DetailPostesStock::setDetailPostesStock_CoutUnitaireDirect()
     * @uses DetailPostesStock::setDetailPostesStock_CoutUnitaireDS()
     * @uses DetailPostesStock::setDetailPostesStock_PrixUnitaireDS()
     * @uses DetailPostesStock::setDetailPostesStock_DateReceptionPrevue()
     * @uses DetailPostesStock::setDetailPostesStock_MontantEnCommandeDS()
     * @uses DetailPostesStock::setDetailPostesStock_MontantRecuNonFactDS()
     * @uses DetailPostesStock::setDetailPostesStock_NumReserve()
     * @uses DetailPostesStock::setDetailPostesStock_ReserveOrigine()
     * @uses DetailPostesStock::setDetailPostesStock_DateCommande()
     * @uses DetailPostesStock::setDetailPostesStock_DateExpiration()
     * @uses DetailPostesStock::setDetailPostesStock_PrixUnitaire()
     * @uses DetailPostesStock::setDetailPostesStock_Statut()
     * @uses DetailPostesStock::setDetailPostesStock_DateDerniereModif()
     * @uses DetailPostesStock::setDetailPostesStock_PosteStock()
     * @uses DetailPostesStock::setDetailPostesStock_Millesime()
     * @uses DetailPostesStock::setDetailPostesStock_QuantiteATraiter()
     * @uses DetailPostesStock::setDetailPostesStock_QuantiteSurCommandesEnCours()
     * @uses DetailPostesStock::setDetailPostesStock_NumOrdreFabrication()
     * @uses DetailPostesStock::setDetailPostesStock_UniteExpedition()
     * @uses DetailPostesStock::setDetailPostesStock_NumGamme()
     * @uses DetailPostesStock::setDetailPostesStock_QuantiteRealisee()
     * @uses DetailPostesStock::setDetailPostesStock_PourcentPerte()
     * @uses DetailPostesStock::setDetailPostesStock_Delai()
     * @uses DetailPostesStock::setDetailPostesStock_DateDebut()
     * @uses DetailPostesStock::setDetailPostesStock_HeureDebut()
     * @uses DetailPostesStock::setDetailPostesStock_DateFin()
     * @uses DetailPostesStock::setDetailPostesStock_HeureFin()
     * @uses DetailPostesStock::setDetailPostesStock_NumNomenclatureProduc()
     * @uses DetailPostesStock::setDetailPostesStock_CoutUnitaire()
     * @uses DetailPostesStock::setDetailPostesStock_CoutTotal()
     * @uses DetailPostesStock::setDetailPostesStock_NumLigneOF()
     * @uses DetailPostesStock::setDetailPostesStock_QuantitePar()
     * @uses DetailPostesStock::setDetailPostesStock_QuantitePrevue()
     * @uses DetailPostesStock::setDetailPostesStock_Position()
     * @uses DetailPostesStock::setDetailPostesStock_Position2()
     * @uses DetailPostesStock::setDetailPostesStock_Position3()
     * @uses DetailPostesStock::setDetailPostesStock_DélaiDecalage()
     * @uses DetailPostesStock::setDetailPostesStock_DateExpedition()
     * @uses DetailPostesStock::setDetailPostesStock_QuantiteEnTransit()
     * @uses DetailPostesStock::setDetailPostesStock_DateReception()
     * @uses DetailPostesStock::setDetailPostesStock_DateEnlevement()
     * @uses DetailPostesStock::setDetailPostesStock_Enlevement()
     * @uses DetailPostesStock::setDetailPostesStock_CodeOperation()
     * @uses DetailPostesStock::setDetailPostesStock_CodSouseOperation()
     * @uses DetailPostesStock::setEtatRupturePFMS_GUID_Traitement()
     * @uses DetailPostesStock::setEtatRupturePFMS_Traitement_Ligne()
     * @uses DetailPostesStock::setEtatRupturePFMS_CompanyName()
     * @uses DetailPostesStock::setEtatRupturePFMS_EntryNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_ItemNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_Date()
     * @uses DetailPostesStock::setEtatRupturePFMS_LocationCode()
     * @uses DetailPostesStock::setEtatRupturePFMS_SourceNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_Event()
     * @uses DetailPostesStock::setEtatRupturePFMS_Designation()
     * @uses DetailPostesStock::setEtatRupturePFMS_InventoryStock()
     * @uses DetailPostesStock::setEtatRupturePFMS_AvailableStock()
     * @uses DetailPostesStock::setEtatRupturePFMS_SafetyStockQuantity()
     * @uses DetailPostesStock::setEtatRupturePFMS_ReorderPoint()
     * @uses DetailPostesStock::setEtatRupturePFMS_SalesQuantity()
     * @uses DetailPostesStock::setEtatRupturePFMS_PurchaseQuantity()
     * @uses DetailPostesStock::setEtatRupturePFMS_ProductionOrderQuantity()
     * @uses DetailPostesStock::setEtatRupturePFMS_User()
     * @uses DetailPostesStock::setEtatRupturePFMS_EntryType()
     * @uses DetailPostesStock::setEtatRupturePFMS_InitialStock()
     * @uses DetailPostesStock::setEtatRupturePFMS_RemainingStock()
     * @uses DetailPostesStock::setEtatRupturePFMS_MissingStock()
     * @uses DetailPostesStock::setEtatRupturePFMS_BinCode()
     * @uses DetailPostesStock::setEtatRupturePFMS_BudgetQuantity()
     * @uses DetailPostesStock::setEtatRupturePFMS_RoutingNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_SalesOrderNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_Sens()
     * @uses DetailPostesStock::setEtatRupturePFMS_LineNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_Status()
     * @uses DetailPostesStock::setEtatRupturePFMS_TransferredQuantity()
     * @uses DetailPostesStock::setEtatRupturePFMS_SourceLineNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_FinishedQtyOnProdOrder()
     * @uses DetailPostesStock::setEtatRupturePFMS_ReplacementItemNo()
     * @uses DetailPostesStock::setEtatRupturePFMS_ItemEndOfLife()
     * @param string $detailPostesStock_TypeOrdre
     * @param string $detailPostesStock_TypeDocument
     * @param string $detailPostesStock_NumDocument
     * @param string $detailPostesStock_NumDonneurDOrdre
     * @param string $detailPostesStock_NomDonneurDOrdre
     * @param string $detailPostesStock_ReferenceExterne
     * @param string $detailPostesStock_VotreReference
     * @param int $detailPostesStock_NumLigne
     * @param string $detailPostesStock_TypeArticle
     * @param string $detailPostesStock_NumArticle
     * @param string $detailPostesStock_DescriptionArticle
     * @param string $detailPostesStock_Description2Article
     * @param float $detailPostesStock_MontantTTC
     * @param string $detailPostesStock_CodeMagasin
     * @param string $detailPostesStock_CodeUnite
     * @param string $detailPostesStock_Conditionnement
     * @param string $detailPostesStock_Reserve
     * @param float $detailPostesStock_Quantite
     * @param float $detailPostesStock_QuantiteRestante
     * @param float $detailPostesStock_QteExpediee
     * @param float $detailPostesStock_QteAExpedier
     * @param string $detailPostesStock_DateLivraisonDemandee
     * @param string $detailPostesStock_DateLivraisonConfirmee
     * @param float $detailPostesStock_QuantiteReserveeBase
     * @param float $detailPostesStock_MontantLigne
     * @param string $detailPostesStock_CodeRaccourciAxe1
     * @param string $detailPostesStock_CodeRaccourciAxe2
     * @param string $detailPostesStock_CodeRaccourciAxe3
     * @param string $detailPostesStock_CodeRaccourciAxe4
     * @param string $detailPostesStock_CodeRaccourciAxe5
     * @param string $detailPostesStock_CodeRaccourciAxe6
     * @param string $detailPostesStock_CodeRaccourciAxe7
     * @param string $detailPostesStock_CodeRaccourciAxe8
     * @param string $detailPostesStock_DatePreparation
     * @param float $detailPostesStock_VolumeUniteVrac
     * @param string $detailPostesStock_NumFournisseur
     * @param float $detailPostesStock_CoutUnitaireDirect
     * @param float $detailPostesStock_CoutUnitaireDS
     * @param float $detailPostesStock_PrixUnitaireDS
     * @param string $detailPostesStock_DateReceptionPrevue
     * @param float $detailPostesStock_MontantEnCommandeDS
     * @param float $detailPostesStock_MontantRecuNonFactDS
     * @param string $detailPostesStock_NumReserve
     * @param bool $detailPostesStock_ReserveOrigine
     * @param string $detailPostesStock_DateCommande
     * @param string $detailPostesStock_DateExpiration
     * @param float $detailPostesStock_PrixUnitaire
     * @param string $detailPostesStock_Statut
     * @param string $detailPostesStock_DateDerniereModif
     * @param string $detailPostesStock_PosteStock
     * @param string $detailPostesStock_Millesime
     * @param float $detailPostesStock_QuantiteATraiter
     * @param float $detailPostesStock_QuantiteSurCommandesEnCours
     * @param string $detailPostesStock_NumOrdreFabrication
     * @param string $detailPostesStock_UniteExpedition
     * @param string $detailPostesStock_NumGamme
     * @param float $detailPostesStock_QuantiteRealisee
     * @param float $detailPostesStock_PourcentPerte
     * @param string $detailPostesStock_Delai
     * @param string $detailPostesStock_DateDebut
     * @param string $detailPostesStock_HeureDebut
     * @param string $detailPostesStock_DateFin
     * @param string $detailPostesStock_HeureFin
     * @param string $detailPostesStock_NumNomenclatureProduc
     * @param float $detailPostesStock_CoutUnitaire
     * @param float $detailPostesStock_CoutTotal
     * @param int $detailPostesStock_NumLigneOF
     * @param float $detailPostesStock_QuantitePar
     * @param float $detailPostesStock_QuantitePrevue
     * @param string $detailPostesStock_Position
     * @param string $detailPostesStock_Position2
     * @param string $detailPostesStock_Position3
     * @param string $detailPostesStock_DélaiDecalage
     * @param string $detailPostesStock_DateExpedition
     * @param float $detailPostesStock_QuantiteEnTransit
     * @param string $detailPostesStock_DateReception
     * @param string $detailPostesStock_DateEnlevement
     * @param bool $detailPostesStock_Enlevement
     * @param string $detailPostesStock_CodeOperation
     * @param string $detailPostesStock_CodSouseOperation
     * @param string $etatRupturePFMS_GUID_Traitement
     * @param int $etatRupturePFMS_Traitement_Ligne
     * @param string $etatRupturePFMS_CompanyName
     * @param int $etatRupturePFMS_EntryNo
     * @param string $etatRupturePFMS_ItemNo
     * @param string $etatRupturePFMS_Date
     * @param string $etatRupturePFMS_LocationCode
     * @param string $etatRupturePFMS_SourceNo
     * @param string $etatRupturePFMS_Event
     * @param string $etatRupturePFMS_Designation
     * @param float $etatRupturePFMS_InventoryStock
     * @param float $etatRupturePFMS_AvailableStock
     * @param float $etatRupturePFMS_SafetyStockQuantity
     * @param float $etatRupturePFMS_ReorderPoint
     * @param float $etatRupturePFMS_SalesQuantity
     * @param float $etatRupturePFMS_PurchaseQuantity
     * @param float $etatRupturePFMS_ProductionOrderQuantity
     * @param string $etatRupturePFMS_User
     * @param string $etatRupturePFMS_EntryType
     * @param float $etatRupturePFMS_InitialStock
     * @param float $etatRupturePFMS_RemainingStock
     * @param float $etatRupturePFMS_MissingStock
     * @param string $etatRupturePFMS_BinCode
     * @param float $etatRupturePFMS_BudgetQuantity
     * @param string $etatRupturePFMS_RoutingNo
     * @param string $etatRupturePFMS_SalesOrderNo
     * @param string $etatRupturePFMS_Sens
     * @param int $etatRupturePFMS_LineNo
     * @param int $etatRupturePFMS_Status
     * @param float $etatRupturePFMS_TransferredQuantity
     * @param int $etatRupturePFMS_SourceLineNo
     * @param float $etatRupturePFMS_FinishedQtyOnProdOrder
     * @param string $etatRupturePFMS_ReplacementItemNo
     * @param string $etatRupturePFMS_ItemEndOfLife
     */
    public function __construct(string $detailPostesStock_TypeOrdre, string $detailPostesStock_TypeDocument, string $detailPostesStock_NumDocument, string $detailPostesStock_NumDonneurDOrdre, string $detailPostesStock_NomDonneurDOrdre, string $detailPostesStock_ReferenceExterne, string $detailPostesStock_VotreReference, int $detailPostesStock_NumLigne, string $detailPostesStock_TypeArticle, string $detailPostesStock_NumArticle, string $detailPostesStock_DescriptionArticle, string $detailPostesStock_Description2Article, float $detailPostesStock_MontantTTC, string $detailPostesStock_CodeMagasin, string $detailPostesStock_CodeUnite, string $detailPostesStock_Conditionnement, string $detailPostesStock_Reserve, float $detailPostesStock_Quantite, float $detailPostesStock_QuantiteRestante, float $detailPostesStock_QteExpediee, float $detailPostesStock_QteAExpedier, string $detailPostesStock_DateLivraisonDemandee, string $detailPostesStock_DateLivraisonConfirmee, float $detailPostesStock_QuantiteReserveeBase, float $detailPostesStock_MontantLigne, string $detailPostesStock_CodeRaccourciAxe1, string $detailPostesStock_CodeRaccourciAxe2, string $detailPostesStock_CodeRaccourciAxe3, string $detailPostesStock_CodeRaccourciAxe4, string $detailPostesStock_CodeRaccourciAxe5, string $detailPostesStock_CodeRaccourciAxe6, string $detailPostesStock_CodeRaccourciAxe7, string $detailPostesStock_CodeRaccourciAxe8, string $detailPostesStock_DatePreparation, float $detailPostesStock_VolumeUniteVrac, string $detailPostesStock_NumFournisseur, float $detailPostesStock_CoutUnitaireDirect, float $detailPostesStock_CoutUnitaireDS, float $detailPostesStock_PrixUnitaireDS, string $detailPostesStock_DateReceptionPrevue, float $detailPostesStock_MontantEnCommandeDS, float $detailPostesStock_MontantRecuNonFactDS, string $detailPostesStock_NumReserve, bool $detailPostesStock_ReserveOrigine, string $detailPostesStock_DateCommande, string $detailPostesStock_DateExpiration, float $detailPostesStock_PrixUnitaire, string $detailPostesStock_Statut, string $detailPostesStock_DateDerniereModif, string $detailPostesStock_PosteStock, string $detailPostesStock_Millesime, float $detailPostesStock_QuantiteATraiter, float $detailPostesStock_QuantiteSurCommandesEnCours, string $detailPostesStock_NumOrdreFabrication, string $detailPostesStock_UniteExpedition, string $detailPostesStock_NumGamme, float $detailPostesStock_QuantiteRealisee, float $detailPostesStock_PourcentPerte, string $detailPostesStock_Delai, string $detailPostesStock_DateDebut, string $detailPostesStock_HeureDebut, string $detailPostesStock_DateFin, string $detailPostesStock_HeureFin, string $detailPostesStock_NumNomenclatureProduc, float $detailPostesStock_CoutUnitaire, float $detailPostesStock_CoutTotal, int $detailPostesStock_NumLigneOF, float $detailPostesStock_QuantitePar, float $detailPostesStock_QuantitePrevue, string $detailPostesStock_Position, string $detailPostesStock_Position2, string $detailPostesStock_Position3, string $detailPostesStock_DélaiDecalage, string $detailPostesStock_DateExpedition, float $detailPostesStock_QuantiteEnTransit, string $detailPostesStock_DateReception, string $detailPostesStock_DateEnlevement, bool $detailPostesStock_Enlevement, string $detailPostesStock_CodeOperation, string $detailPostesStock_CodSouseOperation, string $etatRupturePFMS_GUID_Traitement, int $etatRupturePFMS_Traitement_Ligne, string $etatRupturePFMS_CompanyName, int $etatRupturePFMS_EntryNo, string $etatRupturePFMS_ItemNo, string $etatRupturePFMS_Date, string $etatRupturePFMS_LocationCode, string $etatRupturePFMS_SourceNo, string $etatRupturePFMS_Event, string $etatRupturePFMS_Designation, float $etatRupturePFMS_InventoryStock, float $etatRupturePFMS_AvailableStock, float $etatRupturePFMS_SafetyStockQuantity, float $etatRupturePFMS_ReorderPoint, float $etatRupturePFMS_SalesQuantity, float $etatRupturePFMS_PurchaseQuantity, float $etatRupturePFMS_ProductionOrderQuantity, string $etatRupturePFMS_User, string $etatRupturePFMS_EntryType, float $etatRupturePFMS_InitialStock, float $etatRupturePFMS_RemainingStock, float $etatRupturePFMS_MissingStock, string $etatRupturePFMS_BinCode, float $etatRupturePFMS_BudgetQuantity, string $etatRupturePFMS_RoutingNo, string $etatRupturePFMS_SalesOrderNo, string $etatRupturePFMS_Sens, int $etatRupturePFMS_LineNo, int $etatRupturePFMS_Status, float $etatRupturePFMS_TransferredQuantity, int $etatRupturePFMS_SourceLineNo, float $etatRupturePFMS_FinishedQtyOnProdOrder, string $etatRupturePFMS_ReplacementItemNo, string $etatRupturePFMS_ItemEndOfLife)
    {
        $this
            ->setDetailPostesStock_TypeOrdre($detailPostesStock_TypeOrdre)
            ->setDetailPostesStock_TypeDocument($detailPostesStock_TypeDocument)
            ->setDetailPostesStock_NumDocument($detailPostesStock_NumDocument)
            ->setDetailPostesStock_NumDonneurDOrdre($detailPostesStock_NumDonneurDOrdre)
            ->setDetailPostesStock_NomDonneurDOrdre($detailPostesStock_NomDonneurDOrdre)
            ->setDetailPostesStock_ReferenceExterne($detailPostesStock_ReferenceExterne)
            ->setDetailPostesStock_VotreReference($detailPostesStock_VotreReference)
            ->setDetailPostesStock_NumLigne($detailPostesStock_NumLigne)
            ->setDetailPostesStock_TypeArticle($detailPostesStock_TypeArticle)
            ->setDetailPostesStock_NumArticle($detailPostesStock_NumArticle)
            ->setDetailPostesStock_DescriptionArticle($detailPostesStock_DescriptionArticle)
            ->setDetailPostesStock_Description2Article($detailPostesStock_Description2Article)
            ->setDetailPostesStock_MontantTTC($detailPostesStock_MontantTTC)
            ->setDetailPostesStock_CodeMagasin($detailPostesStock_CodeMagasin)
            ->setDetailPostesStock_CodeUnite($detailPostesStock_CodeUnite)
            ->setDetailPostesStock_Conditionnement($detailPostesStock_Conditionnement)
            ->setDetailPostesStock_Reserve($detailPostesStock_Reserve)
            ->setDetailPostesStock_Quantite($detailPostesStock_Quantite)
            ->setDetailPostesStock_QuantiteRestante($detailPostesStock_QuantiteRestante)
            ->setDetailPostesStock_QteExpediee($detailPostesStock_QteExpediee)
            ->setDetailPostesStock_QteAExpedier($detailPostesStock_QteAExpedier)
            ->setDetailPostesStock_DateLivraisonDemandee($detailPostesStock_DateLivraisonDemandee)
            ->setDetailPostesStock_DateLivraisonConfirmee($detailPostesStock_DateLivraisonConfirmee)
            ->setDetailPostesStock_QuantiteReserveeBase($detailPostesStock_QuantiteReserveeBase)
            ->setDetailPostesStock_MontantLigne($detailPostesStock_MontantLigne)
            ->setDetailPostesStock_CodeRaccourciAxe1($detailPostesStock_CodeRaccourciAxe1)
            ->setDetailPostesStock_CodeRaccourciAxe2($detailPostesStock_CodeRaccourciAxe2)
            ->setDetailPostesStock_CodeRaccourciAxe3($detailPostesStock_CodeRaccourciAxe3)
            ->setDetailPostesStock_CodeRaccourciAxe4($detailPostesStock_CodeRaccourciAxe4)
            ->setDetailPostesStock_CodeRaccourciAxe5($detailPostesStock_CodeRaccourciAxe5)
            ->setDetailPostesStock_CodeRaccourciAxe6($detailPostesStock_CodeRaccourciAxe6)
            ->setDetailPostesStock_CodeRaccourciAxe7($detailPostesStock_CodeRaccourciAxe7)
            ->setDetailPostesStock_CodeRaccourciAxe8($detailPostesStock_CodeRaccourciAxe8)
            ->setDetailPostesStock_DatePreparation($detailPostesStock_DatePreparation)
            ->setDetailPostesStock_VolumeUniteVrac($detailPostesStock_VolumeUniteVrac)
            ->setDetailPostesStock_NumFournisseur($detailPostesStock_NumFournisseur)
            ->setDetailPostesStock_CoutUnitaireDirect($detailPostesStock_CoutUnitaireDirect)
            ->setDetailPostesStock_CoutUnitaireDS($detailPostesStock_CoutUnitaireDS)
            ->setDetailPostesStock_PrixUnitaireDS($detailPostesStock_PrixUnitaireDS)
            ->setDetailPostesStock_DateReceptionPrevue($detailPostesStock_DateReceptionPrevue)
            ->setDetailPostesStock_MontantEnCommandeDS($detailPostesStock_MontantEnCommandeDS)
            ->setDetailPostesStock_MontantRecuNonFactDS($detailPostesStock_MontantRecuNonFactDS)
            ->setDetailPostesStock_NumReserve($detailPostesStock_NumReserve)
            ->setDetailPostesStock_ReserveOrigine($detailPostesStock_ReserveOrigine)
            ->setDetailPostesStock_DateCommande($detailPostesStock_DateCommande)
            ->setDetailPostesStock_DateExpiration($detailPostesStock_DateExpiration)
            ->setDetailPostesStock_PrixUnitaire($detailPostesStock_PrixUnitaire)
            ->setDetailPostesStock_Statut($detailPostesStock_Statut)
            ->setDetailPostesStock_DateDerniereModif($detailPostesStock_DateDerniereModif)
            ->setDetailPostesStock_PosteStock($detailPostesStock_PosteStock)
            ->setDetailPostesStock_Millesime($detailPostesStock_Millesime)
            ->setDetailPostesStock_QuantiteATraiter($detailPostesStock_QuantiteATraiter)
            ->setDetailPostesStock_QuantiteSurCommandesEnCours($detailPostesStock_QuantiteSurCommandesEnCours)
            ->setDetailPostesStock_NumOrdreFabrication($detailPostesStock_NumOrdreFabrication)
            ->setDetailPostesStock_UniteExpedition($detailPostesStock_UniteExpedition)
            ->setDetailPostesStock_NumGamme($detailPostesStock_NumGamme)
            ->setDetailPostesStock_QuantiteRealisee($detailPostesStock_QuantiteRealisee)
            ->setDetailPostesStock_PourcentPerte($detailPostesStock_PourcentPerte)
            ->setDetailPostesStock_Delai($detailPostesStock_Delai)
            ->setDetailPostesStock_DateDebut($detailPostesStock_DateDebut)
            ->setDetailPostesStock_HeureDebut($detailPostesStock_HeureDebut)
            ->setDetailPostesStock_DateFin($detailPostesStock_DateFin)
            ->setDetailPostesStock_HeureFin($detailPostesStock_HeureFin)
            ->setDetailPostesStock_NumNomenclatureProduc($detailPostesStock_NumNomenclatureProduc)
            ->setDetailPostesStock_CoutUnitaire($detailPostesStock_CoutUnitaire)
            ->setDetailPostesStock_CoutTotal($detailPostesStock_CoutTotal)
            ->setDetailPostesStock_NumLigneOF($detailPostesStock_NumLigneOF)
            ->setDetailPostesStock_QuantitePar($detailPostesStock_QuantitePar)
            ->setDetailPostesStock_QuantitePrevue($detailPostesStock_QuantitePrevue)
            ->setDetailPostesStock_Position($detailPostesStock_Position)
            ->setDetailPostesStock_Position2($detailPostesStock_Position2)
            ->setDetailPostesStock_Position3($detailPostesStock_Position3)
            ->setDetailPostesStock_DélaiDecalage($detailPostesStock_DélaiDecalage)
            ->setDetailPostesStock_DateExpedition($detailPostesStock_DateExpedition)
            ->setDetailPostesStock_QuantiteEnTransit($detailPostesStock_QuantiteEnTransit)
            ->setDetailPostesStock_DateReception($detailPostesStock_DateReception)
            ->setDetailPostesStock_DateEnlevement($detailPostesStock_DateEnlevement)
            ->setDetailPostesStock_Enlevement($detailPostesStock_Enlevement)
            ->setDetailPostesStock_CodeOperation($detailPostesStock_CodeOperation)
            ->setDetailPostesStock_CodSouseOperation($detailPostesStock_CodSouseOperation)
            ->setEtatRupturePFMS_GUID_Traitement($etatRupturePFMS_GUID_Traitement)
            ->setEtatRupturePFMS_Traitement_Ligne($etatRupturePFMS_Traitement_Ligne)
            ->setEtatRupturePFMS_CompanyName($etatRupturePFMS_CompanyName)
            ->setEtatRupturePFMS_EntryNo($etatRupturePFMS_EntryNo)
            ->setEtatRupturePFMS_ItemNo($etatRupturePFMS_ItemNo)
            ->setEtatRupturePFMS_Date($etatRupturePFMS_Date)
            ->setEtatRupturePFMS_LocationCode($etatRupturePFMS_LocationCode)
            ->setEtatRupturePFMS_SourceNo($etatRupturePFMS_SourceNo)
            ->setEtatRupturePFMS_Event($etatRupturePFMS_Event)
            ->setEtatRupturePFMS_Designation($etatRupturePFMS_Designation)
            ->setEtatRupturePFMS_InventoryStock($etatRupturePFMS_InventoryStock)
            ->setEtatRupturePFMS_AvailableStock($etatRupturePFMS_AvailableStock)
            ->setEtatRupturePFMS_SafetyStockQuantity($etatRupturePFMS_SafetyStockQuantity)
            ->setEtatRupturePFMS_ReorderPoint($etatRupturePFMS_ReorderPoint)
            ->setEtatRupturePFMS_SalesQuantity($etatRupturePFMS_SalesQuantity)
            ->setEtatRupturePFMS_PurchaseQuantity($etatRupturePFMS_PurchaseQuantity)
            ->setEtatRupturePFMS_ProductionOrderQuantity($etatRupturePFMS_ProductionOrderQuantity)
            ->setEtatRupturePFMS_User($etatRupturePFMS_User)
            ->setEtatRupturePFMS_EntryType($etatRupturePFMS_EntryType)
            ->setEtatRupturePFMS_InitialStock($etatRupturePFMS_InitialStock)
            ->setEtatRupturePFMS_RemainingStock($etatRupturePFMS_RemainingStock)
            ->setEtatRupturePFMS_MissingStock($etatRupturePFMS_MissingStock)
            ->setEtatRupturePFMS_BinCode($etatRupturePFMS_BinCode)
            ->setEtatRupturePFMS_BudgetQuantity($etatRupturePFMS_BudgetQuantity)
            ->setEtatRupturePFMS_RoutingNo($etatRupturePFMS_RoutingNo)
            ->setEtatRupturePFMS_SalesOrderNo($etatRupturePFMS_SalesOrderNo)
            ->setEtatRupturePFMS_Sens($etatRupturePFMS_Sens)
            ->setEtatRupturePFMS_LineNo($etatRupturePFMS_LineNo)
            ->setEtatRupturePFMS_Status($etatRupturePFMS_Status)
            ->setEtatRupturePFMS_TransferredQuantity($etatRupturePFMS_TransferredQuantity)
            ->setEtatRupturePFMS_SourceLineNo($etatRupturePFMS_SourceLineNo)
            ->setEtatRupturePFMS_FinishedQtyOnProdOrder($etatRupturePFMS_FinishedQtyOnProdOrder)
            ->setEtatRupturePFMS_ReplacementItemNo($etatRupturePFMS_ReplacementItemNo)
            ->setEtatRupturePFMS_ItemEndOfLife($etatRupturePFMS_ItemEndOfLife);
    }
    /**
     * Get DetailPostesStock_TypeOrdre value
     * @return string
     */
    public function getDetailPostesStock_TypeOrdre(): string
    {
        return $this->DetailPostesStock_TypeOrdre;
    }
    /**
     * Set DetailPostesStock_TypeOrdre value
     * @param string $detailPostesStock_TypeOrdre
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_TypeOrdre(string $detailPostesStock_TypeOrdre): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_TypeOrdre) && !is_string($detailPostesStock_TypeOrdre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_TypeOrdre, true), gettype($detailPostesStock_TypeOrdre)), __LINE__);
        }
        $this->DetailPostesStock_TypeOrdre = $detailPostesStock_TypeOrdre;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_TypeDocument value
     * @return string
     */
    public function getDetailPostesStock_TypeDocument(): string
    {
        return $this->DetailPostesStock_TypeDocument;
    }
    /**
     * Set DetailPostesStock_TypeDocument value
     * @param string $detailPostesStock_TypeDocument
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_TypeDocument(string $detailPostesStock_TypeDocument): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_TypeDocument) && !is_string($detailPostesStock_TypeDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_TypeDocument, true), gettype($detailPostesStock_TypeDocument)), __LINE__);
        }
        $this->DetailPostesStock_TypeDocument = $detailPostesStock_TypeDocument;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumDocument value
     * @return string
     */
    public function getDetailPostesStock_NumDocument(): string
    {
        return $this->DetailPostesStock_NumDocument;
    }
    /**
     * Set DetailPostesStock_NumDocument value
     * @param string $detailPostesStock_NumDocument
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumDocument(string $detailPostesStock_NumDocument): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumDocument) && !is_string($detailPostesStock_NumDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumDocument, true), gettype($detailPostesStock_NumDocument)), __LINE__);
        }
        $this->DetailPostesStock_NumDocument = $detailPostesStock_NumDocument;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumDonneurDOrdre value
     * @return string
     */
    public function getDetailPostesStock_NumDonneurDOrdre(): string
    {
        return $this->DetailPostesStock_NumDonneurDOrdre;
    }
    /**
     * Set DetailPostesStock_NumDonneurDOrdre value
     * @param string $detailPostesStock_NumDonneurDOrdre
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumDonneurDOrdre(string $detailPostesStock_NumDonneurDOrdre): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumDonneurDOrdre) && !is_string($detailPostesStock_NumDonneurDOrdre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumDonneurDOrdre, true), gettype($detailPostesStock_NumDonneurDOrdre)), __LINE__);
        }
        $this->DetailPostesStock_NumDonneurDOrdre = $detailPostesStock_NumDonneurDOrdre;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NomDonneurDOrdre value
     * @return string
     */
    public function getDetailPostesStock_NomDonneurDOrdre(): string
    {
        return $this->DetailPostesStock_NomDonneurDOrdre;
    }
    /**
     * Set DetailPostesStock_NomDonneurDOrdre value
     * @param string $detailPostesStock_NomDonneurDOrdre
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NomDonneurDOrdre(string $detailPostesStock_NomDonneurDOrdre): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NomDonneurDOrdre) && !is_string($detailPostesStock_NomDonneurDOrdre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NomDonneurDOrdre, true), gettype($detailPostesStock_NomDonneurDOrdre)), __LINE__);
        }
        $this->DetailPostesStock_NomDonneurDOrdre = $detailPostesStock_NomDonneurDOrdre;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_ReferenceExterne value
     * @return string
     */
    public function getDetailPostesStock_ReferenceExterne(): string
    {
        return $this->DetailPostesStock_ReferenceExterne;
    }
    /**
     * Set DetailPostesStock_ReferenceExterne value
     * @param string $detailPostesStock_ReferenceExterne
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_ReferenceExterne(string $detailPostesStock_ReferenceExterne): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_ReferenceExterne) && !is_string($detailPostesStock_ReferenceExterne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_ReferenceExterne, true), gettype($detailPostesStock_ReferenceExterne)), __LINE__);
        }
        $this->DetailPostesStock_ReferenceExterne = $detailPostesStock_ReferenceExterne;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_VotreReference value
     * @return string
     */
    public function getDetailPostesStock_VotreReference(): string
    {
        return $this->DetailPostesStock_VotreReference;
    }
    /**
     * Set DetailPostesStock_VotreReference value
     * @param string $detailPostesStock_VotreReference
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_VotreReference(string $detailPostesStock_VotreReference): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_VotreReference) && !is_string($detailPostesStock_VotreReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_VotreReference, true), gettype($detailPostesStock_VotreReference)), __LINE__);
        }
        $this->DetailPostesStock_VotreReference = $detailPostesStock_VotreReference;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumLigne value
     * @return int
     */
    public function getDetailPostesStock_NumLigne(): int
    {
        return $this->DetailPostesStock_NumLigne;
    }
    /**
     * Set DetailPostesStock_NumLigne value
     * @param int $detailPostesStock_NumLigne
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumLigne(int $detailPostesStock_NumLigne): self
    {
        // validation for constraint: int
        if (!is_null($detailPostesStock_NumLigne) && !(is_int($detailPostesStock_NumLigne) || ctype_digit($detailPostesStock_NumLigne))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailPostesStock_NumLigne, true), gettype($detailPostesStock_NumLigne)), __LINE__);
        }
        $this->DetailPostesStock_NumLigne = $detailPostesStock_NumLigne;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_TypeArticle value
     * @return string
     */
    public function getDetailPostesStock_TypeArticle(): string
    {
        return $this->DetailPostesStock_TypeArticle;
    }
    /**
     * Set DetailPostesStock_TypeArticle value
     * @param string $detailPostesStock_TypeArticle
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_TypeArticle(string $detailPostesStock_TypeArticle): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_TypeArticle) && !is_string($detailPostesStock_TypeArticle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_TypeArticle, true), gettype($detailPostesStock_TypeArticle)), __LINE__);
        }
        $this->DetailPostesStock_TypeArticle = $detailPostesStock_TypeArticle;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumArticle value
     * @return string
     */
    public function getDetailPostesStock_NumArticle(): string
    {
        return $this->DetailPostesStock_NumArticle;
    }
    /**
     * Set DetailPostesStock_NumArticle value
     * @param string $detailPostesStock_NumArticle
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumArticle(string $detailPostesStock_NumArticle): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumArticle) && !is_string($detailPostesStock_NumArticle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumArticle, true), gettype($detailPostesStock_NumArticle)), __LINE__);
        }
        $this->DetailPostesStock_NumArticle = $detailPostesStock_NumArticle;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DescriptionArticle value
     * @return string
     */
    public function getDetailPostesStock_DescriptionArticle(): string
    {
        return $this->DetailPostesStock_DescriptionArticle;
    }
    /**
     * Set DetailPostesStock_DescriptionArticle value
     * @param string $detailPostesStock_DescriptionArticle
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DescriptionArticle(string $detailPostesStock_DescriptionArticle): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DescriptionArticle) && !is_string($detailPostesStock_DescriptionArticle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DescriptionArticle, true), gettype($detailPostesStock_DescriptionArticle)), __LINE__);
        }
        $this->DetailPostesStock_DescriptionArticle = $detailPostesStock_DescriptionArticle;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Description2Article value
     * @return string
     */
    public function getDetailPostesStock_Description2Article(): string
    {
        return $this->DetailPostesStock_Description2Article;
    }
    /**
     * Set DetailPostesStock_Description2Article value
     * @param string $detailPostesStock_Description2Article
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Description2Article(string $detailPostesStock_Description2Article): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Description2Article) && !is_string($detailPostesStock_Description2Article)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Description2Article, true), gettype($detailPostesStock_Description2Article)), __LINE__);
        }
        $this->DetailPostesStock_Description2Article = $detailPostesStock_Description2Article;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_MontantTTC value
     * @return float
     */
    public function getDetailPostesStock_MontantTTC(): float
    {
        return $this->DetailPostesStock_MontantTTC;
    }
    /**
     * Set DetailPostesStock_MontantTTC value
     * @param float $detailPostesStock_MontantTTC
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_MontantTTC(float $detailPostesStock_MontantTTC): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_MontantTTC) && !(is_float($detailPostesStock_MontantTTC) || is_numeric($detailPostesStock_MontantTTC))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_MontantTTC, true), gettype($detailPostesStock_MontantTTC)), __LINE__);
        }
        $this->DetailPostesStock_MontantTTC = $detailPostesStock_MontantTTC;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeMagasin value
     * @return string
     */
    public function getDetailPostesStock_CodeMagasin(): string
    {
        return $this->DetailPostesStock_CodeMagasin;
    }
    /**
     * Set DetailPostesStock_CodeMagasin value
     * @param string $detailPostesStock_CodeMagasin
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeMagasin(string $detailPostesStock_CodeMagasin): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeMagasin) && !is_string($detailPostesStock_CodeMagasin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeMagasin, true), gettype($detailPostesStock_CodeMagasin)), __LINE__);
        }
        $this->DetailPostesStock_CodeMagasin = $detailPostesStock_CodeMagasin;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeUnite value
     * @return string
     */
    public function getDetailPostesStock_CodeUnite(): string
    {
        return $this->DetailPostesStock_CodeUnite;
    }
    /**
     * Set DetailPostesStock_CodeUnite value
     * @param string $detailPostesStock_CodeUnite
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeUnite(string $detailPostesStock_CodeUnite): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeUnite) && !is_string($detailPostesStock_CodeUnite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeUnite, true), gettype($detailPostesStock_CodeUnite)), __LINE__);
        }
        $this->DetailPostesStock_CodeUnite = $detailPostesStock_CodeUnite;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Conditionnement value
     * @return string
     */
    public function getDetailPostesStock_Conditionnement(): string
    {
        return $this->DetailPostesStock_Conditionnement;
    }
    /**
     * Set DetailPostesStock_Conditionnement value
     * @param string $detailPostesStock_Conditionnement
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Conditionnement(string $detailPostesStock_Conditionnement): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Conditionnement) && !is_string($detailPostesStock_Conditionnement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Conditionnement, true), gettype($detailPostesStock_Conditionnement)), __LINE__);
        }
        $this->DetailPostesStock_Conditionnement = $detailPostesStock_Conditionnement;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Reserve value
     * @return string
     */
    public function getDetailPostesStock_Reserve(): string
    {
        return $this->DetailPostesStock_Reserve;
    }
    /**
     * Set DetailPostesStock_Reserve value
     * @param string $detailPostesStock_Reserve
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Reserve(string $detailPostesStock_Reserve): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Reserve) && !is_string($detailPostesStock_Reserve)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Reserve, true), gettype($detailPostesStock_Reserve)), __LINE__);
        }
        $this->DetailPostesStock_Reserve = $detailPostesStock_Reserve;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Quantite value
     * @return float
     */
    public function getDetailPostesStock_Quantite(): float
    {
        return $this->DetailPostesStock_Quantite;
    }
    /**
     * Set DetailPostesStock_Quantite value
     * @param float $detailPostesStock_Quantite
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Quantite(float $detailPostesStock_Quantite): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_Quantite) && !(is_float($detailPostesStock_Quantite) || is_numeric($detailPostesStock_Quantite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_Quantite, true), gettype($detailPostesStock_Quantite)), __LINE__);
        }
        $this->DetailPostesStock_Quantite = $detailPostesStock_Quantite;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantiteRestante value
     * @return float
     */
    public function getDetailPostesStock_QuantiteRestante(): float
    {
        return $this->DetailPostesStock_QuantiteRestante;
    }
    /**
     * Set DetailPostesStock_QuantiteRestante value
     * @param float $detailPostesStock_QuantiteRestante
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantiteRestante(float $detailPostesStock_QuantiteRestante): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantiteRestante) && !(is_float($detailPostesStock_QuantiteRestante) || is_numeric($detailPostesStock_QuantiteRestante))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantiteRestante, true), gettype($detailPostesStock_QuantiteRestante)), __LINE__);
        }
        $this->DetailPostesStock_QuantiteRestante = $detailPostesStock_QuantiteRestante;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QteExpediee value
     * @return float
     */
    public function getDetailPostesStock_QteExpediee(): float
    {
        return $this->DetailPostesStock_QteExpediee;
    }
    /**
     * Set DetailPostesStock_QteExpediee value
     * @param float $detailPostesStock_QteExpediee
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QteExpediee(float $detailPostesStock_QteExpediee): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QteExpediee) && !(is_float($detailPostesStock_QteExpediee) || is_numeric($detailPostesStock_QteExpediee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QteExpediee, true), gettype($detailPostesStock_QteExpediee)), __LINE__);
        }
        $this->DetailPostesStock_QteExpediee = $detailPostesStock_QteExpediee;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QteAExpedier value
     * @return float
     */
    public function getDetailPostesStock_QteAExpedier(): float
    {
        return $this->DetailPostesStock_QteAExpedier;
    }
    /**
     * Set DetailPostesStock_QteAExpedier value
     * @param float $detailPostesStock_QteAExpedier
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QteAExpedier(float $detailPostesStock_QteAExpedier): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QteAExpedier) && !(is_float($detailPostesStock_QteAExpedier) || is_numeric($detailPostesStock_QteAExpedier))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QteAExpedier, true), gettype($detailPostesStock_QteAExpedier)), __LINE__);
        }
        $this->DetailPostesStock_QteAExpedier = $detailPostesStock_QteAExpedier;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateLivraisonDemandee value
     * @return string
     */
    public function getDetailPostesStock_DateLivraisonDemandee(): string
    {
        return $this->DetailPostesStock_DateLivraisonDemandee;
    }
    /**
     * Set DetailPostesStock_DateLivraisonDemandee value
     * @param string $detailPostesStock_DateLivraisonDemandee
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateLivraisonDemandee(string $detailPostesStock_DateLivraisonDemandee): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateLivraisonDemandee) && !is_string($detailPostesStock_DateLivraisonDemandee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateLivraisonDemandee, true), gettype($detailPostesStock_DateLivraisonDemandee)), __LINE__);
        }
        $this->DetailPostesStock_DateLivraisonDemandee = $detailPostesStock_DateLivraisonDemandee;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateLivraisonConfirmee value
     * @return string
     */
    public function getDetailPostesStock_DateLivraisonConfirmee(): string
    {
        return $this->DetailPostesStock_DateLivraisonConfirmee;
    }
    /**
     * Set DetailPostesStock_DateLivraisonConfirmee value
     * @param string $detailPostesStock_DateLivraisonConfirmee
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateLivraisonConfirmee(string $detailPostesStock_DateLivraisonConfirmee): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateLivraisonConfirmee) && !is_string($detailPostesStock_DateLivraisonConfirmee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateLivraisonConfirmee, true), gettype($detailPostesStock_DateLivraisonConfirmee)), __LINE__);
        }
        $this->DetailPostesStock_DateLivraisonConfirmee = $detailPostesStock_DateLivraisonConfirmee;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantiteReserveeBase value
     * @return float
     */
    public function getDetailPostesStock_QuantiteReserveeBase(): float
    {
        return $this->DetailPostesStock_QuantiteReserveeBase;
    }
    /**
     * Set DetailPostesStock_QuantiteReserveeBase value
     * @param float $detailPostesStock_QuantiteReserveeBase
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantiteReserveeBase(float $detailPostesStock_QuantiteReserveeBase): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantiteReserveeBase) && !(is_float($detailPostesStock_QuantiteReserveeBase) || is_numeric($detailPostesStock_QuantiteReserveeBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantiteReserveeBase, true), gettype($detailPostesStock_QuantiteReserveeBase)), __LINE__);
        }
        $this->DetailPostesStock_QuantiteReserveeBase = $detailPostesStock_QuantiteReserveeBase;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_MontantLigne value
     * @return float
     */
    public function getDetailPostesStock_MontantLigne(): float
    {
        return $this->DetailPostesStock_MontantLigne;
    }
    /**
     * Set DetailPostesStock_MontantLigne value
     * @param float $detailPostesStock_MontantLigne
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_MontantLigne(float $detailPostesStock_MontantLigne): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_MontantLigne) && !(is_float($detailPostesStock_MontantLigne) || is_numeric($detailPostesStock_MontantLigne))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_MontantLigne, true), gettype($detailPostesStock_MontantLigne)), __LINE__);
        }
        $this->DetailPostesStock_MontantLigne = $detailPostesStock_MontantLigne;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe1 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe1(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe1;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe1 value
     * @param string $detailPostesStock_CodeRaccourciAxe1
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe1(string $detailPostesStock_CodeRaccourciAxe1): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe1) && !is_string($detailPostesStock_CodeRaccourciAxe1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe1, true), gettype($detailPostesStock_CodeRaccourciAxe1)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe1 = $detailPostesStock_CodeRaccourciAxe1;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe2 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe2(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe2;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe2 value
     * @param string $detailPostesStock_CodeRaccourciAxe2
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe2(string $detailPostesStock_CodeRaccourciAxe2): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe2) && !is_string($detailPostesStock_CodeRaccourciAxe2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe2, true), gettype($detailPostesStock_CodeRaccourciAxe2)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe2 = $detailPostesStock_CodeRaccourciAxe2;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe3 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe3(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe3;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe3 value
     * @param string $detailPostesStock_CodeRaccourciAxe3
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe3(string $detailPostesStock_CodeRaccourciAxe3): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe3) && !is_string($detailPostesStock_CodeRaccourciAxe3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe3, true), gettype($detailPostesStock_CodeRaccourciAxe3)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe3 = $detailPostesStock_CodeRaccourciAxe3;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe4 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe4(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe4;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe4 value
     * @param string $detailPostesStock_CodeRaccourciAxe4
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe4(string $detailPostesStock_CodeRaccourciAxe4): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe4) && !is_string($detailPostesStock_CodeRaccourciAxe4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe4, true), gettype($detailPostesStock_CodeRaccourciAxe4)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe4 = $detailPostesStock_CodeRaccourciAxe4;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe5 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe5(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe5;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe5 value
     * @param string $detailPostesStock_CodeRaccourciAxe5
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe5(string $detailPostesStock_CodeRaccourciAxe5): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe5) && !is_string($detailPostesStock_CodeRaccourciAxe5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe5, true), gettype($detailPostesStock_CodeRaccourciAxe5)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe5 = $detailPostesStock_CodeRaccourciAxe5;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe6 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe6(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe6;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe6 value
     * @param string $detailPostesStock_CodeRaccourciAxe6
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe6(string $detailPostesStock_CodeRaccourciAxe6): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe6) && !is_string($detailPostesStock_CodeRaccourciAxe6)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe6, true), gettype($detailPostesStock_CodeRaccourciAxe6)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe6 = $detailPostesStock_CodeRaccourciAxe6;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe7 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe7(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe7;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe7 value
     * @param string $detailPostesStock_CodeRaccourciAxe7
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe7(string $detailPostesStock_CodeRaccourciAxe7): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe7) && !is_string($detailPostesStock_CodeRaccourciAxe7)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe7, true), gettype($detailPostesStock_CodeRaccourciAxe7)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe7 = $detailPostesStock_CodeRaccourciAxe7;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeRaccourciAxe8 value
     * @return string
     */
    public function getDetailPostesStock_CodeRaccourciAxe8(): string
    {
        return $this->DetailPostesStock_CodeRaccourciAxe8;
    }
    /**
     * Set DetailPostesStock_CodeRaccourciAxe8 value
     * @param string $detailPostesStock_CodeRaccourciAxe8
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeRaccourciAxe8(string $detailPostesStock_CodeRaccourciAxe8): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeRaccourciAxe8) && !is_string($detailPostesStock_CodeRaccourciAxe8)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeRaccourciAxe8, true), gettype($detailPostesStock_CodeRaccourciAxe8)), __LINE__);
        }
        $this->DetailPostesStock_CodeRaccourciAxe8 = $detailPostesStock_CodeRaccourciAxe8;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DatePreparation value
     * @return string
     */
    public function getDetailPostesStock_DatePreparation(): string
    {
        return $this->DetailPostesStock_DatePreparation;
    }
    /**
     * Set DetailPostesStock_DatePreparation value
     * @param string $detailPostesStock_DatePreparation
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DatePreparation(string $detailPostesStock_DatePreparation): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DatePreparation) && !is_string($detailPostesStock_DatePreparation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DatePreparation, true), gettype($detailPostesStock_DatePreparation)), __LINE__);
        }
        $this->DetailPostesStock_DatePreparation = $detailPostesStock_DatePreparation;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_VolumeUniteVrac value
     * @return float
     */
    public function getDetailPostesStock_VolumeUniteVrac(): float
    {
        return $this->DetailPostesStock_VolumeUniteVrac;
    }
    /**
     * Set DetailPostesStock_VolumeUniteVrac value
     * @param float $detailPostesStock_VolumeUniteVrac
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_VolumeUniteVrac(float $detailPostesStock_VolumeUniteVrac): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_VolumeUniteVrac) && !(is_float($detailPostesStock_VolumeUniteVrac) || is_numeric($detailPostesStock_VolumeUniteVrac))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_VolumeUniteVrac, true), gettype($detailPostesStock_VolumeUniteVrac)), __LINE__);
        }
        $this->DetailPostesStock_VolumeUniteVrac = $detailPostesStock_VolumeUniteVrac;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumFournisseur value
     * @return string
     */
    public function getDetailPostesStock_NumFournisseur(): string
    {
        return $this->DetailPostesStock_NumFournisseur;
    }
    /**
     * Set DetailPostesStock_NumFournisseur value
     * @param string $detailPostesStock_NumFournisseur
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumFournisseur(string $detailPostesStock_NumFournisseur): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumFournisseur) && !is_string($detailPostesStock_NumFournisseur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumFournisseur, true), gettype($detailPostesStock_NumFournisseur)), __LINE__);
        }
        $this->DetailPostesStock_NumFournisseur = $detailPostesStock_NumFournisseur;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CoutUnitaireDirect value
     * @return float
     */
    public function getDetailPostesStock_CoutUnitaireDirect(): float
    {
        return $this->DetailPostesStock_CoutUnitaireDirect;
    }
    /**
     * Set DetailPostesStock_CoutUnitaireDirect value
     * @param float $detailPostesStock_CoutUnitaireDirect
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CoutUnitaireDirect(float $detailPostesStock_CoutUnitaireDirect): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_CoutUnitaireDirect) && !(is_float($detailPostesStock_CoutUnitaireDirect) || is_numeric($detailPostesStock_CoutUnitaireDirect))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_CoutUnitaireDirect, true), gettype($detailPostesStock_CoutUnitaireDirect)), __LINE__);
        }
        $this->DetailPostesStock_CoutUnitaireDirect = $detailPostesStock_CoutUnitaireDirect;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CoutUnitaireDS value
     * @return float
     */
    public function getDetailPostesStock_CoutUnitaireDS(): float
    {
        return $this->DetailPostesStock_CoutUnitaireDS;
    }
    /**
     * Set DetailPostesStock_CoutUnitaireDS value
     * @param float $detailPostesStock_CoutUnitaireDS
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CoutUnitaireDS(float $detailPostesStock_CoutUnitaireDS): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_CoutUnitaireDS) && !(is_float($detailPostesStock_CoutUnitaireDS) || is_numeric($detailPostesStock_CoutUnitaireDS))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_CoutUnitaireDS, true), gettype($detailPostesStock_CoutUnitaireDS)), __LINE__);
        }
        $this->DetailPostesStock_CoutUnitaireDS = $detailPostesStock_CoutUnitaireDS;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_PrixUnitaireDS value
     * @return float
     */
    public function getDetailPostesStock_PrixUnitaireDS(): float
    {
        return $this->DetailPostesStock_PrixUnitaireDS;
    }
    /**
     * Set DetailPostesStock_PrixUnitaireDS value
     * @param float $detailPostesStock_PrixUnitaireDS
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_PrixUnitaireDS(float $detailPostesStock_PrixUnitaireDS): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_PrixUnitaireDS) && !(is_float($detailPostesStock_PrixUnitaireDS) || is_numeric($detailPostesStock_PrixUnitaireDS))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_PrixUnitaireDS, true), gettype($detailPostesStock_PrixUnitaireDS)), __LINE__);
        }
        $this->DetailPostesStock_PrixUnitaireDS = $detailPostesStock_PrixUnitaireDS;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateReceptionPrevue value
     * @return string
     */
    public function getDetailPostesStock_DateReceptionPrevue(): string
    {
        return $this->DetailPostesStock_DateReceptionPrevue;
    }
    /**
     * Set DetailPostesStock_DateReceptionPrevue value
     * @param string $detailPostesStock_DateReceptionPrevue
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateReceptionPrevue(string $detailPostesStock_DateReceptionPrevue): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateReceptionPrevue) && !is_string($detailPostesStock_DateReceptionPrevue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateReceptionPrevue, true), gettype($detailPostesStock_DateReceptionPrevue)), __LINE__);
        }
        $this->DetailPostesStock_DateReceptionPrevue = $detailPostesStock_DateReceptionPrevue;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_MontantEnCommandeDS value
     * @return float
     */
    public function getDetailPostesStock_MontantEnCommandeDS(): float
    {
        return $this->DetailPostesStock_MontantEnCommandeDS;
    }
    /**
     * Set DetailPostesStock_MontantEnCommandeDS value
     * @param float $detailPostesStock_MontantEnCommandeDS
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_MontantEnCommandeDS(float $detailPostesStock_MontantEnCommandeDS): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_MontantEnCommandeDS) && !(is_float($detailPostesStock_MontantEnCommandeDS) || is_numeric($detailPostesStock_MontantEnCommandeDS))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_MontantEnCommandeDS, true), gettype($detailPostesStock_MontantEnCommandeDS)), __LINE__);
        }
        $this->DetailPostesStock_MontantEnCommandeDS = $detailPostesStock_MontantEnCommandeDS;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_MontantRecuNonFactDS value
     * @return float
     */
    public function getDetailPostesStock_MontantRecuNonFactDS(): float
    {
        return $this->DetailPostesStock_MontantRecuNonFactDS;
    }
    /**
     * Set DetailPostesStock_MontantRecuNonFactDS value
     * @param float $detailPostesStock_MontantRecuNonFactDS
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_MontantRecuNonFactDS(float $detailPostesStock_MontantRecuNonFactDS): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_MontantRecuNonFactDS) && !(is_float($detailPostesStock_MontantRecuNonFactDS) || is_numeric($detailPostesStock_MontantRecuNonFactDS))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_MontantRecuNonFactDS, true), gettype($detailPostesStock_MontantRecuNonFactDS)), __LINE__);
        }
        $this->DetailPostesStock_MontantRecuNonFactDS = $detailPostesStock_MontantRecuNonFactDS;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumReserve value
     * @return string
     */
    public function getDetailPostesStock_NumReserve(): string
    {
        return $this->DetailPostesStock_NumReserve;
    }
    /**
     * Set DetailPostesStock_NumReserve value
     * @param string $detailPostesStock_NumReserve
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumReserve(string $detailPostesStock_NumReserve): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumReserve) && !is_string($detailPostesStock_NumReserve)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumReserve, true), gettype($detailPostesStock_NumReserve)), __LINE__);
        }
        $this->DetailPostesStock_NumReserve = $detailPostesStock_NumReserve;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_ReserveOrigine value
     * @return bool
     */
    public function getDetailPostesStock_ReserveOrigine(): bool
    {
        return $this->DetailPostesStock_ReserveOrigine;
    }
    /**
     * Set DetailPostesStock_ReserveOrigine value
     * @param bool $detailPostesStock_ReserveOrigine
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_ReserveOrigine(bool $detailPostesStock_ReserveOrigine): self
    {
        // validation for constraint: boolean
        if (!is_null($detailPostesStock_ReserveOrigine) && !is_bool($detailPostesStock_ReserveOrigine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($detailPostesStock_ReserveOrigine, true), gettype($detailPostesStock_ReserveOrigine)), __LINE__);
        }
        $this->DetailPostesStock_ReserveOrigine = $detailPostesStock_ReserveOrigine;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateCommande value
     * @return string
     */
    public function getDetailPostesStock_DateCommande(): string
    {
        return $this->DetailPostesStock_DateCommande;
    }
    /**
     * Set DetailPostesStock_DateCommande value
     * @param string $detailPostesStock_DateCommande
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateCommande(string $detailPostesStock_DateCommande): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateCommande) && !is_string($detailPostesStock_DateCommande)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateCommande, true), gettype($detailPostesStock_DateCommande)), __LINE__);
        }
        $this->DetailPostesStock_DateCommande = $detailPostesStock_DateCommande;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateExpiration value
     * @return string
     */
    public function getDetailPostesStock_DateExpiration(): string
    {
        return $this->DetailPostesStock_DateExpiration;
    }
    /**
     * Set DetailPostesStock_DateExpiration value
     * @param string $detailPostesStock_DateExpiration
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateExpiration(string $detailPostesStock_DateExpiration): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateExpiration) && !is_string($detailPostesStock_DateExpiration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateExpiration, true), gettype($detailPostesStock_DateExpiration)), __LINE__);
        }
        $this->DetailPostesStock_DateExpiration = $detailPostesStock_DateExpiration;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_PrixUnitaire value
     * @return float
     */
    public function getDetailPostesStock_PrixUnitaire(): float
    {
        return $this->DetailPostesStock_PrixUnitaire;
    }
    /**
     * Set DetailPostesStock_PrixUnitaire value
     * @param float $detailPostesStock_PrixUnitaire
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_PrixUnitaire(float $detailPostesStock_PrixUnitaire): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_PrixUnitaire) && !(is_float($detailPostesStock_PrixUnitaire) || is_numeric($detailPostesStock_PrixUnitaire))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_PrixUnitaire, true), gettype($detailPostesStock_PrixUnitaire)), __LINE__);
        }
        $this->DetailPostesStock_PrixUnitaire = $detailPostesStock_PrixUnitaire;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Statut value
     * @return string
     */
    public function getDetailPostesStock_Statut(): string
    {
        return $this->DetailPostesStock_Statut;
    }
    /**
     * Set DetailPostesStock_Statut value
     * @param string $detailPostesStock_Statut
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Statut(string $detailPostesStock_Statut): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Statut) && !is_string($detailPostesStock_Statut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Statut, true), gettype($detailPostesStock_Statut)), __LINE__);
        }
        $this->DetailPostesStock_Statut = $detailPostesStock_Statut;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateDerniereModif value
     * @return string
     */
    public function getDetailPostesStock_DateDerniereModif(): string
    {
        return $this->DetailPostesStock_DateDerniereModif;
    }
    /**
     * Set DetailPostesStock_DateDerniereModif value
     * @param string $detailPostesStock_DateDerniereModif
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateDerniereModif(string $detailPostesStock_DateDerniereModif): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateDerniereModif) && !is_string($detailPostesStock_DateDerniereModif)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateDerniereModif, true), gettype($detailPostesStock_DateDerniereModif)), __LINE__);
        }
        $this->DetailPostesStock_DateDerniereModif = $detailPostesStock_DateDerniereModif;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_PosteStock value
     * @return string
     */
    public function getDetailPostesStock_PosteStock(): string
    {
        return $this->DetailPostesStock_PosteStock;
    }
    /**
     * Set DetailPostesStock_PosteStock value
     * @param string $detailPostesStock_PosteStock
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_PosteStock(string $detailPostesStock_PosteStock): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_PosteStock) && !is_string($detailPostesStock_PosteStock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_PosteStock, true), gettype($detailPostesStock_PosteStock)), __LINE__);
        }
        $this->DetailPostesStock_PosteStock = $detailPostesStock_PosteStock;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Millesime value
     * @return string
     */
    public function getDetailPostesStock_Millesime(): string
    {
        return $this->DetailPostesStock_Millesime;
    }
    /**
     * Set DetailPostesStock_Millesime value
     * @param string $detailPostesStock_Millesime
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Millesime(string $detailPostesStock_Millesime): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Millesime) && !is_string($detailPostesStock_Millesime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Millesime, true), gettype($detailPostesStock_Millesime)), __LINE__);
        }
        $this->DetailPostesStock_Millesime = $detailPostesStock_Millesime;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantiteATraiter value
     * @return float
     */
    public function getDetailPostesStock_QuantiteATraiter(): float
    {
        return $this->DetailPostesStock_QuantiteATraiter;
    }
    /**
     * Set DetailPostesStock_QuantiteATraiter value
     * @param float $detailPostesStock_QuantiteATraiter
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantiteATraiter(float $detailPostesStock_QuantiteATraiter): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantiteATraiter) && !(is_float($detailPostesStock_QuantiteATraiter) || is_numeric($detailPostesStock_QuantiteATraiter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantiteATraiter, true), gettype($detailPostesStock_QuantiteATraiter)), __LINE__);
        }
        $this->DetailPostesStock_QuantiteATraiter = $detailPostesStock_QuantiteATraiter;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantiteSurCommandesEnCours value
     * @return float
     */
    public function getDetailPostesStock_QuantiteSurCommandesEnCours(): float
    {
        return $this->DetailPostesStock_QuantiteSurCommandesEnCours;
    }
    /**
     * Set DetailPostesStock_QuantiteSurCommandesEnCours value
     * @param float $detailPostesStock_QuantiteSurCommandesEnCours
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantiteSurCommandesEnCours(float $detailPostesStock_QuantiteSurCommandesEnCours): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantiteSurCommandesEnCours) && !(is_float($detailPostesStock_QuantiteSurCommandesEnCours) || is_numeric($detailPostesStock_QuantiteSurCommandesEnCours))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantiteSurCommandesEnCours, true), gettype($detailPostesStock_QuantiteSurCommandesEnCours)), __LINE__);
        }
        $this->DetailPostesStock_QuantiteSurCommandesEnCours = $detailPostesStock_QuantiteSurCommandesEnCours;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumOrdreFabrication value
     * @return string
     */
    public function getDetailPostesStock_NumOrdreFabrication(): string
    {
        return $this->DetailPostesStock_NumOrdreFabrication;
    }
    /**
     * Set DetailPostesStock_NumOrdreFabrication value
     * @param string $detailPostesStock_NumOrdreFabrication
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumOrdreFabrication(string $detailPostesStock_NumOrdreFabrication): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumOrdreFabrication) && !is_string($detailPostesStock_NumOrdreFabrication)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumOrdreFabrication, true), gettype($detailPostesStock_NumOrdreFabrication)), __LINE__);
        }
        $this->DetailPostesStock_NumOrdreFabrication = $detailPostesStock_NumOrdreFabrication;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_UniteExpedition value
     * @return string
     */
    public function getDetailPostesStock_UniteExpedition(): string
    {
        return $this->DetailPostesStock_UniteExpedition;
    }
    /**
     * Set DetailPostesStock_UniteExpedition value
     * @param string $detailPostesStock_UniteExpedition
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_UniteExpedition(string $detailPostesStock_UniteExpedition): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_UniteExpedition) && !is_string($detailPostesStock_UniteExpedition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_UniteExpedition, true), gettype($detailPostesStock_UniteExpedition)), __LINE__);
        }
        $this->DetailPostesStock_UniteExpedition = $detailPostesStock_UniteExpedition;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumGamme value
     * @return string
     */
    public function getDetailPostesStock_NumGamme(): string
    {
        return $this->DetailPostesStock_NumGamme;
    }
    /**
     * Set DetailPostesStock_NumGamme value
     * @param string $detailPostesStock_NumGamme
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumGamme(string $detailPostesStock_NumGamme): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumGamme) && !is_string($detailPostesStock_NumGamme)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumGamme, true), gettype($detailPostesStock_NumGamme)), __LINE__);
        }
        $this->DetailPostesStock_NumGamme = $detailPostesStock_NumGamme;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantiteRealisee value
     * @return float
     */
    public function getDetailPostesStock_QuantiteRealisee(): float
    {
        return $this->DetailPostesStock_QuantiteRealisee;
    }
    /**
     * Set DetailPostesStock_QuantiteRealisee value
     * @param float $detailPostesStock_QuantiteRealisee
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantiteRealisee(float $detailPostesStock_QuantiteRealisee): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantiteRealisee) && !(is_float($detailPostesStock_QuantiteRealisee) || is_numeric($detailPostesStock_QuantiteRealisee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantiteRealisee, true), gettype($detailPostesStock_QuantiteRealisee)), __LINE__);
        }
        $this->DetailPostesStock_QuantiteRealisee = $detailPostesStock_QuantiteRealisee;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_PourcentPerte value
     * @return float
     */
    public function getDetailPostesStock_PourcentPerte(): float
    {
        return $this->DetailPostesStock_PourcentPerte;
    }
    /**
     * Set DetailPostesStock_PourcentPerte value
     * @param float $detailPostesStock_PourcentPerte
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_PourcentPerte(float $detailPostesStock_PourcentPerte): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_PourcentPerte) && !(is_float($detailPostesStock_PourcentPerte) || is_numeric($detailPostesStock_PourcentPerte))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_PourcentPerte, true), gettype($detailPostesStock_PourcentPerte)), __LINE__);
        }
        $this->DetailPostesStock_PourcentPerte = $detailPostesStock_PourcentPerte;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Delai value
     * @return string
     */
    public function getDetailPostesStock_Delai(): string
    {
        return $this->DetailPostesStock_Delai;
    }
    /**
     * Set DetailPostesStock_Delai value
     * @param string $detailPostesStock_Delai
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Delai(string $detailPostesStock_Delai): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Delai) && !is_string($detailPostesStock_Delai)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Delai, true), gettype($detailPostesStock_Delai)), __LINE__);
        }
        $this->DetailPostesStock_Delai = $detailPostesStock_Delai;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateDebut value
     * @return string
     */
    public function getDetailPostesStock_DateDebut(): string
    {
        return $this->DetailPostesStock_DateDebut;
    }
    /**
     * Set DetailPostesStock_DateDebut value
     * @param string $detailPostesStock_DateDebut
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateDebut(string $detailPostesStock_DateDebut): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateDebut) && !is_string($detailPostesStock_DateDebut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateDebut, true), gettype($detailPostesStock_DateDebut)), __LINE__);
        }
        $this->DetailPostesStock_DateDebut = $detailPostesStock_DateDebut;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_HeureDebut value
     * @return string
     */
    public function getDetailPostesStock_HeureDebut(): string
    {
        return $this->DetailPostesStock_HeureDebut;
    }
    /**
     * Set DetailPostesStock_HeureDebut value
     * @param string $detailPostesStock_HeureDebut
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_HeureDebut(string $detailPostesStock_HeureDebut): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_HeureDebut) && !is_string($detailPostesStock_HeureDebut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_HeureDebut, true), gettype($detailPostesStock_HeureDebut)), __LINE__);
        }
        $this->DetailPostesStock_HeureDebut = $detailPostesStock_HeureDebut;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateFin value
     * @return string
     */
    public function getDetailPostesStock_DateFin(): string
    {
        return $this->DetailPostesStock_DateFin;
    }
    /**
     * Set DetailPostesStock_DateFin value
     * @param string $detailPostesStock_DateFin
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateFin(string $detailPostesStock_DateFin): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateFin) && !is_string($detailPostesStock_DateFin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateFin, true), gettype($detailPostesStock_DateFin)), __LINE__);
        }
        $this->DetailPostesStock_DateFin = $detailPostesStock_DateFin;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_HeureFin value
     * @return string
     */
    public function getDetailPostesStock_HeureFin(): string
    {
        return $this->DetailPostesStock_HeureFin;
    }
    /**
     * Set DetailPostesStock_HeureFin value
     * @param string $detailPostesStock_HeureFin
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_HeureFin(string $detailPostesStock_HeureFin): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_HeureFin) && !is_string($detailPostesStock_HeureFin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_HeureFin, true), gettype($detailPostesStock_HeureFin)), __LINE__);
        }
        $this->DetailPostesStock_HeureFin = $detailPostesStock_HeureFin;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumNomenclatureProduc value
     * @return string
     */
    public function getDetailPostesStock_NumNomenclatureProduc(): string
    {
        return $this->DetailPostesStock_NumNomenclatureProduc;
    }
    /**
     * Set DetailPostesStock_NumNomenclatureProduc value
     * @param string $detailPostesStock_NumNomenclatureProduc
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumNomenclatureProduc(string $detailPostesStock_NumNomenclatureProduc): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_NumNomenclatureProduc) && !is_string($detailPostesStock_NumNomenclatureProduc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_NumNomenclatureProduc, true), gettype($detailPostesStock_NumNomenclatureProduc)), __LINE__);
        }
        $this->DetailPostesStock_NumNomenclatureProduc = $detailPostesStock_NumNomenclatureProduc;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CoutUnitaire value
     * @return float
     */
    public function getDetailPostesStock_CoutUnitaire(): float
    {
        return $this->DetailPostesStock_CoutUnitaire;
    }
    /**
     * Set DetailPostesStock_CoutUnitaire value
     * @param float $detailPostesStock_CoutUnitaire
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CoutUnitaire(float $detailPostesStock_CoutUnitaire): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_CoutUnitaire) && !(is_float($detailPostesStock_CoutUnitaire) || is_numeric($detailPostesStock_CoutUnitaire))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_CoutUnitaire, true), gettype($detailPostesStock_CoutUnitaire)), __LINE__);
        }
        $this->DetailPostesStock_CoutUnitaire = $detailPostesStock_CoutUnitaire;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CoutTotal value
     * @return float
     */
    public function getDetailPostesStock_CoutTotal(): float
    {
        return $this->DetailPostesStock_CoutTotal;
    }
    /**
     * Set DetailPostesStock_CoutTotal value
     * @param float $detailPostesStock_CoutTotal
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CoutTotal(float $detailPostesStock_CoutTotal): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_CoutTotal) && !(is_float($detailPostesStock_CoutTotal) || is_numeric($detailPostesStock_CoutTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_CoutTotal, true), gettype($detailPostesStock_CoutTotal)), __LINE__);
        }
        $this->DetailPostesStock_CoutTotal = $detailPostesStock_CoutTotal;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_NumLigneOF value
     * @return int
     */
    public function getDetailPostesStock_NumLigneOF(): int
    {
        return $this->DetailPostesStock_NumLigneOF;
    }
    /**
     * Set DetailPostesStock_NumLigneOF value
     * @param int $detailPostesStock_NumLigneOF
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_NumLigneOF(int $detailPostesStock_NumLigneOF): self
    {
        // validation for constraint: int
        if (!is_null($detailPostesStock_NumLigneOF) && !(is_int($detailPostesStock_NumLigneOF) || ctype_digit($detailPostesStock_NumLigneOF))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailPostesStock_NumLigneOF, true), gettype($detailPostesStock_NumLigneOF)), __LINE__);
        }
        $this->DetailPostesStock_NumLigneOF = $detailPostesStock_NumLigneOF;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantitePar value
     * @return float
     */
    public function getDetailPostesStock_QuantitePar(): float
    {
        return $this->DetailPostesStock_QuantitePar;
    }
    /**
     * Set DetailPostesStock_QuantitePar value
     * @param float $detailPostesStock_QuantitePar
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantitePar(float $detailPostesStock_QuantitePar): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantitePar) && !(is_float($detailPostesStock_QuantitePar) || is_numeric($detailPostesStock_QuantitePar))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantitePar, true), gettype($detailPostesStock_QuantitePar)), __LINE__);
        }
        $this->DetailPostesStock_QuantitePar = $detailPostesStock_QuantitePar;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantitePrevue value
     * @return float
     */
    public function getDetailPostesStock_QuantitePrevue(): float
    {
        return $this->DetailPostesStock_QuantitePrevue;
    }
    /**
     * Set DetailPostesStock_QuantitePrevue value
     * @param float $detailPostesStock_QuantitePrevue
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantitePrevue(float $detailPostesStock_QuantitePrevue): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantitePrevue) && !(is_float($detailPostesStock_QuantitePrevue) || is_numeric($detailPostesStock_QuantitePrevue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantitePrevue, true), gettype($detailPostesStock_QuantitePrevue)), __LINE__);
        }
        $this->DetailPostesStock_QuantitePrevue = $detailPostesStock_QuantitePrevue;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Position value
     * @return string
     */
    public function getDetailPostesStock_Position(): string
    {
        return $this->DetailPostesStock_Position;
    }
    /**
     * Set DetailPostesStock_Position value
     * @param string $detailPostesStock_Position
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Position(string $detailPostesStock_Position): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Position) && !is_string($detailPostesStock_Position)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Position, true), gettype($detailPostesStock_Position)), __LINE__);
        }
        $this->DetailPostesStock_Position = $detailPostesStock_Position;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Position2 value
     * @return string
     */
    public function getDetailPostesStock_Position2(): string
    {
        return $this->DetailPostesStock_Position2;
    }
    /**
     * Set DetailPostesStock_Position2 value
     * @param string $detailPostesStock_Position2
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Position2(string $detailPostesStock_Position2): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Position2) && !is_string($detailPostesStock_Position2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Position2, true), gettype($detailPostesStock_Position2)), __LINE__);
        }
        $this->DetailPostesStock_Position2 = $detailPostesStock_Position2;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Position3 value
     * @return string
     */
    public function getDetailPostesStock_Position3(): string
    {
        return $this->DetailPostesStock_Position3;
    }
    /**
     * Set DetailPostesStock_Position3 value
     * @param string $detailPostesStock_Position3
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Position3(string $detailPostesStock_Position3): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_Position3) && !is_string($detailPostesStock_Position3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_Position3, true), gettype($detailPostesStock_Position3)), __LINE__);
        }
        $this->DetailPostesStock_Position3 = $detailPostesStock_Position3;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DélaiDecalage value
     * @return string
     */
    public function getDetailPostesStock_DélaiDecalage(): string
    {
        return $this->DetailPostesStock_DélaiDecalage;
    }
    /**
     * Set DetailPostesStock_DélaiDecalage value
     * @param string $detailPostesStock_DélaiDecalage
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DélaiDecalage(string $detailPostesStock_DélaiDecalage): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DélaiDecalage) && !is_string($detailPostesStock_DélaiDecalage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DélaiDecalage, true), gettype($detailPostesStock_DélaiDecalage)), __LINE__);
        }
        $this->DetailPostesStock_DélaiDecalage = $detailPostesStock_DélaiDecalage;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateExpedition value
     * @return string
     */
    public function getDetailPostesStock_DateExpedition(): string
    {
        return $this->DetailPostesStock_DateExpedition;
    }
    /**
     * Set DetailPostesStock_DateExpedition value
     * @param string $detailPostesStock_DateExpedition
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateExpedition(string $detailPostesStock_DateExpedition): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateExpedition) && !is_string($detailPostesStock_DateExpedition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateExpedition, true), gettype($detailPostesStock_DateExpedition)), __LINE__);
        }
        $this->DetailPostesStock_DateExpedition = $detailPostesStock_DateExpedition;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_QuantiteEnTransit value
     * @return float
     */
    public function getDetailPostesStock_QuantiteEnTransit(): float
    {
        return $this->DetailPostesStock_QuantiteEnTransit;
    }
    /**
     * Set DetailPostesStock_QuantiteEnTransit value
     * @param float $detailPostesStock_QuantiteEnTransit
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_QuantiteEnTransit(float $detailPostesStock_QuantiteEnTransit): self
    {
        // validation for constraint: float
        if (!is_null($detailPostesStock_QuantiteEnTransit) && !(is_float($detailPostesStock_QuantiteEnTransit) || is_numeric($detailPostesStock_QuantiteEnTransit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($detailPostesStock_QuantiteEnTransit, true), gettype($detailPostesStock_QuantiteEnTransit)), __LINE__);
        }
        $this->DetailPostesStock_QuantiteEnTransit = $detailPostesStock_QuantiteEnTransit;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateReception value
     * @return string
     */
    public function getDetailPostesStock_DateReception(): string
    {
        return $this->DetailPostesStock_DateReception;
    }
    /**
     * Set DetailPostesStock_DateReception value
     * @param string $detailPostesStock_DateReception
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateReception(string $detailPostesStock_DateReception): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateReception) && !is_string($detailPostesStock_DateReception)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateReception, true), gettype($detailPostesStock_DateReception)), __LINE__);
        }
        $this->DetailPostesStock_DateReception = $detailPostesStock_DateReception;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_DateEnlevement value
     * @return string
     */
    public function getDetailPostesStock_DateEnlevement(): string
    {
        return $this->DetailPostesStock_DateEnlevement;
    }
    /**
     * Set DetailPostesStock_DateEnlevement value
     * @param string $detailPostesStock_DateEnlevement
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_DateEnlevement(string $detailPostesStock_DateEnlevement): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_DateEnlevement) && !is_string($detailPostesStock_DateEnlevement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_DateEnlevement, true), gettype($detailPostesStock_DateEnlevement)), __LINE__);
        }
        $this->DetailPostesStock_DateEnlevement = $detailPostesStock_DateEnlevement;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_Enlevement value
     * @return bool
     */
    public function getDetailPostesStock_Enlevement(): bool
    {
        return $this->DetailPostesStock_Enlevement;
    }
    /**
     * Set DetailPostesStock_Enlevement value
     * @param bool $detailPostesStock_Enlevement
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_Enlevement(bool $detailPostesStock_Enlevement): self
    {
        // validation for constraint: boolean
        if (!is_null($detailPostesStock_Enlevement) && !is_bool($detailPostesStock_Enlevement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($detailPostesStock_Enlevement, true), gettype($detailPostesStock_Enlevement)), __LINE__);
        }
        $this->DetailPostesStock_Enlevement = $detailPostesStock_Enlevement;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodeOperation value
     * @return string
     */
    public function getDetailPostesStock_CodeOperation(): string
    {
        return $this->DetailPostesStock_CodeOperation;
    }
    /**
     * Set DetailPostesStock_CodeOperation value
     * @param string $detailPostesStock_CodeOperation
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodeOperation(string $detailPostesStock_CodeOperation): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodeOperation) && !is_string($detailPostesStock_CodeOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodeOperation, true), gettype($detailPostesStock_CodeOperation)), __LINE__);
        }
        $this->DetailPostesStock_CodeOperation = $detailPostesStock_CodeOperation;
        
        return $this;
    }
    /**
     * Get DetailPostesStock_CodSouseOperation value
     * @return string
     */
    public function getDetailPostesStock_CodSouseOperation(): string
    {
        return $this->DetailPostesStock_CodSouseOperation;
    }
    /**
     * Set DetailPostesStock_CodSouseOperation value
     * @param string $detailPostesStock_CodSouseOperation
     * @return \StructType\DetailPostesStock
     */
    public function setDetailPostesStock_CodSouseOperation(string $detailPostesStock_CodSouseOperation): self
    {
        // validation for constraint: string
        if (!is_null($detailPostesStock_CodSouseOperation) && !is_string($detailPostesStock_CodSouseOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailPostesStock_CodSouseOperation, true), gettype($detailPostesStock_CodSouseOperation)), __LINE__);
        }
        $this->DetailPostesStock_CodSouseOperation = $detailPostesStock_CodSouseOperation;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_GUID_Traitement value
     * @return string
     */
    public function getEtatRupturePFMS_GUID_Traitement(): string
    {
        return $this->EtatRupturePFMS_GUID_Traitement;
    }
    /**
     * Set EtatRupturePFMS_GUID_Traitement value
     * @param string $etatRupturePFMS_GUID_Traitement
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_GUID_Traitement(string $etatRupturePFMS_GUID_Traitement): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_GUID_Traitement) && !is_string($etatRupturePFMS_GUID_Traitement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_GUID_Traitement, true), gettype($etatRupturePFMS_GUID_Traitement)), __LINE__);
        }
        $this->EtatRupturePFMS_GUID_Traitement = $etatRupturePFMS_GUID_Traitement;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_Traitement_Ligne value
     * @return int
     */
    public function getEtatRupturePFMS_Traitement_Ligne(): int
    {
        return $this->EtatRupturePFMS_Traitement_Ligne;
    }
    /**
     * Set EtatRupturePFMS_Traitement_Ligne value
     * @param int $etatRupturePFMS_Traitement_Ligne
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_Traitement_Ligne(int $etatRupturePFMS_Traitement_Ligne): self
    {
        // validation for constraint: int
        if (!is_null($etatRupturePFMS_Traitement_Ligne) && !(is_int($etatRupturePFMS_Traitement_Ligne) || ctype_digit($etatRupturePFMS_Traitement_Ligne))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($etatRupturePFMS_Traitement_Ligne, true), gettype($etatRupturePFMS_Traitement_Ligne)), __LINE__);
        }
        $this->EtatRupturePFMS_Traitement_Ligne = $etatRupturePFMS_Traitement_Ligne;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_CompanyName value
     * @return string
     */
    public function getEtatRupturePFMS_CompanyName(): string
    {
        return $this->EtatRupturePFMS_CompanyName;
    }
    /**
     * Set EtatRupturePFMS_CompanyName value
     * @param string $etatRupturePFMS_CompanyName
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_CompanyName(string $etatRupturePFMS_CompanyName): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_CompanyName) && !is_string($etatRupturePFMS_CompanyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_CompanyName, true), gettype($etatRupturePFMS_CompanyName)), __LINE__);
        }
        $this->EtatRupturePFMS_CompanyName = $etatRupturePFMS_CompanyName;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_EntryNo value
     * @return int
     */
    public function getEtatRupturePFMS_EntryNo(): int
    {
        return $this->EtatRupturePFMS_EntryNo;
    }
    /**
     * Set EtatRupturePFMS_EntryNo value
     * @param int $etatRupturePFMS_EntryNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_EntryNo(int $etatRupturePFMS_EntryNo): self
    {
        // validation for constraint: int
        if (!is_null($etatRupturePFMS_EntryNo) && !(is_int($etatRupturePFMS_EntryNo) || ctype_digit($etatRupturePFMS_EntryNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($etatRupturePFMS_EntryNo, true), gettype($etatRupturePFMS_EntryNo)), __LINE__);
        }
        $this->EtatRupturePFMS_EntryNo = $etatRupturePFMS_EntryNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_ItemNo value
     * @return string
     */
    public function getEtatRupturePFMS_ItemNo(): string
    {
        return $this->EtatRupturePFMS_ItemNo;
    }
    /**
     * Set EtatRupturePFMS_ItemNo value
     * @param string $etatRupturePFMS_ItemNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_ItemNo(string $etatRupturePFMS_ItemNo): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_ItemNo) && !is_string($etatRupturePFMS_ItemNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_ItemNo, true), gettype($etatRupturePFMS_ItemNo)), __LINE__);
        }
        $this->EtatRupturePFMS_ItemNo = $etatRupturePFMS_ItemNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_Date value
     * @return string
     */
    public function getEtatRupturePFMS_Date(): string
    {
        return $this->EtatRupturePFMS_Date;
    }
    /**
     * Set EtatRupturePFMS_Date value
     * @param string $etatRupturePFMS_Date
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_Date(string $etatRupturePFMS_Date): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_Date) && !is_string($etatRupturePFMS_Date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_Date, true), gettype($etatRupturePFMS_Date)), __LINE__);
        }
        $this->EtatRupturePFMS_Date = $etatRupturePFMS_Date;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_LocationCode value
     * @return string
     */
    public function getEtatRupturePFMS_LocationCode(): string
    {
        return $this->EtatRupturePFMS_LocationCode;
    }
    /**
     * Set EtatRupturePFMS_LocationCode value
     * @param string $etatRupturePFMS_LocationCode
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_LocationCode(string $etatRupturePFMS_LocationCode): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_LocationCode) && !is_string($etatRupturePFMS_LocationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_LocationCode, true), gettype($etatRupturePFMS_LocationCode)), __LINE__);
        }
        $this->EtatRupturePFMS_LocationCode = $etatRupturePFMS_LocationCode;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_SourceNo value
     * @return string
     */
    public function getEtatRupturePFMS_SourceNo(): string
    {
        return $this->EtatRupturePFMS_SourceNo;
    }
    /**
     * Set EtatRupturePFMS_SourceNo value
     * @param string $etatRupturePFMS_SourceNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_SourceNo(string $etatRupturePFMS_SourceNo): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_SourceNo) && !is_string($etatRupturePFMS_SourceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_SourceNo, true), gettype($etatRupturePFMS_SourceNo)), __LINE__);
        }
        $this->EtatRupturePFMS_SourceNo = $etatRupturePFMS_SourceNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_Event value
     * @return string
     */
    public function getEtatRupturePFMS_Event(): string
    {
        return $this->EtatRupturePFMS_Event;
    }
    /**
     * Set EtatRupturePFMS_Event value
     * @param string $etatRupturePFMS_Event
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_Event(string $etatRupturePFMS_Event): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_Event) && !is_string($etatRupturePFMS_Event)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_Event, true), gettype($etatRupturePFMS_Event)), __LINE__);
        }
        $this->EtatRupturePFMS_Event = $etatRupturePFMS_Event;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_Designation value
     * @return string
     */
    public function getEtatRupturePFMS_Designation(): string
    {
        return $this->EtatRupturePFMS_Designation;
    }
    /**
     * Set EtatRupturePFMS_Designation value
     * @param string $etatRupturePFMS_Designation
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_Designation(string $etatRupturePFMS_Designation): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_Designation) && !is_string($etatRupturePFMS_Designation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_Designation, true), gettype($etatRupturePFMS_Designation)), __LINE__);
        }
        $this->EtatRupturePFMS_Designation = $etatRupturePFMS_Designation;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_InventoryStock value
     * @return float
     */
    public function getEtatRupturePFMS_InventoryStock(): float
    {
        return $this->EtatRupturePFMS_InventoryStock;
    }
    /**
     * Set EtatRupturePFMS_InventoryStock value
     * @param float $etatRupturePFMS_InventoryStock
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_InventoryStock(float $etatRupturePFMS_InventoryStock): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_InventoryStock) && !(is_float($etatRupturePFMS_InventoryStock) || is_numeric($etatRupturePFMS_InventoryStock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_InventoryStock, true), gettype($etatRupturePFMS_InventoryStock)), __LINE__);
        }
        $this->EtatRupturePFMS_InventoryStock = $etatRupturePFMS_InventoryStock;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_AvailableStock value
     * @return float
     */
    public function getEtatRupturePFMS_AvailableStock(): float
    {
        return $this->EtatRupturePFMS_AvailableStock;
    }
    /**
     * Set EtatRupturePFMS_AvailableStock value
     * @param float $etatRupturePFMS_AvailableStock
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_AvailableStock(float $etatRupturePFMS_AvailableStock): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_AvailableStock) && !(is_float($etatRupturePFMS_AvailableStock) || is_numeric($etatRupturePFMS_AvailableStock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_AvailableStock, true), gettype($etatRupturePFMS_AvailableStock)), __LINE__);
        }
        $this->EtatRupturePFMS_AvailableStock = $etatRupturePFMS_AvailableStock;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_SafetyStockQuantity value
     * @return float
     */
    public function getEtatRupturePFMS_SafetyStockQuantity(): float
    {
        return $this->EtatRupturePFMS_SafetyStockQuantity;
    }
    /**
     * Set EtatRupturePFMS_SafetyStockQuantity value
     * @param float $etatRupturePFMS_SafetyStockQuantity
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_SafetyStockQuantity(float $etatRupturePFMS_SafetyStockQuantity): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_SafetyStockQuantity) && !(is_float($etatRupturePFMS_SafetyStockQuantity) || is_numeric($etatRupturePFMS_SafetyStockQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_SafetyStockQuantity, true), gettype($etatRupturePFMS_SafetyStockQuantity)), __LINE__);
        }
        $this->EtatRupturePFMS_SafetyStockQuantity = $etatRupturePFMS_SafetyStockQuantity;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_ReorderPoint value
     * @return float
     */
    public function getEtatRupturePFMS_ReorderPoint(): float
    {
        return $this->EtatRupturePFMS_ReorderPoint;
    }
    /**
     * Set EtatRupturePFMS_ReorderPoint value
     * @param float $etatRupturePFMS_ReorderPoint
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_ReorderPoint(float $etatRupturePFMS_ReorderPoint): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_ReorderPoint) && !(is_float($etatRupturePFMS_ReorderPoint) || is_numeric($etatRupturePFMS_ReorderPoint))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_ReorderPoint, true), gettype($etatRupturePFMS_ReorderPoint)), __LINE__);
        }
        $this->EtatRupturePFMS_ReorderPoint = $etatRupturePFMS_ReorderPoint;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_SalesQuantity value
     * @return float
     */
    public function getEtatRupturePFMS_SalesQuantity(): float
    {
        return $this->EtatRupturePFMS_SalesQuantity;
    }
    /**
     * Set EtatRupturePFMS_SalesQuantity value
     * @param float $etatRupturePFMS_SalesQuantity
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_SalesQuantity(float $etatRupturePFMS_SalesQuantity): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_SalesQuantity) && !(is_float($etatRupturePFMS_SalesQuantity) || is_numeric($etatRupturePFMS_SalesQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_SalesQuantity, true), gettype($etatRupturePFMS_SalesQuantity)), __LINE__);
        }
        $this->EtatRupturePFMS_SalesQuantity = $etatRupturePFMS_SalesQuantity;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_PurchaseQuantity value
     * @return float
     */
    public function getEtatRupturePFMS_PurchaseQuantity(): float
    {
        return $this->EtatRupturePFMS_PurchaseQuantity;
    }
    /**
     * Set EtatRupturePFMS_PurchaseQuantity value
     * @param float $etatRupturePFMS_PurchaseQuantity
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_PurchaseQuantity(float $etatRupturePFMS_PurchaseQuantity): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_PurchaseQuantity) && !(is_float($etatRupturePFMS_PurchaseQuantity) || is_numeric($etatRupturePFMS_PurchaseQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_PurchaseQuantity, true), gettype($etatRupturePFMS_PurchaseQuantity)), __LINE__);
        }
        $this->EtatRupturePFMS_PurchaseQuantity = $etatRupturePFMS_PurchaseQuantity;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_ProductionOrderQuantity value
     * @return float
     */
    public function getEtatRupturePFMS_ProductionOrderQuantity(): float
    {
        return $this->EtatRupturePFMS_ProductionOrderQuantity;
    }
    /**
     * Set EtatRupturePFMS_ProductionOrderQuantity value
     * @param float $etatRupturePFMS_ProductionOrderQuantity
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_ProductionOrderQuantity(float $etatRupturePFMS_ProductionOrderQuantity): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_ProductionOrderQuantity) && !(is_float($etatRupturePFMS_ProductionOrderQuantity) || is_numeric($etatRupturePFMS_ProductionOrderQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_ProductionOrderQuantity, true), gettype($etatRupturePFMS_ProductionOrderQuantity)), __LINE__);
        }
        $this->EtatRupturePFMS_ProductionOrderQuantity = $etatRupturePFMS_ProductionOrderQuantity;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_User value
     * @return string
     */
    public function getEtatRupturePFMS_User(): string
    {
        return $this->EtatRupturePFMS_User;
    }
    /**
     * Set EtatRupturePFMS_User value
     * @param string $etatRupturePFMS_User
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_User(string $etatRupturePFMS_User): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_User) && !is_string($etatRupturePFMS_User)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_User, true), gettype($etatRupturePFMS_User)), __LINE__);
        }
        $this->EtatRupturePFMS_User = $etatRupturePFMS_User;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_EntryType value
     * @return string
     */
    public function getEtatRupturePFMS_EntryType(): string
    {
        return $this->EtatRupturePFMS_EntryType;
    }
    /**
     * Set EtatRupturePFMS_EntryType value
     * @param string $etatRupturePFMS_EntryType
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_EntryType(string $etatRupturePFMS_EntryType): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_EntryType) && !is_string($etatRupturePFMS_EntryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_EntryType, true), gettype($etatRupturePFMS_EntryType)), __LINE__);
        }
        $this->EtatRupturePFMS_EntryType = $etatRupturePFMS_EntryType;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_InitialStock value
     * @return float
     */
    public function getEtatRupturePFMS_InitialStock(): float
    {
        return $this->EtatRupturePFMS_InitialStock;
    }
    /**
     * Set EtatRupturePFMS_InitialStock value
     * @param float $etatRupturePFMS_InitialStock
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_InitialStock(float $etatRupturePFMS_InitialStock): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_InitialStock) && !(is_float($etatRupturePFMS_InitialStock) || is_numeric($etatRupturePFMS_InitialStock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_InitialStock, true), gettype($etatRupturePFMS_InitialStock)), __LINE__);
        }
        $this->EtatRupturePFMS_InitialStock = $etatRupturePFMS_InitialStock;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_RemainingStock value
     * @return float
     */
    public function getEtatRupturePFMS_RemainingStock(): float
    {
        return $this->EtatRupturePFMS_RemainingStock;
    }
    /**
     * Set EtatRupturePFMS_RemainingStock value
     * @param float $etatRupturePFMS_RemainingStock
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_RemainingStock(float $etatRupturePFMS_RemainingStock): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_RemainingStock) && !(is_float($etatRupturePFMS_RemainingStock) || is_numeric($etatRupturePFMS_RemainingStock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_RemainingStock, true), gettype($etatRupturePFMS_RemainingStock)), __LINE__);
        }
        $this->EtatRupturePFMS_RemainingStock = $etatRupturePFMS_RemainingStock;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_MissingStock value
     * @return float
     */
    public function getEtatRupturePFMS_MissingStock(): float
    {
        return $this->EtatRupturePFMS_MissingStock;
    }
    /**
     * Set EtatRupturePFMS_MissingStock value
     * @param float $etatRupturePFMS_MissingStock
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_MissingStock(float $etatRupturePFMS_MissingStock): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_MissingStock) && !(is_float($etatRupturePFMS_MissingStock) || is_numeric($etatRupturePFMS_MissingStock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_MissingStock, true), gettype($etatRupturePFMS_MissingStock)), __LINE__);
        }
        $this->EtatRupturePFMS_MissingStock = $etatRupturePFMS_MissingStock;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_BinCode value
     * @return string
     */
    public function getEtatRupturePFMS_BinCode(): string
    {
        return $this->EtatRupturePFMS_BinCode;
    }
    /**
     * Set EtatRupturePFMS_BinCode value
     * @param string $etatRupturePFMS_BinCode
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_BinCode(string $etatRupturePFMS_BinCode): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_BinCode) && !is_string($etatRupturePFMS_BinCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_BinCode, true), gettype($etatRupturePFMS_BinCode)), __LINE__);
        }
        $this->EtatRupturePFMS_BinCode = $etatRupturePFMS_BinCode;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_BudgetQuantity value
     * @return float
     */
    public function getEtatRupturePFMS_BudgetQuantity(): float
    {
        return $this->EtatRupturePFMS_BudgetQuantity;
    }
    /**
     * Set EtatRupturePFMS_BudgetQuantity value
     * @param float $etatRupturePFMS_BudgetQuantity
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_BudgetQuantity(float $etatRupturePFMS_BudgetQuantity): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_BudgetQuantity) && !(is_float($etatRupturePFMS_BudgetQuantity) || is_numeric($etatRupturePFMS_BudgetQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_BudgetQuantity, true), gettype($etatRupturePFMS_BudgetQuantity)), __LINE__);
        }
        $this->EtatRupturePFMS_BudgetQuantity = $etatRupturePFMS_BudgetQuantity;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_RoutingNo value
     * @return string
     */
    public function getEtatRupturePFMS_RoutingNo(): string
    {
        return $this->EtatRupturePFMS_RoutingNo;
    }
    /**
     * Set EtatRupturePFMS_RoutingNo value
     * @param string $etatRupturePFMS_RoutingNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_RoutingNo(string $etatRupturePFMS_RoutingNo): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_RoutingNo) && !is_string($etatRupturePFMS_RoutingNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_RoutingNo, true), gettype($etatRupturePFMS_RoutingNo)), __LINE__);
        }
        $this->EtatRupturePFMS_RoutingNo = $etatRupturePFMS_RoutingNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_SalesOrderNo value
     * @return string
     */
    public function getEtatRupturePFMS_SalesOrderNo(): string
    {
        return $this->EtatRupturePFMS_SalesOrderNo;
    }
    /**
     * Set EtatRupturePFMS_SalesOrderNo value
     * @param string $etatRupturePFMS_SalesOrderNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_SalesOrderNo(string $etatRupturePFMS_SalesOrderNo): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_SalesOrderNo) && !is_string($etatRupturePFMS_SalesOrderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_SalesOrderNo, true), gettype($etatRupturePFMS_SalesOrderNo)), __LINE__);
        }
        $this->EtatRupturePFMS_SalesOrderNo = $etatRupturePFMS_SalesOrderNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_Sens value
     * @return string
     */
    public function getEtatRupturePFMS_Sens(): string
    {
        return $this->EtatRupturePFMS_Sens;
    }
    /**
     * Set EtatRupturePFMS_Sens value
     * @param string $etatRupturePFMS_Sens
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_Sens(string $etatRupturePFMS_Sens): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_Sens) && !is_string($etatRupturePFMS_Sens)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_Sens, true), gettype($etatRupturePFMS_Sens)), __LINE__);
        }
        $this->EtatRupturePFMS_Sens = $etatRupturePFMS_Sens;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_LineNo value
     * @return int
     */
    public function getEtatRupturePFMS_LineNo(): int
    {
        return $this->EtatRupturePFMS_LineNo;
    }
    /**
     * Set EtatRupturePFMS_LineNo value
     * @param int $etatRupturePFMS_LineNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_LineNo(int $etatRupturePFMS_LineNo): self
    {
        // validation for constraint: int
        if (!is_null($etatRupturePFMS_LineNo) && !(is_int($etatRupturePFMS_LineNo) || ctype_digit($etatRupturePFMS_LineNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($etatRupturePFMS_LineNo, true), gettype($etatRupturePFMS_LineNo)), __LINE__);
        }
        $this->EtatRupturePFMS_LineNo = $etatRupturePFMS_LineNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_Status value
     * @return int
     */
    public function getEtatRupturePFMS_Status(): int
    {
        return $this->EtatRupturePFMS_Status;
    }
    /**
     * Set EtatRupturePFMS_Status value
     * @param int $etatRupturePFMS_Status
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_Status(int $etatRupturePFMS_Status): self
    {
        // validation for constraint: int
        if (!is_null($etatRupturePFMS_Status) && !(is_int($etatRupturePFMS_Status) || ctype_digit($etatRupturePFMS_Status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($etatRupturePFMS_Status, true), gettype($etatRupturePFMS_Status)), __LINE__);
        }
        $this->EtatRupturePFMS_Status = $etatRupturePFMS_Status;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_TransferredQuantity value
     * @return float
     */
    public function getEtatRupturePFMS_TransferredQuantity(): float
    {
        return $this->EtatRupturePFMS_TransferredQuantity;
    }
    /**
     * Set EtatRupturePFMS_TransferredQuantity value
     * @param float $etatRupturePFMS_TransferredQuantity
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_TransferredQuantity(float $etatRupturePFMS_TransferredQuantity): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_TransferredQuantity) && !(is_float($etatRupturePFMS_TransferredQuantity) || is_numeric($etatRupturePFMS_TransferredQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_TransferredQuantity, true), gettype($etatRupturePFMS_TransferredQuantity)), __LINE__);
        }
        $this->EtatRupturePFMS_TransferredQuantity = $etatRupturePFMS_TransferredQuantity;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_SourceLineNo value
     * @return int
     */
    public function getEtatRupturePFMS_SourceLineNo(): int
    {
        return $this->EtatRupturePFMS_SourceLineNo;
    }
    /**
     * Set EtatRupturePFMS_SourceLineNo value
     * @param int $etatRupturePFMS_SourceLineNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_SourceLineNo(int $etatRupturePFMS_SourceLineNo): self
    {
        // validation for constraint: int
        if (!is_null($etatRupturePFMS_SourceLineNo) && !(is_int($etatRupturePFMS_SourceLineNo) || ctype_digit($etatRupturePFMS_SourceLineNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($etatRupturePFMS_SourceLineNo, true), gettype($etatRupturePFMS_SourceLineNo)), __LINE__);
        }
        $this->EtatRupturePFMS_SourceLineNo = $etatRupturePFMS_SourceLineNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_FinishedQtyOnProdOrder value
     * @return float
     */
    public function getEtatRupturePFMS_FinishedQtyOnProdOrder(): float
    {
        return $this->EtatRupturePFMS_FinishedQtyOnProdOrder;
    }
    /**
     * Set EtatRupturePFMS_FinishedQtyOnProdOrder value
     * @param float $etatRupturePFMS_FinishedQtyOnProdOrder
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_FinishedQtyOnProdOrder(float $etatRupturePFMS_FinishedQtyOnProdOrder): self
    {
        // validation for constraint: float
        if (!is_null($etatRupturePFMS_FinishedQtyOnProdOrder) && !(is_float($etatRupturePFMS_FinishedQtyOnProdOrder) || is_numeric($etatRupturePFMS_FinishedQtyOnProdOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($etatRupturePFMS_FinishedQtyOnProdOrder, true), gettype($etatRupturePFMS_FinishedQtyOnProdOrder)), __LINE__);
        }
        $this->EtatRupturePFMS_FinishedQtyOnProdOrder = $etatRupturePFMS_FinishedQtyOnProdOrder;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_ReplacementItemNo value
     * @return string
     */
    public function getEtatRupturePFMS_ReplacementItemNo(): string
    {
        return $this->EtatRupturePFMS_ReplacementItemNo;
    }
    /**
     * Set EtatRupturePFMS_ReplacementItemNo value
     * @param string $etatRupturePFMS_ReplacementItemNo
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_ReplacementItemNo(string $etatRupturePFMS_ReplacementItemNo): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_ReplacementItemNo) && !is_string($etatRupturePFMS_ReplacementItemNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_ReplacementItemNo, true), gettype($etatRupturePFMS_ReplacementItemNo)), __LINE__);
        }
        $this->EtatRupturePFMS_ReplacementItemNo = $etatRupturePFMS_ReplacementItemNo;
        
        return $this;
    }
    /**
     * Get EtatRupturePFMS_ItemEndOfLife value
     * @return string
     */
    public function getEtatRupturePFMS_ItemEndOfLife(): string
    {
        return $this->EtatRupturePFMS_ItemEndOfLife;
    }
    /**
     * Set EtatRupturePFMS_ItemEndOfLife value
     * @param string $etatRupturePFMS_ItemEndOfLife
     * @return \StructType\DetailPostesStock
     */
    public function setEtatRupturePFMS_ItemEndOfLife(string $etatRupturePFMS_ItemEndOfLife): self
    {
        // validation for constraint: string
        if (!is_null($etatRupturePFMS_ItemEndOfLife) && !is_string($etatRupturePFMS_ItemEndOfLife)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etatRupturePFMS_ItemEndOfLife, true), gettype($etatRupturePFMS_ItemEndOfLife)), __LINE__);
        }
        $this->EtatRupturePFMS_ItemEndOfLife = $etatRupturePFMS_ItemEndOfLife;
        
        return $this;
    }
}
