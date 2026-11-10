<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipeAgentCode StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class EquipeAgentCode extends AbstractStructBase
{
    /**
     * The EquipeAgentCodeVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $EquipeAgentCodeVide = null;
    /**
     * Constructor method for EquipeAgentCode
     * @uses EquipeAgentCode::setEquipeAgentCodeVide()
     * @param string $equipeAgentCodeVide
     */
    public function __construct(?string $equipeAgentCodeVide = null)
    {
        $this
            ->setEquipeAgentCodeVide($equipeAgentCodeVide);
    }
    /**
     * Get EquipeAgentCodeVide value
     * @return string|null
     */
    public function getEquipeAgentCodeVide(): ?string
    {
        return $this->EquipeAgentCodeVide;
    }
    /**
     * Set EquipeAgentCodeVide value
     * @param string $equipeAgentCodeVide
     * @return \StructType\EquipeAgentCode
     */
    public function setEquipeAgentCodeVide(?string $equipeAgentCodeVide = null): self
    {
        // validation for constraint: string
        if (!is_null($equipeAgentCodeVide) && !is_string($equipeAgentCodeVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipeAgentCodeVide, true), gettype($equipeAgentCodeVide)), __LINE__);
        }
        $this->EquipeAgentCodeVide = $equipeAgentCodeVide;
        
        return $this;
    }
}
