<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationReviewModel
{
    /**
     * 
     *
     * @var string
     */
    protected $stage;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $submittedAt;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $submittedBy;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $reviewedAt;
    /**
     * 
     *
     * @var ContactNameModel
     */
    protected $reviewedBy;
    /**
     * 
     *
     * @return string
     */
    public function getStage() : string
    {
        return $this->stage;
    }
    /**
     * 
     *
     * @param string $stage
     *
     * @return self
     */
    public function setStage(string $stage) : self
    {
        $this->stage = $stage;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSubmittedAt() : \DateTime
    {
        return $this->submittedAt;
    }
    /**
     * 
     *
     * @param \DateTime $submittedAt
     *
     * @return self
     */
    public function setSubmittedAt(\DateTime $submittedAt) : self
    {
        $this->submittedAt = $submittedAt;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getSubmittedBy() : UserNameModel
    {
        return $this->submittedBy;
    }
    /**
     * 
     *
     * @param UserNameModel $submittedBy
     *
     * @return self
     */
    public function setSubmittedBy(UserNameModel $submittedBy) : self
    {
        $this->submittedBy = $submittedBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getReviewedAt() : \DateTime
    {
        return $this->reviewedAt;
    }
    /**
     * 
     *
     * @param \DateTime $reviewedAt
     *
     * @return self
     */
    public function setReviewedAt(\DateTime $reviewedAt) : self
    {
        $this->reviewedAt = $reviewedAt;
        return $this;
    }
    /**
     * 
     *
     * @return ContactNameModel
     */
    public function getReviewedBy() : ContactNameModel
    {
        return $this->reviewedBy;
    }
    /**
     * 
     *
     * @param ContactNameModel $reviewedBy
     *
     * @return self
     */
    public function setReviewedBy(ContactNameModel $reviewedBy) : self
    {
        $this->reviewedBy = $reviewedBy;
        return $this;
    }
}