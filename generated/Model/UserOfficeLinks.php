<?php

namespace Varspool\JobAdder\V2\Model;

class UserOfficeLinks
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
        $this->initialized['self'] = true;
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
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
}