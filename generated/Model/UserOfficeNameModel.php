<?php

namespace Varspool\JobAdder\V2\Model;

class UserOfficeNameModel
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
     * @var int
     */
    protected $officeId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return int
     */
    public function getOfficeId() : int
    {
        return $this->officeId;
    }
    /**
     * 
     *
     * @param int $officeId
     *
     * @return self
     */
    public function setOfficeId(int $officeId) : self
    {
        $this->initialized['officeId'] = true;
        $this->officeId = $officeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}