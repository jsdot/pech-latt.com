<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSVenteCourtageContrat StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSVenteCourtageContrat
 * @subpackage Structs
 */
class RootWSVenteCourtageContrat extends AbstractStructBase
{
    /**
     * The CourtageContrat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\CourtageContrat
     */
    protected \StructType\CourtageContrat $CourtageContrat;
    /**
     * Constructor method for RootWSVenteCourtageContrat
     * @uses RootWSVenteCourtageContrat::setCourtageContrat()
     * @param \StructType\CourtageContrat $courtageContrat
     */
    public function __construct(\StructType\CourtageContrat $courtageContrat)
    {
        $this
            ->setCourtageContrat($courtageContrat);
    }
    /**
     * Get CourtageContrat value
     * @return \StructType\CourtageContrat
     */
    public function getCourtageContrat(): \StructType\CourtageContrat
    {
        return $this->CourtageContrat;
    }
    /**
     * Set CourtageContrat value
     * @param \StructType\CourtageContrat $courtageContrat
     * @return \StructType\RootWSVenteCourtageContrat
     */
    public function setCourtageContrat(\StructType\CourtageContrat $courtageContrat): self
    {
        $this->CourtageContrat = $courtageContrat;
        
        return $this;
    }
}
