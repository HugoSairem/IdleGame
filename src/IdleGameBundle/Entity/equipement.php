<?php

namespace IdleGameBundle\Entity;

/**
 * equipement
 */
class equipement
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $degats;

    /**
     * @var string
     */
    private $degatsTarget;

    /**
     * @var integer
     */
    private $bonus;

    /**
     * @var string
     */
    private $bonusTarget;

    /**
     * @var integer
     */
    private $malus;

    /**
     * @var string
     */
    private $malusTarget;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IdleGameBundle\Entity\dataUser
     */
    private $data_user;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return equipement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return equipement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set degats
     *
     * @param integer $degats
     *
     * @return equipement
     */
    public function setDegats($degats)
    {
        $this->degats = $degats;

        return $this;
    }

    /**
     * Get degats
     *
     * @return integer
     */
    public function getDegats()
    {
        return $this->degats;
    }

    /**
     * Set degatsTarget
     *
     * @param string $degatsTarget
     *
     * @return equipement
     */
    public function setDegatsTarget($degatsTarget)
    {
        $this->degatsTarget = $degatsTarget;

        return $this;
    }

    /**
     * Get degatsTarget
     *
     * @return string
     */
    public function getDegatsTarget()
    {
        return $this->degatsTarget;
    }

    /**
     * Set bonus
     *
     * @param integer $bonus
     *
     * @return equipement
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return integer
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Set bonusTarget
     *
     * @param string $bonusTarget
     *
     * @return equipement
     */
    public function setBonusTarget($bonusTarget)
    {
        $this->bonusTarget = $bonusTarget;

        return $this;
    }

    /**
     * Get bonusTarget
     *
     * @return string
     */
    public function getBonusTarget()
    {
        return $this->bonusTarget;
    }

    /**
     * Set malus
     *
     * @param integer $malus
     *
     * @return equipement
     */
    public function setMalus($malus)
    {
        $this->malus = $malus;

        return $this;
    }

    /**
     * Get malus
     *
     * @return integer
     */
    public function getMalus()
    {
        return $this->malus;
    }

    /**
     * Set malusTarget
     *
     * @param string $malusTarget
     *
     * @return equipement
     */
    public function setMalusTarget($malusTarget)
    {
        $this->malusTarget = $malusTarget;

        return $this;
    }

    /**
     * Get malusTarget
     *
     * @return string
     */
    public function getMalusTarget()
    {
        return $this->malusTarget;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return equipement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return equipement
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
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
     * Set dataUser
     *
     * @param \IdleGameBundle\Entity\dataUser $dataUser
     *
     * @return equipement
     */
    public function setDataUser(\IdleGameBundle\Entity\dataUser $dataUser = null)
    {
        $this->data_user = $dataUser;

        return $this;
    }

    /**
     * Get dataUser
     *
     * @return \IdleGameBundle\Entity\dataUser
     */
    public function getDataUser()
    {
        return $this->data_user;
    }

    /**
     * @var boolean
     */
    private $isEquipped;


    /**
     * Set isEquipped
     *
     * @param boolean $isEquipped
     *
     * @return equipement
     */
    public function setIsEquipped($isEquipped)
    {
        $this->isEquipped = $isEquipped;

        return $this;
    }

    /**
     * Get isEquipped
     *
     * @return boolean
     */
    public function getIsEquipped()
    {
        return $this->isEquipped;
    }
    /**
     * @var string
     */
    private $time;


    /**
     * Set time
     *
     * @param string $time
     *
     * @return equipement
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}
