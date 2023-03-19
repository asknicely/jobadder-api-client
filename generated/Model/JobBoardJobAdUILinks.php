<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardJobAdUILinks
{
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
        $this->applications = $applications;
        return $this;
    }
}