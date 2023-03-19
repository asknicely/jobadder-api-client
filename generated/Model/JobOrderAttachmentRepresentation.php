<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderAttachmentRepresentation
{
    /**
     * 
     *
     * @var int
     */
    protected $attachmentId;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $category;
    /**
     * 
     *
     * @var string
     */
    protected $fileName;
    /**
     * 
     *
     * @var string
     */
    protected $fileType;
    /**
     * Optional expiry date as listed on the document, e.g. a license expiry date
     *
     * @var \DateTime
     */
    protected $expiry;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $createdBy;
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
     * @var JobOrderAttachmentLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getAttachmentId() : int
    {
        return $this->attachmentId;
    }
    /**
     * 
     *
     * @param int $attachmentId
     *
     * @return self
     */
    public function setAttachmentId(int $attachmentId) : self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }
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
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileType() : string
    {
        return $this->fileType;
    }
    /**
     * 
     *
     * @param string $fileType
     *
     * @return self
     */
    public function setFileType(string $fileType) : self
    {
        $this->fileType = $fileType;
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
        $this->expiry = $expiry;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getCreatedBy() : UserNameModel
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param UserNameModel $createdBy
     *
     * @return self
     */
    public function setCreatedBy(UserNameModel $createdBy) : self
    {
        $this->createdBy = $createdBy;
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
     * @return JobOrderAttachmentLinks
     */
    public function getLinks() : JobOrderAttachmentLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param JobOrderAttachmentLinks $links
     *
     * @return self
     */
    public function setLinks(JobOrderAttachmentLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}