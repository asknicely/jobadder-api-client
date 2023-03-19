<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobApplicationNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job application was not found', 404);
    }
}