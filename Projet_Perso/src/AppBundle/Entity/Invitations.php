<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitations
 *
 * @ORM\Table(name="invitations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvitationsRepository")
 */
class Invitations
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
     * @ORM\Column(name="sender", type="integer")
     */
    private $sender;

    /**
     * @ORM\Column(name="recever", type="integer")
     */
    private $recever;

    /**
     * @ORM\Column(name="response", type="text", length=20 )
     */
    private $response;

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
     * Set sender
     *
     * @param integer $sender
     * @return Invitations
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return integer 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set recever
     *
     * @param integer $recever
     * @return Invitations
     */
    public function setRecever($recever)
    {
        $this->recever = $recever;

        return $this;
    }

    /**
     * Get recever
     *
     * @return integer 
     */
    public function getRecever()
    {
        return $this->recever;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return Invitations
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string 
     */
    public function getResponse()
    {
        return $this->response;
    }
}
