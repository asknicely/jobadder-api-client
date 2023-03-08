<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateWebhookCommand
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
    protected $name;
    /**
     * 
     *
     * @var string[]
     */
    protected $events;
    /**
     * 
     *
     * @var SubmitWebhookEventFilterModel
     */
    protected $eventFilters;
    /**
     * Target URL that will listen for incoming HTTP POST notification messages.
     *
     * @var string
     */
    protected $url;
    /**
     * Optional authorization header to include with the HTTP POST notification.
     *
     * @var string
     */
    protected $authorization;
    /**
     * 
     *
     * @var string
     */
    protected $status;
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
        $this->initialized['name'] = true;
        $this->name = $name;
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
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitWebhookEventFilterModel
     */
    public function getEventFilters() : SubmitWebhookEventFilterModel
    {
        return $this->eventFilters;
    }
    /**
     * 
     *
     * @param SubmitWebhookEventFilterModel $eventFilters
     *
     * @return self
     */
    public function setEventFilters(SubmitWebhookEventFilterModel $eventFilters) : self
    {
        $this->initialized['eventFilters'] = true;
        $this->eventFilters = $eventFilters;
        return $this;
    }
    /**
     * Target URL that will listen for incoming HTTP POST notification messages.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Target URL that will listen for incoming HTTP POST notification messages.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Optional authorization header to include with the HTTP POST notification.
     *
     * @return string
     */
    public function getAuthorization() : string
    {
        return $this->authorization;
    }
    /**
     * Optional authorization header to include with the HTTP POST notification.
     *
     * @param string $authorization
     *
     * @return self
     */
    public function setAuthorization(string $authorization) : self
    {
        $this->initialized['authorization'] = true;
        $this->authorization = $authorization;
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
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}