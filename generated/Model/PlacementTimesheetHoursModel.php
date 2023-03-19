<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetHoursModel
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * 
     *
     * @var mixed
     */
    protected $type;
    /**
     * 
     *
     * @var float
     */
    protected $hours;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHours() : float
    {
        return $this->hours;
    }
    /**
     * 
     *
     * @param float $hours
     *
     * @return self
     */
    public function setHours(float $hours) : self
    {
        $this->hours = $hours;
        return $this;
    }
}