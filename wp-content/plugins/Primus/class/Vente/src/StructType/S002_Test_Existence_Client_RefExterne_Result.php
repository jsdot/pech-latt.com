<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S002_Test_Existence_Client_RefExterne_Result StructType
 * @subpackage Structs
 */
class S002_Test_Existence_Client_RefExterne_Result extends AbstractStructBase
{
    /**
     * The return_value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $return_value;
    /**
     * The wSReturnError
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSReturnError
     */
    protected \StructType\RootWSReturnError $wSReturnError;
    /**
     * The wSVenteClient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteClient
     */
    protected \StructType\RootWSVenteClient $wSVenteClient;
    /**
     * Constructor method for S002_Test_Existence_Client_RefExterne_Result
     * @uses S002_Test_Existence_Client_RefExterne_Result::setReturn_value()
     * @uses S002_Test_Existence_Client_RefExterne_Result::setWSReturnError()
     * @uses S002_Test_Existence_Client_RefExterne_Result::setWSVenteClient()
     * @param bool $return_value
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteClient $wSVenteClient
     */
    public function __construct(bool $return_value, \StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteClient $wSVenteClient)
    {
        $this
            ->setReturn_value($return_value)
            ->setWSReturnError($wSReturnError)
            ->setWSVenteClient($wSVenteClient);
    }
    /**
     * Get return_value value
     * @return bool
     */
    public function getReturn_value(): bool
    {
        return $this->return_value;
    }
    /**
     * Set return_value value
     * @param bool $return_value
     * @return \StructType\S002_Test_Existence_Client_RefExterne_Result
     */
    public function setReturn_value(bool $return_value): self
    {
        // validation for constraint: boolean
        if (!is_null($return_value) && !is_bool($return_value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($return_value, true), gettype($return_value)), __LINE__);
        }
        $this->return_value = $return_value;
        
        return $this;
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
     * @return \StructType\S002_Test_Existence_Client_RefExterne_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVenteClient value
     * @return \StructType\RootWSVenteClient
     */
    public function getWSVenteClient(): \StructType\RootWSVenteClient
    {
        return $this->wSVenteClient;
    }
    /**
     * Set wSVenteClient value
     * @param \StructType\RootWSVenteClient $wSVenteClient
     * @return \StructType\S002_Test_Existence_Client_RefExterne_Result
     */
    public function setWSVenteClient(\StructType\RootWSVenteClient $wSVenteClient): self
    {
        $this->wSVenteClient = $wSVenteClient;
        
        return $this;
    }
}
