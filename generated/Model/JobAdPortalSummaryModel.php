<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdPortalSummaryModel
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
     * Classed as a hot job
     *
     * @var bool
     */
    protected $hotJob;
    /**
     * 
     *
     * @var JobAdPortalSalaryModel
     */
    protected $salary;
    /**
     * 
     *
     * @var string
     */
    protected $template;
    /**
     * Classed as a hot job
     *
     * @return bool
     */
    public function getHotJob() : bool
    {
        return $this->hotJob;
    }
    /**
     * Classed as a hot job
     *
     * @param bool $hotJob
     *
     * @return self
     */
    public function setHotJob(bool $hotJob) : self
    {
        $this->initialized['hotJob'] = true;
        $this->hotJob = $hotJob;
        return $this;
    }
    /**
     * 
     *
     * @return JobAdPortalSalaryModel
     */
    public function getSalary() : JobAdPortalSalaryModel
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param JobAdPortalSalaryModel $salary
     *
     * @return self
     */
    public function setSalary(JobAdPortalSalaryModel $salary) : self
    {
        $this->initialized['salary'] = true;
        $this->salary = $salary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTemplate() : string
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param string $template
     *
     * @return self
     */
    public function setTemplate(string $template) : self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
}