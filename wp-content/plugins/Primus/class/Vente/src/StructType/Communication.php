<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class Communication extends AbstractStructBase
{
    /**
     * The NumSIRET
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumSIRET|null
     */
    protected ?\StructType\NumSIRET $NumSIRET = null;
    /**
     * The ComplementSIREN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ComplementSIREN|null
     */
    protected ?\StructType\ComplementSIREN $ComplementSIREN = null;
    /**
     * The NumSIREN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumSIREN|null
     */
    protected ?\StructType\NumSIREN $NumSIREN = null;
    /**
     * The AdresseEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdresseEmail|null
     */
    protected ?\StructType\AdresseEmail $AdresseEmail = null;
    /**
     * The NumTelephone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumTelephone|null
     */
    protected ?\StructType\NumTelephone $NumTelephone = null;
    /**
     * The NumPortable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumPortable|null
     */
    protected ?\StructType\NumPortable $NumPortable = null;
    /**
     * The TelexNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TelexNo|null
     */
    protected ?\StructType\TelexNo $TelexNo = null;
    /**
     * The HomePage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\HomePage|null
     */
    protected ?\StructType\HomePage $HomePage = null;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Contact|null
     */
    protected ?\StructType\Contact $Contact = null;
    /**
     * The CodeAPE
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CodeAPE|null
     */
    protected ?\StructType\CodeAPE $CodeAPE = null;
    /**
     * The NoADG
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NoADG|null
     */
    protected ?\StructType\NoADG $NoADG = null;
    /**
     * The CustPriceGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CustPriceGroup|null
     */
    protected ?\StructType\CustPriceGroup $CustPriceGroup = null;
    /**
     * The NumCVI
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumCVI|null
     */
    protected ?\StructType\NumCVI $NumCVI = null;
    /**
     * The NumTVA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumTVA|null
     */
    protected ?\StructType\NumTVA $NumTVA = null;
    /**
     * The NumAccise
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumAccise|null
     */
    protected ?\StructType\NumAccise $NumAccise = null;
    /**
     * The AssujettiTVA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AssujettiTVA = null;
    /**
     * The Negoce
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Negoce = null;
    /**
     * The PaymentTermsCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PaymentTermsCode|null
     */
    protected ?\StructType\PaymentTermsCode $PaymentTermsCode = null;
    /**
     * Constructor method for Communication
     * @uses Communication::setNumSIRET()
     * @uses Communication::setComplementSIREN()
     * @uses Communication::setNumSIREN()
     * @uses Communication::setAdresseEmail()
     * @uses Communication::setNumTelephone()
     * @uses Communication::setNumPortable()
     * @uses Communication::setTelexNo()
     * @uses Communication::setHomePage()
     * @uses Communication::setContact()
     * @uses Communication::setCodeAPE()
     * @uses Communication::setNoADG()
     * @uses Communication::setCustPriceGroup()
     * @uses Communication::setNumCVI()
     * @uses Communication::setNumTVA()
     * @uses Communication::setNumAccise()
     * @uses Communication::setAssujettiTVA()
     * @uses Communication::setNegoce()
     * @uses Communication::setPaymentTermsCode()
     * @param \StructType\NumSIRET $numSIRET
     * @param \StructType\ComplementSIREN $complementSIREN
     * @param \StructType\NumSIREN $numSIREN
     * @param \StructType\AdresseEmail $adresseEmail
     * @param \StructType\NumTelephone $numTelephone
     * @param \StructType\NumPortable $numPortable
     * @param \StructType\TelexNo $telexNo
     * @param \StructType\HomePage $homePage
     * @param \StructType\Contact $contact
     * @param \StructType\CodeAPE $codeAPE
     * @param \StructType\NoADG $noADG
     * @param \StructType\CustPriceGroup $custPriceGroup
     * @param \StructType\NumCVI $numCVI
     * @param \StructType\NumTVA $numTVA
     * @param \StructType\NumAccise $numAccise
     * @param string $assujettiTVA
     * @param string $negoce
     * @param \StructType\PaymentTermsCode $paymentTermsCode
     */
    public function __construct(?\StructType\NumSIRET $numSIRET = null, ?\StructType\ComplementSIREN $complementSIREN = null, ?\StructType\NumSIREN $numSIREN = null, ?\StructType\AdresseEmail $adresseEmail = null, ?\StructType\NumTelephone $numTelephone = null, ?\StructType\NumPortable $numPortable = null, ?\StructType\TelexNo $telexNo = null, ?\StructType\HomePage $homePage = null, ?\StructType\Contact $contact = null, ?\StructType\CodeAPE $codeAPE = null, ?\StructType\NoADG $noADG = null, ?\StructType\CustPriceGroup $custPriceGroup = null, ?\StructType\NumCVI $numCVI = null, ?\StructType\NumTVA $numTVA = null, ?\StructType\NumAccise $numAccise = null, ?string $assujettiTVA = null, ?string $negoce = null, ?\StructType\PaymentTermsCode $paymentTermsCode = null)
    {
        $this
            ->setNumSIRET($numSIRET)
            ->setComplementSIREN($complementSIREN)
            ->setNumSIREN($numSIREN)
            ->setAdresseEmail($adresseEmail)
            ->setNumTelephone($numTelephone)
            ->setNumPortable($numPortable)
            ->setTelexNo($telexNo)
            ->setHomePage($homePage)
            ->setContact($contact)
            ->setCodeAPE($codeAPE)
            ->setNoADG($noADG)
            ->setCustPriceGroup($custPriceGroup)
            ->setNumCVI($numCVI)
            ->setNumTVA($numTVA)
            ->setNumAccise($numAccise)
            ->setAssujettiTVA($assujettiTVA)
            ->setNegoce($negoce)
            ->setPaymentTermsCode($paymentTermsCode);
    }
    /**
     * Get NumSIRET value
     * @return \StructType\NumSIRET|null
     */
    public function getNumSIRET(): ?\StructType\NumSIRET
    {
        return $this->NumSIRET;
    }
    /**
     * Set NumSIRET value
     * @param \StructType\NumSIRET $numSIRET
     * @return \StructType\Communication
     */
    public function setNumSIRET(?\StructType\NumSIRET $numSIRET = null): self
    {
        $this->NumSIRET = $numSIRET;
        
        return $this;
    }
    /**
     * Get ComplementSIREN value
     * @return \StructType\ComplementSIREN|null
     */
    public function getComplementSIREN(): ?\StructType\ComplementSIREN
    {
        return $this->ComplementSIREN;
    }
    /**
     * Set ComplementSIREN value
     * @param \StructType\ComplementSIREN $complementSIREN
     * @return \StructType\Communication
     */
    public function setComplementSIREN(?\StructType\ComplementSIREN $complementSIREN = null): self
    {
        $this->ComplementSIREN = $complementSIREN;
        
        return $this;
    }
    /**
     * Get NumSIREN value
     * @return \StructType\NumSIREN|null
     */
    public function getNumSIREN(): ?\StructType\NumSIREN
    {
        return $this->NumSIREN;
    }
    /**
     * Set NumSIREN value
     * @param \StructType\NumSIREN $numSIREN
     * @return \StructType\Communication
     */
    public function setNumSIREN(?\StructType\NumSIREN $numSIREN = null): self
    {
        $this->NumSIREN = $numSIREN;
        
        return $this;
    }
    /**
     * Get AdresseEmail value
     * @return \StructType\AdresseEmail|null
     */
    public function getAdresseEmail(): ?\StructType\AdresseEmail
    {
        return $this->AdresseEmail;
    }
    /**
     * Set AdresseEmail value
     * @param \StructType\AdresseEmail $adresseEmail
     * @return \StructType\Communication
     */
    public function setAdresseEmail(?\StructType\AdresseEmail $adresseEmail = null): self
    {
        $this->AdresseEmail = $adresseEmail;
        
        return $this;
    }
    /**
     * Get NumTelephone value
     * @return \StructType\NumTelephone|null
     */
    public function getNumTelephone(): ?\StructType\NumTelephone
    {
        return $this->NumTelephone;
    }
    /**
     * Set NumTelephone value
     * @param \StructType\NumTelephone $numTelephone
     * @return \StructType\Communication
     */
    public function setNumTelephone(?\StructType\NumTelephone $numTelephone = null): self
    {
        $this->NumTelephone = $numTelephone;
        
        return $this;
    }
    /**
     * Get NumPortable value
     * @return \StructType\NumPortable|null
     */
    public function getNumPortable(): ?\StructType\NumPortable
    {
        return $this->NumPortable;
    }
    /**
     * Set NumPortable value
     * @param \StructType\NumPortable $numPortable
     * @return \StructType\Communication
     */
    public function setNumPortable(?\StructType\NumPortable $numPortable = null): self
    {
        $this->NumPortable = $numPortable;
        
        return $this;
    }
    /**
     * Get TelexNo value
     * @return \StructType\TelexNo|null
     */
    public function getTelexNo(): ?\StructType\TelexNo
    {
        return $this->TelexNo;
    }
    /**
     * Set TelexNo value
     * @param \StructType\TelexNo $telexNo
     * @return \StructType\Communication
     */
    public function setTelexNo(?\StructType\TelexNo $telexNo = null): self
    {
        $this->TelexNo = $telexNo;
        
        return $this;
    }
    /**
     * Get HomePage value
     * @return \StructType\HomePage|null
     */
    public function getHomePage(): ?\StructType\HomePage
    {
        return $this->HomePage;
    }
    /**
     * Set HomePage value
     * @param \StructType\HomePage $homePage
     * @return \StructType\Communication
     */
    public function setHomePage(?\StructType\HomePage $homePage = null): self
    {
        $this->HomePage = $homePage;
        
        return $this;
    }
    /**
     * Get Contact value
     * @return \StructType\Contact|null
     */
    public function getContact(): ?\StructType\Contact
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \StructType\Contact $contact
     * @return \StructType\Communication
     */
    public function setContact(?\StructType\Contact $contact = null): self
    {
        $this->Contact = $contact;
        
        return $this;
    }
    /**
     * Get CodeAPE value
     * @return \StructType\CodeAPE|null
     */
    public function getCodeAPE(): ?\StructType\CodeAPE
    {
        return $this->CodeAPE;
    }
    /**
     * Set CodeAPE value
     * @param \StructType\CodeAPE $codeAPE
     * @return \StructType\Communication
     */
    public function setCodeAPE(?\StructType\CodeAPE $codeAPE = null): self
    {
        $this->CodeAPE = $codeAPE;
        
        return $this;
    }
    /**
     * Get NoADG value
     * @return \StructType\NoADG|null
     */
    public function getNoADG(): ?\StructType\NoADG
    {
        return $this->NoADG;
    }
    /**
     * Set NoADG value
     * @param \StructType\NoADG $noADG
     * @return \StructType\Communication
     */
    public function setNoADG(?\StructType\NoADG $noADG = null): self
    {
        $this->NoADG = $noADG;
        
        return $this;
    }
    /**
     * Get CustPriceGroup value
     * @return \StructType\CustPriceGroup|null
     */
    public function getCustPriceGroup(): ?\StructType\CustPriceGroup
    {
        return $this->CustPriceGroup;
    }
    /**
     * Set CustPriceGroup value
     * @param \StructType\CustPriceGroup $custPriceGroup
     * @return \StructType\Communication
     */
    public function setCustPriceGroup(?\StructType\CustPriceGroup $custPriceGroup = null): self
    {
        $this->CustPriceGroup = $custPriceGroup;
        
        return $this;
    }
    /**
     * Get NumCVI value
     * @return \StructType\NumCVI|null
     */
    public function getNumCVI(): ?\StructType\NumCVI
    {
        return $this->NumCVI;
    }
    /**
     * Set NumCVI value
     * @param \StructType\NumCVI $numCVI
     * @return \StructType\Communication
     */
    public function setNumCVI(?\StructType\NumCVI $numCVI = null): self
    {
        $this->NumCVI = $numCVI;
        
        return $this;
    }
    /**
     * Get NumTVA value
     * @return \StructType\NumTVA|null
     */
    public function getNumTVA(): ?\StructType\NumTVA
    {
        return $this->NumTVA;
    }
    /**
     * Set NumTVA value
     * @param \StructType\NumTVA $numTVA
     * @return \StructType\Communication
     */
    public function setNumTVA(?\StructType\NumTVA $numTVA = null): self
    {
        $this->NumTVA = $numTVA;
        
        return $this;
    }
    /**
     * Get NumAccise value
     * @return \StructType\NumAccise|null
     */
    public function getNumAccise(): ?\StructType\NumAccise
    {
        return $this->NumAccise;
    }
    /**
     * Set NumAccise value
     * @param \StructType\NumAccise $numAccise
     * @return \StructType\Communication
     */
    public function setNumAccise(?\StructType\NumAccise $numAccise = null): self
    {
        $this->NumAccise = $numAccise;
        
        return $this;
    }
    /**
     * Get AssujettiTVA value
     * @return string|null
     */
    public function getAssujettiTVA(): ?string
    {
        return $this->AssujettiTVA;
    }
    /**
     * Set AssujettiTVA value
     * @param string $assujettiTVA
     * @return \StructType\Communication
     */
    public function setAssujettiTVA(?string $assujettiTVA = null): self
    {
        // validation for constraint: string
        if (!is_null($assujettiTVA) && !is_string($assujettiTVA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assujettiTVA, true), gettype($assujettiTVA)), __LINE__);
        }
        $this->AssujettiTVA = $assujettiTVA;
        
        return $this;
    }
    /**
     * Get Negoce value
     * @return string|null
     */
    public function getNegoce(): ?string
    {
        return $this->Negoce;
    }
    /**
     * Set Negoce value
     * @param string $negoce
     * @return \StructType\Communication
     */
    public function setNegoce(?string $negoce = null): self
    {
        // validation for constraint: string
        if (!is_null($negoce) && !is_string($negoce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($negoce, true), gettype($negoce)), __LINE__);
        }
        $this->Negoce = $negoce;
        
        return $this;
    }
    /**
     * Get PaymentTermsCode value
     * @return \StructType\PaymentTermsCode|null
     */
    public function getPaymentTermsCode(): ?\StructType\PaymentTermsCode
    {
        return $this->PaymentTermsCode;
    }
    /**
     * Set PaymentTermsCode value
     * @param \StructType\PaymentTermsCode $paymentTermsCode
     * @return \StructType\Communication
     */
    public function setPaymentTermsCode(?\StructType\PaymentTermsCode $paymentTermsCode = null): self
    {
        $this->PaymentTermsCode = $paymentTermsCode;
        
        return $this;
    }
}
