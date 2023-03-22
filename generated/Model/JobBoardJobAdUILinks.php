<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardJobAdUILinks
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
     * @var string
     */
    protected $self;
    /**
     * 
     *
     * @var string
     */
    protected $applications;
    /**
     * 
     *
     * @return string
     */
    public function getSelf() : string
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApplications() : string
    {
        return $this->applications;
    }
    /**
     * 
     *
     * @param string $applications
     *
     * @return self
     */
    public function setApplications(string $applications) : self
    {
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
}