<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateVideoRepresentation
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * Video URL
     *
     * @var string
     */
    protected $url;
    /**
     * Optional unique reference for this video type.
     *
     * @var string
     */
    protected $reference;
    /**
     * Date this video was added to the candidate
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date this video was last updated (updates are possible when a video is added with a Reference)
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Video URL
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Video URL
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
     * Optional unique reference for this video type.
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Optional unique reference for this video type.
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
     * Date this video was added to the candidate
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date this video was added to the candidate
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
     * Date this video was last updated (updates are possible when a video is added with a Reference)
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date this video was last updated (updates are possible when a video is added with a Reference)
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
}