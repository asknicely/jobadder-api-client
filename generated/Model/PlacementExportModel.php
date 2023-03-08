<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementExportModel
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
     * Placement has been selected for export to a payroll service
     *
     * @var bool
     */
    protected $payroll;
    /**
     * Placement has been selected for export to a timesheet service
     *
     * @var bool
     */
    protected $timesheets;
    /**
     * Timesheet/payroll approver contacts
     *
     * @var PlacementApproverModel[]
     */
    protected $approvers;
    /**
     * Placement has been selected for export to an onboarding service
     *
     * @var bool
     */
    protected $onboarding;
    /**
     * Onboarding manager contacts
     *
     * @var PlacementApproverModel[]
     */
    protected $onboardingManagers;
    /**
     * Placement has been selected for export to a payroll service
     *
     * @return bool
     */
    public function getPayroll() : bool
    {
        return $this->payroll;
    }
    /**
     * Placement has been selected for export to a payroll service
     *
     * @param bool $payroll
     *
     * @return self
     */
    public function setPayroll(bool $payroll) : self
    {
        $this->initialized['payroll'] = true;
        $this->payroll = $payroll;
        return $this;
    }
    /**
     * Placement has been selected for export to a timesheet service
     *
     * @return bool
     */
    public function getTimesheets() : bool
    {
        return $this->timesheets;
    }
    /**
     * Placement has been selected for export to a timesheet service
     *
     * @param bool $timesheets
     *
     * @return self
     */
    public function setTimesheets(bool $timesheets) : self
    {
        $this->initialized['timesheets'] = true;
        $this->timesheets = $timesheets;
        return $this;
    }
    /**
     * Timesheet/payroll approver contacts
     *
     * @return PlacementApproverModel[]
     */
    public function getApprovers() : array
    {
        return $this->approvers;
    }
    /**
     * Timesheet/payroll approver contacts
     *
     * @param PlacementApproverModel[] $approvers
     *
     * @return self
     */
    public function setApprovers(array $approvers) : self
    {
        $this->initialized['approvers'] = true;
        $this->approvers = $approvers;
        return $this;
    }
    /**
     * Placement has been selected for export to an onboarding service
     *
     * @return bool
     */
    public function getOnboarding() : bool
    {
        return $this->onboarding;
    }
    /**
     * Placement has been selected for export to an onboarding service
     *
     * @param bool $onboarding
     *
     * @return self
     */
    public function setOnboarding(bool $onboarding) : self
    {
        $this->initialized['onboarding'] = true;
        $this->onboarding = $onboarding;
        return $this;
    }
    /**
     * Onboarding manager contacts
     *
     * @return PlacementApproverModel[]
     */
    public function getOnboardingManagers() : array
    {
        return $this->onboardingManagers;
    }
    /**
     * Onboarding manager contacts
     *
     * @param PlacementApproverModel[] $onboardingManagers
     *
     * @return self
     */
    public function setOnboardingManagers(array $onboardingManagers) : self
    {
        $this->initialized['onboardingManagers'] = true;
        $this->onboardingManagers = $onboardingManagers;
        return $this;
    }
}