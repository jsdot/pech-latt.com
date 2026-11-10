<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commentaires StructType
 * @subpackage Structs
 */
class Commentaires extends AbstractStructBase
{
    /**
     * The Com_Emplacement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Com_Emplacement;
    /**
     * The Com_Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Com_Text;
    /**
     * The Commentaire_Emplacement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Commentaire_Emplacement;
    /**
     * The Commentaire_Ligne
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Commentaire_Ligne;
    /**
     * The Commentaire_Texte
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Commentaire_Texte;
    /**
     * The Commentaire_TagPreparation
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $Commentaire_TagPreparation;
    /**
     * The Commentaire_TagTransport
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $Commentaire_TagTransport;
    /**
     * The Commentaire_TagFacturation
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $Commentaire_TagFacturation;
    /**
     * The Commentaires_Emplacement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Commentaires_Emplacement;
    /**
     * The Commentaires_Ligne
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Commentaires_Ligne;
    /**
     * The Commentaires_Rang
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Commentaires_Rang;
    /**
     * The Commentaires_Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Commentaires_Text;
    /**
     * The Com_Rang
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Com_Rang = null;
    /**
     * The Com_LineNo
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Com_LineNo = null;
    /**
     * The Com_Preparation
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Com_Preparation = null;
    /**
     * The Com_Transport
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Com_Transport = null;
    /**
     * The Com_Facturation
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Com_Facturation = null;
    /**
     * The Com_OrdreFabrication
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Com_OrdreFabrication = null;
    /**
     * The Com_ExclureFacture
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Com_ExclureFacture = null;
    /**
     * Constructor method for Commentaires
     * @uses Commentaires::setCom_Emplacement()
     * @uses Commentaires::setCom_Text()
     * @uses Commentaires::setCommentaire_Emplacement()
     * @uses Commentaires::setCommentaire_Ligne()
     * @uses Commentaires::setCommentaire_Texte()
     * @uses Commentaires::setCommentaire_TagPreparation()
     * @uses Commentaires::setCommentaire_TagTransport()
     * @uses Commentaires::setCommentaire_TagFacturation()
     * @uses Commentaires::setCommentaires_Emplacement()
     * @uses Commentaires::setCommentaires_Ligne()
     * @uses Commentaires::setCommentaires_Rang()
     * @uses Commentaires::setCommentaires_Text()
     * @uses Commentaires::setCom_Rang()
     * @uses Commentaires::setCom_LineNo()
     * @uses Commentaires::setCom_Preparation()
     * @uses Commentaires::setCom_Transport()
     * @uses Commentaires::setCom_Facturation()
     * @uses Commentaires::setCom_OrdreFabrication()
     * @uses Commentaires::setCom_ExclureFacture()
     * @param string $com_Emplacement
     * @param string $com_Text
     * @param string $commentaire_Emplacement
     * @param int $commentaire_Ligne
     * @param string $commentaire_Texte
     * @param bool $commentaire_TagPreparation
     * @param bool $commentaire_TagTransport
     * @param bool $commentaire_TagFacturation
     * @param string $commentaires_Emplacement
     * @param int $commentaires_Ligne
     * @param int $commentaires_Rang
     * @param string $commentaires_Text
     * @param int $com_Rang
     * @param int $com_LineNo
     * @param bool $com_Preparation
     * @param bool $com_Transport
     * @param bool $com_Facturation
     * @param bool $com_OrdreFabrication
     * @param bool $com_ExclureFacture
     */
    public function __construct(string $com_Emplacement, string $com_Text, string $commentaire_Emplacement, int $commentaire_Ligne, string $commentaire_Texte, bool $commentaire_TagPreparation, bool $commentaire_TagTransport, bool $commentaire_TagFacturation, string $commentaires_Emplacement, int $commentaires_Ligne, int $commentaires_Rang, string $commentaires_Text, ?int $com_Rang = 0, ?int $com_LineNo = 0, ?bool $com_Preparation = false, ?bool $com_Transport = false, ?bool $com_Facturation = false, ?bool $com_OrdreFabrication = false, ?bool $com_ExclureFacture = false)
    {
        $this
            ->setCom_Emplacement($com_Emplacement)
            ->setCom_Text($com_Text)
            ->setCommentaire_Emplacement($commentaire_Emplacement)
            ->setCommentaire_Ligne($commentaire_Ligne)
            ->setCommentaire_Texte($commentaire_Texte)
            ->setCommentaire_TagPreparation($commentaire_TagPreparation)
            ->setCommentaire_TagTransport($commentaire_TagTransport)
            ->setCommentaire_TagFacturation($commentaire_TagFacturation)
            ->setCommentaires_Emplacement($commentaires_Emplacement)
            ->setCommentaires_Ligne($commentaires_Ligne)
            ->setCommentaires_Rang($commentaires_Rang)
            ->setCommentaires_Text($commentaires_Text)
            ->setCom_Rang($com_Rang)
            ->setCom_LineNo($com_LineNo)
            ->setCom_Preparation($com_Preparation)
            ->setCom_Transport($com_Transport)
            ->setCom_Facturation($com_Facturation)
            ->setCom_OrdreFabrication($com_OrdreFabrication)
            ->setCom_ExclureFacture($com_ExclureFacture);
    }
    /**
     * Get Com_Emplacement value
     * @return string
     */
    public function getCom_Emplacement(): string
    {
        return $this->Com_Emplacement;
    }
    /**
     * Set Com_Emplacement value
     * @param string $com_Emplacement
     * @return \StructType\Commentaires
     */
    public function setCom_Emplacement(string $com_Emplacement): self
    {
        // validation for constraint: string
        if (!is_null($com_Emplacement) && !is_string($com_Emplacement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($com_Emplacement, true), gettype($com_Emplacement)), __LINE__);
        }
        $this->Com_Emplacement = $com_Emplacement;
        
