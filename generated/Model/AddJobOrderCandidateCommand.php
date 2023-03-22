<?php

namespace Varspool\JobAdder\V2\Model;

class AddJobOrderCandidateCommand
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
        $this->initialized['candidateId'] = true;
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
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}