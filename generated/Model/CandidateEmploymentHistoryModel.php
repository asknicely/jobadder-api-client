<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateEmploymentHistoryModel
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
     * Name of the employer
     *
     * @var string
     */
    protected $employer;
    /**
     * 
     *
     * @var string
     */
    protected $position;
    /**
    * Year, month or date employment started.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @var string
    */
    protected $start;
    /**
    * Year, month or date employment finished, or "Present" for a current role.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @var string
    */
    protected $end;
    /**
     * Description of responsibilities and achievements.
     *
     * @var string
     */
    protected $description;
    /**
     * Name of the employer
     *
     * @return string
     */
    public function getEmployer() : string
    {
        return $this->employer;
    }
    /**
     * Name of the employer
     *
     * @param string $employer
     *
     * @return self
     */
    public function setEmployer(string $employer) : self
    {
        $this->initialized['employer'] = true;
        $this->employer = $employer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
    * Year, month or date employment started.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @return string
    */
    public function getStart() : string
    {
        return $this->start;
    }
    /**
    * Year, month or date employment started.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @param string $start
    *
    * @return self
    */
    public function setStart(string $start) : self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
    * Year, month or date employment finished, or "Present" for a current role.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @return string
    */
    public function getEnd() : string
    {
        return $this->end;
    }
    /**
    * Year, month or date employment finished, or "Present" for a current role.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @param string $end
    *
    * @return self
    */
    public function setEnd(string $end) : self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
    /**
     * Description of responsibilities and achievements.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of responsibilities and achievements.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}