<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardPortalFieldValueModel
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
        $this->initialized['fieldId'] = true;
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
        $this->initialized['valueId'] = true;
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
        $this->initialized['parentValueId'] = true;
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
        $this->initialized['value'] = true;
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
        $this->initialized['externalValue'] = true;
        $this->externalValue = $externalValue;
        return $this;
    }
}