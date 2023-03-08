<?php

namespace Varspool\JobAdder\V2\Model;

class MatchedByPhoneNumberModel
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
     * Top 5 most recently updated matching candidates
     *
     * @var CandidateMatchedByPhoneModel[]
     */
    protected $candidates;
    /**
     * Top 5 most recently updated matching contacts
     *
     * @var ContactMatchedByPhoneModel[]
     */
    protected $contacts;
    /**
     * Top 5 most recently updated matching companies
     *
     * @var CompanyMatchedByPhoneModel[]
     */
    protected $companies;
    /**
     * Top 5 most recently updated matching users
     *
     * @var UserMatchedByPhoneModel[]
     */
    protected $users;
    /**
     * Match quality
     *
     * @var string
     */
    protected $quality;
    /**
     * Top 5 most recently updated matching candidates
     *
     * @return CandidateMatchedByPhoneModel[]
     */
    public function getCandidates() : array
    {
        return $this->candidates;
    }
    /**
     * Top 5 most recently updated matching candidates
     *
     * @param CandidateMatchedByPhoneModel[] $candidates
     *
     * @return self
     */
    public function setCandidates(array $candidates) : self
    {
        $this->initialized['candidates'] = true;
        $this->candidates = $candidates;
        return $this;
    }
    /**
     * Top 5 most recently updated matching contacts
     *
     * @return ContactMatchedByPhoneModel[]
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * Top 5 most recently updated matching contacts
     *
     * @param ContactMatchedByPhoneModel[] $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts) : self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * Top 5 most recently updated matching companies
     *
     * @return CompanyMatchedByPhoneModel[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * Top 5 most recently updated matching companies
     *
     * @param CompanyMatchedByPhoneModel[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
    /**
     * Top 5 most recently updated matching users
     *
     * @return UserMatchedByPhoneModel[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * Top 5 most recently updated matching users
     *
     * @param UserMatchedByPhoneModel[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * Match quality
     *
     * @return string
     */
    public function getQuality() : string
    {
        return $this->quality;
    }
    /**
     * Match quality
     *
     * @param string $quality
     *
     * @return self
     */
    public function setQuality(string $quality) : self
    {
        $this->initialized['quality'] = true;
        $this->quality = $quality;
        return $this;
    }
}