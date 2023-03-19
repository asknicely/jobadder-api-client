<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceModel
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
}