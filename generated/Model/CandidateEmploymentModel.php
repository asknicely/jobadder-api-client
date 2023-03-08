<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateEmploymentModel
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
     * @var CurrentEmploymentModel
     */
    protected $current;
    /**
     * 
     *
     * @var CandidateIdealEmploymentModel
     */
    protected $ideal;
    /**
     * 
     *
     * @var CandidateEmploymentHistoryModel[]
     */
    protected $history;
    /**
     * 
     *
     * @return CurrentEmploymentModel
     */
    public function getCurrent() : CurrentEmploymentModel
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param CurrentEmploymentModel $current
     *
     * @return self
     */
    public function setCurrent(CurrentEmploymentModel $current) : self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateIdealEmploymentModel
     */
    public function getIdeal() : CandidateIdealEmploymentModel
    {
        return $this->ideal;
    }
    /**
     * 
     *
     * @param CandidateIdealEmploymentModel $ideal
     *
     * @return self
     */
    public function setIdeal(CandidateIdealEmploymentModel $ideal) : self
    {
        $this->initialized['ideal'] = true;
        $this->ideal = $ideal;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateEmploymentHistoryModel[]
     */
    public function getHistory() : array
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param CandidateEmploymentHistoryModel[] $history
     *
     * @return self
     */
    public function setHistory(array $history) : self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
}