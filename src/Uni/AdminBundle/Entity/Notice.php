<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notice
 */
class Notice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $notice_title;

    /**
     * @var string
     */
    private $notice_content;

    /**
     * @var boolean
     */
    private $notice_published;

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
    private $notice_photos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $notice_noticecategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notice_photos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notice_noticecategory = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set notice_title
     *
     * @param string $noticeTitle
     * @return Notice
     */
    public function setNoticeTitle($noticeTitle)
    {
        $this->notice_title = $noticeTitle;

        return $this;
    }

    /**
     * Get notice_title
     *
     * @return string 
     */
    public function getNoticeTitle()
    {
        return $this->notice_title;
    }

    /**
     * Set notice_content
     *
     * @param string $noticeContent
     * @return Notice
     */
    public function setNoticeContent($noticeContent)
    {
        $this->notice_content = $noticeContent;

        return $this;
    }

    /**
     * Get notice_content
     *
     * @return string 
     */
    public function getNoticeContent()
    {
        return $this->notice_content;
    }

    /**
     * Set notice_published
     *
     * @param boolean $noticePublished
     * @return Notice
     */
    public function setNoticePublished($noticePublished)
    {
        $this->notice_published = $noticePublished;

        return $this;
    }

    /**
     * Get notice_published
     *
     * @return boolean 
     */
    public function getNoticePublished()
    {
        return $this->notice_published;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Notice
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
     * @return Notice
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
     * @return Notice
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
     * Add notice_photos
     *
     * @param \Uni\AdminBundle\Entity\NoticePhoto $noticePhotos
     * @return Notice
     */
    public function addNoticePhoto(\Uni\AdminBundle\Entity\NoticePhoto $noticePhotos)
    {
        $this->notice_photos[] = $noticePhotos;

        return $this;
    }

    /**
     * Remove notice_photos
     *
     * @param \Uni\AdminBundle\Entity\NoticePhoto $noticePhotos
     */
    public function removeNoticePhoto(\Uni\AdminBundle\Entity\NoticePhoto $noticePhotos)
    {
        $this->notice_photos->removeElement($noticePhotos);
    }

    /**
     * Get notice_photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticePhotos()
    {
        return $this->notice_photos;
    }

    /**
     * Add notice_noticecategory
     *
     * @param \Uni\AdminBundle\Entity\NoticeCategory $noticeNoticecategory
     * @return Notice
     */
    public function addNoticeNoticecategory(\Uni\AdminBundle\Entity\NoticeCategory $noticeNoticecategory)
    {
        $this->notice_noticecategory[] = $noticeNoticecategory;

        return $this;
    }

    /**
     * Remove notice_noticecategory
     *
     * @param \Uni\AdminBundle\Entity\NoticeCategory $noticeNoticecategory
     */
    public function removeNoticeNoticecategory(\Uni\AdminBundle\Entity\NoticeCategory $noticeNoticecategory)
    {
        $this->notice_noticecategory->removeElement($noticeNoticecategory);
    }

    /**
     * Get notice_noticecategory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticeNoticecategory()
    {
        return $this->notice_noticecategory;
    }
}
