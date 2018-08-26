<?php

namespace IdleGameBundle\Entity;

/**
 * categoriesForum
 */
class categoriesForum
{
    /**
     * @var string
     */
    private $labelCategorie;

    /**
     * @var string
     */
    private $isPrivate;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set labelCategorie
     *
     * @param string $labelCategorie
     *
     * @return categoriesForum
     */
    public function setLabelCategorie($labelCategorie)
    {
        $this->labelCategorie = $labelCategorie;

        return $this;
    }

    /**
     * Get labelCategorie
     *
     * @return string
     */
    public function getLabelCategorie()
    {
        return $this->labelCategorie;
    }

    /**
     * Set isPrivate
     *
     * @param string $isPrivate
     *
     * @return categoriesForum
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return string
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
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
