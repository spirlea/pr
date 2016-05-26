<?php

namespace MagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * components
 */
class components
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
    private $component_type;

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
    private $mem_capacity;

    /**
     * @var string
     */
    private $mem_type;

    /**
     * @var string
     */
    private $mem_standart;

    /**
     * @var string
     */
    private $voltage;

    /**
     * @var string
     */
    private $producer;

    /**
     * @var string
     */
    private $power;

    /**
     * @var string
     */
    private $dimensions;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $rpm;

    /**
     * @var string
     */
    private $noise;

    /**
     * @var string
     */
    private $data_transfer;

    /**
     * @var string
     */
    private $timing_cas;

    /**
     * @var string
     */
    private $form_factor;

    /**
     * @var string
     */
    private $cpu;

    /**
     * @var string
     */
    private $gpu;

    /**
     * @var string
     */
    private $mag_Frecvence;

    /**
     * @var string
     */
    private $cache_l1;

    /**
     * @var string
     */
    private $cache_l2;

    /**
     * @var string
     */
    private $cache_l3;

    /**
     * @var string
     */
    private $g_processor;

    /**
     * @var string
     */
    private $PFC;

    /**
     * @var string
     */
    private $interface;

    /**
     * @var string
     */
    private $connections;

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
     * @return components
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
     * @return components
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
     * Set component_type
     *
     * @param string $componentType
     * @return components
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
     * Set wallper
     *
     * @param string $wallper
     * @return components
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
     * @return components
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
     * @return components
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
     * @return components
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
     * @return components
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
     * @return components
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
     * Set mem_capacity
     *
     * @param string $memCapacity
     * @return components
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
     * Set mem_type
     *
     * @param string $memType
     * @return components
     */
    public function setMemType($memType)
    {
        $this->mem_type = $memType;

        return $this;
    }

    /**
     * Get mem_type
     *
     * @return string 
     */
    public function getMemType()
    {
        return $this->mem_type;
    }

    /**
     * Set mem_standart
     *
     * @param string $memStandart
     * @return components
     */
    public function setMemStandart($memStandart)
    {
        $this->mem_standart = $memStandart;

        return $this;
    }

    /**
     * Get mem_standart
     *
     * @return string 
     */
    public function getMemStandart()
    {
        return $this->mem_standart;
    }

    /**
     * Set voltage
     *
     * @param string $voltage
     * @return components
     */
    public function setVoltage($voltage)
    {
        $this->voltage = $voltage;

        return $this;
    }

    /**
     * Get voltage
     *
     * @return string 
     */
    public function getVoltage()
    {
        return $this->voltage;
    }

    /**
     * Set producer
     *
     * @param string $producer
     * @return components
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
     * Set power
     *
     * @param string $power
     * @return components
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return string 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set dimensions
     *
     * @param string $dimensions
     * @return components
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
     * Set weight
     *
     * @param string $weight
     * @return components
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
     * Set rpm
     *
     * @param string $rpm
     * @return components
     */
    public function setRpm($rpm)
    {
        $this->rpm = $rpm;

        return $this;
    }

    /**
     * Get rpm
     *
     * @return string 
     */
    public function getRpm()
    {
        return $this->rpm;
    }

    /**
     * Set noise
     *
     * @param string $noise
     * @return components
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
     * Set data_transfer
     *
     * @param string $dataTransfer
     * @return components
     */
    public function setDataTransfer($dataTransfer)
    {
        $this->data_transfer = $dataTransfer;

        return $this;
    }

    /**
     * Get data_transfer
     *
     * @return string 
     */
    public function getDataTransfer()
    {
        return $this->data_transfer;
    }

    /**
     * Set timing_cas
     *
     * @param string $timingCas
     * @return components
     */
    public function setTimingCas($timingCas)
    {
        $this->timing_cas = $timingCas;

        return $this;
    }

    /**
     * Get timing_cas
     *
     * @return string 
     */
    public function getTimingCas()
    {
        return $this->timing_cas;
    }

    /**
     * Set form_factor
     *
     * @param string $formFactor
     * @return components
     */
    public function setFormFactor($formFactor)
    {
        $this->form_factor = $formFactor;

        return $this;
    }

    /**
     * Get form_factor
     *
     * @return string 
     */
    public function getFormFactor()
    {
        return $this->form_factor;
    }

    /**
     * Set cpu
     *
     * @param string $cpu
     * @return components
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get cpu
     *
     * @return string 
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Set gpu
     *
     * @param string $gpu
     * @return components
     */
    public function setGpu($gpu)
    {
        $this->gpu = $gpu;

        return $this;
    }

    /**
     * Get gpu
     *
     * @return string 
     */
    public function getGpu()
    {
        return $this->gpu;
    }

    /**
     * Set mag_Frecvence
     *
     * @param string $magFrecvence
     * @return components
     */
    public function setMagFrecvence($magFrecvence)
    {
        $this->mag_Frecvence = $magFrecvence;

        return $this;
    }

    /**
     * Get mag_Frecvence
     *
     * @return string 
     */
    public function getMagFrecvence()
    {
        return $this->mag_Frecvence;
    }

    /**
     * Set cache_l1
     *
     * @param string $cacheL1
     * @return components
     */
    public function setCacheL1($cacheL1)
    {
        $this->cache_l1 = $cacheL1;

        return $this;
    }

    /**
     * Get cache_l1
     *
     * @return string 
     */
    public function getCacheL1()
    {
        return $this->cache_l1;
    }

    /**
     * Set cache_l2
     *
     * @param string $cacheL2
     * @return components
     */
    public function setCacheL2($cacheL2)
    {
        $this->cache_l2 = $cacheL2;

        return $this;
    }

    /**
     * Get cache_l2
     *
     * @return string 
     */
    public function getCacheL2()
    {
        return $this->cache_l2;
    }

    /**
     * Set cache_l3
     *
     * @param string $cacheL3
     * @return components
     */
    public function setCacheL3($cacheL3)
    {
        $this->cache_l3 = $cacheL3;

        return $this;
    }

    /**
     * Get cache_l3
     *
     * @return string 
     */
    public function getCacheL3()
    {
        return $this->cache_l3;
    }

    /**
     * Set g_processor
     *
     * @param string $gProcessor
     * @return components
     */
    public function setGProcessor($gProcessor)
    {
        $this->g_processor = $gProcessor;

        return $this;
    }

    /**
     * Get g_processor
     *
     * @return string 
     */
    public function getGProcessor()
    {
        return $this->g_processor;
    }

    /**
     * Set PFC
     *
     * @param string $pFC
     * @return components
     */
    public function setPFC($pFC)
    {
        $this->PFC = $pFC;

        return $this;
    }

    /**
     * Get PFC
     *
     * @return string 
     */
    public function getPFC()
    {
        return $this->PFC;
    }

    /**
     * Set interface
     *
     * @param string $interface
     * @return components
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
     * Set connections
     *
     * @param string $connections
     * @return components
     */
    public function setConnections($connections)
    {
        $this->connections = $connections;

        return $this;
    }

    /**
     * Get connections
     *
     * @return string 
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return components
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
     * @return components
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
     * @return components
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
     * @return components
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
     * @return components
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
    private $barcode;


    /**
     * Set barcode
     *
     * @param integer $barcode
     * @return components
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
}
