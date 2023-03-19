<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionRepresentation
{
    /**
     * 
     *
     * @var int
     */
    protected $requisitionId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $workflowStageIndex;
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
    protected $hiringManager;
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
    protected $updatedAt;
    /**
     * 
     *
     * @var CompanyWorkflowModel
     */
    protected $workflow;
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
     * Source of the requisition, or reason the requisition is being raised.
     *
     * @var string
     */
    protected $source;
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
     * @var JobOrderSalaryRangeModel
     */
    protected $salary;
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
     * @var int
     */
    protected $formID;
    /**
     * 
     *
     * @var RequisitionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getRequisitionId() : int
    {
        return $this->requisitionId;
    }
    /**
     * 
     *
     * @param int $requisitionId
     *
     * @return self
     */
    public function setRequisitionId(int $requisitionId) : self
    {
        $this->requisitionId = $requisitionId;
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
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWorkflowStageIndex() : int
    {
        return $this->workflowStageIndex;
    }
    /**
     * 
     *
     * @param int $workflowStageIndex
     *
     * @return self
     */
    public function setWorkflowStageIndex(int $workflowStageIndex) : self
    {
        $this->workflowStageIndex = $workflowStageIndex;
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
    public function getHiringManager() : ContactNameModel
    {
        return $this->hiringManager;
    }
    /**
     * 
     *
     * @param ContactNameModel $hiringManager
     *
     * @return self
     */
    public function setHiringManager(ContactNameModel $hiringManager) : self
    {
        $this->hiringManager = $hiringManager;
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
     * @return CompanyWorkflowModel
     */
    public function getWorkflow() : CompanyWorkflowModel
    {
        return $this->workflow;
    }
    /**
     * 
     *
     * @param CompanyWorkflowModel $workflow
     *
     * @return self
     */
    public function setWorkflow(CompanyWorkflowModel $workflow) : self
    {
        $this->workflow = $workflow;
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
     * Source of the requisition, or reason the requisition is being raised.
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * Source of the requisition, or reason the requisition is being raised.
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
     * @return int
     */
    public function getFormID() : int
    {
        return $this->formID;
    }
    /**
     * 
     *
     * @param int $formID
     *
     * @return self
     */
    public function setFormID(int $formID) : self
    {
        $this->formID = $formID;
        return $this;
    }
    /**
     * 
     *
     * @return RequisitionLinks
     */
    public function getLinks() : RequisitionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param RequisitionLinks $links
     *
     * @return self
     */
    public function setLinks(RequisitionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}