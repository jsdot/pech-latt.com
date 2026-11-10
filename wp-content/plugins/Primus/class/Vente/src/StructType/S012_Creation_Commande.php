<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S012_Creation_Commande StructType
 * @subpackage Structs
 */
class S012_Creation_Commande extends AbstractStructBase
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
     * The wSCommandeIN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSCommandeIN
     */
    protected \StructType\RootWSCommandeIN $wSCommandeIN;
    /**
     * Constructor method for S012_Creation_Commande
     * @uses S012_Creation_Commande::setWSReturnError()
     * @uses S012_Creation_Commande::setWSVenteParametres()
     * @uses S012_Creation_Commande::setWSCommandeIN()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVenteParametres
     * @param \StructType\RootWSCommandeIN $wSCommandeIN
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVenteParametres, \StructType\RootWSCommandeIN $wSCommandeIN)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVenteParametres($wSVenteParametres)
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
     * @return \StructType\S012_Creation_Commande
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
     * @return \StructType\S012_Creation_Commande
     */
    public function setWSVenteParametres(\StructType\RootWSVenteParametres $wSVenteParametres): self
    {
        $this->wSVenteParametres = $wSVenteParametres;
        
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
     * @return \StructType\S012_Creation_Commande
     */
    public function setWSCommandeIN(\StructType\RootWSCommandeIN $wSCommandeIN): self
    {
        $this->wSCommandeIN = $wSCommandeIN;
        
        return $this;
    }
}
