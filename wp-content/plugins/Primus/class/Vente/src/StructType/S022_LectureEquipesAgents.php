<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for S022_LectureEquipesAgents StructType
 * @subpackage Structs
 */
class S022_LectureEquipesAgents extends AbstractStructBase
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
     * The wSEquipeAgentOUT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\RootWSEquipeAgentOUT
     */
    protected \StructType\RootWSEquipeAgentOUT $wSEquipeAgentOUT;
    /**
     * Constructor method for S022_LectureEquipesAgents
     * @uses S022_LectureEquipesAgents::setWSReturnError()
     * @uses S022_LectureEquipesAgents::setWSVentesParametres()
     * @uses S022_LectureEquipesAgents::setWSEquipeAgentOUT()
     * @param \StructType\RootWSReturnError $wSReturnError
     * @param \StructType\RootWSVenteParametres $wSVentesParametres
     * @param \StructType\RootWSEquipeAgentOUT $wSEquipeAgentOUT
     */
    public function __construct(\StructType\RootWSReturnError $wSReturnError, \StructType\RootWSVenteParametres $wSVentesParametres, \StructType\RootWSEquipeAgentOUT $wSEquipeAgentOUT)
    {
        $this
            ->setWSReturnError($wSReturnError)
            ->setWSVentesParametres($wSVentesParametres)
            ->setWSEquipeAgentOUT($wSEquipeAgentOUT);
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
     * @return \StructType\S022_LectureEquipesAgents
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
     * @return \StructType\S022_LectureEquipesAgents
     */
    public function setWSVentesParametres(\StructType\RootWSVenteParametres $wSVentesParametres): self
    {
        $this->wSVentesParametres = $wSVentesParametres;
        
        return $this;
    }
    /**
     * Get wSEquipeAgentOUT value
     * @return \StructType\RootWSEquipeAgentOUT
     */
    public function getWSEquipeAgentOUT(): \StructType\RootWSEquipeAgentOUT
    {
        return $this->wSEquipeAgentOUT;
    }
    /**
     * Set wSEquipeAgentOUT value
     * @param \StructType\RootWSEquipeAgentOUT $wSEquipeAgentOUT
     * @return \StructType\S022_LectureEquipesAgents
     */
    public function setWSEquipeAgentOUT(\StructType\RootWSEquipeAgentOUT $wSEquipeAgentOUT): self
    {
        $this->wSEquipeAgentOUT = $wSEquipeAgentOUT;
        
        return $this;
    }
}
