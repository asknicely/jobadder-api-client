<?php

namespace Varspool\JobAdder\V2\Exception;

class DeleteCandidatePhotoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Candidate was not found', 404);
    }
}