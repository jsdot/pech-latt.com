<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S017_Lecture_MajVendeurs_Result StructType
 * @subpackage Structs
 */
class S017_Lecture_MajVendeurs_Result extends AbstractStructBase
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
     * The wSVendeursOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSContactsOUT
     */
    protected \StructType\RootWSContactsOUT $wSVendeursOUT;
    /**
     * Constructor method for S017_Lecture_MajVendeurs_Result
     * @uses S017_Lecture_MajVendeurs_Result::setWSReturnError()
     * @uses S017_Lecture_MajVendeurs_Result::setWSVendeursOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSContactsOUT $wSVendeursOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSContactsOUT $wSVendeursOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVendeursOUT($wSVendeursOUT);
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
     * @return \StructType\S017_Lecture_MajVendeurs_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVendeursOUT value
     * @return \StructType\RootWSContactsOUT
     */
    public function getWSVendeursOUT(): \StructType\RootWSContactsOUT
    {
        return $this->wSVendeursOUT;
    }
    /**
     * Set wSVendeursOUT value
     * @param \StructType\RootWSContactsOUT $wSVendeursOUT
     * @return \StructType\S017_Lecture_MajVendeurs_Result
     */
    public function setWSVendeursOUT(\StructType\RootWSContactsOUT $wSVendeursOUT): self
    {
        $this->wSVendeursOUT = $wSVendeursOUT;
        
        return $this;
    }
}
