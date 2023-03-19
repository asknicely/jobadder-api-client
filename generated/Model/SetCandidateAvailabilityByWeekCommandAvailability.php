<?php

namespace Varspool\JobAdder\V2\Model;

class SetCandidateAvailabilityByWeekCommandAvailability
{
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
        $this->saturday = $saturday;
        return $this;
    }
}