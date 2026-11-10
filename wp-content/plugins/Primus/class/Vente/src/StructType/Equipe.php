<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Equipe StructType
 * @subpackage Structs
 */
class Equipe extends AbstractStructBase
{
    /**
     * The Equipe_Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Equipe_Code;
    /**
     * The Equipe_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Equipe_Name;
    /**
     * The Equipe_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Equipe_Type;
    /**
     * The Agent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Agent[]
     */
    protected array $Agent;
    /**
     * Constructor method for Equipe
     * @uses Equipe::setEquipe_Code()
     * @uses Equipe::setEquipe_Name()
     * @uses Equipe::setEquipe_Type()
     * @uses Equipe::setAgent()
     * @param string $equipe_Code
     * @param string $equipe_Name
     * @param string $equipe_Type
     * @param \StructType\Agent[] $agent
     */
    public function __construct(string $equipe_Code, string $equipe_Name, string $equipe_Type, array $agent)
    {
        $this
            ->setEquipe_Code($equipe_Code)
            ->setEquipe_Name($equipe_Name)
            ->setEquipe_Type($equipe_Type)
            ->setAgent($agent);
    }
    /**
     * Get Equipe_Code value
     * @return string
     */
    public function getEquipe_Code(): string
    {
        return $this->Equipe_Code;
    }
    /**
     * Set Equipe_Code value
     * @param string $equipe_Code
     * @return \StructType\Equipe
     */
    public function setEquipe_Code(string $equipe_Code): self
    {
        // validation for constraint: string
        if (!is_null($equipe_Code) && !is_string($equipe_Code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipe_Code, true), gettype($equipe_Code)), __LINE__);
        }
        $this->Equipe_Code = $equipe_Code;
        
        return $this;
    }
    /**
     * Get Equipe_Name value
     * @return string
     */
    public function getEquipe_Name(): string
    {
        return $this->Equipe_Name;
    }
    /**
     * Set Equipe_Name value
     * @param string $equipe_Name
     * @return \StructType\Equipe
     */
    public function setEquipe_Name(string $equipe_Name): self
    {
        // validation for constraint: string
        if (!is_null($equipe_Name) && !is_string($equipe_Name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipe_Name, true), gettype($equipe_Name)), __LINE__);
        }
        $this->Equipe_Name = $equipe_Name;
        
        return $this;
    }
    /**
     * Get Equipe_Type value
     * @return string
     */
    public function getEquipe_Type(): string
    {
        return $this->Equipe_Type;
    }
    /**
     * Set Equipe_Type value
     * @param string $equipe_Type
     * @return \StructType\Equipe
     */
    public function setEquipe_Type(string $equipe_Type): self
    {
        // validation for constraint: string
        if (!is_null($equipe_Type) && !is_string($equipe_Type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipe_Type, true), gettype($equipe_Type)), __LINE__);
        }
        $this->Equipe_Type = $equipe_Type;
        
        return $this;
    }
    /**
     * Get Agent value
     * @return \StructType\Agent[]
     */
    public function getAgent(): array
    {
        return $this->Agent;
    }
    /**
     * This method is responsible for validating the values passed to the setAgent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAgent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAgentForArrayConstraintsFromSetAgent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $equipeAgentItem) {
            // validation for constraint: itemType
            if (!$equipeAgentItem instanceof \StructType\Agent) {
                $invalidValues[] = is_object($equipeAgentItem) ? get_class($equipeAgentItem) : sprintf('%s(%s)', gettype($equipeAgentItem), var_export($equipeAgentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Agent property can only contain items of type \StructType\Agent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Agent value
     * @throws InvalidArgumentException
     * @param \StructType\Agent[] $agent
     * @return \StructType\Equipe
     */
    public function setAgent(array $agent): self
    {
        // validation for constraint: array
        if ('' !== ($agentArrayErrorMessage = self::validateAgentForArrayConstraintsFromSetAgent($agent))) {
            throw new InvalidArgumentException($agentArrayErrorMessage, __LINE__);
        }
        $this->Agent = $agent;
        
        return $this;
    }
    /**
     * Add item to Agent value
     * @throws InvalidArgumentException
     * @param \StructType\Agent $item
     * @return \StructType\Equipe
     */
    public function addToAgent(\StructType\Agent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Agent) {
            throw new InvalidArgumentException(sprintf('The Agent property can only contain items of type \StructType\Agent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Agent[] = $item;
        
        return $this;
    }
}
