<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;

/**
 * ProductPhoto
 */
class ProductPhoto
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
     * @var \Uni\AdminBundle\Entity\Product
     */
    private $photo_product;


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
     * @return ProductPhoto
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
     * @return ProductPhoto
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
     * Set photo_product
     *
     * @param \Uni\AdminBundle\Entity\Product $photoProduct
     * @return ProductPhoto
     */
    public function setPhotoProduct(\Uni\AdminBundle\Entity\Product $photoProduct = null)
    {
        $this->photo_product = $photoProduct;

        return $this;
    }

    /**
     * Get photo_product
     *
     * @return \Uni\AdminBundle\Entity\Product 
     */
    public function getPhotoProduct()
    {
        return $this->photo_product;
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
        return '/uploads/product';
    }

}