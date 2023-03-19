<?php

namespace Varspool\JobAdder\V2\Model;

class NoteTypeModel
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var NoteTypeDefaultModel
     */
    protected $default;
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
    /**
     * 
     *
     * @return NoteTypeDefaultModel
     */
    public function getDefault() : NoteTypeDefaultModel
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param NoteTypeDefaultModel $default
     *
     * @return self
     */
    public function setDefault(NoteTypeDefaultModel $default) : self
    {
        $this->default = $default;
        return $this;
    }
}