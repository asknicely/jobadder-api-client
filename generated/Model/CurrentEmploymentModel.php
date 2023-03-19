<?php

namespace Varspool\JobAdder\V2\Model;

class CurrentEmploymentModel
{
    /**
     * 
     *
     * @var string
     */
    protected $employer;
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
     * @var SalaryModel
     */
    protected $salary;
    /**
     * 
     *
     * @return string
     */
    public function getEmployer() : string
    {
        return $this->employer;
    }
    /**
     * 
     *
     * @param string $employer
     *
     * @return self
     */
    public function setEmployer(string $employer) : self
    {
        $this->employer = $employer;
        return $this;
    }
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
     * @return SalaryModel
     */
    public function getSalary() : SalaryModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param SalaryModel $salary
     *
     * @return self
     */
    public function setSalary(SalaryModel $salary) : self
    {
        $this->salary = $salary;
        return $this;
    }
}