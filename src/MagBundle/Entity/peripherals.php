<?php

namespace MagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * peripherals
 */
class peripherals
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
    private $component_type;

    /**
     * @var string
     */
    private $mouse_type;

    /**
     * @var integer
     */
    private $btn_nubmer;

    /**
     * @var string
     */
    private $btn_type;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $resolution;

    /**
     * @var string
     */
    private $keyboard;

    /**
     * @var string
     */
    private $keyboard_type;

    /**
     * @var string
     */
    private $interface;

    /**
     * @var string
     */
    private $connector;

    /**
     * @var string
     */
    private $carcase;

    /**
     * @var string
     */
    private $frecvence_band;

    /**
     * @var string
     */
    private $noise;

    /**
     * @var string
     */
    private $rms_power;

    /**
     * @var string
     */
    private $dimensions;

    /**
     * @var string
     */
    private $producer;

    /**
     * @var string
     */
    private $volum_control;

    /**
     * @var string
     */
    private $cable_length;

    /**
     * @var string
     */
    private $mem_capacity;

    /**
     * @var string
     */
    private $r_speed;

    /**
     * @var string
     */
    private $w_speed;

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
     * @return peripherals
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
     * @return peripherals
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
     * @return peripherals
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
     * Set image1
     *
     * @param string $image1
     * @return peripherals
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
     * @return peripherals
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
     * @return peripherals
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
     * @return peripherals
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
     * @return peripherals
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
     * Set component_type
     *
     * @param string $componentType
     * @return peripherals
     */
    public function setComponentType($componentType)
    {
        $this->component_type = $componentType;

        return $this;
    }

    /**
     * Get component_type
     *
     * @return string 
     */
    public function getComponentType()
    {
        return $this->component_type;
    }

    /**
     * Set mouse_type
     *
     * @param string $mouseType
     * @return peripherals
     */
    public function setMouseType($mouseType)
    {
        $this->mouse_type = $mouseType;

        return $this;
    }

    /**
     * Get mouse_type
     *
     * @return string 
     */
    public function getMouseType()
    {
        return $this->mouse_type;
    }

    /**
     * Set btn_nubmer
     *
     * @param integer $btnNubmer
     * @return peripherals
     */
    public function setBtnNubmer($btnNubmer)
    {
        $this->btn_nubmer = $btnNubmer;

        return $this;
    }

    /**
     * Get btn_nubmer
     *
     * @return integer 
     */
    public function getBtnNubmer()
    {
        return $this->btn_nubmer;
    }

    /**
     * Set btn_type
     *
     * @param string $btnType
     * @return peripherals
     */
    public function setBtnType($btnType)
    {
        $this->btn_type = $btnType;

        return $this;
    }

    /**
     * Get btn_type
     *
     * @return string 
     */
    public function getBtnType()
    {
        return $this->btn_type;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return peripherals
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return peripherals
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set resolution
     *
     * @param string $resolution
     * @return peripherals
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return string 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set keyboard
     *
     * @param string $keyboard
     * @return peripherals
     */
    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;

        return $this;
    }

    /**
     * Get keyboard
     *
     * @return string 
     */
    public function getKeyboard()
    {
        return $this->keyboard;
    }

    /**
     * Set keyboard_type
     *
     * @param string $keyboardType
     * @return peripherals
     */
    public function setKeyboardType($keyboardType)
    {
        $this->keyboard_type = $keyboardType;

        return $this;
    }

    /**
     * Get keyboard_type
     *
     * @return string 
     */
    public function getKeyboardType()
    {
        return $this->keyboard_type;
    }

    /**
     * Set interface
     *
     * @param string $interface
     * @return peripherals
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface
     *
     * @return string 
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set connector
     *
     * @param string $connector
     * @return peripherals
     */
    public function setConnector($connector)
    {
        $this->connector = $connector;

        return $this;
    }

    /**
     * Get connector
     *
     * @return string 
     */
    public function getConnector()
    {
        return $this->connector;
    }

    /**
     * Set carcase
     *
     * @param string $carcase
     * @return peripherals
     */
    public function setCarcase($carcase)
    {
        $this->carcase = $carcase;

        return $this;
    }

    /**
     * Get carcase
     *
     * @return string 
     */
    public function getCarcase()
    {
        return $this->carcase;
    }

    /**
     * Set frecvence_band
     *
     * @param string $frecvenceBand
     * @return peripherals
     */
    public function setFrecvenceBand($frecvenceBand)
    {
        $this->frecvence_band = $frecvenceBand;

        return $this;
    }

    /**
     * Get frecvence_band
     *
     * @return string 
     */
    public function getFrecvenceBand()
    {
        return $this->frecvence_band;
    }

    /**
     * Set noise
     *
     * @param string $noise
     * @return peripherals
     */
    public function setNoise($noise)
    {
        $this->noise = $noise;

        return $this;
    }

    /**
     * Get noise
     *
     * @return string 
     */
    public function getNoise()
    {
        return $this->noise;
    }

    /**
     * Set rms_power
     *
     * @param string $rmsPower
     * @return peripherals
     */
    public function setRmsPower($rmsPower)
    {
        $this->rms_power = $rmsPower;

        return $this;
    }

    /**
     * Get rms_power
     *
     * @return string 
     */
    public function getRmsPower()
    {
        return $this->rms_power;
    }

    /**
     * Set dimensions
     *
     * @param string $dimensions
     * @return peripherals
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * Get dimensions
     *
     * @return string 
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Set producer
     *
     * @param string $producer
     * @return peripherals
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
     * Set volum_control
     *
     * @param string $volumControl
     * @return peripherals
     */
    public function setVolumControl($volumControl)
    {
        $this->volum_control = $volumControl;

        return $this;
    }

    /**
     * Get volum_control
     *
     * @return string 
     */
    public function getVolumControl()
    {
        return $this->volum_control;
    }

    /**
     * Set cable_length
     *
     * @param string $cableLength
     * @return peripherals
     */
    public function setCableLength($cableLength)
    {
        $this->cable_length = $cableLength;

        return $this;
    }

    /**
     * Get cable_length
     *
     * @return string 
     */
    public function getCableLength()
    {
        return $this->cable_length;
    }

    /**
     * Set mem_capacity
     *
     * @param string $memCapacity
     * @return peripherals
     */
    public function setMemCapacity($memCapacity)
    {
        $this->mem_capacity = $memCapacity;

        return $this;
    }

    /**
     * Get mem_capacity
     *
     * @return string 
     */
    public function getMemCapacity()
    {
        return $this->mem_capacity;
    }

    /**
     * Set r_speed
     *
     * @param string $rSpeed
     * @return peripherals
     */
    public function setRSpeed($rSpeed)
    {
        $this->r_speed = $rSpeed;

        return $this;
    }

    /**
     * Get r_speed
     *
     * @return string 
     */
    public function getRSpeed()
    {
        return $this->r_speed;
    }

    /**
     * Set w_speed
     *
     * @param string $wSpeed
     * @return peripherals
     */
    public function setWSpeed($wSpeed)
    {
        $this->w_speed = $wSpeed;

        return $this;
    }

    /**
     * Get w_speed
     *
     * @return string 
     */
    public function getWSpeed()
    {
        return $this->w_speed;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return peripherals
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
     * @return peripherals
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
     * @return peripherals
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
     * @return peripherals
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
    private $weigth;


    /**
     * Set weigth
     *
     * @param string $weigth
     * @return peripherals
     */
    public function setWeigth($weigth)
    {
        $this->weigth = $weigth;

        return $this;
    }

    /**
     * Get weigth
     *
     * @return string 
     */
    public function getWeigth()
    {
        return $this->weigth;
    }
    /**
     * @var integer
     */
    private $btn_number;


    /**
     * Set btn_number
     *
     * @param integer $btnNumber
     * @return peripherals
     */
    public function setBtnNumber($btnNumber)
    {
        $this->btn_number = $btnNumber;

        return $this;
    }

    /**
     * Get btn_number
     *
     * @return integer 
     */
    public function getBtnNumber()
    {
        return $this->btn_number;
    }
}
