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
}
