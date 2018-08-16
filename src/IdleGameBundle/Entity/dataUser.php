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
    private $unit01Quantity;

    /**
     * @var integer
     */
    private $unit01Price;

    /**
     * @var string
     */
    private $unit01Bonus10;

    /**
     * @var string
     */
    private $unit01Bonus25;

    /**
     * @var string
     */
    private $unit01Bonus50;

    /**
     * @var string
     */
    private $unit01Bonus100;

    /**
     * @var string
     */
    private $unit01Bonus150;

    /**
     * @var string
     */
    private $unit01BonusD10;

    /**
     * @var string
     */
    private $unit01BonusD25;

    /**
     * @var string
     */
    private $unit01BonusD50;

    /**
     * @var string
     */
    private $unit01BonusD100;

    /**
     * @var string
     */
    private $unit01BonusD150;

    /**
     * @var integer
     */
    private $unit01GlobalBonus;

    /**
     * @var integer
     */
    private $unit01GlobalDmgBonus;

    /**
     * @var integer
     */
    private $unit02Quantity;

    /**
     * @var integer
     */
    private $unit02Price;

    /**
     * @var string
     */
    private $unit02Bonus10;

    /**
     * @var string
     */
    private $unit02Bonus25;

    /**
     * @var string
     */
    private $unit02Bonus50;

    /**
     * @var string
     */
    private $unit02Bonus100;

    /**
     * @var string
     */
    private $unit02Bonus150;

    /**
     * @var string
     */
    private $unit02BonusD10;

    /**
     * @var string
     */
    private $unit02BonusD25;

    /**
     * @var string
     */
    private $unit02BonusD50;

    /**
     * @var string
     */
    private $unit02BonusD100;

    /**
     * @var string
     */
    private $unit02BonusD150;

    /**
     * @var integer
     */
    private $unit02GlobalBonus;

    /**
     * @var integer
     */
    private $unit02GlobalDmgBonus;

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
     * Set unit01Quantity
     *
     * @param integer $unit01Quantity
     *
     * @return dataUser
     */
    public function setUnit01Quantity($unit01Quantity)
    {
        $this->unit01Quantity = $unit01Quantity;

        return $this;
    }

    /**
     * Get unit01Quantity
     *
     * @return integer
     */
    public function getUnit01Quantity()
    {
        return $this->unit01Quantity;
    }

    /**
     * Set unit01Price
     *
     * @param integer $unit01Price
     *
     * @return dataUser
     */
    public function setUnit01Price($unit01Price)
    {
        $this->unit01Price = $unit01Price;

        return $this;
    }

    /**
     * Get unit01Price
     *
     * @return integer
     */
    public function getUnit01Price()
    {
        return $this->unit01Price;
    }

    /**
     * Set unit01Bonus10
     *
     * @param string $unit01Bonus10
     *
     * @return dataUser
     */
    public function setUnit01Bonus10($unit01Bonus10)
    {
        $this->unit01Bonus10 = $unit01Bonus10;

        return $this;
    }

    /**
     * Get unit01Bonus10
     *
     * @return string
     */
    public function getUnit01Bonus10()
    {
        return $this->unit01Bonus10;
    }

    /**
     * Set unit01Bonus25
     *
     * @param string $unit01Bonus25
     *
     * @return dataUser
     */
    public function setUnit01Bonus25($unit01Bonus25)
    {
        $this->unit01Bonus25 = $unit01Bonus25;

        return $this;
    }

    /**
     * Get unit01Bonus25
     *
     * @return string
     */
    public function getUnit01Bonus25()
    {
        return $this->unit01Bonus25;
    }

    /**
     * Set unit01Bonus50
     *
     * @param string $unit01Bonus50
     *
     * @return dataUser
     */
    public function setUnit01Bonus50($unit01Bonus50)
    {
        $this->unit01Bonus50 = $unit01Bonus50;

        return $this;
    }

    /**
     * Get unit01Bonus50
     *
     * @return string
     */
    public function getUnit01Bonus50()
    {
        return $this->unit01Bonus50;
    }

    /**
     * Set unit01Bonus100
     *
     * @param string $unit01Bonus100
     *
     * @return dataUser
     */
    public function setUnit01Bonus100($unit01Bonus100)
    {
        $this->unit01Bonus100 = $unit01Bonus100;

        return $this;
    }

    /**
     * Get unit01Bonus100
     *
     * @return string
     */
    public function getUnit01Bonus100()
    {
        return $this->unit01Bonus100;
    }

    /**
     * Set unit01Bonus150
     *
     * @param string $unit01Bonus150
     *
     * @return dataUser
     */
    public function setUnit01Bonus150($unit01Bonus150)
    {
        $this->unit01Bonus150 = $unit01Bonus150;

        return $this;
    }

    /**
     * Get unit01Bonus150
     *
     * @return string
     */
    public function getUnit01Bonus150()
    {
        return $this->unit01Bonus150;
    }

    /**
     * Set unit01BonusD10
     *
     * @param string $unit01BonusD10
     *
     * @return dataUser
     */
    public function setUnit01BonusD10($unit01BonusD10)
    {
        $this->unit01BonusD10 = $unit01BonusD10;

        return $this;
    }

    /**
     * Get unit01BonusD10
     *
     * @return string
     */
    public function getUnit01BonusD10()
    {
        return $this->unit01BonusD10;
    }

    /**
     * Set unit01BonusD25
     *
     * @param string $unit01BonusD25
     *
     * @return dataUser
     */
    public function setUnit01BonusD25($unit01BonusD25)
    {
        $this->unit01BonusD25 = $unit01BonusD25;

        return $this;
    }

    /**
     * Get unit01BonusD25
     *
     * @return string
     */
    public function getUnit01BonusD25()
    {
        return $this->unit01BonusD25;
    }

    /**
     * Set unit01BonusD50
     *
     * @param string $unit01BonusD50
     *
     * @return dataUser
     */
    public function setUnit01BonusD50($unit01BonusD50)
    {
        $this->unit01BonusD50 = $unit01BonusD50;

        return $this;
    }

    /**
     * Get unit01BonusD50
     *
     * @return string
     */
    public function getUnit01BonusD50()
    {
        return $this->unit01BonusD50;
    }

    /**
     * Set unit01BonusD100
     *
     * @param string $unit01BonusD100
     *
     * @return dataUser
     */
    public function setUnit01BonusD100($unit01BonusD100)
    {
        $this->unit01BonusD100 = $unit01BonusD100;

        return $this;
    }

    /**
     * Get unit01BonusD100
     *
     * @return string
     */
    public function getUnit01BonusD100()
    {
        return $this->unit01BonusD100;
    }

    /**
     * Set unit01BonusD150
     *
     * @param string $unit01BonusD150
     *
     * @return dataUser
     */
    public function setUnit01BonusD150($unit01BonusD150)
    {
        $this->unit01BonusD150 = $unit01BonusD150;

        return $this;
    }

    /**
     * Get unit01BonusD150
     *
     * @return string
     */
    public function getUnit01BonusD150()
    {
        return $this->unit01BonusD150;
    }

    /**
     * Set unit01GlobalBonus
     *
     * @param integer $unit01GlobalBonus
     *
     * @return dataUser
     */
    public function setUnit01GlobalBonus($unit01GlobalBonus)
    {
        $this->unit01GlobalBonus = $unit01GlobalBonus;

        return $this;
    }

    /**
     * Get unit01GlobalBonus
     *
     * @return integer
     */
    public function getUnit01GlobalBonus()
    {
        return $this->unit01GlobalBonus;
    }

    /**
     * Set unit01GlobalDmgBonus
     *
     * @param integer $unit01GlobalDmgBonus
     *
     * @return dataUser
     */
    public function setUnit01GlobalDmgBonus($unit01GlobalDmgBonus)
    {
        $this->unit01GlobalDmgBonus = $unit01GlobalDmgBonus;

        return $this;
    }

    /**
     * Get unit01GlobalDmgBonus
     *
     * @return integer
     */
    public function getUnit01GlobalDmgBonus()
    {
        return $this->unit01GlobalDmgBonus;
    }

    /**
     * Set unit02Quantity
     *
     * @param integer $unit02Quantity
     *
     * @return dataUser
     */
    public function setUnit02Quantity($unit02Quantity)
    {
        $this->unit02Quantity = $unit02Quantity;

        return $this;
    }

    /**
     * Get unit02Quantity
     *
     * @return integer
     */
    public function getUnit02Quantity()
    {
        return $this->unit02Quantity;
    }

    /**
     * Set unit02Price
     *
     * @param integer $unit02Price
     *
     * @return dataUser
     */
    public function setUnit02Price($unit02Price)
    {
        $this->unit02Price = $unit02Price;

        return $this;
    }

    /**
     * Get unit02Price
     *
     * @return integer
     */
    public function getUnit02Price()
    {
        return $this->unit02Price;
    }

    /**
     * Set unit02Bonus10
     *
     * @param string $unit02Bonus10
     *
     * @return dataUser
     */
    public function setUnit02Bonus10($unit02Bonus10)
    {
        $this->unit02Bonus10 = $unit02Bonus10;

        return $this;
    }

    /**
     * Get unit02Bonus10
     *
     * @return string
     */
    public function getUnit02Bonus10()
    {
        return $this->unit02Bonus10;
    }

    /**
     * Set unit02Bonus25
     *
     * @param string $unit02Bonus25
     *
     * @return dataUser
     */
    public function setUnit02Bonus25($unit02Bonus25)
    {
        $this->unit02Bonus25 = $unit02Bonus25;

        return $this;
    }

    /**
     * Get unit02Bonus25
     *
     * @return string
     */
    public function getUnit02Bonus25()
    {
        return $this->unit02Bonus25;
    }

    /**
     * Set unit02Bonus50
     *
     * @param string $unit02Bonus50
     *
     * @return dataUser
     */
    public function setUnit02Bonus50($unit02Bonus50)
    {
        $this->unit02Bonus50 = $unit02Bonus50;

        return $this;
    }

    /**
     * Get unit02Bonus50
     *
     * @return string
     */
    public function getUnit02Bonus50()
    {
        return $this->unit02Bonus50;
    }

    /**
     * Set unit02Bonus100
     *
     * @param string $unit02Bonus100
     *
     * @return dataUser
     */
    public function setUnit02Bonus100($unit02Bonus100)
    {
        $this->unit02Bonus100 = $unit02Bonus100;

        return $this;
    }

    /**
     * Get unit02Bonus100
     *
     * @return string
     */
    public function getUnit02Bonus100()
    {
        return $this->unit02Bonus100;
    }

    /**
     * Set unit02Bonus150
     *
     * @param string $unit02Bonus150
     *
     * @return dataUser
     */
    public function setUnit02Bonus150($unit02Bonus150)
    {
        $this->unit02Bonus150 = $unit02Bonus150;

        return $this;
    }

    /**
     * Get unit02Bonus150
     *
     * @return string
     */
    public function getUnit02Bonus150()
    {
        return $this->unit02Bonus150;
    }

    /**
     * Set unit02BonusD10
     *
     * @param string $unit02BonusD10
     *
     * @return dataUser
     */
    public function setUnit02BonusD10($unit02BonusD10)
    {
        $this->unit02BonusD10 = $unit02BonusD10;

        return $this;
    }

    /**
     * Get unit02BonusD10
     *
     * @return string
     */
    public function getUnit02BonusD10()
    {
        return $this->unit02BonusD10;
    }

    /**
     * Set unit02BonusD25
     *
     * @param string $unit02BonusD25
     *
     * @return dataUser
     */
    public function setUnit02BonusD25($unit02BonusD25)
    {
        $this->unit02BonusD25 = $unit02BonusD25;

        return $this;
    }

    /**
     * Get unit02BonusD25
     *
     * @return string
     */
    public function getUnit02BonusD25()
    {
        return $this->unit02BonusD25;
    }

    /**
     * Set unit02BonusD50
     *
     * @param string $unit02BonusD50
     *
     * @return dataUser
     */
    public function setUnit02BonusD50($unit02BonusD50)
    {
        $this->unit02BonusD50 = $unit02BonusD50;

        return $this;
    }

    /**
     * Get unit02BonusD50
     *
     * @return string
     */
    public function getUnit02BonusD50()
    {
        return $this->unit02BonusD50;
    }

    /**
     * Set unit02BonusD100
     *
     * @param string $unit02BonusD100
     *
     * @return dataUser
     */
    public function setUnit02BonusD100($unit02BonusD100)
    {
        $this->unit02BonusD100 = $unit02BonusD100;

        return $this;
    }

    /**
     * Get unit02BonusD100
     *
     * @return string
     */
    public function getUnit02BonusD100()
    {
        return $this->unit02BonusD100;
    }

    /**
     * Set unit02BonusD150
     *
     * @param string $unit02BonusD150
     *
     * @return dataUser
     */
    public function setUnit02BonusD150($unit02BonusD150)
    {
        $this->unit02BonusD150 = $unit02BonusD150;

        return $this;
    }

    /**
     * Get unit02BonusD150
     *
     * @return string
     */
    public function getUnit02BonusD150()
    {
        return $this->unit02BonusD150;
    }

    /**
     * Set unit02GlobalBonus
     *
     * @param integer $unit02GlobalBonus
     *
     * @return dataUser
     */
    public function setUnit02GlobalBonus($unit02GlobalBonus)
    {
        $this->unit02GlobalBonus = $unit02GlobalBonus;

        return $this;
    }

    /**
     * Get unit02GlobalBonus
     *
     * @return integer
     */
    public function getUnit02GlobalBonus()
    {
        return $this->unit02GlobalBonus;
    }

    /**
     * Set unit02GlobalDmgBonus
     *
     * @param integer $unit02GlobalDmgBonus
     *
     * @return dataUser
     */
    public function setUnit02GlobalDmgBonus($unit02GlobalDmgBonus)
    {
        $this->unit02GlobalDmgBonus = $unit02GlobalDmgBonus;

        return $this;
    }

    /**
     * Get unit02GlobalDmgBonus
     *
     * @return integer
     */
    public function getUnit02GlobalDmgBonus()
    {
        return $this->unit02GlobalDmgBonus;
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

