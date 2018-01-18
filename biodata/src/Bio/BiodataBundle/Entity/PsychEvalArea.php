<?php

namespace Bio\BiodataBundle\Entity;

/**
 * PsychEvalArea
 */
class PsychEvalArea
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $numberPositives;

    /**
     * @var int
     */
    private $percentPositives;

    /**
     * @var int
     */
    private $sumPositives;

    /**
     * @var int
     */
    private $percentSum;

    /**
     * @var array
     */
    private $area;


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
     * Set numberPositives.
     *
     * @param int $numberPositives
     *
     * @return PsychEvalArea
     */
    public function setNumberPositives($numberPositives)
    {
        $this->numberPositives = $numberPositives;

        return $this;
    }

    /**
     * Get numberPositives.
     *
     * @return int
     */
    public function getNumberPositives()
    {
        return $this->numberPositives;
    }

    /**
     * Set percentPositives.
     *
     * @param int $percentPositives
     *
     * @return PsychEvalArea
     */
    public function setPercentPositives($percentPositives)
    {
        $this->percentPositives = $percentPositives;

        return $this;
    }

    /**
     * Get percentPositives.
     *
     * @return int
     */
    public function getPercentPositives()
    {
        return $this->percentPositives;
    }

    /**
     * Set sumPositives.
     *
     * @param int $sumPositives
     *
     * @return PsychEvalArea
     */
    public function setSumPositives($sumPositives)
    {
        $this->sumPositives = $sumPositives;

        return $this;
    }

    /**
     * Get sumPositives.
     *
     * @return int
     */
    public function getSumPositives()
    {
        return $this->sumPositives;
    }

    /**
     * Set percentSum.
     *
     * @param int $percentSum
     *
     * @return PsychEvalArea
     */
    public function setPercentSum($percentSum)
    {
        $this->percentSum = $percentSum;

        return $this;
    }

    /**
     * Get percentSum.
     *
     * @return int
     */
    public function getPercentSum()
    {
        return $this->percentSum;
    }

    /**
     * Set area.
     *
     * @param array $area
     *
     * @return PsychEvalArea
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area.
     *
     * @return array
     */
    public function getArea()
    {
        return $this->area;
    }
}
