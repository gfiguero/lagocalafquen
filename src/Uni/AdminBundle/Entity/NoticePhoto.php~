<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NoticePhoto
 */
class NoticePhoto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $photo_path;

    /**
     * @var string
     */
    private $photo_file;

    /**
     * @var \Uni\AdminBundle\Entity\Notice
     */
    private $photo_notice;


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
     * Set photo_path
     *
     * @param string $photoPath
     * @return NoticePhoto
     */
    public function setPhotoPath($photoPath)
    {
        $this->photo_path = $photoPath;

        return $this;
    }

    /**
     * Get photo_path
     *
     * @return string 
     */
    public function getPhotoPath()
    {
        return $this->photo_path;
    }

    /**
     * Set photo_file
     *
     * @param string $photoFile
     * @return NoticePhoto
     */
    public function setPhotoFile($photoFile)
    {
        $this->photo_file = $photoFile;

        return $this;
    }

    /**
     * Get photo_file
     *
     * @return string 
     */
    public function getPhotoFile()
    {
        return $this->photo_file;
    }

    /**
     * Set photo_notice
     *
     * @param \Uni\AdminBundle\Entity\Notice $photoNotice
     * @return NoticePhoto
     */
    public function setPhotoNotice(\Uni\AdminBundle\Entity\Notice $photoNotice = null)
    {
        $this->photo_notice = $photoNotice;

        return $this;
    }

    /**
     * Get photo_notice
     *
     * @return \Uni\AdminBundle\Entity\Notice 
     */
    public function getPhotoNotice()
    {
        return $this->photo_notice;
    }
}
