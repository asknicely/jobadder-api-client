<?php

namespace Varspool\JobAdder\V2\Model;

class UpdatePlacementCommand
{
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
    protected $contactId;
    /**
     * 
     *
     * @var string
     */
    protected $summary;
    /**
     * Placement status
     *
     * @var int
     */
    protected $statusId;
    /**
     * 
     *
     * @var string
     */
    protected $paymentType;
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
     * @var SubmitPlacementSalaryModel
     */
    protected $salary;
    /**
     * 
     *
     * @var SubmitPlacementContractRateModel
     */
    protected $contractRate;
    /**
     * 
     *
     * @var string
     */
    protected $award;
    /**
     * 
     *
     * @var string
     */
    protected $industryCode;
    /**
     * 
     *
     * @var SubmitPlacementBillingModel
     */
    protected $billing;
    /**
     * 
     *
     * @var string
     */
    protected $feeSplit;
    /**
     * 
     *
     * @var SubmitPlacementRecruiterModel[]
     */
    protected $recruiters;
    /**
     * 
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $custom;
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
        $this->contactId = $contactId;
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
     * Placement status
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * Placement status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentType() : string
    {
        return $this->paymentType;
    }
    /**
     * 
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType) : self
    {
        $this->paymentType = $paymentType;
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
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitPlacementSalaryModel
     */
    public function getSalary() : SubmitPlacementSalaryModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param SubmitPlacementSalaryModel $salary
     *
     * @return self
     */
    public function setSalary(SubmitPlacementSalaryModel $salary) : self
    {
        $this->salary = $salary;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitPlacementContractRateModel
     */
    public function getContractRate() : SubmitPlacementContractRateModel
    {
        return $this->contractRate;
    }
    /**
     * 
     *
     * @param SubmitPlacementContractRateModel $contractRate
     *
     * @return self
     */
    public function setContractRate(SubmitPlacementContractRateModel $contractRate) : self
    {
        $this->contractRate = $contractRate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAward() : string
    {
        return $this->award;
    }
    /**
     * 
     *
     * @param string $award
     *
     * @return self
     */
    public function setAward(string $award) : self
    {
        $this->award = $award;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIndustryCode() : string
    {
        return $this->industryCode;
    }
    /**
     * 
     *
     * @param string $industryCode
     *
     * @return self
     */
    public function setIndustryCode(string $industryCode) : self
    {
        $this->industryCode = $industryCode;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitPlacementBillingModel
     */
    public function getBilling() : SubmitPlacementBillingModel
    {
        return $this->billing;
    }
    /**
     * 
     *
     * @param SubmitPlacementBillingModel $billing
     *
     * @return self
     */
    public function setBilling(SubmitPlacementBillingModel $billing) : self
    {
        $this->billing = $billing;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFeeSplit() : string
    {
        return $this->feeSplit;
    }
    /**
     * 
     *
     * @param string $feeSplit
     *
     * @return self
     */
    public function setFeeSplit(string $feeSplit) : self
    {
        $this->feeSplit = $feeSplit;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitPlacementRecruiterModel[]
     */
    public function getRecruiters() : array
    {
        return $this->recruiters;
    }
    /**
     * 
     *
     * @param SubmitPlacementRecruiterModel[] $recruiters
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
}