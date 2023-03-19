<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCandidateCustomFieldListItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate custom field definition was not found', 404);
    }
}