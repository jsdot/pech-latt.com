<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nom StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Nom extends AbstractStructBase
{
    /**
     * The NomVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NomVide = null;
    /**
     * Constructor method for Nom
     * @uses Nom::setNomVide()
     * @param string $nomVide
     */
    public function __construct(?string $nomVide = null)
    {
        $this
            ->setNomVide($nomVide);
    }
    /**
     * Get NomVide value
     * @return string|null
     */
    public function getNomVide(): ?string
    {
        return $this->NomVide;
    }
    /**
     * Set NomVide value
     * @param string $nomVide
     * @return \StructType\Nom
     */
    public function setNomVide(?string $nomVide = null): self
    {
        // validation for constraint: string
        if (!is_null($nomVide) && !is_string($nomVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomVide, true), gettype($nomVide)), __LINE__);
        }
        $this->NomVide = $nomVide;
        
        return $this;
    }
}
