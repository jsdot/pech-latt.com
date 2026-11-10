<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Adresse2 StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Adresse2 extends AbstractStructBase
{
    /**
     * The Adresse2Vide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Adresse2Vide = null;
    /**
     * Constructor method for Adresse2
     * @uses Adresse2::setAdresse2Vide()
     * @param string $adresse2Vide
     */
    public function __construct(?string $adresse2Vide = null)
    {
        $this
            ->setAdresse2Vide($adresse2Vide);
    }
    /**
     * Get Adresse2Vide value
     * @return string|null
     */
    public function getAdresse2Vide(): ?string
    {
        return $this->Adresse2Vide;
    }
    /**
     * Set Adresse2Vide value
     * @param string $adresse2Vide
     * @return \StructType\Adresse2
     */
    public function setAdresse2Vide(?string $adresse2Vide = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse2Vide) && !is_string($adresse2Vide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse2Vide, true), gettype($adresse2Vide)), __LINE__);
        }
        $this->Adresse2Vide = $adresse2Vide;
        
        return $this;
    }
}
