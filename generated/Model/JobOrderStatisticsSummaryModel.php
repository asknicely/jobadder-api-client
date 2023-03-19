<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderStatisticsSummaryModel
{
    /**
     * 
     *
     * @var JobOrderJobApplicationStatisticsSummaryModel
     */
    protected $applications;
    /**
     * 
     *
     * @return JobOrderJobApplicationStatisticsSummaryModel
     */
    public function getApplications() : JobOrderJobApplicationStatisticsSummaryModel
    {
        return $this->applications;
    }
    /**
     * 
     *
     * @param JobOrderJobApplicationStatisticsSummaryModel $applications
     *
     * @return self
     */
    public function setApplications(JobOrderJobApplicationStatisticsSummaryModel $applications) : self
    {
        $this->applications = $applications;
        return $this;
    }
}