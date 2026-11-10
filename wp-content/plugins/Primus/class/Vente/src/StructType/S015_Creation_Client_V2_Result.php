<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S015_Creation_Client_V2_Result StructType
 * @subpackage Structs
 */
class S015_Creation_Client_V2_Result extends AbstractStructBase
{
    /**
     * The wSReturnError
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSReturnError
     */
    public \StructType\RootWSReturnError $wSReturnError;
    /**
     * The wSVenteClient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSClients
     */
    public \StructType\RootWSClients $wSVenteClient;
    /**
     * Constructor method for S015_Creation_Client_V2_Result
     * @uses S015_Creation_Client_V2_Result::setWSReturnError()
     * @uses S015_Creation_Client_V2_Result::setWSVenteClient()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSClients $wSVenteClient
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSClients $wSVenteClient)
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
     * @return \StructType\S015_Creation_Client_V2_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;

        return $this;
    }
    /**
     * Get wSVenteClient value
     * @return \StructType\RootWSClients
     */
    public function getWSVenteClient(): \StructType\RootWSClients
    {
        return $this->wSVenteClient;
    }
    /**
     * Set wSVenteClient value
     * @param \StructType\RootWSClients $wSVenteClient
     * @return \StructType\S015_Creation_Client_V2_Result
     */
    public function setWSVenteClient(\StructType\RootWSClients $wSVenteClient): self
    {
        $this->wSVenteClient = $wSVenteClient;

        return $this;
    }
}
