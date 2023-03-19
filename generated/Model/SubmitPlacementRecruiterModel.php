<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitPlacementRecruiterModel
{
    /**
     * Recruiter to be associated with the placement, must also be associated with the related job.
     *
     * @var int
     */
    protected $userId;
    /**
     * Optional fee portion, 0.0-1.0 (representing 0%-100%) if placement feeSplit='Percent', a currency amount if placement feeSplit='Fixed'
     *
     * @var float
     */
    protected $feeSplit;
    /**
     * Recruiter to be associated with the placement, must also be associated with the related job.
     *
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }
    /**
     * Recruiter to be associated with the placement, must also be associated with the related job.
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * Optional fee portion, 0.0-1.0 (representing 0%-100%) if placement feeSplit='Percent', a currency amount if placement feeSplit='Fixed'
     *
     * @return float
     */
    public function getFeeSplit() : float
    {
        return $this->feeSplit;
    }
    /**
     * Optional fee portion, 0.0-1.0 (representing 0%-100%) if placement feeSplit='Percent', a currency amount if placement feeSplit='Fixed'
     *
     * @param float $feeSplit
     *
     * @return self
     */
    public function setFeeSplit(float $feeSplit) : self
    {
        $this->feeSplit = $feeSplit;
        return $this;
    }
}