<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateStatisticsModel
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
     * @var CandidateJobApplicationStatisticsSummaryModel
     */
    protected $applications;
    /**
     * 
     *
     * @var CandidatePlacementStatisticsSummaryModel
     */
    protected $placements;
    /**
     * 
     *
     * @return CandidateJobApplicationStatisticsSummaryModel
     */
    public function getApplications() : CandidateJobApplicationStatisticsSummaryModel
    {
        return $this->applications;
    }
    /**
     * 
     *
     * @param CandidateJobApplicationStatisticsSummaryModel $applications
     *
     * @return self
     */
    public function setApplications(CandidateJobApplicationStatisticsSummaryModel $applications) : self
    {
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
    /**
     * 
     *
     * @return CandidatePlacementStatisticsSummaryModel
     */
    public function getPlacements() : CandidatePlacementStatisticsSummaryModel
    {
        return $this->placements;
    }
    /**
     * 
     *
     * @param CandidatePlacementStatisticsSummaryModel $placements
     *
     * @return self
     */
    public function setPlacements(CandidatePlacementStatisticsSummaryModel $placements) : self
    {
        $this->initialized['placements'] = true;
        $this->placements = $placements;
        return $this;
    }
}