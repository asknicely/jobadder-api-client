<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionFormFieldModel
{
    /**
     * 
     *
     * @var int
     */
    protected $fieldID;
    /**
     * 
     *
     * @var int
     */
    protected $formID;
    /**
     * 
     *
     * @var string
     */
    protected $fieldName;
    /**
     * 
     *
     * @var bool
     */
    protected $visible;
    /**
     * 
     *
     * @var bool
     */
    protected $required;
    /**
     * 
     *
     * @return int
     */
    public function getFieldID() : int
    {
        return $this->fieldID;
    }
    /**
     * 
     *
     * @param int $fieldID
     *
     * @return self
     */
    public function setFieldID(int $fieldID) : self
    {
        $this->fieldID = $fieldID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFormID() : int
    {
        return $this->formID;
    }
    /**
     * 
     *
     * @param int $formID
     *
     * @return self
     */
    public function setFormID(int $formID) : self
    {
        $this->formID = $formID;
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
     * @return bool
     */
    public function getVisible() : bool
    {
        return $this->visible;
    }
    /**
     * 
     *
     * @param bool $visible
     *
     * @return self
     */
    public function setVisible(bool $visible) : self
    {
        $this->visible = $visible;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
}