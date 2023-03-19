<?php

namespace Varspool\JobAdder\V2\Model;

class UserGroupLinks
{
    /**
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * Users belonging to the group
     *
     * @var string
     */
    protected $users;
    /**
     * 
     *
     * @return string
     */
    public function getSelf() : string
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * Users belonging to the group
     *
     * @return string
     */
    public function getUsers() : string
    {
        return $this->users;
    }
    /**
     * Users belonging to the group
     *
     * @param string $users
     *
     * @return self
     */
    public function setUsers(string $users) : self
    {
        $this->users = $users;
        return $this;
    }
}