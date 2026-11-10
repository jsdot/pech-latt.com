<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeAPE StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class CodeAPE extends AbstractStructBase
{
    /**
     * The CodeAPEVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CodeAPEVide = null;
    /**
     * Constructor method for CodeAPE
     * @uses CodeAPE::setCodeAPEVide()
     * @param string $codeAPEVide
     */
    public function __construct(?string $codeAPEVide = null)
    {
        $this
            ->setCodeAPEVide($codeAPEVide);
    }
    /**
     * Get CodeAPEVide value
     * @return string|null
     */
    public function getCodeAPEVide(): ?string
    {
        return $this->CodeAPEVide;
    }
    /**
     * Set CodeAPEVide value
     * @param string $codeAPEVide
     * @return \StructType\CodeAPE
     */
    public function setCodeAPEVide(?string $codeAPEVide = null): self
    {
        // validation for constraint: string
        if (!is_null($codeAPEVide) && !is_string($codeAPEVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeAPEVide, true), gettype($codeAPEVide)), __LINE__);
        }
        $this->CodeAPEVide = $codeAPEVide;
        
        return $this;
    }
}
