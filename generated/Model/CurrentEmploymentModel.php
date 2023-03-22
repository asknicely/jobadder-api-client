<?php

namespace Varspool\JobAdder\V2\Model;

class CurrentEmploymentModel
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
        $this->initialized['employer'] = true;
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
        $this->initialized['position'] = true;
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
        $this->initialized['workType'] = true;
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
        $this->initialized['salary'] = true;
        $this->salary = $salary;
        return $this;
    }
}