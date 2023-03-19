<?php

namespace Varspool\JobAdder\V2\Model;

class UserOfficeNameModel
{
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
        $this->name = $name;
        return $this;
    }
}