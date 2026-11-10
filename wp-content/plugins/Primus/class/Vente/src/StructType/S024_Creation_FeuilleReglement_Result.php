<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S024_Creation_FeuilleReglement_Result StructType
 * @subpackage Structs
 */
class S024_Creation_FeuilleReglement_Result extends AbstractStructBase
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
     * The wSFeuilleReglement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSFeuilleReglement
     */
    protected \StructType\RootWSFeuilleReglement $wSFeuilleReglement;
    /**
     * Constructor method for S024_Creation_FeuilleReglement_Result
     * @uses S024_Creation_FeuilleReglement_Result::setWSReturnError()
     * @uses S024_Creation_FeuilleReglement_Result::setWSFeuilleReglement()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSFeuilleReglement $wSFeuilleReglement
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSFeuilleReglement $wSFeuilleReglement)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSFeuilleReglement($wSFeuilleReglement);
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
     * @return \StructType\S024_Creation_FeuilleReglement_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSFeuilleReglement value
     * @return \StructType\RootWSFeuilleReglement
     */
    public function getWSFeuilleReglement(): \StructType\RootWSFeuilleReglement
    {
        return $this->wSFeuilleReglement;
    }
    /**
     * Set wSFeuilleReglement value
     * @param \StructType\RootWSFeuilleReglement $wSFeuilleReglement
     * @return \StructType\S024_Creation_FeuilleReglement_Result
     */
    public function setWSFeuilleReglement(\StructType\RootWSFeuilleReglement $wSFeuilleReglement): self
    {
        $this->wSFeuilleReglement = $wSFeuilleReglement;
        
        return $this;
    }
}
