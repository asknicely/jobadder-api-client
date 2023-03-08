<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetTimeModel
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
     * @var string
     */
    protected $start;
    /**
     * 
     *
     * @var string
     */
    protected $end;
    /**
     * 
     *
     * @var string
     */
    protected $break;
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
     * @return string
     */
    public function getStart() : string
    {
        return $this->start;
    }
    /**
     * 
     *
     * @param string $start
     *
     * @return self
     */
    public function setStart(string $start) : self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnd() : string
    {
        return $this->end;
    }
    /**
     * 
     *
     * @param string $end
     *
     * @return self
     */
    public function setEnd(string $end) : self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBreak() : string
    {
        return $this->break;
    }
    /**
     * 
     *
     * @param string $break
     *
     * @return self
     */
    public function setBreak(string $break) : self
    {
        $this->initialized['break'] = true;
        $this->break = $break;
        return $this;
    }
}