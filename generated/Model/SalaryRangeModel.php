<?php

namespace Varspool\JobAdder\V2\Model;

class SalaryRangeModel
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
    protected $rateLow;
    /**
     * 
     *
     * @var float
     */
    protected $rateHigh;
    /**
     * Optional ISO 4217 3-letter alphabetic currency code
     *
     * @var string
     */
    protected $currency;
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
        $this->initialized['rateLow'] = true;
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
        $this->initialized['rateHigh'] = true;
        $this->rateHigh = $rateHigh;
        return $this;
    }
    /**
     * Optional ISO 4217 3-letter alphabetic currency code
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Optional ISO 4217 3-letter alphabetic currency code
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}