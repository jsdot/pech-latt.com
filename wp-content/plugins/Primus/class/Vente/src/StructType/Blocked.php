<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Blocked StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Blocked extends AbstractStructBase
{
    /**
     * The BlockedVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $BlockedVide = null;
    /**
     * Constructor method for Blocked
     * @uses Blocked::setBlockedVide()
     * @param string $blockedVide
     */
    public function __construct(?string $blockedVide = null)
    {
        $this
            ->setBlockedVide($blockedVide);
    }
    /**
     * Get BlockedVide value
     * @return string|null
     */
    public function getBlockedVide(): ?string
    {
        return $this->BlockedVide;
    }
    /**
     * Set BlockedVide value
     * @param string $blockedVide
     * @return \StructType\Blocked
     */
    public function setBlockedVide(?string $blockedVide = null): self
    {
        // validation for constraint: string
        if (!is_null($blockedVide) && !is_string($blockedVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blockedVide, true), gettype($blockedVide)), __LINE__);
        }
        $this->BlockedVide = $blockedVide;
        
        return $this;
    }
}
