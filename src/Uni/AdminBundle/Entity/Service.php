<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;

/**
 * Service
 */
class Service
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $service_title;

    /**
     * @var string
     */
    private $service_content;

    /**
     * @var integer
     */
    private $service_rank;

    /**
     * @var boolean
     */
    private $service_published;

    /**
     * @var string
     */
    private $service_photo_path;

    /**
     * @var string
     */
    private $service_photo_file;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set service_title
     *
     * @param string $serviceTitle
     * @return Service
     */
    public function setServiceTitle($serviceTitle)
    {
        $this->service_title = $serviceTitle;

        return $this;
    }

    /**
     * Get service_title
     *
     * @return string 
     */
    public function getServiceTitle()
    {
        return $this->service_title;
    }

    /**
     * Set service_content
     *
     * @param string $serviceContent
     * @return Service
     */
    public function setServiceContent($serviceContent)
    {
        $this->service_content = $serviceContent;

        return $this;
    }

    /**
     * Get service_content
     *
     * @return string 
     */
    public function getServiceContent()
    {
        return $this->service_content;
    }

    /**
     * Set service_rank
     *
     * @param integer $serviceRank
     * @return Service
     */
    public function setServiceRank($serviceRank)
    {
        $this->service_rank = $serviceRank;

        return $this;
    }

    /**
     * Get service_rank
     *
     * @return integer 
     */
    public function getServiceRank()
    {
        return $this->service_rank;
    }

    /**
     * Set service_published
     *
     * @param boolean $servicePublished
     * @return Service
     */
    public function setServicePublished($servicePublished)
    {
        $this->service_published = $servicePublished;

        return $this;
    }

    /**
     * Get service_published
     *
     * @return boolean 
     */
    public function getServicePublished()
    {
        return $this->service_published;
    }

    /**
     * Set service_photo_path
     *
     * @param string $servicePhotoPath
     * @return Service
     */
    public function setServicePhotoPath($servicePhotoPath)
    {
        $this->service_photo_path = $servicePhotoPath;

        return $this;
    }

    /**
     * Get service_photo_path
     *
     * @return string 
     */
    public function getServicePhotoPath()
    {
        return $this->service_photo_path;
    }

    /**
     * Set service_photo_file
     *
     * @param string $servicePhotoFile
     * @return Service
     */
    public function setServicePhotoFile($servicePhotoFile)
    {
        $this->service_photo_file = $servicePhotoFile;

        return $this;
    }

    /**
     * Get service_photo_file
     *
     * @return string 
     */
    public function getServicePhotoFile()
    {
        return $this->service_photo_file;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Service
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
     * @return Service
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
     * @return Service
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

    public function upload()
    {
        if (null === $this->getServicePhotoFile()) {
            return;
        }

        $generator = new SecureRandom();
        $random = $generator->nextBytes(10);
        $prefix = md5($random);

        $this->getServicePhotoFile()->move(
            $this->getUploadRootDir(),
            $prefix.'_'.$this->getServicePhotoFile()->getClientOriginalName()
        );

        $this->service_photo_path = $prefix.'_'.$this->getServicePhotoFile()->getClientOriginalName();

        $this->service_photo_file = null;
    }

    public function getAbsolutePath()
    {
        return null === $this->service_photo_path
            ? null
            : $this->getUploadRootDir().'/'.$this->service_photo_path;
    }

    public function getWebPath()
    {
        return null === $this->service_photo_path
            ? 'default'
            : $this->getUploadDir().'/'.$this->service_photo_path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return '/uploads/service';
    }
}
