<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowLinks
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
    protected $requisition;
    /**
     * 
     *
     * @return string
     */
    public function getRequisition() : string
    {
        return $this->requisition;
    }
    /**
     * 
     *
     * @param string $requisition
     *
     * @return self
     */
    public function setRequisition(string $requisition) : self
    {
        $this->initialized['requisition'] = true;
        $this->requisition = $requisition;
        return $this;
    }
}