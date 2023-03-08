<?php

namespace Varspool\JobAdder\V2\Model;

class WebhookEventFilterModel
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
     * @var WebhookEventStatusChangeFilterModel
     */
    protected $jobapplicationStatusChanged;
    /**
     * 
     *
     * @return WebhookEventStatusChangeFilterModel
     */
    public function getJobapplicationStatusChanged() : WebhookEventStatusChangeFilterModel
    {
        return $this->jobapplicationStatusChanged;
    }
    /**
     * 
     *
     * @param WebhookEventStatusChangeFilterModel $jobapplicationStatusChanged
     *
     * @return self
     */
    public function setJobapplicationStatusChanged(WebhookEventStatusChangeFilterModel $jobapplicationStatusChanged) : self
    {
        $this->initialized['jobapplicationStatusChanged'] = true;
        $this->jobapplicationStatusChanged = $jobapplicationStatusChanged;
        return $this;
    }
}