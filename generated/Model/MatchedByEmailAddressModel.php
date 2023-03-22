<?php

namespace Varspool\JobAdder\V2\Model;

class MatchedByEmailAddressModel
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
     * @var CandidateMatchedByEmailModel[]
     */
    protected $candidates;
    /**
     * Top 5 most recently updated matching contacts
     *
     * @var ContactMatchedByEmailModel[]
     */
    protected $contacts;
    /**
     * Top 5 most recently updated matching users
     *
     * @var UserMatchedByEmailModel[]
     */
    protected $users;
    /**
     * Top 5 most recently updated matching candidates
     *
     * @return CandidateMatchedByEmailModel[]
     */
    public function getCandidates() : array
    {
        return $this->candidates;
    }
    /**
     * Top 5 most recently updated matching candidates
     *
     * @param CandidateMatchedByEmailModel[] $candidates
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
     * @return ContactMatchedByEmailModel[]
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * Top 5 most recently updated matching contacts
     *
     * @param ContactMatchedByEmailModel[] $contacts
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
     * Top 5 most recently updated matching users
     *
     * @return UserMatchedByEmailModel[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * Top 5 most recently updated matching users
     *
     * @param UserMatchedByEmailModel[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
}