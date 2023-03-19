<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyLinks
{
    /**
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * Company logo
     *
     * @var string
     */
    protected $logo;
    /**
     * Company contacts
     *
     * @var string
     */
    protected $contacts;
    /**
     * Company subsidiaries
     *
     * @var string
     */
    protected $subsidiaries;
    /**
     * Company addresses
     *
     * @var string
     */
    protected $addresses;
    /**
     * Skills
     *
     * @var string
     */
    protected $skills;
    /**
     * Company notes
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
     * Company jobs
     *
     * @var string
     */
    protected $jobs;
    /**
     * Company requisitions
     *
     * @var string
     */
    protected $requisitions;
    /**
     * Company floats
     *
     * @var string
     */
    protected $floats;
    /**
     * Company submissions
     *
     * @var string
     */
    protected $submissions;
    /**
     * Company placements
     *
     * @var string
     */
    protected $placements;
    /**
     * 
     *
     * @var CompanyWorkflowLinks
     */
    protected $workflows;
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
     * Company logo
     *
     * @return string
     */
    public function getLogo() : string
    {
        return $this->logo;
    }
    /**
     * Company logo
     *
     * @param string $logo
     *
     * @return self
     */
    public function setLogo(string $logo) : self
    {
        $this->logo = $logo;
        return $this;
    }
    /**
     * Company contacts
     *
     * @return string
     */
    public function getContacts() : string
    {
        return $this->contacts;
    }
    /**
     * Company contacts
     *
     * @param string $contacts
     *
     * @return self
     */
    public function setContacts(string $contacts) : self
    {
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * Company subsidiaries
     *
     * @return string
     */
    public function getSubsidiaries() : string
    {
        return $this->subsidiaries;
    }
    /**
     * Company subsidiaries
     *
     * @param string $subsidiaries
     *
     * @return self
     */
    public function setSubsidiaries(string $subsidiaries) : self
    {
        $this->subsidiaries = $subsidiaries;
        return $this;
    }
    /**
     * Company addresses
     *
     * @return string
     */
    public function getAddresses() : string
    {
        return $this->addresses;
    }
    /**
     * Company addresses
     *
     * @param string $addresses
     *
     * @return self
     */
    public function setAddresses(string $addresses) : self
    {
        $this->addresses = $addresses;
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
     * Company notes
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Company notes
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
     * Company jobs
     *
     * @return string
     */
    public function getJobs() : string
    {
        return $this->jobs;
    }
    /**
     * Company jobs
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
     * Company requisitions
     *
     * @return string
     */
    public function getRequisitions() : string
    {
        return $this->requisitions;
    }
    /**
     * Company requisitions
     *
     * @param string $requisitions
     *
     * @return self
     */
    public function setRequisitions(string $requisitions) : self
    {
        $this->requisitions = $requisitions;
        return $this;
    }
    /**
     * Company floats
     *
     * @return string
     */
    public function getFloats() : string
    {
        return $this->floats;
    }
    /**
     * Company floats
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
     * Company submissions
     *
     * @return string
     */
    public function getSubmissions() : string
    {
        return $this->submissions;
    }
    /**
     * Company submissions
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
    /**
     * Company placements
     *
     * @return string
     */
    public function getPlacements() : string
    {
        return $this->placements;
    }
    /**
     * Company placements
     *
     * @param string $placements
     *
     * @return self
     */
    public function setPlacements(string $placements) : self
    {
        $this->placements = $placements;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyWorkflowLinks
     */
    public function getWorkflows() : CompanyWorkflowLinks
    {
        return $this->workflows;
    }
    /**
     * 
     *
     * @param CompanyWorkflowLinks $workflows
     *
     * @return self
     */
    public function setWorkflows(CompanyWorkflowLinks $workflows) : self
    {
        $this->workflows = $workflows;
        return $this;
    }
}