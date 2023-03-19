<?php

namespace Varspool\JobAdder\V2\Model;

class AddJobApplicationVideoCommand
{
    /**
     * Video URL
     *
     * @var string
     */
    protected $url;
    /**
    * Optional unique reference for this video type, if specified then an existing video 
    with the same type and reference will be updated if found.
    *
    * @var string
    */
    protected $reference;
    /**
     * Video URL
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Video URL
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
    * Optional unique reference for this video type, if specified then an existing video 
    with the same type and reference will be updated if found.
    *
    * @return string
    */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
    * Optional unique reference for this video type, if specified then an existing video 
    with the same type and reference will be updated if found.
    *
    * @param string $reference
    *
    * @return self
    */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
}