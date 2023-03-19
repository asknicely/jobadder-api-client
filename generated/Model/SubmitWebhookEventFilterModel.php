<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitWebhookEventFilterModel
{
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
        $this->jobapplicationStatusChanged = $jobapplicationStatusChanged;
        return $this;
    }
}