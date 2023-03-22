<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderUserTaskRepresentation
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
     * @var int
     */
    protected $taskId;
    /**
     * 
     *
     * @var string
     */
    protected $text;
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
     * @var int
     */
    protected $reminderMinutes;
    /**
     * 
     *
     * @var bool
     */
    protected $complete;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $owner;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $assignedTo;
    /**
     * 
     *
     * @var UserNameModel[]
     */
    protected $assignees;
    /**
     * 
     *
     * @var JobOrderTitleModel[]
     */
    protected $jobs;
    /**
     * 
     *
     * @var RequisitionSummaryModel[]
     */
    protected $requisitions;
    /**
     * 
     *
     * @var CandidateNameModel[]
     */
    protected $candidates;
    /**
     * 
     *
     * @var JobApplicationSummaryModel[]
     */
    protected $applications;
    /**
     * 
     *
     * @var PlacementSummaryModel[]
     */
    protected $placements;
    /**
     * 
     *
     * @var CompanyNameModel[]
     */
    protected $companies;
    /**
     * 
     *
     * @var ContactNameModel[]
     */
    protected $contacts;
    /**
     * 
     *
     * @var int
     */
    protected $jobId;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $createdBy;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $updatedBy;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var UserTaskLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getTaskId() : int
    {
        return $this->taskId;
    }
    /**
     * 
     *
     * @param int $taskId
     *
     * @return self
     */
    public function setTaskId(int $taskId) : self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
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
     * @return int
     */
    public function getReminderMinutes() : int
    {
        return $this->reminderMinutes;
    }
    /**
     * 
     *
     * @param int $reminderMinutes
     *
     * @return self
     */
    public function setReminderMinutes(int $reminderMinutes) : self
    {
        $this->initialized['reminderMinutes'] = true;
        $this->reminderMinutes = $reminderMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getComplete() : bool
    {
        return $this->complete;
    }
    /**
     * 
     *
     * @param bool $complete
     *
     * @return self
     */
    public function setComplete(bool $complete) : self
    {
        $this->initialized['complete'] = true;
        $this->complete = $complete;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getOwner() : UserNameModel
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param UserNameModel $owner
     *
     * @return self
     */
    public function setOwner(UserNameModel $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getAssignedTo() : UserNameModel
    {
        return $this->assignedTo;
    }
    /**
     * 
     *
     * @param UserNameModel $assignedTo
     *
     * @return self
     */
    public function setAssignedTo(UserNameModel $assignedTo) : self
    {
        $this->initialized['assignedTo'] = true;
        $this->assignedTo = $assignedTo;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel[]
     */
    public function getAssignees() : array
    {
        return $this->assignees;
    }
    /**
     * 
     *
     * @param UserNameModel[] $assignees
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
     * @return JobOrderTitleModel[]
     */
    public function getJobs() : array
    {
        return $this->jobs;
    }
    /**
     * 
     *
     * @param JobOrderTitleModel[] $jobs
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
     * @return RequisitionSummaryModel[]
     */
    public function getRequisitions() : array
    {
        return $this->requisitions;
    }
    /**
     * 
     *
     * @param RequisitionSummaryModel[] $requisitions
     *
     * @return self
     */
    public function setRequisitions(array $requisitions) : self
    {
        $this->initialized['requisitions'] = true;
        $this->requisitions = $requisitions;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateNameModel[]
     */
    public function getCandidates() : array
    {
        return $this->candidates;
    }
    /**
     * 
     *
     * @param CandidateNameModel[] $candidates
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
     * @return JobApplicationSummaryModel[]
     */
    public function getApplications() : array
    {
        return $this->applications;
    }
    /**
     * 
     *
     * @param JobApplicationSummaryModel[] $applications
     *
     * @return self
     */
    public function setApplications(array $applications) : self
    {
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
    /**
     * 
     *
     * @return PlacementSummaryModel[]
     */
    public function getPlacements() : array
    {
        return $this->placements;
    }
    /**
     * 
     *
     * @param PlacementSummaryModel[] $placements
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
     * @return CompanyNameModel[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param CompanyNameModel[] $companies
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
     * @return ContactNameModel[]
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param ContactNameModel[] $contacts
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
     * @return int
     */
    public function getJobId() : int
    {
        return $this->jobId;
    }
    /**
     * 
     *
     * @param int $jobId
     *
     * @return self
     */
    public function setJobId(int $jobId) : self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getCreatedBy() : UserNameModel
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param UserNameModel $createdBy
     *
     * @return self
     */
    public function setCreatedBy(UserNameModel $createdBy) : self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getUpdatedBy() : UserNameModel
    {
        return $this->updatedBy;
    }
    /**
     * 
     *
     * @param UserNameModel $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(UserNameModel $updatedBy) : self
    {
        $this->initialized['updatedBy'] = true;
        $this->updatedBy = $updatedBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return UserTaskLinks
     */
    public function getLinks() : UserTaskLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param UserTaskLinks $links
     *
     * @return self
     */
    public function setLinks(UserTaskLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}