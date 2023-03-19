<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateCandidatePhotoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Candidate was not found', 404);
    }
}