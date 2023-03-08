<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationLinks
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
     * 
     *
     * @var string
     */
    protected $resume;
    /**
     * 
     *
     * @var string
     */
    protected $coverLetter;
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
     * 
     *
     * @return string
     */
    public function getResume() : string
    {
        return $this->resume;
    }
    /**
     * 
     *
     * @param string $resume
     *
     * @return self
     */
    public function setResume(string $resume) : self
    {
        $this->initialized['resume'] = true;
        $this->resume = $resume;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCoverLetter() : string
    {
        return $this->coverLetter;
    }
    /**
     * 
     *
     * @param string $coverLetter
     *
     * @return self
     */
    public function setCoverLetter(string $coverLetter) : self
    {
        $this->initialized['coverLetter'] = true;
        $this->coverLetter = $coverLetter;
        return $this;
    }
}