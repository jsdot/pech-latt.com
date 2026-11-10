<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ville StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Ville extends AbstractStructBase
{
    /**
     * The VilleVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $VilleVide = null;
    /**
     * Constructor method for Ville
     * @uses Ville::setVilleVide()
     * @param string $villeVide
     */
    public function __construct(?string $villeVide = null)
    {
        $this
            ->setVilleVide($villeVide);
    }
    /**
     * Get VilleVide value
     * @return string|null
     */
    public function getVilleVide(): ?string
    {
        return $this->VilleVide;
    }
    /**
     * Set VilleVide value
     * @param string $villeVide
     * @return \StructType\Ville
     */
    public function setVilleVide(?string $villeVide = null): self
    {
        // validation for constraint: string
        if (!is_null($villeVide) && !is_string($villeVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($villeVide, true), gettype($villeVide)), __LINE__);
        }
        $this->VilleVide = $villeVide;
        
        return $this;
    }
}
