<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateJobApplicationInterviewCommand
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
     * Interview start time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @var \DateTime
     */
    protected $startAt;
    /**
     * Interview end time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @var \DateTime
     */
    protected $endAt;
    /**
     * Interview start time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @return \DateTime
     */
    public function getStartAt() : \DateTime
    {
        return $this->startAt;
    }
    /**
     * Interview start time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @param \DateTime $startAt
     *
     * @return self
     */
    public function setStartAt(\DateTime $startAt) : self
    {
        $this->initialized['startAt'] = true;
        $this->startAt = $startAt;
        return $this;
    }
    /**
     * Interview end time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @return \DateTime
     */
    public function getEndAt() : \DateTime
    {
        return $this->endAt;
    }
    /**
     * Interview end time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @param \DateTime $endAt
     *
     * @return self
     */
    public function setEndAt(\DateTime $endAt) : self
    {
        $this->initialized['endAt'] = true;
        $this->endAt = $endAt;
        return $this;
    }
}