<?php

namespace Varspool\JobAdder\V2\Model;

class AddContactCommand
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
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $phone;
    /**
     * 
     *
     * @var string
     */
    protected $mobile;
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
     * 
     *
     * @var string
     */
    protected $summary;
    /**
     * 
     *
     * @var string[]
     */
    protected $social;
    /**
     * 
     *
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $companyId;
    /**
     * 
     *
     * @var int
     */
    protected $reportsToContactId;
    /**
     * 
     *
     * @var string
     */
    protected $officeAddressId;
    /**
     * Contact status
     *
     * @var int
     */
    protected $statusId;
    /**
     * 
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $custom;
    /**
     * 
     *
     * @var int
     */
    protected $ownerUserId;
    /**
     * 
     *
     * @var int[]
     */
    protected $recruiterUserId;
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMobile() : string
    {
        return $this->mobile;
    }
    /**
     * 
     *
     * @param string $mobile
     *
     * @return self
     */
    public function setMobile(string $mobile) : self
    {
        $this->initialized['mobile'] = true;
        $this->mobile = $mobile;
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
        $this->initialized['salutation'] = true;
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
        $this->initialized['unsubscribed'] = true;
        $this->unsubscribed = $unsubscribed;
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
     * @return string[]
     */
    public function getSocial() : iterable
    {
        return $this->social;
    }
    /**
     * 
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
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCompanyId() : int
    {
        return $this->companyId;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getReportsToContactId() : int
    {
        return $this->reportsToContactId;
    }
    /**
     * 
     *
     * @param int $reportsToContactId
     *
     * @return self
     */
    public function setReportsToContactId(int $reportsToContactId) : self
    {
        $this->initialized['reportsToContactId'] = true;
        $this->reportsToContactId = $reportsToContactId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOfficeAddressId() : string
    {
        return $this->officeAddressId;
    }
    /**
     * 
     *
     * @param string $officeAddressId
     *
     * @return self
     */
    public function setOfficeAddressId(string $officeAddressId) : self
    {
        $this->initialized['officeAddressId'] = true;
        $this->officeAddressId = $officeAddressId;
        return $this;
    }
    /**
     * Contact status
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * Contact status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitCustomFieldValueModel[]
     */
    public function getCustom() : array
    {
        return $this->custom;
    }
    /**
     * 
     *
     * @param SubmitCustomFieldValueModel[] $custom
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
     * @return int
     */
    public function getOwnerUserId() : int
    {
        return $this->ownerUserId;
    }
    /**
     * 
     *
     * @param int $ownerUserId
     *
     * @return self
     */
    public function setOwnerUserId(int $ownerUserId) : self
    {
        $this->initialized['ownerUserId'] = true;
        $this->ownerUserId = $ownerUserId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getRecruiterUserId() : array
    {
        return $this->recruiterUserId;
    }
    /**
     * 
     *
     * @param int[] $recruiterUserId
     *
     * @return self
     */
    public function setRecruiterUserId(array $recruiterUserId) : self
    {
        $this->initialized['recruiterUserId'] = true;
        $this->recruiterUserId = $recruiterUserId;
        return $this;
    }
}