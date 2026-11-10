<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S017_Lecture_MajVendeurs StructType
 * @subpackage Structs
 */
class S017_Lecture_MajVendeurs extends AbstractStructBase
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
     * The wSVentesParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteParametres
     */
    protected \StructType\RootWSVenteParametres $wSVentesParametres;
    /**
     * The wSDonneesParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSDonneesParametres
     */
    protected \StructType\RootWSDonneesParametres $wSDonneesParametres;
    /**
     * The wSVendeursOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSContactsOUT
     */
    protected \StructType\RootWSContactsOUT $wSVendeursOUT;
    /**
     * Constructor method for S017_Lecture_MajVendeurs
     * @uses S017_Lecture_MajVendeurs::setWSReturnError()
     * @uses S017_Lecture_MajVendeurs::setWSVentesParametres()
     * @uses S017_Lecture_MajVendeurs::setWSDonneesParametres()
     * @uses S017_Lecture_MajVendeurs::setWSVendeursOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @param \StructType\RootWSContactsOUT $wSVendeursOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVentesParametres, \StructType\RootWSDonneesParametres $wSDonneesParametres, \StructType\RootWSContactsOUT $wSVendeursOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVentesParametres($wSVentesParametres)
            ->setWSDonneesParametres($wSDonneesParametres)
            ->setWSVendeursOUT($wSVendeursOUT);
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
     * @return \StructType\S017_Lecture_MajVendeurs
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVentesParametres value
     * @return \StructType\RootWSVenteParametres
     */
    public function getWSVentesParametres(): \StructType\RootWSVenteParametres
    {
        return $this->wSVentesParametres;
    }
    /**
     * Set wSVentesParametres value
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @return \StructType\S017_Lecture_MajVendeurs
     */
    public function setWSVentesParametres(\StructType\RootWSVenteParametres $wSVentesParametres): self
    {
        $this->wSVentesParametres = $wSVentesParametres;
        
        return $this;
    }
    /**
     * Get wSDonneesParametres value
     * @return \StructType\RootWSDonneesParametres
     */
    public function getWSDonneesParametres(): \StructType\RootWSDonneesParametres
    {
        return $this->wSDonneesParametres;
    }
    /**
     * Set wSDonneesParametres value
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @return \StructType\S017_Lecture_MajVendeurs
     */
    public function setWSDonneesParametres(\StructType\RootWSDonneesParametres $wSDonneesParametres): self
    {
        $this->wSDonneesParametres = $wSDonneesParametres;
        
        return $this;
    }
    /**
     * Get wSVendeursOUT value
     * @return \StructType\RootWSContactsOUT
     */
    public function getWSVendeursOUT(): \StructType\RootWSContactsOUT
    {
        return $this->wSVendeursOUT;
    }
    /**
     * Set wSVendeursOUT value
     * @param \StructType\RootWSContactsOUT $wSVendeursOUT
     * @return \StructType\S017_Lecture_MajVendeurs
     */
    public function setWSVendeursOUT(\StructType\RootWSContactsOUT $wSVendeursOUT): self
    {
        $this->wSVendeursOUT = $wSVendeursOUT;
        
        return $this;
    }
}
