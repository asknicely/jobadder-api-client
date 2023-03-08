<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitIdealEmploymentModel
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
     * @var SubmitSalaryRangeModel
     */
    protected $salary;
    /**
     * 
     *
     * @var SubmitIdealSalaryModel[]
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
    /**
     * 
     *
     * @return SubmitIdealSalaryModel[]
     */
    public function getOther() : array
    {
        return $this->other;
    }
    /**
     * 
     *
     * @param SubmitIdealSalaryModel[] $other
     *
     * @return self
     */
    public function setOther(array $other) : self
    {
        $this->initialized['other'] = true;
        $this->other = $other;
        return $this;
    }
}