<?php

namespace Varspool\JobAdder\V2\Model;

class UpdatePartnerActionCommand
{
    /**
     * Menu item label that will appear to the end-user
     *
     * @var string
     */
    protected $actionName;
    /**
     * Unique partner defined reference/identifier for the action
     *
     * @var string
     */
    protected $reference;
    /**
    * URL to open after the action is selected and assigned the `"Submitted"` stage.\
    Templates parameters can be used in the URL to identify the resource submitted to the action
    <table><tr><td>`{userId}`</td><td>Replaced with the User Id of the user performing the action</td></tr><tr><td>`{jobId}`</td><td>Replaced with the Job Id</td></tr><tr><td>`{adId}`</td><td>Replaced with the Job Ad Id</td></tr><tr><td>`{candidateId}`</td><td>Replaced with the Candidate Id</td></tr><tr><td>`{applicationId}`</td><td>Replaced with the Job Application Id</td></tr><tr><td>`{placementId}`</td><td>Replaced with the Placement Id</td></tr><tr><td>`{companyId}`</td><td>Replaced with the Company Id</td></tr><tr><td>`{contactId}`</td><td>Replaced with the Contact Id</td></tr></table>
    *
    * @var string
    */
    protected $url;
    /**
     * Present `url` as either an embedded popup (`"Popup"`, the default), or open a side drawer (`"SideDrawer"`), or open a new window or tab (`"Page"`)
     *
     * @var string
     */
    protected $urlType;
    /**
     * Allow resources to be resubmitted to an action.
     *
     * @var bool
     */
    protected $allowResubmit;
    /**
     * 
     *
     * @var PartnerActionFilterModel
     */
    protected $actionFilter;
    /**
     * Additional data to include with the webhook notification
     *
     * @var mixed
     */
    protected $webhookData;
    /**
     * Menu item label that will appear to the end-user
     *
     * @return string
     */
    public function getActionName() : string
    {
        return $this->actionName;
    }
    /**
     * Menu item label that will appear to the end-user
     *
     * @param string $actionName
     *
     * @return self
     */
    public function setActionName(string $actionName) : self
    {
        $this->actionName = $actionName;
        return $this;
    }
    /**
     * Unique partner defined reference/identifier for the action
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Unique partner defined reference/identifier for the action
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
    /**
    * URL to open after the action is selected and assigned the `"Submitted"` stage.\
    Templates parameters can be used in the URL to identify the resource submitted to the action
    <table><tr><td>`{userId}`</td><td>Replaced with the User Id of the user performing the action</td></tr><tr><td>`{jobId}`</td><td>Replaced with the Job Id</td></tr><tr><td>`{adId}`</td><td>Replaced with the Job Ad Id</td></tr><tr><td>`{candidateId}`</td><td>Replaced with the Candidate Id</td></tr><tr><td>`{applicationId}`</td><td>Replaced with the Job Application Id</td></tr><tr><td>`{placementId}`</td><td>Replaced with the Placement Id</td></tr><tr><td>`{companyId}`</td><td>Replaced with the Company Id</td></tr><tr><td>`{contactId}`</td><td>Replaced with the Contact Id</td></tr></table>
    *
    * @return string
    */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
    * URL to open after the action is selected and assigned the `"Submitted"` stage.\
    Templates parameters can be used in the URL to identify the resource submitted to the action
    <table><tr><td>`{userId}`</td><td>Replaced with the User Id of the user performing the action</td></tr><tr><td>`{jobId}`</td><td>Replaced with the Job Id</td></tr><tr><td>`{adId}`</td><td>Replaced with the Job Ad Id</td></tr><tr><td>`{candidateId}`</td><td>Replaced with the Candidate Id</td></tr><tr><td>`{applicationId}`</td><td>Replaced with the Job Application Id</td></tr><tr><td>`{placementId}`</td><td>Replaced with the Placement Id</td></tr><tr><td>`{companyId}`</td><td>Replaced with the Company Id</td></tr><tr><td>`{contactId}`</td><td>Replaced with the Contact Id</td></tr></table>
    *
    * @param string $url
    *
    * @return self
    */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Present `url` as either an embedded popup (`"Popup"`, the default), or open a side drawer (`"SideDrawer"`), or open a new window or tab (`"Page"`)
     *
     * @return string
     */
    public function getUrlType() : string
    {
        return $this->urlType;
    }
    /**
     * Present `url` as either an embedded popup (`"Popup"`, the default), or open a side drawer (`"SideDrawer"`), or open a new window or tab (`"Page"`)
     *
     * @param string $urlType
     *
     * @return self
     */
    public function setUrlType(string $urlType) : self
    {
        $this->urlType = $urlType;
        return $this;
    }
    /**
     * Allow resources to be resubmitted to an action.
     *
     * @return bool
     */
    public function getAllowResubmit() : bool
    {
        return $this->allowResubmit;
    }
    /**
     * Allow resources to be resubmitted to an action.
     *
     * @param bool $allowResubmit
     *
     * @return self
     */
    public function setAllowResubmit(bool $allowResubmit) : self
    {
        $this->allowResubmit = $allowResubmit;
        return $this;
    }
    /**
     * 
     *
     * @return PartnerActionFilterModel
     */
    public function getActionFilter() : PartnerActionFilterModel
    {
        return $this->actionFilter;
    }
    /**
     * 
     *
     * @param PartnerActionFilterModel $actionFilter
     *
     * @return self
     */
    public function setActionFilter(PartnerActionFilterModel $actionFilter) : self
    {
        $this->actionFilter = $actionFilter;
        return $this;
    }
    /**
     * Additional data to include with the webhook notification
     *
     * @return mixed
     */
    public function getWebhookData()
    {
        return $this->webhookData;
    }
    /**
     * Additional data to include with the webhook notification
     *
     * @param mixed $webhookData
     *
     * @return self
     */
    public function setWebhookData($webhookData) : self
    {
        $this->webhookData = $webhookData;
        return $this;
    }
}