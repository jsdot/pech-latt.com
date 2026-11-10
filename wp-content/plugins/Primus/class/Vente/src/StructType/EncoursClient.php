<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncoursClient StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class EncoursClient extends AbstractStructBase
{
    /**
     * The EncoursDS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EncoursDS = null;
    /**
     * The EncoursDSHorsPrimeurs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EncoursDSHorsPrimeurs = null;
    /**
     * The EncoursDSPrimeurs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EncoursDSPrimeurs = null;
    /**
     * Constructor method for EncoursClient
     * @uses EncoursClient::setEncoursDS()
     * @uses EncoursClient::setEncoursDSHorsPrimeurs()
     * @uses EncoursClient::setEncoursDSPrimeurs()
     * @param string $encoursDS
     * @param string $encoursDSHorsPrimeurs
     * @param string $encoursDSPrimeurs
     */
    public function __construct(?string $encoursDS = null, ?string $encoursDSHorsPrimeurs = null, ?string $encoursDSPrimeurs = null)
    {
        $this
            ->setEncoursDS($encoursDS)
            ->setEncoursDSHorsPrimeurs($encoursDSHorsPrimeurs)
            ->setEncoursDSPrimeurs($encoursDSPrimeurs);
    }
    /**
     * Get EncoursDS value
     * @return string|null
     */
    public function getEncoursDS(): ?string
    {
        return $this->EncoursDS;
    }
    /**
     * Set EncoursDS value
     * @param string $encoursDS
     * @return \StructType\EncoursClient
     */
    public function setEncoursDS(?string $encoursDS = null): self
    {
        // validation for constraint: string
        if (!is_null($encoursDS) && !is_string($encoursDS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoursDS, true), gettype($encoursDS)), __LINE__);
        }
        $this->EncoursDS = $encoursDS;
        
        return $this;
    }
    /**
     * Get EncoursDSHorsPrimeurs value
     * @return string|null
     */
    public function getEncoursDSHorsPrimeurs(): ?string
    {
        return $this->EncoursDSHorsPrimeurs;
    }
    /**
     * Set EncoursDSHorsPrimeurs value
     * @param string $encoursDSHorsPrimeurs
     * @return \StructType\EncoursClient
     */
    public function setEncoursDSHorsPrimeurs(?string $encoursDSHorsPrimeurs = null): self
    {
        // validation for constraint: string
        if (!is_null($encoursDSHorsPrimeurs) && !is_string($encoursDSHorsPrimeurs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoursDSHorsPrimeurs, true), gettype($encoursDSHorsPrimeurs)), __LINE__);
        }
        $this->EncoursDSHorsPrimeurs = $encoursDSHorsPrimeurs;
        
        return $this;
    }
    /**
     * Get EncoursDSPrimeurs value
     * @return string|null
     */
    public function getEncoursDSPrimeurs(): ?string
    {
        return $this->EncoursDSPrimeurs;
    }
    /**
     * Set EncoursDSPrimeurs value
     * @param string $encoursDSPrimeurs
     * @return \StructType\EncoursClient
     */
    public function setEncoursDSPrimeurs(?string $encoursDSPrimeurs = null): self
    {
        // validation for constraint: string
        if (!is_null($encoursDSPrimeurs) && !is_string($encoursDSPrimeurs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoursDSPrimeurs, true), gettype($encoursDSPrimeurs)), __LINE__);
        }
        $this->EncoursDSPrimeurs = $encoursDSPrimeurs;
        
        return $this;
    }
}
