<?php

namespace MagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * phones
 */
class phones
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
     * @return phones
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
     * @var string
     */
    private $article_type;


    /**
     * Set article_type
     *
     * @param string $articleType
     * @return phones
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
    private $Technology;

    /**
     * @var string
     */
    private $Dimensions;

    /**
     * @var string
     */
    private $Weight;

    /**
     * @var string
     */
    private $Keyboard;

    /**
     * @var string
     */
    private $SIM;

    /**
     * @var string
     */
    private $GPS;

    /**
     * @var string
     */
    private $USB;

    /**
     * @var string
     */
    private $Camera_Primary;

    /**
     * @var string
     */
    private $Camera_Secondary;

    /**
     * @var string
     */
    private $Browser;

    /**
     * @var string
     */
    private $Battery;

    /**
     * @var string
     */
    private $Battery_StandBy;

    /**
     * @var string
     */
    private $Battery_TalkTime;

    /**
     * @var string
     */
    private $Audio_Quality;

    /**
     * @var string
     */
    private $Loudspeaker;

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
     * Set image1
     *
     * @param string $image1
     * @return phones
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
     * @return phones
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
     * @return phones
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
     * @return phones
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
     * @return phones
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
     * Set Technology
     *
     * @param string $technology
     * @return phones
     */
    public function setTechnology($technology)
    {
        $this->Technology = $technology;

        return $this;
    }

    /**
     * Get Technology
     *
     * @return string 
     */
    public function getTechnology()
    {
        return $this->Technology;
    }

    /**
     * Set Dimensions
     *
     * @param string $dimensions
     * @return phones
     */
    public function setDimensions($dimensions)
    {
        $this->Dimensions = $dimensions;

        return $this;
    }

    /**
     * Get Dimensions
     *
     * @return string 
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * Set Weight
     *
     * @param string $weight
     * @return phones
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
     * Set Keyboard
     *
     * @param string $keyboard
     * @return phones
     */
    public function setKeyboard($keyboard)
    {
        $this->Keyboard = $keyboard;

        return $this;
    }

    /**
     * Get Keyboard
     *
     * @return string 
     */
    public function getKeyboard()
    {
        return $this->Keyboard;
    }

    /**
     * Set SIM
     *
     * @param string $sIM
     * @return phones
     */
    public function setSIM($sIM)
    {
        $this->SIM = $sIM;

        return $this;
    }

    /**
     * Get SIM
     *
     * @return string 
     */
    public function getSIM()
    {
        return $this->SIM;
    }

    /**
     * Set GPS
     *
     * @param string $gPS
     * @return phones
     */
    public function setGPS($gPS)
    {
        $this->GPS = $gPS;

        return $this;
    }

    /**
     * Get GPS
     *
     * @return string 
     */
    public function getGPS()
    {
        return $this->GPS;
    }

    /**
     * Set USB
     *
     * @param string $uSB
     * @return phones
     */
    public function setUSB($uSB)
    {
        $this->USB = $uSB;

        return $this;
    }

    /**
     * Get USB
     *
     * @return string 
     */
    public function getUSB()
    {
        return $this->USB;
    }

    /**
     * Set Camera_Primary
     *
     * @param string $cameraPrimary
     * @return phones
     */
    public function setCameraPrimary($cameraPrimary)
    {
        $this->Camera_Primary = $cameraPrimary;

        return $this;
    }

    /**
     * Get Camera_Primary
     *
     * @return string 
     */
    public function getCameraPrimary()
    {
        return $this->Camera_Primary;
    }

    /**
     * Set Camera_Secondary
     *
     * @param string $cameraSecondary
     * @return phones
     */
    public function setCameraSecondary($cameraSecondary)
    {
        $this->Camera_Secondary = $cameraSecondary;

        return $this;
    }

    /**
     * Get Camera_Secondary
     *
     * @return string 
     */
    public function getCameraSecondary()
    {
        return $this->Camera_Secondary;
    }

    /**
     * Set Browser
     *
     * @param string $browser
     * @return phones
     */
    public function setBrowser($browser)
    {
        $this->Browser = $browser;

        return $this;
    }

    /**
     * Get Browser
     *
     * @return string 
     */
    public function getBrowser()
    {
        return $this->Browser;
    }

    /**
     * Set Battery
     *
     * @param string $battery
     * @return phones
     */
    public function setBattery($battery)
    {
        $this->Battery = $battery;

        return $this;
    }

    /**
     * Get Battery
     *
     * @return string 
     */
    public function getBattery()
    {
        return $this->Battery;
    }

    /**
     * Set Battery_StandBy
     *
     * @param string $batteryStandBy
     * @return phones
     */
    public function setBatteryStandBy($batteryStandBy)
    {
        $this->Battery_StandBy = $batteryStandBy;

        return $this;
    }

    /**
     * Get Battery_StandBy
     *
     * @return string 
     */
    public function getBatteryStandBy()
    {
        return $this->Battery_StandBy;
    }

    /**
     * Set Battery_TalkTime
     *
     * @param string $batteryTalkTime
     * @return phones
     */
    public function setBatteryTalkTime($batteryTalkTime)
    {
        $this->Battery_TalkTime = $batteryTalkTime;

        return $this;
    }

    /**
     * Get Battery_TalkTime
     *
     * @return string 
     */
    public function getBatteryTalkTime()
    {
        return $this->Battery_TalkTime;
    }

    /**
     * Set Audio_Quality
     *
     * @param string $audioQuality
     * @return phones
     */
    public function setAudioQuality($audioQuality)
    {
        $this->Audio_Quality = $audioQuality;

        return $this;
    }

    /**
     * Get Audio_Quality
     *
     * @return string 
     */
    public function getAudioQuality()
    {
        return $this->Audio_Quality;
    }

    /**
     * Set Loudspeaker
     *
     * @param string $loudspeaker
     * @return phones
     */
    public function setLoudspeaker($loudspeaker)
    {
        $this->Loudspeaker = $loudspeaker;

        return $this;
    }

    /**
     * Get Loudspeaker
     *
     * @return string 
     */
    public function getLoudspeaker()
    {
        return $this->Loudspeaker;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return phones
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
     * @return phones
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
     * @return phones
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
     * @return phones
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
     * @return phones
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
     * @return phones
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
