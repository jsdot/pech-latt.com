<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Line StructType
 * @subpackage Structs
 */
class Line extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Code = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message = null;
    /**
     * The Message2
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message2 = null;
    /**
     * The Message3
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message3 = null;
    /**
     * The Message4
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message4 = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Tag = null;
    /**
     * The Namespace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Namespace = null;
    /**
     * Constructor method for Line
     * @uses Line::setCode()
     * @uses Line::setMessage()
     * @uses Line::setMessage2()
     * @uses Line::setMessage3()
     * @uses Line::setMessage4()
     * @uses Line::setTag()
     * @uses Line::setNamespace()
     * @param string[] $code
     * @param string[] $message
     * @param string[] $message2
     * @param string[] $message3
     * @param string[] $message4
     * @param string[] $tag
     * @param string[] $namespace
     */
    public function __construct(?array $code = null, ?array $message = null, ?array $message2 = null, ?array $message3 = null, ?array $message4 = null, ?array $tag = null, ?array $namespace = null)
    {
        $this
            ->setCode($code)
            ->setMessage($message)
            ->setMessage2($message2)
            ->setMessage3($message3)
            ->setMessage4($message4)
            ->setTag($tag)
            ->setNamespace($namespace);
    }
    /**
     * Get Code value
     * @return string[]
     */
    public function getCode(): ?array
    {
        return $this->Code;
    }
    /**
     * This method is responsible for validating the values passed to the setCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodeForArrayConstraintsFromSetCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineCodeItem) {
            // validation for constraint: itemType
            if (!is_string($lineCodeItem)) {
                $invalidValues[] = is_object($lineCodeItem) ? get_class($lineCodeItem) : sprintf('%s(%s)', gettype($lineCodeItem), var_export($lineCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Code property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Code value
     * @throws InvalidArgumentException
     * @param string[] $code
     * @return \StructType\Line
     */
    public function setCode(?array $code = null): self
    {
        // validation for constraint: array
        if ('' !== ($codeArrayErrorMessage = self::validateCodeForArrayConstraintsFromSetCode($code))) {
            throw new InvalidArgumentException($codeArrayErrorMessage, __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Add item to Code value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Code property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Code[] = $item;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string[]
     */
    public function getMessage(): ?array
    {
        return $this->Message;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageForArrayConstraintsFromSetMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessageItem) {
            // validation for constraint: itemType
            if (!is_string($lineMessageItem)) {
                $invalidValues[] = is_object($lineMessageItem) ? get_class($lineMessageItem) : sprintf('%s(%s)', gettype($lineMessageItem), var_export($lineMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message value
     * @throws InvalidArgumentException
     * @param string[] $message
     * @return \StructType\Line
     */
    public function setMessage(?array $message = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageArrayErrorMessage = self::validateMessageForArrayConstraintsFromSetMessage($message))) {
            throw new InvalidArgumentException($messageArrayErrorMessage, __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Add item to Message value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message[] = $item;
        
        return $this;
    }
    /**
     * Get Message2 value
     * @return string[]
     */
    public function getMessage2(): ?array
    {
        return $this->Message2;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage2 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage2 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessage2ForArrayConstraintsFromSetMessage2(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessage2Item) {
            // validation for constraint: itemType
            if (!is_string($lineMessage2Item)) {
                $invalidValues[] = is_object($lineMessage2Item) ? get_class($lineMessage2Item) : sprintf('%s(%s)', gettype($lineMessage2Item), var_export($lineMessage2Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message2 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message2 value
     * @throws InvalidArgumentException
     * @param string[] $message2
     * @return \StructType\Line
     */
    public function setMessage2(?array $message2 = null): self
    {
        // validation for constraint: array
        if ('' !== ($message2ArrayErrorMessage = self::validateMessage2ForArrayConstraintsFromSetMessage2($message2))) {
            throw new InvalidArgumentException($message2ArrayErrorMessage, __LINE__);
        }
        $this->Message2 = $message2;
        
        return $this;
    }
    /**
     * Add item to Message2 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage2(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message2 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message2[] = $item;
        
        return $this;
    }
    /**
     * Get Message3 value
     * @return string[]
     */
    public function getMessage3(): ?array
    {
        return $this->Message3;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage3 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage3 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessage3ForArrayConstraintsFromSetMessage3(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessage3Item) {
            // validation for constraint: itemType
            if (!is_string($lineMessage3Item)) {
                $invalidValues[] = is_object($lineMessage3Item) ? get_class($lineMessage3Item) : sprintf('%s(%s)', gettype($lineMessage3Item), var_export($lineMessage3Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message3 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message3 value
     * @throws InvalidArgumentException
     * @param string[] $message3
     * @return \StructType\Line
     */
    public function setMessage3(?array $message3 = null): self
    {
        // validation for constraint: array
        if ('' !== ($message3ArrayErrorMessage = self::validateMessage3ForArrayConstraintsFromSetMessage3($message3))) {
            throw new InvalidArgumentException($message3ArrayErrorMessage, __LINE__);
        }
        $this->Message3 = $message3;
        
        return $this;
    }
    /**
     * Add item to Message3 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage3(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message3 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message3[] = $item;
        
        return $this;
    }
    /**
     * Get Message4 value
     * @return string[]
     */
    public function getMessage4(): ?array
    {
        return $this->Message4;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage4 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage4 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessage4ForArrayConstraintsFromSetMessage4(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineMessage4Item) {
            // validation for constraint: itemType
            if (!is_string($lineMessage4Item)) {
                $invalidValues[] = is_object($lineMessage4Item) ? get_class($lineMessage4Item) : sprintf('%s(%s)', gettype($lineMessage4Item), var_export($lineMessage4Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message4 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message4 value
     * @throws InvalidArgumentException
     * @param string[] $message4
     * @return \StructType\Line
     */
    public function setMessage4(?array $message4 = null): self
    {
        // validation for constraint: array
        if ('' !== ($message4ArrayErrorMessage = self::validateMessage4ForArrayConstraintsFromSetMessage4($message4))) {
            throw new InvalidArgumentException($message4ArrayErrorMessage, __LINE__);
        }
        $this->Message4 = $message4;
        
        return $this;
    }
    /**
     * Add item to Message4 value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToMessage4(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message4 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message4[] = $item;
        
        return $this;
    }
    /**
     * Get Tag value
     * @return string[]
     */
    public function getTag(): ?array
    {
        return $this->Tag;
    }
    /**
     * This method is responsible for validating the values passed to the setTag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTag method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTagForArrayConstraintsFromSetTag(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineTagItem) {
            // validation for constraint: itemType
            if (!is_string($lineTagItem)) {
                $invalidValues[] = is_object($lineTagItem) ? get_class($lineTagItem) : sprintf('%s(%s)', gettype($lineTagItem), var_export($lineTagItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tag property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tag value
     * @throws InvalidArgumentException
     * @param string[] $tag
     * @return \StructType\Line
     */
    public function setTag(?array $tag = null): self
    {
        // validation for constraint: array
        if ('' !== ($tagArrayErrorMessage = self::validateTagForArrayConstraintsFromSetTag($tag))) {
            throw new InvalidArgumentException($tagArrayErrorMessage, __LINE__);
        }
        $this->Tag = $tag;
        
        return $this;
    }
    /**
     * Add item to Tag value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToTag(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Tag property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Tag[] = $item;
        
        return $this;
    }
    /**
     * Get Namespace value
     * @return string[]
     */
    public function getNamespace(): ?array
    {
        return $this->Namespace;
    }
    /**
     * This method is responsible for validating the values passed to the setNamespace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNamespace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNamespaceForArrayConstraintsFromSetNamespace(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lineNamespaceItem) {
            // validation for constraint: itemType
            if (!is_string($lineNamespaceItem)) {
                $invalidValues[] = is_object($lineNamespaceItem) ? get_class($lineNamespaceItem) : sprintf('%s(%s)', gettype($lineNamespaceItem), var_export($lineNamespaceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Namespace property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Namespace value
     * @throws InvalidArgumentException
     * @param string[] $namespace
     * @return \StructType\Line
     */
    public function setNamespace(?array $namespace = null): self
    {
        // validation for constraint: array
        if ('' !== ($namespaceArrayErrorMessage = self::validateNamespaceForArrayConstraintsFromSetNamespace($namespace))) {
            throw new InvalidArgumentException($namespaceArrayErrorMessage, __LINE__);
        }
        $this->Namespace = $namespace;
        
        return $this;
    }
    /**
     * Add item to Namespace value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\Line
     */
    public function addToNamespace(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Namespace property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Namespace[] = $item;
        
        return $this;
    }
}
