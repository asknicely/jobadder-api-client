<?php

namespace Varspool\JobAdder\V2\Exception;

class PostJobApplicationExternalInterviewNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Application was not found', 404);
    }
}