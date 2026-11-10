<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for R_DetailsPostesStocks StructType
 * @subpackage Structs
 */
class R_DetailsPostesStocks extends AbstractStructBase
{
    /**
     * The Company
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Company;
    /**
     * The Magasin_Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Magasin_Code;
    /**
     * The StockPhysique
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StockPhysique;
    /**
     * The StockPhysique_Multisociete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StockPhysique_Multisociete;
    /**
     * The PostesStock_Entrées
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\PostesStock_Entrées[]
     */
    protected array $PostesStock_Entrées;
    /**
     * The PostesStock_Sorties
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\PostesStock_Sorties[]
     */
    protected array $PostesStock_Sorties;
    /**
     * The QteTransit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $QteTransit;
    /**
     * The QteTransitMulti
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $QteTransitMulti;
    /**
     * The Disponible1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Disponible1 = null;
    /**
     * The Disponible1_Multisociete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Disponible1_Multisociete = null;
    /**
     * The Disponible2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Disponible2 = null;
    /**
     * The Disponible2_Multisociete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Disponible2_Multisociete = null;
    /**
     * Constructor method for R_DetailsPostesStocks
     * @uses R_DetailsPostesStocks::setCompany()
     * @uses R_DetailsPostesStocks::setMagasin_Code()
     * @uses R_DetailsPostesStocks::setStockPhysique()
     * @uses R_DetailsPostesStocks::setStockPhysique_Multisociete()
     * @uses R_DetailsPostesStocks::setPostesStock_Entrées()
     * @uses R_DetailsPostesStocks::setPostesStock_Sorties()
     * @uses R_DetailsPostesStocks::setQteTransit()
     * @uses R_DetailsPostesStocks::setQteTransitMulti()
     * @uses R_DetailsPostesStocks::setDisponible1()
     * @uses R_DetailsPostesStocks::setDisponible1_Multisociete()
     * @uses R_DetailsPostesStocks::setDisponible2()
     * @uses R_DetailsPostesStocks::setDisponible2_Multisociete()
     * @param string $company
     * @param string $magasin_Code
     * @param string $stockPhysique
     * @param string $stockPhysique_Multisociete
     * @param \StructType\PostesStock_Entrées[] $postesStock_Entrées
     * @param \StructType\PostesStock_Sorties[] $postesStock_Sorties
     * @param string[] $qteTransit
     * @param string[] $qteTransitMulti
     * @param string $disponible1
     * @param string $disponible1_Multisociete
     * @param string $disponible2
     * @param string $disponible2_Multisociete
     */
    public function __construct(string $company, string $magasin_Code, string $stockPhysique, string $stockPhysique_Multisociete, array $postesStock_Entrées, array $postesStock_Sorties, array $qteTransit, array $qteTransitMulti, ?string $disponible1 = null, ?string $disponible1_Multisociete = null, ?string $disponible2 = null, ?string $disponible2_Multisociete = null)
    {
        $this
            ->setCompany($company)
            ->setMagasin_Code($magasin_Code)
            ->setStockPhysique($stockPhysique)
            ->setStockPhysique_Multisociete($stockPhysique_Multisociete)
            ->setPostesStock_Entrées($postesStock_Entrées)
            ->setPostesStock_Sorties($postesStock_Sorties)
            ->setQteTransit($qteTransit)
            ->setQteTransitMulti($qteTransitMulti)
            ->setDisponible1($disponible1)
            ->setDisponible1_Multisociete($disponible1_Multisociete)
            ->setDisponible2($disponible2)
            ->setDisponible2_Multisociete($disponible2_Multisociete);
    }
    /**
     * Get Company value
     * @return string
     */
    public function getCompany(): string
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setCompany(string $company): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->Company = $company;
        
