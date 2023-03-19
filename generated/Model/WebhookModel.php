<?php

namespace Varspool\JobAdder\V2\Model;

class WebhookModel
{
    /**
     * 
     *
     * @var string
     */
    protected $webhookId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string[]
     */
    protected $events;
    /**
     * 
     *
     * @var WebhookEventFilterModel
     */
    protected $eventFilters;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $enabledAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $disabledAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $suspendedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $failedAt;
    /**
     * 
     *
     * @return string
     */
    public function getWebhookId() : string
    {
        return $this->webhookId;
    }
    /**
     * 
     *
     * @param string $webhookId
     *
     * @return self
     */
    public function setWebhookId(string $webhookId) : self
    {
        $this->webhookId = $webhookId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
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
     * 
     *
     * @return string[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param string[] $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->events = $events;
        return $this;
    }
    /**
     * 
     *
     * @return WebhookEventFilterModel
     */
    public function getEventFilters() : WebhookEventFilterModel
    {
        return $this->eventFilters;
    }
    /**
     * 
     *
     * @param WebhookEventFilterModel $eventFilters
     *
     * @return self
     */
    public function setEventFilters(WebhookEventFilterModel $eventFilters) : self
    {
        $this->eventFilters = $eventFilters;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
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
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
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
     * @return \DateTime
     */
    public function getEnabledAt() : \DateTime
    {
        return $this->enabledAt;
    }
    /**
     * 
     *
     * @param \DateTime $enabledAt
     *
     * @return self
     */
    public function setEnabledAt(\DateTime $enabledAt) : self
    {
        $this->enabledAt = $enabledAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDisabledAt() : \DateTime
    {
        return $this->disabledAt;
    }
    /**
     * 
     *
     * @param \DateTime $disabledAt
     *
     * @return self
     */
    public function setDisabledAt(\DateTime $disabledAt) : self
    {
        $this->disabledAt = $disabledAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSuspendedAt() : \DateTime
    {
        return $this->suspendedAt;
    }
    /**
     * 
     *
     * @param \DateTime $suspendedAt
     *
     * @return self
     */
    public function setSuspendedAt(\DateTime $suspendedAt) : self
    {
        $this->suspendedAt = $suspendedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getFailedAt() : \DateTime
    {
        return $this->failedAt;
    }
    /**
     * 
     *
     * @param \DateTime $failedAt
     *
     * @return self
     */
    public function setFailedAt(\DateTime $failedAt) : self
    {
        $this->failedAt = $failedAt;
        return $this;
    }
}