<?php

namespace Varspool\JobAdder\V2\Model;

class UserMatchedByEmailModel
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
     * @var MatchedEmailAddressModel
     */
    protected $match;
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
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var bool
     */
    protected $inactive;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return MatchedEmailAddressModel
     */
    public function getMatch() : MatchedEmailAddressModel
    {
        return $this->match;
    }
    /**
     * 
     *
     * @param MatchedEmailAddressModel $match
     *
     * @return self
     */
    public function setMatch(MatchedEmailAddressModel $match) : self
    {
        $this->initialized['match'] = true;
        $this->match = $match;
        return $this;
    }
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