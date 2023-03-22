<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitJobOrderSalaryRangeModel
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
    * Number of days per week for a daily rate,
    hours per day for an hourly rate with a 'Day' duration unit or
    hours per day for an hourly rate with a 'Week' duration unit.
    *
    * @var float
    */
    protected $timePerWeek;
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
    /**
    * Number of days per week for a daily rate,
    hours per day for an hourly rate with a 'Day' duration unit or
    hours per day for an hourly rate with a 'Week' duration unit.
    *
    * @return float
    */
    public function getTimePerWeek() : float
    {
        return $this->timePerWeek;
    }
    /**
    * Number of days per week for a daily rate,
    hours per day for an hourly rate with a 'Day' duration unit or
    hours per day for an hourly rate with a 'Week' duration unit.
    *
    * @param float $timePerWeek
    *
    * @return self
    */
    public function setTimePerWeek(float $timePerWeek) : self
    {
        $this->initialized['timePerWeek'] = true;
        $this->timePerWeek = $timePerWeek;
        return $this;
    }
}