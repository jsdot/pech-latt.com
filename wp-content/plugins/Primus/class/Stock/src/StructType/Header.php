<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Header StructType
 * @subpackage Structs
 */
class Header extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Success;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for Header
     * @uses Header::setSuccess()
     * @uses Header::setKey()
     * @param string $success
     * @param string $key
     */
    public function __construct(string $success, ?string $key = null)
    {
        $this
            ->setSuccess($success)
            ->setKey($key);
    }
    /**
     * Get Success value
     * @return string
     */
    public function getSuccess(): string
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param string $success
     * @return \StructType\Header
     */
    public function setSuccess(string $success): self
    {
        // validation for constraint: string
        if (!is_null($success) && !is_string($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\Header
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
