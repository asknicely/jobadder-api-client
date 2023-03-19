<?php

namespace Varspool\JobAdder\V2\Model;

class PageLinks
{
    /**
     * 
     *
     * @var string
     */
    protected $first;
    /**
     * 
     *
     * @var string
     */
    protected $prev;
    /**
     * 
     *
     * @var string
     */
    protected $next;
    /**
     * 
     *
     * @var string
     */
    protected $last;
    /**
     * 
     *
     * @return string
     */
    public function getFirst() : string
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param string $first
     *
     * @return self
     */
    public function setFirst(string $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrev() : string
    {
        return $this->prev;
    }
    /**
     * 
     *
     * @param string $prev
     *
     * @return self
     */
    public function setPrev(string $prev) : self
    {
        $this->prev = $prev;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNext() : string
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param string $next
     *
     * @return self
     */
    public function setNext(string $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLast() : string
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param string $last
     *
     * @return self
     */
    public function setLast(string $last) : self
    {
        $this->last = $last;
        return $this;
    }
}