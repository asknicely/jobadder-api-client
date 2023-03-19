<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCandidateStatusListItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate status definition was not found', 404);
    }
}