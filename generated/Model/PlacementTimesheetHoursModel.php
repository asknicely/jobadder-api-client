<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetHoursModel
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
        $this->initialized['date'] = true;
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
        $this->initialized['type'] = true;
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
        $this->initialized['hours'] = true;
        $this->hours = $hours;
        return $this;
    }
}