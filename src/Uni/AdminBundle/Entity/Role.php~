<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 */
class Role
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $role_name;

    /**
     * @var integer
     */
    private $role_rank;

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
    private $role_member;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role_member = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set role_name
     *
     * @param string $roleName
     * @return Role
     */
    public function setRoleName($roleName)
    {
        $this->role_name = $roleName;

        return $this;
    }

    /**
     * Get role_name
     *
     * @return string 
     */
    public function getRoleName()
    {
        return $this->role_name;
    }

    /**
     * Set role_rank
     *
     * @param integer $roleRank
     * @return Role
     */
    public function setRoleRank($roleRank)
    {
        $this->role_rank = $roleRank;

        return $this;
    }

    /**
     * Get role_rank
     *
     * @return integer 
     */
    public function getRoleRank()
    {
        return $this->role_rank;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Role
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
     * @return Role
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
     * @return Role
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
     * Add role_member
     *
     * @param \Uni\AdminBundle\Entity\Member $roleMember
     * @return Role
     */
    public function addRoleMember(\Uni\AdminBundle\Entity\Member $roleMember)
    {
        $this->role_member[] = $roleMember;

        return $this;
    }

    /**
     * Remove role_member
     *
     * @param \Uni\AdminBundle\Entity\Member $roleMember
     */
    public function removeRoleMember(\Uni\AdminBundle\Entity\Member $roleMember)
    {
        $this->role_member->removeElement($roleMember);
    }

    /**
     * Get role_member
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoleMember()
    {
        return $this->role_member;
    }
}
