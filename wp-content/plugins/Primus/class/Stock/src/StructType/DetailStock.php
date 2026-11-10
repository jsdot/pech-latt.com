<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailStock StructType
 * @subpackage Structs
 */
class DetailStock extends AbstractStructBase
{
    /**
     * The NoArticle_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $NoArticle_Stock;
    /**
     * The Quantite_Stock
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Quantite_Stock;
    /**
     * The GUIDTraitement_Stock
     * Meta information extracted from the WSDL
     * - default: {00000000-0000-0000-0000-000000000000}
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $GUIDTraitement_Stock;
    /**
     * The TraitementLigne_Stock
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $TraitementLigne_Stock;
    /**
     * The CompanyName_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $CompanyName_Stock;
    /**
     * The UserName_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $UserName_Stock;
    /**
     * The NoLot_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoLot_Stock = null;
    /**
     * The NoSerie_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoSerie_Stock = null;
    /**
     * The CodeMagasin_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeMagasin_Stock = null;
    /**
     * The CodeEmplacement_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeEmplacement_Stock = null;
    /**
     * Constructor method for DetailStock
     * @uses DetailStock::setNoArticle_Stock()
     * @uses DetailStock::setQuantite_Stock()
     * @uses DetailStock::setGUIDTraitement_Stock()
     * @uses DetailStock::setTraitementLigne_Stock()
     * @uses DetailStock::setCompanyName_Stock()
     * @uses DetailStock::setUserName_Stock()
     * @uses DetailStock::setNoLot_Stock()
     * @uses DetailStock::setNoSerie_Stock()
     * @uses DetailStock::setCodeMagasin_Stock()
     * @uses DetailStock::setCodeEmplacement_Stock()
     * @param string $noArticle_Stock
     * @param float $quantite_Stock
     * @param string $gUIDTraitement_Stock
     * @param int $traitementLigne_Stock
     * @param string $companyName_Stock
     * @param string $userName_Stock
     * @param string $noLot_Stock
     * @param string $noSerie_Stock
     * @param string $codeMagasin_Stock
     * @param string $codeEmplacement_Stock
     */
    public function __construct(string $noArticle_Stock, float $quantite_Stock, string $gUIDTraitement_Stock, int $traitementLigne_Stock, string $companyName_Stock, string $userName_Stock, ?string $noLot_Stock = null, ?string $noSerie_Stock = null, ?string $codeMagasin_Stock = null, ?string $codeEmplacement_Stock = null)
    {
        $this
            ->setNoArticle_Stock($noArticle_Stock)
            ->setQuantite_Stock($quantite_Stock)
            ->setGUIDTraitement_Stock($gUIDTraitement_Stock)
            ->setTraitementLigne_Stock($traitementLigne_Stock)
            ->setCompanyName_Stock($companyName_Stock)
            ->setUserName_Stock($userName_Stock)
            ->setNoLot_Stock($noLot_Stock)
            ->setNoSerie_Stock($noSerie_Stock)
            ->setCodeMagasin_Stock($codeMagasin_Stock)
            ->setCodeEmplacement_Stock($codeEmplacement_Stock);
    }
    /**
     * Get NoArticle_Stock value
     * @return string
     */
    public function getNoArticle_Stock(): string
    {
        return $this->NoArticle_Stock;
    }
    /**
     * Set NoArticle_Stock value
     * @param string $noArticle_Stock
     * @return \StructType\DetailStock
     */
    public function setNoArticle_Stock(string $noArticle_Stock): self
    {
        // validation for constraint: string
        if (!is_null($noArticle_Stock) && !is_string($noArticle_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noArticle_Stock, true), gettype($noArticle_Stock)), __LINE__);
        }
        $this->NoArticle_Stock = $noArticle_Stock;
        
        return $this;
    }
    /**
     * Get Quantite_Stock value
     * @return float
     */
    public function getQuantite_Stock(): float
    {
        return $this->Quantite_Stock;
    }
    /**
     * Set Quantite_Stock value
     * @param float $quantite_Stock
     * @return \StructType\DetailStock
     */
    public function setQuantite_Stock(float $quantite_Stock): self
    {
        // validation for constraint: float
        if (!is_null($quantite_Stock) && !(is_float($quantite_Stock) || is_numeric($quantite_Stock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($quantite_Stock, true), gettype($quantite_Stock)), __LINE__);
        }
        $this->Quantite_Stock = $quantite_Stock;
        
        return $this;
    }
    /**
     * Get GUIDTraitement_Stock value
     * @return string
     */
    public function getGUIDTraitement_Stock(): string
    {
        return $this->GUIDTraitement_Stock;
    }
    /**
     * Set GUIDTraitement_Stock value
     * @param string $gUIDTraitement_Stock
     * @return \StructType\DetailStock
     */
    public function setGUIDTraitement_Stock(string $gUIDTraitement_Stock): self
    {
        // validation for constraint: string
        if (!is_null($gUIDTraitement_Stock) && !is_string($gUIDTraitement_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gUIDTraitement_Stock, true), gettype($gUIDTraitement_Stock)), __LINE__);
        }
        $this->GUIDTraitement_Stock = $gUIDTraitement_Stock;
        
        return $this;
    }
    /**
     * Get TraitementLigne_Stock value
     * @return int
     */
    public function getTraitementLigne_Stock(): int
    {
        return $this->TraitementLigne_Stock;
    }
    /**
     * Set TraitementLigne_Stock value
     * @param int $traitementLigne_Stock
     * @return \StructType\DetailStock
     */
    public function setTraitementLigne_Stock(int $traitementLigne_Stock): self
    {
        // validation for constraint: int
        if (!is_null($traitementLigne_Stock) && !(is_int($traitementLigne_Stock) || ctype_digit($traitementLigne_Stock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($traitementLigne_Stock, true), gettype($traitementLigne_Stock)), __LINE__);
        }
        $this->TraitementLigne_Stock = $traitementLigne_Stock;
        
        return $this;
    }
    /**
     * Get CompanyName_Stock value
     * @return string
     */
    public function getCompanyName_Stock(): string
    {
        return $this->CompanyName_Stock;
    }
    /**
     * Set CompanyName_Stock value
     * @param string $companyName_Stock
     * @return \StructType\DetailStock
     */
    public function setCompanyName_Stock(string $companyName_Stock): self
    {
        // validation for constraint: string
        if (!is_null($companyName_Stock) && !is_string($companyName_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName_Stock, true), gettype($companyName_Stock)), __LINE__);
        }
        $this->CompanyName_Stock = $companyName_Stock;
        
        return $this;
    }
    /**
     * Get UserName_Stock value
     * @return string
     */
    public function getUserName_Stock(): string
    {
        return $this->UserName_Stock;
    }
    /**
     * Set UserName_Stock value
     * @param string $userName_Stock
     * @return \StructType\DetailStock
     */
    public function setUserName_Stock(string $userName_Stock): self
    {
        // validation for constraint: string
        if (!is_null($userName_Stock) && !is_string($userName_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName_Stock, true), gettype($userName_Stock)), __LINE__);
        }
        $this->UserName_Stock = $userName_Stock;
        
        return $this;
    }
    /**
     * Get NoLot_Stock value
     * @return string|null
     */
    public function getNoLot_Stock(): ?string
    {
        return $this->NoLot_Stock;
    }
    /**
     * Set NoLot_Stock value
     * @param string $noLot_Stock
     * @return \StructType\DetailStock
     */
    public function setNoLot_Stock(?string $noLot_Stock = null): self
    {
        // validation for constraint: string
        if (!is_null($noLot_Stock) && !is_string($noLot_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noLot_Stock, true), gettype($noLot_Stock)), __LINE__);
        }
        $this->NoLot_Stock = $noLot_Stock;
        
        return $this;
    }
    /**
     * Get NoSerie_Stock value
     * @return string|null
     */
    public function getNoSerie_Stock(): ?string
    {
        return $this->NoSerie_Stock;
    }
    /**
     * Set NoSerie_Stock value
     * @param string $noSerie_Stock
     * @return \StructType\DetailStock
     */
    public function setNoSerie_Stock(?string $noSerie_Stock = null): self
    {
        // validation for constraint: string
        if (!is_null($noSerie_Stock) && !is_string($noSerie_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noSerie_Stock, true), gettype($noSerie_Stock)), __LINE__);
        }
        $this->NoSerie_Stock = $noSerie_Stock;
        
        return $this;
    }
    /**
     * Get CodeMagasin_Stock value
     * @return string|null
     */
    public function getCodeMagasin_Stock(): ?string
    {
        return $this->CodeMagasin_Stock;
    }
    /**
     * Set CodeMagasin_Stock value
     * @param string $codeMagasin_Stock
     * @return \StructType\DetailStock
     */
    public function setCodeMagasin_Stock(?string $codeMagasin_Stock = null): self
    {
        // validation for constraint: string
        if (!is_null($codeMagasin_Stock) && !is_string($codeMagasin_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeMagasin_Stock, true), gettype($codeMagasin_Stock)), __LINE__);
        }
        $this->CodeMagasin_Stock = $codeMagasin_Stock;
        
        return $this;
    }
    /**
     * Get CodeEmplacement_Stock value
     * @return string|null
     */
    public function getCodeEmplacement_Stock(): ?string
    {
        return $this->CodeEmplacement_Stock;
    }
    /**
     * Set CodeEmplacement_Stock value
     * @param string $codeEmplacement_Stock
     * @return \StructType\DetailStock
     */
    public function setCodeEmplacement_Stock(?string $codeEmplacement_Stock = null): self
    {
        // validation for constraint: string
        if (!is_null($codeEmplacement_Stock) && !is_string($codeEmplacement_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeEmplacement_Stock, true), gettype($codeEmplacement_Stock)), __LINE__);
        }
        $this->CodeEmplacement_Stock = $codeEmplacement_Stock;
        
        return $this;
    }
}
