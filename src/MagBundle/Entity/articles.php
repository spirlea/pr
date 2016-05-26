<?php

namespace MagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * articles
 */
class articles
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $article_type;

    /**
     * @var string
     */
    private $wallper;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return articles
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set article_type
     *
     * @param string $articleType
     * @return articles
     */
    public function setArticleType($articleType)
    {
        $this->article_type = $articleType;

        return $this;
    }

    /**
     * Get article_type
     *
     * @return string 
     */
    public function getArticleType()
    {
        return $this->article_type;
    }

    /**
     * Set wallper
     *
     * @param string $wallper
     * @return articles
     */
    public function setWallper($wallper)
    {
        $this->wallper = $wallper;

        return $this;
    }

    /**
     * Get wallper
     *
     * @return string 
     */
    public function getWallper()
    {
        return $this->wallper;
    }
    /**
     * @var integer
     */
    private $article_id;


    /**
     * Set article_id
     *
     * @param integer $articleId
     * @return articles
     */
    public function setArticleId($articleId)
    {
        $this->article_id = $articleId;

        return $this;
    }

    /**
     * Get article_id
     *
     * @return integer 
     */
    public function getArticleId()
    {
        return $this->article_id;
    }
    /**
     * @var integer
     */
    private $barcode;

    /**
     * @var integer
     */
    private $views;


    /**
     * Set barcode
     *
     * @param integer $barcode
     * @return articles
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return integer 
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return articles
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }
    /**
     * @var string
     */
    private $producer;


    /**
     * Set producer
     *
     * @param string $producer
     * @return articles
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return string 
     */
    public function getProducer()
    {
        return $this->producer;
    }
    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $stock;


    /**
     * Set price
     *
     * @param integer $price
     * @return articles
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return articles
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }
}
