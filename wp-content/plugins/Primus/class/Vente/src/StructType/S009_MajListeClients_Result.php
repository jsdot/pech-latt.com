<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S009_MajListeClients_Result StructType
 * @subpackage Structs
 */
class S009_MajListeClients_Result extends AbstractStructBase
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
     * The wSClients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSClients
     */
    protected \StructType\RootWSClients $wSClients;
    /**
     * Constructor method for S009_MajListeClients_Result
     * @uses S009_MajListeClients_Result::setWSReturnError()
     * @uses S009_MajListeClients_Result::setWSClients()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSClients $wSClients
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSClients $wSClients)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSClients($wSClients);
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
     * @return \StructType\S009_MajListeClients_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSClients value
     * @return \StructType\RootWSClients
     */
    public function getWSClients(): \StructType\RootWSClients
    {
        return $this->wSClients;
    }
    /**
     * Set wSClients value
     * @param \StructType\RootWSClients $wSClients
     * @return \StructType\S009_MajListeClients_Result
     */
    public function setWSClients(\StructType\RootWSClients $wSClients): self
    {
        $this->wSClients = $wSClients;
        
        return $this;
    }
}
