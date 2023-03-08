<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCurrentEmploymentModel
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
     * @var int
     */
    protected $workTypeId;
    /**
     * 
     *
     * @var SubmitSalaryModel
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
     * @return SubmitSalaryModel
     */
    public function getSalary() : SubmitSalaryModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param SubmitSalaryModel $salary
     *
     * @return self
     */
    public function setSalary(SubmitSalaryModel $salary) : self
    {
        $this->initialized['salary'] = true;
        $this->salary = $salary;
        return $this;
    }
}