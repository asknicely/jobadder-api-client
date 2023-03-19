<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetModel
{
    /**
     * 
     *
     * @var DateRangeModel
     */
    protected $period;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $submittedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $approvedAt;
    /**
     * 
     *
     * @var PlacementTimesheetApproverModel
     */
    protected $approvedBy;
    /**
     * 
     *
     * @var PlacementTimesheetEntryModel[]
     */
    protected $entries;
    /**
     * 
     *
     * @return DateRangeModel
     */
    public function getPeriod() : DateRangeModel
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param DateRangeModel $period
     *
     * @return self
     */
    public function setPeriod(DateRangeModel $period) : self
    {
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSubmittedAt() : \DateTime
    {
        return $this->submittedAt;
    }
    /**
     * 
     *
     * @param \DateTime $submittedAt
     *
     * @return self
     */
    public function setSubmittedAt(\DateTime $submittedAt) : self
    {
        $this->submittedAt = $submittedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getApprovedAt() : \DateTime
    {
        return $this->approvedAt;
    }
    /**
     * 
     *
     * @param \DateTime $approvedAt
     *
     * @return self
     */
    public function setApprovedAt(\DateTime $approvedAt) : self
    {
        $this->approvedAt = $approvedAt;
        return $this;
    }
    /**
     * 
     *
     * @return PlacementTimesheetApproverModel
     */
    public function getApprovedBy() : PlacementTimesheetApproverModel
    {
        return $this->approvedBy;
    }
    /**
     * 
     *
     * @param PlacementTimesheetApproverModel $approvedBy
     *
     * @return self
     */
    public function setApprovedBy(PlacementTimesheetApproverModel $approvedBy) : self
    {
        $this->approvedBy = $approvedBy;
        return $this;
    }
    /**
     * 
     *
     * @return PlacementTimesheetEntryModel[]
     */
    public function getEntries() : array
    {
        return $this->entries;
    }
    /**
     * 
     *
     * @param PlacementTimesheetEntryModel[] $entries
     *
     * @return self
     */
    public function setEntries(array $entries) : self
    {
        $this->entries = $entries;
        return $this;
    }
}