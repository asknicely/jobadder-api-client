<?php

namespace Varspool\JobAdder\V2\Model;

class AddJobOrderCandidateCommand
{
    /**
     * 
     *
     * @var int[]
     */
    protected $candidateId;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @return int[]
     */
    public function getCandidateId() : array
    {
        return $this->candidateId;
    }
    /**
     * 
     *
     * @param int[] $candidateId
     *
     * @return self
     */
    public function setCandidateId(array $candidateId) : self
    {
        $this->candidateId = $candidateId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}