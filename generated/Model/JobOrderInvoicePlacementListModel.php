<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoicePlacementListModel
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
    protected $totalPlacements;
    /**
     * 
     *
     * @var JobOrderInvoicePlacementModel[]
     */
    protected $placements;
    /**
     * 
     *
     * @return int
     */
    public function getTotalPlacements() : int
    {
        return $this->totalPlacements;
    }
    /**
     * 
     *
     * @param int $totalPlacements
     *
     * @return self
     */
    public function setTotalPlacements(int $totalPlacements) : self
    {
        $this->initialized['totalPlacements'] = true;
        $this->totalPlacements = $totalPlacements;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderInvoicePlacementModel[]
     */
    public function getPlacements() : array
    {
        return $this->placements;
    }
    /**
     * 
     *
     * @param JobOrderInvoicePlacementModel[] $placements
     *
     * @return self
     */
    public function setPlacements(array $placements) : self
    {
        $this->initialized['placements'] = true;
        $this->placements = $placements;
        return $this;
    }
}