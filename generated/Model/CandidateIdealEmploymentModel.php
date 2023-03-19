<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateIdealEmploymentModel
{
    /**
     * 
     *
     * @var string
     */
    protected $position;
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
     * @var CandidateIdealSalaryModel[]
     */
    protected $other;
    /**
     * 
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
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
    /**
     * 
     *
     * @return CandidateIdealSalaryModel[]
     */
    public function getOther() : array
    {
        return $this->other;
    }
    /**
     * 
     *
     * @param CandidateIdealSalaryModel[] $other
     *
     * @return self
     */
    public function setOther(array $other) : self
    {
        $this->other = $other;
        return $this;
    }
}