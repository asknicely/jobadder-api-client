<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceSummaryModel
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
}