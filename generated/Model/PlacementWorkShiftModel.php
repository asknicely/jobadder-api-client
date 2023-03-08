<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementWorkShiftModel
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
    protected $startTime;
    /**
     * 
     *
     * @var string
     */
    protected $endTime;
    /**
     * 
     *
     * @var string[]
     */
    protected $workDays;
    /**
     * 
     *
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * 
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime) : self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEndTime() : string
    {
        return $this->endTime;
    }
    /**
     * 
     *
     * @param string $endTime
     *
     * @return self
     */
    public function setEndTime(string $endTime) : self
    {
        $this->initialized['endTime'] = true;
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWorkDays() : array
    {
        return $this->workDays;
    }
    /**
     * 
     *
     * @param string[] $workDays
     *
     * @return self
     */
    public function setWorkDays(array $workDays) : self
    {
        $this->initialized['workDays'] = true;
        $this->workDays = $workDays;
        return $this;
    }
}