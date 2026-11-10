<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S006_Lecture_EtatRupturePFMS StructType
 * @subpackage Structs
 */
class S006_Lecture_EtatRupturePFMS extends AbstractStructBase
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
     * The wSStockEtatRupturePFMS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSStockEtatRupturePFMS
     */
    protected \StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS;
    /**
     * Constructor method for S006_Lecture_EtatRupturePFMS
     * @uses S006_Lecture_EtatRupturePFMS::setWSReturnError()
     * @uses S006_Lecture_EtatRupturePFMS::setWSStockParametres()
     * @uses S006_Lecture_EtatRupturePFMS::setWSStockEtatRupturePFMS()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSStockParametres $wSStockParametres
     * @param \StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSStockParametres $wSStockParametres, \StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSStockParametres($wSStockParametres)
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
     * @return \StructType\S006_Lecture_EtatRupturePFMS
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
     * @return \StructType\S006_Lecture_EtatRupturePFMS
     */
    public function setWSStockParametres(\StructType\RootWSStockParametres $wSStockParametres): self
    {
        $this->wSStockParametres = $wSStockParametres;
        
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
     * @return \StructType\S006_Lecture_EtatRupturePFMS
     */
    public function setWSStockEtatRupturePFMS(\StructType\RootWSStockEtatRupturePFMS $wSStockEtatRupturePFMS): self
    {
        $this->wSStockEtatRupturePFMS = $wSStockEtatRupturePFMS;
        
        return $this;
    }
}
