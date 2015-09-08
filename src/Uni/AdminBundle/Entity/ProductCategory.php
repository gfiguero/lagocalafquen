<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCategory
 */
class ProductCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $productcategory_name;

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
    private $productcategory_product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productcategory_product = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set productcategory_name
     *
     * @param string $ProductcategoryName
     * @return ProductCategory
     */
    public function setProductcategoryName($ProductcategoryName)
    {
        $this->productcategory_name = $ProductcategoryName;

        return $this;
    }

    /**
     * Get productcategory_name
     *
     * @return string 
     */
    public function getProductcategoryName()
    {
        return $this->productcategory_name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProductCategory
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
     * @return ProductCategory
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
     * @return ProductCategory
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
     * Add productcategory_product
     *
     * @param \Uni\AdminBundle\Entity\Product $productcategoryProduct
     * @return ProductCategory
     */
    public function addProductcategoryProduct(\Uni\AdminBundle\Entity\Product $productcategoryProduct)
    {
        $this->productcategory_product[] = $productcategoryProduct;

        return $this;
    }

    /**
     * Remove productcategory_product
     *
     * @param \Uni\AdminBundle\Entity\Product $productcategoryProduct
     */
    public function removeProductcategoryProduct(\Uni\AdminBundle\Entity\Product $productcategoryProduct)
    {
        $this->productcategory_product->removeElement($productcategoryProduct);
    }

    /**
     * Get productcategory_product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductcategoryProduct()
    {
        return $this->productcategory_product;
    }
}
