<?php

namespace MagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * computers
 */
class computers
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
    private $image1;

    /**
     * @var string
     */
    private $image2;

    /**
     * @var string
     */
    private $image3;

    /**
     * @var string
     */
    private $image4;

    /**
     * @var string
     */
    private $image5;

    /**
     * @var string
     */
    private $OS;

    /**
     * @var string
     */
    private $Carcase;

    /**
     * @var string
     */
    private $Weight;

    /**
     * @var string
     */
    private $Ports;

    /**
     * @var string
     */
    private $Procesor;

    /**
     * @var string
     */
    private $RAM;

    /**
     * @var string
     */
    private $Memory_SSD;

    /**
     * @var string
     */
    private $Memory_HDD;

    /**
     * @var string
     */
    private $Video;

    /**
     * @var string
     */
    private $Game;

    /**
     * @var string
     */
    private $Power_Supply;

    /**
     * @var string
     */
    private $description;

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
     * @return computers
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
     * @return computers
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
     * Set image1
     *
     * @param string $image1
     * @return computers
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string 
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param string $image2
     * @return computers
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string 
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set image3
     *
     * @param string $image3
     * @return computers
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string 
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set image4
     *
     * @param string $image4
     * @return computers
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return string 
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * Set image5
     *
     * @param string $image5
     * @return computers
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;

        return $this;
    }

    /**
     * Get image5
     *
     * @return string 
     */
    public function getImage5()
    {
        return $this->image5;
    }

    /**
     * Set OS
     *
     * @param string $oS
     * @return computers
     */
    public function setOS($oS)
    {
        $this->OS = $oS;

        return $this;
    }

    /**
     * Get OS
     *
     * @return string 
     */
    public function getOS()
    {
        return $this->OS;
    }

    /**
     * Set Carcase
     *
     * @param string $carcase
     * @return computers
     */
    public function setCarcase($carcase)
    {
        $this->Carcase = $carcase;

        return $this;
    }

    /**
     * Get Carcase
     *
     * @return string 
     */
    public function getCarcase()
    {
        return $this->Carcase;
    }

    /**
     * Set Weight
     *
     * @param string $weight
     * @return computers
     */
    public function setWeight($weight)
    {
        $this->Weight = $weight;

        return $this;
    }

    /**
     * Get Weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * Set Ports
     *
     * @param string $ports
     * @return computers
     */
    public function setPorts($ports)
    {
        $this->Ports = $ports;

        return $this;
    }

    /**
     * Get Ports
     *
     * @return string 
     */
    public function getPorts()
    {
        return $this->Ports;
    }

    /**
     * Set Procesor
     *
     * @param string $procesor
     * @return computers
     */
    public function setProcesor($procesor)
    {
        $this->Procesor = $procesor;

        return $this;
    }

    /**
     * Get Procesor
     *
     * @return string 
     */
    public function getProcesor()
    {
        return $this->Procesor;
    }

    /**
     * Set RAM
     *
     * @param string $rAM
     * @return computers
     */
    public function setRAM($rAM)
    {
        $this->RAM = $rAM;

        return $this;
    }

    /**
     * Get RAM
     *
     * @return string 
     */
    public function getRAM()
    {
        return $this->RAM;
    }

    /**
     * Set Memory_SSD
     *
     * @param string $memorySSD
     * @return computers
     */
    public function setMemorySSD($memorySSD)
    {
        $this->Memory_SSD = $memorySSD;

        return $this;
    }

    /**
     * Get Memory_SSD
     *
     * @return string 
     */
    public function getMemorySSD()
    {
        return $this->Memory_SSD;
    }

    /**
     * Set Memory_HDD
     *
     * @param string $memoryHDD
     * @return computers
     */
    public function setMemoryHDD($memoryHDD)
    {
        $this->Memory_HDD = $memoryHDD;

        return $this;
    }

    /**
     * Get Memory_HDD
     *
     * @return string 
     */
    public function getMemoryHDD()
    {
        return $this->Memory_HDD;
    }

    /**
     * Set Video
     *
     * @param string $video
     * @return computers
     */
    public function setVideo($video)
    {
        $this->Video = $video;

        return $this;
    }

    /**
     * Get Video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->Video;
    }

    /**
     * Set Game
     *
     * @param string $game
     * @return computers
     */
    public function setGame($game)
    {
        $this->Game = $game;

        return $this;
    }

    /**
     * Get Game
     *
     * @return string 
     */
    public function getGame()
    {
        return $this->Game;
    }

    /**
     * Set Power_Supply
     *
     * @param string $powerSupply
     * @return computers
     */
    public function setPowerSupply($powerSupply)
    {
        $this->Power_Supply = $powerSupply;

        return $this;
    }

    /**
     * Get Power_Supply
     *
     * @return string 
     */
    public function getPowerSupply()
    {
        return $this->Power_Supply;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return computers
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
     * Set price
     *
     * @param integer $price
     * @return computers
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
     * @return computers
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
     * @return computers
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
    private $wallper;


    /**
     * Set wallper
     *
     * @param string $wallper
     * @return computers
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
    private $Weigth;


    /**
     * Set Weigth
     *
     * @param string $weigth
     * @return computers
     */
    public function setWeigth($weigth)
    {
        $this->Weigth = $weigth;

        return $this;
    }

    /**
     * Get Weigth
     *
     * @return string 
     */
    public function getWeigth()
    {
        return $this->Weigth;
    }
}
