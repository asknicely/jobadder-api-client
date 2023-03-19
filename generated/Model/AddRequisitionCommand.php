<?php

namespace Varspool\JobAdder\V2\Model;

class AddRequisitionCommand
{
    /**
     * Hiring manager (contact) submitting the requisition.
     *
     * @var int
     */
    protected $contactId;
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
    protected $jobDescription;
    /**
     * 
     *
     * @var SubmitCategoryModel
     */
    protected $category;
    /**
     * 
     *
     * @var SubmitLocationModel
     */
    protected $location;
    /**
     * Workplace address Id
     *
     * @var string
     */
    protected $workplaceAddressId;
    /**
     * 
     *
     * @var SubmitJobOrderStartModel
     */
    protected $start;
    /**
     * 
     *
     * @var SubmitDurationModel
     */
    protected $duration;
    /**
     * 
     *
     * @var int
     */
    protected $workTypeId;
    /**
     * 
     *
     * @var SubmitJobOrderSalaryRangeModel
     */
    protected $salary;
    /**
     * 
     *
     * @var int
     */
    protected $numberOfJobs;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $custom;
    /**
     * 
     *
     * @var int
     */
    protected $workflowId;
    /**
     * User Id - Optional list of recruiters assigned to the requisition.
     *
     * @var int[]
     */
    protected $recruiterUserId;
    /**
     * 
     *
     * @var int
     */
    protected $formID;
    /**
     * Hiring manager (contact) submitting the requisition.
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * Hiring manager (contact) submitting the requisition.
     *
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId(int $contactId) : self
    {
        $this->contactId = $contactId;
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
     * @return SubmitCategoryModel
     */
    public function getCategory() : SubmitCategoryModel
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param SubmitCategoryModel $category
     *
     * @return self
     */
    public function setCategory(SubmitCategoryModel $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitLocationModel
     */
    public function getLocation() : SubmitLocationModel
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param SubmitLocationModel $location
     *
     * @return self
     */
    public function setLocation(SubmitLocationModel $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * Workplace address Id
     *
     * @return string
     */
    public function getWorkplaceAddressId() : string
    {
        return $this->workplaceAddressId;
    }
    /**
     * Workplace address Id
     *
     * @param string $workplaceAddressId
     *
     * @return self
     */
    public function setWorkplaceAddressId(string $workplaceAddressId) : self
    {
        $this->workplaceAddressId = $workplaceAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitJobOrderStartModel
     */
    public function getStart() : SubmitJobOrderStartModel
    {
        return $this->start;
    }
    /**
     * 
     *
     * @param SubmitJobOrderStartModel $start
     *
     * @return self
     */
    public function setStart(SubmitJobOrderStartModel $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitDurationModel
     */
    public function getDuration() : SubmitDurationModel
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param SubmitDurationModel $duration
     *
     * @return self
     */
    public function setDuration(SubmitDurationModel $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWorkTypeId() : int
    {
        return $this->workTypeId;
    }
    /**
     * 
     *
     * @param int $workTypeId
     *
     * @return self
     */
    public function setWorkTypeId(int $workTypeId) : self
    {
        $this->workTypeId = $workTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitJobOrderSalaryRangeModel
     */
    public function getSalary() : SubmitJobOrderSalaryRangeModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param SubmitJobOrderSalaryRangeModel $salary
     *
     * @return self
     */
    public function setSalary(SubmitJobOrderSalaryRangeModel $salary) : self
    {
        $this->salary = $salary;
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
     * @return SubmitCustomFieldValueModel[]
     */
    public function getCustom() : array
    {
        return $this->custom;
    }
    /**
     * 
     *
     * @param SubmitCustomFieldValueModel[] $custom
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
     * @return int
     */
    public function getWorkflowId() : int
    {
        return $this->workflowId;
    }
    /**
     * 
     *
     * @param int $workflowId
     *
     * @return self
     */
    public function setWorkflowId(int $workflowId) : self
    {
        $this->workflowId = $workflowId;
        return $this;
    }
    /**
     * User Id - Optional list of recruiters assigned to the requisition.
     *
     * @return int[]
     */
    public function getRecruiterUserId() : array
    {
        return $this->recruiterUserId;
    }
    /**
     * User Id - Optional list of recruiters assigned to the requisition.
     *
     * @param int[] $recruiterUserId
     *
     * @return self
     */
    public function setRecruiterUserId(array $recruiterUserId) : self
    {
        $this->recruiterUserId = $recruiterUserId;
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
}