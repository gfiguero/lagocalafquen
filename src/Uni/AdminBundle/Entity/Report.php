<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;

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
     * @var string
     */
    private $report_photo_path;

    /**
     * @var string
     */
    private $report_photo_file;

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
     * Set report_photo_path
     *
     * @param string $reportPhotoPath
     * @return Member
     */
    public function setReportPhotoPath($reportPhotoPath)
    {
        $this->report_photo_path = $reportPhotoPath;

        return $this;
    }

    /**
     * Get report_photo_path
     *
     * @return string 
     */
    public function getMemberPhotoPath()
    {
        return $this->report_photo_path;
    }

    /**
     * Set report_photo_file
     *
     * @param string $reportPhotoFile
     * @return Member
     */
    public function setReportPhotoFile($reportPhotoFile)
    {
        $this->report_photo_file = $reportPhotoFile;

        return $this;
    }

    /**
     * Get report_photo_file
     *
     * @return string 
     */
    public function getReportPhotoFile()
    {
        return $this->report_photo_file;
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

    public function upload()
    {
        if (null === $this->getReportPhotoFile()) {
            return;
        }

        $generator = new SecureRandom();
        $random = $generator->nextBytes(10);
        $prefix = md5($random);

        $this->getReportPhotoFile()->move(
            $this->getUploadRootDir(),
            $prefix.'_'.$this->getReportPhotoFile()->getClientOriginalName()
        );

        $this->report_photo_path = $prefix.'_'.$this->getReportPhotoFile()->getClientOriginalName();

        $this->report_photo_file = null;
    }

    public function getAbsolutePath()
    {
        return null === $this->report_photo_path
            ? null
            : $this->getUploadRootDir().'/'.$this->report_photo_path;
    }

    public function getWebPath()
    {
        return null === $this->report_photo_path
            ? 'default'
            : $this->getUploadDir().'/'.$this->report_photo_path;
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
        return '/uploads/report';
    }
}
