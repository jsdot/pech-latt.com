<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S008_Lecture_CourtageContrat StructType
 * @subpackage Structs
 */
class S008_Lecture_CourtageContrat extends AbstractStructBase
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
     * The wSVenteParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteParametres
     */
    protected \StructType\RootWSVenteParametres $wSVenteParametres;
    /**
     * The wSVenteCourtageContrat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteCourtageContrat
     */
    protected \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat;
    /**
     * Constructor method for S008_Lecture_CourtageContrat
     * @uses S008_Lecture_CourtageContrat::setWSReturnError()
     * @uses S008_Lecture_CourtageContrat::setWSVenteParametres()
     * @uses S008_Lecture_CourtageContrat::setWSVenteCourtageContrat()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametres($wSVenteParametres)
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
     * @return \StructType\S008_Lecture_CourtageContrat
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVenteParametres value
     * @return \StructType\RootWSVenteParametres
     */
    public function getWSVenteParametres(): \StructType\RootWSVenteParametres
    {
        return $this->wSVenteParametres;
    }
    /**
     * Set wSVenteParametres value
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @return \StructType\S008_Lecture_CourtageContrat
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
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
     * @return \StructType\S008_Lecture_CourtageContrat
     */
    public function setWSVenteCourtageContrat(\StructType\RootWSVenteCourtageContrat $wSVenteCourtageContrat): self
    {
        $this->wSVenteCourtageContrat = $wSVenteCourtageContrat;
        
        return $this;
    }
}
