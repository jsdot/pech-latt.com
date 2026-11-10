<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S025_Lecture_Client_V2 StructType
 * @subpackage Structs
 */
class S025_Lecture_Client_V2 extends AbstractStructBase
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
     * The wSVenteParametre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSVenteParametres
     */
    protected \StructType\RootWSVenteParametres $wSVenteParametre;
    /**
     * The wSDonneesParametres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSDonneesParametres
     */
    protected \StructType\RootWSDonneesParametres $wSDonneesParametres;
    /**
     * The wSClients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSClients
     */
    protected \StructType\RootWSClients $wSClients;
    /**
     * Constructor method for S025_Lecture_Client_V2
     * @uses S025_Lecture_Client_V2::setWSReturnError()
     * @uses S025_Lecture_Client_V2::setWSVenteParametre()
     * @uses S025_Lecture_Client_V2::setWSDonneesParametres()
     * @uses S025_Lecture_Client_V2::setWSClients()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametre
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @param \StructType\RootWSClients $wSClients
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametre, \StructType\RootWSDonneesParametres $wSDonneesParametres, \StructType\RootWSClients $wSClients)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametre($wSVenteParametre)
            ->setWSDonneesParametres($wSDonneesParametres)
            ->setWSClients($wSClients);
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
     * @return \StructType\S025_Lecture_Client_V2
     */
    public function setWSReturnError(\StructType\RootWSReturnError $wSReturnError): self
    {
        $this->wSReturnError = $wSReturnError;
        
        return $this;
    }
    /**
     * Get wSVenteParametre value
     * @return \StructType\RootWSVenteParametres
     */
    public function getWSVenteParametre(): \StructType\RootWSVenteParametres
    {
        return $this->wSVenteParametre;
    }
    /**
     * Set wSVenteParametre value
     * @param \StructType\RootWSVenteParametres $wSVenteParametre
     * @return \StructType\S025_Lecture_Client_V2
     */
    public function setWSVenteParametre(\StructType\RootWSVenteParametres $wSVenteParametre): self
    {
        $this->wSVenteParametre = $wSVenteParametre;
        
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
     * @return \StructType\S025_Lecture_Client_V2
     */
    public function setWSDonneesParametres(\StructType\RootWSDonneesParametres $wSDonneesParametres): self
    {
        $this->wSDonneesParametres = $wSDonneesParametres;
        
        return $this;
    }
    /**
     * Get wSClients value
     * @return \StructType\RootWSClients
     */
    public function getWSClients(): \StructType\RootWSClients
    {
        return $this->wSClients;
    }
    /**
     * Set wSClients value
     * @param \StructType\RootWSClients $wSClients
     * @return \StructType\S025_Lecture_Client_V2
     */
    public function setWSClients(\StructType\RootWSClients $wSClients): self
    {
        $this->wSClients = $wSClients;
        
        return $this;
    }
}
