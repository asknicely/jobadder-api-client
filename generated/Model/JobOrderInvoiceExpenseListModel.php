<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceExpenseListModel
{
    /**
     * 
     *
     * @var float
     */
    protected $total;
    /**
     * 
     *
     * @var JobOrderInvoiceExpenseModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return float
     */
    public function getTotal() : float
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param float $total
     *
     * @return self
     */
    public function setTotal(float $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderInvoiceExpenseModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JobOrderInvoiceExpenseModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}