<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdPortalChildFieldModel
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
     * @var string
     */
    protected $fieldName;
    /**
     * 
     *
     * @var int
     */
    protected $valueId;
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
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
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }
    /**
     * 
     *
     * @param string $fieldName
     *
     * @return self
     */
    public function setFieldName(string $fieldName) : self
    {
        $this->fieldName = $fieldName;
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
     * 
     *
     * @return string
     */
    public function getExternalValue() : string
    {
        return $this->externalValue;
    }
    /**
     * 
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