<?php

namespace Varspool\JobAdder\V2\Exception;

class HeadContactPhotoNotFoundException extends NotFoundException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Requested contact photo was not found');
        $this->response = $response;
    }
    public function getResponse() : ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}