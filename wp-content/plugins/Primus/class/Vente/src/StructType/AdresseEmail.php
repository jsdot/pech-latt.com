<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdresseEmail StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class AdresseEmail extends AbstractStructBase
{
    /**
     * The AdresseEmailVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AdresseEmailVide = null;
    /**
     * Constructor method for AdresseEmail
     * @uses AdresseEmail::setAdresseEmailVide()
     * @param string $adresseEmailVide
     */
    public function __construct(?string $adresseEmailVide = null)
    {
        $this
            ->setAdresseEmailVide($adresseEmailVide);
    }
    /**
     * Get AdresseEmailVide value
     * @return string|null
     */
    public function getAdresseEmailVide(): ?string
    {
        return $this->AdresseEmailVide;
    }
    /**
     * Set AdresseEmailVide value
     * @param string $adresseEmailVide
     * @return \StructType\AdresseEmail
     */
    public function setAdresseEmailVide(?string $adresseEmailVide = null): self
    {
        // validation for constraint: string
        if (!is_null($adresseEmailVide) && !is_string($adresseEmailVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresseEmailVide, true), gettype($adresseEmailVide)), __LINE__);
        }
        $this->AdresseEmailVide = $adresseEmailVide;
        
        return $this;
    }
}
