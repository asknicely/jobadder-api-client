<?php

namespace Varspool\JobAdder\V2\Model;

class CandidatePayrollBillingListModel
{
    /**
     * 
     *
     * @var CandidatePayrollBillingModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return CandidatePayrollBillingModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CandidatePayrollBillingModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}