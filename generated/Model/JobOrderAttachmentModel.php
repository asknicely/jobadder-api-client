<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderAttachmentModel
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
        $this->initialized['attachmentId'] = true;
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
        $this->initialized['type'] = true;
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
        $this->initialized['category'] = true;
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
        $this->initialized['fileName'] = true;
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
        $this->initialized['fileType'] = true;
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
        $this->initialized['expiry'] = true;
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
        $this->initialized['createdBy'] = true;
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
        $this->initialized['createdAt'] = true;
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
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}