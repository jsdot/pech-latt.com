<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosteStock_Achat StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class PosteStock_Achat extends AbstractStructBase
{
    /**
     * The Quantite_AchatsEnCours_10
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_AchatsEnCours_10 = null;
    /**
     * The Quantite_RetoursVentesEnCours_110
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_RetoursVentesEnCours_110 = null;
    /**
     * The Quantite_FabricationEnEntree
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_FabricationEnEntree = null;
    /**
     * The Quantite_AchatsMarches_30
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_AchatsMarches_30 = null;
    /**
     * The Quantite_AchatsPrimeurs_40
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_AchatsPrimeurs_40 = null;
    /**
     * The Quantite_AchatsFacturesNonEntrees_50
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_AchatsFacturesNonEntrees_50 = null;
    /**
     * The Quantite_OptionAchat_60
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_OptionAchat_60 = null;
    /**
     * The Quantite_TransfertReception
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_TransfertReception = null;
    /**
     * The Quantite_TransfertEnTransit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_TransfertEnTransit = null;
    /**
     * The Quantite_QteSurReservesOrigineAchat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_QteSurReservesOrigineAchat = null;
    /**
     * The Quantite_QuantiteSurOFProduite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Quantite_QuantiteSurOFProduite = null;
    /**
     * Constructor method for PosteStock_Achat
     * @uses PosteStock_Achat::setQuantite_AchatsEnCours_10()
     * @uses PosteStock_Achat::setQuantite_RetoursVentesEnCours_110()
     * @uses PosteStock_Achat::setQuantite_FabricationEnEntree()
     * @uses PosteStock_Achat::setQuantite_AchatsMarches_30()
     * @uses PosteStock_Achat::setQuantite_AchatsPrimeurs_40()
     * @uses PosteStock_Achat::setQuantite_AchatsFacturesNonEntrees_50()
     * @uses PosteStock_Achat::setQuantite_OptionAchat_60()
     * @uses PosteStock_Achat::setQuantite_TransfertReception()
     * @uses PosteStock_Achat::setQuantite_TransfertEnTransit()
     * @uses PosteStock_Achat::setQuantite_QteSurReservesOrigineAchat()
     * @uses PosteStock_Achat::setQuantite_QuantiteSurOFProduite()
     * @param string $quantite_AchatsEnCours_10
     * @param string $quantite_RetoursVentesEnCours_110
     * @param string $quantite_FabricationEnEntree
     * @param string $quantite_AchatsMarches_30
     * @param string $quantite_AchatsPrimeurs_40
     * @param string $quantite_AchatsFacturesNonEntrees_50
     * @param string $quantite_OptionAchat_60
     * @param string $quantite_TransfertReception
     * @param string $quantite_TransfertEnTransit
     * @param string $quantite_QteSurReservesOrigineAchat
     * @param string $quantite_QuantiteSurOFProduite
     */
    public function __construct(?string $quantite_AchatsEnCours_10 = null, ?string $quantite_RetoursVentesEnCours_110 = null, ?string $quantite_FabricationEnEntree = null, ?string $quantite_AchatsMarches_30 = null, ?string $quantite_AchatsPrimeurs_40 = null, ?string $quantite_AchatsFacturesNonEntrees_50 = null, ?string $quantite_OptionAchat_60 = null, ?string $quantite_TransfertReception = null, ?string $quantite_TransfertEnTransit = null, ?string $quantite_QteSurReservesOrigineAchat = null, ?string $quantite_QuantiteSurOFProduite = null)
    {
        $this
            ->setQuantite_AchatsEnCours_10($quantite_AchatsEnCours_10)
            ->setQuantite_RetoursVentesEnCours_110($quantite_RetoursVentesEnCours_110)
            ->setQuantite_FabricationEnEntree($quantite_FabricationEnEntree)
            ->setQuantite_AchatsMarches_30($quantite_AchatsMarches_30)
            ->setQuantite_AchatsPrimeurs_40($quantite_AchatsPrimeurs_40)
            ->setQuantite_AchatsFacturesNonEntrees_50($quantite_AchatsFacturesNonEntrees_50)
            ->setQuantite_OptionAchat_60($quantite_OptionAchat_60)
            ->setQuantite_TransfertReception($quantite_TransfertReception)
            ->setQuantite_TransfertEnTransit($quantite_TransfertEnTransit)
            ->setQuantite_QteSurReservesOrigineAchat($quantite_QteSurReservesOrigineAchat)
            ->setQuantite_QuantiteSurOFProduite($quantite_QuantiteSurOFProduite);
    }
    /**
     * Get quantite_AchatsEnCours value
     * @return quantite_AchatsEnCours
     */
    public function getQuantite_AchatsEnCours_10(): ?string
    {
        return $this->Quantite_AchatsEnCours_10;
    }
    /**
     * Set quantite_AchatsEnCours value
     * @param quantite_AchatsEnCours $quantite_AchatsEnCours
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_AchatsEnCours_10(?string $quantite_AchatsEnCours_10 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_AchatsEnCours_10) && !is_string($quantite_AchatsEnCours_10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_AchatsEnCours_10, true), gettype($quantite_AchatsEnCours_10)), __LINE__);
        }
        $this->Quantite_AchatsEnCours_10 = $quantite_AchatsEnCours_10;
        
        return $this;
    }
    /**
     * Get quantite_RetoursVentesEnCours value
     * @return quantite_RetoursVentesEnCours
     */
    public function getQuantite_RetoursVentesEnCours_110(): ?string
    {
        return $this->Quantite_RetoursVentesEnCours_110;
    }
    /**
     * Set quantite_RetoursVentesEnCours value
     * @param quantite_RetoursVentesEnCours $quantite_RetoursVentesEnCours
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_RetoursVentesEnCours_110(?string $quantite_RetoursVentesEnCours_110 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_RetoursVentesEnCours_110) && !is_string($quantite_RetoursVentesEnCours_110)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_RetoursVentesEnCours_110, true), gettype($quantite_RetoursVentesEnCours_110)), __LINE__);
        }
        $this->Quantite_RetoursVentesEnCours_110 = $quantite_RetoursVentesEnCours_110;
        
        return $this;
    }
    /**
     * Get Quantite_FabricationEnEntree value
     * @return string|null
     */
    public function getQuantite_FabricationEnEntree(): ?string
    {
        return $this->Quantite_FabricationEnEntree;
    }
    /**
     * Set Quantite_FabricationEnEntree value
     * @param string $quantite_FabricationEnEntree
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_FabricationEnEntree(?string $quantite_FabricationEnEntree = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_FabricationEnEntree) && !is_string($quantite_FabricationEnEntree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_FabricationEnEntree, true), gettype($quantite_FabricationEnEntree)), __LINE__);
        }
        $this->Quantite_FabricationEnEntree = $quantite_FabricationEnEntree;
        
        return $this;
    }
    /**
     * Get quantite_AchatsMarches value
     * @return quantite_AchatsMarches
     */
    public function getQuantite_AchatsMarches_30(): ?string
    {
        return $this->Quantite_AchatsMarches_30;
    }
    /**
     * Set quantite_AchatsMarches value
     * @param quantite_AchatsMarches $quantite_AchatsMarches
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_AchatsMarches_30(?string $quantite_AchatsMarches_30 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_AchatsMarches_30) && !is_string($quantite_AchatsMarches_30)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_AchatsMarches_30, true), gettype($quantite_AchatsMarches_30)), __LINE__);
        }
        $this->Quantite_AchatsMarches_30 = $quantite_AchatsMarches_30;
        
        return $this;
    }
    /**
     * Get quantite_AchatsPrimeurs value
     * @return quantite_AchatsPrimeurs
     */
    public function getQuantite_AchatsPrimeurs_40(): ?string
    {
        return $this->Quantite_AchatsPrimeurs_40;
    }
    /**
     * Set quantite_AchatsPrimeurs value
     * @param quantite_AchatsPrimeurs $quantite_AchatsPrimeurs
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_AchatsPrimeurs_40(?string $quantite_AchatsPrimeurs_40 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_AchatsPrimeurs_40) && !is_string($quantite_AchatsPrimeurs_40)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_AchatsPrimeurs_40, true), gettype($quantite_AchatsPrimeurs_40)), __LINE__);
        }
        $this->Quantite_AchatsPrimeurs_40 = $quantite_AchatsPrimeurs_40;
        
        return $this;
    }
    /**
     * Get quantite_AchatsFacturesNonEntrees value
     * @return quantite_AchatsFacturesNonEntrees
     */
    public function getQuantite_AchatsFacturesNonEntrees_50(): ?string
    {
        return $this->Quantite_AchatsFacturesNonEntrees_50;
    }
    /**
     * Set quantite_AchatsFacturesNonEntrees value
     * @param quantite_AchatsFacturesNonEntrees $quantite_AchatsFacturesNonEntrees
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_AchatsFacturesNonEntrees_50(?string $quantite_AchatsFacturesNonEntrees_50 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_AchatsFacturesNonEntrees_50) && !is_string($quantite_AchatsFacturesNonEntrees_50)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_AchatsFacturesNonEntrees_50, true), gettype($quantite_AchatsFacturesNonEntrees_50)), __LINE__);
        }
        $this->Quantite_AchatsFacturesNonEntrees_50 = $quantite_AchatsFacturesNonEntrees_50;
        
        return $this;
    }
    /**
     * Get quantite_OptionAchat value
     * @return quantite_OptionAchat
     */
    public function getQuantite_OptionAchat_60(): ?string
    {
        return $this->Quantite_OptionAchat_60;
    }
    /**
     * Set quantite_OptionAchat value
     * @param quantite_OptionAchat $quantite_OptionAchat
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_OptionAchat_60(?string $quantite_OptionAchat_60 = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_OptionAchat_60) && !is_string($quantite_OptionAchat_60)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_OptionAchat_60, true), gettype($quantite_OptionAchat_60)), __LINE__);
        }
        $this->Quantite_OptionAchat_60 = $quantite_OptionAchat_60;
        
        return $this;
    }
    /**
     * Get Quantite_TransfertReception value
     * @return string|null
     */
    public function getQuantite_TransfertReception(): ?string
    {
        return $this->Quantite_TransfertReception;
    }
    /**
     * Set Quantite_TransfertReception value
     * @param string $quantite_TransfertReception
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_TransfertReception(?string $quantite_TransfertReception = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_TransfertReception) && !is_string($quantite_TransfertReception)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_TransfertReception, true), gettype($quantite_TransfertReception)), __LINE__);
        }
        $this->Quantite_TransfertReception = $quantite_TransfertReception;
        
        return $this;
    }
    /**
     * Get Quantite_TransfertEnTransit value
     * @return string|null
     */
    public function getQuantite_TransfertEnTransit(): ?string
    {
        return $this->Quantite_TransfertEnTransit;
    }
    /**
     * Set Quantite_TransfertEnTransit value
     * @param string $quantite_TransfertEnTransit
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_TransfertEnTransit(?string $quantite_TransfertEnTransit = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_TransfertEnTransit) && !is_string($quantite_TransfertEnTransit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_TransfertEnTransit, true), gettype($quantite_TransfertEnTransit)), __LINE__);
        }
        $this->Quantite_TransfertEnTransit = $quantite_TransfertEnTransit;
        
        return $this;
    }
    /**
     * Get Quantite_QteSurReservesOrigineAchat value
     * @return string|null
     */
    public function getQuantite_QteSurReservesOrigineAchat(): ?string
    {
        return $this->Quantite_QteSurReservesOrigineAchat;
    }
    /**
     * Set Quantite_QteSurReservesOrigineAchat value
     * @param string $quantite_QteSurReservesOrigineAchat
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_QteSurReservesOrigineAchat(?string $quantite_QteSurReservesOrigineAchat = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_QteSurReservesOrigineAchat) && !is_string($quantite_QteSurReservesOrigineAchat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_QteSurReservesOrigineAchat, true), gettype($quantite_QteSurReservesOrigineAchat)), __LINE__);
        }
        $this->Quantite_QteSurReservesOrigineAchat = $quantite_QteSurReservesOrigineAchat;
        
        return $this;
    }
    /**
     * Get Quantite_QuantiteSurOFProduite value
     * @return string|null
     */
    public function getQuantite_QuantiteSurOFProduite(): ?string
    {
        return $this->Quantite_QuantiteSurOFProduite;
    }
    /**
     * Set Quantite_QuantiteSurOFProduite value
     * @param string $quantite_QuantiteSurOFProduite
     * @return \StructType\PosteStock_Achat
     */
    public function setQuantite_QuantiteSurOFProduite(?string $quantite_QuantiteSurOFProduite = null): self
    {
        // validation for constraint: string
        if (!is_null($quantite_QuantiteSurOFProduite) && !is_string($quantite_QuantiteSurOFProduite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantite_QuantiteSurOFProduite, true), gettype($quantite_QuantiteSurOFProduite)), __LINE__);
        }
        $this->Quantite_QuantiteSurOFProduite = $quantite_QuantiteSurOFProduite;
        
        return $this;
    }
}
