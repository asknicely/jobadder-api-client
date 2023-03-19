<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardPortalFieldModel
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var JobBoardPortalFieldValueModel[]
     */
    protected $listValues;
    /**
     * 
     *
     * @var JobBoardPortalChildFieldModel[]
     */
    protected $fields;
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
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return JobBoardPortalFieldValueModel[]
     */
    public function getListValues() : array
    {
        return $this->listValues;
    }
    /**
     * 
     *
     * @param JobBoardPortalFieldValueModel[] $listValues
     *
     * @return self
     */
    public function setListValues(array $listValues) : self
    {
        $this->listValues = $listValues;
        return $this;
    }
    /**
     * 
     *
     * @return JobBoardPortalChildFieldModel[]
     */
    public function getFields() : array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param JobBoardPortalChildFieldModel[] $fields
     *
     * @return self
     */
    public function setFields(array $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
}