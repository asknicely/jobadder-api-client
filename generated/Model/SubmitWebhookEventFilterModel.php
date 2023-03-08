<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitWebhookEventFilterModel
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
     * @var SubmitWebhookEventStatusChangeFilterModel
     */
    protected $jobapplicationStatusChanged;
    /**
     * 
     *
     * @return SubmitWebhookEventStatusChangeFilterModel
     */
    public function getJobapplicationStatusChanged() : SubmitWebhookEventStatusChangeFilterModel
    {
        return $this->jobapplicationStatusChanged;
    }
    /**
     * 
     *
     * @param SubmitWebhookEventStatusChangeFilterModel $jobapplicationStatusChanged
     *
     * @return self
     */
    public function setJobapplicationStatusChanged(SubmitWebhookEventStatusChangeFilterModel $jobapplicationStatusChanged) : self
    {
        $this->initialized['jobapplicationStatusChanged'] = true;
        $this->jobapplicationStatusChanged = $jobapplicationStatusChanged;
        return $this;
    }
}