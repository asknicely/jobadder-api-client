<?php

namespace Varspool\JobAdder\V2\Model;

class AddJobOrderCommand
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
     * @var string
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var int
     */
    protected $companyId;
    /**
     * 
     *
     * @var int
     */
    protected $contactId;
    /**
     * 
     *
     * @var string
     */
    protected $jobDescription;
    /**
     * Job status
     *
     * @var int
     */
    protected $statusId;
    /**
     * Job is a favourite for the current user
     *
     * @var bool
     */
    protected $userFavourite;
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
     * Workplace Address Id
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
     * @var SubmitJobOrderFeeModel
     */
    protected $fee;
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
     * @var SubmitJobOrderSkillTagsModel
     */
    protected $skillTags;
    /**
     * User Id - Owner of this job
     *
     * @var int
     */
    protected $ownerUserId;
    /**
     * User Id - Optional list of recruiters assigned to the job
     *
     * @var int[]
     */
    protected $recruiterUserId;
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
     * @return int
     */
    public function getCompanyId() : int
    {
        return $this->companyId;
    }
    /**
     * 
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId) : self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId(int $contactId) : self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;
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
        $this->initialized['jobDescription'] = true;
        $this->jobDescription = $jobDescription;
        return $this;
    }
    /**
     * Job status
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * Job status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * Job is a favourite for the current user
     *
     * @return bool
     */
    public function getUserFavourite() : bool
    {
        return $this->userFavourite;
    }
    /**
     * Job is a favourite for the current user
     *
     * @param bool $userFavourite
     *
     * @return self
     */
    public function setUserFavourite(bool $userFavourite) : self
    {
        $this->initialized['userFavourite'] = true;
        $this->userFavourite = $userFavourite;
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
        $this->initialized['category'] = true;
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
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * Workplace Address Id
     *
     * @return string
     */
    public function getWorkplaceAddressId() : string
    {
        return $this->workplaceAddressId;
    }
    /**
     * Workplace Address Id
     *
     * @param string $workplaceAddressId
     *
     * @return self
     */
    public function setWorkplaceAddressId(string $workplaceAddressId) : self
    {
        $this->initialized['workplaceAddressId'] = true;
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
        $this->initialized['start'] = true;
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
        $this->initialized['duration'] = true;
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
        $this->initialized['workTypeId'] = true;
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
        $this->initialized['salary'] = true;
        $this->salary = $salary;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitJobOrderFeeModel
     */
    public function getFee() : SubmitJobOrderFeeModel
    {
        return $this->fee;
    }
    /**
     * 
     *
     * @param SubmitJobOrderFeeModel $fee
     *
     * @return self
     */
    public function setFee(SubmitJobOrderFeeModel $fee) : self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
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
        $this->initialized['numberOfJobs'] = true;
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
        $this->initialized['source'] = true;
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
        $this->initialized['custom'] = true;
        $this->custom = $custom;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitJobOrderSkillTagsModel
     */
    public function getSkillTags() : SubmitJobOrderSkillTagsModel
    {
        return $this->skillTags;
    }
    /**
     * 
     *
     * @param SubmitJobOrderSkillTagsModel $skillTags
     *
     * @return self
     */
    public function setSkillTags(SubmitJobOrderSkillTagsModel $skillTags) : self
    {
        $this->initialized['skillTags'] = true;
        $this->skillTags = $skillTags;
        return $this;
    }
    /**
     * User Id - Owner of this job
     *
     * @return int
     */
    public function getOwnerUserId() : int
    {
        return $this->ownerUserId;
    }
    /**
     * User Id - Owner of this job
     *
     * @param int $ownerUserId
     *
     * @return self
     */
    public function setOwnerUserId(int $ownerUserId) : self
    {
        $this->initialized['ownerUserId'] = true;
        $this->ownerUserId = $ownerUserId;
        return $this;
    }
    /**
     * User Id - Optional list of recruiters assigned to the job
     *
     * @return int[]
     */
    public function getRecruiterUserId() : array
    {
        return $this->recruiterUserId;
    }
    /**
     * User Id - Optional list of recruiters assigned to the job
     *
     * @param int[] $recruiterUserId
     *
     * @return self
     */
    public function setRecruiterUserId(array $recruiterUserId) : self
    {
        $this->initialized['recruiterUserId'] = true;
        $this->recruiterUserId = $recruiterUserId;
        return $this;
    }
}