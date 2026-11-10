<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S011_TarifsOUT StructType
 * @subpackage Structs
 */
class S011_TarifsOUT extends AbstractStructBase
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
     * The wSTarifsOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSTarifsOUT
     */
    protected \StructType\RootWSTarifsOUT $wSTarifsOUT;
    /**
     * Constructor method for S011_TarifsOUT
     * @uses S011_TarifsOUT::setWSReturnError()
     * @uses S011_TarifsOUT::setWSVenteParametres()
     * @uses S011_TarifsOUT::setWSTarifsOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSTarifsOUT $wSTarifsOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSTarifsOUT $wSTarifsOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametres($wSVenteParametres)
            ->setWSTarifsOUT($wSTarifsOUT);
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
     * @return \StructType\S011_TarifsOUT
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
     * @return \StructType\S011_TarifsOUT
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
        return $this;
    }
    /**
     * Get wSTarifsOUT value
     * @return \StructType\RootWSTarifsOUT
     */
    public function getWSTarifsOUT(): \StructType\RootWSTarifsOUT
    {
        return $this->wSTarifsOUT;
    }
    /**
     * Set wSTarifsOUT value
     * @param \StructType\RootWSTarifsOUT $wSTarifsOUT
     * @return \StructType\S011_TarifsOUT
     */
    public function setWSTarifsOUT(\StructType\RootWSTarifsOUT $wSTarifsOUT): self
    {
        $this->wSTarifsOUT = $wSTarifsOUT;
        
        return $this;
    }
}
