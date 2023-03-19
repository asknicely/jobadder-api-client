<?php

namespace Varspool\JobAdder\V2\Model;

class ReviewViewJobApplicationCommand
{
    /**
     * Hiring manager contact viewing the applicant
     *
     * @var int
     */
    protected $contactId;
    /**
     * Hiring manager contact viewing the applicant
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * Hiring manager contact viewing the applicant
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
}