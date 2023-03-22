<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionResultCommandModel
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
     * Optional partner score for the action result
     *
     * @var int
     */
    protected $score;
    /**
     * Optional partner defined URL for the action result
     *
     * @var string
     */
    protected $url;
    /**
     * Present `url` as either an embedded popup (`"Popup"`, the default), or open a side drawer (`"SideDrawer"`), or open a new window or tab (`"Page"`)
     *
     * @var string
     */
    protected $urlType;
    /**
     * Optional partner score for the action result
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * Optional partner score for the action result
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * Optional partner defined URL for the action result
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Optional partner defined URL for the action result
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Present `url` as either an embedded popup (`"Popup"`, the default), or open a side drawer (`"SideDrawer"`), or open a new window or tab (`"Page"`)
     *
     * @return string
     */
    public function getUrlType() : string
    {
        return $this->urlType;
    }
    /**
     * Present `url` as either an embedded popup (`"Popup"`, the default), or open a side drawer (`"SideDrawer"`), or open a new window or tab (`"Page"`)
     *
     * @param string $urlType
     *
     * @return self
     */
    public function setUrlType(string $urlType) : self
    {
        $this->initialized['urlType'] = true;
        $this->urlType = $urlType;
        return $this;
    }
}