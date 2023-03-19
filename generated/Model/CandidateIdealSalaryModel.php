<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateIdealSalaryModel
{
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
        $this->salary = $salary;
        return $this;
    }
}