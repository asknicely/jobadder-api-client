<?php

namespace Varspool\JobAdder\V2\Model;

class UserLinks
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
     * 
     *
     * @var string
     */
    protected $photo;
    /**
     * Office the user belongs to
     *
     * @var string
     */
    protected $office;
    /**
     * User groups the user belongs to
     *
     * @var string
     */
    protected $userGroups;
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
     * 
     *
     * @return string
     */
    public function getPhoto() : string
    {
        return $this->photo;
    }
    /**
     * 
     *
     * @param string $photo
     *
     * @return self
     */
    public function setPhoto(string $photo) : self
    {
        $this->initialized['photo'] = true;
        $this->photo = $photo;
        return $this;
    }
    /**
     * Office the user belongs to
     *
     * @return string
     */
    public function getOffice() : string
    {
        return $this->office;
    }
    /**
     * Office the user belongs to
     *
     * @param string $office
     *
     * @return self
     */
    public function setOffice(string $office) : self
    {
        $this->initialized['office'] = true;
        $this->office = $office;
        return $this;
    }
    /**
     * User groups the user belongs to
     *
     * @return string
     */
    public function getUserGroups() : string
    {
        return $this->userGroups;
    }
    /**
     * User groups the user belongs to
     *
     * @param string $userGroups
     *
     * @return self
     */
    public function setUserGroups(string $userGroups) : self
    {
        $this->initialized['userGroups'] = true;
        $this->userGroups = $userGroups;
        return $this;
    }
}