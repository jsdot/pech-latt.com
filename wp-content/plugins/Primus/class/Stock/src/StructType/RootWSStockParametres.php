<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSStockParametres StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSStockParametres
 * @subpackage Structs
 */
class RootWSStockParametres extends AbstractStructBase
{
    /**
     * The Stock
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Stock
     */
    protected \StructType\Stock $Stock;
    /**
     * Constructor method for RootWSStockParametres
     * @uses RootWSStockParametres::setStock()
     * @param \StructType\Stock $stock
     */
    public function __construct(\StructType\Stock $stock)
    {
        $this
            ->setStock($stock);
    }
    /**
     * Get Stock value
     * @return \StructType\Stock
     */
    public function getStock(): \StructType\Stock
    {
        return $this->Stock;
    }
    /**
     * Set Stock value
     * @param \StructType\Stock $stock
     * @return \StructType\RootWSStockParametres
     */
    public function setStock(\StructType\Stock $stock): self
    {
        $this->Stock = $stock;
        
        return $this;
    }
}
