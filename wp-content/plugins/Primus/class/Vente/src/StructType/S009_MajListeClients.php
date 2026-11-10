<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S009_MajListeClients StructType
 * @subpackage Structs
 */
class S009_MajListeClients extends AbstractStructBase
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
     * Constructor method for S009_MajListeClients
     * @uses S009_MajListeClients::setWSReturnError()
     * @uses S009_MajListeClients::setWSVenteParametres()
     * @uses S009_MajListeClients::setWSDonneesParametres()
     * @uses S009_MajListeClients::setWSClients()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSDonneesParametres $wSDonneesParametres
     * @param \StructType\RootWSClients $wSClients
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSDonneesParametres $wSDonneesParametres, \StructType\RootWSClients $wSClients)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametres($wSVenteParametres)
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
     * @return \StructType\S009_MajListeClients
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
     * @return \StructType\S009_MajListeClients
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
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
     * @return \StructType\S009_MajListeClients
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
     * @return \StructType\S009_MajListeClients
     */
    public function setWSClients(\StructType\RootWSClients $wSClients): self
    {
        $this->wSClients = $wSClients;
        
        return $this;
    }
}
