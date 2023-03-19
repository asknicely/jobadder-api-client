<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardPortalFieldValueModel
{
    /**
     * 
     *
     * @var int
     */
    protected $fieldId;
    /**
     * 
     *
     * @var int
     */
    protected $valueId;
    /**
     * 
     *
     * @var int
     */
    protected $parentValueId;
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * Job board partner defined field value
     *
     * @var string
     */
    protected $externalValue;
    /**
     * 
     *
     * @return int
     */
    public function getFieldId() : int
    {
        return $this->fieldId;
    }
    /**
     * 
     *
     * @param int $fieldId
     *
     * @return self
     */
    public function setFieldId(int $fieldId) : self
    {
        $this->fieldId = $fieldId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValueId() : int
    {
        return $this->valueId;
    }
    /**
     * 
     *
     * @param int $valueId
     *
     * @return self
     */
    public function setValueId(int $valueId) : self
    {
        $this->valueId = $valueId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getParentValueId() : int
    {
        return $this->parentValueId;
    }
    /**
     * 
     *
     * @param int $parentValueId
     *
     * @return self
     */
    public function setParentValueId(int $parentValueId) : self
    {
        $this->parentValueId = $parentValueId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Job board partner defined field value
     *
     * @return string
     */
    public function getExternalValue() : string
    {
        return $this->externalValue;
    }
    /**
     * Job board partner defined field value
     *
     * @param string $externalValue
     *
     * @return self
     */
    public function setExternalValue(string $externalValue) : self
    {
        $this->externalValue = $externalValue;
        return $this;
    }
}