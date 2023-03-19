<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowLinks
{
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
        $this->requisition = $requisition;
        return $this;
    }
}