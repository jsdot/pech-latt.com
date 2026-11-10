<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S018_Lecture_Factures_Result StructType
 * @subpackage Structs
 */
class S018_Lecture_Factures_Result extends AbstractStructBase
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
     * The wSFacturesOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSInvoiceOUT
     */
    protected \StructType\RootWSInvoiceOUT $wSFacturesOUT;
    /**
     * Constructor method for S018_Lecture_Factures_Result
     * @uses S018_Lecture_Factures_Result::setWSReturnError()
     * @uses S018_Lecture_Factures_Result::setWSFacturesOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSInvoiceOUT $wSFacturesOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSInvoiceOUT $wSFacturesOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSFacturesOUT($wSFacturesOUT);
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
     * @return \StructType\S018_Lecture_Factures_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSFacturesOUT value
     * @return \StructType\RootWSInvoiceOUT
     */
    public function getWSFacturesOUT(): \StructType\RootWSInvoiceOUT
    {
        return $this->wSFacturesOUT;
    }
    /**
     * Set wSFacturesOUT value
     * @param \StructType\RootWSInvoiceOUT $wSFacturesOUT
     * @return \StructType\S018_Lecture_Factures_Result
     */
    public function setWSFacturesOUT(\StructType\RootWSInvoiceOUT $wSFacturesOUT): self
    {
        $this->wSFacturesOUT = $wSFacturesOUT;
        
        return $this;
    }
}
