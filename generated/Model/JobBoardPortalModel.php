<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardPortalModel
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
     * @var JobBoardPortalFieldModel[]
     */
    protected $fields;
    /**
     * 
     *
     * @return JobBoardPortalFieldModel[]
     */
    public function getFields() : array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param JobBoardPortalFieldModel[] $fields
     *
     * @return self
     */
    public function setFields(array $fields) : self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
}