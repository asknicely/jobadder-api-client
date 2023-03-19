<?php

namespace Varspool\JobAdder\V2\Model;

class SetCandidateAvailabilityByWeekCommand
{
    /**
     * Update availability for the week (beginning Sunday) containing the specified date
     *
     * @var \DateTime
     */
    protected $weekOf;
    /**
     * Weekly availability, at most two shifts per day
     *
     * @var SetCandidateAvailabilityByWeekCommandAvailability
     */
    protected $availability;
    /**
     * Availability repeats in following weeks. Previous/past recurring schedules will be terminated prior to this schedule, existing future overlapping schedules will be cancelled.
     *
     * @var bool
     */
    protected $recurring;
    /**
     * Optional end date of repeating availability
     *
     * @var \DateTime
     */
    protected $until;
    /**
     * Update availability for the week (beginning Sunday) containing the specified date
     *
     * @return \DateTime
     */
    public function getWeekOf() : \DateTime
    {
        return $this->weekOf;
    }
    /**
     * Update availability for the week (beginning Sunday) containing the specified date
     *
     * @param \DateTime $weekOf
     *
     * @return self
     */
    public function setWeekOf(\DateTime $weekOf) : self
    {
        $this->weekOf = $weekOf;
        return $this;
    }
    /**
     * Weekly availability, at most two shifts per day
     *
     * @return SetCandidateAvailabilityByWeekCommandAvailability
     */
    public function getAvailability() : SetCandidateAvailabilityByWeekCommandAvailability
    {
        return $this->availability;
    }
    /**
     * Weekly availability, at most two shifts per day
     *
     * @param SetCandidateAvailabilityByWeekCommandAvailability $availability
     *
     * @return self
     */
    public function setAvailability(SetCandidateAvailabilityByWeekCommandAvailability $availability) : self
    {
        $this->availability = $availability;
        return $this;
    }
    /**
     * Availability repeats in following weeks. Previous/past recurring schedules will be terminated prior to this schedule, existing future overlapping schedules will be cancelled.
     *
     * @return bool
     */
    public function getRecurring() : bool
    {
        return $this->recurring;
    }
    /**
     * Availability repeats in following weeks. Previous/past recurring schedules will be terminated prior to this schedule, existing future overlapping schedules will be cancelled.
     *
     * @param bool $recurring
     *
     * @return self
     */
    public function setRecurring(bool $recurring) : self
    {
        $this->recurring = $recurring;
        return $this;
    }
    /**
     * Optional end date of repeating availability
     *
     * @return \DateTime
     */
    public function getUntil() : \DateTime
    {
        return $this->until;
    }
    /**
     * Optional end date of repeating availability
     *
     * @param \DateTime $until
     *
     * @return self
     */
    public function setUntil(\DateTime $until) : self
    {
        $this->until = $until;
        return $this;
    }
}