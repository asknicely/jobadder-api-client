<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementLinks
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
    protected $self;
    /**
     * Extends placement
     *
     * @var string
     */
    protected $extendsPlacement;
    /**
     * Extended by placement
     *
     * @var string
     */
    protected $extendedByPlacement;
    /**
     * Credits placement
     *
     * @var string
     */
    protected $creditsPlacement;
    /**
     * Credited by placement
     *
     * @var string
     */
    protected $creditedByPlacement;
    /**
     * Job application
     *
     * @var string
     */
    protected $application;
    /**
     * Attachments
     *
     * @var string
     */
    protected $attachments;
    /**
     * Notes
     *
     * @var string
     */
    protected $notes;
    /**
     * 
     *
     * @return string
     */
    public function getSelf() : string
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * Extends placement
     *
     * @return string
     */
    public function getExtendsPlacement() : string
    {
        return $this->extendsPlacement;
    }
    /**
     * Extends placement
     *
     * @param string $extendsPlacement
     *
     * @return self
     */
    public function setExtendsPlacement(string $extendsPlacement) : self
    {
        $this->initialized['extendsPlacement'] = true;
        $this->extendsPlacement = $extendsPlacement;
        return $this;
    }
    /**
     * Extended by placement
     *
     * @return string
     */
    public function getExtendedByPlacement() : string
    {
        return $this->extendedByPlacement;
    }
    /**
     * Extended by placement
     *
     * @param string $extendedByPlacement
     *
     * @return self
     */
    public function setExtendedByPlacement(string $extendedByPlacement) : self
    {
        $this->initialized['extendedByPlacement'] = true;
        $this->extendedByPlacement = $extendedByPlacement;
        return $this;
    }
    /**
     * Credits placement
     *
     * @return string
     */
    public function getCreditsPlacement() : string
    {
        return $this->creditsPlacement;
    }
    /**
     * Credits placement
     *
     * @param string $creditsPlacement
     *
     * @return self
     */
    public function setCreditsPlacement(string $creditsPlacement) : self
    {
        $this->initialized['creditsPlacement'] = true;
        $this->creditsPlacement = $creditsPlacement;
        return $this;
    }
    /**
     * Credited by placement
     *
     * @return string
     */
    public function getCreditedByPlacement() : string
    {
        return $this->creditedByPlacement;
    }
    /**
     * Credited by placement
     *
     * @param string $creditedByPlacement
     *
     * @return self
     */
    public function setCreditedByPlacement(string $creditedByPlacement) : self
    {
        $this->initialized['creditedByPlacement'] = true;
        $this->creditedByPlacement = $creditedByPlacement;
        return $this;
    }
    /**
     * Job application
     *
     * @return string
     */
    public function getApplication() : string
    {
        return $this->application;
    }
    /**
     * Job application
     *
     * @param string $application
     *
     * @return self
     */
    public function setApplication(string $application) : self
    {
        $this->initialized['application'] = true;
        $this->application = $application;
        return $this;
    }
    /**
     * Attachments
     *
     * @return string
     */
    public function getAttachments() : string
    {
        return $this->attachments;
    }
    /**
     * Attachments
     *
     * @param string $attachments
     *
     * @return self
     */
    public function setAttachments(string $attachments) : self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * Notes
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Notes
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes) : self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;
        return $this;
    }
}