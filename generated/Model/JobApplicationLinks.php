<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationLinks
{
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
        $this->coverLetter = $coverLetter;
        return $this;
    }
}