<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCompanyNotFoundException extends \RuntimeException implements ClientException
{
    private $errorModel;
    public function __construct(\Varspool\JobAdder\V2\Model\ErrorModel $errorModel)
    {
        parent::__construct('Requested company was not found', 404);
        $this->errorModel = $errorModel;
    }
    public function getErrorModel()
    {
        return $this->errorModel;
    }
}