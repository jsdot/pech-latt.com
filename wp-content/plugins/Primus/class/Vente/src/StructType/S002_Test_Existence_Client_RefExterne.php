<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S002_Test_Existence_Client_RefExterne StructType
 * @subpackage Structs
 */
class S002_Test_Existence_Client_RefExterne extends AbstractStructBase
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
     * @var \StructType\RootWSVenteClient
     */
    protected \StructType\RootWSVenteClient $wSVenteClient;
    /**
     * Constructor method for S002_Test_Existence_Client_RefExterne
     * @uses S002_Test_Existence_Client_RefExterne::setWSReturnError()
     * @uses S002_Test_Existence_Client_RefExterne::setWSVenteParametres()
     * @uses S002_Test_Existence_Client_RefExterne::setWSVenteClient()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSVenteClient $wSVenteClient
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSVenteClient $wSVenteClient)
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
     * @return \StructType\S002_Test_Existence_Client_RefExterne
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
     * @return \StructType\S002_Test_Existence_Client_RefExterne
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
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
     * @return \StructType\S002_Test_Existence_Client_RefExterne
     */
    public function setWSVenteClient(\StructType\RootWSVenteClient $wSVenteClient): self
    {
        $this->wSVenteClient = $wSVenteClient;
        
        return $this;
    }
}
