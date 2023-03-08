<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitPlacementContractRateModel
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $ratePer;
    /**
     * 
     *
     * @var float
     */
    protected $hoursPerWeek;
    /**
     * 
     *
     * @var float
     */
    protected $daysPerWeek;
    /**
     * 
     *
     * @var float
     */
    protected $clientRate;
    /**
     * 
     *
     * @var float
     */
    protected $candidateRate;
    /**
     * 
     *
     * @var string
     */
    protected $onCostsType;
    /**
     * 
     *
     * @var float
     */
    protected $onCosts;
    /**
     * 
     *
     * @var float
     */
    protected $netMargin;
    /**
     * 
     *
     * @return string
     */
    public function getRatePer() : string
    {
        return $this->ratePer;
    }
    /**
     * 
     *
     * @param string $ratePer
     *
     * @return self
     */
    public function setRatePer(string $ratePer) : self
    {
        $this->initialized['ratePer'] = true;
        $this->ratePer = $ratePer;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHoursPerWeek() : float
    {
        return $this->hoursPerWeek;
    }
    /**
     * 
     *
     * @param float $hoursPerWeek
     *
     * @return self
     */
    public function setHoursPerWeek(float $hoursPerWeek) : self
    {
        $this->initialized['hoursPerWeek'] = true;
        $this->hoursPerWeek = $hoursPerWeek;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDaysPerWeek() : float
    {
        return $this->daysPerWeek;
    }
    /**
     * 
     *
     * @param float $daysPerWeek
     *
     * @return self
     */
    public function setDaysPerWeek(float $daysPerWeek) : self
    {
        $this->initialized['daysPerWeek'] = true;
        $this->daysPerWeek = $daysPerWeek;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getClientRate() : float
    {
        return $this->clientRate;
    }
    /**
     * 
     *
     * @param float $clientRate
     *
     * @return self
     */
    public function setClientRate(float $clientRate) : self
    {
        $this->initialized['clientRate'] = true;
        $this->clientRate = $clientRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCandidateRate() : float
    {
        return $this->candidateRate;
    }
    /**
     * 
     *
     * @param float $candidateRate
     *
     * @return self
     */
    public function setCandidateRate(float $candidateRate) : self
    {
        $this->initialized['candidateRate'] = true;
        $this->candidateRate = $candidateRate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOnCostsType() : string
    {
        return $this->onCostsType;
    }
    /**
     * 
     *
     * @param string $onCostsType
     *
     * @return self
     */
    public function setOnCostsType(string $onCostsType) : self
    {
        $this->initialized['onCostsType'] = true;
        $this->onCostsType = $onCostsType;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOnCosts() : float
    {
        return $this->onCosts;
    }
    /**
     * 
     *
     * @param float $onCosts
     *
     * @return self
     */
    public function setOnCosts(float $onCosts) : self
    {
        $this->initialized['onCosts'] = true;
        $this->onCosts = $onCosts;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNetMargin() : float
    {
        return $this->netMargin;
    }
    /**
     * 
     *
     * @param float $netMargin
     *
     * @return self
     */
    public function setNetMargin(float $netMargin) : self
    {
        $this->initialized['netMargin'] = true;
        $this->netMargin = $netMargin;
        return $this;
    }
}