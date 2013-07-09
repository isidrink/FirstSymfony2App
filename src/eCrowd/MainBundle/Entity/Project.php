<?php

namespace eCrowd\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
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
    private $longdescription;

    /**
     * @var string
     */
    private $shortdescription;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $power;

    /**
     * @var float
     */
    private $investment;

    /**
     * @var float
     */
    private $mininvestment;

    /**
     * @var float
     */
    private $yield;

    /**
     * @var float
     */
    private $commissioninvestor;

    /**
     * @var float
     */
    private $commissiondeveloper;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $fotos;

    /**
     * @var string
     */
    private $movies;

    /**
     * @var string
     */
    private $token;

    /**
     * @var boolean
     */
    private $is_public;

    /**
     * @var boolean
     */
    private $is_activated;

    /**
     * @var boolean
     */
    private $is_ended;

    /**
     * @var \DateTime
     */
    private $expires_at;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var string
     */
    private $nullable;

    /**
     * @var \eCrowd\MainBundle\Entity\Developer
     */
    private $developers;


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
     * @return Project
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
     * Set longdescription
     *
     * @param string $longdescription
     * @return Project
     */
    public function setLongdescription($longdescription)
    {
        $this->longdescription = $longdescription;
    
        return $this;
    }

    /**
     * Get longdescription
     *
     * @return string 
     */
    public function getLongdescription()
    {
        return $this->longdescription;
    }

    /**
     * Set shortdescription
     *
     * @param string $shortdescription
     * @return Project
     */
    public function setShortdescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;
    
        return $this;
    }

    /**
     * Get shortdescription
     *
     * @return string 
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Project
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set power
     *
     * @param integer $power
     * @return Project
     */
    public function setPower($power)
    {
        $this->power = $power;
    
        return $this;
    }

    /**
     * Get power
     *
     * @return integer 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set investment
     *
     * @param float $investment
     * @return Project
     */
    public function setInvestment($investment)
    {
        $this->investment = $investment;
    
        return $this;
    }

    /**
     * Get investment
     *
     * @return float 
     */
    public function getInvestment()
    {
        return $this->investment;
    }

    /**
     * Set mininvestment
     *
     * @param float $mininvestment
     * @return Project
     */
    public function setMininvestment($mininvestment)
    {
        $this->mininvestment = $mininvestment;
    
        return $this;
    }

    /**
     * Get mininvestment
     *
     * @return float 
     */
    public function getMininvestment()
    {
        return $this->mininvestment;
    }

    /**
     * Set yield
     *
     * @param float $yield
     * @return Project
     */
    public function setYield($yield)
    {
        $this->yield = $yield;
    
        return $this;
    }

    /**
     * Get yield
     *
     * @return float 
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * Set commissioninvestor
     *
     * @param float $commissioninvestor
     * @return Project
     */
    public function setCommissioninvestor($commissioninvestor)
    {
        $this->commissioninvestor = $commissioninvestor;
    
        return $this;
    }

    /**
     * Get commissioninvestor
     *
     * @return float 
     */
    public function getCommissioninvestor()
    {
        return $this->commissioninvestor;
    }

    /**
     * Set commissiondeveloper
     *
     * @param float $commissiondeveloper
     * @return Project
     */
    public function setCommissiondeveloper($commissiondeveloper)
    {
        $this->commissiondeveloper = $commissiondeveloper;
    
        return $this;
    }

    /**
     * Get commissiondeveloper
     *
     * @return float 
     */
    public function getCommissiondeveloper()
    {
        return $this->commissiondeveloper;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Project
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Project
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    
        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Project
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set province
     *
     * @param string $province
     * @return Project
     */
    public function setProvince($province)
    {
        $this->province = $province;
    
        return $this;
    }

    /**
     * Get province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Project
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set fotos
     *
     * @param string $fotos
     * @return Project
     */
    public function setFotos($fotos)
    {
        $this->fotos = $fotos;
    
        return $this;
    }

    /**
     * Get fotos
     *
     * @return string 
     */
    public function getFotos()
    {
        return $this->fotos;
    }

    /**
     * Set movies
     *
     * @param string $movies
     * @return Project
     */
    public function setMovies($movies)
    {
        $this->movies = $movies;
    
        return $this;
    }

    /**
     * Get movies
     *
     * @return string 
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Project
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set is_public
     *
     * @param boolean $isPublic
     * @return Project
     */
    public function setIsPublic($isPublic)
    {
        $this->is_public = $isPublic;
    
        return $this;
    }

    /**
     * Get is_public
     *
     * @return boolean 
     */
    public function getIsPublic()
    {
        return $this->is_public;
    }

    /**
     * Set is_activated
     *
     * @param boolean $isActivated
     * @return Project
     */
    public function setIsActivated($isActivated)
    {
        $this->is_activated = $isActivated;
    
        return $this;
    }

    /**
     * Get is_activated
     *
     * @return boolean 
     */
    public function getIsActivated()
    {
        return $this->is_activated;
    }

    /**
     * Set is_ended
     *
     * @param boolean $isEnded
     * @return Project
     */
    public function setIsEnded($isEnded)
    {
        $this->is_ended = $isEnded;
    
        return $this;
    }

    /**
     * Get is_ended
     *
     * @return boolean 
     */
    public function getIsEnded()
    {
        return $this->is_ended;
    }

    /**
     * Set expires_at
     *
     * @param \DateTime $expiresAt
     * @return Project
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expires_at = $expiresAt;
    
        return $this;
    }

    /**
     * Get expires_at
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Project
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Project
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set nullable
     *
     * @param string $nullable
     * @return Project
     */
    public function setNullable($nullable)
    {
        $this->nullable = $nullable;
    
        return $this;
    }

    /**
     * Get nullable
     *
     * @return string 
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Set developers
     *
     * @param \eCrowd\MainBundle\Entity\Developer $developers
     * @return Project
     */
    public function setDevelopers(\eCrowd\MainBundle\Entity\Developer $developers = null)
    {
        $this->developers = $developers;
    
        return $this;
    }

    /**
     * Get developers
     *
     * @return \eCrowd\MainBundle\Entity\Developer 
     */
    public function getDevelopers()
    {
        return $this->developers;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
        {
            $this->created_at = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
         $this->updated_at = new \DateTime();
    }
    
    public static function getTypes()
    {
        return array('solar-refinance' => 'Solar-refinance', 'solar-autoconsumption' => 'Solar-autoconsumption', 'energy-eficiency' => 'Energy Eficiciency');
    }
 
    public static function getTypeValues()
    {
        return array_keys(self::getTypes());
    }
    /**
     * @var \eCrowd\MainBundle\Entity\Developer
     */
    private $developer;


    /**
     * Set developer
     *
     * @param \eCrowd\MainBundle\Entity\Developer $developer
     * @return Project
     */
    public function setDeveloper(\eCrowd\MainBundle\Entity\Developer $developer = null)
    {
        $this->developer = $developer;
    
        return $this;
    }

    /**
     * Get developer
     *
     * @return \eCrowd\MainBundle\Entity\Developer 
     */
    public function getDeveloper()
    {
        return $this->developer;
    }
    
    public function setTokenValue()
{
  if(!$this->getToken())
  {
    $this->token = sha1($this->getName().rand(11111, 99999));
  }
}
}
