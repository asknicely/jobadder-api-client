<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobOrderStatusItemNotFoundException extends NotFoundException
{
    /**
     * @var \Varspool\JobAdder\V2\Model\StatusRepresentation
     */
    private $statusRepresentation;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Varspool\JobAdder\V2\Model\StatusRepresentation $statusRepresentation, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Requested job status definition was not found');
        $this->statusRepresentation = $statusRepresentation;
        $this->response = $response;
    }
    public function getStatusRepresentation() : \Varspool\JobAdder\V2\Model\StatusRepresentation
    {
        return $this->statusRepresentation;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}