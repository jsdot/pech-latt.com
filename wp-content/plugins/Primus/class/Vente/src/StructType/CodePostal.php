<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodePostal StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class CodePostal extends AbstractStructBase
{
    /**
     * The CodePostalVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CodePostalVide = null;
    /**
     * Constructor method for CodePostal
     * @uses CodePostal::setCodePostalVide()
     * @param string $codePostalVide
     */
    public function __construct(?string $codePostalVide = null)
    {
        $this
            ->setCodePostalVide($codePostalVide);
    }
    /**
     * Get CodePostalVide value
     * @return string|null
     */
    public function getCodePostalVide(): ?string
    {
        return $this->CodePostalVide;
    }
    /**
     * Set CodePostalVide value
     * @param string $codePostalVide
     * @return \StructType\CodePostal
     */
    public function setCodePostalVide(?string $codePostalVide = null): self
    {
        // validation for constraint: string
        if (!is_null($codePostalVide) && !is_string($codePostalVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePostalVide, true), gettype($codePostalVide)), __LINE__);
        }
        $this->CodePostalVide = $codePostalVide;
        
        return $this;
    }
}
