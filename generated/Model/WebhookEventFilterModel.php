<?php

namespace Varspool\JobAdder\V2\Model;

class WebhookEventFilterModel
{
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
        $this->jobapplicationStatusChanged = $jobapplicationStatusChanged;
        return $this;
    }
}