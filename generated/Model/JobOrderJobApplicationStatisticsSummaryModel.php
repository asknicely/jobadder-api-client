<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderJobApplicationStatisticsSummaryModel
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
     * @var int
     */
    protected $new;
    /**
     * 
     *
     * @var int
     */
    protected $active;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return int
     */
    public function getNew() : int
    {
        return $this->new;
    }
    /**
     * 
     *
     * @param int $new
     *
     * @return self
     */
    public function setNew(int $new) : self
    {
        $this->initialized['new'] = true;
        $this->new = $new;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getActive() : int
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param int $active
     *
     * @return self
     */
    public function setActive(int $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}