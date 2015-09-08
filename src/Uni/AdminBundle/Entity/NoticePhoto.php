<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;

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
    public function upload()
    {
        if (null === $this->getPhotoFile()) {
            return;
        }

        $generator = new SecureRandom();
        $random = $generator->nextBytes(10);
        $prefix = md5($random);

        $this->getPhotoFile()->move(
            $this->getUploadRootDir(),
            $prefix.'_'.$this->getPhotoFile()->getClientOriginalName()
        );

        $this->photo_path = $prefix.'_'.$this->getPhotoFile()->getClientOriginalName();

        $this->photo_file = null;
    }

    public function getAbsolutePath()
    {
        return null === $this->photo_path
            ? null
            : $this->getUploadRootDir().'/'.$this->photo_path;
    }

    public function getWebPath()
    {
        return null === $this->photo_path
            ? 'default'
            : $this->getUploadDir().'/'.$this->photo_path;
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
        return '/uploads/notice';
    }

}