        return $this;
    }
    /**
     * Get Com_Text value
     * @return string
     */
    public function getCom_Text(): string
    {
        return $this->Com_Text;
    }
    /**
     * Set Com_Text value
     * @param string $com_Text
     * @return \StructType\Commentaires
     */
    public function setCom_Text(string $com_Text): self
    {
        // validation for constraint: string
        if (!is_null($com_Text) && !is_string($com_Text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($com_Text, true), gettype($com_Text)), __LINE__);
        }
        $this->Com_Text = $com_Text;
        
        return $this;
    }
    /**
     * Get Commentaire_Emplacement value
     * @return string
     */
    public function getCommentaire_Emplacement(): string
    {
        return $this->Commentaire_Emplacement;
    }
    /**
     * Set Commentaire_Emplacement value
     * @param string $commentaire_Emplacement
     * @return \StructType\Commentaires
     */
    public function setCommentaire_Emplacement(string $commentaire_Emplacement): self
    {
        // validation for constraint: string
        if (!is_null($commentaire_Emplacement) && !is_string($commentaire_Emplacement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentaire_Emplacement, true), gettype($commentaire_Emplacement)), __LINE__);
        }
        $this->Commentaire_Emplacement = $commentaire_Emplacement;
        
        return $this;
    }
    /**
     * Get Commentaire_Ligne value
     * @return int
     */
    public function getCommentaire_Ligne(): int
    {
        return $this->Commentaire_Ligne;
    }
    /**
     * Set Commentaire_Ligne value
     * @param int $commentaire_Ligne
     * @return \StructType\Commentaires
     */
    public function setCommentaire_Ligne(int $commentaire_Ligne): self
    {
        // validation for constraint: int
        if (!is_null($commentaire_Ligne) && !(is_int($commentaire_Ligne) || ctype_digit($commentaire_Ligne))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentaire_Ligne, true), gettype($commentaire_Ligne)), __LINE__);
        }
        $this->Commentaire_Ligne = $commentaire_Ligne;
        
        return $this;
    }
    /**
     * Get Commentaire_Texte value
     * @return string
     */
    public function getCommentaire_Texte(): string
    {
        return $this->Commentaire_Texte;
    }
    /**
     * Set Commentaire_Texte value
     * @param string $commentaire_Texte
     * @return \StructType\Commentaires
     */
    public function setCommentaire_Texte(string $commentaire_Texte): self
    {
        // validation for constraint: string
        if (!is_null($commentaire_Texte) && !is_string($commentaire_Texte)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentaire_Texte, true), gettype($commentaire_Texte)), __LINE__);
        }
        $this->Commentaire_Texte = $commentaire_Texte;
        
        return $this;
    }
    /**
     * Get Commentaire_TagPreparation value
     * @return bool
     */
    public function getCommentaire_TagPreparation(): bool
    {
        return $this->Commentaire_TagPreparation;
    }
    /**
     * Set Commentaire_TagPreparation value
     * @param bool $commentaire_TagPreparation
     * @return \StructType\Commentaires
     */
    public function setCommentaire_TagPreparation(bool $commentaire_TagPreparation): self
    {
        // validation for constraint: boolean
        if (!is_null($commentaire_TagPreparation) && !is_bool($commentaire_TagPreparation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commentaire_TagPreparation, true), gettype($commentaire_TagPreparation)), __LINE__);
        }
        $this->Commentaire_TagPreparation = $commentaire_TagPreparation;
        
        return $this;
    }
    /**
     * Get Commentaire_TagTransport value
     * @return bool
     */
    public function getCommentaire_TagTransport(): bool
    {
        return $this->Commentaire_TagTransport;
    }
    /**
     * Set Commentaire_TagTransport value
     * @param bool $commentaire_TagTransport
     * @return \StructType\Commentaires
     */
    public function setCommentaire_TagTransport(bool $commentaire_TagTransport): self
    {
        // validation for constraint: boolean
        if (!is_null($commentaire_TagTransport) && !is_bool($commentaire_TagTransport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commentaire_TagTransport, true), gettype($commentaire_TagTransport)), __LINE__);
        }
        $this->Commentaire_TagTransport = $commentaire_TagTransport;
        
        return $this;
    }
    /**
     * Get Commentaire_TagFacturation value
     * @return bool
     */
    public function getCommentaire_TagFacturation(): bool
    {
        return $this->Commentaire_TagFacturation;
    }
    /**
     * Set Commentaire_TagFacturation value
     * @param bool $commentaire_TagFacturation
     * @return \StructType\Commentaires
     */
    public function setCommentaire_TagFacturation(bool $commentaire_TagFacturation): self
    {
        // validation for constraint: boolean
        if (!is_null($commentaire_TagFacturation) && !is_bool($commentaire_TagFacturation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commentaire_TagFacturation, true), gettype($commentaire_TagFacturation)), __LINE__);
        }
        $this->Commentaire_TagFacturation = $commentaire_TagFacturation;
        
        return $this;
    }
    /**
     * Get Commentaires_Emplacement value
     * @return string
     */
    public function getCommentaires_Emplacement(): string
    {
        return $this->Commentaires_Emplacement;
    }
    /**
     * Set Commentaires_Emplacement value
     * @param string $commentaires_Emplacement
     * @return \StructType\Commentaires
     */
    public function setCommentaires_Emplacement(string $commentaires_Emplacement): self
    {
        // validation for constraint: string
        if (!is_null($commentaires_Emplacement) && !is_string($commentaires_Emplacement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentaires_Emplacement, true), gettype($commentaires_Emplacement)), __LINE__);
        }
        $this->Commentaires_Emplacement = $commentaires_Emplacement;
        
        return $this;
    }
    /**
     * Get Commentaires_Ligne value
     * @return int
     */
    public function getCommentaires_Ligne(): int
    {
        return $this->Commentaires_Ligne;
    }
    /**
     * Set Commentaires_Ligne value
     * @param int $commentaires_Ligne
     * @return \StructType\Commentaires
     */
    public function setCommentaires_Ligne(int $commentaires_Ligne): self
    {
        // validation for constraint: int
        if (!is_null($commentaires_Ligne) && !(is_int($commentaires_Ligne) || ctype_digit($commentaires_Ligne))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentaires_Ligne, true), gettype($commentaires_Ligne)), __LINE__);
        }
        $this->Commentaires_Ligne = $commentaires_Ligne;
        
        return $this;
    }
    /**
     * Get Commentaires_Rang value
     * @return int
     */
    public function getCommentaires_Rang(): int
    {
        return $this->Commentaires_Rang;
    }
    /**
     * Set Commentaires_Rang value
     * @param int $commentaires_Rang
     * @return \StructType\Commentaires
     */
    public function setCommentaires_Rang(int $commentaires_Rang): self
    {
        // validation for constraint: int
        if (!is_null($commentaires_Rang) && !(is_int($commentaires_Rang) || ctype_digit($commentaires_Rang))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentaires_Rang, true), gettype($commentaires_Rang)), __LINE__);
        }
        $this->Commentaires_Rang = $commentaires_Rang;
        
        return $this;
    }
    /**
     * Get Commentaires_Text value
     * @return string
     */
    public function getCommentaires_Text(): string
    {
        return $this->Commentaires_Text;
    }
    /**
     * Set Commentaires_Text value
     * @param string $commentaires_Text
     * @return \StructType\Commentaires
     */
    public function setCommentaires_Text(string $commentaires_Text): self
    {
        // validation for constraint: string
        if (!is_null($commentaires_Text) && !is_string($commentaires_Text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentaires_Text, true), gettype($commentaires_Text)), __LINE__);
        }
        $this->Commentaires_Text = $commentaires_Text;
        
        return $this;
    }
    /**
     * Get Com_Rang value
     * @return int|null
     */
    public function getCom_Rang(): ?int
    {
        return $this->Com_Rang;
    }
    /**
     * Set Com_Rang value
     * @param int $com_Rang
     * @return \StructType\Commentaires
     */
    public function setCom_Rang(?int $com_Rang = 0): self
    {
        // validation for constraint: int
        if (!is_null($com_Rang) && !(is_int($com_Rang) || ctype_digit($com_Rang))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($com_Rang, true), gettype($com_Rang)), __LINE__);
        }
        $this->Com_Rang = $com_Rang;
        
        return $this;
    }
    /**
     * Get Com_LineNo value
     * @return int|null
     */
    public function getCom_LineNo(): ?int
    {
        return $this->Com_LineNo;
    }
    /**
     * Set Com_LineNo value
     * @param int $com_LineNo
     * @return \StructType\Commentaires
     */
    public function setCom_LineNo(?int $com_LineNo = 0): self
    {
        // validation for constraint: int
        if (!is_null($com_LineNo) && !(is_int($com_LineNo) || ctype_digit($com_LineNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($com_LineNo, true), gettype($com_LineNo)), __LINE__);
        }
        $this->Com_LineNo = $com_LineNo;
        
        return $this;
    }
    /**
     * Get Com_Preparation value
     * @return bool|null
     */
    public function getCom_Preparation(): ?bool
    {
        return $this->Com_Preparation;
    }
    /**
     * Set Com_Preparation value
     * @param bool $com_Preparation
     * @return \StructType\Commentaires
     */
    public function setCom_Preparation(?bool $com_Preparation = false): self
    {
        // validation for constraint: boolean
        if (!is_null($com_Preparation) && !is_bool($com_Preparation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($com_Preparation, true), gettype($com_Preparation)), __LINE__);
        }
        $this->Com_Preparation = $com_Preparation;
        
        return $this;
    }
    /**
     * Get Com_Transport value
     * @return bool|null
     */
    public function getCom_Transport(): ?bool
    {
        return $this->Com_Transport;
    }
    /**
     * Set Com_Transport value
     * @param bool $com_Transport
     * @return \StructType\Commentaires
     */
    public function setCom_Transport(?bool $com_Transport = false): self
    {
        // validation for constraint: boolean
        if (!is_null($com_Transport) && !is_bool($com_Transport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($com_Transport, true), gettype($com_Transport)), __LINE__);
        }
        $this->Com_Transport = $com_Transport;
        
        return $this;
    }
    /**
     * Get Com_Facturation value
     * @return bool|null
     */
    public function getCom_Facturation(): ?bool
    {
        return $this->Com_Facturation;
    }
    /**
     * Set Com_Facturation value
     * @param bool $com_Facturation
     * @return \StructType\Commentaires
     */
    public function setCom_Facturation(?bool $com_Facturation = false): self
    {
        // validation for constraint: boolean
        if (!is_null($com_Facturation) && !is_bool($com_Facturation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($com_Facturation, true), gettype($com_Facturation)), __LINE__);
        }
        $this->Com_Facturation = $com_Facturation;
        
        return $this;
    }
    /**
     * Get Com_OrdreFabrication value
     * @return bool|null
     */
    public function getCom_OrdreFabrication(): ?bool
    {
        return $this->Com_OrdreFabrication;
    }
    /**
     * Set Com_OrdreFabrication value
     * @param bool $com_OrdreFabrication
     * @return \StructType\Commentaires
     */
    public function setCom_OrdreFabrication(?bool $com_OrdreFabrication = false): self
    {
        // validation for constraint: boolean
        if (!is_null($com_OrdreFabrication) && !is_bool($com_OrdreFabrication)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($com_OrdreFabrication, true), gettype($com_OrdreFabrication)), __LINE__);
        }
        $this->Com_OrdreFabrication = $com_OrdreFabrication;
        
        return $this;
    }
    /**
     * Get Com_ExclureFacture value
     * @return bool|null
     */
    public function getCom_ExclureFacture(): ?bool
    {
        return $this->Com_ExclureFacture;
    }
    /**
     * Set Com_ExclureFacture value
     * @param bool $com_ExclureFacture
     * @return \StructType\Commentaires
     */
    public function setCom_ExclureFacture(?bool $com_ExclureFacture = false): self
    {
        // validation for constraint: boolean
        if (!is_null($com_ExclureFacture) && !is_bool($com_ExclureFacture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($com_ExclureFacture, true), gettype($com_ExclureFacture)), __LINE__);
        }
        $this->Com_ExclureFacture = $com_ExclureFacture;
        
        return $this;
    }
}
