<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S003_Supprime_StockDetailPostes_Result StructType
 * @subpackage Structs
 */
class S003_Supprime_StockDetailPostes_Result extends AbstractStructBase
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
     * Constructor method for S003_Supprime_StockDetailPostes_Result
     * @uses S003_Supprime_StockDetailPostes_Result::setWSReturnError()
     * @param \StructType\RootWSReturnError $wSReturnError
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError)
    {
        $this
            ->setWSReturnError($wSReturnError);
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
     * @return \StructType\S003_Supprime_StockDetailPostes_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
}
