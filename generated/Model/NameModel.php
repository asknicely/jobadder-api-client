<?php

namespace Varspool\JobAdder\V2\Model;

class NameModel
{
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
        $this->name = $name;
        return $this;
    }
}