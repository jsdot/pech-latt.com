<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S021_Lecture_Avoirs StructType
 * @subpackage Structs
 */
class S021_Lecture_Avoirs extends AbstractStructBase
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
     * The wSCommandeIN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSCommandeIN
     */
    protected \StructType\RootWSCommandeIN $wSCommandeIN;
    /**
     * Constructor method for S021_Lecture_Avoirs
     * @uses S021_Lecture_Avoirs::setWSReturnError()
     * @uses S021_Lecture_Avoirs::setWSVentesParametres()
     * @uses S021_Lecture_Avoirs::setWSDonneesParametres()
     * @uses S021_Lecture_Avoirs::setWSCommandeIN()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @param \StructType\RootWSCommandeIN $wSCommandeIN
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVentesParametres, \StructType\RootWSDonneesParametres $wSDonneesParametres, \StructType\RootWSCommandeIN $wSCommandeIN)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVentesParametres($wSVentesParametres)
            ->setWSDonneesParametres($wSDonneesParametres)
            ->setWSCommandeIN($wSCommandeIN);
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
     * @return \StructType\S021_Lecture_Avoirs
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
     * @return \StructType\S021_Lecture_Avoirs
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
     * @return \StructType\S021_Lecture_Avoirs
     */
    public function setWSDonneesParametres(\StructType\RootWSDonneesParametres $wSDonneesParametres): self
    {
        $this->wSDonneesParametres = $wSDonneesParametres;
        
        return $this;
    }
    /**
     * Get wSCommandeIN value
     * @return \StructType\RootWSCommandeIN
     */
    public function getWSCommandeIN(): \StructType\RootWSCommandeIN
    {
        return $this->wSCommandeIN;
    }
    /**
     * Set wSCommandeIN value
     * @param \StructType\RootWSCommandeIN $wSCommandeIN
     * @return \StructType\S021_Lecture_Avoirs
     */
    public function setWSCommandeIN(\StructType\RootWSCommandeIN $wSCommandeIN): self
    {
        $this->wSCommandeIN = $wSCommandeIN;
        
        return $this;
    }
}
