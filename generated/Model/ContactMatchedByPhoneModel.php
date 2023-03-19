<?php

namespace Varspool\JobAdder\V2\Model;

class ContactMatchedByPhoneModel
{
    /**
     * 
     *
     * @var MatchedPhoneNumberModel
     */
    protected $match;
    /**
     * 
     *
     * @var int
     */
    protected $contactId;
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
     * @var CompanyNameMatchedPhoneNumberModel
     */
    protected $company;
    /**
     * 
     *
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastNoteAt;
    /**
     * 
     *
     * @return MatchedPhoneNumberModel
     */
    public function getMatch() : MatchedPhoneNumberModel
    {
        return $this->match;
    }
    /**
     * 
     *
     * @param MatchedPhoneNumberModel $match
     *
     * @return self
     */
    public function setMatch(MatchedPhoneNumberModel $match) : self
    {
        $this->match = $match;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * 
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
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyNameMatchedPhoneNumberModel
     */
    public function getCompany() : CompanyNameMatchedPhoneNumberModel
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param CompanyNameMatchedPhoneNumberModel $company
     *
     * @return self
     */
    public function setCompany(CompanyNameMatchedPhoneNumberModel $company) : self
    {
        $this->company = $company;
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
        $this->position = $position;
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
     * @return \DateTime
     */
    public function getLastNoteAt() : \DateTime
    {
        return $this->lastNoteAt;
    }
    /**
     * 
     *
     * @param \DateTime $lastNoteAt
     *
     * @return self
     */
    public function setLastNoteAt(\DateTime $lastNoteAt) : self
    {
        $this->lastNoteAt = $lastNoteAt;
        return $this;
    }
}