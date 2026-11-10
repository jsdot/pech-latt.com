<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S001_Lecture_Stock StructType
 * @subpackage Structs
 */
class S001_Lecture_Stock extends AbstractStructBase
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
     * The wSStockArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockArticle
     */
    protected \StructType\RootWSStockArticle $wSStockArticle;
    /**
     * Constructor method for S001_Lecture_Stock
     * @uses S001_Lecture_Stock::setWSReturnError()
     * @uses S001_Lecture_Stock::setWSStockParametres()
     * @uses S001_Lecture_Stock::setWSStockArticle()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockParametres $wSStockParametres
     * @param \StructType\RootWSStockArticle $wSStockArticle
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockParametres $wSStockParametres, \StructType\RootWSStockArticle $wSStockArticle)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockParametres($wSStockParametres)
            ->setWSStockArticle($wSStockArticle);
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
     * @return \StructType\S001_Lecture_Stock
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
     * @return \StructType\S001_Lecture_Stock
     */
    public function setWSStockParametres(\StructType\RootWSStockParametres $wSStockParametres): self
    {
        $this->wSStockParametres = $wSStockParametres;
        
        return $this;
    }
    /**
     * Get wSStockArticle value
     * @return \StructType\RootWSStockArticle
     */
    public function getWSStockArticle(): \StructType\RootWSStockArticle
    {
        return $this->wSStockArticle;
    }
    /**
     * Set wSStockArticle value
     * @param \StructType\RootWSStockArticle $wSStockArticle
     * @return \StructType\S001_Lecture_Stock
     */
    public function setWSStockArticle(\StructType\RootWSStockArticle $wSStockArticle): self
    {
        $this->wSStockArticle = $wSStockArticle;
        
        return $this;
    }
}
