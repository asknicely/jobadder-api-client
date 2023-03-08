<?php

namespace Varspool\JobAdder\V2\Model;

class FolderRepresentation
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
     * @var int
     */
    protected $folderId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $owner;
    /**
     * 
     *
     * @var UserNameModel[]
     */
    protected $sharedWith;
    /**
     * 
     *
     * @var int[][]
     */
    protected $entityIDs;
    /**
     * 
     *
     * @var JobOrderTitleModel[]
     */
    protected $jobs;
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
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var FolderLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getFolderId() : int
    {
        return $this->folderId;
    }
    /**
     * 
     *
     * @param int $folderId
     *
     * @return self
     */
    public function setFolderId(int $folderId) : self
    {
        $this->initialized['folderId'] = true;
        $this->folderId = $folderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getOwner() : UserNameModel
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param UserNameModel $owner
     *
     * @return self
     */
    public function setOwner(UserNameModel $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel[]
     */
    public function getSharedWith() : array
    {
        return $this->sharedWith;
    }
    /**
     * 
     *
     * @param UserNameModel[] $sharedWith
     *
     * @return self
     */
    public function setSharedWith(array $sharedWith) : self
    {
        $this->initialized['sharedWith'] = true;
        $this->sharedWith = $sharedWith;
        return $this;
    }
    /**
     * 
     *
     * @return int[][]
     */
    public function getEntityIDs() : iterable
    {
        return $this->entityIDs;
    }
    /**
     * 
     *
     * @param int[][] $entityIDs
     *
     * @return self
     */
    public function setEntityIDs(iterable $entityIDs) : self
    {
        $this->initialized['entityIDs'] = true;
        $this->entityIDs = $entityIDs;
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
    /**
     * 
     *
     * @return FolderLinks
     */
    public function getLinks() : FolderLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param FolderLinks $links
     *
     * @return self
     */
    public function setLinks(FolderLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}