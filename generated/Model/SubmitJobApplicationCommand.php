<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitJobApplicationCommand
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
    protected $salutation;
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
     * @var SubmitAddressModel
     */
    protected $address;
    /**
     * 
     *
     * @var string[]
     */
    protected $social;
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
     * @var string[]
     */
    protected $skillTags;
    /**
     * 
     *
     * @var SubmitScreeningQuesionResultsModel
     */
    protected $screening;
    /**
     * Candidate and job application custom field values
     *
     * @var SubmitJobApplicationCustomFieldsModel
     */
    protected $custom;
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
    public function getSalutation() : string
    {
        return $this->salutation;
    }
    /**
     * 
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
     * @return SubmitScreeningQuesionResultsModel
     */
    public function getScreening() : SubmitScreeningQuesionResultsModel
    {
        return $this->screening;
    }
    /**
     * 
     *
     * @param SubmitScreeningQuesionResultsModel $screening
     *
     * @return self
     */
    public function setScreening(SubmitScreeningQuesionResultsModel $screening) : self
    {
        $this->initialized['screening'] = true;
        $this->screening = $screening;
        return $this;
    }
    /**
     * Candidate and job application custom field values
     *
     * @return SubmitJobApplicationCustomFieldsModel
     */
    public function getCustom() : SubmitJobApplicationCustomFieldsModel
    {
        return $this->custom;
    }
    /**
     * Candidate and job application custom field values
     *
     * @param SubmitJobApplicationCustomFieldsModel $custom
     *
     * @return self
     */
    public function setCustom(SubmitJobApplicationCustomFieldsModel $custom) : self
    {
        $this->initialized['custom'] = true;
        $this->custom = $custom;
        return $this;
    }
}