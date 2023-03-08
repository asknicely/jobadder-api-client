<?php

namespace Varspool\JobAdder\V2\Model;

class SubmissionRepresentation
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
    protected $submissionId;
    /**
     * 
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var CandidateSummaryModel
     */
    protected $candidate;
    /**
     * 
     *
     * @var CompanyNameModel
     */
    protected $company;
    /**
     * 
     *
     * @var JobOrderSummaryModel
     */
    protected $job;
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
     * @var string
     */
    protected $candidateSummary;
    /**
     * 
     *
     * @var JobApplicationSummaryModel
     */
    protected $application;
    /**
     * 
     *
     * @var ContactNameModel[]
     */
    protected $contacts;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $owner;
    /**
     * 
     *
     * @var SubmissionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getSubmissionId() : int
    {
        return $this->submissionId;
    }
    /**
     * 
     *
     * @param int $submissionId
     *
     * @return self
     */
    public function setSubmissionId(int $submissionId) : self
    {
        $this->initialized['submissionId'] = true;
        $this->submissionId = $submissionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJobTitle() : string
    {
        return $this->jobTitle;
    }
    /**
     * 
     *
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle(string $jobTitle) : self
    {
        $this->initialized['jobTitle'] = true;
        $this->jobTitle = $jobTitle;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateSummaryModel
     */
    public function getCandidate() : CandidateSummaryModel
    {
        return $this->candidate;
    }
    /**
     * 
     *
     * @param CandidateSummaryModel $candidate
     *
     * @return self
     */
    public function setCandidate(CandidateSummaryModel $candidate) : self
    {
        $this->initialized['candidate'] = true;
        $this->candidate = $candidate;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyNameModel
     */
    public function getCompany() : CompanyNameModel
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param CompanyNameModel $company
     *
     * @return self
     */
    public function setCompany(CompanyNameModel $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderSummaryModel
     */
    public function getJob() : JobOrderSummaryModel
    {
        return $this->job;
    }
    /**
     * 
     *
     * @param JobOrderSummaryModel $job
     *
     * @return self
     */
    public function setJob(JobOrderSummaryModel $job) : self
    {
        $this->initialized['job'] = true;
        $this->job = $job;
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
     * @return string
     */
    public function getCandidateSummary() : string
    {
        return $this->candidateSummary;
    }
    /**
     * 
     *
     * @param string $candidateSummary
     *
     * @return self
     */
    public function setCandidateSummary(string $candidateSummary) : self
    {
        $this->initialized['candidateSummary'] = true;
        $this->candidateSummary = $candidateSummary;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationSummaryModel
     */
    public function getApplication() : JobApplicationSummaryModel
    {
        return $this->application;
    }
    /**
     * 
     *
     * @param JobApplicationSummaryModel $application
     *
     * @return self
     */
    public function setApplication(JobApplicationSummaryModel $application) : self
    {
        $this->initialized['application'] = true;
        $this->application = $application;
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
     * @return SubmissionLinks
     */
    public function getLinks() : SubmissionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param SubmissionLinks $links
     *
     * @return self
     */
    public function setLinks(SubmissionLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}