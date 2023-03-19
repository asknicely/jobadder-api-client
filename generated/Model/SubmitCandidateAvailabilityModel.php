<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCandidateAvailabilityModel
{
    /**
     * The candidate is available for an immediate start
     *
     * @var bool
     */
    protected $immediate;
    /**
     * 
     *
     * @var SubmitRelativeStartModel
     */
    protected $relative;
    /**
     * The specific date that a job starts or a candidate is available
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * The candidate is available for an immediate start
     *
     * @return bool
     */
    public function getImmediate() : bool
    {
        return $this->immediate;
    }
    /**
     * The candidate is available for an immediate start
     *
     * @param bool $immediate
     *
     * @return self
     */
    public function setImmediate(bool $immediate) : self
    {
        $this->immediate = $immediate;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitRelativeStartModel
     */
    public function getRelative() : SubmitRelativeStartModel
    {
        return $this->relative;
    }
    /**
     * 
     *
     * @param SubmitRelativeStartModel $relative
     *
     * @return self
     */
    public function setRelative(SubmitRelativeStartModel $relative) : self
    {
        $this->relative = $relative;
        return $this;
    }
    /**
     * The specific date that a job starts or a candidate is available
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * The specific date that a job starts or a candidate is available
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
}