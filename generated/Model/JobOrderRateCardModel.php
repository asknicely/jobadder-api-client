<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderRateCardModel
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
     * @var int
     */
    protected $jobOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $rateCard;
    /**
     * 
     *
     * @return int
     */
    public function getJobOrderId() : int
    {
        return $this->jobOrderId;
    }
    /**
     * 
     *
     * @param int $jobOrderId
     *
     * @return self
     */
    public function setJobOrderId(int $jobOrderId) : self
    {
        $this->initialized['jobOrderId'] = true;
        $this->jobOrderId = $jobOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRateCard() : string
    {
        return $this->rateCard;
    }
    /**
     * 
     *
     * @param string $rateCard
     *
     * @return self
     */
    public function setRateCard(string $rateCard) : self
    {
        $this->initialized['rateCard'] = true;
        $this->rateCard = $rateCard;
        return $this;
    }
}