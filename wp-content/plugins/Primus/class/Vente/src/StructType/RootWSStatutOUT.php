<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSStatutOUT StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSStatutOUT
 * @subpackage Structs
 */
class RootWSStatutOUT extends AbstractStructBase
{
    /**
     * The Societe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Societe = null;
    /**
     * The DocumentNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentNo = null;
    /**
     * The CustomerNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerNo = null;
    /**
     * The NoDocExterne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoDocExterne = null;
    /**
     * The Statut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Statut = null;
    /**
     * The NoExpedition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoExpedition = null;
    /**
     * The DateEnlevement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateEnlevement = null;
    /**
     * The DateLivraisonConfirmee
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateLivraisonConfirmee = null;
    /**
     * The DetailStatut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailStatut = null;
    /**
     * The NumeroFacture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NumeroFacture = null;
    /**
     * The DateFacture
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateFacture = null;
    /**
     * Constructor method for RootWSStatutOUT
     * @uses RootWSStatutOUT::setSociete()
     * @uses RootWSStatutOUT::setDocumentNo()
     * @uses RootWSStatutOUT::setCustomerNo()
     * @uses RootWSStatutOUT::setNoDocExterne()
     * @uses RootWSStatutOUT::setStatut()
     * @uses RootWSStatutOUT::setNoExpedition()
     * @uses RootWSStatutOUT::setDateEnlevement()
     * @uses RootWSStatutOUT::setDateLivraisonConfirmee()
     * @uses RootWSStatutOUT::setDetailStatut()
     * @uses RootWSStatutOUT::setNumeroFacture()
     * @uses RootWSStatutOUT::setDateFacture()
     * @param string $societe
     * @param string $documentNo
     * @param string $customerNo
     * @param string $noDocExterne
     * @param string $statut
     * @param string $noExpedition
     * @param string $dateEnlevement
     * @param string $dateLivraisonConfirmee
     * @param string $detailStatut
     * @param string $numeroFacture
     * @param string $dateFacture
     */
    public function __construct(?string $societe = null, ?string $documentNo = null, ?string $customerNo = null, ?string $noDocExterne = null, ?string $statut = null, ?string $noExpedition = null, ?string $dateEnlevement = null, ?string $dateLivraisonConfirmee = null, ?string $detailStatut = null, ?string $numeroFacture = null, ?string $dateFacture = null)
    {
        $this
            ->setSociete($societe)
            ->setDocumentNo($documentNo)
            ->setCustomerNo($customerNo)
            ->setNoDocExterne($noDocExterne)
            ->setStatut($statut)
            ->setNoExpedition($noExpedition)
            ->setDateEnlevement($dateEnlevement)
            ->setDateLivraisonConfirmee($dateLivraisonConfirmee)
            ->setDetailStatut($detailStatut)
            ->setNumeroFacture($numeroFacture)
            ->setDateFacture($dateFacture);
    }
    /**
     * Get Societe value
     * @return string|null
     */
    public function getSociete(): ?string
    {
        return $this->Societe;
    }
    /**
     * Set Societe value
     * @param string $societe
     * @return \StructType\RootWSStatutOUT
     */
    public function setSociete(?string $societe = null): self
    {
        // validation for constraint: string
        if (!is_null($societe) && !is_string($societe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($societe, true), gettype($societe)), __LINE__);
        }
        $this->Societe = $societe;
        
