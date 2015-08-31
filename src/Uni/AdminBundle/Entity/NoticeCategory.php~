<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NoticeCategory
 */
class NoticeCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $noticecategory_name;

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
    private $noticecategory_notice;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->noticecategory_notice = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set noticecategory_name
     *
     * @param string $noticecategoryName
     * @return NoticeCategory
     */
    public function setNoticecategoryName($noticecategoryName)
    {
        $this->noticecategory_name = $noticecategoryName;

        return $this;
    }

    /**
     * Get noticecategory_name
     *
     * @return string 
     */
    public function getNoticecategoryName()
    {
        return $this->noticecategory_name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return NoticeCategory
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
     * @return NoticeCategory
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
     * @return NoticeCategory
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
     * Add noticecategory_notice
     *
     * @param \Uni\AdminBundle\Entity\Notice $noticecategoryNotice
     * @return NoticeCategory
     */
    public function addNoticecategoryNotice(\Uni\AdminBundle\Entity\Notice $noticecategoryNotice)
    {
        $this->noticecategory_notice[] = $noticecategoryNotice;

        return $this;
    }

    /**
     * Remove noticecategory_notice
     *
     * @param \Uni\AdminBundle\Entity\Notice $noticecategoryNotice
     */
    public function removeNoticecategoryNotice(\Uni\AdminBundle\Entity\Notice $noticecategoryNotice)
    {
        $this->noticecategory_notice->removeElement($noticecategoryNotice);
    }

    /**
     * Get noticecategory_notice
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticecategoryNotice()
    {
        return $this->noticecategory_notice;
    }
}
