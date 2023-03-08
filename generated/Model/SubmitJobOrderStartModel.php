<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitJobOrderStartModel
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
        $this->initialized['immediate'] = true;
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
        $this->initialized['relative'] = true;
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
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
}