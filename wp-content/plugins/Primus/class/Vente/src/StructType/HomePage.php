<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HomePage StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class HomePage extends AbstractStructBase
{
    /**
     * The HomePageVide
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $HomePageVide = null;
    /**
     * Constructor method for HomePage
     * @uses HomePage::setHomePageVide()
     * @param string $homePageVide
     */
    public function __construct(?string $homePageVide = null)
    {
        $this
            ->setHomePageVide($homePageVide);
    }
    /**
     * Get HomePageVide value
     * @return string|null
     */
    public function getHomePageVide(): ?string
    {
        return $this->HomePageVide;
    }
    /**
     * Set HomePageVide value
     * @param string $homePageVide
     * @return \StructType\HomePage
     */
    public function setHomePageVide(?string $homePageVide = null): self
    {
        // validation for constraint: string
        if (!is_null($homePageVide) && !is_string($homePageVide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homePageVide, true), gettype($homePageVide)), __LINE__);
        }
        $this->HomePageVide = $homePageVide;
        
        return $this;
    }
}
