<?php

namespace Varspool\JobAdder\V2\Model;

class UpdatePlacementAttachmentCommand
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
     * Attachment type
     *
     * @var string
     */
    protected $type;
    /**
     * Optional additional categorization for the attachment type
     *
     * @var string
     */
    protected $category;
    /**
     * Optional expiry date as listed on the document, e.g. a license expiry date
     *
     * @var \DateTime
     */
    protected $expiry;
    /**
     * Attachment type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Attachment type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Optional additional categorization for the attachment type
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * Optional additional categorization for the attachment type
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Optional expiry date as listed on the document, e.g. a license expiry date
     *
     * @return \DateTime
     */
    public function getExpiry() : \DateTime
    {
        return $this->expiry;
    }
    /**
     * Optional expiry date as listed on the document, e.g. a license expiry date
     *
     * @param \DateTime $expiry
     *
     * @return self
     */
    public function setExpiry(\DateTime $expiry) : self
    {
        $this->initialized['expiry'] = true;
        $this->expiry = $expiry;
        return $this;
    }
}