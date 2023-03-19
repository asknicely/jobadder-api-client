<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateCandidateUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Candidate user task was not found', 404);
    }
}