<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitRequisitionCommand
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}