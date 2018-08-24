<?php

namespace IdleGameBundle\Entity;

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
}
