<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Donnees StructType
 * @subpackage Structs
 */
class Donnees extends AbstractStructBase
{
    /**
     * The TypeAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $TypeAction;
    /**
     * The DateDebut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateDebut = null;
    /**
     * The HeureDebut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HeureDebut = null;
    /**
     * The DateFin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateFin = null;
    /**
     * The HeureFin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HeureFin = null;
    /**
     * Constructor method for Donnees
     * @uses Donnees::setTypeAction()
     * @uses Donnees::setDateDebut()
     * @uses Donnees::setHeureDebut()
     * @uses Donnees::setDateFin()
     * @uses Donnees::setHeureFin()
     * @param string $typeAction
     * @param string $dateDebut
     * @param string $heureDebut
     * @param string $dateFin
     * @param string $heureFin
     */
    public function __construct(string $typeAction, ?string $dateDebut = null, ?string $heureDebut = null, ?string $dateFin = null, ?string $heureFin = null)
    {
        $this
            ->setTypeAction($typeAction)
            ->setDateDebut($dateDebut)
            ->setHeureDebut($heureDebut)
            ->setDateFin($dateFin)
            ->setHeureFin($heureFin);
    }
    /**
     * Get TypeAction value
     * @return string
     */
    public function getTypeAction(): string
    {
        return $this->TypeAction;
    }
    /**
     * Set TypeAction value
     * @param string $typeAction
     * @return \StructType\Donnees
     */
    public function setTypeAction(string $typeAction): self
    {
        // validation for constraint: string
        if (!is_null($typeAction) && !is_string($typeAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeAction, true), gettype($typeAction)), __LINE__);
        }
        $this->TypeAction = $typeAction;
        
        return $this;
    }
    /**
     * Get DateDebut value
     * @return string|null
     */
    public function getDateDebut(): ?string
    {
        return $this->DateDebut;
    }
    /**
     * Set DateDebut value
     * @param string $dateDebut
     * @return \StructType\Donnees
     */
    public function setDateDebut(?string $dateDebut = null): self
    {
        // validation for constraint: string
        if (!is_null($dateDebut) && !is_string($dateDebut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateDebut, true), gettype($dateDebut)), __LINE__);
        }
        $this->DateDebut = $dateDebut;
        
        return $this;
    }
    /**
     * Get HeureDebut value
     * @return string|null
     */
    public function getHeureDebut(): ?string
    {
        return $this->HeureDebut;
    }
    /**
     * Set HeureDebut value
     * @param string $heureDebut
     * @return \StructType\Donnees
     */
    public function setHeureDebut(?string $heureDebut = null): self
    {
        // validation for constraint: string
        if (!is_null($heureDebut) && !is_string($heureDebut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($heureDebut, true), gettype($heureDebut)), __LINE__);
        }
        $this->HeureDebut = $heureDebut;
        
        return $this;
    }
    /**
     * Get DateFin value
     * @return string|null
     */
    public function getDateFin(): ?string
    {
        return $this->DateFin;
    }
    /**
     * Set DateFin value
     * @param string $dateFin
     * @return \StructType\Donnees
     */
    public function setDateFin(?string $dateFin = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFin) && !is_string($dateFin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFin, true), gettype($dateFin)), __LINE__);
        }
        $this->DateFin = $dateFin;
        
        return $this;
    }
    /**
     * Get HeureFin value
     * @return string|null
     */
    public function getHeureFin(): ?string
    {
        return $this->HeureFin;
    }
    /**
     * Set HeureFin value
     * @param string $heureFin
     * @return \StructType\Donnees
     */
    public function setHeureFin(?string $heureFin = null): self
    {
        // validation for constraint: string
        if (!is_null($heureFin) && !is_string($heureFin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($heureFin, true), gettype($heureFin)), __LINE__);
        }
        $this->HeureFin = $heureFin;
        
        return $this;
    }
}
