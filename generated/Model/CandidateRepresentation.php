<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateRepresentation
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
     * The emergency contact of the candidate
     *
     * @var string
     */
    protected $emergencyContact;
    /**
     * The emergency phone of the candidate
     *
     * @var string
     */
    protected $emergencyPhone;
    /**
     * Other email addresses used by the candidate
     *
     * @var string[]
     */
    protected $otherEmail;
    /**
     * Candidate social profiles
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
     * @var CandidateEmploymentModel
     */
    protected $employment;
    /**
     * The date the candidate is available to start. Specify ONE OF immediate, relative or date.
     *
     * @var CandidateStartModel
     */
    protected $availability;
    /**
     * 
     *
     * @var CandidateEducationModel[]
     */
    protected $education;
    /**
     * 
     *
     * @var string[]
     */
    protected $skillTags;
    /**
     * 
     *
     * @var CustomFieldValueModel[]
     */
    protected $custom;
    /**
     * 
     *
     * @var UserNameModel[]
     */
    protected $recruiters;
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
     * @var PartnerActionStageModel[]
     */
    protected $partnerActions;
    /**
     * 
     *
     * @var CandidateStatisticsModel
     */
    protected $statistics;
    /**
     * 
     *
     * @var CandidateLinks
     */
    protected $links;
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
    /**
     * The emergency contact of the candidate
     *
     * @return string
     */
    public function getEmergencyContact() : string
    {
        return $this->emergencyContact;
    }
    /**
     * The emergency contact of the candidate
     *
     * @param string $emergencyContact
     *
     * @return self
     */
    public function setEmergencyContact(string $emergencyContact) : self
    {
        $this->emergencyContact = $emergencyContact;
        return $this;
    }
    /**
     * The emergency phone of the candidate
     *
     * @return string
     */
    public function getEmergencyPhone() : string
    {
        return $this->emergencyPhone;
    }
    /**
     * The emergency phone of the candidate
     *
     * @param string $emergencyPhone
     *
     * @return self
     */
    public function setEmergencyPhone(string $emergencyPhone) : self
    {
        $this->emergencyPhone = $emergencyPhone;
        return $this;
    }
    /**
     * Other email addresses used by the candidate
     *
     * @return string[]
     */
    public function getOtherEmail() : array
    {
        return $this->otherEmail;
    }
    /**
     * Other email addresses used by the candidate
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
     * Candidate social profiles
     *
     * @return string[]
     */
    public function getSocial() : \ArrayObject
    {
        return $this->social;
    }
    /**
     * Candidate social profiles
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
     * @return CandidateEmploymentModel
     */
    public function getEmployment() : CandidateEmploymentModel
    {
        return $this->employment;
    }
    /**
     * 
     *
     * @param CandidateEmploymentModel $employment
     *
     * @return self
     */
    public function setEmployment(CandidateEmploymentModel $employment) : self
    {
        $this->employment = $employment;
        return $this;
    }
    /**
     * The date the candidate is available to start. Specify ONE OF immediate, relative or date.
     *
     * @return CandidateStartModel
     */
    public function getAvailability() : CandidateStartModel
    {
        return $this->availability;
    }
    /**
     * The date the candidate is available to start. Specify ONE OF immediate, relative or date.
     *
     * @param CandidateStartModel $availability
     *
     * @return self
     */
    public function setAvailability(CandidateStartModel $availability) : self
    {
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateEducationModel[]
     */
    public function getEducation() : array
    {
        return $this->education;
    }
    /**
     * 
     *
     * @param CandidateEducationModel[] $education
     *
     * @return self
     */
    public function setEducation(array $education) : self
    {
        $this->education = $education;
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
        $this->skillTags = $skillTags;
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
     * @return CandidateStatisticsModel
     */
    public function getStatistics() : CandidateStatisticsModel
    {
        return $this->statistics;
    }
    /**
     * 
     *
     * @param CandidateStatisticsModel $statistics
     *
     * @return self
     */
    public function setStatistics(CandidateStatisticsModel $statistics) : self
    {
        $this->statistics = $statistics;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateLinks
     */
    public function getLinks() : CandidateLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param CandidateLinks $links
     *
     * @return self
     */
    public function setLinks(CandidateLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}