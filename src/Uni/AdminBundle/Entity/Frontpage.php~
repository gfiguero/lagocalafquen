<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontpage
 */
class Frontpage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $frontpage_title;

    /**
     * @var string
     */
    private $frontpage_subtitle;

    /**
     * @var string
     */
    private $frontpage_email;

    /**
     * @var string
     */
    private $frontpage_phonenumber;

    /**
     * @var string
     */
    private $frontpage_mission;

    /**
     * @var string
     */
    private $frontpage_vision;

    /**
     * @var boolean
     */
    private $frontpage_active;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $deletedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $frontpage_photos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->frontpage_photos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set frontpage_title
     *
     * @param string $frontpageTitle
     * @return Frontpage
     */
    public function setFrontpageTitle($frontpageTitle)
    {
        $this->frontpage_title = $frontpageTitle;

        return $this;
    }

    /**
     * Get frontpage_title
     *
     * @return string 
     */
    public function getFrontpageTitle()
    {
        return $this->frontpage_title;
    }

    /**
     * Set frontpage_subtitle
     *
     * @param string $frontpageSubtitle
     * @return Frontpage
     */
    public function setFrontpageSubtitle($frontpageSubtitle)
    {
        $this->frontpage_subtitle = $frontpageSubtitle;

        return $this;
    }

    /**
     * Get frontpage_subtitle
     *
     * @return string 
     */
    public function getFrontpageSubtitle()
    {
        return $this->frontpage_subtitle;
    }

    /**
     * Set frontpage_email
     *
     * @param string $frontpageEmail
     * @return Frontpage
     */
    public function setFrontpageEmail($frontpageEmail)
    {
        $this->frontpage_email = $frontpageEmail;

        return $this;
    }

    /**
     * Get frontpage_email
     *
     * @return string 
     */
    public function getFrontpageEmail()
    {
        return $this->frontpage_email;
    }

    /**
     * Set frontpage_phonenumber
     *
     * @param string $frontpagePhonenumber
     * @return Frontpage
     */
    public function setFrontpagePhonenumber($frontpagePhonenumber)
    {
        $this->frontpage_phonenumber = $frontpagePhonenumber;

        return $this;
    }

    /**
     * Get frontpage_phonenumber
     *
     * @return string 
     */
    public function getFrontpagePhonenumber()
    {
        return $this->frontpage_phonenumber;
    }

    /**
     * Set frontpage_mission
     *
     * @param string $frontpageMission
     * @return Frontpage
     */
    public function setFrontpageMission($frontpageMission)
    {
        $this->frontpage_mission = $frontpageMission;

        return $this;
    }

    /**
     * Get frontpage_mission
     *
     * @return string 
     */
    public function getFrontpageMission()
    {
        return $this->frontpage_mission;
    }

    /**
     * Set frontpage_vision
     *
     * @param string $frontpageVision
     * @return Frontpage
     */
    public function setFrontpageVision($frontpageVision)
    {
        $this->frontpage_vision = $frontpageVision;

        return $this;
    }

    /**
     * Get frontpage_vision
     *
     * @return string 
     */
    public function getFrontpageVision()
    {
        return $this->frontpage_vision;
    }

    /**
     * Set frontpage_active
     *
     * @param boolean $frontpageActive
     * @return Frontpage
     */
    public function setFrontpageActive($frontpageActive)
    {
        $this->frontpage_active = $frontpageActive;

        return $this;
    }

    /**
     * Get frontpage_active
     *
     * @return boolean 
     */
    public function getFrontpageActive()
    {
        return $this->frontpage_active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Frontpage
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Frontpage
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Frontpage
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Add frontpage_photos
     *
     * @param \Uni\AdminBundle\Entity\FrontpagePhoto $frontpagePhotos
     * @return Frontpage
     */
    public function addFrontpagePhoto(\Uni\AdminBundle\Entity\FrontpagePhoto $frontpagePhotos)
    {
        $this->frontpage_photos[] = $frontpagePhotos;

        return $this;
    }

    /**
     * Remove frontpage_photos
     *
     * @param \Uni\AdminBundle\Entity\FrontpagePhoto $frontpagePhotos
     */
    public function removeFrontpagePhoto(\Uni\AdminBundle\Entity\FrontpagePhoto $frontpagePhotos)
    {
        $this->frontpage_photos->removeElement($frontpagePhotos);
    }

    /**
     * Get frontpage_photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFrontpagePhotos()
    {
        return $this->frontpage_photos;
    }
}
