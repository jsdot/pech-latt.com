<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S004_Lecture_StockDetail StructType
 * @subpackage Structs
 */
class S004_Lecture_StockDetail extends AbstractStructBase
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
     * The wSStockParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockParametres
     */
    protected \StructType\RootWSStockParametres $wSStockParametres;
    /**
     * The wSStockDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockDetail
     */
    protected \StructType\RootWSStockDetail $wSStockDetail;
    /**
     * Constructor method for S004_Lecture_StockDetail
     * @uses S004_Lecture_StockDetail::setWSReturnError()
     * @uses S004_Lecture_StockDetail::setWSStockParametres()
     * @uses S004_Lecture_StockDetail::setWSStockDetail()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockParametres $wSStockParametres
     * @param \StructType\RootWSStockDetail $wSStockDetail
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockParametres $wSStockParametres, \StructType\RootWSStockDetail $wSStockDetail)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockParametres($wSStockParametres)
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
     * @return \StructType\S004_Lecture_StockDetail
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSStockParametres value
     * @return \StructType\RootWSStockParametres
     */
    public function getWSStockParametres(): \StructType\RootWSStockParametres
    {
        return $this->wSStockParametres;
    }
    /**
     * Set wSStockParametres value
     * @param \StructType\RootWSStockParametres $wSStockParametres
     * @return \StructType\S004_Lecture_StockDetail
     */
    public function setWSStockParametres(\StructType\RootWSStockParametres $wSStockParametres): self
    {
        $this->wSStockParametres = $wSStockParametres;
        
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
     * @return \StructType\S004_Lecture_StockDetail
     */
    public function setWSStockDetail(\StructType\RootWSStockDetail $wSStockDetail): self
    {
        $this->wSStockDetail = $wSStockDetail;
        
        return $this;
    }
}
