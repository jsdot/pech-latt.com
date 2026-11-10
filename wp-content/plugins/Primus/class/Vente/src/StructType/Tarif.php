<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tarif StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Tarif extends AbstractStructBase
{
    /**
     * The CodeTarif
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeTarif = null;
    /**
     * Constructor method for Tarif
     * @uses Tarif::setCodeTarif()
     * @param string $codeTarif
     */
    public function __construct(?string $codeTarif = null)
    {
        $this
            ->setCodeTarif($codeTarif);
    }
    /**
     * Get CodeTarif value
     * @return string|null
     */
    public function getCodeTarif(): ?string
    {
        return $this->CodeTarif;
    }
    /**
     * Set CodeTarif value
     * @param string $codeTarif
     * @return \StructType\Tarif
     */
    public function setCodeTarif(?string $codeTarif = null): self
    {
        // validation for constraint: string
        if (!is_null($codeTarif) && !is_string($codeTarif)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeTarif, true), gettype($codeTarif)), __LINE__);
        }
        $this->CodeTarif = $codeTarif;
        
        return $this;
    }
}
