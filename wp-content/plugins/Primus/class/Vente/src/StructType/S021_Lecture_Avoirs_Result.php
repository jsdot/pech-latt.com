<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S021_Lecture_Avoirs_Result StructType
 * @subpackage Structs
 */
class S021_Lecture_Avoirs_Result extends AbstractStructBase
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
     * The wSCommandeIN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSCommandeIN
     */
    protected \StructType\RootWSCommandeIN $wSCommandeIN;
    /**
     * Constructor method for S021_Lecture_Avoirs_Result
     * @uses S021_Lecture_Avoirs_Result::setWSReturnError()
     * @uses S021_Lecture_Avoirs_Result::setWSCommandeIN()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSCommandeIN $wSCommandeIN
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSCommandeIN $wSCommandeIN)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSCommandeIN($wSCommandeIN);
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
     * @return \StructType\S021_Lecture_Avoirs_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSCommandeIN value
     * @return \StructType\RootWSCommandeIN
     */
    public function getWSCommandeIN(): \StructType\RootWSCommandeIN
    {
        return $this->wSCommandeIN;
    }
    /**
     * Set wSCommandeIN value
     * @param \StructType\RootWSCommandeIN $wSCommandeIN
     * @return \StructType\S021_Lecture_Avoirs_Result
     */
    public function setWSCommandeIN(\StructType\RootWSCommandeIN $wSCommandeIN): self
    {
        $this->wSCommandeIN = $wSCommandeIN;
        
        return $this;
    }
}
