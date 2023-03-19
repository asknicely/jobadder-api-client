<?php

namespace Varspool\JobAdder\V2\Model;

class SetPlacementCustomFieldListValuesCommand
{
    /**
     * Available values for a list custom field
     *
     * @var string[]
     */
    protected $values;
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
}