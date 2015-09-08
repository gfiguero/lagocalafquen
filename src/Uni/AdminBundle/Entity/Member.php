<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;

/**
 * Member
 */
class Member
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $member_firstname;

    /**
     * @var string
     */
    private $member_lastname;

    /**
     * @var string
     */
    private $member_email;

    /**
     * @var string
     */
    private $member_phonenumber;

    /**
     * @var \DateTime
     */
    private $member_birthdate;

    /**
     * @var \DateTime
     */
    private $member_admissiondate;

    /**
     * @var boolean
     */
    private $member_active;

    /**
     * @var string
     */
    private $member_photo_path;

    /**
     * @var string
     */
    private $member_photo_file;

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
     * @var \Uni\AdminBundle\Entity\Role
     */
    private $member_role;


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
     * Set member_firstname
     *
     * @param string $memberFirstname
     * @return Member
     */
    public function setMemberFirstname($memberFirstname)
    {
        $this->member_firstname = $memberFirstname;

        return $this;
    }

    /**
     * Get member_firstname
     *
     * @return string 
     */
    public function getMemberFirstname()
    {
        return $this->member_firstname;
    }

    /**
     * Set member_lastname
     *
     * @param string $memberLastname
     * @return Member
     */
    public function setMemberLastname($memberLastname)
    {
        $this->member_lastname = $memberLastname;

        return $this;
    }

    /**
     * Get member_lastname
     *
     * @return string 
     */
    public function getMemberLastname()
    {
        return $this->member_lastname;
    }

    /**
     * Set member_email
     *
     * @param string $memberEmail
     * @return Member
     */
    public function setMemberEmail($memberEmail)
    {
        $this->member_email = $memberEmail;

        return $this;
    }

    /**
     * Get member_email
     *
     * @return string 
     */
    public function getMemberEmail()
    {
        return $this->member_email;
    }

    /**
     * Set member_phonenumber
     *
     * @param string $memberPhonenumber
     * @return Member
     */
    public function setMemberPhonenumber($memberPhonenumber)
    {
        $this->member_phonenumber = $memberPhonenumber;

        return $this;
    }

    /**
     * Get member_phonenumber
     *
     * @return string 
     */
    public function getMemberPhonenumber()
    {
        return $this->member_phonenumber;
    }

    /**
     * Set member_birthdate
     *
     * @param \DateTime $memberBirthdate
     * @return Member
     */
    public function setMemberBirthdate($memberBirthdate)
    {
        $this->member_birthdate = $memberBirthdate;

        return $this;
    }

    /**
     * Get member_birthdate
     *
     * @return \DateTime 
     */
    public function getMemberBirthdate()
    {
        return $this->member_birthdate;
    }

    /**
     * Set member_admissiondate
     *
     * @param \DateTime $memberAdmissiondate
     * @return Member
     */
    public function setMemberAdmissiondate($memberAdmissiondate)
    {
        $this->member_admissiondate = $memberAdmissiondate;

        return $this;
    }

    /**
     * Get member_admissiondate
     *
     * @return \DateTime 
     */
    public function getMemberAdmissiondate()
    {
        return $this->member_admissiondate;
    }

    /**
     * Set member_active
     *
     * @param boolean $memberActive
     * @return Member
     */
    public function setMemberActive($memberActive)
    {
        $this->member_active = $memberActive;

        return $this;
    }

    /**
     * Get member_active
     *
     * @return boolean 
     */
    public function getMemberActive()
    {
        return $this->member_active;
    }

    /**
     * Set member_photo_path
     *
     * @param string $memberPhotoPath
     * @return Member
     */
    public function setMemberPhotoPath($memberPhotoPath)
    {
        $this->member_photo_path = $memberPhotoPath;

        return $this;
    }

    /**
     * Get member_photo_path
     *
     * @return string 
     */
    public function getMemberPhotoPath()
    {
        return $this->member_photo_path;
    }

    /**
     * Set member_photo_file
     *
     * @param string $memberPhotoFile
     * @return Member
     */
    public function setMemberPhotoFile($memberPhotoFile)
    {
        $this->member_photo_file = $memberPhotoFile;

        return $this;
    }

    /**
     * Get member_photo_file
     *
     * @return string 
     */
    public function getMemberPhotoFile()
    {
        return $this->member_photo_file;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Member
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
     * @return Member
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
     * @return Member
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
     * Set member_role
     *
     * @param \Uni\AdminBundle\Entity\Role $memberRole
     * @return Member
     */
    public function setMemberRole(\Uni\AdminBundle\Entity\Role $memberRole = null)
    {
        $this->member_role = $memberRole;

        return $this;
    }

    /**
     * Get member_role
     *
     * @return \Uni\AdminBundle\Entity\Role 
     */
    public function getMemberRole()
    {
        return $this->member_role;
    }

    public function upload()
    {
        if (null === $this->getMemberPhotoFile()) {
            return;
        }

        $generator = new SecureRandom();
        $random = $generator->nextBytes(10);
        $prefix = md5($random);

        $this->getMemberPhotoFile()->move(
            $this->getUploadRootDir(),
            $prefix.'_'.$this->getMemberPhotoFile()->getClientOriginalName()
        );

        $this->member_photo_path = $prefix.'_'.$this->getMemberPhotoFile()->getClientOriginalName();

        $this->member_photo_file = null;
    }

    public function getAbsolutePath()
    {
        return null === $this->member_photo_path
            ? null
            : $this->getUploadRootDir().'/'.$this->member_photo_path;
    }

    public function getWebPath()
    {
        return null === $this->member_photo_path
            ? 'default'
            : $this->getUploadDir().'/'.$this->member_photo_path;
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
        return '/uploads/member';
    }
}
