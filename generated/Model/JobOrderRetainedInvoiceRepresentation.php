<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderRetainedInvoiceRepresentation
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
     * @var JobOrderInvoiceModel
     */
    protected $invoice;
    /**
     * 
     *
     * @var ModelLinks
     */
    protected $links;
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
     * @return JobOrderInvoiceModel
     */
    public function getInvoice() : JobOrderInvoiceModel
    {
        return $this->invoice;
    }
    /**
     * 
     *
     * @param JobOrderInvoiceModel $invoice
     *
     * @return self
     */
    public function setInvoice(JobOrderInvoiceModel $invoice) : self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * 
     *
     * @return ModelLinks
     */
    public function getLinks() : ModelLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ModelLinks $links
     *
     * @return self
     */
    public function setLinks(ModelLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}