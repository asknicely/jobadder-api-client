<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSummaryModel
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
    protected $jobId;
    /**
     * 
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var CompanyNameModel
     */
    protected $company;
    /**
     * 
     *
     * @var ContactNameModel
     */
    protected $contact;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var bool
     */
    protected $userFavourite;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $owner;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $createdBy;
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
     * @var UserNameModel
     */
    protected $closedBy;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $closedAt;
    /**
     * 
     *
     * @return int
     */
    public function getJobId() : int
    {
        return $this->jobId;
    }
    /**
     * 
     *
     * @param int $jobId
     *
     * @return self
     */
    public function setJobId(int $jobId) : self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJobTitle() : string
    {
        return $this->jobTitle;
    }
    /**
     * 
     *
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle(string $jobTitle) : self
    {
        $this->initialized['jobTitle'] = true;
        $this->jobTitle = $jobTitle;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyNameModel
     */
    public function getCompany() : CompanyNameModel
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param CompanyNameModel $company
     *
     * @return self
     */
    public function setCompany(CompanyNameModel $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return ContactNameModel
     */
    public function getContact() : ContactNameModel
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ContactNameModel $contact
     *
     * @return self
     */
    public function setContact(ContactNameModel $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return StatusModel
     */
    public function getStatus() : StatusModel
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param StatusModel $status
     *
     * @return self
     */
    public function setStatus(StatusModel $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
     * @return bool
     */
    public function getUserFavourite() : bool
    {
        return $this->userFavourite;
    }
    /**
     * 
     *
     * @param bool $userFavourite
     *
     * @return self
     */
    public function setUserFavourite(bool $userFavourite) : self
    {
        $this->initialized['userFavourite'] = true;
        $this->userFavourite = $userFavourite;
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
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getClosedBy() : UserNameModel
    {
        return $this->closedBy;
    }
    /**
     * 
     *
     * @param UserNameModel $closedBy
     *
     * @return self
     */
    public function setClosedBy(UserNameModel $closedBy) : self
    {
        $this->initialized['closedBy'] = true;
        $this->closedBy = $closedBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getClosedAt() : \DateTime
    {
        return $this->closedAt;
    }
    /**
     * 
     *
     * @param \DateTime $closedAt
     *
     * @return self
     */
    public function setClosedAt(\DateTime $closedAt) : self
    {
        $this->initialized['closedAt'] = true;
        $this->closedAt = $closedAt;
        return $this;
    }
}