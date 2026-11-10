<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S013_Get_Statut_Commande StructType
 * @subpackage Structs
 */
class S013_Get_Statut_Commande extends AbstractStructBase
{
    /**
     * The wSReturnError
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSReturnError
     */
    protected \StructType\RootWSReturnError $wSReturnError;
    /**
     * The wSVenteParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteParametres
     */
    protected \StructType\RootWSVenteParametres $wSVenteParametres;
    /**
     * The wSStatutCommandeOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStatutOUT
     */
    protected \StructType\RootWSStatutOUT $wSStatutCommandeOUT;
    /**
     * Constructor method for S013_Get_Statut_Commande
     * @uses S013_Get_Statut_Commande::setWSReturnError()
     * @uses S013_Get_Statut_Commande::setWSVenteParametres()
     * @uses S013_Get_Statut_Commande::setWSStatutCommandeOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSStatutOUT $wSStatutCommandeOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSStatutOUT $wSStatutCommandeOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametres($wSVenteParametres)
            ->setWSStatutCommandeOUT($wSStatutCommandeOUT);
    }
    /**
     * Get wSReturnError value
     * @return \StructType\RootWSReturnError
     */
    public function getWSReturnError(): \StructType\RootWSReturnError
    {
        return $this->wSReturnError;
    }
    /**
     * Set wSReturnError value
     * @param \StructType\RootWSReturnError $wSReturnError
     * @return \StructType\S013_Get_Statut_Commande
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVenteParametres value
     * @return \StructType\RootWSVenteParametres
     */
    public function getWSVenteParametres(): \StructType\RootWSVenteParametres
    {
        return $this->wSVenteParametres;
    }
    /**
     * Set wSVenteParametres value
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @return \StructType\S013_Get_Statut_Commande
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
        return $this;
    }
    /**
     * Get wSStatutCommandeOUT value
     * @return \StructType\RootWSStatutOUT
     */
    public function getWSStatutCommandeOUT(): \StructType\RootWSStatutOUT
    {
        return $this->wSStatutCommandeOUT;
    }
    /**
     * Set wSStatutCommandeOUT value
     * @param \StructType\RootWSStatutOUT $wSStatutCommandeOUT
     * @return \StructType\S013_Get_Statut_Commande
     */
    public function setWSStatutCommandeOUT(\StructType\RootWSStatutOUT $wSStatutCommandeOUT): self
    {
        $this->wSStatutCommandeOUT = $wSStatutCommandeOUT;
        
        return $this;
    }
}
