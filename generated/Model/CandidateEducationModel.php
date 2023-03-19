<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateEducationModel
{
    /**
     * 
     *
     * @var string
     */
    protected $institution;
    /**
     * 
     *
     * @var string
     */
    protected $course;
    /**
    * Year, month or date completed.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @var string
    */
    protected $date;
    /**
     * 
     *
     * @return string
     */
    public function getInstitution() : string
    {
        return $this->institution;
    }
    /**
     * 
     *
     * @param string $institution
     *
     * @return self
     */
    public function setInstitution(string $institution) : self
    {
        $this->institution = $institution;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCourse() : string
    {
        return $this->course;
    }
    /**
     * 
     *
     * @param string $course
     *
     * @return self
     */
    public function setCourse(string $course) : self
    {
        $this->course = $course;
        return $this;
    }
    /**
    * Year, month or date completed.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @return string
    */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
    * Year, month or date completed.<br />
    Year must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), the 4 digit year the course was completed, e.g. 2017<br />
    Month must be formatted as [ISO date-fullyear](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6) "-" [ISO date-month](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07<br />
    Date must be formatted as [ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6), e.g. 2017-07-31
    *
    * @param string $date
    *
    * @return self
    */
    public function setDate(string $date) : self
    {
        $this->date = $date;
        return $this;
    }
}