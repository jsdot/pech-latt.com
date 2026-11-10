<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S011_TarifsOUT_Result StructType
 * @subpackage Structs
 */
class S011_TarifsOUT_Result extends AbstractStructBase
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
     * The wSTarifsOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSTarifsOUT
     */
    protected \StructType\RootWSTarifsOUT $wSTarifsOUT;
    /**
     * Constructor method for S011_TarifsOUT_Result
     * @uses S011_TarifsOUT_Result::setWSReturnError()
     * @uses S011_TarifsOUT_Result::setWSTarifsOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSTarifsOUT $wSTarifsOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSTarifsOUT $wSTarifsOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSTarifsOUT($wSTarifsOUT);
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
     * @return \StructType\S011_TarifsOUT_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSTarifsOUT value
     * @return \StructType\RootWSTarifsOUT
     */
    public function getWSTarifsOUT(): \StructType\RootWSTarifsOUT
    {
        return $this->wSTarifsOUT;
    }
    /**
     * Set wSTarifsOUT value
     * @param \StructType\RootWSTarifsOUT $wSTarifsOUT
     * @return \StructType\S011_TarifsOUT_Result
     */
    public function setWSTarifsOUT(\StructType\RootWSTarifsOUT $wSTarifsOUT): self
    {
        $this->wSTarifsOUT = $wSTarifsOUT;
        
        return $this;
    }
}
