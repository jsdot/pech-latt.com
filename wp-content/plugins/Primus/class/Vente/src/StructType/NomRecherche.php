<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NomRecherche StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class NomRecherche extends AbstractStructBase
{
    /**
     * The NomRechercheVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NomRechercheVide = null;
    /**
     * Constructor method for NomRecherche
     * @uses NomRecherche::setNomRechercheVide()
     * @param string $nomRechercheVide
     */
    public function __construct(?string $nomRechercheVide = null)
    {
        $this
            ->setNomRechercheVide($nomRechercheVide);
    }
    /**
     * Get NomRechercheVide value
     * @return string|null
     */
    public function getNomRechercheVide(): ?string
    {
        return $this->NomRechercheVide;
    }
    /**
     * Set NomRechercheVide value
     * @param string $nomRechercheVide
     * @return \StructType\NomRecherche
     */
    public function setNomRechercheVide(?string $nomRechercheVide = null): self
    {
        // validation for constraint: string
        if (!is_null($nomRechercheVide) && !is_string($nomRechercheVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomRechercheVide, true), gettype($nomRechercheVide)), __LINE__);
        }
        $this->NomRechercheVide = $nomRechercheVide;
        
        return $this;
    }
}
