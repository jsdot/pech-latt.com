<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RootWSStockArticle StructType
 * Meta information extracted from the WSDL
 * - mixed: true
 * - type: tns:RootWSStockArticle
 * @subpackage Structs
 */
class RootWSStockArticle extends AbstractStructBase
{
    /**
     * The Article
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Article
     */
    protected \StructType\Article $Article;
    /**
     * Constructor method for RootWSStockArticle
     * @uses RootWSStockArticle::setArticle()
     * @param \StructType\Article $article
     */
    public function __construct(\StructType\Article $article)
    {
        $this
            ->setArticle($article);
    }
    /**
     * Get Article value
     * @return \StructType\Article
     */
    public function getArticle(): \StructType\Article
    {
        return $this->Article;
    }
    /**
     * Set Article value
     * @param \StructType\Article $article
     * @return \StructType\RootWSStockArticle
     */
    public function setArticle(\StructType\Article $article): self
    {
        $this->Article = $article;
        
        return $this;
    }
}
