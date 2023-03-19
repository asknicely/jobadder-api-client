<?php

namespace Varspool\JobAdder\V2\Model;

class InterviewEvaluationRepresentation
{
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $user;
    /**
     * 
     *
     * @var ContactNameModel
     */
    protected $contact;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * 
     *
     * @var bool
     */
    protected $hasReplied;
    /**
     * 
     *
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var InterviewEvaluationRatingModel[]
     */
    protected $rating;
    /**
     * 
     *
     * @var ModelLinks
     */
    protected $links;
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getUser() : UserNameModel
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UserNameModel $user
     *
     * @return self
     */
    public function setUser(UserNameModel $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return ContactNameModel
     */
    public function getContact() : ContactNameModel
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ContactNameModel $contact
     *
     * @return self
     */
    public function setContact(ContactNameModel $contact) : self
    {
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiresAt() : \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * 
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasReplied() : bool
    {
        return $this->hasReplied;
    }
    /**
     * 
     *
     * @param bool $hasReplied
     *
     * @return self
     */
    public function setHasReplied(bool $hasReplied) : self
    {
        $this->hasReplied = $hasReplied;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return InterviewEvaluationRatingModel[]
     */
    public function getRating() : array
    {
        return $this->rating;
    }
    /**
     * 
     *
     * @param InterviewEvaluationRatingModel[] $rating
     *
     * @return self
     */
    public function setRating(array $rating) : self
    {
        $this->rating = $rating;
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