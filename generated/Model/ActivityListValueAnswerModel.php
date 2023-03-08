<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityListValueAnswerModel
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
    protected $questionId;
    /**
     * 
     *
     * @var string[]
     */
    protected $values;
    /**
     * 
     *
     * @return int
     */
    public function getQuestionId() : int
    {
        return $this->questionId;
    }
    /**
     * 
     *
     * @param int $questionId
     *
     * @return self
     */
    public function setQuestionId(int $questionId) : self
    {
        $this->initialized['questionId'] = true;
        $this->questionId = $questionId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}