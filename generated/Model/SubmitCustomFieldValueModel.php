<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCustomFieldValueModel
{
    /**
     * 
     *
     * @var int
     */
    protected $fieldId;
    /**
     * Text, List or Date ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)) value for this custom field (depending on the field `type`)
     *
     * @var mixed
     */
    protected $value;
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
     * Text, List or Date ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)) value for this custom field (depending on the field `type`)
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Text, List or Date ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)) value for this custom field (depending on the field `type`)
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->value = $value;
        return $this;
    }
}