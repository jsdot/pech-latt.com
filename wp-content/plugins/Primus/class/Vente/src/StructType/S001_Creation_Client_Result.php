<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S001_Creation_Client_Result StructType
 * @subpackage Structs
 */
class S001_Creation_Client_Result extends AbstractStructBase
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
     * The wSVenteClient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteClient
     */
    protected \StructType\RootWSVenteClient $wSVenteClient;
    /**
     * Constructor method for S001_Creation_Client_Result
     * @uses S001_Creation_Client_Result::setWSReturnError()
     * @uses S001_Creation_Client_Result::setWSVenteClient()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteClient $wSVenteClient
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteClient $wSVenteClient)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteClient($wSVenteClient);
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
     * @return \StructType\S001_Creation_Client_Result
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
     * @return \StructType\S001_Creation_Client_Result
     */
    public function setWSVenteClient(\StructType\RootWSVenteClient $wSVenteClient): self
    {
        $this->wSVenteClient = $wSVenteClient;
        
        return $this;
    }
}
