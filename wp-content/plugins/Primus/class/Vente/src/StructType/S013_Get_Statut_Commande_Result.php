<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S013_Get_Statut_Commande_Result StructType
 * @subpackage Structs
 */
class S013_Get_Statut_Commande_Result extends AbstractStructBase
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
     * The wSStatutCommandeOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStatutOUT
     */
    protected \StructType\RootWSStatutOUT $wSStatutCommandeOUT;
    /**
     * Constructor method for S013_Get_Statut_Commande_Result
     * @uses S013_Get_Statut_Commande_Result::setWSReturnError()
     * @uses S013_Get_Statut_Commande_Result::setWSStatutCommandeOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStatutOUT $wSStatutCommandeOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStatutOUT $wSStatutCommandeOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
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
     * @return \StructType\S013_Get_Statut_Commande_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
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
     * @return \StructType\S013_Get_Statut_Commande_Result
     */
    public function setWSStatutCommandeOUT(\StructType\RootWSStatutOUT $wSStatutCommandeOUT): self
    {
        $this->wSStatutCommandeOUT = $wSStatutCommandeOUT;
        
        return $this;
    }
}
