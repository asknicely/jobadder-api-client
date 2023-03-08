<?php

namespace Varspool\JobAdder\V2\Model;

class ReviewRejectJobApplicationCommand
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
     * Hiring manager contact rejecting the applicant
     *
     * @var int
     */
    protected $contactId;
    /**
     * Optional feedback
     *
     * @var string
     */
    protected $reason;
    /**
     * Hiring manager contact rejecting the applicant
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * Hiring manager contact rejecting the applicant
     *
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId(int $contactId) : self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * Optional feedback
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * Optional feedback
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
}