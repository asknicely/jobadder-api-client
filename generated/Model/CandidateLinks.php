<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateLinks
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
     * Optional contact if candidate is also a contact
     *
     * @var string
     */
    protected $contact;
    /**
     * Candidate photo
     *
     * @var string
     */
    protected $photo;
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
     * Videos
     *
     * @var string
     */
    protected $videos;
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
     * Job Applications
     *
     * @var string
     */
    protected $applications;
    /**
     * Placements
     *
     * @var string
     */
    protected $placements;
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
     * Optional contact if candidate is also a contact
     *
     * @return string
     */
    public function getContact() : string
    {
        return $this->contact;
    }
    /**
     * Optional contact if candidate is also a contact
     *
     * @param string $contact
     *
     * @return self
     */
    public function setContact(string $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Candidate photo
     *
     * @return string
     */
    public function getPhoto() : string
    {
        return $this->photo;
    }
    /**
     * Candidate photo
     *
     * @param string $photo
     *
     * @return self
     */
    public function setPhoto(string $photo) : self
    {
        $this->initialized['photo'] = true;
        $this->photo = $photo;
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
        $this->initialized['skills'] = true;
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
        $this->initialized['notes'] = true;
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
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * Videos
     *
     * @return string
     */
    public function getVideos() : string
    {
        return $this->videos;
    }
    /**
     * Videos
     *
     * @param string $videos
     *
     * @return self
     */
    public function setVideos(string $videos) : self
    {
        $this->initialized['videos'] = true;
        $this->videos = $videos;
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
        $this->initialized['floats'] = true;
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
        $this->initialized['submissions'] = true;
        $this->submissions = $submissions;
        return $this;
    }
    /**
     * Job Applications
     *
     * @return string
     */
    public function getApplications() : string
    {
        return $this->applications;
    }
    /**
     * Job Applications
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
     * Placements
     *
     * @return string
     */
    public function getPlacements() : string
    {
        return $this->placements;
    }
    /**
     * Placements
     *
     * @param string $placements
     *
     * @return self
     */
    public function setPlacements(string $placements) : self
    {
        $this->initialized['placements'] = true;
        $this->placements = $placements;
        return $this;
    }
}