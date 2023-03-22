<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateContactConflictException extends ConflictException
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
        parent::__construct('Contact with this email already exists');
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