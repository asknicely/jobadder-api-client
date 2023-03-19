<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceListModel
{
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
        $this->invoices = $invoices;
        return $this;
    }
}