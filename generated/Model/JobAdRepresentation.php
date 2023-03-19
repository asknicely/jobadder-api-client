<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdRepresentation
{
    /**
     * 
     *
     * @var int
     */
    protected $adId;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $reference;
    /**
     * 
     *
     * @var string
     */
    protected $summary;
    /**
     * 
     *
     * @var string[]
     */
    protected $bulletPoints;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var JobOrderTitleModel
     */
    protected $job;
    /**
     * 
     *
     * @var CompanyNameModel
     */
    protected $company;
    /**
     * 
     *
     * @var ContactNameModel
     */
    protected $contact;
    /**
     * 
     *
     * @var JobAdScreeningQuestionModel[]
     */
    protected $screening;
    /**
     * 
     *
     * @var JobBoardSummaryModel[]
     */
    protected $jobBoards;
    /**
     * 
     *
     * @var JobAdOtherApplyUrlModel[]
     */
    protected $otherApplyUrls;
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
     * @var \DateTime
     */
    protected $postAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expireAt;
    /**
     * 
     *
     * @var PartnerActionStageModel[]
     */
    protected $partnerActions;
    /**
     * 
     *
     * @var JobAdLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getAdId() : int
    {
        return $this->adId;
    }
    /**
     * 
     *
     * @param int $adId
     *
     * @return self
     */
    public function setAdId(int $adId) : self
    {
        $this->adId = $adId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
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
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary) : self
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getBulletPoints() : array
    {
        return $this->bulletPoints;
    }
    /**
     * 
     *
     * @param string[] $bulletPoints
     *
     * @return self
     */
    public function setBulletPoints(array $bulletPoints) : self
    {
        $this->bulletPoints = $bulletPoints;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
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
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return ContactNameModel
     */
    public function getContact() : ContactNameModel
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ContactNameModel $contact
     *
     * @return self
     */
    public function setContact(ContactNameModel $contact) : self
    {
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return JobAdScreeningQuestionModel[]
     */
    public function getScreening() : array
    {
        return $this->screening;
    }
    /**
     * 
     *
     * @param JobAdScreeningQuestionModel[] $screening
     *
     * @return self
     */
    public function setScreening(array $screening) : self
    {
        $this->screening = $screening;
        return $this;
    }
    /**
     * 
     *
     * @return JobBoardSummaryModel[]
     */
    public function getJobBoards() : array
    {
        return $this->jobBoards;
    }
    /**
     * 
     *
     * @param JobBoardSummaryModel[] $jobBoards
     *
     * @return self
     */
    public function setJobBoards(array $jobBoards) : self
    {
        $this->jobBoards = $jobBoards;
        return $this;
    }
    /**
     * 
     *
     * @return JobAdOtherApplyUrlModel[]
     */
    public function getOtherApplyUrls() : array
    {
        return $this->otherApplyUrls;
    }
    /**
     * 
     *
     * @param JobAdOtherApplyUrlModel[] $otherApplyUrls
     *
     * @return self
     */
    public function setOtherApplyUrls(array $otherApplyUrls) : self
    {
        $this->otherApplyUrls = $otherApplyUrls;
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
     * @return \DateTime
     */
    public function getPostAt() : \DateTime
    {
        return $this->postAt;
    }
    /**
     * 
     *
     * @param \DateTime $postAt
     *
     * @return self
     */
    public function setPostAt(\DateTime $postAt) : self
    {
        $this->postAt = $postAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpireAt() : \DateTime
    {
        return $this->expireAt;
    }
    /**
     * 
     *
     * @param \DateTime $expireAt
     *
     * @return self
     */
    public function setExpireAt(\DateTime $expireAt) : self
    {
        $this->expireAt = $expireAt;
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
     * @return JobAdLinks
     */
    public function getLinks() : JobAdLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param JobAdLinks $links
     *
     * @return self
     */
    public function setLinks(JobAdLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}