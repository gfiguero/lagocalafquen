<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportPhoto
 */
class ReportPhoto
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
     * @var \Uni\AdminBundle\Entity\Report
     */
    private $photo_report;


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
     * @return ReportPhoto
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
     * @return ReportPhoto
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
     * Set photo_report
     *
     * @param \Uni\AdminBundle\Entity\Report $photoReport
     * @return ReportPhoto
     */
    public function setPhotoReport(\Uni\AdminBundle\Entity\Report $photoReport = null)
    {
        $this->photo_report = $photoReport;

        return $this;
    }

    /**
     * Get photo_report
     *
     * @return \Uni\AdminBundle\Entity\Report 
     */
    public function getPhotoReport()
    {
        return $this->photo_report;
    }
}
