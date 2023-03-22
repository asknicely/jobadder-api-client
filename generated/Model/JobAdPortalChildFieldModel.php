<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdPortalChildFieldModel
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
        $this->initialized['fieldId'] = true;
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
        $this->initialized['fieldName'] = true;
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
        $this->initialized['valueId'] = true;
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
        $this->initialized['value'] = true;
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
        $this->initialized['externalValue'] = true;
        $this->externalValue = $externalValue;
        return $this;
    }
}