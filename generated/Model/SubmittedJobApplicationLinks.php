<?php

namespace Varspool\JobAdder\V2\Model;

class SubmittedJobApplicationLinks
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
     * @var string
     */
    protected $other;
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
    /**
     * 
     *
     * @return string
     */
    public function getOther() : string
    {
        return $this->other;
    }
    /**
     * 
     *
     * @param string $other
     *
     * @return self
     */
    public function setOther(string $other) : self
    {
        $this->initialized['other'] = true;
        $this->other = $other;
        return $this;
    }
}