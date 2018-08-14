<?php

namespace IdleGameBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


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
     * @var \IdleGameBundle\Entity\dataUser
     */
    private $dataUser;


    /**
     * Set dataUser
     *
     * @param \IdleGameBundle\Entity\dataUser $dataUser
     *
     * @return User
     */
    public function setDataUser(\IdleGameBundle\Entity\dataUser $dataUser = null)
    {
        $this->dataUser = $dataUser;

        return $this;
    }

    /**
     * Get dataUser
     *
     * @return \IdleGameBundle\Entity\dataUser
     */
    public function getDataUser()
    {
        return $this->dataUser;
    }
}
