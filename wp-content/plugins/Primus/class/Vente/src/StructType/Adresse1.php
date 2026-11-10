<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Adresse1 StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Adresse1 extends AbstractStructBase
{
    /**
     * The Adresse1Vide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Adresse1Vide = null;
    /**
     * Constructor method for Adresse1
     * @uses Adresse1::setAdresse1Vide()
     * @param string $adresse1Vide
     */
    public function __construct(?string $adresse1Vide = null)
    {
        $this
            ->setAdresse1Vide($adresse1Vide);
    }
    /**
     * Get Adresse1Vide value
     * @return string|null
     */
    public function getAdresse1Vide(): ?string
    {
        return $this->Adresse1Vide;
    }
    /**
     * Set Adresse1Vide value
     * @param string $adresse1Vide
     * @return \StructType\Adresse1
     */
    public function setAdresse1Vide(?string $adresse1Vide = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse1Vide) && !is_string($adresse1Vide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse1Vide, true), gettype($adresse1Vide)), __LINE__);
        }
        $this->Adresse1Vide = $adresse1Vide;
        
        return $this;
    }
}
