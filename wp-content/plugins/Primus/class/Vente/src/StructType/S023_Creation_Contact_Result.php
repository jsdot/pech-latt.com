<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S023_Creation_Contact_Result StructType
 * @subpackage Structs
 */
class S023_Creation_Contact_Result extends AbstractStructBase
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
     * The wSContactsOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSContactsOUT
     */
    protected \StructType\RootWSContactsOUT $wSContactsOUT;
    /**
     * Constructor method for S023_Creation_Contact_Result
     * @uses S023_Creation_Contact_Result::setWSReturnError()
     * @uses S023_Creation_Contact_Result::setWSContactsOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSContactsOUT $wSContactsOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSContactsOUT $wSContactsOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSContactsOUT($wSContactsOUT);
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
     * @return \StructType\S023_Creation_Contact_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSContactsOUT value
     * @return \StructType\RootWSContactsOUT
     */
    public function getWSContactsOUT(): \StructType\RootWSContactsOUT
    {
        return $this->wSContactsOUT;
    }
    /**
     * Set wSContactsOUT value
     * @param \StructType\RootWSContactsOUT $wSContactsOUT
     * @return \StructType\S023_Creation_Contact_Result
     */
    public function setWSContactsOUT(\StructType\RootWSContactsOUT $wSContactsOUT): self
    {
        $this->wSContactsOUT = $wSContactsOUT;
        
        return $this;
    }
}
