<?php

namespace Bio\BiodataBundle\Entity;

/**
 * PsychEvalFreq
 */
class PsychEvalFreq
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
    private $frequency;

    /**
     * @var int
     */
    private $sns;

    /**
     * @var int
     */
    private $pns;


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
     * @return PsychEvalFreq
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
     * @return PsychEvalFreq
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
     * @return PsychEvalFreq
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
     * @return PsychEvalFreq
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
     * Set frequency.
     *
     * @param array $frequency
     *
     * @return PsychEvalFreq
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency.
     *
     * @return array
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set sns.
     *
     * @param int $sns
     *
     * @return PsychEvalFreq
     */
    public function setSns($sns)
    {
        $this->sns = $sns;

        return $this;
    }

    /**
     * Get sns.
     *
     * @return int
     */
    public function getSns()
    {
        return $this->sns;
    }

    /**
     * Set pns.
     *
     * @param int $pns
     *
     * @return PsychEvalFreq
     */
    public function setPns($pns)
    {
        $this->pns = $pns;

        return $this;
    }

    /**
     * Get pns.
     *
     * @return int
     */
    public function getPns()
    {
        return $this->pns;
    }
}
