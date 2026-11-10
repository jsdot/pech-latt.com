<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S002_Lecture_StockDetailPostes_Result StructType
 * @subpackage Structs
 */
class S002_Lecture_StockDetailPostes_Result extends AbstractStructBase
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
     * The wSStockDetailPostes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockDetailPostes
     */
    protected \StructType\RootWSStockDetailPostes $wSStockDetailPostes;
    /**
     * Constructor method for S002_Lecture_StockDetailPostes_Result
     * @uses S002_Lecture_StockDetailPostes_Result::setWSReturnError()
     * @uses S002_Lecture_StockDetailPostes_Result::setWSStockDetailPostes()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockDetailPostes $wSStockDetailPostes
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockDetailPostes $wSStockDetailPostes)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockDetailPostes($wSStockDetailPostes);
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
     * @return \StructType\S002_Lecture_StockDetailPostes_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSStockDetailPostes value
     * @return \StructType\RootWSStockDetailPostes
     */
    public function getWSStockDetailPostes(): \StructType\RootWSStockDetailPostes
    {
        return $this->wSStockDetailPostes;
    }
    /**
     * Set wSStockDetailPostes value
     * @param \StructType\RootWSStockDetailPostes $wSStockDetailPostes
     * @return \StructType\S002_Lecture_StockDetailPostes_Result
     */
    public function setWSStockDetailPostes(\StructType\RootWSStockDetailPostes $wSStockDetailPostes): self
    {
        $this->wSStockDetailPostes = $wSStockDetailPostes;
        
        return $this;
    }
}
