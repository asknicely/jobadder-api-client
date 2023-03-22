<?php

namespace Varspool\JobAdder\V2\Model;

class InterviewSummaryModel
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
    protected $interviewId;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
     * @var string
     */
    protected $location;
    /**
     * 
     *
     * @var JobApplicationSummaryModel
     */
    protected $interviewee;
    /**
     * Internal/user and External/contact interviewers
     *
     * @var InterviewInterviewersModel
     */
    protected $interviewers;
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
     * @return int
     */
    public function getInterviewId() : int
    {
        return $this->interviewId;
    }
    /**
     * 
     *
     * @param int $interviewId
     *
     * @return self
     */
    public function setInterviewId(int $interviewId) : self
    {
        $this->initialized['interviewId'] = true;
        $this->interviewId = $interviewId;
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
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationSummaryModel
     */
    public function getInterviewee() : JobApplicationSummaryModel
    {
        return $this->interviewee;
    }
    /**
     * 
     *
     * @param JobApplicationSummaryModel $interviewee
     *
     * @return self
     */
    public function setInterviewee(JobApplicationSummaryModel $interviewee) : self
    {
        $this->initialized['interviewee'] = true;
        $this->interviewee = $interviewee;
        return $this;
    }
    /**
     * Internal/user and External/contact interviewers
     *
     * @return InterviewInterviewersModel
     */
    public function getInterviewers() : InterviewInterviewersModel
    {
        return $this->interviewers;
    }
    /**
     * Internal/user and External/contact interviewers
     *
     * @param InterviewInterviewersModel $interviewers
     *
     * @return self
     */
    public function setInterviewers(InterviewInterviewersModel $interviewers) : self
    {
        $this->initialized['interviewers'] = true;
        $this->interviewers = $interviewers;
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
}