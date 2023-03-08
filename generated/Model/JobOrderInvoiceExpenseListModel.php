<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceExpenseListModel
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
        $this->initialized['total'] = true;
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}