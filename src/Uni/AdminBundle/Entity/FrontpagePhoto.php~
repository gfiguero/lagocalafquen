<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrontpagePhoto
 */
class FrontpagePhoto
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
     * @var \Uni\AdminBundle\Entity\Frontpage
     */
    private $photo_frontpage;


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
     * @return FrontpagePhoto
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
     * @return FrontpagePhoto
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
     * Set photo_frontpage
     *
     * @param \Uni\AdminBundle\Entity\Frontpage $photoFrontpage
     * @return FrontpagePhoto
     */
    public function setPhotoFrontpage(\Uni\AdminBundle\Entity\Frontpage $photoFrontpage = null)
    {
        $this->photo_frontpage = $photoFrontpage;

        return $this;
    }

    /**
     * Get photo_frontpage
     *
     * @return \Uni\AdminBundle\Entity\Frontpage 
     */
    public function getPhotoFrontpage()
    {
        return $this->photo_frontpage;
    }
}
