<?php

namespace Varspool\JobAdder\V2\Exception;

class PostJobApplicationInternalInterviewBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('BadRequest', 400);
    }
}