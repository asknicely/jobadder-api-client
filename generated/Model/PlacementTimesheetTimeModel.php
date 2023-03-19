<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetTimeModel
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
        $this->break = $break;
        return $this;
    }
}