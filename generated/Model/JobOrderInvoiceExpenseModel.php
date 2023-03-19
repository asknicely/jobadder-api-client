<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceExpenseModel
{
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
        $this->description = $description;
        return $this;
    }
}