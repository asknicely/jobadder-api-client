<?php

namespace Varspool\JobAdder\V2\Model;

class InterviewInterviewersModel
{
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
        $this->contacts = $contacts;
        return $this;
    }
}