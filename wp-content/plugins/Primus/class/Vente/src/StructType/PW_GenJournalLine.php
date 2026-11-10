<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PW_GenJournalLine StructType
 * @subpackage Structs
 */
class PW_GenJournalLine extends AbstractStructBase
{
    /**
     * The JournalTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $JournalTemplate;
    /**
     * The LineNo
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $LineNo;
    /**
     * The AccountType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $AccountType;
    /**
     * The AccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $AccountNo;
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DocumentType;
    /**
     * The DocumentNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DocumentNo;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Description;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Currency;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Amount;
    /**
     * The ExternalDoc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ExternalDoc;
    /**
     * The PostingGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $PostingGroup;
    /**
     * Constructor method for PW_GenJournalLine
     * @uses PW_GenJournalLine::setJournalTemplate()
     * @uses PW_GenJournalLine::setLineNo()
     * @uses PW_GenJournalLine::setAccountType()
     * @uses PW_GenJournalLine::setAccountNo()
     * @uses PW_GenJournalLine::setDocumentType()
     * @uses PW_GenJournalLine::setDocumentNo()
     * @uses PW_GenJournalLine::setDescription()
     * @uses PW_GenJournalLine::setCurrency()
     * @uses PW_GenJournalLine::setAmount()
     * @uses PW_GenJournalLine::setExternalDoc()
     * @uses PW_GenJournalLine::setPostingGroup()
     * @param string $journalTemplate
     * @param int $lineNo
     * @param string $accountType
     * @param string $accountNo
     * @param string $documentType
     * @param string $documentNo
     * @param string $description
     * @param string $currency
     * @param float $amount
     * @param string $externalDoc
     * @param string $postingGroup
     */
    public function __construct(string $journalTemplate, int $lineNo, string $accountType, string $accountNo, string $documentType, string $documentNo, string $description, string $currency, float $amount, string $externalDoc, string $postingGroup)
    {
        $this
            ->setJournalTemplate($journalTemplate)
            ->setLineNo($lineNo)
            ->setAccountType($accountType)
            ->setAccountNo($accountNo)
            ->setDocumentType($documentType)
            ->setDocumentNo($documentNo)
            ->setDescription($description)
            ->setCurrency($currency)
            ->setAmount($amount)
            ->setExternalDoc($externalDoc)
            ->setPostingGroup($postingGroup);
    }
    /**
     * Get JournalTemplate value
     * @return string
     */
    public function getJournalTemplate(): string
    {
        return $this->JournalTemplate;
    }
    /**
     * Set JournalTemplate value
     * @param string $journalTemplate
     * @return \StructType\PW_GenJournalLine
     */
    public function setJournalTemplate(string $journalTemplate): self
    {
        // validation for constraint: string
        if (!is_null($journalTemplate) && !is_string($journalTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journalTemplate, true), gettype($journalTemplate)), __LINE__);
        }
        $this->JournalTemplate = $journalTemplate;
        
        return $this;
    }
    /**
     * Get LineNo value
     * @return int
     */
    public function getLineNo(): int
    {
        return $this->LineNo;
    }
    /**
     * Set LineNo value
     * @param int $lineNo
     * @return \StructType\PW_GenJournalLine
     */
    public function setLineNo(int $lineNo): self
    {
        // validation for constraint: int
        if (!is_null($lineNo) && !(is_int($lineNo) || ctype_digit($lineNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lineNo, true), gettype($lineNo)), __LINE__);
        }
        $this->LineNo = $lineNo;
        
        return $this;
    }
    /**
     * Get AccountType value
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->AccountType;
    }
    /**
     * Set AccountType value
     * @param string $accountType
     * @return \StructType\PW_GenJournalLine
     */
    public function setAccountType(string $accountType): self
    {
        // validation for constraint: string
        if (!is_null($accountType) && !is_string($accountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->AccountType = $accountType;
        
        return $this;
    }
    /**
     * Get AccountNo value
     * @return string
     */
    public function getAccountNo(): string
    {
        return $this->AccountNo;
    }
    /**
     * Set AccountNo value
     * @param string $accountNo
     * @return \StructType\PW_GenJournalLine
     */
    public function setAccountNo(string $accountNo): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->AccountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @param string $documentType
     * @return \StructType\PW_GenJournalLine
     */
    public function setDocumentType(string $documentType): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->DocumentType = $documentType;
        
        return $this;
    }
    /**
     * Get DocumentNo value
     * @return string
     */
    public function getDocumentNo(): string
    {
        return $this->DocumentNo;
    }
    /**
     * Set DocumentNo value
     * @param string $documentNo
     * @return \StructType\PW_GenJournalLine
     */
    public function setDocumentNo(string $documentNo): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->DocumentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\PW_GenJournalLine
     */
    public function setDescription(string $description): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \StructType\PW_GenJournalLine
     */
    public function setCurrency(string $currency): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return float
     */
    public function getAmount(): float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \StructType\PW_GenJournalLine
     */
    public function setAmount(float $amount): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get ExternalDoc value
     * @return string
     */
    public function getExternalDoc(): string
    {
        return $this->ExternalDoc;
    }
    /**
     * Set ExternalDoc value
     * @param string $externalDoc
     * @return \StructType\PW_GenJournalLine
     */
    public function setExternalDoc(string $externalDoc): self
    {
        // validation for constraint: string
        if (!is_null($externalDoc) && !is_string($externalDoc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDoc, true), gettype($externalDoc)), __LINE__);
        }
        $this->ExternalDoc = $externalDoc;
        
        return $this;
    }
    /**
     * Get PostingGroup value
     * @return string
     */
    public function getPostingGroup(): string
    {
        return $this->PostingGroup;
    }
    /**
     * Set PostingGroup value
     * @param string $postingGroup
     * @return \StructType\PW_GenJournalLine
     */
    public function setPostingGroup(string $postingGroup): self
    {
        // validation for constraint: string
        if (!is_null($postingGroup) && !is_string($postingGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postingGroup, true), gettype($postingGroup)), __LINE__);
        }
        $this->PostingGroup = $postingGroup;
        
        return $this;
    }
}
