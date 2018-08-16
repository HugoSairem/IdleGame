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
    /**
     * @var integer
     */
    private $unit03Quantity;

    /**
     * @var integer
     */
    private $unit03Price;

    /**
     * @var string
     */
    private $unit03Bonus10;

    /**
     * @var string
     */
    private $unit03Bonus25;

    /**
     * @var string
     */
    private $unit03Bonus50;

    /**
     * @var string
     */
    private $unit03Bonus100;

    /**
     * @var string
     */
    private $unit03Bonus150;

    /**
     * @var string
     */
    private $unit03BonusD10;

    /**
     * @var string
     */
    private $unit03BonusD25;

    /**
     * @var string
     */
    private $unit03BonusD50;

    /**
     * @var string
     */
    private $unit03BonusD100;

    /**
     * @var string
     */
    private $unit03BonusD150;

    /**
     * @var integer
     */
    private $unit03GlobalBonus;

    /**
     * @var integer
     */
    private $unit03GlobalDmgBonus;

    /**
     * @var integer
     */
    private $unit04Quantity;

    /**
     * @var integer
     */
    private $unit04Price;

    /**
     * @var string
     */
    private $unit04Bonus10;

    /**
     * @var string
     */
    private $unit04Bonus25;

    /**
     * @var string
     */
    private $unit04Bonus50;

    /**
     * @var string
     */
    private $unit04Bonus100;

    /**
     * @var string
     */
    private $unit04Bonus150;

    /**
     * @var string
     */
    private $unit04BonusD10;

    /**
     * @var string
     */
    private $unit04BonusD25;

    /**
     * @var string
     */
    private $unit04BonusD50;

    /**
     * @var string
     */
    private $unit04BonusD100;

    /**
     * @var string
     */
    private $unit04BonusD150;

    /**
     * @var integer
     */
    private $unit04GlobalBonus;

    /**
     * @var integer
     */
    private $unit04GlobalDmgBonus;

    /**
     * @var integer
     */
    private $unit05Quantity;

    /**
     * @var integer
     */
    private $unit05Price;

    /**
     * @var string
     */
    private $unit05Bonus10;

    /**
     * @var string
     */
    private $unit05Bonus25;

    /**
     * @var string
     */
    private $unit05Bonus50;

    /**
     * @var string
     */
    private $unit05Bonus100;

    /**
     * @var string
     */
    private $unit05Bonus150;

    /**
     * @var string
     */
    private $unit05BonusD10;

    /**
     * @var string
     */
    private $unit05BonusD25;

    /**
     * @var string
     */
    private $unit05BonusD50;

    /**
     * @var string
     */
    private $unit05BonusD100;

    /**
     * @var string
     */
    private $unit05BonusD150;

    /**
     * @var integer
     */
    private $unit05GlobalBonus;

    /**
     * @var integer
     */
    private $unit05GlobalDmgBonus;

    /**
     * @var integer
     */
    private $unit06Quantity;

    /**
     * @var integer
     */
    private $unit06Price;

    /**
     * @var string
     */
    private $unit06Bonus10;

    /**
     * @var string
     */
    private $unit06Bonus25;

    /**
     * @var string
     */
    private $unit06Bonus50;

    /**
     * @var string
     */
    private $unit06Bonus100;

    /**
     * @var string
     */
    private $unit06Bonus150;

    /**
     * @var string
     */
    private $unit06BonusD10;

    /**
     * @var string
     */
    private $unit06BonusD25;

    /**
     * @var string
     */
    private $unit06BonusD50;

    /**
     * @var string
     */
    private $unit06BonusD100;

    /**
     * @var string
     */
    private $unit06BonusD150;

    /**
     * @var integer
     */
    private $unit06GlobalBonus;

    /**
     * @var integer
     */
    private $unit06GlobalDmgBonus;


    /**
     * Set unit03Quantity
     *
     * @param integer $unit03Quantity
     *
     * @return dataUser
     */
    public function setUnit03Quantity($unit03Quantity)
    {
        $this->unit03Quantity = $unit03Quantity;

        return $this;
    }

    /**
     * Get unit03Quantity
     *
     * @return integer
     */
    public function getUnit03Quantity()
    {
        return $this->unit03Quantity;
    }

    /**
     * Set unit03Price
     *
     * @param integer $unit03Price
     *
     * @return dataUser
     */
    public function setUnit03Price($unit03Price)
    {
        $this->unit03Price = $unit03Price;

        return $this;
    }

    /**
     * Get unit03Price
     *
     * @return integer
     */
    public function getUnit03Price()
    {
        return $this->unit03Price;
    }

    /**
     * Set unit03Bonus10
     *
     * @param string $unit03Bonus10
     *
     * @return dataUser
     */
    public function setUnit03Bonus10($unit03Bonus10)
    {
        $this->unit03Bonus10 = $unit03Bonus10;

        return $this;
    }

    /**
     * Get unit03Bonus10
     *
     * @return string
     */
    public function getUnit03Bonus10()
    {
        return $this->unit03Bonus10;
    }

    /**
     * Set unit03Bonus25
     *
     * @param string $unit03Bonus25
     *
     * @return dataUser
     */
    public function setUnit03Bonus25($unit03Bonus25)
    {
        $this->unit03Bonus25 = $unit03Bonus25;

        return $this;
    }

    /**
     * Get unit03Bonus25
     *
     * @return string
     */
    public function getUnit03Bonus25()
    {
        return $this->unit03Bonus25;
    }

    /**
     * Set unit03Bonus50
     *
     * @param string $unit03Bonus50
     *
     * @return dataUser
     */
    public function setUnit03Bonus50($unit03Bonus50)
    {
        $this->unit03Bonus50 = $unit03Bonus50;

        return $this;
    }

    /**
     * Get unit03Bonus50
     *
     * @return string
     */
    public function getUnit03Bonus50()
    {
        return $this->unit03Bonus50;
    }

    /**
     * Set unit03Bonus100
     *
     * @param string $unit03Bonus100
     *
     * @return dataUser
     */
    public function setUnit03Bonus100($unit03Bonus100)
    {
        $this->unit03Bonus100 = $unit03Bonus100;

        return $this;
    }

    /**
     * Get unit03Bonus100
     *
     * @return string
     */
    public function getUnit03Bonus100()
    {
        return $this->unit03Bonus100;
    }

    /**
     * Set unit03Bonus150
     *
     * @param string $unit03Bonus150
     *
     * @return dataUser
     */
    public function setUnit03Bonus150($unit03Bonus150)
    {
        $this->unit03Bonus150 = $unit03Bonus150;

        return $this;
    }

    /**
     * Get unit03Bonus150
     *
     * @return string
     */
    public function getUnit03Bonus150()
    {
        return $this->unit03Bonus150;
    }

    /**
     * Set unit03BonusD10
     *
     * @param string $unit03BonusD10
     *
     * @return dataUser
     */
    public function setUnit03BonusD10($unit03BonusD10)
    {
        $this->unit03BonusD10 = $unit03BonusD10;

        return $this;
    }

    /**
     * Get unit03BonusD10
     *
     * @return string
     */
    public function getUnit03BonusD10()
    {
        return $this->unit03BonusD10;
    }

    /**
     * Set unit03BonusD25
     *
     * @param string $unit03BonusD25
     *
     * @return dataUser
     */
    public function setUnit03BonusD25($unit03BonusD25)
    {
        $this->unit03BonusD25 = $unit03BonusD25;

        return $this;
    }

    /**
     * Get unit03BonusD25
     *
     * @return string
     */
    public function getUnit03BonusD25()
    {
        return $this->unit03BonusD25;
    }

    /**
     * Set unit03BonusD50
     *
     * @param string $unit03BonusD50
     *
     * @return dataUser
     */
    public function setUnit03BonusD50($unit03BonusD50)
    {
        $this->unit03BonusD50 = $unit03BonusD50;

        return $this;
    }

    /**
     * Get unit03BonusD50
     *
     * @return string
     */
    public function getUnit03BonusD50()
    {
        return $this->unit03BonusD50;
    }

    /**
     * Set unit03BonusD100
     *
     * @param string $unit03BonusD100
     *
     * @return dataUser
     */
    public function setUnit03BonusD100($unit03BonusD100)
    {
        $this->unit03BonusD100 = $unit03BonusD100;

        return $this;
    }

    /**
     * Get unit03BonusD100
     *
     * @return string
     */
    public function getUnit03BonusD100()
    {
        return $this->unit03BonusD100;
    }

    /**
     * Set unit03BonusD150
     *
     * @param string $unit03BonusD150
     *
     * @return dataUser
     */
    public function setUnit03BonusD150($unit03BonusD150)
    {
        $this->unit03BonusD150 = $unit03BonusD150;

        return $this;
    }

    /**
     * Get unit03BonusD150
     *
     * @return string
     */
    public function getUnit03BonusD150()
    {
        return $this->unit03BonusD150;
    }

    /**
     * Set unit03GlobalBonus
     *
     * @param integer $unit03GlobalBonus
     *
     * @return dataUser
     */
    public function setUnit03GlobalBonus($unit03GlobalBonus)
    {
        $this->unit03GlobalBonus = $unit03GlobalBonus;

        return $this;
    }

    /**
     * Get unit03GlobalBonus
     *
     * @return integer
     */
    public function getUnit03GlobalBonus()
    {
        return $this->unit03GlobalBonus;
    }

    /**
     * Set unit03GlobalDmgBonus
     *
     * @param integer $unit03GlobalDmgBonus
     *
     * @return dataUser
     */
    public function setUnit03GlobalDmgBonus($unit03GlobalDmgBonus)
    {
        $this->unit03GlobalDmgBonus = $unit03GlobalDmgBonus;

        return $this;
    }

    /**
     * Get unit03GlobalDmgBonus
     *
     * @return integer
     */
    public function getUnit03GlobalDmgBonus()
    {
        return $this->unit03GlobalDmgBonus;
    }

    /**
     * Set unit04Quantity
     *
     * @param integer $unit04Quantity
     *
     * @return dataUser
     */
    public function setUnit04Quantity($unit04Quantity)
    {
        $this->unit04Quantity = $unit04Quantity;

        return $this;
    }

    /**
     * Get unit04Quantity
     *
     * @return integer
     */
    public function getUnit04Quantity()
    {
        return $this->unit04Quantity;
    }

    /**
     * Set unit04Price
     *
     * @param integer $unit04Price
     *
     * @return dataUser
     */
    public function setUnit04Price($unit04Price)
    {
        $this->unit04Price = $unit04Price;

        return $this;
    }

    /**
     * Get unit04Price
     *
     * @return integer
     */
    public function getUnit04Price()
    {
        return $this->unit04Price;
    }

    /**
     * Set unit04Bonus10
     *
     * @param string $unit04Bonus10
     *
     * @return dataUser
     */
    public function setUnit04Bonus10($unit04Bonus10)
    {
        $this->unit04Bonus10 = $unit04Bonus10;

        return $this;
    }

    /**
     * Get unit04Bonus10
     *
     * @return string
     */
    public function getUnit04Bonus10()
    {
        return $this->unit04Bonus10;
    }

    /**
     * Set unit04Bonus25
     *
     * @param string $unit04Bonus25
     *
     * @return dataUser
     */
    public function setUnit04Bonus25($unit04Bonus25)
    {
        $this->unit04Bonus25 = $unit04Bonus25;

        return $this;
    }

    /**
     * Get unit04Bonus25
     *
     * @return string
     */
    public function getUnit04Bonus25()
    {
        return $this->unit04Bonus25;
    }

    /**
     * Set unit04Bonus50
     *
     * @param string $unit04Bonus50
     *
     * @return dataUser
     */
    public function setUnit04Bonus50($unit04Bonus50)
    {
        $this->unit04Bonus50 = $unit04Bonus50;

        return $this;
    }

    /**
     * Get unit04Bonus50
     *
     * @return string
     */
    public function getUnit04Bonus50()
    {
        return $this->unit04Bonus50;
    }

    /**
     * Set unit04Bonus100
     *
     * @param string $unit04Bonus100
     *
     * @return dataUser
     */
    public function setUnit04Bonus100($unit04Bonus100)
    {
        $this->unit04Bonus100 = $unit04Bonus100;

        return $this;
    }

    /**
     * Get unit04Bonus100
     *
     * @return string
     */
    public function getUnit04Bonus100()
    {
        return $this->unit04Bonus100;
    }

    /**
     * Set unit04Bonus150
     *
     * @param string $unit04Bonus150
     *
     * @return dataUser
     */
    public function setUnit04Bonus150($unit04Bonus150)
    {
        $this->unit04Bonus150 = $unit04Bonus150;

        return $this;
    }

    /**
     * Get unit04Bonus150
     *
     * @return string
     */
    public function getUnit04Bonus150()
    {
        return $this->unit04Bonus150;
    }

    /**
     * Set unit04BonusD10
     *
     * @param string $unit04BonusD10
     *
     * @return dataUser
     */
    public function setUnit04BonusD10($unit04BonusD10)
    {
        $this->unit04BonusD10 = $unit04BonusD10;

        return $this;
    }

    /**
     * Get unit04BonusD10
     *
     * @return string
     */
    public function getUnit04BonusD10()
    {
        return $this->unit04BonusD10;
    }

    /**
     * Set unit04BonusD25
     *
     * @param string $unit04BonusD25
     *
     * @return dataUser
     */
    public function setUnit04BonusD25($unit04BonusD25)
    {
        $this->unit04BonusD25 = $unit04BonusD25;

        return $this;
    }

    /**
     * Get unit04BonusD25
     *
     * @return string
     */
    public function getUnit04BonusD25()
    {
        return $this->unit04BonusD25;
    }

    /**
     * Set unit04BonusD50
     *
     * @param string $unit04BonusD50
     *
     * @return dataUser
     */
    public function setUnit04BonusD50($unit04BonusD50)
    {
        $this->unit04BonusD50 = $unit04BonusD50;

        return $this;
    }

    /**
     * Get unit04BonusD50
     *
     * @return string
     */
    public function getUnit04BonusD50()
    {
        return $this->unit04BonusD50;
    }

    /**
     * Set unit04BonusD100
     *
     * @param string $unit04BonusD100
     *
     * @return dataUser
     */
    public function setUnit04BonusD100($unit04BonusD100)
    {
        $this->unit04BonusD100 = $unit04BonusD100;

        return $this;
    }

    /**
     * Get unit04BonusD100
     *
     * @return string
     */
    public function getUnit04BonusD100()
    {
        return $this->unit04BonusD100;
    }

    /**
     * Set unit04BonusD150
     *
     * @param string $unit04BonusD150
     *
     * @return dataUser
     */
    public function setUnit04BonusD150($unit04BonusD150)
    {
        $this->unit04BonusD150 = $unit04BonusD150;

        return $this;
    }

    /**
     * Get unit04BonusD150
     *
     * @return string
     */
    public function getUnit04BonusD150()
    {
        return $this->unit04BonusD150;
    }

    /**
     * Set unit04GlobalBonus
     *
     * @param integer $unit04GlobalBonus
     *
     * @return dataUser
     */
    public function setUnit04GlobalBonus($unit04GlobalBonus)
    {
        $this->unit04GlobalBonus = $unit04GlobalBonus;

        return $this;
    }

    /**
     * Get unit04GlobalBonus
     *
     * @return integer
     */
    public function getUnit04GlobalBonus()
    {
        return $this->unit04GlobalBonus;
    }

    /**
     * Set unit04GlobalDmgBonus
     *
     * @param integer $unit04GlobalDmgBonus
     *
     * @return dataUser
     */
    public function setUnit04GlobalDmgBonus($unit04GlobalDmgBonus)
    {
        $this->unit04GlobalDmgBonus = $unit04GlobalDmgBonus;

        return $this;
    }

    /**
     * Get unit04GlobalDmgBonus
     *
     * @return integer
     */
    public function getUnit04GlobalDmgBonus()
    {
        return $this->unit04GlobalDmgBonus;
    }

    /**
     * Set unit05Quantity
     *
     * @param integer $unit05Quantity
     *
     * @return dataUser
     */
    public function setUnit05Quantity($unit05Quantity)
    {
        $this->unit05Quantity = $unit05Quantity;

        return $this;
    }

    /**
     * Get unit05Quantity
     *
     * @return integer
     */
    public function getUnit05Quantity()
    {
        return $this->unit05Quantity;
    }

    /**
     * Set unit05Price
     *
     * @param integer $unit05Price
     *
     * @return dataUser
     */
    public function setUnit05Price($unit05Price)
    {
        $this->unit05Price = $unit05Price;

        return $this;
    }

    /**
     * Get unit05Price
     *
     * @return integer
     */
    public function getUnit05Price()
    {
        return $this->unit05Price;
    }

    /**
     * Set unit05Bonus10
     *
     * @param string $unit05Bonus10
     *
     * @return dataUser
     */
    public function setUnit05Bonus10($unit05Bonus10)
    {
        $this->unit05Bonus10 = $unit05Bonus10;

        return $this;
    }

    /**
     * Get unit05Bonus10
     *
     * @return string
     */
    public function getUnit05Bonus10()
    {
        return $this->unit05Bonus10;
    }

    /**
     * Set unit05Bonus25
     *
     * @param string $unit05Bonus25
     *
     * @return dataUser
     */
    public function setUnit05Bonus25($unit05Bonus25)
    {
        $this->unit05Bonus25 = $unit05Bonus25;

        return $this;
    }

    /**
     * Get unit05Bonus25
     *
     * @return string
     */
    public function getUnit05Bonus25()
    {
        return $this->unit05Bonus25;
    }

    /**
     * Set unit05Bonus50
     *
     * @param string $unit05Bonus50
     *
     * @return dataUser
     */
    public function setUnit05Bonus50($unit05Bonus50)
    {
        $this->unit05Bonus50 = $unit05Bonus50;

        return $this;
    }

    /**
     * Get unit05Bonus50
     *
     * @return string
     */
    public function getUnit05Bonus50()
    {
        return $this->unit05Bonus50;
    }

    /**
     * Set unit05Bonus100
     *
     * @param string $unit05Bonus100
     *
     * @return dataUser
     */
    public function setUnit05Bonus100($unit05Bonus100)
    {
        $this->unit05Bonus100 = $unit05Bonus100;

        return $this;
    }

    /**
     * Get unit05Bonus100
     *
     * @return string
     */
    public function getUnit05Bonus100()
    {
        return $this->unit05Bonus100;
    }

    /**
     * Set unit05Bonus150
     *
     * @param string $unit05Bonus150
     *
     * @return dataUser
     */
    public function setUnit05Bonus150($unit05Bonus150)
    {
        $this->unit05Bonus150 = $unit05Bonus150;

        return $this;
    }

    /**
     * Get unit05Bonus150
     *
     * @return string
     */
    public function getUnit05Bonus150()
    {
        return $this->unit05Bonus150;
    }

    /**
     * Set unit05BonusD10
     *
     * @param string $unit05BonusD10
     *
     * @return dataUser
     */
    public function setUnit05BonusD10($unit05BonusD10)
    {
        $this->unit05BonusD10 = $unit05BonusD10;

        return $this;
    }

    /**
     * Get unit05BonusD10
     *
     * @return string
     */
    public function getUnit05BonusD10()
    {
        return $this->unit05BonusD10;
    }

    /**
     * Set unit05BonusD25
     *
     * @param string $unit05BonusD25
     *
     * @return dataUser
     */
    public function setUnit05BonusD25($unit05BonusD25)
    {
        $this->unit05BonusD25 = $unit05BonusD25;

        return $this;
    }

    /**
     * Get unit05BonusD25
     *
     * @return string
     */
    public function getUnit05BonusD25()
    {
        return $this->unit05BonusD25;
    }

    /**
     * Set unit05BonusD50
     *
     * @param string $unit05BonusD50
     *
     * @return dataUser
     */
    public function setUnit05BonusD50($unit05BonusD50)
    {
        $this->unit05BonusD50 = $unit05BonusD50;

        return $this;
    }

    /**
     * Get unit05BonusD50
     *
     * @return string
     */
    public function getUnit05BonusD50()
    {
        return $this->unit05BonusD50;
    }

    /**
     * Set unit05BonusD100
     *
     * @param string $unit05BonusD100
     *
     * @return dataUser
     */
    public function setUnit05BonusD100($unit05BonusD100)
    {
        $this->unit05BonusD100 = $unit05BonusD100;

        return $this;
    }

    /**
     * Get unit05BonusD100
     *
     * @return string
     */
    public function getUnit05BonusD100()
    {
        return $this->unit05BonusD100;
    }

    /**
     * Set unit05BonusD150
     *
     * @param string $unit05BonusD150
     *
     * @return dataUser
     */
    public function setUnit05BonusD150($unit05BonusD150)
    {
        $this->unit05BonusD150 = $unit05BonusD150;

        return $this;
    }

    /**
     * Get unit05BonusD150
     *
     * @return string
     */
    public function getUnit05BonusD150()
    {
        return $this->unit05BonusD150;
    }

    /**
     * Set unit05GlobalBonus
     *
     * @param integer $unit05GlobalBonus
     *
     * @return dataUser
     */
    public function setUnit05GlobalBonus($unit05GlobalBonus)
    {
        $this->unit05GlobalBonus = $unit05GlobalBonus;

        return $this;
    }

    /**
     * Get unit05GlobalBonus
     *
     * @return integer
     */
    public function getUnit05GlobalBonus()
    {
        return $this->unit05GlobalBonus;
    }

    /**
     * Set unit05GlobalDmgBonus
     *
     * @param integer $unit05GlobalDmgBonus
     *
     * @return dataUser
     */
    public function setUnit05GlobalDmgBonus($unit05GlobalDmgBonus)
    {
        $this->unit05GlobalDmgBonus = $unit05GlobalDmgBonus;

        return $this;
    }

    /**
     * Get unit05GlobalDmgBonus
     *
     * @return integer
     */
    public function getUnit05GlobalDmgBonus()
    {
        return $this->unit05GlobalDmgBonus;
    }

    /**
     * Set unit06Quantity
     *
     * @param integer $unit06Quantity
     *
     * @return dataUser
     */
    public function setUnit06Quantity($unit06Quantity)
    {
        $this->unit06Quantity = $unit06Quantity;

        return $this;
    }

    /**
     * Get unit06Quantity
     *
     * @return integer
     */
    public function getUnit06Quantity()
    {
        return $this->unit06Quantity;
    }

    /**
     * Set unit06Price
     *
     * @param integer $unit06Price
     *
     * @return dataUser
     */
    public function setUnit06Price($unit06Price)
    {
        $this->unit06Price = $unit06Price;

        return $this;
    }

    /**
     * Get unit06Price
     *
     * @return integer
     */
    public function getUnit06Price()
    {
        return $this->unit06Price;
    }

    /**
     * Set unit06Bonus10
     *
     * @param string $unit06Bonus10
     *
     * @return dataUser
     */
    public function setUnit06Bonus10($unit06Bonus10)
    {
        $this->unit06Bonus10 = $unit06Bonus10;

        return $this;
    }

    /**
     * Get unit06Bonus10
     *
     * @return string
     */
    public function getUnit06Bonus10()
    {
        return $this->unit06Bonus10;
    }

    /**
     * Set unit06Bonus25
     *
     * @param string $unit06Bonus25
     *
     * @return dataUser
     */
    public function setUnit06Bonus25($unit06Bonus25)
    {
        $this->unit06Bonus25 = $unit06Bonus25;

        return $this;
    }

    /**
     * Get unit06Bonus25
     *
     * @return string
     */
    public function getUnit06Bonus25()
    {
        return $this->unit06Bonus25;
    }

    /**
     * Set unit06Bonus50
     *
     * @param string $unit06Bonus50
     *
     * @return dataUser
     */
    public function setUnit06Bonus50($unit06Bonus50)
    {
        $this->unit06Bonus50 = $unit06Bonus50;

        return $this;
    }

    /**
     * Get unit06Bonus50
     *
     * @return string
     */
    public function getUnit06Bonus50()
    {
        return $this->unit06Bonus50;
    }

    /**
     * Set unit06Bonus100
     *
     * @param string $unit06Bonus100
     *
     * @return dataUser
     */
    public function setUnit06Bonus100($unit06Bonus100)
    {
        $this->unit06Bonus100 = $unit06Bonus100;

        return $this;
    }

    /**
     * Get unit06Bonus100
     *
     * @return string
     */
    public function getUnit06Bonus100()
    {
        return $this->unit06Bonus100;
    }

    /**
     * Set unit06Bonus150
     *
     * @param string $unit06Bonus150
     *
     * @return dataUser
     */
    public function setUnit06Bonus150($unit06Bonus150)
    {
        $this->unit06Bonus150 = $unit06Bonus150;

        return $this;
    }

    /**
     * Get unit06Bonus150
     *
     * @return string
     */
    public function getUnit06Bonus150()
    {
        return $this->unit06Bonus150;
    }

    /**
     * Set unit06BonusD10
     *
     * @param string $unit06BonusD10
     *
     * @return dataUser
     */
    public function setUnit06BonusD10($unit06BonusD10)
    {
        $this->unit06BonusD10 = $unit06BonusD10;

        return $this;
    }

    /**
     * Get unit06BonusD10
     *
     * @return string
     */
    public function getUnit06BonusD10()
    {
        return $this->unit06BonusD10;
    }

    /**
     * Set unit06BonusD25
     *
     * @param string $unit06BonusD25
     *
     * @return dataUser
     */
    public function setUnit06BonusD25($unit06BonusD25)
    {
        $this->unit06BonusD25 = $unit06BonusD25;

        return $this;
    }

    /**
     * Get unit06BonusD25
     *
     * @return string
     */
    public function getUnit06BonusD25()
    {
        return $this->unit06BonusD25;
    }

    /**
     * Set unit06BonusD50
     *
     * @param string $unit06BonusD50
     *
     * @return dataUser
     */
    public function setUnit06BonusD50($unit06BonusD50)
    {
        $this->unit06BonusD50 = $unit06BonusD50;

        return $this;
    }

    /**
     * Get unit06BonusD50
     *
     * @return string
     */
    public function getUnit06BonusD50()
    {
        return $this->unit06BonusD50;
    }

    /**
     * Set unit06BonusD100
     *
     * @param string $unit06BonusD100
     *
     * @return dataUser
     */
    public function setUnit06BonusD100($unit06BonusD100)
    {
        $this->unit06BonusD100 = $unit06BonusD100;

        return $this;
    }

    /**
     * Get unit06BonusD100
     *
     * @return string
     */
    public function getUnit06BonusD100()
    {
        return $this->unit06BonusD100;
    }

    /**
     * Set unit06BonusD150
     *
     * @param string $unit06BonusD150
     *
     * @return dataUser
     */
    public function setUnit06BonusD150($unit06BonusD150)
    {
        $this->unit06BonusD150 = $unit06BonusD150;

        return $this;
    }

    /**
     * Get unit06BonusD150
     *
     * @return string
     */
    public function getUnit06BonusD150()
    {
        return $this->unit06BonusD150;
    }

    /**
     * Set unit06GlobalBonus
     *
     * @param integer $unit06GlobalBonus
     *
     * @return dataUser
     */
    public function setUnit06GlobalBonus($unit06GlobalBonus)
    {
        $this->unit06GlobalBonus = $unit06GlobalBonus;

        return $this;
    }

    /**
     * Get unit06GlobalBonus
     *
     * @return integer
     */
    public function getUnit06GlobalBonus()
    {
        return $this->unit06GlobalBonus;
    }

    /**
     * Set unit06GlobalDmgBonus
     *
     * @param integer $unit06GlobalDmgBonus
     *
     * @return dataUser
     */
    public function setUnit06GlobalDmgBonus($unit06GlobalDmgBonus)
    {
        $this->unit06GlobalDmgBonus = $unit06GlobalDmgBonus;

        return $this;
    }

    /**
     * Get unit06GlobalDmgBonus
     *
     * @return integer
     */
    public function getUnit06GlobalDmgBonus()
    {
        return $this->unit06GlobalDmgBonus;
    }
}
