<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Article StructType
 * @subpackage Structs
 */
class Article extends AbstractStructBase
{
    /**
     * The Filtre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Filtre
     */
    protected \StructType\Filtre $Filtre;
    /**
     * The Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Stock|null
     */
    protected ?\StructType\Stock $Stock = null;
    /**
     * The PosteStock_Achat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosteStock_Achat|null
     */
    protected ?\StructType\PosteStock_Achat $PosteStock_Achat = null;
    /**
     * The PosteStock_Vente
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosteStock_Vente|null
     */
    protected ?\StructType\PosteStock_Vente $PosteStock_Vente = null;
    /**
     * The Disponible
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Disponible|null
     */
    protected ?\StructType\Disponible $Disponible = null;
    /**
     * The Prelevement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Prelevement|null
     */
    protected ?\StructType\Prelevement $Prelevement = null;
    /**
     * The Information
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Information|null
     */
    protected ?\StructType\Information $Information = null;
    /**
     * The DetailPostesStock
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DetailPostesStock[]
     */
    protected ?array $DetailPostesStock = null;
    /**
     * The DetailStock
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DetailStock[]
     */
    protected ?array $DetailStock = null;
    /**
     * Constructor method for Article
     * @uses Article::setFiltre()
     * @uses Article::setStock()
     * @uses Article::setPosteStock_Achat()
     * @uses Article::setPosteStock_Vente()
     * @uses Article::setDisponible()
     * @uses Article::setPrelevement()
     * @uses Article::setInformation()
     * @uses Article::setDetailPostesStock()
     * @uses Article::setDetailStock()
     * @param \StructType\Filtre $filtre
     * @param \StructType\Stock $stock
     * @param \StructType\PosteStock_Achat $posteStock_Achat
     * @param \StructType\PosteStock_Vente $posteStock_Vente
     * @param \StructType\Disponible $disponible
     * @param \StructType\Prelevement $prelevement
     * @param \StructType\Information $information
     * @param \StructType\DetailPostesStock[] $detailPostesStock
     * @param \StructType\DetailStock[] $detailStock
     */
    public function __construct(\StructType\Filtre $filtre, ?\StructType\Stock $stock = null, ?\StructType\PosteStock_Achat $posteStock_Achat = null, ?\StructType\PosteStock_Vente $posteStock_Vente = null, ?\StructType\Disponible $disponible = null, ?\StructType\Prelevement $prelevement = null, ?\StructType\Information $information = null, ?array $detailPostesStock = null, ?array $detailStock = null)
    {
        $this
            ->setFiltre($filtre)
            ->setStock($stock)
            ->setPosteStock_Achat($posteStock_Achat)
            ->setPosteStock_Vente($posteStock_Vente)
            ->setDisponible($disponible)
            ->setPrelevement($prelevement)
            ->setInformation($information)
            ->setDetailPostesStock($detailPostesStock)
            ->setDetailStock($detailStock);
    }
    /**
     * Get Filtre value
     * @return \StructType\Filtre
     */
    public function getFiltre(): \StructType\Filtre
    {
        return $this->Filtre;
    }
    /**
     * Set Filtre value
     * @param \StructType\Filtre $filtre
     * @return \StructType\Article
     */
    public function setFiltre(\StructType\Filtre $filtre): self
    {
        $this->Filtre = $filtre;
        
        return $this;
    }
    /**
     * Get Stock value
     * @return \StructType\Stock|null
     */
    public function getStock(): ?\StructType\Stock
    {
        return $this->Stock;
    }
    /**
     * Set Stock value
     * @param \StructType\Stock $stock
     * @return \StructType\Article
     */
    public function setStock(?\StructType\Stock $stock = null): self
    {
        $this->Stock = $stock;
        
        return $this;
    }
    /**
     * Get PosteStock_Achat value
     * @return \StructType\PosteStock_Achat|null
     */
    public function getPosteStock_Achat(): ?\StructType\PosteStock_Achat
    {
        return $this->PosteStock_Achat;
    }
    /**
     * Set PosteStock_Achat value
     * @param \StructType\PosteStock_Achat $posteStock_Achat
     * @return \StructType\Article
     */
    public function setPosteStock_Achat(?\StructType\PosteStock_Achat $posteStock_Achat = null): self
    {
        $this->PosteStock_Achat = $posteStock_Achat;
        
        return $this;
    }
    /**
     * Get PosteStock_Vente value
     * @return \StructType\PosteStock_Vente|null
     */
    public function getPosteStock_Vente(): ?\StructType\PosteStock_Vente
    {
        return $this->PosteStock_Vente;
    }
    /**
     * Set PosteStock_Vente value
     * @param \StructType\PosteStock_Vente $posteStock_Vente
     * @return \StructType\Article
     */
    public function setPosteStock_Vente(?\StructType\PosteStock_Vente $posteStock_Vente = null): self
    {
        $this->PosteStock_Vente = $posteStock_Vente;
        
        return $this;
    }
    /**
     * Get Disponible value
     * @return \StructType\Disponible|null
     */
    public function getDisponible(): ?\StructType\Disponible
    {
        return $this->Disponible;
    }
    /**
     * Set Disponible value
     * @param \StructType\Disponible $disponible
     * @return \StructType\Article
     */
    public function setDisponible(?\StructType\Disponible $disponible = null): self
    {
        $this->Disponible = $disponible;
        
        return $this;
    }
    /**
     * Get Prelevement value
     * @return \StructType\Prelevement|null
     */
    public function getPrelevement(): ?\StructType\Prelevement
    {
        return $this->Prelevement;
    }
    /**
     * Set Prelevement value
     * @param \StructType\Prelevement $prelevement
     * @return \StructType\Article
     */
    public function setPrelevement(?\StructType\Prelevement $prelevement = null): self
    {
        $this->Prelevement = $prelevement;
        
        return $this;
    }
    /**
     * Get Information value
     * @return \StructType\Information|null
     */
    public function getInformation(): ?\StructType\Information
    {
        return $this->Information;
    }
    /**
     * Set Information value
     * @param \StructType\Information $information
     * @return \StructType\Article
     */
    public function setInformation(?\StructType\Information $information = null): self
    {
        $this->Information = $information;
        
        return $this;
    }
    /**
     * Get DetailPostesStock value
     * @return \StructType\DetailPostesStock[]
     */
    public function getDetailPostesStock(): ?array
    {
        return $this->DetailPostesStock;
    }
    /**
     * This method is responsible for validating the values passed to the setDetailPostesStock method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailPostesStock method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailPostesStockForArrayConstraintsFromSetDetailPostesStock(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $articleDetailPostesStockItem) {
            // validation for constraint: itemType
            if (!$articleDetailPostesStockItem instanceof \StructType\DetailPostesStock) {
                $invalidValues[] = is_object($articleDetailPostesStockItem) ? get_class($articleDetailPostesStockItem) : sprintf('%s(%s)', gettype($articleDetailPostesStockItem), var_export($articleDetailPostesStockItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DetailPostesStock property can only contain items of type \StructType\DetailPostesStock, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DetailPostesStock value
     * @throws InvalidArgumentException
     * @param \StructType\DetailPostesStock[] $detailPostesStock
     * @return \StructType\Article
     */
    public function setDetailPostesStock(?array $detailPostesStock = null): self
    {
        // validation for constraint: array
        if ('' !== ($detailPostesStockArrayErrorMessage = self::validateDetailPostesStockForArrayConstraintsFromSetDetailPostesStock($detailPostesStock))) {
            throw new InvalidArgumentException($detailPostesStockArrayErrorMessage, __LINE__);
        }
        $this->DetailPostesStock = $detailPostesStock;
        
        return $this;
    }
    /**
     * Add item to DetailPostesStock value
     * @throws InvalidArgumentException
     * @param \StructType\DetailPostesStock $item
     * @return \StructType\Article
     */
    public function addToDetailPostesStock(\StructType\DetailPostesStock $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DetailPostesStock) {
            throw new InvalidArgumentException(sprintf('The DetailPostesStock property can only contain items of type \StructType\DetailPostesStock, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DetailPostesStock[] = $item;
        
        return $this;
    }
    /**
     * Get DetailStock value
     * @return \StructType\DetailStock[]
     */
    public function getDetailStock(): ?array
    {
        return $this->DetailStock;
    }
    /**
     * This method is responsible for validating the values passed to the setDetailStock method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailStock method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailStockForArrayConstraintsFromSetDetailStock(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $articleDetailStockItem) {
            // validation for constraint: itemType
            if (!$articleDetailStockItem instanceof \StructType\DetailStock) {
                $invalidValues[] = is_object($articleDetailStockItem) ? get_class($articleDetailStockItem) : sprintf('%s(%s)', gettype($articleDetailStockItem), var_export($articleDetailStockItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DetailStock property can only contain items of type \StructType\DetailStock, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DetailStock value
     * @throws InvalidArgumentException
     * @param \StructType\DetailStock[] $detailStock
     * @return \StructType\Article
     */
    public function setDetailStock(?array $detailStock = null): self
    {
        // validation for constraint: array
        if ('' !== ($detailStockArrayErrorMessage = self::validateDetailStockForArrayConstraintsFromSetDetailStock($detailStock))) {
            throw new InvalidArgumentException($detailStockArrayErrorMessage, __LINE__);
        }
        $this->DetailStock = $detailStock;
        
        return $this;
    }
    /**
     * Add item to DetailStock value
     * @throws InvalidArgumentException
     * @param \StructType\DetailStock $item
     * @return \StructType\Article
     */
    public function addToDetailStock(\StructType\DetailStock $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DetailStock) {
            throw new InvalidArgumentException(sprintf('The DetailStock property can only contain items of type \StructType\DetailStock, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DetailStock[] = $item;
        
        return $this;
    }
}
