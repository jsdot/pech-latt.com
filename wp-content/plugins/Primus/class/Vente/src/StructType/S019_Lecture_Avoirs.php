<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S019_Lecture_Avoirs StructType
 * @subpackage Structs
 */
class S019_Lecture_Avoirs extends AbstractStructBase
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
     * The wSAvoirsOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSAvoirsOUT
     */
    protected \StructType\RootWSAvoirsOUT $wSAvoirsOUT;
    /**
     * Constructor method for S019_Lecture_Avoirs
     * @uses S019_Lecture_Avoirs::setWSReturnError()
     * @uses S019_Lecture_Avoirs::setWSVentesParametres()
     * @uses S019_Lecture_Avoirs::setWSDonneesParametres()
     * @uses S019_Lecture_Avoirs::setWSAvoirsOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @param \StructType\RootWSAvoirsOUT $wSAvoirsOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVentesParametres, \StructType\RootWSDonneesParametres $wSDonneesParametres, \StructType\RootWSAvoirsOUT $wSAvoirsOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVentesParametres($wSVentesParametres)
            ->setWSDonneesParametres($wSDonneesParametres)
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
     * @return \StructType\S019_Lecture_Avoirs
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
     * @return \StructType\S019_Lecture_Avoirs
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
     * @return \StructType\S019_Lecture_Avoirs
     */
    public function setWSDonneesParametres(\StructType\RootWSDonneesParametres $wSDonneesParametres): self
    {
        $this->wSDonneesParametres = $wSDonneesParametres;
        
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
     * @return \StructType\S019_Lecture_Avoirs
     */
    public function setWSAvoirsOUT(\StructType\RootWSAvoirsOUT $wSAvoirsOUT): self
    {
        $this->wSAvoirsOUT = $wSAvoirsOUT;
        
        return $this;
    }
}
