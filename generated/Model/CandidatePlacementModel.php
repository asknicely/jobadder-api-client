<?php

namespace Varspool\JobAdder\V2\Model;

class CandidatePlacementModel
{
    /**
     * Candidate Id
     *
     * @var int
     */
    protected $candidateId;
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
     * Primary email address
     *
     * @var string
     */
    protected $email;
    /**
     * Contact phone number
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
     * Preferred contact method
     *
     * @var string
     */
    protected $contactMethod;
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
     * @var AddressModel
     */
    protected $address;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $status;
    /**
     * Internal rating of the candidate
     *
     * @var string
     */
    protected $rating;
    /**
     * The source of the candidate
     *
     * @var string
     */
    protected $source;
    /**
     * Indicates whether or not the candidate is actively seeking a job.
     *
     * @var string
     */
    protected $seeking;
    /**
     * Candidate date of birth available ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @var \DateTime
     */
    protected $dateOfBirth;
    /**
     * Candidate Id
     *
     * @return int
     */
    public function getCandidateId() : int
    {
        return $this->candidateId;
    }
    /**
     * Candidate Id
     *
     * @param int $candidateId
     *
     * @return self
     */
    public function setCandidateId(int $candidateId) : self
    {
        $this->candidateId = $candidateId;
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
     * Contact phone number
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Contact phone number
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
     * Preferred contact method
     *
     * @return string
     */
    public function getContactMethod() : string
    {
        return $this->contactMethod;
    }
    /**
     * Preferred contact method
     *
     * @param string $contactMethod
     *
     * @return self
     */
    public function setContactMethod(string $contactMethod) : self
    {
        $this->contactMethod = $contactMethod;
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
     * 
     *
     * @return AddressModel
     */
    public function getAddress() : AddressModel
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param AddressModel $address
     *
     * @return self
     */
    public function setAddress(AddressModel $address) : self
    {
        $this->address = $address;
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
     * Internal rating of the candidate
     *
     * @return string
     */
    public function getRating() : string
    {
        return $this->rating;
    }
    /**
     * Internal rating of the candidate
     *
     * @param string $rating
     *
     * @return self
     */
    public function setRating(string $rating) : self
    {
        $this->rating = $rating;
        return $this;
    }
    /**
     * The source of the candidate
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The source of the candidate
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * Indicates whether or not the candidate is actively seeking a job.
     *
     * @return string
     */
    public function getSeeking() : string
    {
        return $this->seeking;
    }
    /**
     * Indicates whether or not the candidate is actively seeking a job.
     *
     * @param string $seeking
     *
     * @return self
     */
    public function setSeeking(string $seeking) : self
    {
        $this->seeking = $seeking;
        return $this;
    }
    /**
     * Candidate date of birth available ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @return \DateTime
     */
    public function getDateOfBirth() : \DateTime
    {
        return $this->dateOfBirth;
    }
    /**
     * Candidate date of birth available ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6))
     *
     * @param \DateTime $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(\DateTime $dateOfBirth) : self
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
}