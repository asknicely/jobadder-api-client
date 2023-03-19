<?php

namespace Varspool\JobAdder\V2\Exception;

class GetSubmissionNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate submission was not found', 404);
    }
}