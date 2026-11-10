<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSVenteClient StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSVenteClient
 * @subpackage Structs
 */
class RootWSVenteClient extends AbstractStructBase
{
    /**
     * The Client
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Client[]
     */
    public array $Client;
    /**
     * Constructor method for RootWSVenteClient
     * @uses RootWSVenteClient::setClient()
     * @param \StructType\Client[] $client
     */
    public function __construct(array $client = array())
    {
        $this
            ->setClient($client);
    }
    /**
     * Get Client value
     * @return \StructType\Client[]
     */
    public function getClient(): array
    {
        return $this->Client;
    }
    /**
     * This method is responsible for validating the values passed to the setClient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClient method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClientForArrayConstraintsFromSetClient(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rootWSVenteClientClientItem) {
            // validation for constraint: itemType
            if (!$rootWSVenteClientClientItem instanceof \StructType\Client) {
                $invalidValues[] = is_object($rootWSVenteClientClientItem) ? get_class($rootWSVenteClientClientItem) : sprintf('%s(%s)', gettype($rootWSVenteClientClientItem), var_export($rootWSVenteClientClientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Client property can only contain items of type \StructType\Client, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Client value
     * @throws InvalidArgumentException
     * @param \StructType\Client[] $client
     * @return \StructType\RootWSVenteClient
     */
    public function setClient(array $client): self
    {
        // validation for constraint: array
        if ('' !== ($clientArrayErrorMessage = self::validateClientForArrayConstraintsFromSetClient($client))) {
            throw new InvalidArgumentException($clientArrayErrorMessage, __LINE__);
        }
        $this->Client = $client;
        
        return $this;
    }
    /**
     * Add item to Client value
     * @throws InvalidArgumentException
     * @param \StructType\Client $item
     * @return \StructType\RootWSVenteClient
     */
    public function addToClient(\StructType\Client $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Client) {
            throw new InvalidArgumentException(sprintf('The Client property can only contain items of type \StructType\Client, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Client[] = $item;
        
        return $this;
    }
}
