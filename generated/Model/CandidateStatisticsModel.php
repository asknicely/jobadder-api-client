<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateStatisticsModel
{
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
        $this->placements = $placements;
        return $this;
    }
}