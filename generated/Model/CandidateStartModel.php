<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateStartModel
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
     * @var bool
     */
    protected $immediate;
    /**
     * 
     *
     * @var RelativeStartModel
     */
    protected $relative;
    /**
     * The specific date that a job starts or a candidate is available
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
        $this->initialized['immediate'] = true;
        $this->immediate = $immediate;
        return $this;
    }
    /**
     * 
     *
     * @return RelativeStartModel
     */
    public function getRelative() : RelativeStartModel
    {
        return $this->relative;
    }
    /**
     * 
     *
     * @param RelativeStartModel $relative
     *
     * @return self
     */
    public function setRelative(RelativeStartModel $relative) : self
    {
        $this->initialized['relative'] = true;
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
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
}