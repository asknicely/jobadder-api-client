<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionRepresentation
{
    /**
     * Unique identifier for the partner action
     *
     * @var string
     */
    protected $actionId;
    /**
     * Type of action
     *
     * @var string
     */
    protected $actionType;
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
     * URL to open after the action is selected and assigned the `"Submitted"` stage.
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
     * Additional data that will be included with the webhook notification
     *
     * @var mixed
     */
    protected $webhookData;
    /**
     * Date the partner action was added
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date the partner action was last updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var ModelLinks
     */
    protected $links;
    /**
     * Unique identifier for the partner action
     *
     * @return string
     */
    public function getActionId() : string
    {
        return $this->actionId;
    }
    /**
     * Unique identifier for the partner action
     *
     * @param string $actionId
     *
     * @return self
     */
    public function setActionId(string $actionId) : self
    {
        $this->actionId = $actionId;
        return $this;
    }
    /**
     * Type of action
     *
     * @return string
     */
    public function getActionType() : string
    {
        return $this->actionType;
    }
    /**
     * Type of action
     *
     * @param string $actionType
     *
     * @return self
     */
    public function setActionType(string $actionType) : self
    {
        $this->actionType = $actionType;
        return $this;
    }
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
     * URL to open after the action is selected and assigned the `"Submitted"` stage.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL to open after the action is selected and assigned the `"Submitted"` stage.
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
     * Additional data that will be included with the webhook notification
     *
     * @return mixed
     */
    public function getWebhookData()
    {
        return $this->webhookData;
    }
    /**
     * Additional data that will be included with the webhook notification
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
    /**
     * Date the partner action was added
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date the partner action was added
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date the partner action was last updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date the partner action was last updated
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return ModelLinks
     */
    public function getLinks() : ModelLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ModelLinks $links
     *
     * @return self
     */
    public function setLinks(ModelLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}