        return $this;
    }
    /**
     * Get DocumentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->DocumentNo;
    }
    /**
     * Set DocumentNo value
     * @param string $documentNo
     * @return \StructType\RootWSStatutOUT
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->DocumentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get CustomerNo value
     * @return string|null
     */
    public function getCustomerNo(): ?string
    {
        return $this->CustomerNo;
    }
    /**
     * Set CustomerNo value
     * @param string $customerNo
     * @return \StructType\RootWSStatutOUT
     */
    public function setCustomerNo(?string $customerNo = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNo) && !is_string($customerNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNo, true), gettype($customerNo)), __LINE__);
        }
        $this->CustomerNo = $customerNo;
        
        return $this;
    }
    /**
     * Get NoDocExterne value
     * @return string|null
     */
    public function getNoDocExterne(): ?string
    {
        return $this->NoDocExterne;
    }
    /**
     * Set NoDocExterne value
     * @param string $noDocExterne
     * @return \StructType\RootWSStatutOUT
     */
    public function setNoDocExterne(?string $noDocExterne = null): self
    {
        // validation for constraint: string
        if (!is_null($noDocExterne) && !is_string($noDocExterne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noDocExterne, true), gettype($noDocExterne)), __LINE__);
        }
        $this->NoDocExterne = $noDocExterne;
        
        return $this;
    }
    /**
     * Get Statut value
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->Statut;
    }
    /**
     * Set Statut value
     * @param string $statut
     * @return \StructType\RootWSStatutOUT
     */
    public function setStatut(?string $statut = null): self
    {
        // validation for constraint: string
        if (!is_null($statut) && !is_string($statut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statut, true), gettype($statut)), __LINE__);
        }
        $this->Statut = $statut;
        
        return $this;
    }
    /**
     * Get NoExpedition value
     * @return string|null
     */
    public function getNoExpedition(): ?string
    {
        return $this->NoExpedition;
    }
    /**
     * Set NoExpedition value
     * @param string $noExpedition
     * @return \StructType\RootWSStatutOUT
     */
    public function setNoExpedition(?string $noExpedition = null): self
    {
        // validation for constraint: string
        if (!is_null($noExpedition) && !is_string($noExpedition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noExpedition, true), gettype($noExpedition)), __LINE__);
        }
        $this->NoExpedition = $noExpedition;
        
        return $this;
    }
    /**
     * Get DateEnlevement value
     * @return string|null
     */
    public function getDateEnlevement(): ?string
    {
        return $this->DateEnlevement;
    }
    /**
     * Set DateEnlevement value
     * @param string $dateEnlevement
     * @return \StructType\RootWSStatutOUT
     */
    public function setDateEnlevement(?string $dateEnlevement = null): self
    {
        // validation for constraint: string
        if (!is_null($dateEnlevement) && !is_string($dateEnlevement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEnlevement, true), gettype($dateEnlevement)), __LINE__);
        }
        $this->DateEnlevement = $dateEnlevement;
        
        return $this;
    }
    /**
     * Get DateLivraisonConfirmee value
     * @return string|null
     */
    public function getDateLivraisonConfirmee(): ?string
    {
        return $this->DateLivraisonConfirmee;
    }
    /**
     * Set DateLivraisonConfirmee value
     * @param string $dateLivraisonConfirmee
     * @return \StructType\RootWSStatutOUT
     */
    public function setDateLivraisonConfirmee(?string $dateLivraisonConfirmee = null): self
    {
        // validation for constraint: string
        if (!is_null($dateLivraisonConfirmee) && !is_string($dateLivraisonConfirmee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateLivraisonConfirmee, true), gettype($dateLivraisonConfirmee)), __LINE__);
        }
        $this->DateLivraisonConfirmee = $dateLivraisonConfirmee;
        
        return $this;
    }
    /**
     * Get DetailStatut value
     * @return string|null
     */
    public function getDetailStatut(): ?string
    {
        return $this->DetailStatut;
    }
    /**
     * Set DetailStatut value
     * @param string $detailStatut
     * @return \StructType\RootWSStatutOUT
     */
    public function setDetailStatut(?string $detailStatut = null): self
    {
        // validation for constraint: string
        if (!is_null($detailStatut) && !is_string($detailStatut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailStatut, true), gettype($detailStatut)), __LINE__);
        }
        $this->DetailStatut = $detailStatut;
        
        return $this;
    }
    /**
     * Get NumeroFacture value
     * @return string|null
     */
    public function getNumeroFacture(): ?string
    {
        return $this->NumeroFacture;
    }
    /**
     * Set NumeroFacture value
     * @param string $numeroFacture
     * @return \StructType\RootWSStatutOUT
     */
    public function setNumeroFacture(?string $numeroFacture = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroFacture) && !is_string($numeroFacture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroFacture, true), gettype($numeroFacture)), __LINE__);
        }
        $this->NumeroFacture = $numeroFacture;
        
        return $this;
    }
    /**
     * Get DateFacture value
     * @return string|null
     */
    public function getDateFacture(): ?string
    {
        return $this->DateFacture;
    }
    /**
     * Set DateFacture value
     * @param string $dateFacture
     * @return \StructType\RootWSStatutOUT
     */
    public function setDateFacture(?string $dateFacture = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFacture) && !is_string($dateFacture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFacture, true), gettype($dateFacture)), __LINE__);
        }
        $this->DateFacture = $dateFacture;
        
        return $this;
    }
}
