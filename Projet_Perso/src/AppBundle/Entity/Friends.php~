<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Friends
 *
 * @ORM\Table(name="friends")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FriendsRepository")
 */
class Friends
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
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="friend_one")
     * @ORM\JoinColumn(name="user_friend_one",referencedColumnName="id", nullable=false)
     */
    private $user_friend_one;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="friend_two")
     * @ORM\JoinColumn(name="user_friend_two",referencedColumnName="id", nullable=false)
     */
    private $user_friend_two;


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
     * Set friendOne
     *
     * @param integer $friendOne
     * @return Friends
     */
    public function setFriendOne($friendOne)
    {
        $this->friendOne = $friendOne;

        return $this;
    }

    /**
     * Get friendOne
     *
     * @return integer 
     */
    public function getFriendOne()
    {
        return $this->friendOne;
    }

    /**
     * Set friendTwo
     *
     * @param integer $friendTwo
     * @return Friends
     */
    public function setFriendTwo($friendTwo)
    {
        $this->friendTwo = $friendTwo;

        return $this;
    }

    /**
     * Get friendTwo
     *
     * @return integer 
     */
    public function getFriendTwo()
    {
        return $this->friendTwo;
    }

    /**
     * Set user_friend_one
     *
     * @param \AppBundle\Entity\Users $userFriendOne
     * @return Friends
     */
    public function setUserFriendOne(\AppBundle\Entity\Users $userFriendOne)
    {
        $this->user_friend_one = $userFriendOne;

        return $this;
    }

    /**
     * Get user_friend_one
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUserFriendOne()
    {
        return $this->user_friend_one;
    }

    /**
     * Set user_friend_two
     *
     * @param \AppBundle\Entity\Users $userFriendTwo
     * @return Friends
     */
    public function setUserFriendTwo(\AppBundle\Entity\Users $userFriendTwo)
    {
        $this->user_friend_two = $userFriendTwo;

        return $this;
    }

    /**
     * Get user_friend_two
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUserFriendTwo()
    {
        return $this->user_friend_two;
    }
}
