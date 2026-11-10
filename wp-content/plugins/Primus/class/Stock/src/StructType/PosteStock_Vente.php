<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosteStock_Vente StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class PosteStock_Vente extends AbstractStructBase
{
    /**
     * The Quantite_VentesEnCours_110
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_VentesEnCours_110 = null;
    /**
     * The Quantite_RetoursAchatsEnCours_10
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_RetoursAchatsEnCours_10 = null;
    /**
     * The Quantite_FabricationEnSortie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_FabricationEnSortie = null;
    /**
     * The Quantite_ReservesNonFacturees_130
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_ReservesNonFacturees_130 = null;
    /**
     * The Quantite_VentesPrimeurs_140
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_VentesPrimeurs_140 = null;
    /**
     * The Quantite_ReservesFacturees_150
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_ReservesFacturees_150 = null;
    /**
     * The Quantite_OptionVentes_160
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_OptionVentes_160 = null;
    /**
     * The Quantite_MarcheVentePF_160
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_MarcheVentePF_160 = null;
    /**
     * The Quantite_TransfertExpedition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_TransfertExpedition = null;
    /**
     * Constructor method for PosteStock_Vente
     * @uses PosteStock_Vente::setQuantite_VentesEnCours_110()
     * @uses PosteStock_Vente::setQuantite_RetoursAchatsEnCours_10()
     * @uses PosteStock_Vente::setQuantite_FabricationEnSortie()
     * @uses PosteStock_Vente::setQuantite_ReservesNonFacturees_130()
     * @uses PosteStock_Vente::setQuantite_VentesPrimeurs_140()
     * @uses PosteStock_Vente::setQuantite_ReservesFacturees_150()
     * @uses PosteStock_Vente::setQuantite_OptionVentes_160()
     * @uses PosteStock_Vente::setQuantite_MarcheVentePF_160()
     * @uses PosteStock_Vente::setQuantite_TransfertExpedition()
     * @param string $quantite_VentesEnCours_110
     * @param string $quantite_RetoursAchatsEnCours_10
     * @param string $quantite_FabricationEnSortie
     * @param string $quantite_ReservesNonFacturees_130
     * @param string $quantite_VentesPrimeurs_140
     * @param string $quantite_ReservesFacturees_150
     * @param string $quantite_OptionVentes_160
     * @param string $quantite_MarcheVentePF_160
     * @param string $quantite_TransfertExpedition
     */
    public function __construct(?string $quantite_VentesEnCours_110 = null, ?string $quantite_RetoursAchatsEnCours_10 = null, ?string $quantite_FabricationEnSortie = null, ?string $quantite_ReservesNonFacturees_130 = null, ?string $quantite_VentesPrimeurs_140 = null, ?string $quantite_ReservesFacturees_150 = null, ?string $quantite_OptionVentes_160 = null, ?string $quantite_MarcheVentePF_160 = null, ?string $quantite_TransfertExpedition = null)
    {
        $this
            ->setQuantite_VentesEnCours_110($quantite_VentesEnCours_110)
            ->setQuantite_RetoursAchatsEnCours_10($quantite_RetoursAchatsEnCours_10)
            ->setQuantite_FabricationEnSortie($quantite_FabricationEnSortie)
            ->setQuantite_ReservesNonFacturees_130($quantite_ReservesNonFacturees_130)
            ->setQuantite_VentesPrimeurs_140($quantite_VentesPrimeurs_140)
            ->setQuantite_ReservesFacturees_150($quantite_ReservesFacturees_150)
            ->setQuantite_OptionVentes_160($quantite_OptionVentes_160)
            ->setQuantite_MarcheVentePF_160($quantite_MarcheVentePF_160)
            ->setQuantite_TransfertExpedition($quantite_TransfertExpedition);
    }
    /**
     * Get quantite_VentesEnCours value
     * @return quantite_VentesEnCours
     */
    public function getQuantite_VentesEnCours_110(): ?string
    {
        return $this->Quantite_VentesEnCours_110;
    }
    /**
     * Set quantite_VentesEnCours value
     * @param quantite_VentesEnCours $quantite_VentesEnCours
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_VentesEnCours_110(?string $quantite_VentesEnCours_110 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_VentesEnCours_110) && !is_string($quantite_VentesEnCours_110)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_VentesEnCours_110, true), gettype($quantite_VentesEnCours_110)), __LINE__);
        }
        $this->Quantite_VentesEnCours_110 = $quantite_VentesEnCours_110;
        
        return $this;
    }
    /**
     * Get quantite_RetoursAchatsEnCours value
     * @return quantite_RetoursAchatsEnCours
     */
    public function getQuantite_RetoursAchatsEnCours_10(): ?string
    {
        return $this->Quantite_RetoursAchatsEnCours_10;
    }
    /**
     * Set quantite_RetoursAchatsEnCours value
     * @param quantite_RetoursAchatsEnCours $quantite_RetoursAchatsEnCours
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_RetoursAchatsEnCours_10(?string $quantite_RetoursAchatsEnCours_10 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_RetoursAchatsEnCours_10) && !is_string($quantite_RetoursAchatsEnCours_10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_RetoursAchatsEnCours_10, true), gettype($quantite_RetoursAchatsEnCours_10)), __LINE__);
        }
        $this->Quantite_RetoursAchatsEnCours_10 = $quantite_RetoursAchatsEnCours_10;
        
        return $this;
    }
    /**
     * Get Quantite_FabricationEnSortie value
     * @return string|null
     */
    public function getQuantite_FabricationEnSortie(): ?string
    {
        return $this->Quantite_FabricationEnSortie;
    }
    /**
     * Set Quantite_FabricationEnSortie value
     * @param string $quantite_FabricationEnSortie
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_FabricationEnSortie(?string $quantite_FabricationEnSortie = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_FabricationEnSortie) && !is_string($quantite_FabricationEnSortie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_FabricationEnSortie, true), gettype($quantite_FabricationEnSortie)), __LINE__);
        }
        $this->Quantite_FabricationEnSortie = $quantite_FabricationEnSortie;
        
        return $this;
    }
    /**
     * Get quantite_ReservesNonFacturees value
     * @return quantite_ReservesNonFacturees
     */
    public function getQuantite_ReservesNonFacturees_130(): ?string
    {
        return $this->Quantite_ReservesNonFacturees_130;
    }
    /**
     * Set quantite_ReservesNonFacturees value
     * @param quantite_ReservesNonFacturees $quantite_ReservesNonFacturees
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_ReservesNonFacturees_130(?string $quantite_ReservesNonFacturees_130 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_ReservesNonFacturees_130) && !is_string($quantite_ReservesNonFacturees_130)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_ReservesNonFacturees_130, true), gettype($quantite_ReservesNonFacturees_130)), __LINE__);
        }
        $this->Quantite_ReservesNonFacturees_130 = $quantite_ReservesNonFacturees_130;
        
        return $this;
    }
    /**
     * Get quantite_VentesPrimeurs value
     * @return quantite_VentesPrimeurs
     */
    public function getQuantite_VentesPrimeurs_140(): ?string
    {
        return $this->Quantite_VentesPrimeurs_140;
    }
    /**
     * Set quantite_VentesPrimeurs value
     * @param quantite_VentesPrimeurs $quantite_VentesPrimeurs
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_VentesPrimeurs_140(?string $quantite_VentesPrimeurs_140 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_VentesPrimeurs_140) && !is_string($quantite_VentesPrimeurs_140)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_VentesPrimeurs_140, true), gettype($quantite_VentesPrimeurs_140)), __LINE__);
        }
        $this->Quantite_VentesPrimeurs_140 = $quantite_VentesPrimeurs_140;
        
        return $this;
    }
    /**
     * Get quantite_ReservesFacturees value
     * @return quantite_ReservesFacturees
     */
    public function getQuantite_ReservesFacturees_150(): ?string
    {
        return $this->Quantite_ReservesFacturees_150;
    }
    /**
     * Set quantite_ReservesFacturees value
     * @param quantite_ReservesFacturees $quantite_ReservesFacturees
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_ReservesFacturees_150(?string $quantite_ReservesFacturees_150 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_ReservesFacturees_150) && !is_string($quantite_ReservesFacturees_150)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_ReservesFacturees_150, true), gettype($quantite_ReservesFacturees_150)), __LINE__);
        }
        $this->Quantite_ReservesFacturees_150 = $quantite_ReservesFacturees_150;
        
        return $this;
    }
    /**
     * Get quantite_OptionVentes value
     * @return quantite_OptionVentes
     */
    public function getQuantite_OptionVentes_160(): ?string
    {
        return $this->Quantite_OptionVentes_160;
    }
    /**
     * Set quantite_OptionVentes value
     * @param quantite_OptionVentes $quantite_OptionVentes
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_OptionVentes_160(?string $quantite_OptionVentes_160 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_OptionVentes_160) && !is_string($quantite_OptionVentes_160)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_OptionVentes_160, true), gettype($quantite_OptionVentes_160)), __LINE__);
        }
        $this->Quantite_OptionVentes_160 = $quantite_OptionVentes_160;
        
        return $this;
    }
    /**
     * Get quantite_MarcheVentePF value
     * @return quantite_MarcheVentePF
     */
    public function getQuantite_MarcheVentePF_160(): ?string
    {
        return $this->Quantite_MarcheVentePF_160;
    }
    /**
     * Set quantite_MarcheVentePF value
     * @param quantite_MarcheVentePF $quantite_MarcheVentePF
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_MarcheVentePF_160(?string $quantite_MarcheVentePF_160 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_MarcheVentePF_160) && !is_string($quantite_MarcheVentePF_160)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_MarcheVentePF_160, true), gettype($quantite_MarcheVentePF_160)), __LINE__);
        }
        $this->Quantite_MarcheVentePF_160 = $quantite_MarcheVentePF_160;
        
        return $this;
    }
    /**
     * Get Quantite_TransfertExpedition value
     * @return string|null
     */
    public function getQuantite_TransfertExpedition(): ?string
    {
        return $this->Quantite_TransfertExpedition;
    }
    /**
     * Set Quantite_TransfertExpedition value
     * @param string $quantite_TransfertExpedition
     * @return \StructType\PosteStock_Vente
     */
    public function setQuantite_TransfertExpedition(?string $quantite_TransfertExpedition = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_TransfertExpedition) && !is_string($quantite_TransfertExpedition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_TransfertExpedition, true), gettype($quantite_TransfertExpedition)), __LINE__);
        }
        $this->Quantite_TransfertExpedition = $quantite_TransfertExpedition;
        
        return $this;
    }
}
