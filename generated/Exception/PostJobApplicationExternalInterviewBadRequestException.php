<?php

namespace Varspool\JobAdder\V2\Exception;

class PostJobApplicationExternalInterviewBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('BadRequest', 400);
    }
}