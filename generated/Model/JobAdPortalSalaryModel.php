<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdPortalSalaryModel
{
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
    protected $rateLow;
    /**
     * 
     *
     * @var float
     */
    protected $rateHigh;
    /**
     * 
     *
     * @var string
     */
    protected $details;
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
        $this->ratePer = $ratePer;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRateLow() : float
    {
        return $this->rateLow;
    }
    /**
     * 
     *
     * @param float $rateLow
     *
     * @return self
     */
    public function setRateLow(float $rateLow) : self
    {
        $this->rateLow = $rateLow;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRateHigh() : float
    {
        return $this->rateHigh;
    }
    /**
     * 
     *
     * @param float $rateHigh
     *
     * @return self
     */
    public function setRateHigh(float $rateHigh) : self
    {
        $this->rateHigh = $rateHigh;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDetails() : string
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param string $details
     *
     * @return self
     */
    public function setDetails(string $details) : self
    {
        $this->details = $details;
        return $this;
    }
}