<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderFeeModel
{
    /**
     * 
     *
     * @var string
     */
    protected $rateType;
    /**
     * 
     *
     * @var float
     */
    protected $rate;
    /**
     * 
     *
     * @var float
     */
    protected $estimatedTotal;
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @return string
     */
    public function getRateType() : string
    {
        return $this->rateType;
    }
    /**
     * 
     *
     * @param string $rateType
     *
     * @return self
     */
    public function setRateType(string $rateType) : self
    {
        $this->rateType = $rateType;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRate() : float
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate(float $rate) : self
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEstimatedTotal() : float
    {
        return $this->estimatedTotal;
    }
    /**
     * 
     *
     * @param float $estimatedTotal
     *
     * @return self
     */
    public function setEstimatedTotal(float $estimatedTotal) : self
    {
        $this->estimatedTotal = $estimatedTotal;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
}