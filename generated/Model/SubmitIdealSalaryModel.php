<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitIdealSalaryModel
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
    protected $workTypeId;
    /**
     * 
     *
     * @var SubmitSalaryRangeModel
     */
    protected $salary;
    /**
     * 
     *
     * @return int
     */
    public function getWorkTypeId() : int
    {
        return $this->workTypeId;
    }
    /**
     * 
     *
     * @param int $workTypeId
     *
     * @return self
     */
    public function setWorkTypeId(int $workTypeId) : self
    {
        $this->initialized['workTypeId'] = true;
        $this->workTypeId = $workTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitSalaryRangeModel
     */
    public function getSalary() : SubmitSalaryRangeModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param SubmitSalaryRangeModel $salary
     *
     * @return self
     */
    public function setSalary(SubmitSalaryRangeModel $salary) : self
    {
        $this->initialized['salary'] = true;
        $this->salary = $salary;
        return $this;
    }
}