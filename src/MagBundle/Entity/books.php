<?php

namespace MagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * books
 */
class books
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $book;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $year;


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
     * Set book
     *
     * @param string $book
     * @return books
     */
    public function setBook($book)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return string 
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return books
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return books
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set year
     *
     * @param string $year
     * @return books
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * @var string
     */
    private $wallper;


    /**
     * Set wallper
     *
     * @param string $wallper
     * @return books
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
     * @var string
     */
    private $article_type;


    /**
     * Set article_type
     *
     * @param string $articleType
     * @return books
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
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     * @return books
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
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var integer
     */
    private $views;


    /**
     * Set price
     *
     * @param integer $price
     * @return books
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
     * @return books
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

    /**
     * Set views
     *
     * @param integer $views
     * @return books
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
}
