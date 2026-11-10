<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSDonneesParametres StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSDonneesParametres
 * @subpackage Structs
 */
class RootWSDonneesParametres extends AbstractStructBase
{
    /**
     * The Donnees
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Donnees
     */
    protected \StructType\Donnees $Donnees;
    /**
     * Constructor method for RootWSDonneesParametres
     * @uses RootWSDonneesParametres::setDonnees()
     * @param \StructType\Donnees $donnees
     */
    public function __construct(\StructType\Donnees $donnees)
    {
        $this
            ->setDonnees($donnees);
    }
    /**
     * Get Donnees value
     * @return \StructType\Donnees
     */
    public function getDonnees(): \StructType\Donnees
    {
        return $this->Donnees;
    }
    /**
     * Set Donnees value
     * @param \StructType\Donnees $donnees
     * @return \StructType\RootWSDonneesParametres
     */
    public function setDonnees(\StructType\Donnees $donnees): self
    {
        $this->Donnees = $donnees;
        
        return $this;
    }
}
