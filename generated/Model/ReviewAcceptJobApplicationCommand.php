<?php

namespace Varspool\JobAdder\V2\Model;

class ReviewAcceptJobApplicationCommand
{
    /**
     * Hiring manager contact accepting the applicant
     *
     * @var int
     */
    protected $contactId;
    /**
     * Optional feedback
     *
     * @var string
     */
    protected $message;
    /**
     * Hiring manager contact accepting the applicant
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * Hiring manager contact accepting the applicant
     *
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId(int $contactId) : self
    {
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * Optional feedback
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Optional feedback
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}