<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album_couverture
 *
 * @ORM\Table(name="album_couverture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Album_couvertureRepository")
 */
class Album_couverture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="album_couverture")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id", nullable=false)
     */
    private $users;

    /**
     * @ORM\Column(name="photo", type="text", length=4294967295)
     */
    private $photo;

    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

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
     * Set user_id
     *
     * @param integer $userId
     * @return Album_couverture
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Album_couverture
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Album_couverture
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Album_couverture
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set users
     *
     * @param \AppBundle\Entity\Users $users
     * @return Album_couverture
     */
    public function setUsers(\AppBundle\Entity\Users $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
