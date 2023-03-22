<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionFormModel
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
     * @var string
     */
    protected $formName;
    /**
     * 
     *
     * @var int
     */
    protected $formID;
    /**
     * 
     *
     * @var bool
     */
    protected $default;
    /**
     * 
     *
     * @var bool
     */
    protected $deleted;
    /**
     * 
     *
     * @var RequisitionFormFieldModel[]
     */
    protected $formFields;
    /**
     * 
     *
     * @return string
     */
    public function getFormName() : string
    {
        return $this->formName;
    }
    /**
     * 
     *
     * @param string $formName
     *
     * @return self
     */
    public function setFormName(string $formName) : self
    {
        $this->initialized['formName'] = true;
        $this->formName = $formName;
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
        $this->initialized['formID'] = true;
        $this->formID = $formID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDefault() : bool
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default) : self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeleted() : bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted) : self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * 
     *
     * @return RequisitionFormFieldModel[]
     */
    public function getFormFields() : array
    {
        return $this->formFields;
    }
    /**
     * 
     *
     * @param RequisitionFormFieldModel[] $formFields
     *
     * @return self
     */
    public function setFormFields(array $formFields) : self
    {
        $this->initialized['formFields'] = true;
        $this->formFields = $formFields;
        return $this;
    }
}