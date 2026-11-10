<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S015_Creation_Client_V2 StructType
 * @subpackage Structs
 */
class S015_Creation_Client_V2 extends AbstractStructBase
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
     * The wSVenteClient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSClients
     */
    protected \StructType\RootWSClients $wSVenteClient;
    /**
     * Constructor method for S015_Creation_Client_V2
     * @uses S015_Creation_Client_V2::setWSReturnError()
     * @uses S015_Creation_Client_V2::setWSVenteParametres()
     * @uses S015_Creation_Client_V2::setWSVenteClient()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSClients $wSVenteClient
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSClients $wSVenteClient)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametres($wSVenteParametres)
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
     * @return \StructType\S015_Creation_Client_V2
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
     * @return \StructType\S015_Creation_Client_V2
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
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
     * @return \StructType\S015_Creation_Client_V2
     */
    public function setWSVenteClient(\StructType\RootWSClients $wSVenteClient): self
    {
        $this->wSVenteClient = $wSVenteClient;
        
        return $this;
    }
}
