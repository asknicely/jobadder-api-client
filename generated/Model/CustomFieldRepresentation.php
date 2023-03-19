<?php

namespace Varspool\JobAdder\V2\Model;

class CustomFieldRepresentation
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
     * Field is mandatory and a value must be provided
     *
     * @var bool
     */
    protected $mandatory;
    /**
     * Maximum length of a text field
     *
     * @var int
     */
    protected $maxLength;
    /**
     * Text field can contain a multi-line value
     *
     * @var bool
     */
    protected $multiLine;
    /**
     * List field allows multiple selections
     *
     * @var bool
     */
    protected $multiSelect;
    /**
     * Available values for a list custom field
     *
     * @var string[]
     */
    protected $values;
    /**
     * 
     *
     * @var ModelLinks
     */
    protected $links;
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
     * Field is mandatory and a value must be provided
     *
     * @return bool
     */
    public function getMandatory() : bool
    {
        return $this->mandatory;
    }
    /**
     * Field is mandatory and a value must be provided
     *
     * @param bool $mandatory
     *
     * @return self
     */
    public function setMandatory(bool $mandatory) : self
    {
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * Maximum length of a text field
     *
     * @return int
     */
    public function getMaxLength() : int
    {
        return $this->maxLength;
    }
    /**
     * Maximum length of a text field
     *
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength(int $maxLength) : self
    {
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * Text field can contain a multi-line value
     *
     * @return bool
     */
    public function getMultiLine() : bool
    {
        return $this->multiLine;
    }
    /**
     * Text field can contain a multi-line value
     *
     * @param bool $multiLine
     *
     * @return self
     */
    public function setMultiLine(bool $multiLine) : self
    {
        $this->multiLine = $multiLine;
        return $this;
    }
    /**
     * List field allows multiple selections
     *
     * @return bool
     */
    public function getMultiSelect() : bool
    {
        return $this->multiSelect;
    }
    /**
     * List field allows multiple selections
     *
     * @param bool $multiSelect
     *
     * @return self
     */
    public function setMultiSelect(bool $multiSelect) : self
    {
        $this->multiSelect = $multiSelect;
        return $this;
    }
    /**
     * Available values for a list custom field
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * Available values for a list custom field
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->values = $values;
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