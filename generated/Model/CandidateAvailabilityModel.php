<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateAvailabilityModel
{
    /**
     * Date available ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * Day of week the shift times apply to
     *
     * @var string
     */
    protected $day;
    /**
     * Time available, at least one and at most two shifts
     *
     * @var TimeRangeModel[]
     */
    protected $shifts;
    /**
     * Availability is repeated in following weeks
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
     * Date available ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * Date available ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Day of week the shift times apply to
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * Day of week the shift times apply to
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * Time available, at least one and at most two shifts
     *
     * @return TimeRangeModel[]
     */
    public function getShifts() : array
    {
        return $this->shifts;
    }
    /**
     * Time available, at least one and at most two shifts
     *
     * @param TimeRangeModel[] $shifts
     *
     * @return self
     */
    public function setShifts(array $shifts) : self
    {
        $this->shifts = $shifts;
        return $this;
    }
    /**
     * Availability is repeated in following weeks
     *
     * @return bool
     */
    public function getRecurring() : bool
    {
        return $this->recurring;
    }
    /**
     * Availability is repeated in following weeks
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