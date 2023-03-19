<?php

namespace Varspool\JobAdder\V2\Exception;

class HeadCandidatePhotoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate photo was not found', 404);
    }
}