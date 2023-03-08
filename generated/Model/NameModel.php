<?php

namespace Varspool\JobAdder\V2\Model;

class NameModel
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
     * Resource name
     *
     * @var string
     */
    protected $name;
    /**
     * Resource name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Resource name
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