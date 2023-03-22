<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceExpenseModel
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
    protected $cost;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @return float
     */
    public function getCost() : float
    {
        return $this->cost;
    }
    /**
     * 
     *
     * @param float $cost
     *
     * @return self
     */
    public function setCost(float $cost) : self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}