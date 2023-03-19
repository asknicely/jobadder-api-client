<?php

namespace Varspool\JobAdder\V2\Model;

class DateRangeModel
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $start;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $end;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStart() : \DateTime
    {
        return $this->start;
    }
    /**
     * 
     *
     * @param \DateTime $start
     *
     * @return self
     */
    public function setStart(\DateTime $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEnd() : \DateTime
    {
        return $this->end;
    }
    /**
     * 
     *
     * @param \DateTime $end
     *
     * @return self
     */
    public function setEnd(\DateTime $end) : self
    {
        $this->end = $end;
        return $this;
    }
}