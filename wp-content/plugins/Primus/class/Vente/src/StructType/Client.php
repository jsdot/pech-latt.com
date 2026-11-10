<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Client StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Client extends AbstractStructBase
{
    /**
     * The General
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\General
     */
    public \StructType\General $General;
    /**
     * The TousLesChampsClient
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $TousLesChampsClient;
    /**
     * The CodeModele
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodeModele = null;
    /**
     * The Communication
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Communication|null
     */
    protected ?\StructType\Communication $Communication = null;
    /**
     * The EncoursClient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EncoursClient|null
     */
    protected ?\StructType\EncoursClient $EncoursClient = null;
    /**
     * Constructor method for Client
     * @uses Client::setGeneral()
     * @uses Client::setTousLesChampsClient()
     * @uses Client::setCodeModele()
     * @uses Client::setCommunication()
     * @uses Client::setEncoursClient()
     * @param \StructType\General $general
     * @param string $tousLesChampsClient
     * @param string $codeModele
     * @param \StructType\Communication $communication
     * @param \StructType\EncoursClient $encoursClient
     */
    public function __construct(\StructType\General $general = null, string $tousLesChampsClient = null, ?string $codeModele = null, ?\StructType\Communication $communication = null, ?\StructType\EncoursClient $encoursClient = null)
    {
       /* $this
            ->setGeneral($general)
            ->setTousLesChampsClient($tousLesChampsClient)
            ->setCodeModele($codeModele)
            ->setCommunication($communication)
            ->setEncoursClient($encoursClient);*/
    }

    /**
     * Get General value
     * @return \StructType\General
     */
    public function getGeneral(): \StructType\General
    {
        return $this->General;
    }
    /**
     * Set General value
     * @param \StructType\General $general
     * @return \StructType\Client
     */
    public function setGeneral(\StructType\General $general): self
    {
        $this->General = $general;
        
        return $this;
    }
    /**
     * Get TousLesChampsClient value
     * @return string
     */
    public function getTousLesChampsClient(): string
    {
        return $this->TousLesChampsClient;
    }
    /**
     * Set TousLesChampsClient value
     * @param string $tousLesChampsClient
     * @return \StructType\Client
     */
    public function setTousLesChampsClient(string $tousLesChampsClient): self
    {
        // validation for constraint: string
        if (!is_null($tousLesChampsClient) && !is_string($tousLesChampsClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tousLesChampsClient, true), gettype($tousLesChampsClient)), __LINE__);
        }
        $this->TousLesChampsClient = $tousLesChampsClient;
        
        return $this;
    }
    /**
     * Get CodeModele value
     * @return string|null
     */
    public function getCodeModele(): ?string
    {
        return $this->CodeModele;
    }
    /**
     * Set CodeModele value
     * @param string $codeModele
     * @return \StructType\Client
     */
    public function setCodeModele(?string $codeModele = null): self
    {
        // validation for constraint: string
        if (!is_null($codeModele) && !is_string($codeModele)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeModele, true), gettype($codeModele)), __LINE__);
        }
        $this->CodeModele = $codeModele;
        
        return $this;
    }
    /**
     * Get Communication value
     * @return \StructType\Communication|null
     */
    public function getCommunication(): ?\StructType\Communication
    {
        return $this->Communication;
    }
    /**
     * Set Communication value
     * @param \StructType\Communication $communication
     * @return \StructType\Client
     */
    public function setCommunication(?\StructType\Communication $communication = null): self
    {
        $this->Communication = $communication;
        
        return $this;
    }
    /**
     * Get EncoursClient value
     * @return \StructType\EncoursClient|null
     */
    public function getEncoursClient(): ?\StructType\EncoursClient
    {
        return $this->EncoursClient;
    }
    /**
     * Set EncoursClient value
     * @param \StructType\EncoursClient $encoursClient
     * @return \StructType\Client
     */
    public function setEncoursClient(?\StructType\EncoursClient $encoursClient = null): self
    {
        $this->EncoursClient = $encoursClient;
        
        return $this;
    }
}
