<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementRepresentation
{
    /**
     * 
     *
     * @var int
     */
    protected $placementId;
    /**
     * 
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var JobOrderTitleModel
     */
    protected $job;
    /**
     * 
     *
     * @var CandidatePlacementModel
     */
    protected $candidate;
    /**
     * 
     *
     * @var bool
     */
    protected $approved;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $approvedAt;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $status;
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
     * @var PlacementWorkShiftModel
     */
    protected $workShift;
    /**
     * 
     *
     * @var string
     */
    protected $summary;
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
     * @var PlacementSourceModel
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
     * @var string
     */
    protected $paymentType;
    /**
     * 
     *
     * @var PlacementSalaryModel
     */
    protected $salary;
    /**
     * 
     *
     * @var PlacementContractRateModel
     */
    protected $contractRate;
    /**
     * 
     *
     * @var PlacementRateModel[]
     */
    protected $rates;
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
     * @var string
     */
    protected $chargeCurrency;
    /**
     * 
     *
     * @var string
     */
    protected $feeSplit;
    /**
     * 
     *
     * @var PlacementBillingModel
     */
    protected $billing;
    /**
     * 
     *
     * @var PlacementExportModel
     */
    protected $export;
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
     * @var PlacementRecruiterModel[]
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
     * @var PlacementLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getPlacementId() : int
    {
        return $this->placementId;
    }
    /**
     * 
     *
     * @param int $placementId
     *
     * @return self
     */
    public function setPlacementId(int $placementId) : self
    {
        $this->placementId = $placementId;
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
     * @return CandidatePlacementModel
     */
    public function getCandidate() : CandidatePlacementModel
    {
        return $this->candidate;
    }
    /**
     * 
     *
     * @param CandidatePlacementModel $candidate
     *
     * @return self
     */
    public function setCandidate(CandidatePlacementModel $candidate) : self
    {
        $this->candidate = $candidate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getApproved() : bool
    {
        return $this->approved;
    }
    /**
     * 
     *
     * @param bool $approved
     *
     * @return self
     */
    public function setApproved(bool $approved) : self
    {
        $this->approved = $approved;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getApprovedAt() : \DateTime
    {
        return $this->approvedAt;
    }
    /**
     * 
     *
     * @param \DateTime $approvedAt
     *
     * @return self
     */
    public function setApprovedAt(\DateTime $approvedAt) : self
    {
        $this->approvedAt = $approvedAt;
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
        $this->type = $type;
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
     * @return PlacementWorkShiftModel
     */
    public function getWorkShift() : PlacementWorkShiftModel
    {
        return $this->workShift;
    }
    /**
     * 
     *
     * @param PlacementWorkShiftModel $workShift
     *
     * @return self
     */
    public function setWorkShift(PlacementWorkShiftModel $workShift) : self
    {
        $this->workShift = $workShift;
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
     * @return PlacementSourceModel
     */
    public function getSource() : PlacementSourceModel
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param PlacementSourceModel $source
     *
     * @return self
     */
    public function setSource(PlacementSourceModel $source) : self
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
     * 
     *
     * @return PlacementSalaryModel
     */
    public function getSalary() : PlacementSalaryModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param PlacementSalaryModel $salary
     *
     * @return self
     */
    public function setSalary(PlacementSalaryModel $salary) : self
    {
        $this->salary = $salary;
        return $this;
    }
    /**
     * 
     *
     * @return PlacementContractRateModel
     */
    public function getContractRate() : PlacementContractRateModel
    {
        return $this->contractRate;
    }
    /**
     * 
     *
     * @param PlacementContractRateModel $contractRate
     *
     * @return self
     */
    public function setContractRate(PlacementContractRateModel $contractRate) : self
    {
        $this->contractRate = $contractRate;
        return $this;
    }
    /**
     * 
     *
     * @return PlacementRateModel[]
     */
    public function getRates() : array
    {
        return $this->rates;
    }
    /**
     * 
     *
     * @param PlacementRateModel[] $rates
     *
     * @return self
     */
    public function setRates(array $rates) : self
    {
        $this->rates = $rates;
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
     * @return string
     */
    public function getChargeCurrency() : string
    {
        return $this->chargeCurrency;
    }
    /**
     * 
     *
     * @param string $chargeCurrency
     *
     * @return self
     */
    public function setChargeCurrency(string $chargeCurrency) : self
    {
        $this->chargeCurrency = $chargeCurrency;
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
     * @return PlacementBillingModel
     */
    public function getBilling() : PlacementBillingModel
    {
        return $this->billing;
    }
    /**
     * 
     *
     * @param PlacementBillingModel $billing
     *
     * @return self
     */
    public function setBilling(PlacementBillingModel $billing) : self
    {
        $this->billing = $billing;
        return $this;
    }
    /**
     * 
     *
     * @return PlacementExportModel
     */
    public function getExport() : PlacementExportModel
    {
        return $this->export;
    }
    /**
     * 
     *
     * @param PlacementExportModel $export
     *
     * @return self
     */
    public function setExport(PlacementExportModel $export) : self
    {
        $this->export = $export;
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
     * @return PlacementRecruiterModel[]
     */
    public function getRecruiters() : array
    {
        return $this->recruiters;
    }
    /**
     * 
     *
     * @param PlacementRecruiterModel[] $recruiters
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
     * @return PlacementLinks
     */
    public function getLinks() : PlacementLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PlacementLinks $links
     *
     * @return self
     */
    public function setLinks(PlacementLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}