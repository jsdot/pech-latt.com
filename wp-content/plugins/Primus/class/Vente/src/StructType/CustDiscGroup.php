<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustDiscGroup StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class CustDiscGroup extends AbstractStructBase
{
    /**
     * The CustDiscGroupVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CustDiscGroupVide = null;
    /**
     * Constructor method for CustDiscGroup
     * @uses CustDiscGroup::setCustDiscGroupVide()
     * @param string $custDiscGroupVide
     */
    public function __construct(?string $custDiscGroupVide = null)
    {
        $this
            ->setCustDiscGroupVide($custDiscGroupVide);
    }
    /**
     * Get CustDiscGroupVide value
     * @return string|null
     */
    public function getCustDiscGroupVide(): ?string
    {
        return $this->CustDiscGroupVide;
    }
    /**
     * Set CustDiscGroupVide value
     * @param string $custDiscGroupVide
     * @return \StructType\CustDiscGroup
     */
    public function setCustDiscGroupVide(?string $custDiscGroupVide = null): self
    {
        // validation for constraint: string
        if (!is_null($custDiscGroupVide) && !is_string($custDiscGroupVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custDiscGroupVide, true), gettype($custDiscGroupVide)), __LINE__);
        }
        $this->CustDiscGroupVide = $custDiscGroupVide;
        
        return $this;
    }
}
