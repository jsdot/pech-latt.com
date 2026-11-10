<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S003_Supprime_StockDetailPostes StructType
 * @subpackage Structs
 */
class S003_Supprime_StockDetailPostes extends AbstractStructBase
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
     * The wSStockDetailPostes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockDetailPostes
     */
    protected \StructType\RootWSStockDetailPostes $wSStockDetailPostes;
    /**
     * Constructor method for S003_Supprime_StockDetailPostes
     * @uses S003_Supprime_StockDetailPostes::setWSReturnError()
     * @uses S003_Supprime_StockDetailPostes::setWSStockParametres()
     * @uses S003_Supprime_StockDetailPostes::setWSStockDetailPostes()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockParametres $wSStockParametres
     * @param \StructType\RootWSStockDetailPostes $wSStockDetailPostes
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockParametres $wSStockParametres, \StructType\RootWSStockDetailPostes $wSStockDetailPostes)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockParametres($wSStockParametres)
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
     * @return \StructType\S003_Supprime_StockDetailPostes
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
     * @return \StructType\S003_Supprime_StockDetailPostes
     */
    public function setWSStockParametres(\StructType\RootWSStockParametres $wSStockParametres): self
    {
        $this->wSStockParametres = $wSStockParametres;
        
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
     * @return \StructType\S003_Supprime_StockDetailPostes
     */
    public function setWSStockDetailPostes(\StructType\RootWSStockDetailPostes $wSStockDetailPostes): self
    {
        $this->wSStockDetailPostes = $wSStockDetailPostes;
        
        return $this;
    }
}
