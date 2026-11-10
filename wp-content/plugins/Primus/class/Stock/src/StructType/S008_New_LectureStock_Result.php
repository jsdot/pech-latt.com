<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S008_New_LectureStock_Result StructType
 * @subpackage Structs
 */
class S008_New_LectureStock_Result extends AbstractStructBase
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
     * The wSStockOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockOUT
     */
    protected \StructType\RootWSStockOUT $wSStockOUT;
    /**
     * Constructor method for S008_New_LectureStock_Result
     * @uses S008_New_LectureStock_Result::setWSReturnError()
     * @uses S008_New_LectureStock_Result::setWSStockOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockOUT $wSStockOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockOUT $wSStockOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockOUT($wSStockOUT);
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
     * @return \StructType\S008_New_LectureStock_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSStockOUT value
     * @return \StructType\RootWSStockOUT
     */
    public function getWSStockOUT(): \StructType\RootWSStockOUT
    {
        return $this->wSStockOUT;
    }
    /**
     * Set wSStockOUT value
     * @param \StructType\RootWSStockOUT $wSStockOUT
     * @return \StructType\S008_New_LectureStock_Result
     */
    public function setWSStockOUT(\StructType\RootWSStockOUT $wSStockOUT): self
    {
        $this->wSStockOUT = $wSStockOUT;
        
        return $this;
    }
}
