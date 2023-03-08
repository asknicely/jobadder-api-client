<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitJobApplicationCustomFieldsModel
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
     * Candidate custom field values
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $candidate;
    /**
     * Job application custom field values
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $application;
    /**
     * Candidate custom field values
     *
     * @return SubmitCustomFieldValueModel[]
     */
    public function getCandidate() : array
    {
        return $this->candidate;
    }
    /**
     * Candidate custom field values
     *
     * @param SubmitCustomFieldValueModel[] $candidate
     *
     * @return self
     */
    public function setCandidate(array $candidate) : self
    {
        $this->initialized['candidate'] = true;
        $this->candidate = $candidate;
        return $this;
    }
    /**
     * Job application custom field values
     *
     * @return SubmitCustomFieldValueModel[]
     */
    public function getApplication() : array
    {
        return $this->application;
    }
    /**
     * Job application custom field values
     *
     * @param SubmitCustomFieldValueModel[] $application
     *
     * @return self
     */
    public function setApplication(array $application) : self
    {
        $this->initialized['application'] = true;
        $this->application = $application;
        return $this;
    }
}