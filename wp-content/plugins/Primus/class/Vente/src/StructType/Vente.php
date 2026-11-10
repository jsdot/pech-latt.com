<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vente StructType
 * @subpackage Structs
 */
class Vente extends AbstractStructBase
{
    /**
     * The CodeLogiciel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $CodeLogiciel;
    /**
     * The OrderNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderNo = null;
    /**
     * The NoDocExterne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoDocExterne = null;
    /**
     * The InvoiceNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvoiceNo = null;
    /**
     * The Client
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Client|null
     */
    protected ?\StructType\Client $Client = null;
    /**
     * The Tarif
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Tarif[]
     */
    protected ?array $Tarif = null;
    /**
     * Constructor method for Vente
     * @uses Vente::setCodeLogiciel()
     * @uses Vente::setOrderNo()
     * @uses Vente::setNoDocExterne()
     * @uses Vente::setInvoiceNo()
     * @uses Vente::setClient()
     * @uses Vente::setTarif()
     * @param string[] $codeLogiciel
     * @param string $orderNo
     * @param string $noDocExterne
     * @param string $invoiceNo
     * @param \StructType\Client $client
     * @param \StructType\Tarif[] $tarif
     */
    public function __construct(array $codeLogiciel, ?string $orderNo = null, ?string $noDocExterne = null, ?string $invoiceNo = null, ?\StructType\Client $client = null, ?array $tarif = null)
    {
        $this
            ->setCodeLogiciel($codeLogiciel)
            ->setOrderNo($orderNo)
            ->setNoDocExterne($noDocExterne)
            ->setInvoiceNo($invoiceNo)
            ->setClient($client)
            ->setTarif($tarif);
    }
    /**
     * Get CodeLogiciel value
     * @return string[]
     */
    public function getCodeLogiciel(): array
    {
        return $this->CodeLogiciel;
    }
    /**
     * This method is responsible for validating the values passed to the setCodeLogiciel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCodeLogiciel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodeLogicielForArrayConstraintsFromSetCodeLogiciel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $venteCodeLogicielItem) {
            // validation for constraint: itemType
            if (!is_string($venteCodeLogicielItem)) {
                $invalidValues[] = is_object($venteCodeLogicielItem) ? get_class($venteCodeLogicielItem) : sprintf('%s(%s)', gettype($venteCodeLogicielItem), var_export($venteCodeLogicielItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CodeLogiciel property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CodeLogiciel value
     * @throws InvalidArgumentException
     * @param string[] $codeLogiciel
     * @return \StructType\Vente
     */
    public function setCodeLogiciel(array $codeLogiciel): self
    {
        // validation for constraint: array
        if ('' !== ($codeLogicielArrayErrorMessage = self::validateCodeLogicielForArrayConstraintsFromSetCodeLogiciel($codeLogiciel))) {
            throw new InvalidArgumentException($codeLogicielArrayErrorMessage, __LINE__);
        }
        $this->CodeLogiciel = $codeLogiciel;
        
        return $this;
    }
    /**
     * Add item to CodeLogiciel value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Vente
     */
    public function addToCodeLogiciel(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CodeLogiciel property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CodeLogiciel[] = $item;
        
        return $this;
    }
    /**
     * Get OrderNo value
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->OrderNo;
    }
    /**
     * Set OrderNo value
     * @param string $orderNo
     * @return \StructType\Vente
     */
    public function setOrderNo(?string $orderNo = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->OrderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get NoDocExterne value
     * @return string|null
     */
    public function getNoDocExterne(): ?string
    {
        return $this->NoDocExterne;
    }
    /**
     * Set NoDocExterne value
     * @param string $noDocExterne
     * @return \StructType\Vente
     */
    public function setNoDocExterne(?string $noDocExterne = null): self
    {
        // validation for constraint: string
        if (!is_null($noDocExterne) && !is_string($noDocExterne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noDocExterne, true), gettype($noDocExterne)), __LINE__);
        }
        $this->NoDocExterne = $noDocExterne;
        
        return $this;
    }
    /**
     * Get InvoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->InvoiceNo;
    }
    /**
     * Set InvoiceNo value
     * @param string $invoiceNo
     * @return \StructType\Vente
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->InvoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get Client value
     * @return \StructType\Client|null
     */
    public function getClient(): ?\StructType\Client
    {
        return $this->Client;
    }
    /**
     * Set Client value
     * @param \StructType\Client $client
     * @return \StructType\Vente
     */
    public function setClient(?\StructType\Client $client = null): self
    {
        $this->Client = $client;
        
        return $this;
    }
    /**
     * Get Tarif value
     * @return \StructType\Tarif[]
     */
    public function getTarif(): ?array
    {
        return $this->Tarif;
    }
    /**
     * This method is responsible for validating the values passed to the setTarif method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTarif method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTarifForArrayConstraintsFromSetTarif(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $venteTarifItem) {
            // validation for constraint: itemType
            if (!$venteTarifItem instanceof \StructType\Tarif) {
                $invalidValues[] = is_object($venteTarifItem) ? get_class($venteTarifItem) : sprintf('%s(%s)', gettype($venteTarifItem), var_export($venteTarifItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tarif property can only contain items of type \StructType\Tarif, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tarif value
     * @throws InvalidArgumentException
     * @param \StructType\Tarif[] $tarif
     * @return \StructType\Vente
     */
    public function setTarif(?array $tarif = null): self
    {
        // validation for constraint: array
        if ('' !== ($tarifArrayErrorMessage = self::validateTarifForArrayConstraintsFromSetTarif($tarif))) {
            throw new InvalidArgumentException($tarifArrayErrorMessage, __LINE__);
        }
        $this->Tarif = $tarif;
        
        return $this;
    }
    /**
     * Add item to Tarif value
     * @throws InvalidArgumentException
     * @param \StructType\Tarif $item
     * @return \StructType\Vente
     */
    public function addToTarif(\StructType\Tarif $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Tarif) {
            throw new InvalidArgumentException(sprintf('The Tarif property can only contain items of type \StructType\Tarif, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Tarif[] = $item;
        
        return $this;
    }
}
