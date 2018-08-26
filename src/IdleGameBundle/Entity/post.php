<?php

namespace IdleGameBundle\Entity;

/**
 * post
 */
class post
{
    /**
     * @var string
     */
    private $postContent;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IdleGameBundle\Entity\User
     */
    private $user;

    /**
     * @var \IdleGameBundle\Entity\topic
     */
    private $topic;


    /**
     * Set postContent
     *
     * @param string $postContent
     *
     * @return post
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * Get postContent
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
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
     * Set user
     *
     * @param \IdleGameBundle\Entity\User $user
     *
     * @return post
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
     * Set topic
     *
     * @param \IdleGameBundle\Entity\topic $topic
     *
     * @return post
     */
    public function setTopic(\IdleGameBundle\Entity\topic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \IdleGameBundle\Entity\topic
     */
    public function getTopic()
    {
        return $this->topic;
    }
    /**
     * @var \IdleGameBundle\Entity\topic
     */
    private $firstPost;


    /**
     * Set firstPost
     *
     * @param \IdleGameBundle\Entity\topic $firstPost
     *
     * @return post
     */
    public function setFirstPost(\IdleGameBundle\Entity\topic $firstPost = null)
    {
        $this->firstPost = $firstPost;

        return $this;
    }

    /**
     * Get firstPost
     *
     * @return \IdleGameBundle\Entity\topic
     */
    public function getFirstPost()
    {
        return $this->firstPost;
    }
    /**
     * @var \DateTime
     */
    private $postedAt;


    /**
     * Set postedAt
     *
     * @param \DateTime $postedAt
     *
     * @return post
     */
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime
     */
    public function getPostedAt()
    {
        return $this->postedAt;
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
     * @return post
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
     * @return post
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
