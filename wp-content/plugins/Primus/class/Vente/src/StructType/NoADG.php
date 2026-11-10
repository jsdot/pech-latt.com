<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoADG StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NoADG extends AbstractStructBase
{
    /**
     * The NoADGVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NoADGVide = null;
    /**
     * Constructor method for NoADG
     * @uses NoADG::setNoADGVide()
     * @param string $noADGVide
     */
    public function __construct(?string $noADGVide = null)
    {
        $this
            ->setNoADGVide($noADGVide);
    }
    /**
     * Get NoADGVide value
     * @return string|null
     */
    public function getNoADGVide(): ?string
    {
        return $this->NoADGVide;
    }
    /**
     * Set NoADGVide value
     * @param string $noADGVide
     * @return \StructType\NoADG
     */
    public function setNoADGVide(?string $noADGVide = null): self
    {
        // validation for constraint: string
        if (!is_null($noADGVide) && !is_string($noADGVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noADGVide, true), gettype($noADGVide)), __LINE__);
        }
        $this->NoADGVide = $noADGVide;
        
        return $this;
    }
}
