<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;

/**
 * Publication
 */
class Publication
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $publication_title;

    /**
     * @var string
     */
    private $publication_content;

    /**
     * @var integer
     */
    private $publication_rank;

    /**
     * @var boolean
     */
    private $publication_active;

    /**
     * @var string
     */
    private $publication_photo_path;

    /**
     * @var string
     */
    private $publication_photo_file;

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
     * Set publication_title
     *
     * @param string $publicationTitle
     * @return Publication
     */
    public function setPublicationTitle($publicationTitle)
    {
        $this->publication_title = $publicationTitle;

        return $this;
    }

    /**
     * Get publication_title
     *
     * @return string 
     */
    public function getPublicationTitle()
    {
        return $this->publication_title;
    }

    /**
     * Set publication_content
     *
     * @param string $publicationContent
     * @return Publication
     */
    public function setPublicationContent($publicationContent)
    {
        $this->publication_content = $publicationContent;

        return $this;
    }

    /**
     * Get publication_content
     *
     * @return string 
     */
    public function getPublicationContent()
    {
        return $this->publication_content;
    }

    /**
     * Set publication_rank
     *
     * @param integer $publicationRank
     * @return Publication
     */
    public function setPublicationRank($publicationRank)
    {
        $this->publication_rank = $publicationRank;

        return $this;
    }

    /**
     * Get publication_rank
     *
     * @return integer 
     */
    public function getPublicationRank()
    {
        return $this->publication_rank;
    }

    /**
     * Set publication_active
     *
     * @param boolean $publicationActive
     * @return Publication
     */
    public function setPublicationActive($publicationActive)
    {
        $this->publication_active = $publicationActive;

        return $this;
    }

    /**
     * Get publication_active
     *
     * @return boolean 
     */
    public function getPublicationActive()
    {
        return $this->publication_active;
    }

    /**
     * Set publication_photo_path
     *
     * @param string $publicationPhotoPath
     * @return Publication
     */
    public function setPublicationPhotoPath($publicationPhotoPath)
    {
        $this->publication_photo_path = $publicationPhotoPath;

        return $this;
    }

    /**
     * Get publication_photo_path
     *
     * @return string 
     */
    public function getPublicationPhotoPath()
    {
        return $this->publication_photo_path;
    }

    /**
     * Set publication_photo_file
     *
     * @param string $publicationPhotoFile
     * @return Publication
     */
    public function setPublicationPhotoFile($publicationPhotoFile)
    {
        $this->publication_photo_file = $publicationPhotoFile;

        return $this;
    }

    /**
     * Get publication_photo_file
     *
     * @return string 
     */
    public function getPublicationPhotoFile()
    {
        return $this->publication_photo_file;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Publication
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
     * @return Publication
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
     * @return Publication
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
        if (null === $this->getPublicationPhotoFile()) {
            return;
        }

        $generator = new SecureRandom();
        $random = $generator->nextBytes(10);
        $prefix = md5($random);

        $this->getPublicationPhotoFile()->move(
            $this->getUploadRootDir(),
            $prefix.'_'.$this->getPublicationPhotoFile()->getClientOriginalName()
        );

        $this->publication_photo_path = $prefix.'_'.$this->getPublicationPhotoFile()->getClientOriginalName();

        $this->publication_photo_file = null;
    }

    public function getAbsolutePath()
    {
        return null === $this->publication_photo_path
            ? null
            : $this->getUploadRootDir().'/'.$this->publication_photo_path;
    }

    public function getWebPath()
    {
        return null === $this->publication_photo_path
            ? 'default'
            : $this->getUploadDir().'/'.$this->publication_photo_path;
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
        return '/uploads/publication';
    }
}
