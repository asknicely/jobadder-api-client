<?php

namespace Varspool\JobAdder\V2\Model;

class NoteAttachmentModel
{
    /**
     * 
     *
     * @var string
     */
    protected $attachmentId;
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
     * @return string
     */
    public function getAttachmentId() : string
    {
        return $this->attachmentId;
    }
    /**
     * 
     *
     * @param string $attachmentId
     *
     * @return self
     */
    public function setAttachmentId(string $attachmentId) : self
    {
        $this->attachmentId = $attachmentId;
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
}