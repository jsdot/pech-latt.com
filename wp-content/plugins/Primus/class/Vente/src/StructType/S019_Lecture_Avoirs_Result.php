<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S019_Lecture_Avoirs_Result StructType
 * @subpackage Structs
 */
class S019_Lecture_Avoirs_Result extends AbstractStructBase
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
     * The wSAvoirsOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSAvoirsOUT
     */
    protected \StructType\RootWSAvoirsOUT $wSAvoirsOUT;
    /**
     * Constructor method for S019_Lecture_Avoirs_Result
     * @uses S019_Lecture_Avoirs_Result::setWSReturnError()
     * @uses S019_Lecture_Avoirs_Result::setWSAvoirsOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSAvoirsOUT $wSAvoirsOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSAvoirsOUT $wSAvoirsOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSAvoirsOUT($wSAvoirsOUT);
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
     * @return \StructType\S019_Lecture_Avoirs_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSAvoirsOUT value
     * @return \StructType\RootWSAvoirsOUT
     */
    public function getWSAvoirsOUT(): \StructType\RootWSAvoirsOUT
    {
        return $this->wSAvoirsOUT;
    }
    /**
     * Set wSAvoirsOUT value
     * @param \StructType\RootWSAvoirsOUT $wSAvoirsOUT
     * @return \StructType\S019_Lecture_Avoirs_Result
     */
    public function setWSAvoirsOUT(\StructType\RootWSAvoirsOUT $wSAvoirsOUT): self
    {
        $this->wSAvoirsOUT = $wSAvoirsOUT;
        
        return $this;
    }
}
