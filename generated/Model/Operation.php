<?php

namespace Varspool\JobAdder\V2\Model;

class Operation
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
     * Type of Operation, supported values: Add or Remove
     *
     * @var string
     */
    protected $op;
    /**
     * Single entity path to address, e.g. /jobs, /candidates, /applications, /placements, /companies or /contacts
     *
     * @var string
     */
    protected $path;
    /**
     * Comma separated entitiy ids, e.g. 1000, 1001, 1002
     *
     * @var int[]
     */
    protected $value;
    /**
     * Type of Operation, supported values: Add or Remove
     *
     * @return string
     */
    public function getOp() : string
    {
        return $this->op;
    }
    /**
     * Type of Operation, supported values: Add or Remove
     *
     * @param string $op
     *
     * @return self
     */
    public function setOp(string $op) : self
    {
        $this->initialized['op'] = true;
        $this->op = $op;
        return $this;
    }
    /**
     * Single entity path to address, e.g. /jobs, /candidates, /applications, /placements, /companies or /contacts
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * Single entity path to address, e.g. /jobs, /candidates, /applications, /placements, /companies or /contacts
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * Comma separated entitiy ids, e.g. 1000, 1001, 1002
     *
     * @return int[]
     */
    public function getValue() : array
    {
        return $this->value;
    }
    /**
     * Comma separated entitiy ids, e.g. 1000, 1001, 1002
     *
     * @param int[] $value
     *
     * @return self
     */
    public function setValue(array $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}