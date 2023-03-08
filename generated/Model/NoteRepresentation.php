<?php

namespace Varspool\JobAdder\V2\Model;

class NoteRepresentation
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
    protected $noteId;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var string
     */
    protected $subject;
    /**
     * 
     *
     * @var string
     */
    protected $reference;
    /**
     * This note cannot be updated
     *
     * @var bool
     */
    protected $readonly;
    /**
     * 
     *
     * @var NoteAttachmentModel[]
     */
    protected $attachments;
    /**
     * 
     *
     * @var JobOrderTitleModel[]
     */
    protected $jobs;
    /**
     * 
     *
     * @var RequisitionSummaryModel[]
     */
    protected $requisitions;
    /**
     * 
     *
     * @var CandidateNameModel[]
     */
    protected $candidates;
    /**
     * 
     *
     * @var JobApplicationSummaryModel[]
     */
    protected $applications;
    /**
     * 
     *
     * @var PlacementSummaryModel[]
     */
    protected $placements;
    /**
     * 
     *
     * @var CompanyNameModel[]
     */
    protected $companies;
    /**
     * 
     *
     * @var ContactNameModel[]
     */
    protected $contacts;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $createdBy;
    /**
     * 
     *
     * @var NoteLinks
     */
    protected $links;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $updatedBy;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string
     */
    public function getNoteId() : string
    {
        return $this->noteId;
    }
    /**
     * 
     *
     * @param string $noteId
     *
     * @return self
     */
    public function setNoteId(string $noteId) : self
    {
        $this->initialized['noteId'] = true;
        $this->noteId = $noteId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * This note cannot be updated
     *
     * @return bool
     */
    public function getReadonly() : bool
    {
        return $this->readonly;
    }
    /**
     * This note cannot be updated
     *
     * @param bool $readonly
     *
     * @return self
     */
    public function setReadonly(bool $readonly) : self
    {
        $this->initialized['readonly'] = true;
        $this->readonly = $readonly;
        return $this;
    }
    /**
     * 
     *
     * @return NoteAttachmentModel[]
     */
    public function getAttachments() : array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param NoteAttachmentModel[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments) : self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderTitleModel[]
     */
    public function getJobs() : array
    {
        return $this->jobs;
    }
    /**
     * 
     *
     * @param JobOrderTitleModel[] $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs) : self
    {
        $this->initialized['jobs'] = true;
        $this->jobs = $jobs;
        return $this;
    }
    /**
     * 
     *
     * @return RequisitionSummaryModel[]
     */
    public function getRequisitions() : array
    {
        return $this->requisitions;
    }
    /**
     * 
     *
     * @param RequisitionSummaryModel[] $requisitions
     *
     * @return self
     */
    public function setRequisitions(array $requisitions) : self
    {
        $this->initialized['requisitions'] = true;
        $this->requisitions = $requisitions;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateNameModel[]
     */
    public function getCandidates() : array
    {
        return $this->candidates;
    }
    /**
     * 
     *
     * @param CandidateNameModel[] $candidates
     *
     * @return self
     */
    public function setCandidates(array $candidates) : self
    {
        $this->initialized['candidates'] = true;
        $this->candidates = $candidates;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationSummaryModel[]
     */
    public function getApplications() : array
    {
        return $this->applications;
    }
    /**
     * 
     *
     * @param JobApplicationSummaryModel[] $applications
     *
     * @return self
     */
    public function setApplications(array $applications) : self
    {
        $this->initialized['applications'] = true;
        $this->applications = $applications;
        return $this;
    }
    /**
     * 
     *
     * @return PlacementSummaryModel[]
     */
    public function getPlacements() : array
    {
        return $this->placements;
    }
    /**
     * 
     *
     * @param PlacementSummaryModel[] $placements
     *
     * @return self
     */
    public function setPlacements(array $placements) : self
    {
        $this->initialized['placements'] = true;
        $this->placements = $placements;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyNameModel[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param CompanyNameModel[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
    /**
     * 
     *
     * @return ContactNameModel[]
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param ContactNameModel[] $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts) : self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getCreatedBy() : UserNameModel
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param UserNameModel $createdBy
     *
     * @return self
     */
    public function setCreatedBy(UserNameModel $createdBy) : self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * 
     *
     * @return NoteLinks
     */
    public function getLinks() : NoteLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param NoteLinks $links
     *
     * @return self
     */
    public function setLinks(NoteLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getUpdatedBy() : UserNameModel
    {
        return $this->updatedBy;
    }
    /**
     * 
     *
     * @param UserNameModel $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(UserNameModel $updatedBy) : self
    {
        $this->initialized['updatedBy'] = true;
        $this->updatedBy = $updatedBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}