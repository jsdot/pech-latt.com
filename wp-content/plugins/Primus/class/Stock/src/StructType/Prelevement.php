<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Prelevement StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Prelevement extends AbstractStructBase
{
    /**
     * The Quantite_Prelevable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_Prelevable = null;
    /**
     * Constructor method for Prelevement
     * @uses Prelevement::setQuantite_Prelevable()
     * @param string $quantite_Prelevable
     */
    public function __construct(?string $quantite_Prelevable = null)
    {
        $this
            ->setQuantite_Prelevable($quantite_Prelevable);
    }
    /**
     * Get Quantite_Prelevable value
     * @return string|null
     */
    public function getQuantite_Prelevable(): ?string
    {
        return $this->Quantite_Prelevable;
    }
    /**
     * Set Quantite_Prelevable value
     * @param string $quantite_Prelevable
     * @return \StructType\Prelevement
     */
    public function setQuantite_Prelevable(?string $quantite_Prelevable = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_Prelevable) && !is_string($quantite_Prelevable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_Prelevable, true), gettype($quantite_Prelevable)), __LINE__);
        }
        $this->Quantite_Prelevable = $quantite_Prelevable;
        
        return $this;
    }
}
