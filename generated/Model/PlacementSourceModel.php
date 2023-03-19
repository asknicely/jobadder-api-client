<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementSourceModel
{
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
        $this->candidate = $candidate;
        return $this;
    }
}