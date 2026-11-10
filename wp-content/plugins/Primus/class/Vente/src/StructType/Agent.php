<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Agent StructType
 * @subpackage Structs
 */
class Agent extends AbstractStructBase
{
    /**
     * The Agent_Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Agent_Code;
    /**
     * The Agent_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Agent_Name;
    /**
     * The Agent_Fonction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Agent_Fonction;
    /**
     * The Agent_Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Agent_Email;
    /**
     * The Agent_Phone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Agent_Phone;
    /**
     * The Agent_Fax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Agent_Fax;
    /**
     * Constructor method for Agent
     * @uses Agent::setAgent_Code()
     * @uses Agent::setAgent_Name()
     * @uses Agent::setAgent_Fonction()
     * @uses Agent::setAgent_Email()
     * @uses Agent::setAgent_Phone()
     * @uses Agent::setAgent_Fax()
     * @param string $agent_Code
     * @param string $agent_Name
     * @param string $agent_Fonction
     * @param string $agent_Email
     * @param string $agent_Phone
     * @param string $agent_Fax
     */
    public function __construct(string $agent_Code, string $agent_Name, string $agent_Fonction, string $agent_Email, string $agent_Phone, string $agent_Fax)
    {
        $this
            ->setAgent_Code($agent_Code)
            ->setAgent_Name($agent_Name)
            ->setAgent_Fonction($agent_Fonction)
            ->setAgent_Email($agent_Email)
            ->setAgent_Phone($agent_Phone)
            ->setAgent_Fax($agent_Fax);
    }
    /**
     * Get Agent_Code value
     * @return string
     */
    public function getAgent_Code(): string
    {
        return $this->Agent_Code;
    }
    /**
     * Set Agent_Code value
     * @param string $agent_Code
     * @return \StructType\Agent
     */
    public function setAgent_Code(string $agent_Code): self
    {
        // validation for constraint: string
        if (!is_null($agent_Code) && !is_string($agent_Code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent_Code, true), gettype($agent_Code)), __LINE__);
        }
        $this->Agent_Code = $agent_Code;
        
        return $this;
    }
    /**
     * Get Agent_Name value
     * @return string
     */
    public function getAgent_Name(): string
    {
        return $this->Agent_Name;
    }
    /**
     * Set Agent_Name value
     * @param string $agent_Name
     * @return \StructType\Agent
     */
    public function setAgent_Name(string $agent_Name): self
    {
        // validation for constraint: string
        if (!is_null($agent_Name) && !is_string($agent_Name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent_Name, true), gettype($agent_Name)), __LINE__);
        }
        $this->Agent_Name = $agent_Name;
        
        return $this;
    }
    /**
     * Get Agent_Fonction value
     * @return string
     */
    public function getAgent_Fonction(): string
    {
        return $this->Agent_Fonction;
    }
    /**
     * Set Agent_Fonction value
     * @param string $agent_Fonction
     * @return \StructType\Agent
     */
    public function setAgent_Fonction(string $agent_Fonction): self
    {
        // validation for constraint: string
        if (!is_null($agent_Fonction) && !is_string($agent_Fonction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent_Fonction, true), gettype($agent_Fonction)), __LINE__);
        }
        $this->Agent_Fonction = $agent_Fonction;
        
        return $this;
    }
    /**
     * Get Agent_Email value
     * @return string
     */
    public function getAgent_Email(): string
    {
        return $this->Agent_Email;
    }
    /**
     * Set Agent_Email value
     * @param string $agent_Email
     * @return \StructType\Agent
     */
    public function setAgent_Email(string $agent_Email): self
    {
        // validation for constraint: string
        if (!is_null($agent_Email) && !is_string($agent_Email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent_Email, true), gettype($agent_Email)), __LINE__);
        }
        $this->Agent_Email = $agent_Email;
        
        return $this;
    }
    /**
     * Get Agent_Phone value
     * @return string
     */
    public function getAgent_Phone(): string
    {
        return $this->Agent_Phone;
    }
    /**
     * Set Agent_Phone value
     * @param string $agent_Phone
     * @return \StructType\Agent
     */
    public function setAgent_Phone(string $agent_Phone): self
    {
        // validation for constraint: string
        if (!is_null($agent_Phone) && !is_string($agent_Phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent_Phone, true), gettype($agent_Phone)), __LINE__);
        }
        $this->Agent_Phone = $agent_Phone;
        
        return $this;
    }
    /**
     * Get Agent_Fax value
     * @return string
     */
    public function getAgent_Fax(): string
    {
        return $this->Agent_Fax;
    }
    /**
     * Set Agent_Fax value
     * @param string $agent_Fax
     * @return \StructType\Agent
     */
    public function setAgent_Fax(string $agent_Fax): self
    {
        // validation for constraint: string
        if (!is_null($agent_Fax) && !is_string($agent_Fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent_Fax, true), gettype($agent_Fax)), __LINE__);
        }
        $this->Agent_Fax = $agent_Fax;
        
        return $this;
    }
}
