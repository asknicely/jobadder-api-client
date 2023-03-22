<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationSummaryModel
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
    protected $applicationId;
    /**
     * 
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var string
     */
    protected $jobReference;
    /**
     * 
     *
     * @var bool
     */
    protected $manual;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var int
     */
    protected $rating;
    /**
     * 
     *
     * @var JobApplicationStatusModel
     */
    protected $status;
    /**
     * 
     *
     * @var JobApplicationReviewModel
     */
    protected $review;
    /**
     * 
     *
     * @var CandidateNameModel
     */
    protected $candidate;
    /**
     * 
     *
     * @var JobOrderTitleModel
     */
    protected $job;
    /**
     * 
     *
     * @var JobAdSummaryModel
     */
    protected $jobAd;
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
    public function getApplicationId() : int
    {
        return $this->applicationId;
    }
    /**
     * 
     *
     * @param int $applicationId
     *
     * @return self
     */
    public function setApplicationId(int $applicationId) : self
    {
        $this->initialized['applicationId'] = true;
        $this->applicationId = $applicationId;
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
     * @return string
     */
    public function getJobReference() : string
    {
        return $this->jobReference;
    }
    /**
     * 
     *
     * @param string $jobReference
     *
     * @return self
     */
    public function setJobReference(string $jobReference) : self
    {
        $this->initialized['jobReference'] = true;
        $this->jobReference = $jobReference;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManual() : bool
    {
        return $this->manual;
    }
    /**
     * 
     *
     * @param bool $manual
     *
     * @return self
     */
    public function setManual(bool $manual) : self
    {
        $this->initialized['manual'] = true;
        $this->manual = $manual;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRating() : int
    {
        return $this->rating;
    }
    /**
     * 
     *
     * @param int $rating
     *
     * @return self
     */
    public function setRating(int $rating) : self
    {
        $this->initialized['rating'] = true;
        $this->rating = $rating;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationStatusModel
     */
    public function getStatus() : JobApplicationStatusModel
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param JobApplicationStatusModel $status
     *
     * @return self
     */
    public function setStatus(JobApplicationStatusModel $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationReviewModel
     */
    public function getReview() : JobApplicationReviewModel
    {
        return $this->review;
    }
    /**
     * 
     *
     * @param JobApplicationReviewModel $review
     *
     * @return self
     */
    public function setReview(JobApplicationReviewModel $review) : self
    {
        $this->initialized['review'] = true;
        $this->review = $review;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateNameModel
     */
    public function getCandidate() : CandidateNameModel
    {
        return $this->candidate;
    }
    /**
     * 
     *
     * @param CandidateNameModel $candidate
     *
     * @return self
     */
    public function setCandidate(CandidateNameModel $candidate) : self
    {
        $this->initialized['candidate'] = true;
        $this->candidate = $candidate;
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
     * @return JobAdSummaryModel
     */
    public function getJobAd() : JobAdSummaryModel
    {
        return $this->jobAd;
    }
    /**
     * 
     *
     * @param JobAdSummaryModel $jobAd
     *
     * @return self
     */
    public function setJobAd(JobAdSummaryModel $jobAd) : self
    {
        $this->initialized['jobAd'] = true;
        $this->jobAd = $jobAd;
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