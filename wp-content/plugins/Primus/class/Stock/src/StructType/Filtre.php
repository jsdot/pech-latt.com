<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Filtre StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Filtre extends AbstractStructBase
{
    /**
     * The NoArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1 | 0
     * @var string
     */
    protected string $NoArticle;
    /**
     * The DateStock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DateStock;
    /**
     * The DateFiltre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DateFiltre;
    /**
     * The PosteDeStock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $PosteDeStock;
    /**
     * The DateDebut
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $DateDebut;
    /**
     * The CodeBudget
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $CodeBudget;
    /**
     * The Nature
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Nature;
    /**
     * The EtatProduit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $EtatProduit;
    /**
     * The NoLot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoLot = null;
    /**
     * The NoSerie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoSerie = null;
    /**
     * The CodeMagasin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeMagasin = null;
    /**
     * The CodeEmplacement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeEmplacement = null;
    /**
     * The CodeRaccourciAxe1Filtre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeRaccourciAxe1Filtre = null;
    /**
     * The CodeRaccourciAxe2Filtre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeRaccourciAxe2Filtre = null;
    /**
     * The CodeMagasinFiltre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeMagasinFiltre = null;
    /**
     * The LivraisonDirecteFiltre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LivraisonDirecteFiltre = null;
    /**
     * The CodeVariantFiltre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeVariantFiltre = null;
    /**
     * The ProduitDeBase
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProduitDeBase = null;
    /**
     * Constructor method for Filtre
     * @uses Filtre::setNoArticle()
     * @uses Filtre::setDateStock()
     * @uses Filtre::setDateFiltre()
     * @uses Filtre::setPosteDeStock()
     * @uses Filtre::setDateDebut()
     * @uses Filtre::setCodeBudget()
     * @uses Filtre::setNature()
     * @uses Filtre::setEtatProduit()
     * @uses Filtre::setNoLot()
     * @uses Filtre::setNoSerie()
     * @uses Filtre::setCodeMagasin()
     * @uses Filtre::setCodeEmplacement()
     * @uses Filtre::setCodeRaccourciAxe1Filtre()
     * @uses Filtre::setCodeRaccourciAxe2Filtre()
     * @uses Filtre::setCodeMagasinFiltre()
     * @uses Filtre::setLivraisonDirecteFiltre()
     * @uses Filtre::setCodeVariantFiltre()
     * @uses Filtre::setProduitDeBase()
     * @param string $noArticle
     * @param string $dateStock
     * @param string $dateFiltre
     * @param string $posteDeStock
     * @param string[] $dateDebut
     * @param string[] $codeBudget
     * @param string[] $nature
     * @param string[] $etatProduit
     * @param string $noLot
     * @param string $noSerie
     * @param string $codeMagasin
     * @param string $codeEmplacement
     * @param string $codeRaccourciAxe1Filtre
     * @param string $codeRaccourciAxe2Filtre
     * @param string $codeMagasinFiltre
     * @param string $livraisonDirecteFiltre
     * @param string $codeVariantFiltre
     * @param string $produitDeBase
     */
    public function __construct(string $noArticle, string $dateStock, string $dateFiltre, string $posteDeStock, array $dateDebut, array $codeBudget, array $nature, array $etatProduit, ?string $noLot = null, ?string $noSerie = null, ?string $codeMagasin = null, ?string $codeEmplacement = null, ?string $codeRaccourciAxe1Filtre = null, ?string $codeRaccourciAxe2Filtre = null, ?string $codeMagasinFiltre = null, ?string $livraisonDirecteFiltre = null, ?string $codeVariantFiltre = null, ?string $produitDeBase = null)
    {
        $this
            ->setNoArticle($noArticle)
            ->setDateStock($dateStock)
            ->setDateFiltre($dateFiltre)
            ->setPosteDeStock($posteDeStock)
            ->setDateDebut($dateDebut)
            ->setCodeBudget($codeBudget)
            ->setNature($nature)
            ->setEtatProduit($etatProduit)
            ->setNoLot($noLot)
            ->setNoSerie($noSerie)
            ->setCodeMagasin($codeMagasin)
            ->setCodeEmplacement($codeEmplacement)
            ->setCodeRaccourciAxe1Filtre($codeRaccourciAxe1Filtre)
            ->setCodeRaccourciAxe2Filtre($codeRaccourciAxe2Filtre)
            ->setCodeMagasinFiltre($codeMagasinFiltre)
            ->setLivraisonDirecteFiltre($livraisonDirecteFiltre)
            ->setCodeVariantFiltre($codeVariantFiltre)
            ->setProduitDeBase($produitDeBase);
    }
    /**
     * Get NoArticle value
     * @return string
     */
    public function getNoArticle(): string
    {
        return $this->NoArticle;
    }
    /**
     * Set NoArticle value
     * @param string $noArticle
     * @return \StructType\Filtre
     */
    public function setNoArticle(string $noArticle): self
    {
        // validation for constraint: string
        if (!is_null($noArticle) && !is_string($noArticle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noArticle, true), gettype($noArticle)), __LINE__);
        }
        $this->NoArticle = $noArticle;
        
        return $this;
    }
    /**
     * Get DateStock value
     * @return string
     */
    public function getDateStock(): string
    {
        return $this->DateStock;
    }
    /**
     * Set DateStock value
     * @param string $dateStock
     * @return \StructType\Filtre
     */
    public function setDateStock(string $dateStock): self
    {
        // validation for constraint: string
        if (!is_null($dateStock) && !is_string($dateStock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateStock, true), gettype($dateStock)), __LINE__);
        }
        $this->DateStock = $dateStock;
        
        return $this;
    }
    /**
     * Get DateFiltre value
     * @return string
     */
    public function getDateFiltre(): string
    {
        return $this->DateFiltre;
    }
    /**
     * Set DateFiltre value
     * @param string $dateFiltre
     * @return \StructType\Filtre
     */
    public function setDateFiltre(string $dateFiltre): self
    {
        // validation for constraint: string
        if (!is_null($dateFiltre) && !is_string($dateFiltre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFiltre, true), gettype($dateFiltre)), __LINE__);
        }
        $this->DateFiltre = $dateFiltre;
        
        return $this;
    }
    /**
     * Get PosteDeStock value
     * @return string
     */
    public function getPosteDeStock(): string
    {
        return $this->PosteDeStock;
    }
    /**
     * Set PosteDeStock value
     * @param string $posteDeStock
     * @return \StructType\Filtre
     */
    public function setPosteDeStock(string $posteDeStock): self
    {
        // validation for constraint: string
        if (!is_null($posteDeStock) && !is_string($posteDeStock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posteDeStock, true), gettype($posteDeStock)), __LINE__);
        }
        $this->PosteDeStock = $posteDeStock;
        
        return $this;
    }
    /**
     * Get DateDebut value
     * @return string[]
     */
    public function getDateDebut(): array
    {
        return $this->DateDebut;
    }
    /**
     * This method is responsible for validating the values passed to the setDateDebut method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDateDebut method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDateDebutForArrayConstraintsFromSetDateDebut(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $filtreDateDebutItem) {
            // validation for constraint: itemType
            if (!is_string($filtreDateDebutItem)) {
                $invalidValues[] = is_object($filtreDateDebutItem) ? get_class($filtreDateDebutItem) : sprintf('%s(%s)', gettype($filtreDateDebutItem), var_export($filtreDateDebutItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DateDebut property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DateDebut value
     * @throws InvalidArgumentException
     * @param string[] $dateDebut
     * @return \StructType\Filtre
     */
    public function setDateDebut(array $dateDebut): self
    {
        // validation for constraint: array
        if ('' !== ($dateDebutArrayErrorMessage = self::validateDateDebutForArrayConstraintsFromSetDateDebut($dateDebut))) {
            throw new InvalidArgumentException($dateDebutArrayErrorMessage, __LINE__);
        }
        $this->DateDebut = $dateDebut;
        
        return $this;
    }
    /**
     * Add item to DateDebut value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Filtre
     */
    public function addToDateDebut(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The DateDebut property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DateDebut[] = $item;
        
        return $this;
    }
    /**
     * Get CodeBudget value
     * @return string[]
     */
    public function getCodeBudget(): array
    {
        return $this->CodeBudget;
    }
    /**
     * This method is responsible for validating the values passed to the setCodeBudget method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCodeBudget method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodeBudgetForArrayConstraintsFromSetCodeBudget(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $filtreCodeBudgetItem) {
            // validation for constraint: itemType
            if (!is_string($filtreCodeBudgetItem)) {
                $invalidValues[] = is_object($filtreCodeBudgetItem) ? get_class($filtreCodeBudgetItem) : sprintf('%s(%s)', gettype($filtreCodeBudgetItem), var_export($filtreCodeBudgetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CodeBudget property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CodeBudget value
     * @throws InvalidArgumentException
     * @param string[] $codeBudget
     * @return \StructType\Filtre
     */
    public function setCodeBudget(array $codeBudget): self
    {
        // validation for constraint: array
        if ('' !== ($codeBudgetArrayErrorMessage = self::validateCodeBudgetForArrayConstraintsFromSetCodeBudget($codeBudget))) {
            throw new InvalidArgumentException($codeBudgetArrayErrorMessage, __LINE__);
        }
        $this->CodeBudget = $codeBudget;
        
        return $this;
    }
    /**
     * Add item to CodeBudget value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Filtre
     */
    public function addToCodeBudget(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CodeBudget property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CodeBudget[] = $item;
        
        return $this;
    }
    /**
     * Get Nature value
     * @return string[]
     */
    public function getNature(): array
    {
        return $this->Nature;
    }
    /**
     * This method is responsible for validating the values passed to the setNature method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNature method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNatureForArrayConstraintsFromSetNature(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $filtreNatureItem) {
            // validation for constraint: itemType
            if (!is_string($filtreNatureItem)) {
                $invalidValues[] = is_object($filtreNatureItem) ? get_class($filtreNatureItem) : sprintf('%s(%s)', gettype($filtreNatureItem), var_export($filtreNatureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Nature property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Nature value
     * @throws InvalidArgumentException
     * @param string[] $nature
     * @return \StructType\Filtre
     */
    public function setNature(array $nature): self
    {
        // validation for constraint: array
        if ('' !== ($natureArrayErrorMessage = self::validateNatureForArrayConstraintsFromSetNature($nature))) {
            throw new InvalidArgumentException($natureArrayErrorMessage, __LINE__);
        }
        $this->Nature = $nature;
        
        return $this;
    }
    /**
     * Add item to Nature value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Filtre
     */
    public function addToNature(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Nature property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Nature[] = $item;
        
        return $this;
    }
    /**
     * Get EtatProduit value
     * @return string[]
     */
    public function getEtatProduit(): array
    {
        return $this->EtatProduit;
    }
    /**
     * This method is responsible for validating the values passed to the setEtatProduit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEtatProduit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEtatProduitForArrayConstraintsFromSetEtatProduit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $filtreEtatProduitItem) {
            // validation for constraint: itemType
            if (!is_string($filtreEtatProduitItem)) {
                $invalidValues[] = is_object($filtreEtatProduitItem) ? get_class($filtreEtatProduitItem) : sprintf('%s(%s)', gettype($filtreEtatProduitItem), var_export($filtreEtatProduitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EtatProduit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EtatProduit value
     * @throws InvalidArgumentException
     * @param string[] $etatProduit
     * @return \StructType\Filtre
     */
    public function setEtatProduit(array $etatProduit): self
    {
        // validation for constraint: array
        if ('' !== ($etatProduitArrayErrorMessage = self::validateEtatProduitForArrayConstraintsFromSetEtatProduit($etatProduit))) {
            throw new InvalidArgumentException($etatProduitArrayErrorMessage, __LINE__);
        }
        $this->EtatProduit = $etatProduit;
        
        return $this;
    }
    /**
     * Add item to EtatProduit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Filtre
     */
    public function addToEtatProduit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The EtatProduit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EtatProduit[] = $item;
        
        return $this;
    }
    /**
     * Get NoLot value
     * @return string|null
     */
    public function getNoLot(): ?string
    {
        return $this->NoLot;
    }
    /**
     * Set NoLot value
     * @param string $noLot
     * @return \StructType\Filtre
     */
    public function setNoLot(?string $noLot = null): self
    {
        // validation for constraint: string
        if (!is_null($noLot) && !is_string($noLot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noLot, true), gettype($noLot)), __LINE__);
        }
        $this->NoLot = $noLot;
        
        return $this;
    }
    /**
     * Get NoSerie value
     * @return string|null
     */
    public function getNoSerie(): ?string
    {
        return $this->NoSerie;
    }
    /**
     * Set NoSerie value
     * @param string $noSerie
     * @return \StructType\Filtre
     */
    public function setNoSerie(?string $noSerie = null): self
    {
        // validation for constraint: string
        if (!is_null($noSerie) && !is_string($noSerie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noSerie, true), gettype($noSerie)), __LINE__);
        }
        $this->NoSerie = $noSerie;
        
        return $this;
    }
    /**
     * Get CodeMagasin value
     * @return string|null
     */
    public function getCodeMagasin(): ?string
    {
        return $this->CodeMagasin;
    }
    /**
     * Set CodeMagasin value
     * @param string $codeMagasin
     * @return \StructType\Filtre
     */
    public function setCodeMagasin(?string $codeMagasin = null): self
    {
        // validation for constraint: string
        if (!is_null($codeMagasin) && !is_string($codeMagasin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeMagasin, true), gettype($codeMagasin)), __LINE__);
        }
        $this->CodeMagasin = $codeMagasin;
        
        return $this;
    }
    /**
     * Get CodeEmplacement value
     * @return string|null
     */
    public function getCodeEmplacement(): ?string
    {
        return $this->CodeEmplacement;
    }
    /**
     * Set CodeEmplacement value
     * @param string $codeEmplacement
     * @return \StructType\Filtre
     */
    public function setCodeEmplacement(?string $codeEmplacement = null): self
    {
        // validation for constraint: string
        if (!is_null($codeEmplacement) && !is_string($codeEmplacement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeEmplacement, true), gettype($codeEmplacement)), __LINE__);
        }
        $this->CodeEmplacement = $codeEmplacement;
        
        return $this;
    }
    /**
     * Get CodeRaccourciAxe1Filtre value
     * @return string|null
     */
    public function getCodeRaccourciAxe1Filtre(): ?string
    {
        return $this->CodeRaccourciAxe1Filtre;
    }
    /**
     * Set CodeRaccourciAxe1Filtre value
     * @param string $codeRaccourciAxe1Filtre
     * @return \StructType\Filtre
     */
    public function setCodeRaccourciAxe1Filtre(?string $codeRaccourciAxe1Filtre = null): self
    {
        // validation for constraint: string
        if (!is_null($codeRaccourciAxe1Filtre) && !is_string($codeRaccourciAxe1Filtre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeRaccourciAxe1Filtre, true), gettype($codeRaccourciAxe1Filtre)), __LINE__);
        }
        $this->CodeRaccourciAxe1Filtre = $codeRaccourciAxe1Filtre;
        
        return $this;
    }
    /**
     * Get CodeRaccourciAxe2Filtre value
     * @return string|null
     */
    public function getCodeRaccourciAxe2Filtre(): ?string
    {
        return $this->CodeRaccourciAxe2Filtre;
    }
    /**
     * Set CodeRaccourciAxe2Filtre value
     * @param string $codeRaccourciAxe2Filtre
     * @return \StructType\Filtre
     */
    public function setCodeRaccourciAxe2Filtre(?string $codeRaccourciAxe2Filtre = null): self
    {
        // validation for constraint: string
        if (!is_null($codeRaccourciAxe2Filtre) && !is_string($codeRaccourciAxe2Filtre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeRaccourciAxe2Filtre, true), gettype($codeRaccourciAxe2Filtre)), __LINE__);
        }
        $this->CodeRaccourciAxe2Filtre = $codeRaccourciAxe2Filtre;
        
        return $this;
    }
    /**
     * Get CodeMagasinFiltre value
     * @return string|null
     */
    public function getCodeMagasinFiltre(): ?string
    {
        return $this->CodeMagasinFiltre;
    }
    /**
     * Set CodeMagasinFiltre value
     * @param string $codeMagasinFiltre
     * @return \StructType\Filtre
     */
    public function setCodeMagasinFiltre(?string $codeMagasinFiltre = null): self
    {
        // validation for constraint: string
        if (!is_null($codeMagasinFiltre) && !is_string($codeMagasinFiltre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeMagasinFiltre, true), gettype($codeMagasinFiltre)), __LINE__);
        }
        $this->CodeMagasinFiltre = $codeMagasinFiltre;
        
        return $this;
    }
    /**
     * Get LivraisonDirecteFiltre value
     * @return string|null
     */
    public function getLivraisonDirecteFiltre(): ?string
    {
        return $this->LivraisonDirecteFiltre;
    }
    /**
     * Set LivraisonDirecteFiltre value
     * @param string $livraisonDirecteFiltre
     * @return \StructType\Filtre
     */
    public function setLivraisonDirecteFiltre(?string $livraisonDirecteFiltre = null): self
    {
        // validation for constraint: string
        if (!is_null($livraisonDirecteFiltre) && !is_string($livraisonDirecteFiltre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($livraisonDirecteFiltre, true), gettype($livraisonDirecteFiltre)), __LINE__);
        }
        $this->LivraisonDirecteFiltre = $livraisonDirecteFiltre;
        
        return $this;
    }
    /**
     * Get CodeVariantFiltre value
     * @return string|null
     */
    public function getCodeVariantFiltre(): ?string
    {
        return $this->CodeVariantFiltre;
    }
    /**
     * Set CodeVariantFiltre value
     * @param string $codeVariantFiltre
     * @return \StructType\Filtre
     */
    public function setCodeVariantFiltre(?string $codeVariantFiltre = null): self
    {
        // validation for constraint: string
        if (!is_null($codeVariantFiltre) && !is_string($codeVariantFiltre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeVariantFiltre, true), gettype($codeVariantFiltre)), __LINE__);
        }
        $this->CodeVariantFiltre = $codeVariantFiltre;
        
        return $this;
    }
    /**
     * Get ProduitDeBase value
     * @return string|null
     */
    public function getProduitDeBase(): ?string
    {
        return $this->ProduitDeBase;
    }
    /**
     * Set ProduitDeBase value
     * @param string $produitDeBase
     * @return \StructType\Filtre
     */
    public function setProduitDeBase(?string $produitDeBase = null): self
    {
        // validation for constraint: string
        if (!is_null($produitDeBase) && !is_string($produitDeBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($produitDeBase, true), gettype($produitDeBase)), __LINE__);
        }
        $this->ProduitDeBase = $produitDeBase;
        
        return $this;
    }
}
