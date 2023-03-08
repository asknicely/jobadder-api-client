<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderStatisticsSummaryModel
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
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
}