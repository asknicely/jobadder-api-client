<?php

namespace Varspool\JobAdder\V2\Model;

class NoteTypeModel
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
        $this->initialized['name'] = true;
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
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
}