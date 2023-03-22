<?php

namespace Varspool\JobAdder\V2\Model;

class TimeRangeModel
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
     * Start time of day interval ([ISO partial-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @var string
     */
    protected $start;
    /**
     * End time of day interval ([ISO partial-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @var string
     */
    protected $end;
    /**
     * Start time of day interval ([ISO partial-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @return string
     */
    public function getStart() : string
    {
        return $this->start;
    }
    /**
     * Start time of day interval ([ISO partial-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
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
     * End time of day interval ([ISO partial-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @return string
     */
    public function getEnd() : string
    {
        return $this->end;
    }
    /**
     * End time of day interval ([ISO partial-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
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
}