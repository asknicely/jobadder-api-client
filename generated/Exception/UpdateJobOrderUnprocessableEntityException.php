<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateJobOrderUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $errorModel;
    public function __construct(\Varspool\JobAdder\V2\Model\ErrorModel $errorModel)
    {
        parent::__construct('Validation error', 422);
        $this->errorModel = $errorModel;
    }
    public function getErrorModel()
    {
        return $this->errorModel;
    }
}