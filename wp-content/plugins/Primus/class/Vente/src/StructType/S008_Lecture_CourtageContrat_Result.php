<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S008_Lecture_CourtageContrat_Result StructType
 * @subpackage Structs
 */
class S008_Lecture_CourtageContrat_Result extends AbstractStructBase
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
     * The wSVenteCourtageContrat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteCourtageContrat
     */
    protected \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat;
    /**
     * Constructor method for S008_Lecture_CourtageContrat_Result
     * @uses S008_Lecture_CourtageContrat_Result::setWSReturnError()
     * @uses S008_Lecture_CourtageContrat_Result::setWSVenteCourtageContrat()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteCourtageContrat($wSVenteCourtageContrat);
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
     * @return \StructType\S008_Lecture_CourtageContrat_Result
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
     * @return \StructType\S008_Lecture_CourtageContrat_Result
     */
    public function setWSVenteCourtageContrat(\StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat): self
    {
        $this->wSVenteCourtageContrat = $wSVenteCourtageContrat;
        
        return $this;
    }
}
