<?php

namespace Varspool\JobAdder\V2\Model;

class SetPlacementCustomFieldListValuesCommand
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
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}