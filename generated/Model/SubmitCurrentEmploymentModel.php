<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCurrentEmploymentModel
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
        $this->salary = $salary;
        return $this;
    }
}