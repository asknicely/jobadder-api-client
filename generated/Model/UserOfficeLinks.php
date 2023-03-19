<?php

namespace Varspool\JobAdder\V2\Model;

class UserOfficeLinks
{
    /**
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * Users belonging to the office
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
     * Users belonging to the office
     *
     * @return string
     */
    public function getUsers() : string
    {
        return $this->users;
    }
    /**
     * Users belonging to the office
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