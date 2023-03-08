<?php

namespace Varspool\JobAdder\V2\Model;

class InterviewInterviewersModel
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
     * Internal/user interviewers
     *
     * @var UserNameModel[]
     */
    protected $users;
    /**
     * External/contact interviewers
     *
     * @var ContactNameModel[]
     */
    protected $contacts;
    /**
     * Internal/user interviewers
     *
     * @return UserNameModel[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * Internal/user interviewers
     *
     * @param UserNameModel[] $users
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
     * External/contact interviewers
     *
     * @return ContactNameModel[]
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * External/contact interviewers
     *
     * @param ContactNameModel[] $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts) : self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
}