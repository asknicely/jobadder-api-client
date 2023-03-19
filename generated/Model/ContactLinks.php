<?php

namespace Varspool\JobAdder\V2\Model;

class ContactLinks
{
    /**
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * Optional candidate if contact is also a candidate
     *
     * @var string
     */
    protected $candidate;
    /**
     * Photo
     *
     * @var string
     */
    protected $photo;
    /**
     * Company
     *
     * @var string
     */
    protected $company;
    /**
     * Office address
     *
     * @var string
     */
    protected $officeAddress;
    /**
     * Skills
     *
     * @var string
     */
    protected $skills;
    /**
     * Notes
     *
     * @var string
     */
    protected $notes;
    /**
     * Attachments
     *
     * @var string
     */
    protected $attachments;
    /**
     * Jobs
     *
     * @var string
     */
    protected $jobs;
    /**
     * Floats
     *
     * @var string
     */
    protected $floats;
    /**
     * Submissions
     *
     * @var string
     */
    protected $submissions;
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
     * Optional candidate if contact is also a candidate
     *
     * @return string
     */
    public function getCandidate() : string
    {
        return $this->candidate;
    }
    /**
     * Optional candidate if contact is also a candidate
     *
     * @param string $candidate
     *
     * @return self
     */
    public function setCandidate(string $candidate) : self
    {
        $this->candidate = $candidate;
        return $this;
    }
    /**
     * Photo
     *
     * @return string
     */
    public function getPhoto() : string
    {
        return $this->photo;
    }
    /**
     * Photo
     *
     * @param string $photo
     *
     * @return self
     */
    public function setPhoto(string $photo) : self
    {
        $this->photo = $photo;
        return $this;
    }
    /**
     * Company
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * Company
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * Office address
     *
     * @return string
     */
    public function getOfficeAddress() : string
    {
        return $this->officeAddress;
    }
    /**
     * Office address
     *
     * @param string $officeAddress
     *
     * @return self
     */
    public function setOfficeAddress(string $officeAddress) : self
    {
        $this->officeAddress = $officeAddress;
        return $this;
    }
    /**
     * Skills
     *
     * @return string
     */
    public function getSkills() : string
    {
        return $this->skills;
    }
    /**
     * Skills
     *
     * @param string $skills
     *
     * @return self
     */
    public function setSkills(string $skills) : self
    {
        $this->skills = $skills;
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
        $this->notes = $notes;
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
     * Jobs
     *
     * @return string
     */
    public function getJobs() : string
    {
        return $this->jobs;
    }
    /**
     * Jobs
     *
     * @param string $jobs
     *
     * @return self
     */
    public function setJobs(string $jobs) : self
    {
        $this->jobs = $jobs;
        return $this;
    }
    /**
     * Floats
     *
     * @return string
     */
    public function getFloats() : string
    {
        return $this->floats;
    }
    /**
     * Floats
     *
     * @param string $floats
     *
     * @return self
     */
    public function setFloats(string $floats) : self
    {
        $this->floats = $floats;
        return $this;
    }
    /**
     * Submissions
     *
     * @return string
     */
    public function getSubmissions() : string
    {
        return $this->submissions;
    }
    /**
     * Submissions
     *
     * @param string $submissions
     *
     * @return self
     */
    public function setSubmissions(string $submissions) : self
    {
        $this->submissions = $submissions;
        return $this;
    }
}