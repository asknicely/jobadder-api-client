<?php

namespace Varspool\JobAdder\V2\Model;

class ReviewSubmitJobApplicationCommand
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
     * Optionally specify the user submitting the job application for review (if not the authenticated user)
     *
     * @var int
     */
    protected $submittedByUserId;
    /**
     * Optionally specify the user submitting the job application for review (if not the authenticated user)
     *
     * @return int
     */
    public function getSubmittedByUserId() : int
    {
        return $this->submittedByUserId;
    }
    /**
     * Optionally specify the user submitting the job application for review (if not the authenticated user)
     *
     * @param int $submittedByUserId
     *
     * @return self
     */
    public function setSubmittedByUserId(int $submittedByUserId) : self
    {
        $this->initialized['submittedByUserId'] = true;
        $this->submittedByUserId = $submittedByUserId;
        return $this;
    }
}