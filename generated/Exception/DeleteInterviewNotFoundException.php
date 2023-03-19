<?php

namespace Varspool\JobAdder\V2\Exception;

class DeleteInterviewNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Interview was not found', 404);
    }
}