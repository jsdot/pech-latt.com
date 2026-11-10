<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S007_Test_Existence_CourtageContrat_NoContrat_Result
 * StructType
 * @subpackage Structs
 */
class S007_Test_Existence_CourtageContrat_NoContrat_Result extends AbstractStructBase
{
    /**
     * The return_value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $return_value;
    /**
     * The wSReturnError
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSReturnError
     */
    protected \StructType\RootWSReturnError $wSReturnError;
    /**
     * The wSVenteCourtageContrat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteCourtageContrat
     */
    protected \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat;
    /**
     * Constructor method for S007_Test_Existence_CourtageContrat_NoContrat_Result
     * @uses S007_Test_Existence_CourtageContrat_NoContrat_Result::setReturn_value()
     * @uses S007_Test_Existence_CourtageContrat_NoContrat_Result::setWSReturnError()
     * @uses S007_Test_Existence_CourtageContrat_NoContrat_Result::setWSVenteCourtageContrat()
     * @param bool $return_value
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat
     */
    public function __construct(bool $return_value, \StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat)
    {
        $this
            ->setReturn_value($return_value)
            ->setWSReturnError($wSReturnError)
            ->setWSVenteCourtageContrat($wSVenteCourtageContrat);
    }
    /**
     * Get return_value value
     * @return bool
     */
    public function getReturn_value(): bool
    {
        return $this->return_value;
    }
    /**
     * Set return_value value
     * @param bool $return_value
     * @return \StructType\S007_Test_Existence_CourtageContrat_NoContrat_Result
     */
    public function setReturn_value(bool $return_value): self
    {
        // validation for constraint: boolean
        if (!is_null($return_value) && !is_bool($return_value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($return_value, true), gettype($return_value)), __LINE__);
        }
        $this->return_value = $return_value;
        
        return $this;
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
     * @return \StructType\S007_Test_Existence_CourtageContrat_NoContrat_Result
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVenteCourtageContrat value
     * @return \StructType\RootWSVenteCourtageContrat
     */
    public function getWSVenteCourtageContrat(): \StructType\RootWSVenteCourtageContrat
    {
        return $this->wSVenteCourtageContrat;
    }
    /**
     * Set wSVenteCourtageContrat value
     * @param \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat
     * @return \StructType\S007_Test_Existence_CourtageContrat_NoContrat_Result
     */
    public function setWSVenteCourtageContrat(\StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat): self
    {
        $this->wSVenteCourtageContrat = $wSVenteCourtageContrat;
        
        return $this;
    }
}
