<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitJobOrderStartModel
{
    /**
     * 
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
     * The specific date that the job starts
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * 
     *
     * @return bool
     */
    public function getImmediate() : bool
    {
        return $this->immediate;
    }
    /**
     * 
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
     * The specific date that the job starts
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * The specific date that the job starts
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