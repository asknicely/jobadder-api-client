<?php

namespace Varspool\JobAdder\V2\Model;

class ContactRepresentation
{
    /**
     * Unique identifier for the contact
     *
     * @var int
     */
    protected $contactId;
    /**
     * First name
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last name
     *
     * @var string
     */
    protected $lastName;
    /**
     * Position or job title
     *
     * @var string
     */
    protected $position;
    /**
     * Salutation/honorific/title
     *
     * @var string
     */
    protected $salutation;
    /**
     * 
     *
     * @var bool
     */
    protected $unsubscribed;
    /**
     * Primary email address
     *
     * @var string
     */
    protected $email;
    /**
     * Phone number
     *
     * @var string
     */
    protected $phone;
    /**
     * Mobile/cell number
     *
     * @var string
     */
    protected $mobile;
    /**
     * Contact is no longer with the company
     *
     * @var bool
     */
    protected $inactive;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $status;
    /**
     * 
     *
     * @var CompanyNameModel
     */
    protected $company;
    /**
     * 
     *
     * @var CompanyAddressModel
     */
    protected $officeAddress;
    /**
     * contactId from the previous company when a contact moves between companies
     *
     * @var int
     */
    protected $previousContactId;
    /**
     * contactId from the original/first company when a contact moves between companies
     *
     * @var int
     */
    protected $originalContactId;
    /**
     * Other email addresses used by the contact
     *
     * @var string[]
     */
    protected $otherEmail;
    /**
     * Contact social profiles
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
     * @var ContactNameModel
     */
    protected $reportsTo;
    /**
     * 
     *
     * @var bool
     */
    protected $hiringManager;
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
     * @var ContactLinks
     */
    protected $links;
    /**
     * Unique identifier for the contact
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * Unique identifier for the contact
     *
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId(int $contactId) : self
    {
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * First name
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * First name
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last name
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * Last name
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Position or job title
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * Position or job title
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Salutation/honorific/title
     *
     * @return string
     */
    public function getSalutation() : string
    {
        return $this->salutation;
    }
    /**
     * Salutation/honorific/title
     *
     * @param string $salutation
     *
     * @return self
     */
    public function setSalutation(string $salutation) : self
    {
        $this->salutation = $salutation;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUnsubscribed() : bool
    {
        return $this->unsubscribed;
    }
    /**
     * 
     *
     * @param bool $unsubscribed
     *
     * @return self
     */
    public function setUnsubscribed(bool $unsubscribed) : self
    {
        $this->unsubscribed = $unsubscribed;
        return $this;
    }
    /**
     * Primary email address
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Primary email address
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Phone number
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Phone number
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Mobile/cell number
     *
     * @return string
     */
    public function getMobile() : string
    {
        return $this->mobile;
    }
    /**
     * Mobile/cell number
     *
     * @param string $mobile
     *
     * @return self
     */
    public function setMobile(string $mobile) : self
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Contact is no longer with the company
     *
     * @return bool
     */
    public function getInactive() : bool
    {
        return $this->inactive;
    }
    /**
     * Contact is no longer with the company
     *
     * @param bool $inactive
     *
     * @return self
     */
    public function setInactive(bool $inactive) : self
    {
        $this->inactive = $inactive;
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
        $this->status = $status;
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
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyAddressModel
     */
    public function getOfficeAddress() : CompanyAddressModel
    {
        return $this->officeAddress;
    }
    /**
     * 
     *
     * @param CompanyAddressModel $officeAddress
     *
     * @return self
     */
    public function setOfficeAddress(CompanyAddressModel $officeAddress) : self
    {
        $this->officeAddress = $officeAddress;
        return $this;
    }
    /**
     * contactId from the previous company when a contact moves between companies
     *
     * @return int
     */
    public function getPreviousContactId() : int
    {
        return $this->previousContactId;
    }
    /**
     * contactId from the previous company when a contact moves between companies
     *
     * @param int $previousContactId
     *
     * @return self
     */
    public function setPreviousContactId(int $previousContactId) : self
    {
        $this->previousContactId = $previousContactId;
        return $this;
    }
    /**
     * contactId from the original/first company when a contact moves between companies
     *
     * @return int
     */
    public function getOriginalContactId() : int
    {
        return $this->originalContactId;
    }
    /**
     * contactId from the original/first company when a contact moves between companies
     *
     * @param int $originalContactId
     *
     * @return self
     */
    public function setOriginalContactId(int $originalContactId) : self
    {
        $this->originalContactId = $originalContactId;
        return $this;
    }
    /**
     * Other email addresses used by the contact
     *
     * @return string[]
     */
    public function getOtherEmail() : array
    {
        return $this->otherEmail;
    }
    /**
     * Other email addresses used by the contact
     *
     * @param string[] $otherEmail
     *
     * @return self
     */
    public function setOtherEmail(array $otherEmail) : self
    {
        $this->otherEmail = $otherEmail;
        return $this;
    }
    /**
     * Contact social profiles
     *
     * @return string[]
     */
    public function getSocial() : \ArrayObject
    {
        return $this->social;
    }
    /**
     * Contact social profiles
     *
     * @param string[] $social
     *
     * @return self
     */
    public function setSocial(\ArrayObject $social) : self
    {
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
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return ContactNameModel
     */
    public function getReportsTo() : ContactNameModel
    {
        return $this->reportsTo;
    }
    /**
     * 
     *
     * @param ContactNameModel $reportsTo
     *
     * @return self
     */
    public function setReportsTo(ContactNameModel $reportsTo) : self
    {
        $this->reportsTo = $reportsTo;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHiringManager() : bool
    {
        return $this->hiringManager;
    }
    /**
     * 
     *
     * @param bool $hiringManager
     *
     * @return self
     */
    public function setHiringManager(bool $hiringManager) : self
    {
        $this->hiringManager = $hiringManager;
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
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return ContactLinks
     */
    public function getLinks() : ContactLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ContactLinks $links
     *
     * @return self
     */
    public function setLinks(ContactLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}