<?php

namespace Bio\BiodataBundle\Entity;

/**
 * Personal
 */
class Personal
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $gender;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $height;

    /**
     * @var int
     */
    private $scolarity;

    /**
     * @var \DateTime
     */
    private $birthdate;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gender.
     *
     * @param bool $gender
     *
     * @return Personal
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return bool
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set weight.
     *
     * @param float $weight
     *
     * @return Personal
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight.
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height.
     *
     * @param float $height
     *
     * @return Personal
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height.
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set scolarity.
     *
     * @param int $scolarity
     *
     * @return Personal
     */
    public function setScolarity($scolarity)
    {
        $this->scolarity = $scolarity;

        return $this;
    }

    /**
     * Get scolarity.
     *
     * @return int
     */
    public function getScolarity()
    {
        return $this->scolarity;
    }

    /**
     * Set birthdate.
     *
     * @param \DateTime $birthdate
     *
     * @return Personal
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate.
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
}
