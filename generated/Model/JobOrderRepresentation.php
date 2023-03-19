<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderRepresentation
{
    /**
     * 
     *
     * @var int
     */
    protected $jobId;
    /**
     * 
     *
     * @var string
     */
    protected $jobTitle;
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
     * @var StatusModel
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var bool
     */
    protected $userFavourite;
    /**
     * 
     *
     * @var string
     */
    protected $jobDescription;
    /**
     * 
     *
     * @var int
     */
    protected $numberOfJobs;
    /**
     * 
     *
     * @var CompanyAddressModel
     */
    protected $workplaceAddress;
    /**
     * 
     *
     * @var JobOrderCategoryModel
     */
    protected $category;
    /**
     * 
     *
     * @var JobOrderLocationModel
     */
    protected $location;
    /**
     * 
     *
     * @var JobOrderStartModel
     */
    protected $start;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * 
     *
     * @var JobOrderWorkShiftModel
     */
    protected $workShift;
    /**
     * 
     *
     * @var DurationModel
     */
    protected $duration;
    /**
     * 
     *
     * @var WorkTypeModel
     */
    protected $workType;
    /**
     * 
     *
     * @var string
     */
    protected $jobType;
    /**
     * 
     *
     * @var JobOrderSalaryRangeModel
     */
    protected $salary;
    /**
     * 
     *
     * @var JobOrderFeeModel
     */
    protected $fee;
    /**
     * 
     *
     * @var ContactNameModel[]
     */
    protected $otherContacts;
    /**
     * 
     *
     * @var JobOrderSkillTags
     */
    protected $skillTags;
    /**
     * 
     *
     * @var CustomFieldValueModel[]
     */
    protected $custom;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $owner;
    /**
     * 
     *
     * @var UserNameModel[]
     */
    protected $recruiters;
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
     * @var UserNameModel
     */
    protected $closedBy;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $closedAt;
    /**
     * 
     *
     * @var JobOrderStatisticsSummaryModel
     */
    protected $statistics;
    /**
     * 
     *
     * @var JobOrderLinks
     */
    protected $links;
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
        $this->jobId = $jobId;
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
        $this->status = $status;
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
     * @return bool
     */
    public function getUserFavourite() : bool
    {
        return $this->userFavourite;
    }
    /**
     * 
     *
     * @param bool $userFavourite
     *
     * @return self
     */
    public function setUserFavourite(bool $userFavourite) : self
    {
        $this->userFavourite = $userFavourite;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJobDescription() : string
    {
        return $this->jobDescription;
    }
    /**
     * 
     *
     * @param string $jobDescription
     *
     * @return self
     */
    public function setJobDescription(string $jobDescription) : self
    {
        $this->jobDescription = $jobDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumberOfJobs() : int
    {
        return $this->numberOfJobs;
    }
    /**
     * 
     *
     * @param int $numberOfJobs
     *
     * @return self
     */
    public function setNumberOfJobs(int $numberOfJobs) : self
    {
        $this->numberOfJobs = $numberOfJobs;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyAddressModel
     */
    public function getWorkplaceAddress() : CompanyAddressModel
    {
        return $this->workplaceAddress;
    }
    /**
     * 
     *
     * @param CompanyAddressModel $workplaceAddress
     *
     * @return self
     */
    public function setWorkplaceAddress(CompanyAddressModel $workplaceAddress) : self
    {
        $this->workplaceAddress = $workplaceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderCategoryModel
     */
    public function getCategory() : JobOrderCategoryModel
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param JobOrderCategoryModel $category
     *
     * @return self
     */
    public function setCategory(JobOrderCategoryModel $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderLocationModel
     */
    public function getLocation() : JobOrderLocationModel
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param JobOrderLocationModel $location
     *
     * @return self
     */
    public function setLocation(JobOrderLocationModel $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderStartModel
     */
    public function getStart() : JobOrderStartModel
    {
        return $this->start;
    }
    /**
     * 
     *
     * @param JobOrderStartModel $start
     *
     * @return self
     */
    public function setStart(JobOrderStartModel $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderWorkShiftModel
     */
    public function getWorkShift() : JobOrderWorkShiftModel
    {
        return $this->workShift;
    }
    /**
     * 
     *
     * @param JobOrderWorkShiftModel $workShift
     *
     * @return self
     */
    public function setWorkShift(JobOrderWorkShiftModel $workShift) : self
    {
        $this->workShift = $workShift;
        return $this;
    }
    /**
     * 
     *
     * @return DurationModel
     */
    public function getDuration() : DurationModel
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param DurationModel $duration
     *
     * @return self
     */
    public function setDuration(DurationModel $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return WorkTypeModel
     */
    public function getWorkType() : WorkTypeModel
    {
        return $this->workType;
    }
    /**
     * 
     *
     * @param WorkTypeModel $workType
     *
     * @return self
     */
    public function setWorkType(WorkTypeModel $workType) : self
    {
        $this->workType = $workType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJobType() : string
    {
        return $this->jobType;
    }
    /**
     * 
     *
     * @param string $jobType
     *
     * @return self
     */
    public function setJobType(string $jobType) : self
    {
        $this->jobType = $jobType;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderSalaryRangeModel
     */
    public function getSalary() : JobOrderSalaryRangeModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param JobOrderSalaryRangeModel $salary
     *
     * @return self
     */
    public function setSalary(JobOrderSalaryRangeModel $salary) : self
    {
        $this->salary = $salary;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderFeeModel
     */
    public function getFee() : JobOrderFeeModel
    {
        return $this->fee;
    }
    /**
     * 
     *
     * @param JobOrderFeeModel $fee
     *
     * @return self
     */
    public function setFee(JobOrderFeeModel $fee) : self
    {
        $this->fee = $fee;
        return $this;
    }
    /**
     * 
     *
     * @return ContactNameModel[]
     */
    public function getOtherContacts() : array
    {
        return $this->otherContacts;
    }
    /**
     * 
     *
     * @param ContactNameModel[] $otherContacts
     *
     * @return self
     */
    public function setOtherContacts(array $otherContacts) : self
    {
        $this->otherContacts = $otherContacts;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderSkillTags
     */
    public function getSkillTags() : JobOrderSkillTags
    {
        return $this->skillTags;
    }
    /**
     * 
     *
     * @param JobOrderSkillTags $skillTags
     *
     * @return self
     */
    public function setSkillTags(JobOrderSkillTags $skillTags) : self
    {
        $this->skillTags = $skillTags;
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
     * @return UserNameModel[]
     */
    public function getRecruiters() : array
    {
        return $this->recruiters;
    }
    /**
     * 
     *
     * @param UserNameModel[] $recruiters
     *
     * @return self
     */
    public function setRecruiters(array $recruiters) : self
    {
        $this->recruiters = $recruiters;
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
     * @return UserNameModel
     */
    public function getClosedBy() : UserNameModel
    {
        return $this->closedBy;
    }
    /**
     * 
     *
     * @param UserNameModel $closedBy
     *
     * @return self
     */
    public function setClosedBy(UserNameModel $closedBy) : self
    {
        $this->closedBy = $closedBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getClosedAt() : \DateTime
    {
        return $this->closedAt;
    }
    /**
     * 
     *
     * @param \DateTime $closedAt
     *
     * @return self
     */
    public function setClosedAt(\DateTime $closedAt) : self
    {
        $this->closedAt = $closedAt;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderStatisticsSummaryModel
     */
    public function getStatistics() : JobOrderStatisticsSummaryModel
    {
        return $this->statistics;
    }
    /**
     * 
     *
     * @param JobOrderStatisticsSummaryModel $statistics
     *
     * @return self
     */
    public function setStatistics(JobOrderStatisticsSummaryModel $statistics) : self
    {
        $this->statistics = $statistics;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderLinks
     */
    public function getLinks() : JobOrderLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param JobOrderLinks $links
     *
     * @return self
     */
    public function setLinks(JobOrderLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}