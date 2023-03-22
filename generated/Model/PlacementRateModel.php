<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementRateModel
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
     * @var bool
     */
    protected $default;
    /**
     * 
     *
     * @var int
     */
    protected $displayIndex;
    /**
     * 
     *
     * @var float
     */
    protected $payRate;
    /**
     * 
     *
     * @var float
     */
    protected $chargeRate;
    /**
     * 
     *
     * @var string
     */
    protected $chargeCurrency;
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
        $this->initialized['name'] = true;
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
        $this->initialized['type'] = true;
        $this->type = $type;
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
     * @return int
     */
    public function getDisplayIndex() : int
    {
        return $this->displayIndex;
    }
    /**
     * 
     *
     * @param int $displayIndex
     *
     * @return self
     */
    public function setDisplayIndex(int $displayIndex) : self
    {
        $this->initialized['displayIndex'] = true;
        $this->displayIndex = $displayIndex;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPayRate() : float
    {
        return $this->payRate;
    }
    /**
     * 
     *
     * @param float $payRate
     *
     * @return self
     */
    public function setPayRate(float $payRate) : self
    {
        $this->initialized['payRate'] = true;
        $this->payRate = $payRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getChargeRate() : float
    {
        return $this->chargeRate;
    }
    /**
     * 
     *
     * @param float $chargeRate
     *
     * @return self
     */
    public function setChargeRate(float $chargeRate) : self
    {
        $this->initialized['chargeRate'] = true;
        $this->chargeRate = $chargeRate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getChargeCurrency() : string
    {
        return $this->chargeCurrency;
    }
    /**
     * 
     *
     * @param string $chargeCurrency
     *
     * @return self
     */
    public function setChargeCurrency(string $chargeCurrency) : self
    {
        $this->initialized['chargeCurrency'] = true;
        $this->chargeCurrency = $chargeCurrency;
        return $this;
    }
}