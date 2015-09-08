<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $product_name;

    /**
     * @var string
     */
    private $product_content;

    /**
     * @var boolean
     */
    private $product_active;

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
    private $product_photos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product_productcategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product_photos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product_productcategory = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set product_name
     *
     * @param string $productName
     * @return Product
     */
    public function setProductName($productName)
    {
        $this->product_name = $productName;

        return $this;
    }

    /**
     * Get product_name
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * Set product_content
     *
     * @param string $productContent
     * @return Product
     */
    public function setProductContent($productContent)
    {
        $this->product_content = $productContent;

        return $this;
    }

    /**
     * Get product_content
     *
     * @return string 
     */
    public function getProductContent()
    {
        return $this->product_content;
    }

    /**
     * Set product_active
     *
     * @param boolean $productActive
     * @return Product
     */
    public function setProductActive($productActive)
    {
        $this->product_active = $productActive;

        return $this;
    }

    /**
     * Get product_active
     *
     * @return boolean 
     */
    public function getProductActive()
    {
        return $this->product_active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * Add product_photos
     *
     * @param \Uni\AdminBundle\Entity\ProductPhoto $productPhotos
     * @return Product
     */
    public function addProductPhoto(\Uni\AdminBundle\Entity\ProductPhoto $productPhotos)
    {
        $this->product_photos[] = $productPhotos;

        return $this;
    }

    /**
     * Remove product_photos
     *
     * @param \Uni\AdminBundle\Entity\ProductPhoto $productPhotos
     */
    public function removeProductPhoto(\Uni\AdminBundle\Entity\ProductPhoto $productPhotos)
    {
        $this->product_photos->removeElement($productPhotos);
    }

    /**
     * Get product_photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductPhotos()
    {
        return $this->product_photos;
    }

    /**
     * Add product_productcategory
     *
     * @param \Uni\AdminBundle\Entity\ProductCategory $productProductCategory
     * @return Product
     */
    public function addProductProductcategory(\Uni\AdminBundle\Entity\ProductCategory $productProductCategory)
    {
        $this->product_productcategory[] = $productProductCategory;

        return $this;
    }

    /**
     * Remove product_productcategory
     *
     * @param \Uni\AdminBundle\Entity\ProductCategory $productProductCategory
     */
    public function removeProductProductcategory(\Uni\AdminBundle\Entity\ProductCategory $productProductCategory)
    {
        $this->product_productcategory->removeElement($productProductCategory);
    }

    /**
     * Get product_productcategory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductProductcategory()
    {
        return $this->product_productcategory;
    }
}
