<?php

namespace Varspool\JobAdder\V2\Model;

class SetCandidateAvailabilityByWeekCommandAvailability
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
     * @var TimeRangeModel[]
     */
    protected $sunday;
    /**
     * 
     *
     * @var TimeRangeModel[]
     */
    protected $monday;
    /**
     * 
     *
     * @var TimeRangeModel[]
     */
    protected $tuesday;
    /**
     * 
     *
     * @var TimeRangeModel[]
     */
    protected $wednesday;
    /**
     * 
     *
     * @var TimeRangeModel[]
     */
    protected $thursday;
    /**
     * 
     *
     * @var TimeRangeModel[]
     */
    protected $friday;
    /**
     * 
     *
     * @var TimeRangeModel[]
     */
    protected $saturday;
    /**
     * 
     *
     * @return TimeRangeModel[]
     */
    public function getSunday() : array
    {
        return $this->sunday;
    }
    /**
     * 
     *
     * @param TimeRangeModel[] $sunday
     *
     * @return self
     */
    public function setSunday(array $sunday) : self
    {
        $this->initialized['sunday'] = true;
        $this->sunday = $sunday;
        return $this;
    }
    /**
     * 
     *
     * @return TimeRangeModel[]
     */
    public function getMonday() : array
    {
        return $this->monday;
    }
    /**
     * 
     *
     * @param TimeRangeModel[] $monday
     *
     * @return self
     */
    public function setMonday(array $monday) : self
    {
        $this->initialized['monday'] = true;
        $this->monday = $monday;
        return $this;
    }
    /**
     * 
     *
     * @return TimeRangeModel[]
     */
    public function getTuesday() : array
    {
        return $this->tuesday;
    }
    /**
     * 
     *
     * @param TimeRangeModel[] $tuesday
     *
     * @return self
     */
    public function setTuesday(array $tuesday) : self
    {
        $this->initialized['tuesday'] = true;
        $this->tuesday = $tuesday;
        return $this;
    }
    /**
     * 
     *
     * @return TimeRangeModel[]
     */
    public function getWednesday() : array
    {
        return $this->wednesday;
    }
    /**
     * 
     *
     * @param TimeRangeModel[] $wednesday
     *
     * @return self
     */
    public function setWednesday(array $wednesday) : self
    {
        $this->initialized['wednesday'] = true;
        $this->wednesday = $wednesday;
        return $this;
    }
    /**
     * 
     *
     * @return TimeRangeModel[]
     */
    public function getThursday() : array
    {
        return $this->thursday;
    }
    /**
     * 
     *
     * @param TimeRangeModel[] $thursday
     *
     * @return self
     */
    public function setThursday(array $thursday) : self
    {
        $this->initialized['thursday'] = true;
        $this->thursday = $thursday;
        return $this;
    }
    /**
     * 
     *
     * @return TimeRangeModel[]
     */
    public function getFriday() : array
    {
        return $this->friday;
    }
    /**
     * 
     *
     * @param TimeRangeModel[] $friday
     *
     * @return self
     */
    public function setFriday(array $friday) : self
    {
        $this->initialized['friday'] = true;
        $this->friday = $friday;
        return $this;
    }
    /**
     * 
     *
     * @return TimeRangeModel[]
     */
    public function getSaturday() : array
    {
        return $this->saturday;
    }
    /**
     * 
     *
     * @param TimeRangeModel[] $saturday
     *
     * @return self
     */
    public function setSaturday(array $saturday) : self
    {
        $this->initialized['saturday'] = true;
        $this->saturday = $saturday;
        return $this;
    }
}