<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateIdealSalaryModel
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
     * @var WorkTypeModel
     */
    protected $workType;
    /**
     * 
     *
     * @var SalaryRangeModel
     */
    protected $salary;
    /**
     * 
     *
     * @return WorkTypeModel
     */
    public function getWorkType() : WorkTypeModel
    {
        return $this->workType;
    }
    /**
     * 
     *
     * @param WorkTypeModel $workType
     *
     * @return self
     */
    public function setWorkType(WorkTypeModel $workType) : self
    {
        $this->initialized['workType'] = true;
        $this->workType = $workType;
        return $this;
    }
    /**
     * 
     *
     * @return SalaryRangeModel
     */
    public function getSalary() : SalaryRangeModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param SalaryRangeModel $salary
     *
     * @return self
     */
    public function setSalary(SalaryRangeModel $salary) : self
    {
        $this->initialized['salary'] = true;
        $this->salary = $salary;
        return $this;
    }
}