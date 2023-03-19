<?php

namespace Varspool\JobAdder\V2\Exception;

class GetInterviewNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested interview was not found', 404);
    }
}