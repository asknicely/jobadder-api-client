<?php

namespace Varspool\JobAdder\V2\Model;

class AddCandidateUserTaskCommand
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
    protected $title;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $startAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $endAt;
    /**
     * 
     *
     * @var bool
     */
    protected $allDay;
    /**
     * 
     *
     * @var int[]
     */
    protected $assignees;
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * 
     *
     * @var int[]
     */
    protected $candidates;
    /**
     * 
     *
     * @var int[]
     */
    protected $jobs;
    /**
     * 
     *
     * @var int[]
     */
    protected $placements;
    /**
     * 
     *
     * @var int[]
     */
    protected $companies;
    /**
     * 
     *
     * @var int[]
     */
    protected $contacts;
    /**
     * 
     *
     * @var int[]
     */
    protected $applications;
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStartAt() : \DateTime
    {
        return $this->startAt;
    }
    /**
     * 
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
     * 
     *
     * @return \DateTime
     */
    public function getEndAt() : \DateTime
    {
        return $this->endAt;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return bool
     */
    public function getAllDay() : bool
    {
        return $this->allDay;
    }
    /**
     * 
     *
     * @param bool $allDay
     *
     * @return self
     */
    public function setAllDay(bool $allDay) : self
    {
        $this->initialized['allDay'] = true;
        $this->allDay = $allDay;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getAssignees() : array
    {
        return $this->assignees;
    }
    /**
     * 
     *
     * @param int[] $assignees
     *
     * @return self
     */
    public function setAssignees(array $assignees) : self
    {
        $this->initialized['assignees'] = true;
        $this->assignees = $assignees;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getCandidates() : array
    {
        return $this->candidates;
    }
    /**
     * 
     *
     * @param int[] $candidates
     *
     * @return self
     */
    public function setCandidates(array $candidates) : self
    {
        $this->initialized['candidates'] = true;
        $this->candidates = $candidates;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getJobs() : array
    {
        return $this->jobs;
    }
    /**
     * 
     *
     * @param int[] $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs) : self
    {
        $this->initialized['jobs'] = true;
        $this->jobs = $jobs;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getPlacements() : array
    {
        return $this->placements;
    }
    /**
     * 
     *
     * @param int[] $placements
     *
     * @return self
     */
    public function setPlacements(array $placements) : self
    {
        $this->initialized['placements'] = true;
        $this->placements = $placements;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param int[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param int[] $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts) : self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getApplications() : array
    {
        return $this->applications;
    }
    /**
     * 
     *
     * @param int[] $applications
     *
     * @return self
     */
    public function setApplications(array $applications) : self
    {
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
}