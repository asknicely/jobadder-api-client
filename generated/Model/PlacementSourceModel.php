<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementSourceModel
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
     * The source of candidate that lead to this placement
     *
     * @var string
     */
    protected $placement;
    /**
     * The original source of the candidate
     *
     * @var string
     */
    protected $candidate;
    /**
     * The source of candidate that lead to this placement
     *
     * @return string
     */
    public function getPlacement() : string
    {
        return $this->placement;
    }
    /**
     * The source of candidate that lead to this placement
     *
     * @param string $placement
     *
     * @return self
     */
    public function setPlacement(string $placement) : self
    {
        $this->initialized['placement'] = true;
        $this->placement = $placement;
        return $this;
    }
    /**
     * The original source of the candidate
     *
     * @return string
     */
    public function getCandidate() : string
    {
        return $this->candidate;
    }
    /**
     * The original source of the candidate
     *
     * @param string $candidate
     *
     * @return self
     */
    public function setCandidate(string $candidate) : self
    {
        $this->initialized['candidate'] = true;
        $this->candidate = $candidate;
        return $this;
    }
}