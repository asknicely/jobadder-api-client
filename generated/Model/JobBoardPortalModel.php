<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardPortalModel
{
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
        $this->fields = $fields;
        return $this;
    }
}