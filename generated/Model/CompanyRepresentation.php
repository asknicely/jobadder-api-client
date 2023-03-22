<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyRepresentation
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
     * Unique identifier for the company
     *
     * @var int
     */
    protected $companyId;
    /**
     * Company name
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $status;
    /**
     * 
     *
     * @var ContactNameModel
     */
    protected $mainContact;
    /**
     * 
     *
     * @var CompanyAddressModel
     */
    protected $primaryAddress;
    /**
     * 
     *
     * @var string
     */
    protected $legalName;
    /**
     * Company social profiles
     *
     * @var string[]
     */
    protected $social;
    /**
     * 
     *
     * @var string
     */
    protected $summary;
    /**
     * 
     *
     * @var CompanyNameModel
     */
    protected $parent;
    /**
     * 
     *
     * @var CustomFieldValueModel[]
     */
    protected $custom;
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
    protected $recruiters;
    /**
     * 
     *
     * @var PartnerActionStageModel[]
     */
    protected $partnerActions;
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
     * @var CompanyLinks
     */
    protected $links;
    /**
     * Unique identifier for the company
     *
     * @return int
     */
    public function getCompanyId() : int
    {
        return $this->companyId;
    }
    /**
     * Unique identifier for the company
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId) : self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Company name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Company name
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
     * @return ContactNameModel
     */
    public function getMainContact() : ContactNameModel
    {
        return $this->mainContact;
    }
    /**
     * 
     *
     * @param ContactNameModel $mainContact
     *
     * @return self
     */
    public function setMainContact(ContactNameModel $mainContact) : self
    {
        $this->initialized['mainContact'] = true;
        $this->mainContact = $mainContact;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyAddressModel
     */
    public function getPrimaryAddress() : CompanyAddressModel
    {
        return $this->primaryAddress;
    }
    /**
     * 
     *
     * @param CompanyAddressModel $primaryAddress
     *
     * @return self
     */
    public function setPrimaryAddress(CompanyAddressModel $primaryAddress) : self
    {
        $this->initialized['primaryAddress'] = true;
        $this->primaryAddress = $primaryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLegalName() : string
    {
        return $this->legalName;
    }
    /**
     * 
     *
     * @param string $legalName
     *
     * @return self
     */
    public function setLegalName(string $legalName) : self
    {
        $this->initialized['legalName'] = true;
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Company social profiles
     *
     * @return string[]
     */
    public function getSocial() : iterable
    {
        return $this->social;
    }
    /**
     * Company social profiles
     *
     * @param string[] $social
     *
     * @return self
     */
    public function setSocial(iterable $social) : self
    {
        $this->initialized['social'] = true;
        $this->social = $social;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary) : self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyNameModel
     */
    public function getParent() : CompanyNameModel
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param CompanyNameModel $parent
     *
     * @return self
     */
    public function setParent(CompanyNameModel $parent) : self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
    /**
     * 
     *
     * @return CustomFieldValueModel[]
     */
    public function getCustom() : array
    {
        return $this->custom;
    }
    /**
     * 
     *
     * @param CustomFieldValueModel[] $custom
     *
     * @return self
     */
    public function setCustom(array $custom) : self
    {
        $this->initialized['custom'] = true;
        $this->custom = $custom;
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
    public function getRecruiters() : array
    {
        return $this->recruiters;
    }
    /**
     * 
     *
     * @param UserNameModel[] $recruiters
     *
     * @return self
     */
    public function setRecruiters(array $recruiters) : self
    {
        $this->initialized['recruiters'] = true;
        $this->recruiters = $recruiters;
        return $this;
    }
    /**
     * 
     *
     * @return PartnerActionStageModel[]
     */
    public function getPartnerActions() : array
    {
        return $this->partnerActions;
    }
    /**
     * 
     *
     * @param PartnerActionStageModel[] $partnerActions
     *
     * @return self
     */
    public function setPartnerActions(array $partnerActions) : self
    {
        $this->initialized['partnerActions'] = true;
        $this->partnerActions = $partnerActions;
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
     * @return CompanyLinks
     */
    public function getLinks() : CompanyLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param CompanyLinks $links
     *
     * @return self
     */
    public function setLinks(CompanyLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}