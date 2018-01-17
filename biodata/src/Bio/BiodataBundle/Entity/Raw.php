<?php

namespace Bio\BiodataBundle\Entity;

/**
 * Raw
 */
class Raw
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $day;

    /**
     * @var \DateTime
     */
    private $duration;

    /**
     * @var float
     */
    private $baseline;

    /**
     * @var float
     */
    private $hEGLevel;

    /**
     * @var float
     */
    private $hEGAve;

    /**
     * @var float
     */
    private $hEGMax;

    /**
     * @var float
     */
    private $gain;

    /**
     * @var float
     */
    private $normedGain;

    /**
     * @var float
     */
    private $maxGain;

    /**
     * @var float
     */
    private $timeAboveBase;

    /**
     * @var float
     */
    private $percentSucess;

    /**
     * @var float
     */
    private $event;

    /**
     * @var bool
     */
    private $eyes;


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
     * Set day.
     *
     * @param \DateTime $day
     *
     * @return Raw
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day.
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set duration.
     *
     * @param \DateTime $duration
     *
     * @return Raw
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return \DateTime
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set baseline.
     *
     * @param float $baseline
     *
     * @return Raw
     */
    public function setBaseline($baseline)
    {
        $this->baseline = $baseline;

        return $this;
    }

    /**
     * Get baseline.
     *
     * @return float
     */
    public function getBaseline()
    {
        return $this->baseline;
    }

    /**
     * Set hEGLevel.
     *
     * @param float $hEGLevel
     *
     * @return Raw
     */
    public function setHEGLevel($hEGLevel)
    {
        $this->hEGLevel = $hEGLevel;

        return $this;
    }

    /**
     * Get hEGLevel.
     *
     * @return float
     */
    public function getHEGLevel()
    {
        return $this->hEGLevel;
    }

    /**
     * Set hEGAve.
     *
     * @param float $hEGAve
     *
     * @return Raw
     */
    public function setHEGAve($hEGAve)
    {
        $this->hEGAve = $hEGAve;

        return $this;
    }

    /**
     * Get hEGAve.
     *
     * @return float
     */
    public function getHEGAve()
    {
        return $this->hEGAve;
    }

    /**
     * Set hEGMax.
     *
     * @param float $hEGMax
     *
     * @return Raw
     */
    public function setHEGMax($hEGMax)
    {
        $this->hEGMax = $hEGMax;

        return $this;
    }

    /**
     * Get hEGMax.
     *
     * @return float
     */
    public function getHEGMax()
    {
        return $this->hEGMax;
    }

    /**
     * Set gain.
     *
     * @param float $gain
     *
     * @return Raw
     */
    public function setGain($gain)
    {
        $this->gain = $gain;

        return $this;
    }

    /**
     * Get gain.
     *
     * @return float
     */
    public function getGain()
    {
        return $this->gain;
    }

    /**
     * Set normedGain.
     *
     * @param float $normedGain
     *
     * @return Raw
     */
    public function setNormedGain($normedGain)
    {
        $this->normedGain = $normedGain;

        return $this;
    }

    /**
     * Get normedGain.
     *
     * @return float
     */
    public function getNormedGain()
    {
        return $this->normedGain;
    }

    /**
     * Set maxGain.
     *
     * @param float $maxGain
     *
     * @return Raw
     */
    public function setMaxGain($maxGain)
    {
        $this->maxGain = $maxGain;

        return $this;
    }

    /**
     * Get maxGain.
     *
     * @return float
     */
    public function getMaxGain()
    {
        return $this->maxGain;
    }

    /**
     * Set timeAboveBase.
     *
     * @param float $timeAboveBase
     *
     * @return Raw
     */
    public function setTimeAboveBase($timeAboveBase)
    {
        $this->timeAboveBase = $timeAboveBase;

        return $this;
    }

    /**
     * Get timeAboveBase.
     *
     * @return float
     */
    public function getTimeAboveBase()
    {
        return $this->timeAboveBase;
    }

    /**
     * Set percentSucess.
     *
     * @param float $percentSucess
     *
     * @return Raw
     */
    public function setPercentSucess($percentSucess)
    {
        $this->percentSucess = $percentSucess;

        return $this;
    }

    /**
     * Get percentSucess.
     *
     * @return float
     */
    public function getPercentSucess()
    {
        return $this->percentSucess;
    }

    /**
     * Set event.
     *
     * @param float $event
     *
     * @return Raw
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event.
     *
     * @return float
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set eyes.
     *
     * @param bool $eyes
     *
     * @return Raw
     */
    public function setEyes($eyes)
    {
        $this->eyes = $eyes;

        return $this;
    }

    /**
     * Get eyes.
     *
     * @return bool
     */
    public function getEyes()
    {
        return $this->eyes;
    }
}
