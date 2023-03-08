<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetDaysModel
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
     * @var bool
     */
    protected $halfDay;
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
     * @return bool
     */
    public function getHalfDay() : bool
    {
        return $this->halfDay;
    }
    /**
     * 
     *
     * @param bool $halfDay
     *
     * @return self
     */
    public function setHalfDay(bool $halfDay) : self
    {
        $this->initialized['halfDay'] = true;
        $this->halfDay = $halfDay;
        return $this;
    }
}