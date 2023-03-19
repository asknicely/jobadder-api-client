<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitIdealSalaryModel
{
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
        $this->salary = $salary;
        return $this;
    }
}