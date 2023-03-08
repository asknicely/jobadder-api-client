<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderLinks
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
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * Attachments
     *
     * @var string
     */
    protected $attachments;
    /**
     * Job applications
     *
     * @var string
     */
    protected $applications;
    /**
     * Notes
     *
     * @var string
     */
    protected $notes;
    /**
     * 
     *
     * @return string
     */
    public function getSelf() : string
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * Attachments
     *
     * @return string
     */
    public function getAttachments() : string
    {
        return $this->attachments;
    }
    /**
     * Attachments
     *
     * @param string $attachments
     *
     * @return self
     */
    public function setAttachments(string $attachments) : self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * Job applications
     *
     * @return string
     */
    public function getApplications() : string
    {
        return $this->applications;
    }
    /**
     * Job applications
     *
     * @param string $applications
     *
     * @return self
     */
    public function setApplications(string $applications) : self
    {
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
    /**
     * Notes
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Notes
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes) : self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;
        return $this;
    }
}