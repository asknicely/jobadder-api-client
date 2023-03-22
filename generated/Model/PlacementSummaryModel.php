<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementSummaryModel
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
    protected $placementId;
    /**
     * 
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var JobOrderTitleModel
     */
    protected $job;
    /**
     * 
     *
     * @var CandidatePlacementModel
     */
    protected $candidate;
    /**
     * 
     *
     * @var bool
     */
    protected $approved;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $approvedAt;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $status;
    /**
     * Date employment begins
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * Date a contract or temporary employment ends
     *
     * @var \DateTime
     */
    protected $endDate;
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
     * @return int
     */
    public function getPlacementId() : int
    {
        return $this->placementId;
    }
    /**
     * 
     *
     * @param int $placementId
     *
     * @return self
     */
    public function setPlacementId(int $placementId) : self
    {
        $this->initialized['placementId'] = true;
        $this->placementId = $placementId;
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
     * @return JobOrderTitleModel
     */
    public function getJob() : JobOrderTitleModel
    {
        return $this->job;
    }
    /**
     * 
     *
     * @param JobOrderTitleModel $job
     *
     * @return self
     */
    public function setJob(JobOrderTitleModel $job) : self
    {
        $this->initialized['job'] = true;
        $this->job = $job;
        return $this;
    }
    /**
     * 
     *
     * @return CandidatePlacementModel
     */
    public function getCandidate() : CandidatePlacementModel
    {
        return $this->candidate;
    }
    /**
     * 
     *
     * @param CandidatePlacementModel $candidate
     *
     * @return self
     */
    public function setCandidate(CandidatePlacementModel $candidate) : self
    {
        $this->initialized['candidate'] = true;
        $this->candidate = $candidate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getApproved() : bool
    {
        return $this->approved;
    }
    /**
     * 
     *
     * @param bool $approved
     *
     * @return self
     */
    public function setApproved(bool $approved) : self
    {
        $this->initialized['approved'] = true;
        $this->approved = $approved;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getApprovedAt() : \DateTime
    {
        return $this->approvedAt;
    }
    /**
     * 
     *
     * @param \DateTime $approvedAt
     *
     * @return self
     */
    public function setApprovedAt(\DateTime $approvedAt) : self
    {
        $this->initialized['approvedAt'] = true;
        $this->approvedAt = $approvedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return StatusModel
     */
    public function getStatus() : StatusModel
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param StatusModel $status
     *
     * @return self
     */
    public function setStatus(StatusModel $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Date employment begins
     *
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * Date employment begins
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Date a contract or temporary employment ends
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * Date a contract or temporary employment ends
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
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
}