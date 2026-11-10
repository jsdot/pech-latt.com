<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S004_Lecture_StockDetail_Result StructType
 * @subpackage Structs
 */
class S004_Lecture_StockDetail_Result extends AbstractStructBase
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
     * The wSStockDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockDetail
     */
    protected \StructType\RootWSStockDetail $wSStockDetail;
    /**
     * Constructor method for S004_Lecture_StockDetail_Result
     * @uses S004_Lecture_StockDetail_Result::setWSReturnError()
     * @uses S004_Lecture_StockDetail_Result::setWSStockDetail()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockDetail $wSStockDetail
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockDetail $wSStockDetail)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockDetail($wSStockDetail);
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
     * @return \StructType\S004_Lecture_StockDetail_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSStockDetail value
     * @return \StructType\RootWSStockDetail
     */
    public function getWSStockDetail(): \StructType\RootWSStockDetail
    {
        return $this->wSStockDetail;
    }
    /**
     * Set wSStockDetail value
     * @param \StructType\RootWSStockDetail $wSStockDetail
     * @return \StructType\S004_Lecture_StockDetail_Result
     */
    public function setWSStockDetail(\StructType\RootWSStockDetail $wSStockDetail): self
    {
        $this->wSStockDetail = $wSStockDetail;
        
        return $this;
    }
}
