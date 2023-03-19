<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationRepresentation
{
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
     * @var JobApplicationSubmittedDetailsModel
     */
    protected $submittedDetails;
    /**
     * 
     *
     * @var JobApplicationScreeningModel
     */
    protected $screening;
    /**
     * 
     *
     * @var CustomFieldValueModel[]
     */
    protected $custom;
    /**
     * 
     *
     * @var PartnerActionStageModel[]
     */
    protected $partnerActions;
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
     * @var JobApplicationLinks
     */
    protected $links;
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
        $this->jobAd = $jobAd;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationSubmittedDetailsModel
     */
    public function getSubmittedDetails() : JobApplicationSubmittedDetailsModel
    {
        return $this->submittedDetails;
    }
    /**
     * 
     *
     * @param JobApplicationSubmittedDetailsModel $submittedDetails
     *
     * @return self
     */
    public function setSubmittedDetails(JobApplicationSubmittedDetailsModel $submittedDetails) : self
    {
        $this->submittedDetails = $submittedDetails;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationScreeningModel
     */
    public function getScreening() : JobApplicationScreeningModel
    {
        return $this->screening;
    }
    /**
     * 
     *
     * @param JobApplicationScreeningModel $screening
     *
     * @return self
     */
    public function setScreening(JobApplicationScreeningModel $screening) : self
    {
        $this->screening = $screening;
        return $this;
    }
    /**
     * 
     *
     * @return CustomFieldValueModel[]
     */
    public function getCustom() : array
    {
        return $this->custom;
    }
    /**
     * 
     *
     * @param CustomFieldValueModel[] $custom
     *
     * @return self
     */
    public function setCustom(array $custom) : self
    {
        $this->custom = $custom;
        return $this;
    }
    /**
     * 
     *
     * @return PartnerActionStageModel[]
     */
    public function getPartnerActions() : array
    {
        return $this->partnerActions;
    }
    /**
     * 
     *
     * @param PartnerActionStageModel[] $partnerActions
     *
     * @return self
     */
    public function setPartnerActions(array $partnerActions) : self
    {
        $this->partnerActions = $partnerActions;
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
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationLinks
     */
    public function getLinks() : JobApplicationLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param JobApplicationLinks $links
     *
     * @return self
     */
    public function setLinks(JobApplicationLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}