<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S016_Lecture_MajContacts StructType
 * @subpackage Structs
 */
class S016_Lecture_MajContacts extends AbstractStructBase
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
     * The wSContactsOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSContactsOUT
     */
    protected \StructType\RootWSContactsOUT $wSContactsOUT;
    /**
     * Constructor method for S016_Lecture_MajContacts
     * @uses S016_Lecture_MajContacts::setWSReturnError()
     * @uses S016_Lecture_MajContacts::setWSVentesParametres()
     * @uses S016_Lecture_MajContacts::setWSDonneesParametres()
     * @uses S016_Lecture_MajContacts::setWSContactsOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @param \StructType\RootWSContactsOUT $wSContactsOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVentesParametres, \StructType\RootWSDonneesParametres $wSDonneesParametres, \StructType\RootWSContactsOUT $wSContactsOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVentesParametres($wSVentesParametres)
            ->setWSDonneesParametres($wSDonneesParametres)
            ->setWSContactsOUT($wSContactsOUT);
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
     * @return \StructType\S016_Lecture_MajContacts
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
     * @return \StructType\S016_Lecture_MajContacts
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
     * @return \StructType\S016_Lecture_MajContacts
     */
    public function setWSDonneesParametres(\StructType\RootWSDonneesParametres $wSDonneesParametres): self
    {
        $this->wSDonneesParametres = $wSDonneesParametres;
        
        return $this;
    }
    /**
     * Get wSContactsOUT value
     * @return \StructType\RootWSContactsOUT
     */
    public function getWSContactsOUT(): \StructType\RootWSContactsOUT
    {
        return $this->wSContactsOUT;
    }
    /**
     * Set wSContactsOUT value
     * @param \StructType\RootWSContactsOUT $wSContactsOUT
     * @return \StructType\S016_Lecture_MajContacts
     */
    public function setWSContactsOUT(\StructType\RootWSContactsOUT $wSContactsOUT): self
    {
        $this->wSContactsOUT = $wSContactsOUT;
        
        return $this;
    }
}
