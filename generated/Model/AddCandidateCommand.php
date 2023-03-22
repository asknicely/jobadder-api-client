<?php

namespace Varspool\JobAdder\V2\Model;

class AddCandidateCommand
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
     * Candidate status
     *
     * @var int
     */
    protected $statusId;
    /**
     * 
     *
     * @var string
     */
    protected $rating;
    /**
     * Candidate source
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $seeking;
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
     * @var \DateTime
     */
    protected $dateOfBirth;
    /**
     * 
     *
     * @var string
     */
    protected $emergencyContact;
    /**
     * 
     *
     * @var string
     */
    protected $emergencyPhone;
    /**
     * 
     *
     * @var string[]
     */
    protected $social;
    /**
     * 
     *
     * @var SubmitAddressModel
     */
    protected $address;
    /**
     * 
     *
     * @var string[]
     */
    protected $skillTags;
    /**
     * 
     *
     * @var SubmitEmploymentModel
     */
    protected $employment;
    /**
     * The date the candidate is available to start. Specify ONE OF immediate, relative or date.
     *
     * @var SubmitCandidateAvailabilityModel
     */
    protected $availability;
    /**
     * 
     *
     * @var SubmitCandidateEducationModel[]
     */
    protected $education;
    /**
     * 
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $custom;
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
     * Candidate status
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * Candidate status
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
     * @return string
     */
    public function getRating() : string
    {
        return $this->rating;
    }
    /**
     * 
     *
     * @param string $rating
     *
     * @return self
     */
    public function setRating(string $rating) : self
    {
        $this->initialized['rating'] = true;
        $this->rating = $rating;
        return $this;
    }
    /**
     * Candidate source
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * Candidate source
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
     * @return string
     */
    public function getSeeking() : string
    {
        return $this->seeking;
    }
    /**
     * 
     *
     * @param string $seeking
     *
     * @return self
     */
    public function setSeeking(string $seeking) : self
    {
        $this->initialized['seeking'] = true;
        $this->seeking = $seeking;
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
     * @return \DateTime
     */
    public function getDateOfBirth() : \DateTime
    {
        return $this->dateOfBirth;
    }
    /**
     * 
     *
     * @param \DateTime $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(\DateTime $dateOfBirth) : self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmergencyContact() : string
    {
        return $this->emergencyContact;
    }
    /**
     * 
     *
     * @param string $emergencyContact
     *
     * @return self
     */
    public function setEmergencyContact(string $emergencyContact) : self
    {
        $this->initialized['emergencyContact'] = true;
        $this->emergencyContact = $emergencyContact;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmergencyPhone() : string
    {
        return $this->emergencyPhone;
    }
    /**
     * 
     *
     * @param string $emergencyPhone
     *
     * @return self
     */
    public function setEmergencyPhone(string $emergencyPhone) : self
    {
        $this->initialized['emergencyPhone'] = true;
        $this->emergencyPhone = $emergencyPhone;
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
     * @return SubmitAddressModel
     */
    public function getAddress() : SubmitAddressModel
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param SubmitAddressModel $address
     *
     * @return self
     */
    public function setAddress(SubmitAddressModel $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSkillTags() : array
    {
        return $this->skillTags;
    }
    /**
     * 
     *
     * @param string[] $skillTags
     *
     * @return self
     */
    public function setSkillTags(array $skillTags) : self
    {
        $this->initialized['skillTags'] = true;
        $this->skillTags = $skillTags;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitEmploymentModel
     */
    public function getEmployment() : SubmitEmploymentModel
    {
        return $this->employment;
    }
    /**
     * 
     *
     * @param SubmitEmploymentModel $employment
     *
     * @return self
     */
    public function setEmployment(SubmitEmploymentModel $employment) : self
    {
        $this->initialized['employment'] = true;
        $this->employment = $employment;
        return $this;
    }
    /**
     * The date the candidate is available to start. Specify ONE OF immediate, relative or date.
     *
     * @return SubmitCandidateAvailabilityModel
     */
    public function getAvailability() : SubmitCandidateAvailabilityModel
    {
        return $this->availability;
    }
    /**
     * The date the candidate is available to start. Specify ONE OF immediate, relative or date.
     *
     * @param SubmitCandidateAvailabilityModel $availability
     *
     * @return self
     */
    public function setAvailability(SubmitCandidateAvailabilityModel $availability) : self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitCandidateEducationModel[]
     */
    public function getEducation() : array
    {
        return $this->education;
    }
    /**
     * 
     *
     * @param SubmitCandidateEducationModel[] $education
     *
     * @return self
     */
    public function setEducation(array $education) : self
    {
        $this->initialized['education'] = true;
        $this->education = $education;
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