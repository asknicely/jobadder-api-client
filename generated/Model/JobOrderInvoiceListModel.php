<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceListModel
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
     * @var JobOrderRetainedModel
     */
    protected $job;
    /**
     * 
     *
     * @var JobOrderInvoiceSummaryModel[]
     */
    protected $invoices;
    /**
     * 
     *
     * @return JobOrderRetainedModel
     */
    public function getJob() : JobOrderRetainedModel
    {
        return $this->job;
    }
    /**
     * 
     *
     * @param JobOrderRetainedModel $job
     *
     * @return self
     */
    public function setJob(JobOrderRetainedModel $job) : self
    {
        $this->initialized['job'] = true;
        $this->job = $job;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderInvoiceSummaryModel[]
     */
    public function getInvoices() : array
    {
        return $this->invoices;
    }
    /**
     * 
     *
     * @param JobOrderInvoiceSummaryModel[] $invoices
     *
     * @return self
     */
    public function setInvoices(array $invoices) : self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;
        return $this;
    }
}