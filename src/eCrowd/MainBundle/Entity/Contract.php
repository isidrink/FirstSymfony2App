<?php

namespace eCrowd\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Contract
{
    private $id;
    private $type;
    private $version;
    private $locale;
    private $is_active;
    private $contracttext;
    private $created_at;
    private $updated_at;

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
     * Set type
     *
     * @param string $type
     * @return Contract
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Contract
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Contract
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
    
        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set contracttext
     *
     * @param string $contracttext
     * @return Contract
     */
    public function setContracttext($contracttext)
    {
        $this->contracttext = $contracttext;
    
        return $this;
    }

    /**
     * Get contracttext
     *
     * @return string 
     */
    public function getContracttext()
    {
        return $this->contracttext;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Contract
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
     * @return Contract
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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->created_at = new \DateTime();
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
        return array('protection_datos' => 'protection_datos', 'general_conditions' => 'general conditions', 'general_contract' => 'general contract');
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return Contract
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    
        return $this;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
