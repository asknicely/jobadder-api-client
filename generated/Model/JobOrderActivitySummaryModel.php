<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderActivitySummaryModel
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
    protected $activityId;
    /**
     * 
     *
     * @var string
     */
    protected $activityName;
    /**
     * 
     *
     * @var string
     */
    protected $activityType;
    /**
     * 
     *
     * @var string
     */
    protected $status;
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
     * @var int
     */
    protected $jobId;
    /**
     * 
     *
     * @return int
     */
    public function getActivityId() : int
    {
        return $this->activityId;
    }
    /**
     * 
     *
     * @param int $activityId
     *
     * @return self
     */
    public function setActivityId(int $activityId) : self
    {
        $this->initialized['activityId'] = true;
        $this->activityId = $activityId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActivityName() : string
    {
        return $this->activityName;
    }
    /**
     * 
     *
     * @param string $activityName
     *
     * @return self
     */
    public function setActivityName(string $activityName) : self
    {
        $this->initialized['activityName'] = true;
        $this->activityName = $activityName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActivityType() : string
    {
        return $this->activityType;
    }
    /**
     * 
     *
     * @param string $activityType
     *
     * @return self
     */
    public function setActivityType(string $activityType) : self
    {
        $this->initialized['activityType'] = true;
        $this->activityType = $activityType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
}