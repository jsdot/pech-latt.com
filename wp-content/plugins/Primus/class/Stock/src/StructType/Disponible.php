<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disponible StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Disponible extends AbstractStructBase
{
    /**
     * The Quantite_Disponible1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_Disponible1 = null;
    /**
     * The Quantite_Disponible2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_Disponible2 = null;
    /**
     * Constructor method for Disponible
     * @uses Disponible::setQuantite_Disponible1()
     * @uses Disponible::setQuantite_Disponible2()
     * @param string $quantite_Disponible1
     * @param string $quantite_Disponible2
     */
    public function __construct(?string $quantite_Disponible1 = null, ?string $quantite_Disponible2 = null)
    {
        $this
            ->setQuantite_Disponible1($quantite_Disponible1)
            ->setQuantite_Disponible2($quantite_Disponible2);
    }
    /**
     * Get Quantite_Disponible1 value
     * @return string|null
     */
    public function getQuantite_Disponible1(): ?string
    {
        return $this->Quantite_Disponible1;
    }
    /**
     * Set Quantite_Disponible1 value
     * @param string $quantite_Disponible1
     * @return \StructType\Disponible
     */
    public function setQuantite_Disponible1(?string $quantite_Disponible1 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_Disponible1) && !is_string($quantite_Disponible1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_Disponible1, true), gettype($quantite_Disponible1)), __LINE__);
        }
        $this->Quantite_Disponible1 = $quantite_Disponible1;
        
        return $this;
    }
    /**
     * Get Quantite_Disponible2 value
     * @return string|null
     */
    public function getQuantite_Disponible2(): ?string
    {
        return $this->Quantite_Disponible2;
    }
    /**
     * Set Quantite_Disponible2 value
     * @param string $quantite_Disponible2
     * @return \StructType\Disponible
     */
    public function setQuantite_Disponible2(?string $quantite_Disponible2 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_Disponible2) && !is_string($quantite_Disponible2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_Disponible2, true), gettype($quantite_Disponible2)), __LINE__);
        }
        $this->Quantite_Disponible2 = $quantite_Disponible2;
        
        return $this;
    }
}
