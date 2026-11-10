<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S006_Lecture_EtatRupturePFMS_Result StructType
 * @subpackage Structs
 */
class S006_Lecture_EtatRupturePFMS_Result extends AbstractStructBase
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
     * The wSStockEtatRupturePFMS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockEtatRupturePFMS
     */
    protected \StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS;
    /**
     * Constructor method for S006_Lecture_EtatRupturePFMS_Result
     * @uses S006_Lecture_EtatRupturePFMS_Result::setWSReturnError()
     * @uses S006_Lecture_EtatRupturePFMS_Result::setWSStockEtatRupturePFMS()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockEtatRupturePFMS($wSStockEtatRupturePFMS);
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
     * @return \StructType\S006_Lecture_EtatRupturePFMS_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSStockEtatRupturePFMS value
     * @return \StructType\RootWSStockEtatRupturePFMS
     */
    public function getWSStockEtatRupturePFMS(): \StructType\RootWSStockEtatRupturePFMS
    {
        return $this->wSStockEtatRupturePFMS;
    }
    /**
     * Set wSStockEtatRupturePFMS value
     * @param \StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS
     * @return \StructType\S006_Lecture_EtatRupturePFMS_Result
     */
    public function setWSStockEtatRupturePFMS(\StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS): self
    {
        $this->wSStockEtatRupturePFMS = $wSStockEtatRupturePFMS;
        
        return $this;
    }
}
