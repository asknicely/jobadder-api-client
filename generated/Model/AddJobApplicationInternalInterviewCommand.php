<?php

namespace Varspool\JobAdder\V2\Model;

class AddJobApplicationInternalInterviewCommand
{
    /**
     * Interview start time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @var \DateTime
     */
    protected $startAt;
    /**
     * Interview end time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @var \DateTime
     */
    protected $endAt;
    /**
     * Interview location
     *
     * @var string
     */
    protected $location;
    /**
     * User IDs of the interviewers
     *
     * @var int[]
     */
    protected $interviewersUserIds;
    /**
     * Interview start time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @return \DateTime
     */
    public function getStartAt() : \DateTime
    {
        return $this->startAt;
    }
    /**
     * Interview start time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @param \DateTime $startAt
     *
     * @return self
     */
    public function setStartAt(\DateTime $startAt) : self
    {
        $this->startAt = $startAt;
        return $this;
    }
    /**
     * Interview end time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @return \DateTime
     */
    public function getEndAt() : \DateTime
    {
        return $this->endAt;
    }
    /**
     * Interview end time. The allowed minutes for the time are 0, 15, 30 and 45.
     *
     * @param \DateTime $endAt
     *
     * @return self
     */
    public function setEndAt(\DateTime $endAt) : self
    {
        $this->endAt = $endAt;
        return $this;
    }
    /**
     * Interview location
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * Interview location
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * User IDs of the interviewers
     *
     * @return int[]
     */
    public function getInterviewersUserIds() : array
    {
        return $this->interviewersUserIds;
    }
    /**
     * User IDs of the interviewers
     *
     * @param int[] $interviewersUserIds
     *
     * @return self
     */
    public function setInterviewersUserIds(array $interviewersUserIds) : self
    {
        $this->interviewersUserIds = $interviewersUserIds;
        return $this;
    }
}