<?php

namespace Varspool\JobAdder\V2\Model;

class AddContactActivityCommand
{
    /**
     * 
     *
     * @var int
     */
    protected $activitySettingId;
    /**
     * 
     *
     * @var int
     */
    protected $statusId;
    /**
     * 
     *
     * @var ActivityAnswerListModel
     */
    protected $answers;
    /**
     * 
     *
     * @return int
     */
    public function getActivitySettingId() : int
    {
        return $this->activitySettingId;
    }
    /**
     * 
     *
     * @param int $activitySettingId
     *
     * @return self
     */
    public function setActivitySettingId(int $activitySettingId) : self
    {
        $this->activitySettingId = $activitySettingId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * 
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * 
     *
     * @return ActivityAnswerListModel
     */
    public function getAnswers() : ActivityAnswerListModel
    {
        return $this->answers;
    }
    /**
     * 
     *
     * @param ActivityAnswerListModel $answers
     *
     * @return self
     */
    public function setAnswers(ActivityAnswerListModel $answers) : self
    {
        $this->answers = $answers;
        return $this;
    }
}