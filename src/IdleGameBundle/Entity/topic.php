<?php

namespace IdleGameBundle\Entity;

use Symfony\Component\Form\FormTypeInterface;

/**
 * topic
 */
class topic
{
    /**
     * @var string
     */
    private $titreTopic;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set titreTopic
     *
     * @param string $titreTopic
     *
     * @return topic
     */
    public function setTitreTopic($titreTopic)
    {
        $this->titreTopic = $titreTopic;

        return $this;
    }

    /**
     * Get titreTopic
     *
     * @return string
     */
    public function getTitreTopic()
    {
        return $this->titreTopic;
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
     * @var \IdleGameBundle\Entity\categoriesForum
     */
    private $categ;


    /**
     * Set categ
     *
     * @param \IdleGameBundle\Entity\categoriesForum $categ
     *
     * @return topic
     */
    public function setCateg(\IdleGameBundle\Entity\categoriesForum $categ = null)
    {
        $this->categ = $categ;

        return $this;
    }

    /**
     * Get categ
     *
     * @return \IdleGameBundle\Entity\categoriesForum
     */
    public function getCateg()
    {
        return $this->categ;
    }
    /**
     * @var \IdleGameBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \IdleGameBundle\Entity\User $user
     *
     * @return topic
     */
    public function setUser(\IdleGameBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \IdleGameBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var string
     */
    private $firstContentTopic;


    /**
     * Set firstContentTopic
     *
     * @param string $firstContentTopic
     *
     * @return topic
     */
    public function setFirstContentTopic($firstContentTopic)
    {
        $this->firstContentTopic = $firstContentTopic;

        return $this;
    }

    /**
     * Get firstContentTopic
     *
     * @return string
     */
    public function getFirstContentTopic()
    {
        return $this->firstContentTopic;
    }
    /**
     * @var \DateTime
     */
    private $postedAtDate;

    /**
     * @var \DateTime
     */
    private $postedAtTime;


    /**
     * Set postedAtDate
     *
     * @param \DateTime $postedAtDate
     *
     * @return topic
     */
    public function setPostedAtDate($postedAtDate)
    {
        $this->postedAtDate = $postedAtDate;

        return $this;
    }

    /**
     * Get postedAtDate
     *
     * @return \DateTime
     */
    public function getPostedAtDate()
    {
        return $this->postedAtDate;
    }

    /**
     * Set postedAtTime
     *
     * @param \DateTime $postedAtTime
     *
     * @return topic
     */
    public function setPostedAtTime($postedAtTime)
    {
        $this->postedAtTime = $postedAtTime;

        return $this;
    }

    /**
     * Get postedAtTime
     *
     * @return \DateTime
     */
    public function getPostedAtTime()
    {
        return $this->postedAtTime;
    }
}
