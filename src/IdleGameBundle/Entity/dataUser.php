<?php

namespace IdleGameBundle\Entity;

/**
 * dataUser
 */
class dataUser
{
    /**
     * @var integer
     */
    private $amountMoney;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IdleGameBundle\Entity\User
     */
    private $user;


    /**
     * Set amountMoney
     *
     * @param integer $amountMoney
     *
     * @return dataUser
     */
    public function setAmountMoney($amountMoney)
    {
        $this->amountMoney = $amountMoney;

        return $this;
    }

    /**
     * Get amountMoney
     *
     * @return integer
     */
    public function getAmountMoney()
    {
        return $this->amountMoney;
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
     * @return dataUser
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
}

