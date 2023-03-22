<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitPlacementSalaryModel
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
     * @var float
     */
    protected $base;
    /**
     * 
     *
     * @var float
     */
    protected $superannuation;
    /**
     * 
     *
     * @var float
     */
    protected $total;
    /**
     * 
     *
     * @var float
     */
    protected $fee;
    /**
     * 
     *
     * @return float
     */
    public function getBase() : float
    {
        return $this->base;
    }
    /**
     * 
     *
     * @param float $base
     *
     * @return self
     */
    public function setBase(float $base) : self
    {
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSuperannuation() : float
    {
        return $this->superannuation;
    }
    /**
     * 
     *
     * @param float $superannuation
     *
     * @return self
     */
    public function setSuperannuation(float $superannuation) : self
    {
        $this->initialized['superannuation'] = true;
        $this->superannuation = $superannuation;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotal() : float
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param float $total
     *
     * @return self
     */
    public function setTotal(float $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFee() : float
    {
        return $this->fee;
    }
    /**
     * 
     *
     * @param float $fee
     *
     * @return self
     */
    public function setFee(float $fee) : self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
        return $this;
    }
}