<?php

namespace Varspool\JobAdder\V2\Model;

class MatchedPhoneNumberModel
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $normalized;
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
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNormalized() : string
    {
        return $this->normalized;
    }
    /**
     * 
     *
     * @param string $normalized
     *
     * @return self
     */
    public function setNormalized(string $normalized) : self
    {
        $this->normalized = $normalized;
        return $this;
    }
}