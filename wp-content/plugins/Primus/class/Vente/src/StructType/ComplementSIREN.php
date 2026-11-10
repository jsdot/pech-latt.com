<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplementSIREN StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class ComplementSIREN extends AbstractStructBase
{
    /**
     * The ComplementSIRENVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ComplementSIRENVide = null;
    /**
     * Constructor method for ComplementSIREN
     * @uses ComplementSIREN::setComplementSIRENVide()
     * @param string $complementSIRENVide
     */
    public function __construct(?string $complementSIRENVide = null)
    {
        $this
            ->setComplementSIRENVide($complementSIRENVide);
    }
    /**
     * Get ComplementSIRENVide value
     * @return string|null
     */
    public function getComplementSIRENVide(): ?string
    {
        return $this->ComplementSIRENVide;
    }
    /**
     * Set ComplementSIRENVide value
     * @param string $complementSIRENVide
     * @return \StructType\ComplementSIREN
     */
    public function setComplementSIRENVide(?string $complementSIRENVide = null): self
    {
        // validation for constraint: string
        if (!is_null($complementSIRENVide) && !is_string($complementSIRENVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($complementSIRENVide, true), gettype($complementSIRENVide)), __LINE__);
        }
        $this->ComplementSIRENVide = $complementSIRENVide;
        
        return $this;
    }
}
