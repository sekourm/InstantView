<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @Assert\NotBlank(message="Please, upload the profil picture as a jpg/png file.")
     * @Assert\File( maxSize = "1024k", mimeTypesMessage = "Please upload a valid Image")
     */
    private $profil;

    /**
     * @ORM\Column(name="couverture", type="text", length=4294967295)
     */
    private $couverture;

    /**
     * @ORM\OneToOne(targetEntity="Users", inversedBy="user_photo")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id", nullable=false)
     */

    private $photo;

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
    public function setProfil($profil)
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
    public function setCouverture($couverture)
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

    /**
     * Set photo
     *
     * @param \AppBundle\Entity\Users $photo
     * @return Photos
     */
    public function setPhoto(\AppBundle\Entity\Users $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set user_photo
     *
     * @param \AppBundle\Entity\Users $userPhoto
     * @return Photos
     */
    public function setUserPhoto(\AppBundle\Entity\Users $userPhoto = null)
    {
        $this->user_photo = $userPhoto;

        return $this;
    }

    /**
     * Get user_photo
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUserPhoto()
    {
        return $this->user_photo;
    }
}
