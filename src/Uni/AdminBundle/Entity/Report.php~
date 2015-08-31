<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 */
class Report
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $report_title;

    /**
     * @var string
     */
    private $report_content;

    /**
     * @var boolean
     */
    private $report_published;

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
    private $report_photos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->report_photos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set report_title
     *
     * @param string $reportTitle
     * @return Report
     */
    public function setReportTitle($reportTitle)
    {
        $this->report_title = $reportTitle;

        return $this;
    }

    /**
     * Get report_title
     *
     * @return string 
     */
    public function getReportTitle()
    {
        return $this->report_title;
    }

    /**
     * Set report_content
     *
     * @param string $reportContent
     * @return Report
     */
    public function setReportContent($reportContent)
    {
        $this->report_content = $reportContent;

        return $this;
    }

    /**
     * Get report_content
     *
     * @return string 
     */
    public function getReportContent()
    {
        return $this->report_content;
    }

    /**
     * Set report_published
     *
     * @param boolean $reportPublished
     * @return Report
     */
    public function setReportPublished($reportPublished)
    {
        $this->report_published = $reportPublished;

        return $this;
    }

    /**
     * Get report_published
     *
     * @return boolean 
     */
    public function getReportPublished()
    {
        return $this->report_published;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Report
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
     * @return Report
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
     * @return Report
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
     * Add report_photos
     *
     * @param \Uni\AdminBundle\Entity\ReportPhoto $reportPhotos
     * @return Report
     */
    public function addReportPhoto(\Uni\AdminBundle\Entity\ReportPhoto $reportPhotos)
    {
        $this->report_photos[] = $reportPhotos;

        return $this;
    }

    /**
     * Remove report_photos
     *
     * @param \Uni\AdminBundle\Entity\ReportPhoto $reportPhotos
     */
    public function removeReportPhoto(\Uni\AdminBundle\Entity\ReportPhoto $reportPhotos)
    {
        $this->report_photos->removeElement($reportPhotos);
    }

    /**
     * Get report_photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReportPhotos()
    {
        return $this->report_photos;
    }
}