        return $this;
    }
    /**
     * Get Magasin_Code value
     * @return string
     */
    public function getMagasin_Code(): string
    {
        return $this->Magasin_Code;
    }
    /**
     * Set Magasin_Code value
     * @param string $magasin_Code
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setMagasin_Code(string $magasin_Code): self
    {
        // validation for constraint: string
        if (!is_null($magasin_Code) && !is_string($magasin_Code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($magasin_Code, true), gettype($magasin_Code)), __LINE__);
        }
        $this->Magasin_Code = $magasin_Code;
        
        return $this;
    }
    /**
     * Get StockPhysique value
     * @return string
     */
    public function getStockPhysique(): string
    {
        return $this->StockPhysique;
    }
    /**
     * Set StockPhysique value
     * @param string $stockPhysique
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setStockPhysique(string $stockPhysique): self
    {
        // validation for constraint: string
        if (!is_null($stockPhysique) && !is_string($stockPhysique)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhysique, true), gettype($stockPhysique)), __LINE__);
        }
        $this->StockPhysique = $stockPhysique;
        
        return $this;
    }
    /**
     * Get StockPhysique_Multisociete value
     * @return string
     */
    public function getStockPhysique_Multisociete(): string
    {
        return $this->StockPhysique_Multisociete;
    }
    /**
     * Set StockPhysique_Multisociete value
     * @param string $stockPhysique_Multisociete
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setStockPhysique_Multisociete(string $stockPhysique_Multisociete): self
    {
        // validation for constraint: string
        if (!is_null($stockPhysique_Multisociete) && !is_string($stockPhysique_Multisociete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhysique_Multisociete, true), gettype($stockPhysique_Multisociete)), __LINE__);
        }
        $this->StockPhysique_Multisociete = $stockPhysique_Multisociete;
        
        return $this;
    }
    /**
     * Get PostesStock_Entrées value
     * @return \StructType\PostesStock_Entrées[]
     */
    public function getPostesStock_Entrées(): array
    {
        return $this->PostesStock_Entrées;
    }
    /**
     * This method is responsible for validating the values passed to the setPostesStock_Entrées method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostesStock_Entrées method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostesStock_EntréesForArrayConstraintsFromSetPostesStock_Entrées(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $r_DetailsPostesStocksPostesStock_EntréesItem) {
            // validation for constraint: itemType
            if (!$r_DetailsPostesStocksPostesStock_EntréesItem instanceof \StructType\PostesStock_Entrées) {
                $invalidValues[] = is_object($r_DetailsPostesStocksPostesStock_EntréesItem) ? get_class($r_DetailsPostesStocksPostesStock_EntréesItem) : sprintf('%s(%s)', gettype($r_DetailsPostesStocksPostesStock_EntréesItem), var_export($r_DetailsPostesStocksPostesStock_EntréesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PostesStock_Entrées property can only contain items of type \StructType\PostesStock_Entrées, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PostesStock_Entrées value
     * @throws InvalidArgumentException
     * @param \StructType\PostesStock_Entrées[] $postesStock_Entrées
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setPostesStock_Entrées(array $postesStock_Entrées): self
    {
        // validation for constraint: array
        if ('' !== ($postesStock_EntréesArrayErrorMessage = self::validatePostesStock_EntréesForArrayConstraintsFromSetPostesStock_Entrées($postesStock_Entrées))) {
            throw new InvalidArgumentException($postesStock_EntréesArrayErrorMessage, __LINE__);
        }
        $this->PostesStock_Entrées = $postesStock_Entrées;
        
        return $this;
    }
    /**
     * Add item to PostesStock_Entrées value
     * @throws InvalidArgumentException
     * @param \StructType\PostesStock_Entrées $item
     * @return \StructType\R_DetailsPostesStocks
     */
    public function addToPostesStock_Entrées(\StructType\PostesStock_Entrées $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PostesStock_Entrées) {
            throw new InvalidArgumentException(sprintf('The PostesStock_Entrées property can only contain items of type \StructType\PostesStock_Entrées, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PostesStock_Entrées[] = $item;
        
        return $this;
    }
    /**
     * Get PostesStock_Sorties value
     * @return \StructType\PostesStock_Sorties[]
     */
    public function getPostesStock_Sorties(): array
    {
        return $this->PostesStock_Sorties;
    }
    /**
     * This method is responsible for validating the values passed to the setPostesStock_Sorties method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostesStock_Sorties method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostesStock_SortiesForArrayConstraintsFromSetPostesStock_Sorties(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $r_DetailsPostesStocksPostesStock_SortiesItem) {
            // validation for constraint: itemType
            if (!$r_DetailsPostesStocksPostesStock_SortiesItem instanceof \StructType\PostesStock_Sorties) {
                $invalidValues[] = is_object($r_DetailsPostesStocksPostesStock_SortiesItem) ? get_class($r_DetailsPostesStocksPostesStock_SortiesItem) : sprintf('%s(%s)', gettype($r_DetailsPostesStocksPostesStock_SortiesItem), var_export($r_DetailsPostesStocksPostesStock_SortiesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PostesStock_Sorties property can only contain items of type \StructType\PostesStock_Sorties, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PostesStock_Sorties value
     * @throws InvalidArgumentException
     * @param \StructType\PostesStock_Sorties[] $postesStock_Sorties
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setPostesStock_Sorties(array $postesStock_Sorties): self
    {
        // validation for constraint: array
        if ('' !== ($postesStock_SortiesArrayErrorMessage = self::validatePostesStock_SortiesForArrayConstraintsFromSetPostesStock_Sorties($postesStock_Sorties))) {
            throw new InvalidArgumentException($postesStock_SortiesArrayErrorMessage, __LINE__);
        }
        $this->PostesStock_Sorties = $postesStock_Sorties;
        
        return $this;
    }
    /**
     * Add item to PostesStock_Sorties value
     * @throws InvalidArgumentException
     * @param \StructType\PostesStock_Sorties $item
     * @return \StructType\R_DetailsPostesStocks
     */
    public function addToPostesStock_Sorties(\StructType\PostesStock_Sorties $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PostesStock_Sorties) {
            throw new InvalidArgumentException(sprintf('The PostesStock_Sorties property can only contain items of type \StructType\PostesStock_Sorties, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PostesStock_Sorties[] = $item;
        
        return $this;
    }
    /**
     * Get QteTransit value
     * @return string[]
     */
    public function getQteTransit(): array
    {
        return $this->QteTransit;
    }
    /**
     * This method is responsible for validating the values passed to the setQteTransit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQteTransit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQteTransitForArrayConstraintsFromSetQteTransit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $r_DetailsPostesStocksQteTransitItem) {
            // validation for constraint: itemType
            if (!is_string($r_DetailsPostesStocksQteTransitItem)) {
                $invalidValues[] = is_object($r_DetailsPostesStocksQteTransitItem) ? get_class($r_DetailsPostesStocksQteTransitItem) : sprintf('%s(%s)', gettype($r_DetailsPostesStocksQteTransitItem), var_export($r_DetailsPostesStocksQteTransitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The QteTransit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set QteTransit value
     * @throws InvalidArgumentException
     * @param string[] $qteTransit
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setQteTransit(array $qteTransit): self
    {
        // validation for constraint: array
        if ('' !== ($qteTransitArrayErrorMessage = self::validateQteTransitForArrayConstraintsFromSetQteTransit($qteTransit))) {
            throw new InvalidArgumentException($qteTransitArrayErrorMessage, __LINE__);
        }
        $this->QteTransit = $qteTransit;
        
        return $this;
    }
    /**
     * Add item to QteTransit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\R_DetailsPostesStocks
     */
    public function addToQteTransit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The QteTransit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->QteTransit[] = $item;
        
        return $this;
    }
    /**
     * Get QteTransitMulti value
     * @return string[]
     */
    public function getQteTransitMulti(): array
    {
        return $this->QteTransitMulti;
    }
    /**
     * This method is responsible for validating the values passed to the setQteTransitMulti method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQteTransitMulti method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQteTransitMultiForArrayConstraintsFromSetQteTransitMulti(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $r_DetailsPostesStocksQteTransitMultiItem) {
            // validation for constraint: itemType
            if (!is_string($r_DetailsPostesStocksQteTransitMultiItem)) {
                $invalidValues[] = is_object($r_DetailsPostesStocksQteTransitMultiItem) ? get_class($r_DetailsPostesStocksQteTransitMultiItem) : sprintf('%s(%s)', gettype($r_DetailsPostesStocksQteTransitMultiItem), var_export($r_DetailsPostesStocksQteTransitMultiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The QteTransitMulti property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set QteTransitMulti value
     * @throws InvalidArgumentException
     * @param string[] $qteTransitMulti
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setQteTransitMulti(array $qteTransitMulti): self
    {
        // validation for constraint: array
        if ('' !== ($qteTransitMultiArrayErrorMessage = self::validateQteTransitMultiForArrayConstraintsFromSetQteTransitMulti($qteTransitMulti))) {
            throw new InvalidArgumentException($qteTransitMultiArrayErrorMessage, __LINE__);
        }
        $this->QteTransitMulti = $qteTransitMulti;
        
        return $this;
    }
    /**
     * Add item to QteTransitMulti value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\R_DetailsPostesStocks
     */
    public function addToQteTransitMulti(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The QteTransitMulti property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->QteTransitMulti[] = $item;
        
        return $this;
    }
    /**
     * Get Disponible1 value
     * @return string|null
     */
    public function getDisponible1(): ?string
    {
        return $this->Disponible1;
    }
    /**
     * Set Disponible1 value
     * @param string $disponible1
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setDisponible1(?string $disponible1 = null): self
    {
        // validation for constraint: string
        if (!is_null($disponible1) && !is_string($disponible1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disponible1, true), gettype($disponible1)), __LINE__);
        }
        $this->Disponible1 = $disponible1;
        
        return $this;
    }
    /**
     * Get Disponible1_Multisociete value
     * @return string|null
     */
    public function getDisponible1_Multisociete(): ?string
    {
        return $this->Disponible1_Multisociete;
    }
    /**
     * Set Disponible1_Multisociete value
     * @param string $disponible1_Multisociete
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setDisponible1_Multisociete(?string $disponible1_Multisociete = null): self
    {
        // validation for constraint: string
        if (!is_null($disponible1_Multisociete) && !is_string($disponible1_Multisociete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disponible1_Multisociete, true), gettype($disponible1_Multisociete)), __LINE__);
        }
        $this->Disponible1_Multisociete = $disponible1_Multisociete;
        
        return $this;
    }
    /**
     * Get Disponible2 value
     * @return string|null
     */
    public function getDisponible2(): ?string
    {
        return $this->Disponible2;
    }
    /**
     * Set Disponible2 value
     * @param string $disponible2
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setDisponible2(?string $disponible2 = null): self
    {
        // validation for constraint: string
        if (!is_null($disponible2) && !is_string($disponible2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disponible2, true), gettype($disponible2)), __LINE__);
        }
        $this->Disponible2 = $disponible2;
        
        return $this;
    }
    /**
     * Get Disponible2_Multisociete value
     * @return string|null
     */
    public function getDisponible2_Multisociete(): ?string
    {
        return $this->Disponible2_Multisociete;
    }
    /**
     * Set Disponible2_Multisociete value
     * @param string $disponible2_Multisociete
     * @return \StructType\R_DetailsPostesStocks
     */
    public function setDisponible2_Multisociete(?string $disponible2_Multisociete = null): self
    {
        // validation for constraint: string
        if (!is_null($disponible2_Multisociete) && !is_string($disponible2_Multisociete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disponible2_Multisociete, true), gettype($disponible2_Multisociete)), __LINE__);
        }
        $this->Disponible2_Multisociete = $disponible2_Multisociete;
        
        return $this;
    }
}
