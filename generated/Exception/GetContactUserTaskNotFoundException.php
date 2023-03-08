<?php

namespace Varspool\JobAdder\V2\Exception;

class GetContactUserTaskNotFoundException extends NotFoundException
{
    /**
     * @var \Varspool\JobAdder\V2\Model\ErrorModel
     */
    private $errorModel;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Varspool\JobAdder\V2\Model\ErrorModel $errorModel, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Requested contact user task was not found');
        $this->errorModel = $errorModel;
        $this->response = $response;
    }
    public function getErrorModel() : \Varspool\JobAdder\V2\Model\ErrorModel
    {
        return $this->errorModel;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}