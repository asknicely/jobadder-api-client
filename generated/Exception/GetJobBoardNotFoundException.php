<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobBoardNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job board was not found', 404);
    }
}