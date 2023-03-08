<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateMatchedByPhoneModel
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
     * @var MatchedPhoneNumberModel
     */
    protected $match;
    /**
     * 
     *
     * @var int
     */
    protected $candidateId;
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
        $this->initialized['match'] = true;
        $this->match = $match;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCandidateId() : int
    {
        return $this->candidateId;
    }
    /**
     * 
     *
     * @param int $candidateId
     *
     * @return self
     */
    public function setCandidateId(int $candidateId) : self
    {
        $this->initialized['candidateId'] = true;
        $this->candidateId = $candidateId;
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
        $this->initialized['lastNoteAt'] = true;
        $this->lastNoteAt = $lastNoteAt;
        return $this;
    }
}