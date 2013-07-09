<?php

namespace eCrowd\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Developer
 */
class Developer
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
    private $NIF;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $contactperson_firstname;

    /**
     * @var string
     */
    private $contactperson_lastname;

    /**
     * @var string
     */
    private $contactperson_telefone_fixed;

    /**
     * @var string
     */
    private $contactperson_telefone_mobile;

    /**
     * @var string
     */
    private $contactperson_mail;

    /**
     * @var string
     */
    private $fiscalcontactperson_firstname;

    /**
     * @var string
     */
    private $fiscalcontactperson_lastname;

    /**
     * @var string
     */
    private $fiscalcontactperson_telefone_fixed;

    /**
     * @var string
     */
    private $fiscalcontactperson_telefone_mobile;

    /**
     * @var string
     */
    private $fiscalcontactperson_mail;

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
    private $logo;

    /**
     * @var string
     */
    private $token;

    /**
     * @var boolean
     */
    private $is_activated;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projects;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Developer
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
     * Set NIF
     *
     * @param string $nIF
     * @return Developer
     */
    public function setNIF($nIF)
    {
        $this->NIF = $nIF;
    
        return $this;
    }

    /**
     * Get NIF
     *
     * @return string 
     */
    public function getNIF()
    {
        return $this->NIF;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Developer
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set contactperson_firstname
     *
     * @param string $contactpersonFirstname
     * @return Developer
     */
    public function setContactpersonFirstname($contactpersonFirstname)
    {
        $this->contactperson_firstname = $contactpersonFirstname;
    
        return $this;
    }

    /**
     * Get contactperson_firstname
     *
     * @return string 
     */
    public function getContactpersonFirstname()
    {
        return $this->contactperson_firstname;
    }

    /**
     * Set contactperson_lastname
     *
     * @param string $contactpersonLastname
     * @return Developer
     */
    public function setContactpersonLastname($contactpersonLastname)
    {
        $this->contactperson_lastname = $contactpersonLastname;
    
        return $this;
    }

    /**
     * Get contactperson_lastname
     *
     * @return string 
     */
    public function getContactpersonLastname()
    {
        return $this->contactperson_lastname;
    }

    /**
     * Set contactperson_telefone_fixed
     *
     * @param string $contactpersonTelefoneFixed
     * @return Developer
     */
    public function setContactpersonTelefoneFixed($contactpersonTelefoneFixed)
    {
        $this->contactperson_telefone_fixed = $contactpersonTelefoneFixed;
    
        return $this;
    }

    /**
     * Get contactperson_telefone_fixed
     *
     * @return string 
     */
    public function getContactpersonTelefoneFixed()
    {
        return $this->contactperson_telefone_fixed;
    }

    /**
     * Set contactperson_telefone_mobile
     *
     * @param string $contactpersonTelefoneMobile
     * @return Developer
     */
    public function setContactpersonTelefoneMobile($contactpersonTelefoneMobile)
    {
        $this->contactperson_telefone_mobile = $contactpersonTelefoneMobile;
    
        return $this;
    }

    /**
     * Get contactperson_telefone_mobile
     *
     * @return string 
     */
    public function getContactpersonTelefoneMobile()
    {
        return $this->contactperson_telefone_mobile;
    }

    /**
     * Set contactperson_mail
     *
     * @param string $contactpersonMail
     * @return Developer
     */
    public function setContactpersonMail($contactpersonMail)
    {
        $this->contactperson_mail = $contactpersonMail;
    
        return $this;
    }

    /**
     * Get contactperson_mail
     *
     * @return string 
     */
    public function getContactpersonMail()
    {
        return $this->contactperson_mail;
    }

    /**
     * Set fiscalcontactperson_firstname
     *
     * @param string $fiscalcontactpersonFirstname
     * @return Developer
     */
    public function setFiscalcontactpersonFirstname($fiscalcontactpersonFirstname)
    {
        $this->fiscalcontactperson_firstname = $fiscalcontactpersonFirstname;
    
        return $this;
    }

    /**
     * Get fiscalcontactperson_firstname
     *
     * @return string 
     */
    public function getFiscalcontactpersonFirstname()
    {
        return $this->fiscalcontactperson_firstname;
    }

    /**
     * Set fiscalcontactperson_lastname
     *
     * @param string $fiscalcontactpersonLastname
     * @return Developer
     */
    public function setFiscalcontactpersonLastname($fiscalcontactpersonLastname)
    {
        $this->fiscalcontactperson_lastname = $fiscalcontactpersonLastname;
    
        return $this;
    }

    /**
     * Get fiscalcontactperson_lastname
     *
     * @return string 
     */
    public function getFiscalcontactpersonLastname()
    {
        return $this->fiscalcontactperson_lastname;
    }

    /**
     * Set fiscalcontactperson_telefone_fixed
     *
     * @param string $fiscalcontactpersonTelefoneFixed
     * @return Developer
     */
    public function setFiscalcontactpersonTelefoneFixed($fiscalcontactpersonTelefoneFixed)
    {
        $this->fiscalcontactperson_telefone_fixed = $fiscalcontactpersonTelefoneFixed;
    
        return $this;
    }

    /**
     * Get fiscalcontactperson_telefone_fixed
     *
     * @return string 
     */
    public function getFiscalcontactpersonTelefoneFixed()
    {
        return $this->fiscalcontactperson_telefone_fixed;
    }

    /**
     * Set fiscalcontactperson_telefone_mobile
     *
     * @param string $fiscalcontactpersonTelefoneMobile
     * @return Developer
     */
    public function setFiscalcontactpersonTelefoneMobile($fiscalcontactpersonTelefoneMobile)
    {
        $this->fiscalcontactperson_telefone_mobile = $fiscalcontactpersonTelefoneMobile;
    
        return $this;
    }

    /**
     * Get fiscalcontactperson_telefone_mobile
     *
     * @return string 
     */
    public function getFiscalcontactpersonTelefoneMobile()
    {
        return $this->fiscalcontactperson_telefone_mobile;
    }

    /**
     * Set fiscalcontactperson_mail
     *
     * @param string $fiscalcontactpersonMail
     * @return Developer
     */
    public function setFiscalcontactpersonMail($fiscalcontactpersonMail)
    {
        $this->fiscalcontactperson_mail = $fiscalcontactpersonMail;
    
        return $this;
    }

    /**
     * Get fiscalcontactperson_mail
     *
     * @return string 
     */
    public function getFiscalcontactpersonMail()
    {
        return $this->fiscalcontactperson_mail;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Developer
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
     * @return Developer
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
     * @return Developer
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
     * @return Developer
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
     * @return Developer
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
     * Set logo
     *
     * @param string $logo
     * @return Developer
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Developer
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
     * Set is_activated
     *
     * @param boolean $isActivated
     * @return Developer
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Developer
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
     * @return Developer
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
     * Add projects
     *
     * @param \eCrowd\MainBundle\Entity\Project $projects
     * @return Developer
     */
    public function addProject(\eCrowd\MainBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;
    
        return $this;
    }

    /**
     * Remove projects
     *
     * @param \eCrowd\MainBundle\Entity\Project $projects
     */
    public function removeProject(\eCrowd\MainBundle\Entity\Project $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }
    
    public function __toString()
  {
    return sprintf('%s (%s)', $this->name, $this->NIF);
  }
}
