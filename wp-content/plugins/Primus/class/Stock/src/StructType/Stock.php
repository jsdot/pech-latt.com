<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Stock StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Stock extends AbstractStructBase
{
    /**
     * The CodeLogiciel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $CodeLogiciel;
    /**
     * The CodeMagasin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeMagasin = null;
    /**
     * The ItemCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemCode = null;
    /**
     * The Quantite_Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_Stock = null;
    /**
     * Constructor method for Stock
     * @uses Stock::setCodeLogiciel()
     * @uses Stock::setCodeMagasin()
     * @uses Stock::setItemCode()
     * @uses Stock::setQuantite_Stock()
     * @param string $codeLogiciel
     * @param string $codeMagasin
     * @param string $itemCode
     * @param string $quantite_Stock
     */
    public function __construct(string $codeLogiciel, ?string $codeMagasin = null, ?string $itemCode = null, ?string $quantite_Stock = null)
    {
        $this
            ->setCodeLogiciel($codeLogiciel)
            ->setCodeMagasin($codeMagasin)
            ->setItemCode($itemCode)
            ->setQuantite_Stock($quantite_Stock);
    }
    /**
     * Get CodeLogiciel value
     * @return string
     */
    public function getCodeLogiciel(): string
    {
        return $this->CodeLogiciel;
    }
    /**
     * Set CodeLogiciel value
     * @param string $codeLogiciel
     * @return \StructType\Stock
     */
    public function setCodeLogiciel(string $codeLogiciel): self
    {
        // validation for constraint: string
        if (!is_null($codeLogiciel) && !is_string($codeLogiciel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeLogiciel, true), gettype($codeLogiciel)), __LINE__);
        }
        $this->CodeLogiciel = $codeLogiciel;
        
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
     * @return \StructType\Stock
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
     * Get ItemCode value
     * @return string|null
     */
    public function getItemCode(): ?string
    {
        return $this->ItemCode;
    }
    /**
     * Set ItemCode value
     * @param string $itemCode
     * @return \StructType\Stock
     */
    public function setItemCode(?string $itemCode = null): self
    {
        // validation for constraint: string
        if (!is_null($itemCode) && !is_string($itemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemCode, true), gettype($itemCode)), __LINE__);
        }
        $this->ItemCode = $itemCode;
        
        return $this;
    }
    /**
     * Get Quantite_Stock value
     * @return string|null
     */
    public function getQuantite_Stock(): ?string
    {
        return $this->Quantite_Stock;
    }
    /**
     * Set Quantite_Stock value
     * @param string $quantite_Stock
     * @return \StructType\Stock
     */
    public function setQuantite_Stock(?string $quantite_Stock = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_Stock) && !is_string($quantite_Stock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_Stock, true), gettype($quantite_Stock)), __LINE__);
        }
        $this->Quantite_Stock = $quantite_Stock;
        
        return $this;
    }
}
