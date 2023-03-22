<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceModel
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
    protected $jobId;
    /**
     * 
     *
     * @var int
     */
    protected $invoiceId;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var JobOrderInvoiceStageModel
     */
    protected $stage;
    /**
     * 
     *
     * @var float
     */
    protected $amount;
    /**
     * 
     *
     * @var string
     */
    protected $triggerType;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $triggerJobOrderStatus;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $triggerAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $forecastedDate;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var JobOrderInvoiceExpenseListModel
     */
    protected $expenses;
    /**
     * 
     *
     * @var JobOrderSentInvoiceModel
     */
    protected $sentDetails;
    /**
     * 
     *
     * @var JobOrderInvoicePlacementListModel
     */
    protected $placements;
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
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInvoiceId() : int
    {
        return $this->invoiceId;
    }
    /**
     * 
     *
     * @param int $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(int $invoiceId) : self
    {
        $this->initialized['invoiceId'] = true;
        $this->invoiceId = $invoiceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber) : self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderInvoiceStageModel
     */
    public function getStage() : JobOrderInvoiceStageModel
    {
        return $this->stage;
    }
    /**
     * 
     *
     * @param JobOrderInvoiceStageModel $stage
     *
     * @return self
     */
    public function setStage(JobOrderInvoiceStageModel $stage) : self
    {
        $this->initialized['stage'] = true;
        $this->stage = $stage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTriggerType() : string
    {
        return $this->triggerType;
    }
    /**
     * 
     *
     * @param string $triggerType
     *
     * @return self
     */
    public function setTriggerType(string $triggerType) : self
    {
        $this->initialized['triggerType'] = true;
        $this->triggerType = $triggerType;
        return $this;
    }
    /**
     * 
     *
     * @return StatusModel
     */
    public function getTriggerJobOrderStatus() : StatusModel
    {
        return $this->triggerJobOrderStatus;
    }
    /**
     * 
     *
     * @param StatusModel $triggerJobOrderStatus
     *
     * @return self
     */
    public function setTriggerJobOrderStatus(StatusModel $triggerJobOrderStatus) : self
    {
        $this->initialized['triggerJobOrderStatus'] = true;
        $this->triggerJobOrderStatus = $triggerJobOrderStatus;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTriggerAt() : \DateTime
    {
        return $this->triggerAt;
    }
    /**
     * 
     *
     * @param \DateTime $triggerAt
     *
     * @return self
     */
    public function setTriggerAt(\DateTime $triggerAt) : self
    {
        $this->initialized['triggerAt'] = true;
        $this->triggerAt = $triggerAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getForecastedDate() : \DateTime
    {
        return $this->forecastedDate;
    }
    /**
     * 
     *
     * @param \DateTime $forecastedDate
     *
     * @return self
     */
    public function setForecastedDate(\DateTime $forecastedDate) : self
    {
        $this->initialized['forecastedDate'] = true;
        $this->forecastedDate = $forecastedDate;
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
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderInvoiceExpenseListModel
     */
    public function getExpenses() : JobOrderInvoiceExpenseListModel
    {
        return $this->expenses;
    }
    /**
     * 
     *
     * @param JobOrderInvoiceExpenseListModel $expenses
     *
     * @return self
     */
    public function setExpenses(JobOrderInvoiceExpenseListModel $expenses) : self
    {
        $this->initialized['expenses'] = true;
        $this->expenses = $expenses;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderSentInvoiceModel
     */
    public function getSentDetails() : JobOrderSentInvoiceModel
    {
        return $this->sentDetails;
    }
    /**
     * 
     *
     * @param JobOrderSentInvoiceModel $sentDetails
     *
     * @return self
     */
    public function setSentDetails(JobOrderSentInvoiceModel $sentDetails) : self
    {
        $this->initialized['sentDetails'] = true;
        $this->sentDetails = $sentDetails;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderInvoicePlacementListModel
     */
    public function getPlacements() : JobOrderInvoicePlacementListModel
    {
        return $this->placements;
    }
    /**
     * 
     *
     * @param JobOrderInvoicePlacementListModel $placements
     *
     * @return self
     */
    public function setPlacements(JobOrderInvoicePlacementListModel $placements) : self
    {
        $this->initialized['placements'] = true;
        $this->placements = $placements;
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