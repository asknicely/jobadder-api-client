<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderJobApplicationStatisticsSummaryModel
{
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
        $this->total = $total;
        return $this;
    }
}