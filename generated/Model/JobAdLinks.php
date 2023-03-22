<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdLinks
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
     * Job
     *
     * @var string
     */
    protected $job;
    /**
     * Company
     *
     * @var string
     */
    protected $company;
    /**
     * Contact
     *
     * @var string
     */
    protected $contact;
    /**
     * Job applications
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
     * Job
     *
     * @return string
     */
    public function getJob() : string
    {
        return $this->job;
    }
    /**
     * Job
     *
     * @param string $job
     *
     * @return self
     */
    public function setJob(string $job) : self
    {
        $this->initialized['job'] = true;
        $this->job = $job;
        return $this;
    }
    /**
     * Company
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * Company
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * Contact
     *
     * @return string
     */
    public function getContact() : string
    {
        return $this->contact;
    }
    /**
     * Contact
     *
     * @param string $contact
     *
     * @return self
     */
    public function setContact(string $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Job applications
     *
     * @return string
     */
    public function getApplications() : string
    {
        return $this->applications;
    }
    /**
     * Job applications
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