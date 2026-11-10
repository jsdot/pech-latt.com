<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TelexNo StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class TelexNo extends AbstractStructBase
{
    /**
     * The TelexNoVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TelexNoVide = null;
    /**
     * Constructor method for TelexNo
     * @uses TelexNo::setTelexNoVide()
     * @param string $telexNoVide
     */
    public function __construct(?string $telexNoVide = null)
    {
        $this
            ->setTelexNoVide($telexNoVide);
    }
    /**
     * Get TelexNoVide value
     * @return string|null
     */
    public function getTelexNoVide(): ?string
    {
        return $this->TelexNoVide;
    }
    /**
     * Set TelexNoVide value
     * @param string $telexNoVide
     * @return \StructType\TelexNo
     */
    public function setTelexNoVide(?string $telexNoVide = null): self
    {
        // validation for constraint: string
        if (!is_null($telexNoVide) && !is_string($telexNoVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telexNoVide, true), gettype($telexNoVide)), __LINE__);
        }
        $this->TelexNoVide = $telexNoVide;
        
        return $this;
    }
}
