<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitEmploymentModel
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
     * @var SubmitCurrentEmploymentModel
     */
    protected $current;
    /**
     * 
     *
     * @var SubmitIdealEmploymentModel
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
     * @return SubmitCurrentEmploymentModel
     */
    public function getCurrent() : SubmitCurrentEmploymentModel
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param SubmitCurrentEmploymentModel $current
     *
     * @return self
     */
    public function setCurrent(SubmitCurrentEmploymentModel $current) : self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitIdealEmploymentModel
     */
    public function getIdeal() : SubmitIdealEmploymentModel
    {
        return $this->ideal;
    }
    /**
     * 
     *
     * @param SubmitIdealEmploymentModel $ideal
     *
     * @return self
     */
    public function setIdeal(SubmitIdealEmploymentModel $ideal) : self
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