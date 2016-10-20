<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotosRepository")
 */
class Photos
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
     * @ORM\Column(name="profil", type="text", length=4294967295)
     */
    private $profil;

    /**
     * @ORM\Column(name="couverture", type="text", length=4294967295)
     */
    private $couverture;

    /**
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

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
     * Set profil
     *
     * @param \longtext $profil
     * @return Photos
     */
    public function setProfil(\longtext $profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return \longtext 
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set couverture
     *
     * @param \longtext $couverture
     * @return Photos
     */
    public function setCouverture(\longtext $couverture)
    {
        $this->couverture = $couverture;

        return $this;
    }

    /**
     * Get couverture
     *
     * @return \longtext 
     */
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Photos
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
}
