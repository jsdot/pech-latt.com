<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CourtageContrat StructType
 * @subpackage Structs
 */
class CourtageContrat extends AbstractStructBase
{
    /**
     * The General
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\General
     */
    protected \StructType\General $General;
    /**
     * Constructor method for CourtageContrat
     * @uses CourtageContrat::setGeneral()
     * @param \StructType\General $general
     */
    public function __construct(\StructType\General $general)
    {
        $this
            ->setGeneral($general);
    }
    /**
     * Get General value
     * @return \StructType\General
     */
    public function getGeneral(): \StructType\General
    {
        return $this->General;
    }
    /**
     * Set General value
     * @param \StructType\General $general
     * @return \StructType\CourtageContrat
     */
    public function setGeneral(\StructType\General $general): self
    {
        $this->General = $general;
        
        return $this;
    }
}
