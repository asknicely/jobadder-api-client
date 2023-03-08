<?php

namespace Varspool\JobAdder\V2\Model;

class UserRepresentation
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
    protected $userId;
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
    protected $position;
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
     * 
     *
     * @var bool
     */
    protected $inactive;
    /**
     * 
     *
     * @var bool
     */
    protected $deleted;
    /**
     * 
     *
     * @var string
     */
    protected $mentionName;
    /**
     * 
     *
     * @var UserOfficeSummaryModel
     */
    protected $office;
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
     * @var string
     */
    protected $timeZone;
    /**
     * 
     *
     * @var string
     */
    protected $culture;
    /**
     * 
     *
     * @var bool
     */
    protected $admin;
    /**
     * 
     *
     * @var UserGroupSummaryModel[]
     */
    protected $userGroups;
    /**
     * 
     *
     * @var UserLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
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
     * 
     *
     * @return bool
     */
    public function getInactive() : bool
    {
        return $this->inactive;
    }
    /**
     * 
     *
     * @param bool $inactive
     *
     * @return self
     */
    public function setInactive(bool $inactive) : self
    {
        $this->initialized['inactive'] = true;
        $this->inactive = $inactive;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeleted() : bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted) : self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMentionName() : string
    {
        return $this->mentionName;
    }
    /**
     * 
     *
     * @param string $mentionName
     *
     * @return self
     */
    public function setMentionName(string $mentionName) : self
    {
        $this->initialized['mentionName'] = true;
        $this->mentionName = $mentionName;
        return $this;
    }
    /**
     * 
     *
     * @return UserOfficeSummaryModel
     */
    public function getOffice() : UserOfficeSummaryModel
    {
        return $this->office;
    }
    /**
     * 
     *
     * @param UserOfficeSummaryModel $office
     *
     * @return self
     */
    public function setOffice(UserOfficeSummaryModel $office) : self
    {
        $this->initialized['office'] = true;
        $this->office = $office;
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
     * @return string
     */
    public function getTimeZone() : string
    {
        return $this->timeZone;
    }
    /**
     * 
     *
     * @param string $timeZone
     *
     * @return self
     */
    public function setTimeZone(string $timeZone) : self
    {
        $this->initialized['timeZone'] = true;
        $this->timeZone = $timeZone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCulture() : string
    {
        return $this->culture;
    }
    /**
     * 
     *
     * @param string $culture
     *
     * @return self
     */
    public function setCulture(string $culture) : self
    {
        $this->initialized['culture'] = true;
        $this->culture = $culture;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAdmin() : bool
    {
        return $this->admin;
    }
    /**
     * 
     *
     * @param bool $admin
     *
     * @return self
     */
    public function setAdmin(bool $admin) : self
    {
        $this->initialized['admin'] = true;
        $this->admin = $admin;
        return $this;
    }
    /**
     * 
     *
     * @return UserGroupSummaryModel[]
     */
    public function getUserGroups() : array
    {
        return $this->userGroups;
    }
    /**
     * 
     *
     * @param UserGroupSummaryModel[] $userGroups
     *
     * @return self
     */
    public function setUserGroups(array $userGroups) : self
    {
        $this->initialized['userGroups'] = true;
        $this->userGroups = $userGroups;
        return $this;
    }
    /**
     * 
     *
     * @return UserLinks
     */
    public function getLinks() : UserLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param UserLinks $links
     *
     * @return self
     */
    public function setLinks(UserLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}