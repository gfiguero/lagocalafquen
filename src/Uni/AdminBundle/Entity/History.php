<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 */
class History
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $history_time;

    /**
     * @var string
     */
    private $history_title;

    /**
     * @var string
     */
    private $history_abstract;

    /**
     * @var string
     */
    private $history_content;

    /**
     * @var integer
     */
    private $history_rank;

    /**
     * @var boolean
     */
    private $history_published;

    /**
     * @var string
     */
    private $history_photo_path;

    /**
     * @var string
     */
    private $history_photo_file;

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
     * Set history_time
     *
     * @param string $historyTime
     * @return History
     */
    public function setHistoryTime($historyTime)
    {
        $this->history_time = $historyTime;

        return $this;
    }

    /**
     * Get history_time
     *
     * @return string 
     */
    public function getHistoryTime()
    {
        return $this->history_time;
    }

    /**
     * Set history_title
     *
     * @param string $historyTitle
     * @return History
     */
    public function setHistoryTitle($historyTitle)
    {
        $this->history_title = $historyTitle;

        return $this;
    }

    /**
     * Get history_title
     *
     * @return string 
     */
    public function getHistoryTitle()
    {
        return $this->history_title;
    }

    /**
     * Set history_abstract
     *
     * @param string $historyAbstract
     * @return History
     */
    public function setHistoryAbstract($historyAbstract)
    {
        $this->history_abstract = $historyAbstract;

        return $this;
    }

    /**
     * Get history_abstract
     *
     * @return string 
     */
    public function getHistoryAbstract()
    {
        return $this->history_abstract;
    }

    /**
     * Set history_content
     *
     * @param string $historyContent
     * @return History
     */
    public function setHistoryContent($historyContent)
    {
        $this->history_content = $historyContent;

        return $this;
    }

    /**
     * Get history_content
     *
     * @return string 
     */
    public function getHistoryContent()
    {
        return $this->history_content;
    }

    /**
     * Set history_rank
     *
     * @param integer $historyRank
     * @return History
     */
    public function setHistoryRank($historyRank)
    {
        $this->history_rank = $historyRank;

        return $this;
    }

    /**
     * Get history_rank
     *
     * @return integer 
     */
    public function getHistoryRank()
    {
        return $this->history_rank;
    }

    /**
     * Set history_published
     *
     * @param boolean $historyPublished
     * @return History
     */
    public function setHistoryPublished($historyPublished)
    {
        $this->history_published = $historyPublished;

        return $this;
    }

    /**
     * Get history_published
     *
     * @return boolean 
     */
    public function getHistoryPublished()
    {
        return $this->history_published;
    }

    /**
     * Set history_photo_path
     *
     * @param string $historyPhotoPath
     * @return History
     */
    public function setHistoryPhotoPath($historyPhotoPath)
    {
        $this->history_photo_path = $historyPhotoPath;

        return $this;
    }

    /**
     * Get history_photo_path
     *
     * @return string 
     */
    public function getHistoryPhotoPath()
    {
        return $this->history_photo_path;
    }

    /**
     * Set history_photo_file
     *
     * @param string $historyPhotoFile
     * @return History
     */
    public function setHistoryPhotoFile($historyPhotoFile)
    {
        $this->history_photo_file = $historyPhotoFile;

        return $this;
    }

    /**
     * Get history_photo_file
     *
     * @return string 
     */
    public function getHistoryPhotoFile()
    {
        return $this->history_photo_file;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return History
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
     * @return History
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
     * @return History
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
}
